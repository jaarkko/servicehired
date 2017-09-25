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
  $package = $_POST["package"];

  $order = node_load($package);
  $offer = node_load($order->field_supplier_id['und'][0]['value']);
  
  $uid = create_customer($first_name, $last_name, $token, $email);

  create_order($offer->title, $uid);

  drupal_goto('/dash');
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

      return $uid;
    }
    else {
      // User already exists.
    }
  }
}

function create_order($order_title, $uid) {
  $node = new stdClass();
  $node->type = 'order';
  $node->language = LANGUAGE_NONE;
  node_object_prepare($node);

  $node->title = $order_title;
  $node->status = 1;
  $node->promote = 0;
  $node->sticky = 0;
  $node->comment = 2;
  $node->uid = $uid;

  // Save the node
  node_save($node);
}

function servicehired_payment (){
  $order_id = arg(3);
  $type = arg(4);
  $quote_id = arg(5);

  $order = node_load($order_id);
  $quote = node_load($quote_id);
  global $user;
  $users = user_load($user->uid);
  $stripe_token = $users->field_stripe_customer_token['und'][0]['value'];

  if ($type == 1) {
    $payment_amount = (int)$quote->field_price['und'][0]['value'];
    $payment_amount = $payment_amount*100;
  } else {
    $payment_amount = (int)$quote->field_price['und'][0]['value']/10*20;
  }

  // Create a charge in Stripe.
  $charge = array(
    'amount' => $payment_amount,
    'currency' => 'eur',
    'customer' => $stripe_token,
    'description' => 'Charge for '. $user->mail .' of '. $order->title
  );

  $call = stripe_api_call('Charge', 'Create', $charge);

  // Decode response from Stripe.
  $account_json = $call->__toJSON();
  $account_array = json_decode($account_json);

  create_comment($quote_id,$user,'User has just paid the deposit');

  $status = $order->field_status['und'][0]['value'] + 1;
  $order->field_status['und'][0]['value'] = $status;

  node_save($order);

  drupal_goto('node/'.$order_id);
}

function servicehired_update_status(){
  // Get data from ajax post.
  $postdata = file_get_contents("php://input");

  // Decode data.
  $data = json_decode($postdata, true);

  ddl($data);

  $node_id = $data['nodeid'];
  $time = $data['timestamp'];
  $price = $data['price'];
  $quote_id = $data['quote'];

  $node = node_load($node_id);

  $quote = node_load($quote_id);

  if ($node->field_status['und'][0]['value'] === '0') {
    $quote->field_valid_until['und'][0]['value'] = $time;
    $quote->field_price['und'][0]['value'] = $price;
    node_save($quote);
  }

  $status = $node->field_status['und'][0]['value'] + 1;
  $node->field_status['und'][0]['value'] = $status;
  node_save($node);
}

// Helper to create comment.
function create_comment($nid,$user,$text){
  $comment = new stdClass();
  $comment->nid = $nid;
  $comment->cid = 0;
  $comment->pid = 0;
  $comment->uid = $user->uid;
  $comment->mail = $user->mail;
  $comment->name = $user->name;
  $comment->created = time();
  $comment->is_anonymous = 0;
  $comment->status = COMMENT_PUBLISHED;
  $comment->language = LANGUAGE_NONE;
  $comment->comment_body['und'][0]['value'] = $text;
  $comment->comment_body['und'][0]['format'] = 'plain_text';
  comment_save($comment);
}

function servicehired_cancel(){
    // Cancellation function.
    $nid = arg(2);
    $node = node_load($nid);
    $node->field_status['und'][0]['value'] = '4';
    node_save($node);
    drupal_goto('node/'.$nid);
}

function servicehired_create_comment(){
  // Get data from ajax post.
  $postdata = file_get_contents("php://input");

  // Decode data.
  $data = json_decode($postdata, true);

  $node_id = $data['nodeid'];
  $commenttext = $data['comment'];

  global $user;

  $comment = new stdClass();
  $comment->nid = $node_id;
  $comment->cid = 0;
  $comment->pid = 0;
  $comment->uid = $user->uid;
  $comment->mail = $user->mail;
  $comment->name = $user->name;
  $comment->created = time();
  $comment->is_anonymous = 0;
  $comment->status = COMMENT_PUBLISHED;
  $comment->language = LANGUAGE_NONE;
  $comment->subject = 'Comment subject';
  $comment->comment_body['und'][0]['value'] = $commenttext;
  $comment->comment_body['und'][0]['format'] = 'plain_text';
  comment_save($comment);
}