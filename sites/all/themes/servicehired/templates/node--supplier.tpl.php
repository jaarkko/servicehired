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
    <div class="overflow">
        <div class="inside">
            <div class="overflow-left">
                <div class="image">
                  <?php
                  $img_url = $node->field_business_profile_image['und'][0]['uri'];
                  print '<img src="'. image_style_url("carousel-front", $img_url).'" />';
                  ?>
                </div>
            </div>
            <div class="overflow-right">
              <?php ddl($node); ?>
                <div class="title">
                    <h1><?php print $node->title; ?></h1>
                </div>
                <div class="desc">
                    <p><?php print $node->body['und'][0]['value']; ?></p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="down">
        <a class="button btn btn-primary" href="/create-product/<?php print $node->nid; ?>">Create a product</a>
        <?php print format_supplier_products($node->nid); ?>
    </div>
    <style>
        a.btn-primary {
            display: block;
            margin-left:15px;
        }
        footer li a {
            text-decoration: none;
            font-size: 0.8em !important;
        }
        li.small {
            font-size: 13px;
            font-weight: lighter;
        }
        .col-sm-3:first-child {
            padding: 15px 0;
        }
        body {
            font-family: 'Rubik', sans-serif;
        }
        h1 {
            font-weight: 500;
        }
        h2 {
            font-weight: 400;
        }
        h3 {
            font-weight: 400;
        }
        .open .close {
            position: absolute;
            top: 30px;
            right: 30px;
            font-size: 28px;
            height: 30px;
            width: 30px;
            background: #f04e23;
            color: white;
            font-size: 23px;
            text-align: center;
            cursor: pointer;
            border-radius: 50px;
        }
        .leftmenu {
            position: absolute;
            top: 15px;
            left: 15px;
        }
        .rightmenu {
            position: absolute;
            top: 15px;
            right: 15px;
        }
        .overthefold a {
            color: white;
            text-decoration: none;
        }
        .bottom-menu {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: rgba(255,255,255,0.1);
        }
        .logo {
            max-height: 15vh;
        }
        .search-buttons .btn {
            background: #f04e23;
            border-radius: 0;
            padding: 11px 80px;
            margin-top: 20px;
            border-radius: 5px;
        }
        .search-buttons .btn:hover {
            background: #f04e23;
        }
        .bottom-menu li, .selection-category li {
            list-style: none;
            display: inline;
            padding: 0 30px;

        }
        .selection-category li {
            border-radius: 5px;
        }
        .aa-input-container {
            display: none;
        }
        .two-boxes {
            max-width: 720px;
            margin: 20px auto;
        }
        .box-search {
            display: inline-block;
            float: left;
            position: relative;
        }
        .aa-input-container {
            display: inline-block;
            position: relative; }

        .box-search input {
            width: 100%;
            border: 1px solid rgba(228, 228, 228, 0.6);
            padding: 10px 30px 10px 15px;
            box-sizing: border-box;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            font-family: 'Rubik', sans-serif;
            font-size: 15px;
            border-radius: 5px;
        }
        .text {
            position: relative;
        }
        .arrow-left {
            width: 46px;
            height: 63px;
            vertical-align: middle;
            background: rgba(0,0,0,0.2);
            padding-top: 100px;
            position: absolute;
            display: none;

        }
        .arrow-right {
            width: 46px;
            height: 130px;
            vertical-align: middle;
            background: rgba(0,0,0,0.2);
            padding-top: 100px;
            position: absolute;
            right: 0;
        }

        .arrow-right:hover, .arrow-left:hover{
            background: rgba(0,0,0,0.8);

        }

        span.business, span.product {
            font-size: 0.7em;
            clear: both;
            width: 100%;
            display: block;
        }
        span.product {
            font-size: 1em;
        }
        .hidden {
            display: none;
        }
        .pricing {
            float: left;
            padding-right: 5px;
        }
        .open .pricing {
            float: unset;
            padding-right: 0px;
        }
        span.vat {
            display: none;
        }
        .open span.vat {
            display: block;
        }
        .price {
            float: right;
            padding-right: 5px;
            font-weight: bold;
        }
        span.currency {
            font-size: 0.9em;
            padding-right: 1px;
        }
        a.listyourbusiness {
            background: #f04e23;
            padding: 7px 17px;
            margin-right: 10px;
            font-size: 0.9em;
            border-radius: 5px;
        }
        .selection-category li.active a {
            background: white;
            color: #191F33;
            display: block;
        }
        .aa-dropdown-menu {
            color: black;
            text-align: left;
        }
        span.algolia-autocomplete {
            display: block !important;
        }
        .box-left, .box-right {
            width: calc(50% - 15px);
        }
        .box-left {
            margin-right: 15px;
        }
        .box-right {
            margin-left: 15px;
        }

        li.box .text {
            background: #0097ab;
            height: 230px;
            width: 100%;
            cursor: pointer;
        }

        li.box {
            height: 270px;
            margin: 20px 0;
            display: inline-block;
            vertical-align: top;
            color: white;
            text-transform: uppercase;
            font-family: helvetica;
            font-size: 19px;
            text-align: center;
            background: none;
            padding: 0 15px;
            position: relative;
            width: 31%;
            float: left;
        }

        .marketing.row {
            max-width: 1400px;
            margin: 0 auto;
        }
        .col-md-12.text-right.showing {
            text-align: right;
            padding: 25px;
            padding-bottom: 0;
            font-family: 'Rubik', sans-serif;
        }
        ul#searchinsides:after {
            content: ' ';
            width: 10px;
            height: 10px;
            display: block;
            clear: both;
        }

        ul#searchinsides {
            padding-top: 0;
            margin-top: -15px;
            padding-left: 0;
        }
        li.box.open {
            width: 100%;
            height: 500px;
            max-width: 1365px;
        }
        li.box.open .text {
            float: left;
            width: 50%;
            height: 484px;
        }
        li.box .text {
            background-size: cover !important;
        }
        li.box .text {
            background: #0097ab;
            height: 230px;
            width: 100%;
            cursor: pointer;
        }
        .text .inside {
            position: absolute;
            padding: 15px 15px 15px 15px;
            text-align: left;
            margin: 0;
            min-height: 0;
            text-transform: capitalize;
            background: rgba(0, 0, 0, 0.5);
            max-width: 67%;
            bottom: 0;
        }

        span.hidden.title {
            display: none;
        }

        .open span.hidden.title {
            display: block;
        }

        .description {
            color: black;
            text-align: left;
            text-transform: none;
            padding: 11px 15px;
            height: 26px;
            overflow: hidden;
            font-size: 16px;
        }
        .open .description {
            height: calc(100% - 40px);
            background: #f7f7f7;
            border: 1px solid #d1d1d1;
        }
        .btn {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
            background-color: lightblue;
        }
        input {
            border-radius: 5px;
        }
        .open span.title {
            width: 100%;
            display: block;
            font-size: 22px;
            padding: 0px 0 5px 0;
            font-weight: bold;
            border-bottom: 1px solid #f04e23;
            margin-bottom: 15px;
        }
        .open .pricing {
            position: absolute;
            right: 183px;
            bottom: 30px;
            font-size: 24px;
        }
        .open span.vat {
            display: block;
            font-size: 14px;
            text-align: right;
        }
        .open .actions {
            position: absolute;
            right: 30px;
            bottom: 30px;
        }
        .btn.btn-primary.enquiry {
            border-radius: 0;
            padding: 10px 37px;
            background: #f04e23;
            color: white;
            border-radius: 5px;
        }
        .region-footer .col-sm-8 ul li:first-child {
            display: none;
        }
        span.tags {
            display: block;
            padding: 1em 0;
        }
        span.tags label {
            font-weight: bold;
        }
        .col-sm-8 ul, .trademark {
            margin: 0;
            font-size: 12px !important;
        }
        @media all and (max-width: 768px) {
            a.listyourbusiness {
                display: none;
            }
            li.categories {
                display: none;
            }
            .selection-category li {
                width: 49%;
            }
            .cities {
                display: none;
            }
            .overthefold {
                padding: 15px;
            }
            .bottom-menu {
                display: none;
            }
            .box-search {
                width: 100%;
                margin: 0px 0 !important;
            }
            .box-right {
                display: none;
            }
            .searched .overthefold {
                padding: 0px 0px;
            }
            li.box {
                width: 91%;
            }
            .two-boxes, .selection-category {
                margin: 20px 20px;
            }
            .searched .selection-category li {
                width: 45%;
            }
            .col-sm-3, .col-sm-2, .col-sm-8, .col-sm-4 {
                width: 90% !important;
                padding: 0px 5% !important;
                margin: 0 !important;
            }
            li.box.open .text {
                width: 100% !important;
                max-height: 300px;
            }
            li.box.open {
                height: 100% !important;
                width: 100%;
                padding: 0;
            }
            .open .arrow-right {
                padding-top: 150px !important;
                height: 150px !important;
            }

            .open .pricing {
                position: absolute;
                right: 183px;
                bottom: 30px;
                font-size: 24px;
            }
            .open .close {
                position: absolute;
                top: 15px;
                left: 15px;
                font-size: 28px;
                height: 30px;
                width: 30px;
                background: #f04e23;
                color: white;
                font-size: 23px;
                text-align: center;
                cursor: pointer;
                border-radius: 50px;
            }
            .btn.btn-primary.enquiry {
                width: 100%;
                padding: 10px 0px;
            }
            .pricing {
                position: relative !important;
                right: unset !important;
                bottom: unset !important;
            }
            .pricing {
                max-width: 110px;
                padding: 18px !important;
                background: #1d2331;
                float: left !important;
                margin: 5px 20px 5px 0px;
                color: white;
            }
            .open .actions {
                position: inherit;
            }
            .open span.vat {
                text-align: left;
            }
            .description {
                height: 45px;
            }
        }

    </style>
</article>