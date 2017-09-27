<h2>
  Selling your services
</h2>

<div class="order-flow">
    <?php print format_businesses(); ?>

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
    .right-col li {
      list-style: none;
      border: 1px solid;
      text-align: left;
      padding-top: 70px;
      padding-bottom: 70px;
      max-width: 100%;
      margin-bottom: 40px;
      background: #1b1e2e;
      color: white;
      font-size: 20px;
      padding-left: 30px;
    }
    .right-col li:hover {
      opacity: 0.8;
      cursor: pointer;
    }
  </style>
  <script>
    $=jQuery;
    $('#edit-field-business-tags-und-0-value').tagsInput();
  </script>