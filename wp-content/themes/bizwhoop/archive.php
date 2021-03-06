<?php
/**
 * The template for displaying archive pages.
 *
 * @package bizwhoop
 */
get_header(); ?>
<!-- Breadcrumb -->
<div class="bizwhoop-breadcrumb-section">
  <div class="overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="bizwhoop-breadcrumb-title">
            <?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
          </div>
			    <div>
            <ul class="bizwhoop-page-breadcrumb">
              <?php if (function_exists('bizwhoop_custom_breadcrumbs')) bizwhoop_custom_breadcrumbs();?>
            </ul>
			    </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /End Breadcrumb -->
<main id="content">
  <div class="container">
    <div class="row">
     <div class="col-md-<?php echo ( !is_active_sidebar( 'sidebar-1' ) ? '12' :'9' ); ?> col-sm-9 col-xs-12">
      <?php 
      if( have_posts() ) :
      while( have_posts() ): the_post();
      get_template_part('content',''); 
      endwhile; endif;
      ?>
          <div class="col-md-12 text-center">
          <?php
			//Previous / next page navigation
			the_posts_pagination( array(
			'prev_text'          => '<i class="fa fa-long-arrow-left"></i>',
			'next_text'          => '<i class="fa fa-long-arrow-right"></i>',
			'screen_reader_text' => ' ',
			) );
			?>
          </div>
      </div>
	    <aside class="col-md-3 col-sm-4">
        <div id="sidebar-right" class="bizwhoop-sidebar">
         <?php  dynamic_sidebar('sidebar-1'); ?>
        </div>
      </aside>
    </div>
  </div>
</main>
<?php get_footer(); ?>