<h2>
  Start selling on Servicehired.com
</h2>

<div class="order-flow">
    <div class="left-col"><h3>How does Servicehired work?</h3>
        <p>1. Lets start with the basics</p>
        <p>We want your business details. This allows our thousands
        of visitors to see and find you. Make sure to add a few
        high quality images.</p>
    </div>
    <div class="right-col">
  <h3>Add your business</h3>


      <?php
      global $user;
      module_load_include('inc', 'node', 'node.pages');
      $node = (object) array(
        'uid' => $user->uid,
        'name' => (isset($user->name) ? $user->name : ''),
        'type' => 'supplier',
        'language' => LANGUAGE_NONE,
      );
      $form = drupal_get_form('supplier_node_form', $node);

      print drupal_render($form)
      ?>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.6/jquery.tagsinput.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.6/jquery.tagsinput.min.js"></script>
<style>
    .left-col, .right-col {
        width: 50%;
        float: left;
        padding-right: 10%;
    }
    .right-col .tabbable {
        display: none;
    }
    .form-textarea {
        max-height: 100px;
    }
    .filter-wrapper,.help-block {
        display: none;
    }
</style>
<script>
    $=jQuery;
  $('#edit-field-business-tags-und-0-value').tagsInput();
</script>