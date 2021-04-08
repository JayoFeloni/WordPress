<?php $bizwhoop_callout_enable= get_theme_mod('bizwhoop_callout_enable','on');
if( $bizwhoop_callout_enable == 'on' ){
$bizwhoop_callout_background = get_theme_mod('bizwhoop_callout_background');
$bizwhoop_callout_button_one_label = get_theme_mod('bizwhoop_callout_button_one_label');
$bizwhoop_callout_button_one_link = get_theme_mod('bizwhoop_callout_button_one_link','#');
$bizwhoop_callout_button_one_target = get_theme_mod('bizwhoop_callout_button_one_target','true');
$bizwhoop_callout_button_two_label = get_theme_mod('bizwhoop_callout_button_two_label');
$bizwhoop_callout_button_two_link = get_theme_mod('bizwhoop_callout_button_two_link','#');
$bizwhoop_callout_button_two_target = get_theme_mod('bizwhoop_callout_button_two_target','true'); ?>
<!--==================== CALLOUT SECTION ====================-->
<?php if($bizwhoop_callout_background != '') { ?>

<section class="bizwhoop-callout" style="background-image:url('<?php echo esc_url($bizwhoop_callout_background);?>');">
<?php } else { ?>
<section class="bizwhoop-callout">
  <?php } ?>
  <div class="overlay">
    <div class="container">
      <div class="row">
        <div class="bizwhoop-callout-inner text-xs text-center">
          <?php $bizwhoop_callout_title = get_theme_mod('bizwhoop_callout_title');
          
            if( !empty($bizwhoop_callout_title) ):

              echo '<h3 class="padding-bottom-30">'.wp_kses_post($bizwhoop_callout_title).'</h3>';

            endif; ?>
          <?php $bizwhoop_callout_description = get_theme_mod('bizwhoop_callout_description');

            if( !empty($bizwhoop_callout_description) ):

              echo '<p>'.esc_attr($bizwhoop_callout_description).'</p>';

            endif; ?>
          <div class="padding-top-20">
          <?php if( !empty($bizwhoop_callout_button_one_label) ): ?>
      		  <a href="<?php echo esc_url($bizwhoop_callout_button_one_link); ?>" <?php if( $bizwhoop_callout_button_one_target == true) { echo "target='_blank'"; } ?> class="btn btn-theme-two margin-bottom-10">
      		<?php echo esc_attr($bizwhoop_callout_button_one_label); ?></a>
      		<?php
      		endif;

          if( !empty($bizwhoop_callout_button_two_label) ): ?>
      		  <a href="<?php echo esc_url($bizwhoop_callout_button_two_link); ?>" <?php if( $bizwhoop_callout_button_two_target ==true) { echo "target='_blank'"; } ?> class="btn btn-theme margin-bottom-10"><?php echo esc_html($bizwhoop_callout_button_two_label); ?></a>
    		<?php endif; ?>	
        </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>