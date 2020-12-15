$(document).ready(function () {
    'use strict';

    // UA link resolver for AEM DAM PDF links
    (function () {
        var pdf_baselink = "https://www.paypalobjects.com/digitalassets/c/website/ua/pdf/";
        if ($('.ua-pdf').length > 0) {
          $('.ua-pdf').each(function() {
            var patt = /(^.*\/webapps\/mpp\/ua\/|^.*\/[a-z][a-z,2]\/)/;
            var filename = $(this).attr('href').replace(patt,"");
            if (filename.search('shared') !== -1) {
              // PDF is in a shared folder. The href attr is expected to be of the form shared/<entity>/<filename>.pdf
              var href = $(this).attr('href').replace(patt,"").split('https://www.paypal.com/');
              var lang = $('html').attr('lang').split('-')[0];
              $(this).attr('href', pdf_baselink + 'shared/' + href[1] + '/' + lang + '/' + href[2]);
            } else if (filename.search('global') !== -1) {
              // PDF is in the global folder. The href attr is expected to be of the form global/<filename>.pdf
              var href = $(this).attr('href').replace(patt,"");
              $(this).attr('href', pdf_baselink + href);
            } else {
              // PDF is in a country folder. The href attr is expected to be of the form <filename>.pdf
              var locale = $('html').attr('lang').split('-');
              $(this).attr('href', pdf_baselink + locale[1] + '/' + locale[0] + '/' + filename);
            }
          });         
        }
    })();

    // Legalhub dropdown list functionality
    (function () {
        var selectid = 'legalhub'; 
        var select = document.getElementById(selectid); 
        if (select != null) { 
            select.onchange = function() { 
            window.parent.location.href = select.options[select.selectedIndex].value; 
          }
        }
    })();

    // add scroll spy
    $('body').attr('data-spy', 'scroll').attr('data-target', '#pp-lateral-nav').attr('data-offset', '175');

    // Ascending sort
    function asc_sort(a, b) {
        // Match only non-word characters. Makes sure to keep Unicode word characters for different languages.
        var patt = /[\u0021-\u002F,\u003A-\u003F,\u005B-\u005F]+/g;
        return ($(b).text().replace(patt, '').toUpperCase()) < ($(a).text().replace(patt, '').toUpperCase()) ? 1 : -1;
    }

    // Changes all ordered lists of type lower-alpha to the bullet style given
    // @param style the bullet style to use for lower-alpha ordered lists in select countries
    function apply_list_style(style) {
        $('ol[style]').filter(function () {
            return (/list-style-type:\s*lower-alpha/).test($(this).attr('style'));
        }).attr('style', 'list-style-type: ' + style + ';');
    }

    // ******************* Event Handlers ************************

    // When the page first loads, check for a bookmark in the url and adjust its position to account for the sticky headers 
    /*(function () {
        var bookmark = window.location.hash;
    }());*/

    // Scroll to the correct position for clicked bookmarks to account for sticky headers
    $('div.ua-container a[href]').on('click', function(event) {
        // strip out # symbol in currentTarget as this is used to query a name attr in target anchor tag
        var name = event.currentTarget.hash.substring(1),
            target = $("a[name=" + name + "]"),
            scrollTo;
        setTimeout(function(){
          scrollTo = target.offset().top;
          $('html, body').scrollTop(scrollTo);
        }, 50);
    });

    // Sort function for UA classes list-sort-nobullet and list-sort.
    $('.list-sort-nobullet').children().sort(asc_sort).appendTo('.list-sort-nobullet');
    $('.list-sort').children().sort(asc_sort).appendTo('.list-sort');

    // Open browser print dialog window for UA print links.
    $('#print').click(function () { window.print(); return false; });

    // Use different bullet style for lower alpha ordered lists in select countries.
    switch ($('html').attr('lang')) {
    case 'th-TH':
        apply_list_style('decimal');
        break;
    case 'he-IL':
        apply_list_style('decimal');
        break;
    }

    // ******************* Sticky Headers ************************

    // First check if waypoints is being used for the page
    if (typeof Waypoint !== "undefined") {
      var waypoints1 = $('.section1').waypoint({
      handler: function(direction) {
        if (direction == 'down') {
              $('.sub-hero-banner-1').addClass('sticky');
        }
      },
      offset: 65
      });

      var waypoints2 = $('.section2').waypoint({
        handler: function(direction) {
          if (direction == 'down') {
                $('.sub-hero-banner-1').removeClass('sticky');
                $('.sub-hero-banner-2').addClass('sticky');
          } else {
                $('.sub-hero-banner-1').addClass('sticky');
                $('.sub-hero-banner-2').removeClass('sticky');
          }
        },
        offset: 65
      });

       var waypoints3 = $('.section3').waypoint({
        handler: function(direction) {
          if (direction == 'down') {
                $('.sub-hero-banner-2').removeClass('sticky');
                $('.sub-hero-banner-3').addClass('sticky');
          } else {
                $('.sub-hero-banner-2').addClass('sticky');
                $('.sub-hero-banner-3').removeClass('sticky');
          }
        },
        offset: 65
      });

       var waypoints4 = $('.section4').waypoint({
        handler: function(direction) {
          if (direction == 'down') {
                $('.sub-hero-banner-3').removeClass('sticky');
                $('.sub-hero-banner-4').addClass('sticky');
          } else {
                $('.sub-hero-banner-3').addClass('sticky');
                $('.sub-hero-banner-4').removeClass('sticky');
          }
        },
        offset: 65
      });


       var waypoints5 = $('.section5').waypoint({
        handler: function(direction) {
          if (direction == 'down') {
                $('.sub-hero-banner-4').removeClass('sticky');
                $('.sub-hero-banner-5').addClass('sticky');
          } else {
                $('.sub-hero-banner-4').addClass('sticky');
                $('.sub-hero-banner-5').removeClass('sticky');
          }
        },
        offset: 65
      });

        var waypoint6 = $('.section6').waypoint({
        handler: function(direction) {
          if (direction == 'down') {
                $('.sub-hero-banner-5').removeClass('sticky');
                $('.sub-hero-banner-6').addClass('sticky');
          } else {
                $('.sub-hero-banner-5').addClass('sticky');
                $('.sub-hero-banner-6').removeClass('sticky');
          }
        },
        offset: 65
      });
    }
});

