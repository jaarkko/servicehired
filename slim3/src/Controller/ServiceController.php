<?php

namespace App\Controller;

use Slim\Http\Request as Request;
use Slim\Http\Response as Response;

class ServiceController
{
    private $countries_json = 'http://country.io/names.json';
    private $files_path = 'sites/default/files/';
    private $db;

    private $view;

    public function __construct(\PDO $db, $view)
    {
        $this->db = $db;
        $this->view = $view;
    }

    /**
     * List countries
     *
     * @param \Slim\Http\Request  $request
     * @param \Slim\Http\Response $response
     * @param                     $args
     *
     * @return \Slim\Http\Response
     */
    public function countries(Request $request, Response $response, $args)
    {
        $sql = "SELECT DISTINCT(field_location_country) as country FROM field_data_field_location";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute();
        $countries = [];

        if ($result) {
            $rows = $stmt->fetchAll();
            foreach ($rows as $row) {
                $country = $this->tech($row['country']);
                $countries[$country] = $this->getCountryName($row['country']);
            }
        }

        return $this->view->render($response, 'countries.html', [
            'countries' => $countries,
            'uri' => $request->getUri(),
        ]);
    }

    /**
     * List cities by country
     *
     * @param \Slim\Http\Request  $request
     * @param \Slim\Http\Response $response
     * @param                     $args
     *
     * @return \Slim\Http\Response
     */
    public function citiesByCountry(Request $request, Response $response, $args)
    {
        $country = $request->getAttribute('country');
        $cities = $this->getCities($country);
        $letters = array_keys($cities);

        return $this->view->render($response, 'country.html', [
            'country' => $country,
            'country_name' => $this->getCountryName($country),
            'cities' => $cities,
            'letters' => $letters,
            'uri' => $request->getUri(),
        ]);
    }

    /**
     * List categories with country, city and industry
     *
     * @param \Slim\Http\Request  $request
     * @param \Slim\Http\Response $response
     * @param                     $args
     *
     * @return \Slim\Http\Response
     */
    public function categories(Request $request, Response $response, $args)
    {
        $country = $request->getAttribute('country');
        $city = $request->getAttribute('city');
        $categories = $this->getCategories();
        $letters = array_keys($categories);

        return $this->view->render($response, 'city.html', [
            'country' => $country,
            'country_name' => $this->getCountryName($country),
            'city' => $city,
            'city_name' => $this->getCityName($city, $country),
            'service' => $request->getAttribute('service'),
            'categories' => $categories,
            'letters' => $letters,
            'uri' => $request->getUri(),
        ]);
    }

    /**
     * List categories with country, city and industry
     *
     * @param \Slim\Http\Request  $request
     * @param \Slim\Http\Response $response
     * @param                     $args
     *
     * @return \Slim\Http\Response
     */
    public function services(Request $request, Response $response, $args)
    {
        $country = $request->getAttribute('country');
        $category_name = $request->getAttribute('category');
        $city = $request->getAttribute('city');

        return $this->view->render($response, 'service.html', [
            'country' => $country,
            'country_name' => $this->getCountryName($country),
            'city' => $city,
            'city_name' => $this->getCityName($city, $country),
            'category' => $category_name,
            'category_name' => $this->getCategoryName($category_name),
            'uri' => $request->getUri(),
        ]);
    }

    private function tech($string)
    {
        $string = strtolower($string);
        $string = str_replace(' ', '-', $string);
        return $string;
    }

    private function getCategories()
    {
        $file = $this->files_path . 'service_categories.json';
        $sql = "SELECT name FROM taxonomy_term_data WHERE vid = :vid";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute(["vid" => 2]);
        $categories = [];

        if ($result) {
            $rows = $stmt->fetchAll();
            foreach ($rows as $row) {
                $name = $row['name'];
                $letter = strtolower(substr($name, 0, 1));
                $categories[$letter][$this->tech($name)] = $name;
            }
        }

        if (!file_exists($file)) {
            $contents = json_encode($categories);
            file_put_contents($file, $contents);
        }

        return $categories;
    }

    private function getCategoryName($tech)
    {
        $categories = $this->getCategories();
        return $categories[$tech];
    }

    private function getCities($country)
    {
        $file = $this->files_path . 'cities_'. $country .'.json';
        $sql = "SELECT DISTINCT(field_location_locality) as city FROM field_data_field_location WHERE field_location_country = :country";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute(["country" => $country]);
        $cities = [];

        if ($result) {
            $rows = $stmt->fetchAll();
            foreach ($rows as $row) {
                $name = $row['city'];
                if ($name != '') {
                    $letter = strtolower(substr($name, 0, 1));
                    $cities[$letter][$this->tech($name)] = $name;
                }
            }
        }

        if (!file_exists($file)) {
            $contents = json_encode($cities);
            file_put_contents($file, $contents);
        }

        return $cities;
    }

    private function getCityName($city, $country)
    {
        $cities = $this->getCities($country);
        $letter = strtolower(substr($city, 0, 1));
        return $cities[$letter][$city];
    } 

    private function getCountryName($country)
    {
        $file = $this->files_path . 'country_names.json';

        if (!file_exists($file)) {
            $contents = file_get_contents($this->countries_json);
            file_put_contents($file, $contents);
        }

        $names = json_decode(file_get_contents($file), true);
        return $names[strtoupper($country)];
    }
}
