<?php
/**
 * Template for displaying all Case Studies
 */

get_header(); ?>

	<div id="case-studies-archive" class="site-content">
		<div class="main-content" role="main">

      <?php while ( have_posts() ) : the_post();
        $services = get_field('services');
        $image1 = get_field('image_1');
        $size = "full";
        ?>
      <article class="case-study">
        <aside class="case-study-sidebar">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <h3><?php echo $services; ?></h3>
          <p><?php the_excerpt(); ?></p>
          <p class="read-more-link"><a href="<?php the_permalink(); ?>">View Project > </a></p>
        </aside>
      </article>

      <div class="case-study-imgs">
        <a href="<?php the_permalink(); ?>"><?php if($image1) {
          echo wp_get_attachment_image( $image1, $size );
        } ?></a>

      </div>
      <?php endwhile; // end of the loop. ?>







		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
