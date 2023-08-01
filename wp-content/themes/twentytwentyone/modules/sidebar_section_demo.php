<?php

$blockname = basename(__FILE__, '.php');



if( have_rows('header_repeater') ):
    while( have_rows('header_repeater') ) : the_row();
        $section_field = get_sub_field('header_maintext');
           echo "<pre>";
           print_r($header_maintext)
           exit;
	            // echo $sub_value;

    endwhile;
endif;
?>





