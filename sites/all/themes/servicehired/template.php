<?php
/**
 * @file
 * The primary PHP file for this theme.
 */


function servicehired_preprocess_html(&$variables) {
  // Create a dedicated attributes array for the BODY element.
  global $user;

  ddl($user);
  if($user->roles[2] == 'authenticated user') {
    $variables['servicehired_logged'] = 'logged';
  } else {
    $variables['servicehired_logged'] = 'anon';
  }
  ddl($variables['servicehired_logged']);
}