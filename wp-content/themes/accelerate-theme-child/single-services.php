<?php
/**
 * Template for Single Services
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
        $servicetitle = get_field('service_title');
        $servicedescription = get_field('service_description');
        $serviceimage = get_field('service_image');
        $servicetitle2 = get_field('service_title_2');
        $servicedescription2 = get_field('service_description_2');
        $serviceimage2 = get_field('service_image_2');
        $serviceimage3 = get_field('service_image_3');
        $servicetitle3 = get_field('service_title_3');
        $servicedescription3 = get_field('service_description_3');
        $servicetitle4 = get_field('service_title_4');
        $servicedescription4 = get_field('service_description_4');
        $serviceimage4 = get_field('service_image_4');
        $size = "full";
      ?>

      <div class="service-group">

        <aside class="service-image service-image-left">
          <?php if($serviceimage) {
            echo wp_get_attachment_image( $serviceimage, $size );
          } ?>
        </aside>

        <div class="service-detail service-detail-right">
          <h2><?php echo $servicetitle; ?></h2>
          <p><?php echo $servicedescription; ?></p>
        </div>
      </div>

      <div class="service-group">

      <div class="service-detail service-detail-left">
        <h2><?php echo $servicetitle2; ?></h2>
        <p><?php echo $servicedescription2; ?></p>
      </div>

      <aside class="service-image service-image-right">
        <?php if($serviceimage2) {
          echo wp_get_attachment_image( $serviceimage2, $size );
        } ?>
      </aside>

    </div>

    <div class="service-group">

      <aside class="service-image service-image-left">
        <?php if($serviceimage3) {
          echo wp_get_attachment_image( $serviceimage3, $size );
        } ?>
      </aside>

      <div class="service-detail service-detail-right">
        <h2><?php echo $servicetitle3; ?></h2>
        <p><?php echo $servicedescription3; ?></p>
      </div>
    </div>

    <div class="service-group">

    <div class="service-detail service-detail-left">
      <h2><?php echo $servicetitle4; ?></h2>
      <p><?php echo $servicedescription4; ?></p>
    </div>

    <aside class="service-image service-image-right">
      <?php if($serviceimage4) {
        echo wp_get_attachment_image( $serviceimage4, $size );
      } ?>
    </aside>

  </div>

    <section class="about-page-cta">
      <div class="about-page-cta-text">
        <h2><?php the_content(); ?></h2>
      </div>
      <a class="button about-page-cta-button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
    </section>

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>
