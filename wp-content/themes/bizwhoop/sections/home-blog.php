<?php $bizwhoop_news_enable = get_theme_mod('bizwhoop_news_enable','on');
if( $bizwhoop_news_enable == 'on' ){
	  $disable_news_meta = get_theme_mod('disable_news_meta',false);
   $bizwhoop_total_posts = get_option('posts_per_page'); /* number of latest posts to show */
	
	if( !empty($bizwhoop_total_posts) && ($bizwhoop_total_posts > 0) ):
	$bizwhoop_new_slider_category = get_theme_mod('slider_category'); ?>
<!--==================== BLOG SECTION ====================-->
<section id="blog" class="bizwhoop-section">
  <div class="overlay">
    <div class="container">
      <div class="row">
        <div class="row padding-bottom-80  text-center">
			<div class="bizwhoop-heading">
            <?php $bizwhoop_news_title = get_theme_mod('bizwhoop_news_title');
          
            if( !empty($bizwhoop_news_title) ):
              echo '<h1 class="bizwhoop-heading-inner">'.wp_kses_post($bizwhoop_news_title).'</h1>';
            endif; ?>
          
          <?php  $bizwhoop_news_subtitle = get_theme_mod('bizwhoop_news_subtitle');

            if( !empty($bizwhoop_news_subtitle) ): ?>
          <?php echo esc_attr($bizwhoop_news_subtitle); ?> </p>
          <?php endif; ?>
        </div>
		</div>
      </div>
      <div class="clear"></div>
      <div class="row">
        <?php $news_select = get_theme_mod('news_select',3);
			   $news_setting = get_theme_mod('slider_post_enable',true);
			
			   if( $news_setting == false )
			   {
			     $bizwhoop_latest_loop = new WP_Query(array( 'post_type' => 'post', 'posts_per_page' => $news_select, 'order' => 'DESC',  'ignore_sticky_posts' => true , 'category__not_in'=>$bizwhoop_new_slider_category));
			   }
			   else
			   {
			     $bizwhoop_latest_loop = new WP_Query(array( 'post_type' => 'post', 'posts_per_page' => $news_select, 'order' => 'DESC','ignore_sticky_posts' => true, ''));
			   }
			    if ( $bizwhoop_latest_loop->have_posts() ) :
			     while ( $bizwhoop_latest_loop->have_posts() ) : $bizwhoop_latest_loop->the_post();?>
        <div class="col-md-4 wow pulse animated">
          <div class="bizwhoop-blog-post-box">
            <?php if(has_post_thumbnail()): ?>
            <a title="<?php the_title_attribute(); ?>" href="<?php esc_url(the_permalink()); ?>" class="bizwhoop-blog-thumb"> 
              <?php $defalt_arg =array('class' => "img-fluid"); ?>
              <?php the_post_thumbnail('', $defalt_arg); ?>
            </a>  
            <?php endif; ?>
            <article class="small">
			<?php if($disable_news_meta!=true) {?>
              <span class="bizwhoop-blog-date"> 
                <span class="h3"><?php echo get_the_date('j'); ?></span> 
                <span><?php echo get_the_date('M'); ?></span> 
              </span>
			<?php } ?> 
              <h2> <a href="<?php echo esc_url(get_permalink()) ?>" title="<?php echo get_the_title() ?>"><?php echo get_the_title() ?></a> </h2>
			  <?php if($disable_news_meta!=true) { ?>
              <div class="bizwhoop-blog-category"> <i class="fa fa-folder"></i>&nbsp;
                <?php $cat_list = get_the_category_list();
								if(!empty($cat_list)) { ?>
                <?php the_category(', '); ?>
                <?php } ?>
                <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) );?>"> <i class="fa fa-user"></i>&nbsp;<?php echo esc_attr_e('by','bizwhoop'); ?>
                <?php the_author(); ?>
                </a> 
              </div>
			  <?php } ?>
            </article>
          </div>
        </div>
        <?php endwhile; endif;	wp_reset_postdata(); ?>
      </div>
    </div>
    <!-- /.container --> 
  </div>
</section>
<?php endif; ?>
<?php } ?>