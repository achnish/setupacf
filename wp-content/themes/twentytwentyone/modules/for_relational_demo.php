<?php

$blockname = basename(__FILE__, '.php');
$location = get_sub_field('location');

// echo "<pre>";
// print_r($location);
// echo "</pre>";

?>	


<?php foreach ($location as $locations): ?>
   <a href="<?php echo get_page_link($locations->ID);?>">
		<h2><?php echo $locations->post_title; ?> </h2>
	</a>

<?php endforeach; ?>