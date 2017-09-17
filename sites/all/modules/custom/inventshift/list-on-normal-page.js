$(document).ready(function () {
  // INITIALIZATION
  // ==============

  var APPLICATION_ID = 'UWAY2FWQKH';
  var SEARCH_ONLY_API_KEY = '6ca2fdf0eda0016e589662b2e343b3a1';
  var INDEX_NAME = 'Algolia Index';

  // Client + Helper initialization
  var algolia = algoliasearch(APPLICATION_ID, SEARCH_ONLY_API_KEY);
  var algoliaHelper = algoliasearchHelper(algolia, INDEX_NAME, {
    hitsPerPage: 9
  });

  algoliaHelper.setQueryParameter('getRankingInfo', true);

  var $hits = $('#hits');
  var hitsTemplate = Hogan.compile($('#hits-template').text());

  // PAGE STATES
  // ===========
  function setPageState(state) {
    resetPageState();
    beginPageState(state);
  }

  function beginPageState(state) {
    pageState = state;

    algoliaHelper.setQueryParameter('aroundLatLngViaIP', true);

    algoliaHelper.search();
  }

  function resetPageState() {
    algoliaHelper.setQueryParameter('aroundLatLngViaIP', undefined);
  }

  // DISPLAY RESULTS
  // ===============
  algoliaHelper.on('result', function (content) {
    renderHits(content);
  });

  function renderHits(content) {

    if (content.hits.length === 0) {
      $hits.html(noResultsTemplate.render());
      return;
    }

    content.hits = content.hits.slice(0, 100);

    for (var i = 0; i < content.hits.length; ++i) {

      var hit = content.hits[i];

      hit.newimage = hit.optimized_image[1];

      if (hit.optimized_image[2]) {
        hit.lazyimage = hit.optimized_image[2];
      }
      if (hit.optimized_image[3]) {
        hit.lazyimage2 = hit.optimized_image[3];
      }

      if (hit) {

        hit.displayCity = (hit.name === hit.city);
        if (hit._rankingInfo.matchedGeoLocation) {
          hit.distance = parseInt(hit._rankingInfo.matchedGeoLocation.distance / 1000, 10) + ' km';
        }
      }

    }
    $hits.html(hitsTemplate.render(content));
    $('.hit').click(function(){

      var datetime = $(".date-time-picker").val();
      if (datetime){
        datetime = encodeURI(datetime);
        // setCookie(lang + '_pref_dt', datetime, 1);
      }
    });
  }

  var client = algoliasearch('UWAY2FWQKH', '6ca2fdf0eda0016e589662b2e343b3a1');
  var index = client.initIndex('Algolia Index');

  // create the first autocomplete.js dataset: vacation rentals
  var rentalsDataset = {
    source: autocomplete.sources.hits(index, {hitsPerPage: 2}),
    displayKey: 'name',
    name: 'rentals',
    templates: {
      header: '<div class="ad-example-header">Venues</div>',
      suggestion: function (suggestion) {
        return '<div class="ad-example-suggestion">' +
          '<a target="_blank" href="' + suggestion.url + '">' +
          '<img src="/" ' + site_url + '/' + suggestion.optimized_image[1] + '>' +
          '<div>' +
          suggestion._highlightResult.title.value + '<br />' +
          '<small>' + suggestion.vcity + '</small>' +
          '</div>' +
          '</a>' +
          '</div>';
      }
    }
  };

});

