<?php $bizwhoop_slider_enable= get_theme_mod('bizwhoop_slider_enable','on');
  if( $bizwhoop_slider_enable == 'on' ){
  $slider_post_one = array(get_theme_mod('slider_post_one'));
  $slider_post_two = array(get_theme_mod('slider_post_two'));
  $slider_post_three = array(get_theme_mod('slider_post_three'));
  ?>
<!--==================== SLIDER ====================-->
<section class="bizwhoop-slider-warraper">
  <div id="bizwhoop-slider" class="owl-carousel">
	<!--Slider-one-->
	<?php if($slider_post_one){ ?>
	<?php
			$slider_query = new WP_Query( array(  'post_type' => 'page','post__in' => $slider_post_one));
            if( $slider_query->have_posts() ){                
                while( $slider_query->have_posts() ){
                    $slider_query->the_post();		
     ?>
	<div class="item">
      <figure>
        <?php if(has_post_thumbnail()){  
          $defalt_arg =array('class' => "img-fluid");  
          the_post_thumbnail('', $defalt_arg); 
          } else { ?>
        <img src="<?php print(get_template_directory_uri()); ?>/images/slide/slide.jpg" alt="<?php the_title(); ?>"> 
        <?php } ?>
      </figure>

      <div class="bizwhoop-slider-inner">
        <div class="container inner-table">
          <div class="inner-table-cell">
            <div class="slide-caption">
              <h1>
                <?php the_title(); ?>
              </h1>
              <div class="description">
				<p><?php echo bizwhoop_get_slider_excerpt(); ?></p>
              </div>
			     </div>
          </div>
        </div>
      </div>
    </div>
	  <?php } } wp_reset_postdata(); }?>
	<!-- Slider Two -->
	<?php
	if($slider_post_two){ ?>
	<?php
			$slider_query = new WP_Query( array(  'post_type' => 'page','post__in' => $slider_post_two));
            if( $slider_query->have_posts() ){                
                while( $slider_query->have_posts() ){
                    $slider_query->the_post();		
     ?>
	<div class="item">
   <figure>
        <?php if(has_post_thumbnail()){  
          $defalt_arg =array('class' => "img-fluid");  
          the_post_thumbnail('', $defalt_arg); 
          } else { ?>
        <img src="<?php print(get_template_directory_uri()); ?>/images/slide/slide.jpg" alt="<?php the_title(); ?>"> 
        <?php } ?>
      </figure>
      <div class="bizwhoop-slider-inner">
        <div class="container inner-table">
          <div class="inner-table-cell">
            <div class="slide-caption">
              <h1>
                <?php the_title(); ?>
              </h1>
              <div class="description">
				<p><?php echo bizwhoop_get_slider_excerpt(); ?></p>
              </div>
			     </div>
          </div>
        </div>
      </div>
    </div>
	<?php } } wp_reset_postdata(); }?>
	
	<!-- Slider Three-->
	<?php
	if($slider_post_three){ ?>
	<?php
			$slider_query = new WP_Query( array(  'post_type' => 'page','post__in' => $slider_post_three));
            if( $slider_query->have_posts() ){                
                while( $slider_query->have_posts() ){
                    $slider_query->the_post();		
     ?>
	<div class="item">
      <figure>
        <?php if(has_post_thumbnail()){  
          $defalt_arg =array('class' => "img-fluid");  
          the_post_thumbnail('', $defalt_arg); 
          } else { ?>
        <img src="<?php print(get_template_directory_uri()); ?>/images/slide/slide.jpg" alt="<?php the_title(); ?>"> 
        <?php } ?>
      </figure>
      <div class="bizwhoop-slider-inner">
        <div class="container inner-table">
          <div class="inner-table-cell">
			 <div class="slide-caption">
              <h1>
                <?php the_title(); ?>
              </h1>
              <div class="description">
				<p><?php echo bizwhoop_get_slider_excerpt(); ?></p>
              </div>
			 </div>
          </div>
        </div>
      </div>
    </div>
	<?php } } wp_reset_postdata(); }?>
  </div>
</section>
<?php  ?>
<div class="clearfix"></div>
<?php } ?>