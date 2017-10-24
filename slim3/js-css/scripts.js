$(document).ready(function() {
  var client1 = algoliasearch("N4C3NC4744", "fda98971857f13213af8ee5654b5f47e");
  var index1 = client1.initIndex('new');
//initialize autocomplete on search input (ID selector must match)

  var autocmplt = autocomplete('#search-box',
    {hint: false}, {
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
      geocodeAddress2(helper, geocoder);
    });

    google.maps.event.addListener(autocomplete, 'place_changed', function () {
      geocodeAddress2(helper, geocoder);
    });

    if (input.value)
      geocodeAddress2(helper, geocoder);
  }

// Geocode the address provided.
  function geocodeAddress2(helper, geocoder) {
    var address = document.getElementById('google-search-input').value;

    geocoder.geocode({'address': address}, function (results, status) {
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


  $('.categories').click(function () {
    $('.active').removeClass('active');
    $('.icons').removeClass('hidden');
    $(this).addClass('active');
  });

  $('.businesses').click(function () {
    $('.active').removeClass('active');
    $('.icons').addClass('hidden');
    helper.setIndex('Suppliers').search();
    $(this).addClass('active');
  });

  $('.packages').click(function () {
    $('.icons').addClass('hidden');
    $('.active').removeClass('active');
    helper.setIndex('Package').search();
    $(this).addClass('active');
  });


// Start with results near your IP.
  helper.setQueryParameter('aroundLatLngViaIP', true);
  helper.setQueryParameter('aroundRadius', radius);

  function renderSlider(content) {
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
        if (key < 50) {
          range = range + data[key];
        }
        if (key <= 100 && key >= 50) {
          range2 = range2 + data[key];
        }
        if (key <= 200 && key > 101) {
          range3 = range3 + data[key];
        }
        if (key <= 500 && key > 201) {
          range4 = range4 + data[key];
        }
        if (key <= 1000 && key > 501) {
          range5 = range5 + data[key];
        }
        if (key > 1001) {
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
        labels: ['0-50 ' + currency, '50-100 ' + currency, '100-200' + currency, '200-500' + currency, '500-1000' + currency, '1000+' + currency]
      }, {
        donut: true,
        donutWidth: 80,
        donutSolid: true,
        startAngle: 270,
        total: total * 2,
        showLabel: true
      });


      chart.on('draw', function (data) {
        if (data.type === 'slice') {
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
              to: '0px',
              easing: Chartist.Svg.Easing.easeOutQuint,
              // We need to use `fill: 'freeze'` otherwise our animation will fall back to initial (not visible)
              fill: 'freeze'
            }
          };

          // If this was not the first slice, we need to time the animation so that it uses the end sync event of the previous animation
          if (data.index !== 0) {
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
      chart.on('created', function () {
        if (window.__anim21278907124) {
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

  helper.on('result', function (content) {
    console.log(content);

    renderHits(content);

    if ($('.searched')[0]) {
      renderSlider(content);
    }

    $('.showing').remove();
    var html = '<div class="col-md-12 text-right showing">Found ' + content.nbHits + ' results in ' + content.processingTimeMS + ' ms</div>';
    $('#searchinsides').before(html);
  });

  function getSize(i) {
    var size = 'col-md-4';
    if (i == 1) {
      size = 'col-md-5';
    }
    if (i == 2) {
      size = 'col-md-3';
    }
    if (i == 4) {
      size = 'col-md-3';
    }
    if (i == 6) {
      size = 'col-md-5';
    }
    if (i == 8) {
      size = 'col-md-5';
    }
    if (i == 9) {
      size = 'col-md-3';
    }
    if (i == 10) {
      size = 'col-md-5';
    }
    if (i == 12) {
      size = 'col-md-3';
    }
    return size;
  }

  $('.searchinsides h4').click(function () {
    $('#searchinsides').toggle();
    $(this).find('.glyphicon').toggleClass('glyphicon-chevron-right');
    $(this).find('.glyphicon').toggleClass('glyphicon-chevron-down');
  });

  $('.supply h4').click(function () {
    $('#suppliers').toggle();
    $(this).find('.glyphicon').toggleClass('glyphicon-chevron-right');
    $(this).find('.glyphicon').toggleClass('glyphicon-chevron-down');
  });


  function typeform(hit) {
    if (hit.type == 'photography') {
      return 'zoNsrr';
    }
    if (hit.type == 'marketplace_bands_and_artists') {
      return 'VJKoBC';
    }
    if (hit.field_organisation_industry == 'Catering') {
      return 'aOIx8b';
    }

    return 'zoNsrr';
  }

  helper.search(searchterm);

  function renderHits(content) {
    var i = 0;
    $('#searchinsides').html(function () {
      return $.map(content.hits, function (hit) {

        console.log(hit);
        i++;

        hit.price = hit.field_product_price.toFixed(2);

        return '<li id="row-' + i + '" class="box col-sm-6 col-xs-12 box-' + hit.objectID + ' ' + getSize(i) + '">' +
          '<div class="hidden dataid">' + hit.objectID + '</div>' +
          '<div style="background-image:url(' + hit.optimized_large_image[1] + ') !important" firstimage="' + hit.optimized_large_image[1] + '" secondimage="' + hit.optimized_large_image[2] + '" thirdimage="' + hit.optimized_large_image[3] + '" class="text">' +
          '<div class="arrow-left">&lt;</div>' +
          '<div class="arrow-right">&gt;</div>' +
          '<div class="inside">' +
          '<span class="product">' + hit._highlightResult.title.value + '</span>' +
          '<span class="business">' + hit._highlightResult.business_name.value + '</span>' +
          '</div>' +
          '</div>' +
          '<div class="description">' +
          '<span class="hidden title">' + hit._highlightResult.title.value + '</span>' +
          '<div class="pricing"><span class="currency">' + hit.currency + '</span><span class="price">' + hit.price + '</span>' +
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
    $('.close').click(function () {
      $('.open').removeClass('open');
    });

    $('.types .box').click(function () {
      if (!$(this).hasClass('open')) {
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
    $('.arrow-right').click(function () {
      var parent = $(this).closest('.text');
      if (!$(this).hasClass('first')) {
        $(this).addClass('first');
        var image = parent.attr('secondimage');
        parent.attr('style', 'background-image:url(' + image + ') !important');
      } else {
        $(this).removeClass('first');
        var image = parent.attr('firstimage');
        parent.attr('style', 'background-image:url(' + image + ') !important');
      }
    });
  }

  $('.searchbread, .servicebread').click(function () {
    $('.buy').removeClass('buy');
    $('body').removeClass('checkout');
    $('body').removeClass('searched');
    $('.overthefold').removeClass('searched');
    $('.checkoutbread').addClass('hidden');
    $('.servicebread').addClass('future');
    $('.servicebread').removeClass('done');

    $('html, body').animate({
      scrollTop: $('body').offset().top - 15
    }, 50);
  });

  function initAction() {
    $('.box .enquiry').click(function () {
      console.log('here');
      var parent = $(this).closest('.box');
      parent.addClass('buy');
      $('body').addClass('checkout');

      var dataid = $('.buy .dataid').text();
      $('.package').val(dataid);
      $('body').addClass('searched');
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

  otherhelper.on('result', function (content) {
    console.log(content);
    otherrenderHits(content);
  });

  function getSizeSecond(i) {
    var size = 'col-md-2';
    if (i == 1) {
      size = 'col-md-4';
    }
    if (i == 3) {
      size = 'col-md-2';
    }
    if (i == 6) {
      size = 'col-md-4';
    }
    if (i == 8) {
      size = 'col-md-4';
    }
    if (i == 7) {
      size = 'col-md-4';
    }
    return size;
  }

  function otherrenderHits(content) {
    var i = 0;
    $('#suppliers').html(function () {
      return $.map(content.hits, function (hit) {
        i++;
        var hexArray = ['#FFB91A', '#F34D10', '#00BED1', '#0098AE', '#0098AE', '#191F2F'];
        var randomColor = hexArray[Math.floor(Math.random() * hexArray.length)];
        return '<a href="' + hit.url + '"><li class="box col-xs-6 ' + getSizeSecond(i) + '"><div style="background-image:url(' + hit.optimized_image[1] + ') !important" class="text"><div class="inside">' + hit._highlightResult.title.value + '</div></div></li></a>';
      });
    });
  }

  $('.plumber').click(function () {
    $('#search-box').val('Plumbers');
    helper.setQuery('Plumbers').search();
  });
  $('.petcare').click(function () {
    $('#search-box').val('Pet Care & Pet Boarding');
    helper.setQuery('Pet Care & Pet Boarding').search();
  });
  $('.cleaning').click(function () {
    $('#search-box').val('Cleaning');
    helper.setQuery('Cleaning').search();
  });
  $('.entertainment').click(function () {
    $('#search-box').val('Entertainers');
    helper.setQuery('Entertainers').search();
  });
  $('.florist').click(function () {
    $('#search-box').val('Florists');
    helper.setQuery('Florists').search();
  });
  $('.funerals').click(function () {
    $('#search-box').val('Funeral Assistance');
    helper.setQuery('Funeral Assistance').search();
  });
  $('.catering').click(function () {
    $('#search-box').val('Catering');
    helper.setQuery('Catering').search();
  });
  $('.music').click(function () {
    $('#search-box').val('Musicians & Bands');
    helper.setQuery('Musicians & Bands').search();
  });
  $('.photographers').click(function () {
    $('#search-box').val('Photographers');
    helper.setQuery('Photographers').search();
  });
  $('.removals').click(function () {
    $('#search-box').val('Movers & Removalists');
    helper.setQuery('Movers & Removalists').search();
  });
  $('.foodtruck').click(function () {
    $('#search-box').val('Foodtruck');
    helper.setQuery('Foodtruck').search();
  });

  $('.search-buttons .btn').click(function () {
    helper.setQuery($('#search-box').val()).search();
    $('.overthefold').addClass('searched');
    $('body').addClass('searched');

    $(this).hide();
  });

  $('.front-icon').click(function () {
    $('.overthefold').addClass('searched');
    $('body').addClass('searched');
    $('.search-buttons').hide();
  });

  $('#search-box').on('keyup', function () {
    // $('#search-box').scrollTop();
    if ($('.overthefold').hasClass('searched')) {
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

  card.on('change', function (event) {
    setOutcome(event);
  });

  document.querySelector('form').addEventListener('submit', function (e) {
    e.preventDefault();
    var form = document.querySelector('form');
    var extraDetails = {
      name: form.querySelector('input[name=cardholder-first-name]').value,
      address_zip: form.querySelector('input[name=address-zip]').value
    };
    stripe.createToken(card, extraDetails).then(setOutcome);
  });
});