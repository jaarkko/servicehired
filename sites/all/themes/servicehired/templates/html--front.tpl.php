<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>ServiceHired</title>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Rubik');
  </style>
  <style>

  </style>
</head>
<body>
<div class="overthefold">
  <img class="logo" src="images/inventshift-icon.png">
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
      <input type="search" id="aa-search-input" class="aa-input-search" placeholder="Search for players or teams..." name="search" autocomplete="off" />
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
  </div>
  <div class="menu">
    <div class="leftmenu">
      <a href="#">Blog</a>
    </div>
    <div class="rightmenu">
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
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
<!-- Initialize autocomplete menu -->
<script>
  var client = algoliasearch("N4C3NC4744", "fda98971857f13213af8ee5654b5f47e");
  var index = client.initIndex('YourIndex');
  //initialize autocomplete on search input (ID selector must match)
  autocomplete('#aa-search-input',
    { hint: false }, {
      source: autocomplete.sources.hits(index, {hitsPerPage: 5}),
      //value to be displayed in input control after user's suggestion selection
      displayKey: 'name',
      //hash of templates used when rendering dataset
      templates: {
        //'suggestion' templating function used to render a single suggestion
        suggestion: function(suggestion) {
          return '<span>' +
            suggestion._highlightResult.name.value + '</span><span>' +
            suggestion._highlightResult.team.value + '</span>';
        }
      }
    });
</script>
</body>
</html>