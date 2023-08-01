<?php
/*
Template Name: Landing
*/
$gutenberg_text = get_field('gutenberg_text');
$gutenberg_colorpicker = get_field('gutenberg_colorpicker');
$gutenberg_datepicker = get_field('gutenberg_datepicker');
?>
<div class="container">
	<div class="h1-title"><?php echo $gutenberg_text;?></div><br>
	<div class="color-picker">
		<style type="text/css">
			.primary-background {
				background-color: <?php the_field('gutenberg_colorpicker'); ?>;
			}
		</style><br>
			<div class="primary-background">
				<h1>Date Format</h1>
				<br>
				<span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
					industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
					scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
					electronic typesetting.</span>
		   		</div><br>
		   <div class="datepicker">
		   		<?php echo $gutenberg_datepicker;?>
		   </div>

	</div>
<div>


