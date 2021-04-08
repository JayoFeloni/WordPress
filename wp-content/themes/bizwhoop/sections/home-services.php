<?php $bizwhoop_service_enable= get_theme_mod('bizwhoop_service_enable','on');
if( $bizwhoop_service_enable == 'on' ){
$service_post_one = array(get_theme_mod('service_post_one'));
$service_post_two = array(get_theme_mod('service_post_two'));
$service_post_three = array(get_theme_mod('service_post_three'));
?>
<!--==================== SERVICE SECTION ====================-->
<section id="service" class="bizwhoop-section text-center">
  <div class="container">
    <div class="row padding-bottom-80">
      <div class="col">
      <div class="ta-heading">
        <?php $bizwhoop_service_title = esc_attr(get_theme_mod('bizwhoop_service_title'));
          if( !empty($bizwhoop_service_title) ){
          echo '<h1 class="ta-heading-inner">'.esc_attr($bizwhoop_service_title).'</h1>';
          }
		  ?></div>
        <?php $bizwhoop_service_subtitle = esc_attr(get_theme_mod('bizwhoop_service_subtitle'));
          if( !empty($bizwhoop_service_subtitle) ){
          echo '<p>'.esc_attr($bizwhoop_service_subtitle).'</p>';
		  } ?></div>
      
    </div>
    <div class="row">
      <?php if($service_post_one){ 
			  $ads_query = new WP_Query( array( 'post_type' => 'page','post__in' => $service_post_one));
            if( $ads_query->have_posts() ){                
                while( $ads_query->have_posts() ){
                    $ads_query->the_post(); ?>
      <div class="col-md-4">
        <div class="bizwhoop-service">
          <div class="bizwhoop-service-inner">
            <div class="bizwhoop-service-inner-img">
              <?php if(has_post_thumbnail()){ $defalt_arg =array('class' => "img-fluid"); the_post_thumbnail('', $defalt_arg); }  ?>
            </div>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php echo bizwhoop_get_service_excerpt(); ?></p>
          </div>
        </div>
      </div>
      <?php } } wp_reset_query(); }
		if($service_post_two){ 
			$ads_query = new WP_Query( array( 'post_type' => 'page','post__in' => $service_post_two));
            if( $ads_query->have_posts() ){                
                while( $ads_query->have_posts() ){
                    $ads_query->the_post(); ?>
      <div class="col-md-4">
        <div class="bizwhoop-service">
          <div class="bizwhoop-service-inner">
            <div class="bizwhoop-service-inner-img">
              <?php if(has_post_thumbnail()){  
					  $defalt_arg =array('class' => "img-fluid");  
					  the_post_thumbnail('', $defalt_arg); 
					  }  ?>
            </div>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php echo bizwhoop_get_service_excerpt(); ?></p>
          </div>
        </div>
      </div>
      <?php } } wp_reset_query(); }
	  if($service_post_three){ 
			$ads_query = new WP_Query( array( 'post_type' => 'page','post__in' => $service_post_three));
            if( $ads_query->have_posts() ){                
                while( $ads_query->have_posts() ){
                    $ads_query->the_post(); ?>
      <div class="col-md-4">
        <div class="bizwhoop-service">
          <div class="bizwhoop-service-inner">
            <div class="bizwhoop-service-inner-img">
              <?php if(has_post_thumbnail()){  
					  $defalt_arg =array('class' => "img-fluid");  
					  the_post_thumbnail('', $defalt_arg); 
					  }  ?>
            </div>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php echo bizwhoop_get_service_excerpt(); ?></p>
          </div>
        </div>
      </div>
      <?php } } wp_reset_query(); } ?>
    </div>
  </div>
</section>
<?php } ?>