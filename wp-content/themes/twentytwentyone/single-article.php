<?php
get_header();
$blockname = basename(__FILE__, '.php');
$location = get_field('location');



?>


<h1><?php //the_title();?></h1>



<?php foreach ($location as $locations): ?>
	<img src="<?php echo  get_the_post_thumbnail_url($locations->ID,'thumbnail'); ?>">	
   <a href="<?php echo get_page_link($locations->ID);?>">
		<h2><?php echo $locations->post_title; ?> </h2>
	</a>
	<p><?php echo $locations->post_content; ?></p>

	<a href="<?php echo get_the_permalink(); ?>">
		<img src="<?php echo get_the_post_thumbnail_url($post_id, 'thumbnail'); ?>" alt="slide5-active">
	</a>


<?php endforeach; ?>

<?php //var_dump($location); ?> 	

<?php
get_footer();
?>

