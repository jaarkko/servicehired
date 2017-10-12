<?php

namespace App\Controller;

use Slim\Http\Request as Request;
use Slim\Http\Response as Response;

class ServiceController
{
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
        $sql = "SELECT DISTINCT(field_location_locality) as city FROM field_data_field_location WHERE field_location_country = :country";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute(["country" => $country]);
        $cities = [];

        if ($result) {
            $rows = $stmt->fetchAll();
            foreach ($rows as $row) {
                $city = $this->tech($row['city']);
                $cities[$city] = $row['city'];
            }
        }

        return $this->view->render($response, 'country.html', [
            'country' => $country,
            'country_name' => $this->getCountryName($country),
            'cities' => $cities,
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
        $sql = "SELECT name FROM taxonomy_term_data WHERE vid = :vid";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute(["vid" => 2]);
        $categories = [];

        if ($result) {
            $rows = $stmt->fetchAll();
            foreach ($rows as $row) {
                $category = $this->tech($row['name']);
                $categories[$category] = $row['name'];
            }
        }

        $country = $request->getAttribute('country');

        return $this->view->render($response, 'city.html', [
            'country' => $country,
            'country_name' => $this->getCountryName($country),
            'city' => $request->getAttribute('city'),
            'service' => $request->getAttribute('service'),
            'categories' => $categories,
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

        return $this->view->render($response, 'service.html', [
            'country' => $country,
            'country_name' => $this->getCountryName($country),
            'city' => $request->getAttribute('city'),
            'category' => $request->getAttribute('category'),
            'uri' => $request->getUri(),
        ]);
    }

    private function tech($string)
    {
        $string = strtolower($string);
        $string = str_replace(' ', '-', $string);
        return $string;
    }

    private function getCountryName($country)
    {
        $file = 'sites/default/files/country_names.json';

        if (!file_exists($file)) {
            $contents = file_get_contents("http://country.io/names.json");
            file_put_contents($file, $contents);
        }

        $names = json_decode(file_get_contents($file), true);
        return $names[strtoupper($country)];
    }
}
