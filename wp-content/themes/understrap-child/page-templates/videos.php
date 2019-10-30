<?php
/**
 * Template Name: Videos Page Template
 *
 * Based on the Empty Page Template from Understrap
 * 
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?> 

<div id="primary" class="site-content">
  <main id="content">

    <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'loop-templates/content', 'empty' ); ?>
    <?php endwhile; // end of the loop. ?>

  </main><!-- #content -->
</div><!-- #primary -->

<?php
get_footer();
?>

<div class="iframe-video-modal modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header no-border">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe allowfullscreen="" src=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>