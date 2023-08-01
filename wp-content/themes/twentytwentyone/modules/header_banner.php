<?php
$blockname = basename(__FILE__, '.php');
$header_image = get_sub_field('header_image');
$header_main_text = get_sub_field('header_main_text');
$header_text_editor = get_sub_field('header_text_editor');
$header_text_link = get_sub_field('header_text_link');
$h1_title = get_sub_field('h1_title');

?>
<!-- START: Job Banner -->
<section class="sec-job-banner">
	<img class="job-banner__bg" src="<?php echo $header_image['url']; ?>" alt="bg image">
	<div class="container">
		<h1 class="banner_title"><?php echo $h1_title; ?></h1>
			<div class="banner__content">
				<p><?php echo $header_main_text; ?></p>
				<p><?php echo $header_text_editor; ?></p>

				<a class="banner__call-to-action" href="<?php echo $header_text_link['url']; ?>"><?php echo $header_text_link['title']; ?></a>
			</div>

	</div>

</section>
<!-- END: Job Banner -->

	