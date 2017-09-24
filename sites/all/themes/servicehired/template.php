<?php
/**
 * @file
 * The primary PHP file for this theme.
 */


function servicehired_preprocess_html(&$variables) {
  // Create a dedicated attributes array for the BODY element.
  if (!isset($variables['servicehired_logged'])) {
    global $user;
    if($user->roles[2] == 'authenticated user') {
      $variables['servicehired_logged'] = 'logged';
    } else {
      $variables['servicehired_logged'] = 'anon';
    }
  }
}