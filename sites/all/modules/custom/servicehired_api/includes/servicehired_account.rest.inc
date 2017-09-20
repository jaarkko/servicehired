<?php

// This function removes line items.
function servicehired_order_create() {

  // Get data from ajax post.
  $postdata = file_get_contents("php://input");
  // Decode data.
  $data = json_decode($postdata, true);

  ddl($data);

  //create_customer($first_name, $last_name, $token, $email);

  //ddl($postdata);
}

