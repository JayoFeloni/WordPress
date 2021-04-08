<?php
/**
 * The template for displaying search results pages.
 *
 * @package bizwhoop
 */

get_header(); ?>
<!--==================== Breadcrumb ====================-->
<div class="bizwhoop-breadcrumb-section">
  <div class="overlay"> 
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="bizwhoop-breadcrumb-title">
            <h1>
              <?php the_title(); ?>
            </h1>
          </div>
        </div>
        <div class="col-md-6">
          <ul class="bizwhoop-page-breadcrumb">
            <?php if (function_exists('bizwhoop_custom_breadcrumbs')) bizwhoop_custom_breadcrumbs();?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>
<main id="content">
  <div class="container">
    <div class="row">
      <div class="col-md-<?php echo ( !is_active_sidebar( 'sidebar-1' ) ? '12' :'9' ); ?> col-sm-9 col-xs-12">
                 <?php 
		global $i;
		if ( have_posts() ) : ?>
		<h2 class="margin-bottom-30"><?php printf( __( "Search Results for: %s", 'bizwhoop' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
		<?php while ( have_posts() ) : the_post();  
		 get_template_part('content','');
		 endwhile; else : ?>
		<h2><?php esc_html_e( "Nothing Found", 'bizwhoop' ); ?></h2>
		<div class="">
		<p><?php esc_html_e( "Sorry, but nothing matched your search criteria. Please try again with some different keywords.", 'bizwhoop' ); ?>
		</p>
		<?php get_search_form(); ?>
		</div><!-- .blog_con_mn -->
		<?php endif; ?>
      </div>
	  <aside class="col-md-3">
        <?php  dynamic_sidebar('sidebar-1'); ?>
      </aside>
    </div>
  </div>
</main>
<?php
get_footer();
?>