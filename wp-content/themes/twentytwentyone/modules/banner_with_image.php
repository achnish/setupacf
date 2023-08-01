<?php
$blockname = basename(__FILE__, '.php');
$banner_h1_title = get_sub_field('banner_h1_title');
$banner_paragraph = get_sub_field('banner_paragraph');
$banner_button = get_sub_field('banner_button');
$banner_image = get_sub_field('banner_image');
$job_show_hide = get_sub_field('job_show_hide');


			 
if($job_show_hide[0] == 'Yes') { 
	$class = 'This is If condition contact_shap';
}else{ 
	 $class = 'This is Else Condition';
	 } 
?>

<section class="sec-job-banner">
	<img class="job-banner__bg" src="<?php echo $banner_image['url']; ?>" alt="bg image">
	<div class="container">
		<h1 class="banner_title"><?php echo $banner_h1_title; ?></h1>
			<div class="banner__content">
				<p><?php echo $banner_paragraph; ?></p>
				<p><?php echo $header_text_editor; ?></p>
				<a class="banner__call-to-action" href="<?php echo $banner_button['url']; ?>"><?php echo $banner_button['title']; ?></a><br>
				<?php echo $class;?>
	
			</div>

			<div class="xyz">
				<?php 
				//for Repeter field
				if( have_rows('color_button') ):
    				while( have_rows('color_button') ) : the_row();
        				$name = get_sub_field('name');?>
					<p><?php echo $name; ?></p><br>
					<?php
					    endwhile;
					endif;

				?>

			</div>


	</div>

</section>

	