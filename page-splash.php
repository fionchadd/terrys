<?php
/**
 * Template Name: Splash Page template
 * this is for the current splash page & has no header or footer
 */
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
<section>
<div class="row">
<div class="col half image-gallery">
	image gallery here
</div>
<div class="col half site-body">
	<div class="site-content">
	<?php 
			$logo = get_field('logo_image'); 
			$copy = get_field('intro_text'); 
			$address = get_field('address'); 
			$map = get_field('map_link'); 
			$phone = get_field('phone_number'); 
			$email = get_field('email_address'); 
			if( $logo ):

				// Image variables.
				$url = $logo['url'];
				$imagetitle = $logo['title'];
				$alt = $logo['alt'];
			
				// Thumbnail size attributes.
				$size = 'large';
				$fullimage = $logo['sizes'][ $size ];
			endif;
			
			?>
<div class="area"><img class="logoimage" src="<?php echo esc_url($fullimage); ?>" alt="<?php echo esc_attr($alt); ?>" /></div>		
<div class="area"><p><?php echo $copy; ?></p></div>
<div class="area"><h2>Find Us</h2>
<p><?php echo $address; ?></p>
<p class="maplink"><a href="<?php echo $map; ?>" target="_blank"><img src='/wp-content/themes/terrys-cafe/inc/images/map-icon.svg'> Google Maps</a></p></div>
<div class="area"><h2>Opening Times</h2>
<?php 			if( have_rows('opening_times') ): 
				while( have_rows('opening_times') ): the_row(); 
				$day = get_sub_field('days'); 
				$time = get_sub_field('times'); ?>
	<p class="days"><?php echo $day; ?></p>	
	<p class="times"><?php echo $time; ?></p>		
	<?php endwhile; else : endif; ?>	
</div>	
<div class="area"><h2>Contact</h2>
<p><?php echo $phone; ?></p>
<p><?php echo $email; ?></p>
</div>
<div class="area">
<h2>- No Bookings -</h2>
<?php 				if( have_rows('social_links') ): 
					while( have_rows('social_links') ): the_row(); 
					$ta = get_sub_field('trip_advisor'); 
					$insta = get_sub_field('instagram');	
					$fb = get_sub_field('facebook');	
					$twitter = get_sub_field('twitter');	
					$yt = get_sub_field('youtube');	 ?>
					<div class="social-links">
<a href="<?php echo $ta; ?>" target="blank"><img src='/wp-content/themes/terrys-cafe/inc/images/trip-advisor.svg'></a>	
<a href="<?php echo $insta; ?>" target="blank"><img src='/wp-content/themes/terrys-cafe/inc/images/instagram.svg'></a>	
<a href="<?php echo $fb; ?>" target="blank"><img src='/wp-content/themes/terrys-cafe/inc/images/facebook.svg'></a>	
<a href="<?php echo $twitter; ?>" target="blank"><img src='/wp-content/themes/terrys-cafe/inc/images/twitter.svg'></a>	
<a href="<?php echo $yt; ?>" target="blank"><img src='/wp-content/themes/terrys-cafe/inc/images/youtube.svg'></a>
</div></div>		
<?php endwhile; else : endif; ?>				
</div>
</div>
<div class="roundel"><img src='/wp-content/themes/terrys-cafe/inc/images/time-for-terrys-roundel.svg'></div>
</div>
</section>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php
get_footer();

