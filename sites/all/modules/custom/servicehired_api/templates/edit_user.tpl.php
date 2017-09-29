<div class="">
  <?php
  global $user;
  module_load_include('inc', 'user', 'user.pages');
  print drupal_render(drupal_get_form('user_profile_form', $user));
   ?>
</div>