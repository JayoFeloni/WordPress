<?php 					
	$nifty_hs_contact_infos	= get_theme_mod('hide_show_contact_infos','1'); 
?>
<section id="specia-header" class="header_nifty_dark">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-5 col-xs-12 contact_phone">
				<?php  
					$nifty_header_contact	= get_theme_mod('header_contact_num'); 
				?>
				<?php if($nifty_hs_contact_infos == '1') { ?>
					<!-- Start Contact Info -->
					
						<?php if($nifty_header_contact) { ?>
							<div class="info_details">
								<div class="icon"><i class="fa fa-phone-square"></i></div>
								<a href="tell:<?php echo esc_attr($nifty_header_contact); ?>"><?php echo esc_html($nifty_header_contact); ?></a>
							</div>
						<?php } ?>
					
					<!-- /End Contact Info -->
				<?php } ?>
			</div>
			
			<div class="col-md-6 col-sm-7 nifty-logo">
				<a class="navbar-brand" href="<?php echo esc_url(home_url( '/' )); ?>" class="brand">
					<?php
						if(has_custom_logo())
						{	
							the_custom_logo();
						}
						else { 
					?> 
						<span class="site-title"><?php echo esc_html(get_bloginfo('name')); ?></span>
					<?php	
						}
					?>
					
					<?php
						$nifty_site_desc = get_bloginfo( 'description');
						if ($nifty_site_desc) : ?>
							<p class="site-description"><?php echo esc_html($nifty_site_desc); ?></p>
					<?php endif; ?>
				</a>
			</div>
			
			

            <div class="col-md-3 col-sm-7 contact_email">
				<?php  
					$nifty_header_email= get_theme_mod('header_email'); 
				?>
				<?php if($nifty_hs_contact_infos == '1') { ?>
						<?php if($nifty_header_email) { ?> 
							<div class="info_details">
								<div class="icon"><i class="fa fa-envelope"></i></div>
								<a href="mailto:<?php echo esc_attr($nifty_header_email); ?>"><?php echo esc_html($nifty_header_email); ?></a>
							</div>
						<?php } ?>
					<!-- /End Contact Info -->
				<?php } ?>
			</div>
        </div>
    </div>
</section>

<div class="clearfix"></div>