<?php
/**
 * The template for displaying the about page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
<div class="about-header">
<p>Accelerate is a strategy and marketing agency located in the heart of NYC.
	Our goal is to build business by making our clients visable and making their customers smile. </p>
</div>

	<div id="primary" class="site-content about">
		<div class="main-content" role="main">
      <div class="about-us-content">
			<?php while ( have_posts() ) : the_post();
				$service_1 = get_field ('service_1');
				$service_description_1 = get_field ('service_description_1');
				$service_image_1 = get_field ('service_image_1');
				$service_2 = get_field ('service_2');
				$service_description_2 = get_field ('service_description_2');
				$service_image_2 = get_field ('service_image_2');
				$service_3 = get_field ('service_3');
				$service_description_3 = get_field ('service_description_3');
				$service_image_3 = get_field ('service_image_3');
				$service_4 = get_field ('service_4');
				$service_description_4 = get_field ('service_description_4');
				$service_image_4 = get_field ('service_image_4');
        $size = "full";
      ?>
			<div class="about-content">
        <h2 class="about-title"><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
			</div>
<!-- put a container around each title, img and des for the custom fields -->
	<div class="about-services">
			<div class="service-1-img">
        <?php if($service_image_1) {
          echo wp_get_attachment_image($service_image_1, $size);
        }?>
			</div>
				<div class="service-1-content">
					<h2><?php echo $service_1; ?></h2>
					<p><?php echo $service_description_1; ?></p>
				</div>

				<div class="service-2-img">
        <?php if($service_image_2) {
          echo wp_get_attachment_image($service_image_2, $size);
        }?>
			</div>
				<div class="service-2-content">
				<h2><?php echo $service_2; ?></h2>
				<p><?php echo $service_description_2; ?></p>
			</div>

				<div class="service-3-img">
        <?php if($service_image_3) {
          echo wp_get_attachment_image($service_image_3, $size);
        }?>
			</div>
				<div class="service-3-content">
				<h2><?php echo $service_3; ?></h2>
				<p><?php echo $service_description_3; ?></p>
			</div>

			<div class="service-4-img">
        <?php if($service_image_4) {
          echo wp_get_attachment_image($service_image_4, $size);
        }?>
			</div>
				<div class="service-4-content">
				<h2><?php echo $service_4; ?><h2>
				<p><?php echo $service_description_4; ?><p>
				</div>

	</div>

			<hr style="border: 0.5px solid#bfbfbf;" />
		<div class="about-contact-container">
			<div class="contact-tag">
				<h2>Interested in working with us?</h2>
			</div>
			<div class="contact-button">
				<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
			</div>
		</div>

      </div>
    <?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->


	</div><!-- #primary -->



<?php get_footer(); ?>
