jQuery(function ($) {
    jQuery('.js-filter select').on('change',function () {
        var cat = $('#cat').val()
        rating = $('#popularity').val();
        var data = {
            action: 'filter_posts',
            cat: cat,
            rating: rating,
        }
        jQuery.ajax({
            url: variables.ajax_url,
            type: 'POST',
            data: data,
            success: function (response) {
                jQuery('.js-movies').html(response);
            }
        })
    });
});
// ================ Start  ======================== //
jQuery(document).ready(function($) {
    jQuery("#keyword").keyup(function (event) {
        var keyword = jQuery("#keyword").val();
        if (keyword.length > 2) {
            var data = {
              action: 'seach_products_ajax',
              keyword:keyword,
          };
          jQuery.ajax({
          url: variables.ajaxurl, 
          type: 'POST',
          data: data,
          success: function(response) {
            // alert("Hello  Tanzil");
            jQuery('.xyz').html(response);

        },
        error: function() {
            // alert("Hello md");
            console.log('Error loading products.');
        }
        });
      }
  });   
});
// ================ End  ======================== //


jQuery(document).ready(function($) {
    // Search input field
    var $searchInput = $('#product-search');

    // Search results container
    var $resultsContainer = $('#search-results');

    $searchInput.on('keyup', function() {
        var searchTerm = $(this).val();

        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
                action: 'product_search', // The AJAX action hook we defined in the PHP function
                search: searchTerm,
            },
            success: function(response) {
                // Clear previous results
                $resultsContainer.empty();

                if (response.length > 0) {
                    // Display search results
                    $.each(response, function(index, product) {
                        $resultsContainer.append('<li><a href="' + product.permalink + '">' + product.title + '</a></li>');
                    });
                } else {
                    // No results found
                    $resultsContainer.append('<li>No results found.</li>');
                }
            },
        });
    });
});





