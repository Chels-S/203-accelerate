<?php
/**
 * The template for display the 404 page.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header();?>

<div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">

            <div class="not-found-wrapper">
              <div class="not-found-image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cat-houston-404.png"/>
              </div>
                <header class="not-found-header">
                    <h1 class="not-found-title"><?php _e( 'Wha - ?', 'accelerate-theme' ); ?></h1>
                    <h2>This doesn't look right.</h2>
                </header>

                <div class="not-found-content">
                    <p>Seems like the page you were looking for has up and ran off. </p>
                    <p>Or it's gotten stuck inside the treat jar again. Sorry about that.</p>
                    <p>Since you're here, why not take a look at our <a class="not-found-blog" href="<?php echo site_url('/blog/') ?>">blog</a> or
                      some of our featured <a class="not-found-work" href="<?php echo site_url('/case-studies/') ?>">work.</a></p>
                      <p>Those guys tend to stay put. </p>
                </div><!-- .page-content -->

            </div><!-- .page-wrapper -->
        </div><!-- #content -->
    </div><!-- #primary -->
