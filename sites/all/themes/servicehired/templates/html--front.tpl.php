<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
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
  <style>
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
          width: 32.5%;
          width: calc(98.5%/3);
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
      span.tags {
          display: block;
          padding: 1em 0;
      }
      span.tags label {
          font-weight: bold;
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
  <div class="selection-category">
    <ul>
        <li class="businesses">
        <a href="#">Businesses</a>
      </li>
        <li class="packages active">
            <a href="#">Packages</a>
        </li>
      <li class="categories">
        <a href="#">Categories</a>
      </li>
    </ul>

  </div>
    <div class="icons row hidden">
        <div class="front-icon catering">
            <div class="tooltiptext">Catering</div>
        </div>
        <div class="front-icon music">
            <div class="tooltiptext">Musicians & Bands</div>
        </div>
        <div class="front-icon photographers">
            <div class="tooltiptext">Photographers</div>
        </div>
        <div class="front-icon removals">
            <div class="tooltiptext">Movers & Removalists</div>
        </div>
        <div class="front-icon foodtruck">
            <div class="tooltiptext">Food trucks</div>
        </div>
        <div class="front-icon plumber">
            <div class="tooltiptext">Plumbers</div>
        </div>
        <div class="front-icon petcare">
            <div class="tooltiptext">Pet Care & Pet Boarding</div>
        </div>
        <div class="front-icon cleaning">
            <div class="tooltiptext">Cleaning</div>
        </div>
        <div class="front-icon entertainment">
            <div class="tooltiptext">Entertainers</div>
        </div>
        <div class="front-icon florist">
            <div class="tooltiptext">Florists</div>
        </div>
        <div class="front-icon funerals">
            <div class="tooltiptext">Funeral Assistance</div>
        </div>
    </div>
  <!-- HTML Markup -->
  <div class="two-boxes">
    <div class="box-search box-left" id="aa-input-container">
      <input type="search" id="search-box" class="aa-input-search" placeholder="Search for anything" name="search" autocomplete="off" />
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
  </div>
  <div class="menu">
    <div class="leftmenu">
      <a href="https://www.inventshift.com/blog">Blog</a>
    </div>
    <div class="rightmenu">
        <a class="listyourbusiness" href="/list-your-business">List your business</a>
      <a href="/user">Sign In</a>
    </div>
  </div>
  <div class="bottom-menu">
    <ul>
      <li>
        <a href="#">About us</a>
      </li>
      <li>
        <a href="#">Contact</a>
      </li>
      <li>
        <a href="#">Join as a business</a>
      </li>
      <li>
        <a href="#">Inventshift fund</a>
      </li>
    </ul>

  </div>
</div>
<div class="marketing row">
    <div class="types">
        <ul id="searchinsides" class="">
        </ul>
    </div>
    <div class="suppliers">

    </div>
</div>


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

<footer class="footer container-fluid">
    <div class="region region-footer">
        <section id="block-block-1" class="block block-block clearfix">
            <div class="footer-width">
                <div class="row">
                    <div class="col-sm-3">
                        <ul>
                            <li class="footer-logo"><img class="ft-logo" src="/sites/all/themes/servicehired/images/inventshift-icon.png">ServiceHired</li>
                            <li class="small">ServiceHired makes booking services online simple. Find, compare and book. Simple as that.</li>
                        </ul>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <ul>
                            <li> Company</li>
                            <li></li>
                            <li><a href="/about-us">About Us</a></li>
                            <li><a href="/faq">FAQ</a></li>
                            <li><a href="/press">Press & Media</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <ul>
                            <li> Finding a service</li>
                            <li><a href="/social-enterprise-jobs">How it works</a></li>
                            <li><a href="/social-enterprise-jobs">Browse suppliers</a></li>
                            <li><a href="/social-enterprise-jobs">Sustainable business</a></li>
                            <li><a href="/contact-us">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2">
                        <ul>
                            <li> Finding customers</li>
                            <li><a href="/social-enterprise-jobs">List your business</a></li>
                            <li><a href="/social-enterprise-jobs">How it works</a></li>
                            <li><a href="/social-enterprise-jobs">Tools for business</a></li>
                            <li><a href="/social-enterprise-jobs">Sustainable business</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-8">
                        <ul>
                            <li><a href="/terms">Terms</a></li>
                            <li><a href="/terms">Privacy policy</a></li>
                            <li><a href="/terms">Terms of use</a></li>

                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <div class="social text-right"><a target="_blank" href="https://www.facebook.com/inventshift/"><i class=" fa fa-facebook"></i></a>
                            <a target="_blank" href="https://twitter.com/inventshift_"><i class="fa fa-twitter"></i></a>
                            <a target="_blank" href="https://www.instagram.com/inventshift/"><i class="fa fa-instagram"></i></a>
                            <a target="_blank" href="https://www.youtube.com/channel/UCr5fTxF0qprW61P8sBetZ4Q"><i class="fa fa-youtube-play"></i></a>
                            <a target="_blank" href="https://www.linkedin.com/company-beta/12900724/"><i class="fa fa-linkedin"></i></a>
                        </div><p class="trademark">Copyright © 2017 Inventshift<br><span class="rights">All rights reserved</span></p>
                    </div>
                </div>
            </div>
        </section>
        <section id="block-block-11" class="block block-block clearfix">
            <div class="hidden">www.inventshift.com</div>
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

  helper.on('result', function(content) {
    console.log(content);

    renderHits(content);

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

        if ($('.packages').hasClass('active')) {
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
            '<div class="btn btn-primary enquiry" typeform="">Buy now</div></div>' +
            '<div class="close">x</div>' +
            '</div>' +
            '</li>';
        } else {
          hit.rating = 0;
          if (hit.field_organisation_rating) {
            hit.rating = hit.field_organisation_rating;
          }

          var reviews = '<div class="rating rating-' + hit.rating + '"> ' +
            '<span class="rating-count">' + hit.field_organisation_review_count + ' Reviews</span> ' +
            '<span class="stars-container stars-' + hit.rating + '">★★★★★</span> ' +
            '</div>';

          var backgroundimg = '';
          if (hit.imageurl !== '') {
            backgroundimg = 'background-image:url(' + hit.imageurl + ') !important';
          }
          i++;
          return '<li id="row-' + i + '" class="box col-sm-6 col-xs-12 box-' + hit.objectID + ' ' + getSize(i) + '">' +
            '<div class="hidden dataid">' + hit.objectID + '</div>' +
            '<div style="background-image:url(' + hit.optimized_image[1] + ') !important" class="text">' +
            '<div class="inside">' + hit._highlightResult.title.value +
            '</div>' +
            '</div>' +
            '<div class="description">' + hit.venue_summary + '' +
            '<div class="list"><ul class="tags"><h5>Categories:</h5></ul></div>' + reviews +
            '<div class="actions"><a href="' + hit.url + '"><div class="btn btn-info portfolio">Portfolio & More information</div></a>' +
            '<div class="btn btn-primary enquiry" typeform="' + typeform(hit) + '" >Quick Enquiry</div></div></div>' +
            '</li>';
        }
      });

    });

    initTypeform();
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

        if (!$(this).hasClass('added')) {
          $.get('/developers/api/getdata/' + nid).done(function (data) {
            for (var i = 0, len = data.length; i < len; i++) {
              $('.box-' + nid + ' ul.tags').append('<li>' + data[i] + '</li>');
            }
          });
        }
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


  function initTypeform(){
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


  helper.search();
</script>
</body>
</html>