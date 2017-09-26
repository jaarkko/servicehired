<h2>
  Start selling on Servicehired.com
</h2>

<div class="order-flow">
    <div class="left-col"><h3>How does Servicehired work?</h3>
        <p>Write a story here.</p>
    </div>
    <div class="right-col">
  <h3>Start selling now</h3>
    <div class="btn btn-change">Add your business</div>
    </div>
</div>

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
