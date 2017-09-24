<?php
/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup templates
 */
?>
<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
<?php
$query = new EntityFieldQuery();

$query->entityCondition('entity_type', 'node')
  ->entityCondition('bundle', 'quote')
  ->fieldCondition('field_order_id', 'value', '51', '=')
  ->range(0, 1);

$results = $query->execute();
$comment_html = '';

$author = 0;
global $user;
if ($user->uid == $node->uid){
  $author = 1;
}

foreach ($results['node'] as $result){
  $quote = node_load($result->nid);
  $comments = comment_load_multiple(comment_get_thread($quote, '', 100));
  $user = user_load($quote->uid);
  $img_url = $user->picture->uri;
  $img_url = image_style_url("thumbnail", $img_url);
  $price = $quote->field_price['und'][0]['value'] / 100;
  foreach ($comments as $comment) {
    $comment_body = $comment->comment_body['und'][0]['value'];
    $comment_html .= '<div class="message">
                        <div class="user-image">
                            <img src="'.$img_url.'"></div><div class="message-text">' . $comment_body . '</div>
                        <div class="clearfix"></div>
                    </div>';
  }

  $supplier = '<div class="line">
                    <div class="supplier-image">
                        <img src="'.$img_url.'">
                    </div>
                    <div class="right-align">
                        <div class="name">'.$quote->title.'</div>
                        <div class="supplier">'.$node->title.'</div>
                        <div class="quote">€'.$price.'</div>
                    </div>
                </div>';
}
?>
    <div class="hidden order-id"><?php print $node->nid; ?></div>
    <div class="left">
        <div class="cont">
            <h3>Your order</h3>
            <div class="info">
                <div class="line">
                    <div class="order-label">When:</div><div class="insides"> 10.02.2017 - 14.00</div>
                </div><div class="line">
                    <div class="order-label">Where:</div><div class="insides"> London - 9532C</div>
                </div>
                <div class="line">
                    <div class="order-label">What:</div><div class="insides"> <?php print $node->title; ?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="mid">
        <div class="cont">
            <div class="top-header">
                <div class="status">
                    <h3>Project status</h3>
                    <div class="status-bar status-<?php print $node->field_status['und'][0]['value']; ?>">
                        <div class="bar first">Order made</div>
                        <div class="bar second">Service confirmed</div>
                        <div class="bar last">Service paid</div>
                    </div>
                </div>

                <?php if($node->field_status['und'][0]['value'] == '0'): ?>
                <div class="leftend">
                    <div class="valid-until"><label>Offer valid until: </label>
                        <input id="validtill" type="date">
                    </div>
                    <div class="price-confirm"><label>Confirm price (Incl. Vat): </label>
                        <input id="priceconfirm" type="text">
                    </div>
                </div>
                <?php endif; ?>

                <?php if($node->field_status['und'][0]['value'] == '1' && $author): ?>
                <div class="leftend">
                    <div class="payment"><label>Payment to confirm booking:</label>
                        <label class="radio-inline"><input type="radio" name="optradio">Pay full amount of € <?php print $quote->field_price['und'][0]['value']/100; ?></label>
                        <label class="radio-inline"><input type="radio" name="optradio">Pay deposit of € <?php print $quote->field_price['und'][0]['value']/1000; ?></label>
                        <small>
                            <i class="fa fa-lock" aria-hidden="true"></i>
                            Payments secured by HTTPS and Stripe
                        </small>
                    </div>
                </div>
                <?php endif; ?>

                <div class="actions">
                  <?php if($node->field_status['und'][0]['value'] == '0' && $author == 0): ?>
                      <div class="confirm btn confirm-<?php print $node->field_status['und'][0]['value']; ?>">Confirm</div>
                  <?php endif; ?>
                  <?php if($node->field_status['und'][0]['value'] == '1' && $author): ?>
                      <div class="confirm btn confirm-<?php print $node->field_status['und'][0]['value']; ?>">Pay Now</div>
                  <?php endif; ?>
                    <?php if($node->field_status['und'][0]['value'] !== '4'): ?>
                        <a href="/developers/cancel/<?php print $node->nid; ?>"><div class="canceled btn">Cancel service</div></a>
                    <?php endif; ?>
                    <div class="cancellation-policy"><a href="/cancellation">Cancellation Policy</a></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="package">
                <div class="offer">
                    <h3><?php print $quote->title; ?></h3>
                    <div class="offer">
                        <div class="description">
                          <?php print $quote->body['und'][0]['safe_value']; ?>
                        </div>
                        <div class="pricing">
                            <div class="price"><?php print $quote->field_price['und'][0]['value']/100; ?></div>
                            <div class="currency">€</div>
                            <div class="vat">Vat. Included</div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="messaging">
                    <h3>Messages</h3>
                    <div class="old-messages">
                        <?php print $comment_html; ?>
                    </div>
                    <div class="new-message">
                        <textarea id="message"></textarea>
                        <div class="nodeid hidden"><?php print $quote->nid; ?></div>
                        <div class="actions">
                            <button class="btn send-comment">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="right">
        <div class="cont">
            <h3>Suppliers</h3>
            <div class="suppliers">
                <?php print $supplier; ?>
            </div>
        </div>
    </div>
</article>

<script>
  $=jQuery;
  $('.send-comment').click(function(){
    var newcomment = $('.old-messages');

    var saveData = {};

    saveData['nodeid'] = $('.nodeid').text();
    saveData['comment'] = $('.new-message #message').val();

    newcomment.before('<div class="message">' +
      '<div class="user-image">' + '</div>' +
    '<div class="message-text">' + saveData['comment'] + '</div> ' +
    '<div class="clearfix"></div> ' +
    '</div>');

    var data = JSON.stringify(saveData);
    $.ajax({
      url: '/developers/api/create_comment',
      type: 'post',
      data: data,
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      dataType: 'json',
      success: function (data) {
      }
    });

    parent.find('textarea').val('');
  });

  $('.confirm-0').click(function(){
    var id = $('.order-id').text();
    var timestamp = $('#validtill').val();
    var price = $('#priceconfirm').val();
    var quote_id = $('.nodeid').text();

    var saveData = {};
    saveData['nodeid'] = id;
    saveData['timestamp'] = timestamp;
    saveData['price'] = price;
    saveData['quote'] = quote_id;

    var data = JSON.stringify(saveData);
    $.ajax({
      url: '/developers/api/status_update',
      type: 'post',
      data: data,
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      dataType: 'json',
      success: function (data) {
      }
    });
    window.location.reload(false);
  });

  $('#priceconfirm').change(function(){
    var value = parseFloat($(this).val()).toFixed(2);
    $(this).val(value);
  });

  $('.confirm-1').click(function(){
    $(this).html('<a href="/developers/api/orderid/deposit/quoteid"><div class="confirm btn confirm-1">Confirm payment of 9.00€</div></a>');
    $('.payment').html('<div class="payment">' +
      '<label>Payment of 9.00€ will be processed.</label>' +
      '<div><p>You understand that your will be charged. We will hold your money in escrow until the supplier has done their work.</p>' +
      '<p>We make sure that they will do what they are promising.</p></div>' +
      ' <small> <i class="fa fa-lock" aria-hidden="true"></i>Payments secured by HTTPS and Stripe </small>' +
      ' </div>');
  });


</script>