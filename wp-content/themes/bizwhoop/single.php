<!-- =========================
     Page Breadcrumb   
============================== -->
<?php get_header(); 
get_template_part('index','banner'); ?>
<div class="clearfix"></div>
<!-- =========================
     Page Content Section      
============================== -->
 <main id="content">
  <div class="container">
    <div class="row"> 
      <!--/ Main blog column end -->
      <div class="col-md-<?php echo ( !is_active_sidebar( 'sidebar-1' ) ? '12' :'9' ); ?> col-sm-8 col-xs-12">
        <div class="row">
		      <?php if(have_posts())
		        {
		      while(have_posts()) { the_post(); ?>
          <div class="col-md-12">
            <div class="bizwhoop-blog-post-box"> <a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ));?>" class="bizwhoop-blog-thumb">
			        <?php if(has_post_thumbnail()): ?>
			         <?php $defalt_arg =array('class' => "img-fluid"); ?>
			         <?php the_post_thumbnail('', $defalt_arg); ?>
			        <?php endif; ?>
			        </a>
              <article class="small">
                <span class="bizwhoop-blog-date">
                  <span class="h3"><?php echo esc_html(get_the_date('j')); ?> </span>
                  <span><?php echo esc_html(get_the_date('M')); ?></span> 
                </span>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_content(); ?>
                <div class="bizwhoop-blog-category"> 
                  <i class="fa fa-folder"></i>&nbsp;
                  <?php $cat_list = get_the_category_list();
				          if(!empty($cat_list)) { ?> <?php the_category(', '); ?>
                  <?php } ?> 
                  <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) );?>">
                    <i class="fa fa-user"></i> <?php the_author(); ?>
                  </a> 
                </div>
              </article>
            </div>
          </div>
		      <?php } ?>
		  <div class="col-md-12 text-center">
          <?php the_posts_navigation(); ?>
          </div>  
          <div class="col-md-12">
            <div class="media bizwhoop-info-author-block"> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) );?>" class="bizwhoop-author-pic"> <?php echo get_avatar( get_the_author_meta( 'ID') , 150); ?> </a>
              <div class="media-body">
                <h4 class="media-heading"><span><i class="fa fa-user"></i><?php _e('By','bizwhoop'); ?></span><a href "<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) );?>"><?php the_author(); ?></a></h4>
                <p><?php the_author_meta( 'description' ); ?></p>
              </div>
            </div>
          </div>
		      <?php } ?>
         <?php comments_template('',true); ?>
        </div>
      </div>
      <aside class="col-md-3 col-sm-4">
        <div id="sidebar-right" class="bizwhoop-sidebar">
         <?php  dynamic_sidebar('sidebar-1'); ?>
        </div>
      </aside>
    </div>
    <!--/ Row end --> 
  </div>
</main>
<?php get_footer(); ?>