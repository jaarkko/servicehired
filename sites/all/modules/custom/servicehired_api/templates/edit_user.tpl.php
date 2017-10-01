<div class="">
  <?php
  global $user;
  module_load_include('inc', 'user', 'user.pages');
  print drupal_render(drupal_get_form('user_profile_form', $user));
   ?>
</div>
<style>
    form#user-profile-form {
        max-width: 800px;
        margin: 0 auto;
        border: 1px solid #cacaca;
        border-radius: 5px;
        padding: 25px;
        background: #fbfbfb;
    }
</style>