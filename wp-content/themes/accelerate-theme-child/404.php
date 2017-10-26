<?php
/**
 * 404 Page Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="page-404">
  <div class="main-content" role="main">

    <div id="message404">
      <h1>404! Oh No!</h1>
      <div id="panic-button">
        <h2>Don't Panic!</h2>
        <a class="animated infinite pulse" href="<?php echo site_url(); ?>"><h3>Click Here</h3></a>
      </div>
  </div>

  </div><!-- .main-content -->
</div><!-- #primary -->
