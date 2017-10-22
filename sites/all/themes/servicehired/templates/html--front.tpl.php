<!DOCTYPE html>
<html<?php print $html_attributes;?><?php print $rdf_namespaces;?>>
<head>
    <link rel="profile" href="<?php print $grddl_profile; ?>" />
    <?php print $head; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="google-site-verification" content="bEFC0Jbc6hIVdp6QtiZOAdiExxTG_f_4IN5L8K06wFo" />
    <title>ServiceHired - Find, compare and book local services</title>
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700" rel="stylesheet">
    <link rel="icon" href="/sites/all/themes/servicehired/icons2/ldpi.png" sizes="32x32" />
    <link rel="icon" href="/sites/all/themes/servicehired/icons2/xhdpi.png" sizes="96x96" />
    <link rel="icon" href="/sites/all/themes/servicehired/icons2/xxxhdpi.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="/sites/all/themes/servicehired/icons2/Icon-72.png" sizes="72x72" />
    <link rel="apple-touch-icon" href="/sites/all/themes/servicehired/icons2/Icon-76.png" sizes="76x76" />
    <link rel="apple-touch-icon" href="/sites/all/themes/servicehired/icons2/Icon-60@2x.png" sizes="120x120" />
    <link rel="apple-touch-icon" href="/sites/all/themes/servicehired/icons2/Icon-76@2x.png" sizes="152x152" />
    <link rel="apple-touch-icon" href="/sites/all/themes/servicehired/icons2/Icon-60@3x.png" sizes="180x180" />
    <link rel="apple-touch-icon-precomposed" href="/sites/all/themes/servicehired/icons2/Icon-72.png" sizes="72x72" />
    <link rel="apple-touch-icon-precomposed" href="/sites/all/themes/servicehired/icons2/Icon-76.png" sizes="76x76" />
    <link rel="apple-touch-icon-precomposed" href="/sites/all/themes/servicehired/icons2/Icon-60@2x.png" sizes="120x120" />
    <link rel="apple-touch-icon-precomposed" href="/sites/all/themes/servicehired/icons2/Icon-72@2x.png" sizes="144x144" />
    <link rel="apple-touch-icon-precomposed" href="/sites/all/themes/servicehired/icons2/Icon-76@2x.png" sizes="152x152" />
    <link rel="apple-touch-icon-precomposed" href="/sites/all/themes/servicehired/icons2/Icon-60@3x.png" sizes="180x180" />
    <script src="https://js.stripe.com/v3/"></script>
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107186115-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments)};
      gtag('js', new Date());

      gtag('config', 'UA-107186115-1');
    </script>

    <style>
        .suppliers {
            margin: 70px 0;
        }
      footer li a {
          text-decoration: none;
          font-size: 0.8em !important;
      }
      .options {
          display:none;
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
      .checkout .internal {
          display: none;
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
      .overthefold {
          background:#191F33;
          text-align: center;
          height: 85vh;
          color: white;
          position: relative;
          padding-top: 15vh;
          background-image: url(/sites/all/themes/servicehired/images/ocean-glass-ripple.jpg);
          background-size: cover;
      }
      .overthefold.searched {
          height: 215px;
          padding-top: 0;
      }
      .searched .topbar {
          background: rgba(255,255,255,0.1);
          height: 50px;
          margin-bottom: 30px;
      }
      .overthefold.searched .logo {
          height: 45px;
          padding-bottom: 35px;
      }
      .searched h1, .searched h2 {
          display: none;
      }
      body {
          margin: 0;
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
          max-width: 560px;
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
          padding: 12px 30px 12px 15px;
          box-sizing: border-box;
          -webkit-appearance: none;
          -moz-appearance: none;
          appearance: none;
          font-family: 'Rubik', sans-serif;
          font-size: 16px;
          border-radius: 5px;
      }
      .aa-input-search::-webkit-search-decoration, .aa-input-search::-webkit-search-cancel-button, .aa-input-search::-webkit-search-results-button, .aa-input-search::-webkit-search-results-decoration {
          display: none; }
      .aa-input-icon {
          height: 16px;
          width: 16px;
          position: absolute;
          top: 50%;
          right: 16px;
          -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
          fill: #e4e4e4; }
      .aa-dropdown-menu {
          background-color: #fff;
          border: 1px solid rgba(228, 228, 228, 0.6);
          min-width: 300px;
          margin-top: 10px;
          box-sizing: border-box; }
      .aa-suggestion {
          padding: 12px;
          cursor: pointer;
      }
      .aa-suggestion + .aa-suggestion {
          border-top: 1px solid rgba(228, 228, 228, 0.6);
      }
      .aa-suggestion:hover, .aa-suggestion.aa-cursor {
          background-color: rgba(241, 241, 241, 0.35); }
      .aa-input-container {
          display: block;
      }
      .selection-category {
          max-width: 720px;
          margin: 0 auto;
          border: 1px solid white;
          border-radius: 5px;
      }

      .selection-category li {
          list-style: none;
          display: inline-block;
          padding: 0;
          width: 49%;
          width: calc(99.3%/2);
      }
      .selection-category ul {
          padding: 0;
          margin: 0;
      }
      .selection-category a {
          padding: 10px;
          display: block;
      }
      .selection-category a:hover {
          background: #0098ad;
          color: white;
          cursor: pointer;
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
          width: calc(50%);
      }
      .box-left input{
          border-radius: 5px 0 0 5px;
      }
      .box-right input {
          border-radius: 0 5px 5px 0;
      }

      li.box .text {
          background: #1c1f2f;
          height: 230px;
          width: 100%;
          cursor: pointer;
          border-radius: 5px;
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
          border-radius: 5px;
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
      .searched .bottom-menu {
          display: none;
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
      a.right-padding {
          margin-right: 1em;
          font-size: 0.8em;
      }

        .siteintro img {
            width: 50px;
        }
        .searched .siteintro {
            display: none;
        }

        .siteintro {
            display: block;
            color: #aeb1b6;
            font-size: 0.9em;
            margin: 4em auto auto auto;
            text-align: center;
            max-width: 977px;
        }
        .col-md-4 {
            width: 33.33%;
            float: left;
        }
        .siteintro h4 {
            font-size: 15px;
            color: white;
            font-weight: 500;
            margin: 9px;
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
            .overthefold {
                background:#191F33;
                text-align: center;
                height: auto;
                color: white;
                position: relative;
                padding-top: 30px;
                background-image: url(/sites/all/themes/servicehired/images/ocean-glass-ripple.jpg);
                background-size: cover;
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
          .open .pricing {
              max-width: 110px;
              padding: 18px !important;
              background: #1d2331;
              float: left !important;
              margin: 5px 20px 5px 0px;
              color: white;
              border-radius: 5px;
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
</head>
<body>
<div class="overthefold">
    <div class="topbar">
        <a href="/">
            <img class="logo" src="/sites/all/themes/servicehired/images/inventshift-icon.png">
        </a>
    </div>
  <h1>ServiceHired</h1>
  <h2>Find, compare and book local services anywhere.</h2>
  <!-- HTML Markup -->
  <div class="two-boxes">
    <div class="box-search box-left" id="aa-input-container">
      <input type="search" id="search-box" class="aa-input-search" placeholder="What service?" name="search" autocomplete="off" />
      <svg class="aa-input-icon" viewBox="654 -372 1664 1664">
        <path d="M1806,332c0-123.3-43.8-228.8-131.5-316.5C1586.8-72.2,1481.3-116,1358-116s-228.8,43.8-316.5,131.5  C953.8,103.2,910,208.7,910,332s43.8,228.8,131.5,316.5C1129.2,736.2,1234.7,780,1358,780s228.8-43.8,316.5-131.5  C1762.2,560.8,1806,455.3,1806,332z M2318,1164c0,34.7-12.7,64.7-38,90s-55.3,38-90,38c-36,0-66-12.7-90-38l-343-342  c-119.3,82.7-252.3,124-399,124c-95.3,0-186.5-18.5-273.5-55.5s-162-87-225-150s-113-138-150-225S654,427.3,654,332  s18.5-186.5,55.5-273.5s87-162,150-225s138-113,225-150S1262.7-372,1358-372s186.5,18.5,273.5,55.5s162,87,225,150s113,138,150,225  S2062,236.7,2062,332c0,146.7-41.3,279.7-124,399l343,343C2305.7,1098.7,2318,1128.7,2318,1164z" />
      </svg>
    </div>

    <div class="box-search box-right" id="google-input-container">
      <input type="search" id="google-search-input" class="google-input-search" placeholder="Where are you?" />
      <svg class="aa-input-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 14 20">
        <path d="M7 0C3.13 0 0 3.13 0 7c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5C5.62 9.5 4.5 8.38 4.5 7S5.62 4.5 7 4.5 9.5 5.62 9.5 7 8.38 9.5 7 9.5z"></path>
      </svg>
    </div>
      <div class="search-buttons">
          <div class="btn">Search now</div>
      </div>
      <div class="options"><div class="filter">Show me results: <div class="selected">Near Me</div></div> <div class="filter">Show me results: <div class="selected">Near Me</div></div><div class="filter">Show me results: <div class="selected">Near Me</div></div></div>

  </div>
    <div class="siteintro row">
        <div class="col-md-4">
            <img src="/sites/all/themes/servicehired/images/003-price-tag.png">
            <h4>Services With Clear Prices</h4>Compare thousands of services with clear pricing. Instead of calling, waiting for a price, you get your price and availability immediately. Welcome to the future of booking services.</div>
        <div class="col-md-4">
            <img src="/sites/all/themes/servicehired/images/002-bolt.png">
            <h4>Instant Bookings</h4>Instead of going back and forth with a business, you can do instant bookings on the time of your choosing. Your service provider has simple availability that you can check.</div>
        <div class="col-md-4">
            <img src="/sites/all/themes/servicehired/images/001-winner.png">
            <h4>Guaranteed Results</h4>We hold your payment in escrow until the supplier has done their job. That makes sure that you get the job done properly before releasing payment. No more work half-done.</div>
    </div>
  <div class="menu">
      <!--
    <div class="leftmenu">
      <a href="https://www.inventshift.com/blog">Blog</a>
    </div> -->
    <?php if (user_is_logged_in()): ?>
        <div class="rightmenu">
            <a class="right-padding" href="/user/logout">Log out</a>
            <a class="listyourbusiness" href="/dash">Dashboard</a>
        </div>
    <?php else:?>
        <div class="rightmenu">
            <a class="listyourbusiness" href="/list-your-business">List your business</a>
            <a href="/user">Sign In</a>
        </div>
    <?php endif;?>
  </div>
  <div class="bottom-menu">
      <ul>
          <li>
              <a href="/about">About us</a>
          </li>
          <li>
              <a href="/contact">Contact</a>
          </li>
          <li>
              <a href="/list-your-business">List your service</a>
          </li>
          <li>
              <a target="_blank" href="https://www.inventshift.com">Sustainable business</a>
          </li>
      </ul>
  </div>
</div>
<div class="facets">
    <div class="internal hidden">
        <h3>Price range</h3>
        <div id="pricerange" class="pricerange"></div>
        <div id="pipssteps">
        </div>
    </div>
</div>
<div class="instances searchedhide">
    <div class="marketing row searchedhide">
        <h3>Featured Service Locations</h3>

        <div class="suggestion">
            <h4>Photographers in London</h4>
        </div><div class="suggestion">
            <h4>Photographers in Birmingham</h4>
        </div>

        <div class="suggestion">
            <h4>Photographers in Nottingham</h4>
        </div>

        <div class="suggestion">
            <h4>Photographers in Bradford</h4>
        </div>
        <div class="suggestion">
            <h4>Photographers in Bristol</h4>
        </div><div class="suggestion">
            <h4>Photographers in Edinbourgh</h4>
        </div>
    </div>
</div>
<div class="gray searchedhide">
    <div class="marketing row ">
        <div class="suppliers row">
            <div class="col-md-4 in_and_around other">
                <h3>New Standard of Buying Services</h3>
                <p class="p">ServiceHired.com allows you to browse and instantly book the service you are after. No more back-and-forths with the suppliers that you dread. It often takes weeks for them to come back to you with a quote.</p>
                <p class="p">Browse our database of thousands of business with tens of thousands of service products, and start booking.</p>
            </div>
            <div class="col-md-4 in_and_around other">
                <h3>What Services can I find?</h3>
                <p class="p">From ServiceHired.com you can find a long range of services from Photographers to Caterers to Plumbers and anything in between. To browse our services, just start typing in our search form.</p>
                <p class="p">We are not restricting any service out of the system. The only rule is that we generally don't approve physical products that require shipping.</p>
            </div><div class="col-md-4 in_and_around other">
                <h3>Complete Toolkit for Service Businesses</h3>
                <p class="p">We have built a toolkit that allows you to easily productise the service you sell. This allows you to create a product for each offering, and sell it simply as a instantly bookable package.</p>
                <p class="p">There is a new form of customer looking for service products like this. We've seen this wont affect your existing business, but only bring more customers.</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="marketing row">
    <div class="breadcrumb"><ul>
            <li class="done searchbread">Search </li>
            <li class="future servicebread">Choose a service</li>
            <li class="future checkoutbread hidden">Add details to continue</li>
        </ul></div>
    <div class="types row">
        <ul id="searchinsides" class="">
        </ul>
      <?php if (user_is_logged_in()): ?>
          <form id="stripeform" action="/developers/new_user" method="post" class="stripeform hidden">
              <h2>Add your details to continue </h2>
              <p> Making a booking does not tie you to anything. We just send your quote to the supplier, and you will get a full refund if they are not able to confirm your timing. </p>
              <h4> Your details</h4>
              <label>
                  <span>First Name</span>
                  <input name="cardholder-first-name" class="field" placeholder="Jane">
              </label>
              <label>
                  <span>Last Name</span>
                  <input name="cardholder-last-name" class="field" placeholder="Doe">
              </label>
              <label>
                  <span>Phone</span>
                  <input name="cardholder-phone" class="field" placeholder="09853398021">
              </label>
              <label class="hidden">
                  <span>Package</span>
                  <input class="package" name="package" placeholder="94110">
              </label>
              <h4> Billing details</h4>
              <div class="card-details">
                  <?php print formatted_card(); ?>
                  <small><a href="/billing">Change payment method</a></small>
              </div>
              <button type="submit">Make a booking request</button>
              <div class="text-center small">
                  You wont be charged yet.
              </div>
          </form>
      <?php else:?>
          <form id="stripeform" action="/developers/new_user" method="post" class="stripeform hidden">
              <h2>Add your details to continue </h2>
              <p> Making a booking does not tie you to anything. We just send your quote to the supplier, and you will get a full refund if they are not able to confirm your timing. </p>
              <h4> Your details</h4>
              <label>
                  <span>First Name</span>
                  <input name="cardholder-first-name" class="field" placeholder="Jane">
              </label>
              <label>
                  <span>Last Name</span>
                  <input name="cardholder-last-name" class="field" placeholder="Doe">
              </label>
              <label>
                  <span>Phone</span>
                  <input name="cardholder-phone" class="field" placeholder="09853398021">
              </label>
              <label>
                  <span>Email</span>
                  <input name="cardholder-email" class="field" placeholder="Jane Doe">
              </label>
              <h4> Billing details</h4>
              <label>
                  <span>Phone</span>
                  <input class="field" placeholder="(123) 456-7890" type="tel">
              </label>
              <label>
                  <span>ZIP code</span>
                  <input name="address-zip" class="field" placeholder="94110">
              </label>
              <label class="hidden">
                  <span>Token</span>
                  <input class="token" name="token" placeholder="94110">
              </label>
              <label class="hidden">
                  <span>Package</span>
                  <input class="package" name="package" placeholder="94110">
              </label>
              <label>
                  <span>Card</span>
                  <div id="card-element" class="field"></div>
              </label>
              <button type="submit">Make a booking request</button>
              <div class="text-center small">
                  You wont be charged yet.
              </div>
              <div class="outcome">
                  <div class="error" role="alert"></div>
                  <div class="success">
                      Success! Your Stripe token is <span class="token"></span>
                  </div>
              </div>
          </form>
      <?php endif;?>
    </div>
    <div class="suppliers">
        <div class="col-sm-12 in_and_around">
            <h3>Book services instantly in</h3>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active row" id="tab_0"><div class="col-md-2 col-sm-4 p-0">
                        <p class="in_and_around_text">
                            <a href="/services/gb" title="Book services in United Kingdom">United Kingdom</a>
                        </p>
                        <p class="in_and_around_subtext">421 Service products</p>
                    </div>

                    <div class="col-md-2 col-sm-4 p-0">
                        <p class="in_and_around_text">
                            <a href="/services/us" title="Book services in United States">United States</a>
                        </p>
                        <p class="in_and_around_subtext">305 Service products</p>
                    </div><div class="col-md-2 col-sm-4 p-0">
                        <p class="in_and_around_text">
                            <a href="/services/fi" title="Book services in Finland">Finland</a>
                        </p>
                        <p class="in_and_around_subtext">39 Service products</p>
                    </div>
                    <div class="col-md-2 col-sm-4 p-0">
                        <p class="in_and_around_text">
                            <a href="/services/se" title="Book services in Sweden">Sweden</a>
                        </p>
                        <p class="in_and_around_subtext">69 Service products</p>
                    </div>
                    <div class="col-md-2 col-sm-4 p-0">
                        <p class="in_and_around_text">
                            <a href="/services/au" title="Book services in Australia">Australia</a>
                        </p>
                        <p class="in_and_around_subtext">421 Service products</p>
                    </div>
                    <div class="col-md-2 col-sm-4 p-0">
                        <p class="in_and_around_text">
                            <a href="/services/ca" title="Book services in Canada">Canada</a>
                        </p>
                        <p class="in_and_around_subtext">32 Service products</p>
                    </div>
                    <div class="col-md-2 col-sm-4 p-0">
                        <p class="in_and_around_text">
                            <a href="/services/ie" title="Book services in Ireland">Ireland</a>
                        </p>
                        <p class="in_and_around_subtext">29 Service products</p>
                    </div>
                    <div class="col-md-2 col-sm-4 p-0">
                        <p class="in_and_around_text">
                            <a href="/services/it" title="Book services in Italy">Italy</a>
                        </p>
                        <p class="in_and_around_subtext">74 Service products</p>
                    </div>

                    <div class="col-md-2 col-sm-4 p-0">
                        <p class="in_and_around_text">
                            <a href="/services/de" title="Book services in Germany">Germany</a>
                        </p>
                        <p class="in_and_around_subtext">15 Service products</p>
                    </div><div class="col-md-2 col-sm-4 p-0">
                        <p class="in_and_around_text">
                            <a href="/services/nl" title="Book services in Netherlands">Netherlands</a>
                        </p>
                        <p class="in_and_around_subtext">21 Service products</p>
                    </div>
                    <div class="col-md-2 col-sm-4 p-0">
                        <p class="in_and_around_text">
                            <a href="/best-photographers-london" title="Book services in India">India</a>
                        </p>
                        <p class="in_and_around_subtext">52 Service products</p>
                    </div>
                    <div class="col-md-2 col-sm-4 p-0">
                        <p class="in_and_around_text">
                            <a href="/best-photographers-london" title="Book services in New Zealand">New Zealand</a>
                        </p>
                        <p class="in_and_around_subtext">121 Service products</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--
<div class="marketing row cities">
    <div class="col-sm-12 in_and_around">
        <h3>Most popular cities for services</h3>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active row" id="tab_0">
                <div class="col-md-2 col-sm-4 p-0">
                    <p class="in_and_around_text">
                        <a href="/best-photographers-london" title="Photographers in London">London</a>
                    </p>
                    <p class="in_and_around_subtext">70 Services</p>
                </div>
                <div class="col-md-2 col-sm-4 p-0">
                    <p class="in_and_around_text">
                        <a href="/browse?&amp;pt=53.4809,-2.23743&amp;facet=Catering&amp;query=Manchester,%20United%20Kingdom" title="Caterers in Manchester">Manchester</a>
                    </p>
                    <p class="in_and_around_subtext">30 Caterers</p>
                </div>
                <div class="col-md-2 col-sm-4 p-0">
                    <p class="in_and_around_text">
                        <a href="/browse?&amp;pt=-37.814,144.963&amp;facet=Catering&amp;query=Melbourne,%20Australia" title="Caterers in Melbourne">Melbourne</a>
                    </p>
                    <p class="in_and_around_subtext">46 Caterers</p>
                </div>
                <div class="col-md-2 col-sm-4 p-0">
                    <p class="in_and_around_text">
                        <a href="/browse?&amp;pt=53.4106,-2.97794&amp;facet=Catering&amp;query=Liverpool,%20United%20Kingdom" title="Caterers in Liverpool">Liverpool</a>
                    </p>
                    <p class="in_and_around_subtext">32 Caterers</p>
                </div>
                <div class="col-md-2 col-sm-4 p-0">
                    <p class="in_and_around_text">
                        <a href="/browse?&amp;pt=55.8651,-4.25763&amp;facet=Catering&amp;query=Glasgow,%20United%20Kingdom" title="Caterers in Glasgow">Glasgow</a>
                    </p>
                    <p class="in_and_around_subtext">25 Caterers</p>
                </div>
                <div class="col-md-2 col-sm-4 p-0">
                    <p class="in_and_around_text">
                        <a href="/browse?&amp;pt=53.7965,-1.54785&amp;facet=Catering&amp;query=Leeds,%20United%20Kingdom" title="Caterers in Leeds">Leeds</a>
                    </p>
                    <p class="in_and_around_subtext">59 Caterers</p>
                </div>
                <div class="col-md-2 col-sm-4 p-0">
                    <p class="in_and_around_text">
                        <a href="/browse?&amp;pt=-33.8678,151.207&amp;facet=Catering&amp;query=Sydney,%20Australia" title="Caterers in Liverpool">Sydney</a>
                    </p>
                    <p class="in_and_around_subtext">21 Caterers</p>
                </div>
                <div class="col-md-2 col-sm-4 p-0">
                    <p class="in_and_around_text">
                        <a href="/browse?&amp;pt=52.374,4.88969&amp;facet=Catering&amp;query=Amsterdam,%20Provincie%20Noord-Holland,%20The%20Netherlands" title="Caterers in Amsterdam">Amsterdam</a>
                    </p>
                    <p class="in_and_around_subtext">58 Caterers</p>
                </div>
                <div class="col-md-2 col-sm-4 p-0">
                    <p class="in_and_around_text">
                        <a href="/browse?&amp;pt=34.0522,-118.244&amp;facet=Catering&amp;query=Los%20Angeles,%20California,%20United%20States%20of%20America" title="Caterers in Los Angeles">Los Angeles</a>
                    </p>
                    <p class="in_and_around_subtext">17 Caterers</p>
                </div>
                <div class="col-md-2 col-sm-4 p-0">
                    <p class="in_and_around_text">
                        <a href="/browse?&amp;pt=-31.9522,115.861&amp;facet=Catering&amp;query=Perth,%20Australia" title="Caterers in Perth">Perth</a>
                    </p>
                    <p class="in_and_around_subtext">58 Caterers</p>
                </div>
                <div class="col-md-2 col-sm-4 p-0">
                    <p class="in_and_around_text">
                        <a href="/browse?&amp;pt=55.9521,-3.19648&amp;facet=Catering&amp;query=Edinburgh,%20United%20Kingdom" title="Caterers in Edinburgh">Edinburgh</a>
                    </p>
                    <p class="in_and_around_subtext">25 Caterers</p>
                </div>
                <div class="col-md-2 col-sm-4 p-0">
                    <p class="in_and_around_text">
                        <a href="/browse?&amp;pt=60.1695,24.9354&amp;facet=Catering&amp;query=Helsinki,%20Uusimaa,%20Finland" title="Caterers in Helsinki">Helsinki</a>
                    </p>
                    <p class="in_and_around_subtext">29 Caterers</p>
                </div>
                <div class="col-md-2 col-sm-4 p-0">
                    <p class="in_and_around_text">
                        <a href="/browse?&amp;pt=-34.9287,138.599&amp;facet=Catering&amp;query=Adelaide,%20Australia" title="Caterers in Adelaide">Adelaide</a>
                    </p>
                    <p class="in_and_around_subtext">27 Caterers</p>
                </div>
                <div class="col-md-2 col-sm-4 p-0">
                    <p class="in_and_around_text">
                        <a href="/browse?&amp;pt=35.6895,139.692&amp;facet=Catering&amp;query=Tokyo,%20Japan" title="Caterers in Tokyo">Tokyo</a>
                    </p>
                    <p class="in_and_around_subtext">14 Caterers</p>
                </div>
                <div class="col-md-2 col-sm-4 p-0">
                    <p class="in_and_around_text">
                        <a href="/browse?&amp;pt=50.8284,-0.13947&amp;facet=Catering&amp;query=Brighton,%20United%20Kingdom" title="Caterers in Brighton">Brighton</a>
                    </p>
                    <p class="in_and_around_subtext">5 Caterers</p>
                </div>
                <div class="col-md-2 col-sm-4 p-0">
                    <p class="in_and_around_text">
                        <a href="/browse?&amp;pt=-27.4679,153.028&amp;facet=Catering&amp;query=Brisbane,%20Australia" title="Caterers in Brisbane">Brisbane</a>
                    </p>
                    <p class="in_and_around_subtext">31 Caterers</p>
                </div>
                <div class="col-md-2 col-sm-4 p-0">
                    <p class="in_and_around_text">
                        <a href="/browse?&amp;pt=60.2052,24.6522&amp;facet=Catering&amp;query=Espoo,%20Uusimaa,%20Finland" title="Caterers in Espoo">Espoo</a>
                    </p>
                    <p class="in_and_around_subtext">10 Caterers</p>
                </div>
                <div class="col-md-2 col-sm-4 p-0">
                    <p class="in_and_around_text">
                        <a href="/browse?&amp;pt=60.2941,25.041&amp;facet=Catering&amp;query=Vantaa,%20Uusimaa,%20Finland" title="Caterers in York">Vantaa</a>
                    </p>
                    <p class="in_and_around_subtext">10 Caterers</p>
                </div>
                <div class="col-md-2 col-sm-4 p-0">
                    <p class="in_and_around_text">
                        <a href="/browse?&amp;pt=61.4991,23.7871&amp;facet=Catering&amp;query=Tampere,%20Pirkanmaa,%20Finland" title="Caterers in Tampere">Tampere</a>
                    </p>
                    <p class="in_and_around_subtext">4 Caterers</p>
                </div>
                <div class="col-md-2 col-sm-4 p-0">
                    <p class="in_and_around_text">
                        <a href="/browse?&amp;pt=6.9270786,79.86124300000006&amp;facet=Catering&amp;query=Colombo,%20Sri%20Lanka" title="Caterers in Colombo">Colombo</a>
                    </p>
                    <p class="in_and_around_subtext">20 Caterers</p>
                </div>
                <div class="col-md-2 col-sm-4 p-0">
                    <p class="in_and_around_text">
                        <a href="/browse?&amp;pt=51.563296,-0.1074350000000095&amp;facet=Catering&amp;query=Finsbury%20Park,%20London%20N4,%20UK" title="Caterers in Finsbury Park">Finsbury Park</a>
                    </p>
                    <p class="in_and_around_subtext">69 Caterers</p>
                </div>
                <div class="col-md-2 col-sm-4 p-0">
                    <p class="in_and_around_text">
                        <a href="/browse?&amp;pt=51.50942999999999,-0.026720000000068467&amp;facet=Catering&amp;query=Westferry%20Circus,%20Canary%20Wharf,%20London%20E14,%20UK" title="Caterers in Westferry">Westferry</a>
                    </p>
                    <p class="in_and_around_subtext">67 Caterers</p>
                </div>
                <div class="col-md-2 col-sm-4 p-0">
                    <p class="in_and_around_text">
                        <a href="/browse?&amp;pt=51.4911875,-0.22373149999998532&amp;facet=Catering&amp;query=Hammersmith,%20London%20W6,%20UK" title="Caterers in Hammersmith">Hammersmith</a>
                    </p>
                    <p class="in_and_around_subtext">65 Caterers</p>
                </div>
                <div class="col-md-2 col-sm-4 p-0">
                    <p class="in_and_around_text">
                        <a href="/browse?&amp;pt=51.52849,-0.08472800000004099&amp;facet=Catering&amp;query=Shoreditch,%20London%20N1,%20UK" title="Caterers in Shoreditch">Shoreditch</a>
                    </p>
                    <p class="in_and_around_subtext">64 Caterers</p>
                </div>
                <div class="col-md-2 col-sm-4 p-0">
                    <p class="in_and_around_text">
                        <a href="/browse?&amp;pt=53.383,-1.4659&amp;facet=Catering&amp;query=Sheffield,%20United%20Kingdom" title="Caterers in Sheffield">Sheffield</a>
                    </p>
                    <p class="in_and_around_subtext">26 Caterers</p>
                </div>
                <div class="col-md-2 col-sm-4 p-0">
                    <p class="in_and_around_text">
                        <a href="/browse?&amp;pt=51.4552,-2.59665&amp;facet=Catering&amp;query=Bristol,%20United%20Kingdom" title="Caterers in Bristol">Bristol</a>
                    </p>
                    <p class="in_and_around_subtext">35 Caterers</p>
                </div>
                <div class="col-md-2 col-sm-4 p-0">
                    <p class="in_and_around_text">
                        <a href="/browse?&amp;pt=51.3751,-2.36172&amp;facet=Catering&amp;query=Bath,%20United%20Kingdom" title="Caterers in Bath">Bath</a>
                    </p>
                    <p class="in_and_around_subtext">24 Caterers</p>
                </div>
                <div class="col-md-2 col-sm-4 p-0">
                    <p class="in_and_around_text">
                        <a href="/browse?&amp;pt=55.780851910458786,-4.031865443945317&amp;facet=Catering&amp;query=Glasgow,%20United%20Kingdom" title="Caterers in Hamilton">Hamilton</a>
                    </p>
                    <p class="in_and_around_subtext">19 Caterers</p>
                </div>
                <div class="col-md-2 col-sm-4 p-0">
                    <p class="in_and_around_text">
                        <a href="/browse?&amp;pt=51.4562,-0.97113&amp;facet=Catering&amp;query=Reading,%20United%20Kingdom" title="Caterers in Reading">Reading</a>
                    </p>
                    <p class="in_and_around_subtext">24 Caterers</p>
                </div>
                <div class="col-md-2 col-sm-4 p-0">
                    <p class="in_and_around_text">
                        <a href="/browse?&amp;pt=-33.7931501,151.28764879999994&amp;facet=Catering&amp;query=Manly%20Beach,%20New%20South%20Wales,%20Australia" title="Caterers at the Manly Beach">Manly Beach</a>
                    </p>
                    <p class="in_and_around_subtext">23 Caterers</p>
                </div>
            </div>
        </div>
    </div>
</div>
-->
<footer class="footer container-fluid">
    <div class="region region-footer">
        <section id="block-block-1" class="block block-block clearfix">
            <div class="footer-width">
                <div class="row">
                    <div class="col-sm-2">
                        <ul><li class="footer-logo"><img class="ft-logo" src="/sites/all/themes/servicehired/images/inventshift-icon.png">ServiceHired</li>
                            <li class="small">ServiceHired makes booking services online simple. Find, compare and book. Simple as that.</li>
                        </ul></div>
                    <div class="col-sm-2 col-sm-offset-1">
                        <ul><li> Finding a service</li>
                            <li><a href="/">Browse services</a></li>
                            <li><a href="/how-it-works">How it works</a></li>
                        </ul></div>
                    <div class="col-sm-2">
                        <ul><li> Finding customers</li>
                            <li><a href="/list-your-business">List your service</a></li>
                            <li><a href="/find-customers/how-service-hired-works">How it works</a></li>
                            <li><a href="/business-tools">Tools for business</a></li>
                        </ul></div>
                    <div class="col-sm-2">
                        <ul><li> Company</li>
                            <li></li>
                            <li><a href="/about">About</a></li>
                            <li><a target="_blank" href="https://www.inventshift.com">Sustainable business</a></li>
                            <li><a href="/press">Press</a></li>
                        </ul></div>
                    <div class="col-sm-1">
                        <ul><li> Support</li>
                            <li></li>
                            <li><a href="/contact">Contact</a></li>
                            <li><a href="/help-center">Help center</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-8">
                        <ul>
                            <li><a href="/terms">Terms</a></li>
                            <li><a href="/terms">Privacy policy</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <p class="trademark">Copyright © 2017 ServiceHired<br><span class="rights">All rights reserved</span></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</footer>
<noscript id="deferred-styles">
    <link rel="stylesheet" type="text/css" href="/sites/all/themes/servicehired/css.css"/>
</noscript>
<script>
  var loadDeferredStyles = function() {
    var addStylesNode = document.getElementById("deferred-styles");
    var replacement = document.createElement("div");
    replacement.innerHTML = addStylesNode.textContent;
    document.body.appendChild(replacement)
    addStylesNode.parentElement.removeChild(addStylesNode);
  };
  var raf = requestAnimationFrame || mozRequestAnimationFrame ||
    webkitRequestAnimationFrame || msRequestAnimationFrame;
  if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
  else window.addEventListener('load', loadDeferredStyles);
</script>
<!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
<script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/g/instantsearch.js@1.10.3(instantsearch.min.css),jquery.ui@1.11.4(jquery-ui.min.css),bootstrap.select@1.12.2(css/bootstrap-select.min.css),cookieconsent3@3.0.4(cookieconsent.min.css)">
<script src="https://cdn.jsdelivr.net/g/algoliasearch@3.22.1,algoliasearch.helper@2.20.1,hogan.js@3.0.2(hogan.min.common.js),js-cookie@2.2.0,cookieconsent3@3.0.4"></script>
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAD-tXblrfyR3thTR8DGuM3NreZ9qGLtT8&libraries=places"></script>
<script src="/sites/all/libraries/noui/nouislider.min.js"></script>
<script src="/sites/all/libraries/noui/nouislider.min.js"></script>
<link rel="stylesheet" href="/sites/all/libraries/noui/nouislider.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chartist/0.11.0/chartist.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartist/0.11.0/chartist.min.js"></script>
<!-- Initialize autocomplete menu -->
<!-- Latest compiled and minified CSS -->

<script>
  var client1 = algoliasearch("N4C3NC4744", "fda98971857f13213af8ee5654b5f47e");
  var index1 = client1.initIndex('new');
  //initialize autocomplete on search input (ID selector must match)

  var autocmplt = autocomplete('#search-box',
    { hint: false }, {
      source: autocomplete.sources.hits(index1, {hitsPerPage: 5}),
      //value to be displayed in input control after user's suggestion selection
      displayKey: 'Keyword',
      //hash of templates used when rendering dataset
      templates: {
        //'suggestion' templating function used to render a single suggestion
        suggestion: function (suggestion) {
          return '<span>' + suggestion._highlightResult.Keyword.value + '</span>';
        }
      }
    });


  function initialize2(helper) {
    var geocoder = {},
      autocomplete = {};

    var input = (document.getElementById('google-search-input'));

    autocomplete = new google.maps.places.Autocomplete(input, options);

    var options = {
      types: ['geocode']
    };
    geocoder = new google.maps.Geocoder();

      $(input).change(function () {
        geocodeAddress2(helper,geocoder);
      });

    google.maps.event.addListener(autocomplete, 'place_changed', function () {
      geocodeAddress2(helper,geocoder);
    });

    if (input.value)
      geocodeAddress2(helper,geocoder);
  }

  // Geocode the address provided.
  function geocodeAddress2(helper,geocoder) {
    var address = document.getElementById('google-search-input').value;

    geocoder.geocode({ 'address': address }, function (results, status) {
      if (status === google.maps.GeocoderStatus.OK) {
        var location = results[0].geometry.location.lat() + "," + results[0].geometry.location.lng();
        console.log(location);
        // Start with results near your IP.
        helper.setQueryParameter('aroundLatLngViaIP', false);
        helper.setQueryParameter('aroundRadius', radius);
        helper.setQueryParameter('aroundLatLng', location).search();
      } else {
        // not good

      }
    });
  }

  //Config
  var applicationID = 'N4C3NC4744';
  var apiKey = 'fda98971857f13213af8ee5654b5f47e';
  var index = 'Package';

  var client = algoliasearch(applicationID, apiKey);
  var helper = algoliasearchHelper(client, index, {
    hitsPerPage: 12,
    facets: ['field_product_price']
  });

  initialize2(helper);


  $('.categories').click(function(){
    $('.active').removeClass('active');
    $('.icons').removeClass('hidden');
    $(this).addClass('active');
  });

  $('.businesses').click(function(){
    $('.active').removeClass('active');
    $('.icons').addClass('hidden');
    helper.setIndex('Suppliers').search();
    $(this).addClass('active');
  });

  $('.packages').click(function(){
    $('.icons').addClass('hidden');
    $('.active').removeClass('active');
    helper.setIndex('Package').search();
    $(this).addClass('active');
  });


  // Start with results near your IP.
  helper.setQueryParameter('aroundLatLngViaIP', true);
  helper.setQueryParameter('aroundRadius', radius);

  function renderSlider(content){
    if (content.facets[0]) {
      $('.internal').removeClass('hidden');
      var min = content.facets[0].stats.min;
      var max = content.facets[0].stats.max;
      var avg = content.facets[0].stats.avg;
      var total = content.facets[0].stats.sum;
      var data = content.facets[0].data;
      var currency = content.hits["0"].currency;

      range = 0;
      range2 = 0;
      range3 = 0;
      range4 = 0;
      range5 = 0;
      range6 = 0;
      i = 0;
      myarray = [];

      for (var key in data) {
        console.log(data[key]);
        console.log(key);
        i = i + data[key];
        if(key < 50) {
          range = range + data[key];
        }
        if(key <= 100 && key >= 50) {
          range2 = range2 + data[key];
        }
        if(key <= 200 && key > 101) {
          range3 = range3 + data[key];
        }
        if(key <= 500 && key > 201) {
          range4 = range4 + data[key];
        }
        if(key <= 1000 && key > 501) {
          range5 = range5 + data[key];
        }
        if(key > 1001) {
          range6 = range6 + data[key];
        }
      }

      console.log(range);
      console.log(range2);
      console.log(range3);
      console.log(range4);
      console.log(range5);
      console.log(range6);
      myarray.push(range);
      myarray.push(range2);
      myarray.push(range3);
      myarray.push(range4);
      myarray.push(range5);
      myarray.push(range6);

      console.log(i);

      var total = i;

      var chart = new Chartist.Pie('#pricerange', {
        series: myarray,
        labels: ['0-50 ' + currency,'50-100 ' + currency,'100-200' + currency,'200-500' + currency,'500-1000' + currency,'1000+' + currency]
      }, {
        donut: true,
        donutWidth: 80,
        donutSolid: true,
        startAngle: 270,
        total: total*2,
        showLabel: true
      });



      chart.on('draw', function(data) {
        if(data.type === 'slice') {
          // Get the total path length in order to use for dash array animation
          var pathLength = data.element._node.getTotalLength();

          // Set a dasharray that matches the path length as prerequisite to animate dashoffset
          data.element.attr({
            'stroke-dasharray': pathLength + 'px ' + pathLength + 'px'
          });

          // Create animation definition while also assigning an ID to the animation for later sync usage
          var animationDefinition = {
            'stroke-dashoffset': {
              id: 'anim' + data.index,
              dur: 300,
              from: -pathLength + 'px',
              to:  '0px',
              easing: Chartist.Svg.Easing.easeOutQuint,
              // We need to use `fill: 'freeze'` otherwise our animation will fall back to initial (not visible)
              fill: 'freeze'
            }
          };

          // If this was not the first slice, we need to time the animation so that it uses the end sync event of the previous animation
          if(data.index !== 0) {
            animationDefinition['stroke-dashoffset'].begin = 'anim' + (data.index - 1) + '.end';
          }

          // We need to set an initial value before the animation starts as we are not in guided mode which would do that for us
          data.element.attr({
            'stroke-dashoffset': -pathLength + 'px'
          });

          // We can't use guided mode as the animations need to rely on setting begin manually
          // See http://gionkunz.github.io/chartist-js/api-documentation.html#chartistsvg-function-animate
          data.element.animate(animationDefinition, false);
        }
      });

      // For the sake of the example we update the chart every time it's created with a delay of 8 seconds
      chart.on('created', function() {
        if(window.__anim21278907124) {
          clearTimeout(window.__anim21278907124);
          window.__anim21278907124 = null;
        }
      });
    }

    var pipsRange = document.getElementById('pipssteps');

    var range_all_sliders = {
      'min': [min],
      //'25%': [ avg / 2 ],
      '50%': [avg],
      //'75%': [ avg * 2 ],
      'max': [max]
    };

    function updateSliderRange(min, max, avg) {
      pipsRange.noUiSlider.updateOptions({
        range: {
          'min': min,
          '50%': [avg],
          'max': max
        }
      });
    }

    // If max = no results.
    if (max == 0) {
    } else {
      // Render slider if results.
      if (!$('.noUi-base')[0]) {
        noUiSlider.create(pipsRange, {
          range: range_all_sliders,
          connect: true,
          behaviour: 'tap',
          pips: {
            mode: 'range',
            density: 3,
          },
          start: [min, max]
        });
      }

      pipsRange.noUiSlider.off();

      pipsRange.noUiSlider.on('update', function () {
        var results = pipsRange.noUiSlider.get();
        var rangemin = results[0];
        var rangemax = results[1];
      });

        pipsRange.noUiSlider.on('change', function () {
        var results = pipsRange.noUiSlider.get();
        var rangemin = results[0];
        var rangemax = results[1];

        console.log(rangemin);
        console.log(rangemax);

        helper.removeNumericRefinement('field_product_price').addNumericRefinement('field_product_price', '>=', rangemin).addNumericRefinement('field_product_price', '<=', rangemax).search();

      });
    }
  }

  helper.on('result', function(content) {
    console.log(content);

    renderHits(content);

    if($('.searched')[0]){
      renderSlider(content);
    }

    $('.showing').remove();
    var html = '<div class="col-md-12 text-right showing">Found '+ content.nbHits +' results in '+ content.processingTimeMS +' ms</div>';
    $('#searchinsides').before(html);
  });

  function getSize(i){
    var size = 'col-md-4';
    if (i == 1){
      size = 'col-md-5';
    }
    if (i == 2){
      size = 'col-md-3';
    }
    if (i == 4){
      size = 'col-md-3';
    }
    if (i == 6){
      size = 'col-md-5';
    }
    if (i == 8){
      size = 'col-md-5';
    }
    if (i == 9){
      size = 'col-md-3';
    }
    if (i == 10){
      size = 'col-md-5';
    }
    if (i == 12){
      size = 'col-md-3';
    }
    return size;
  }

  $('.searchinsides h4').click(function(){
    $('#searchinsides').toggle();
    $(this).find('.glyphicon').toggleClass('glyphicon-chevron-right');
    $(this).find('.glyphicon').toggleClass('glyphicon-chevron-down');
  });

  $('.supply h4').click(function () {
    $('#suppliers').toggle();
    $(this).find('.glyphicon').toggleClass('glyphicon-chevron-right');
    $(this).find('.glyphicon').toggleClass('glyphicon-chevron-down');
  });


  function typeform(hit){
    if (hit.type == 'photography'){
      return 'zoNsrr';
    }
    if (hit.type =='marketplace_bands_and_artists'){
      return 'VJKoBC';
    }
    if (hit.field_organisation_industry == 'Catering'){
      return 'aOIx8b';
    }

    return 'zoNsrr';
  }

  function renderHits(content) {
    var i = 0;
    $('#searchinsides').html(function() {
      return $.map(content.hits, function(hit) {

        console.log(hit);
        i++;

        hit.price = hit.field_product_price.toFixed(2);

        return '<li id="row-' + i + '" class="box col-sm-6 col-xs-12 box-' + hit.objectID + ' ' + getSize(i) + '">' +
          '<div class="hidden dataid">' + hit.objectID + '</div>' +
          '<div style="background-image:url(' + hit.optimized_large_image[1] + ') !important" firstimage="' + hit.optimized_large_image[1] + '" secondimage="' + hit.optimized_large_image[2] + '" thirdimage="' + hit.optimized_large_image[3] + '" class="text">' +
          '<div class="arrow-left">&lt;</div>' +
          '<div class="arrow-right">&gt;</div>' +
          '<div class="inside">' +
          '<span class="product">'+ hit._highlightResult.title.value +'</span>' +
          '<span class="business">'+ hit._highlightResult.business_name.value +'</span>' +
          '</div>' +
          '</div>' +
          '<div class="description">' +
          '<span class="hidden title">'+ hit._highlightResult.title.value +'</span>' +
          '<div class="pricing"><span class="currency">'+ hit.currency +'</span><span class="price">'+ hit.price +'</span>' +
          '<span class="vat">Incl. Vat</span></div>' +
          '<div class="descript">' + hit.venue_summary + '</div>' +
          '<span class="tags"><label>Tags:</label> Coffee cart, peppermint, coffee, cart</span></span>' +
          '<div class="actions">' +
          '<div class="btn btn-primary enquiry">Buy now</div></div>' +
          '<div class="close">x</div>' +
          '</div>' +
          '</li>';
      });
    });

    initAction();
    initBoxes();
  }

  function initBoxes() {
    $('.close').click(function(){
      $('.open').removeClass('open');
    });

    $('.types .box').click(function(){
      if(!$(this).hasClass('open')){
        $('.open').removeClass('open');
        $(this).toggleClass('open');
        $('html, body').animate({
          scrollTop: $(this).offset().top - 15
        }, 50);

        var nid = $(this).find('.dataid').text();

        /*if (!$(this).hasClass('added')) {
          $.get('/developers/api/getdata/' + nid).done(function (data) {
            for (var i = 0, len = data.length; i < len; i++) {
              $('.box-' + nid + ' ul.tags').append('<li>' + data[i] + '</li>');
            }
          });
        }*/
        $(this).addClass('added');
      }
    });
    // Arrow right.
    $('.arrow-right').click(function(){
      var parent = $(this).closest('.text');
      if(!$(this).hasClass('first')){
        $(this).addClass('first');
        var image = parent.attr('secondimage');
        parent.attr('style','background-image:url('+image+') !important');
      } else {
        $(this).removeClass('first');
        var image = parent.attr('firstimage');
        parent.attr('style','background-image:url('+image+') !important');
      }
    });
  }

  $('.searchbread, .servicebread').click(function(){
    $('.buy').removeClass('buy');
    $('body').removeClass('checkout');
    $('.overthefold').removeClass('searched');
    $('.checkoutbread').addClass('hidden');
    $('.servicebread').addClass('future');
    $('.servicebread').removeClass('done');

    $('html, body').animate({
      scrollTop: $('body').offset().top - 15
    }, 50);
  });

  function initAction(){
    $('.box .enquiry').click(function(){
      console.log('here');
      var parent = $(this).closest('.box');
      parent.addClass('buy');
      $('body').addClass('checkout');

      var dataid = $('.buy .dataid').text();
      $('.package').val(dataid);

      $('.overthefold').addClass('searched');
      $('.checkoutbread').removeClass('hidden');
      $('.servicebread').removeClass('future');
      $('.servicebread').addClass('done');

      $('html, body').animate({
        scrollTop: $('body').offset().top - 15
      }, 50);
    });
    /** Typeform click.
    $('.types .box .enquiry').click(function(){
      var typeform = $(this).attr('typeform');
      console.log(typeform);
      typeformEmbed.makePopup(
        'https://inventshift.typeform.com/to/'+typeform,
        {
          mode: 'drawer_right',
          autoOpen: true,
          autoClose: 350,
          hideScrollbars: true
        }
      )
    });
     */
  }


  //Config
  var otherapplicationID = 'N4C3NC4744';
  var otherapiKey = 'fda98971857f13213af8ee5654b5f47e';
  var otherindex = 'Package';
  var radius = '100000';

  var otherclient = algoliasearch(otherapplicationID, otherapiKey);
  var otherhelper = algoliasearchHelper(otherclient, otherindex, {
    hitsPerPage: 8
  });

  // Start with results near your IP.
  otherhelper.setQueryParameter('aroundLatLngViaIP', true);
  otherhelper.setQueryParameter('aroundRadius', radius);

  otherhelper.on('result', function(content) {
    console.log(content);
    otherrenderHits(content);
  });

  function getSizeSecond(i){
    var size = 'col-md-2';
    if (i == 1){
      size = 'col-md-4';
    }
    if (i == 3){
      size = 'col-md-2';
    }
    if (i == 6){
      size = 'col-md-4';
    }
    if (i == 8){
      size = 'col-md-4';
    }
    if (i == 7){
      size = 'col-md-4';
    }
    return size;
  }

  function otherrenderHits(content) {
    var i = 0;
    $('#suppliers').html(function() {
      return $.map(content.hits, function(hit) {
        i ++;
        var hexArray = ['#FFB91A','#F34D10','#00BED1', '#0098AE', '#0098AE', '#191F2F'];
        var randomColor = hexArray[Math.floor(Math.random() * hexArray.length)];
        return '<a href="'+hit.url+'"><li class="box col-xs-6 '+getSizeSecond(i)+'"><div style="background-image:url('+hit.optimized_image[1]+') !important" class="text"><div class="inside">' + hit._highlightResult.title.value + '</div></div></li></a>';
      });
    });
  }

  $('.plumber').click(function(){
    $('#search-box').val('Plumbers');
    helper.setQuery('Plumbers').search();
  });
  $('.petcare').click(function(){
    $('#search-box').val('Pet Care & Pet Boarding');
    helper.setQuery('Pet Care & Pet Boarding').search();
  });
  $('.cleaning').click(function(){
    $('#search-box').val('Cleaning');
    helper.setQuery('Cleaning').search();
  });
  $('.entertainment').click(function(){
    $('#search-box').val('Entertainers');
    helper.setQuery('Entertainers').search();
  });
  $('.florist').click(function(){
    $('#search-box').val('Florists');
    helper.setQuery('Florists').search();
  });
  $('.funerals').click(function(){
    $('#search-box').val('Funeral Assistance');
    helper.setQuery('Funeral Assistance').search();
  });
  $('.catering').click(function(){
    $('#search-box').val('Catering');
    helper.setQuery('Catering').search();
  });
  $('.music').click(function(){
    $('#search-box').val('Musicians & Bands');
    helper.setQuery('Musicians & Bands').search();
  });
  $('.photographers').click(function(){
    $('#search-box').val('Photographers');
    helper.setQuery('Photographers').search();
  });
  $('.removals').click(function(){
    $('#search-box').val('Movers & Removalists');
    helper.setQuery('Movers & Removalists').search();
  });
  $('.foodtruck').click(function(){
    $('#search-box').val('Foodtruck');
    helper.setQuery('Foodtruck').search();
  });

  $('.search-buttons .btn').click(function(){
    helper.setQuery($('#search-box').val()).search();
    $('.overthefold').addClass('searched');
    $(this).hide();
  });

  $('.front-icon').click(function(){
    $('.overthefold').addClass('searched');
    $('.search-buttons').hide();
  });

  $('#search-box').on('keyup', function() {
    // $('#search-box').scrollTop();
    if($('.overthefold').hasClass('searched')) {
      helper.setQuery($(this).val()).search();
    }
    //otherhelper.setQuery($(this).val()).search();
  });

  var autocompleteChangeEvents = ['selected', 'autocompleted'];

  autocompleteChangeEvents.forEach(function (eventName) {
    autocmplt.on('autocomplete:' + eventName, function (event, suggestion, datasetName) {
      helper.setQuery(suggestion.Keyword).search();
    });
  });

  var stripe = Stripe('pk_test_37TKfr9SUQ8MF3qxotmJaa4f');
  var elements = stripe.elements();

  var card = elements.create('card', {
    hidePostalCode: true,
    style: {
      base: {
        iconColor: '#F99A52',
        color: '#32315E',
        lineHeight: '48px',
        fontWeight: 400,
        fontFamily: '"Helvetica Neue", "Helvetica", sans-serif',
        fontSize: '15px',

        '::placeholder': {
          color: '#CFD7DF',
        }
      },
    }
  });
  card.mount('#card-element');

  function setOutcome(result) {
    var successElement = document.querySelector('.success');
    var errorElement = document.querySelector('.error');
    successElement.classList.remove('visible');
    errorElement.classList.remove('visible');

    if (result.token) {
      // Use the token to create a charge or a customer
      // https://stripe.com/docs/charges

      $('.token').val(result.token.id);
      var dataid = $('.buy .dataid').text();
      $('.package').val(dataid);

      successElement.querySelector('.token').textContent = result.token.id;
      successElement.classList.add('visible');
      document.getElementById('stripeform').submit();

    } else if (result.error) {
      errorElement.textContent = result.error.message;
      errorElement.classList.add('visible');
    }
  }

  card.on('change', function(event) {
    setOutcome(event);
  });

  document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault();
    var form = document.querySelector('form');
    var extraDetails = {
      name: form.querySelector('input[name=cardholder-first-name]').value,
      address_zip: form.querySelector('input[name=address-zip]').value
    };
    stripe.createToken(card, extraDetails).then(setOutcome);

  });
</script>
</body>
</html>