$(function(){
  currentPage++;
  var totalPost = jQuery(this).data('total');
  var currentPost = currentPage * 3;
 
  $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 100000,
      values: [ 0, 100000 ],
      slide: function( event, ui ) {
      $( "#amount" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
      },
      change: function( event, ui ) {
      if (event) {
         selcategory = [];
        $("input:checkbox[class=cat_nm]:checked").each(function(){
        selcategory.push($(this).val());
    });
        var min = ui.values[0];
        var max = ui.values[1];
        
      $.ajax ({
        type: 'POST',
        url: ajax_posts.ajaxurl,
        dataType: 'html',
        data: {
          action: 'woocommerce_product_get',
          min: min,
          max: max,
          selcategory: selcategory,
        },
        beforeSend: function()
        {
          jQuery('#display_loading').show();
        },
        complete: function(){
          jQuery('#display_loading').hide();
        },
        success: function(resp)
        {
          $('.products').html("");
          $('.products').append(resp);
          if (totalPost == currentPost) 
          {
           $("#slider-range").show();
           $('#slider-range').attr('data-totpost', totalPost);
          }
          else
          {
            $("#display_loading").hide();
          }
        }
      }); 
          }
          // console.log(ui.values);
          // console.log(ui.values[0]);
          // console.log(ui.values[1]);
        }
  });
  $( "#amount" ).val( "₹" + $( "#slider-range" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range" ).slider( "values", 1 ) );
}); 


// jQuery(document).ready(function($) {
//     jQuery("#keyword").keyup(function (event) {
//         var keyword = jQuery("#keyword").val();
//         if (keyword.length > 2) {
//             var data = {
//               action: 'seach_products_ajax',
//               keyword:keyword,
//             };
//             jQuery.ajax({
//               url: variables.ajaxurl, // Make sure ajaxurl is properly defined in WordPress
//               type: 'POST',
//               data: data,
//               success: function(response) {
//                 jQuery('.live-search-results').html(response);
//                 // jQuery('.shopproduct').hide();
//               },
//               error: function() {
//                 console.log('Error loading products.');
//               }
//             });
            
//         }
        
//         });   
// });


// function my_enqueue() {

//     wp_enqueue_script( 'ajax-script', get_template_directory_uri() .'/js/my-ajax-script.js', array('jquery') );

//     wp_localize_script( 'ajax-script', 'my_ajax_object',
//             array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
// }
// add_action( 'wp_enqueue_scripts', 'my_enqueue' );