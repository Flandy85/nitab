<?php
/*
	Template Name: Start page
*/
?>
<?php get_header(); ?>
<main>
	<?php
		if(have_posts()) {
			while(have_posts()) {
				
				the_post();
				?>
				<div class="first-container-parallax">
					<img src="<?php echo get_template_directory_uri(); ?>/src/images/comp-white.png"" class="first-img">	
				</div>
				<div class="first-container" id="start">
					<div class="first-text-block">
						<h2><?php echo get_field('company-title'); ?></h2>
						<p><?php echo get_field('company-text'); ?></p>
					</div>
				</div>
				<div class="second-container-parallax" id="about">
					<h2><?php echo get_field('company-about-title'); ?></h2>
				</div>
				<div class="second-container" id="about">
					
					<div class="p1-text-block">
						<img src="<?php echo get_template_directory_uri(); ?>/src/images/fan-wall.jpg"" class="p1-img">
						<div class="p1-text">
							<h3><?php echo get_field('company-p1-name'); ?></h3>
							<p><?php echo get_field('company-p1-text'); ?></p>
						</div>
					</div>
					<div class="p2-text-block">
						<img src="<?php echo get_template_directory_uri(); ?>/src/images/rsz_cutting-wood.jpg"" class="p2-img">
						<div class="p2-text">
							<h3><?php echo get_field('company-p2-name'); ?></h3>
							<p><?php echo get_field('company-p2-text'); ?></p>
						</div>
					</div>
				</div>
				<div class="third-container-parallax">
					<h2>Kontaka oss</h2>
					<div class="contact-form-block" id="contact">
						<?php echo get_field('form-shortcode'); ?>
					</div>
				</div>
				<!-- <div class="first-container">
					<img src="<?php //echo get_template_directory_uri(); ?>/src/images/comp-white.png"" class="first-img">
				</div> -->
				
				<?php
				
			}	
		}	
	?>
</main>
<?php get_footer(); ?>