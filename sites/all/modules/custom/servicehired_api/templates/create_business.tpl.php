<h2>
  Add your business
</h2>

<div class="order-flow">
    <div class="left-col">
        <h3>Tips for the best profile</h3>

        <p>We need your business details so we can send customers your way, and can verify that you are a real business. This allows our thousands
            of visitors to see and find you. .</p>

        <h4>1. Use high quality images</h4>

        <p>The better the images, the more the sales. We have seen that people are drawn to nice colorful pictures. Remember this when adding your profile.</p>

        <h4>2. Create a long description</h4>

        <p>A long description (not just two sentences) will be able to help people to find your content, as our search is based on it. Also, it helps the customer to make an educated decision.</p>

        <h4>3. Add many specific tags</h4>

        <p>The better the tags, the more the sales. If you want to be found with odd keywords, remember to add all these in, as our search is based on them.</p>

    </div>
    <div class="right-col">
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
    .left-col .tabbable {
        display: none;
    }
    div#edit-field-agree-to-terms-and-conditi {
        clear: both;
    }
    .form-textarea {
        max-height: 100px;
    }
    .filter-wrapper,.help-block {
        display: none;
    }
    .control-label {
        font-size: 18px;
        margin-bottom: 10px;
        font-weight: 400;
    }
    .required-fields {
        margin: 20px 0px;
        display: block;
        background: #f9f9f9;
        padding: 5px 20px 20px 20px;
        border-radius: 5px;
        color: #1c2232;
        width: 46%;
        float: left;
        margin-right: 3%;
        height: 556px;
        border: 1px solid #d2d2d2;
    }
</style>
<script>
    $=jQuery;
  $('#edit-field-business-tags-und-0-value').tagsInput();
</script>