<?php

// This function removes line items.
function inventshift_order_create() {

  // Get data from ajax post.
  $postdata = file_get_contents("php://input");
  // Decode data.

  ddl($postdata);
}

