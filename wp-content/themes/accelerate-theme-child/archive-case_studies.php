<?php
/**
 * Template for displaying all Case Studies
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">

      <?php while ( have_posts() ) : the_post();
        $services = get_field('services');
        $client = get_field('client');
        $link = get_field('site_link');
        $image1 = get_field('image_1');
        $size = "full";
        ?>
      <article class="case-study">
        <aside class="case-study-sidebar">
          <h2><?php the_title(); ?></h2>
          <h3><?php echo $services; ?></h3>
          <h4>Client: <?php echo $client; ?></h4>
          <p><?php the_excerpt(); ?></p>
          <p class="read-more-link"><a href="<?php echo $link; ?>">Visit Live Site > </a></p>
        </aside>
      </article>
      <?php endwhile; // end of the loop. ?>


      <div class="case-study-imgs">
        <?php if($image1) {
          echo wp_get_attachment_image( $image1, $size );
        } ?>

      </div>




		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
