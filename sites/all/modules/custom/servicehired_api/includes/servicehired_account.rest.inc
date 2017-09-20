<?php

// This function removes line items.
function servicehired_order_create() {

  // Get data from ajax post.
  $postdata = file_get_contents("php://input");
  // Decode data.

  $first_name = $_POST["cardholder-first-name"];
  $last_name = $_POST["cardholder-last-name"];
  $email = $_POST["cardholder-email"];
  $token = $_POST["token"];

  create_customer($first_name, $last_name, $token, $email);

  drupal_goto('/user');
}

