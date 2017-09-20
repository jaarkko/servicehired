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

function create_customer($first_name, $last_name, $token, $email) {
  // Token needs to be set.
  if ($token !== '') {
    // Check if user exists via Email.
    $user = user_load_by_mail($email);
    // If user doesnt exist.
    if ($user->uid == 0) {
      // Create a customer in Stripe.
      $customer = array(
        'email' => $email,
        'source' => $token
      );

      $call = stripe_api_call('Customer', 'Create', $customer);

      // Decode response from Stripe.
      $account_json = $call->__toJSON();
      $account_array = json_decode($account_json);

      $new_user = array(
        'name' => $first_name . ' ' . $last_name,
        'mail' => $email,
        'pass' => $email,
        'status' => 1,
        'field_stripe_customer_token' => array(LANGUAGE_NONE => array(array('value' => $account_array->id))),
        'access' => REQUEST_TIME,
        'roles' => array(),
      );

      $new_user = user_save(NULL, $new_user);

      $uid = user_authenticate($first_name . ' ' . $last_name, $email);
      $user = user_load($uid);
      $form_state = array();
      $form_state['uid'] = $uid;
      user_login_submit(array(), $form_state);
    }
    else {
      // User already exists.
    }
  }

}
