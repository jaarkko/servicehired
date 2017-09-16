<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>ServiceHired</title>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Rubik');
  </style>
  <style>
      .overthefold {
          font-family: 'Rubik', sans-serif;
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
      }
      li.box.open {
          width: 100% !important;
          height: 500px;
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
          padding: 15px 25px 15px 15px;
          text-align: left;
          bottom: 40px;
          margin: 0;
          min-height: 0;
          text-transform: capitalize;
          background: rgba(0, 0, 0, 0.5);
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
  </style>
</head>
<body>
<div class="overthefold">
    <div class="topbar"><img class="logo" src="/sites/all/themes/servicehired/images/inventshift-icon.png"></div>
  <h1>ServiceHired</h1>
  <h2>Find, compare and book local services anywhere.</h2>
  <div class="selection-category">
    <ul>
      <li class="active">
        <a href="#">Packages</a>
      </li>
      <li>
        <a href="#">Businesses</a>
      </li>
      <li>
        <a href="#">Categories</a>
      </li>
    </ul>

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
      <a href="#">Blog</a>
    </div>
    <div class="rightmenu">
        <a class="listyourbusiness" href="#">List your business</a>
      <a href="#">Sign In</a>
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
<noscript id="deferred-styles">
  <link rel="stylesheet" type="text/css" href="css.css"/>
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
    var address = document.getElementById('map-box').value;

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
  var index = 'Multiindex';

  var client = algoliasearch(applicationID, apiKey);
  var helper = algoliasearchHelper(client, index, {
    hitsPerPage: 12,
    facets: ['field_organisation_type'],
  });

  initialize2(helper);


  $('.socent').click(function(){
    $('.active').removeClass('active');
    $(this).addClass('active');
    helper.setIndex('Multiindex').addFacetRefinement('field_organisation_type', 'Social Enterprise').search();
  });

  $('.businesses').click(function(){
    $('.active').removeClass('active');
    $(this).addClass('active');
    helper.setIndex('Multiindex').removeFacetRefinement('field_organisation_type', 'Social Enterprise').search();
  });

  $('.packages').click(function(){
    $('.active').removeClass('active');
    $(this).addClass('active');
    helper.setIndex('products').clearRefinements().search();
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

          if (hit.currency == 'EUR'){
            hit.currency = '€';
          }
          if (hit.price){
            hit.price = (hit.price/100).toFixed(2);
          }
          return '<li id="row-' + i + '" class="box col-sm-6 col-xs-12 box-' + hit.objectID + ' ' + getSize(i) + '">' +
            '<div class="hidden dataid">' + hit.objectID + '</div>' +
            '<div style="background-image:url(https://inventshift.com/' + hit.optimized_product[1] + ') !important" class="text">' +
            '<div class="inside">' + hit._highlightResult.title.value +
            '</div>' +
            '</div>' +
            '<div class="description"><span class="price">'+ hit.price +'</span> <span class="currency">'+ hit.currency +'</span> ' + hit.venue_summary + '' +
            '<div class="actions"><a href="' + '"><div class="btn btn-info portfolio">Portfolio & More information</div></a>' +
            '<div class="btn btn-primary enquiry" typeform="">Quick Enquiry</div></div></div>' +
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
            '<div style="background-image:url(https://inventshift.com/' + hit.optimized_square_image[1] + ') !important" class="text">' +
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
  var otherindex = 'Multiindex';
  var radius = '100000';

  var otherclient = algoliasearch(otherapplicationID, otherapiKey);
  var otherhelper = algoliasearchHelper(otherclient, otherindex, {
    hitsPerPage: 8,
    disjunctiveFacets: ['field_organisation_directories']
  });

  // Start with results near your IP.
  otherhelper.setQueryParameter('aroundLatLngViaIP', true);
  otherhelper.setQueryParameter('aroundRadius', radius);

  otherhelper.addDisjunctiveFacetRefinement('field_organisation_directories', '0');
  otherhelper.addDisjunctiveFacetRefinement('field_organisation_directories', '1');

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
        return '<a href="'+hit.url+'"><li class="box col-xs-6 '+getSizeSecond(i)+'"><div style="background-image:url(https://inventshift.com/'+hit.optimized_square_image[1]+') !important" class="text"><div class="inside">' + hit._highlightResult.title.value + '</div></div></li></a>';
      });
    });
  }

  $('.search-buttons .btn').click(function(){
    helper.setQuery($('#search-box').val()).search();
    $('.overthefold').addClass('searched');
    $(this).hide();
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