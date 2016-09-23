<?php get_header();

//Template Name: Speaker Single

?>

<?php if(have_posts()):
			while(have_posts()): the_post();
			
			?>


<?php
//============ ** ============ //
// 			Page HERO
//============ ** ============ //?>

<section class="hero container">
	<div class="row hero-content">
		<div class="col-10 col-centered text-center">
			<h1 class="text-white">
				<?php the_title();?>
			</h1>
		</div>
	</div>
</section>




<?php if (has_term('f1_staffgrid_tax','main-stage')): ?>

<?php
//===================== ** ===================== //
//  Second Row, Main Stage Speaker details block
//===================== ** ==================== //
?>

<section class="container speaker-top">
	<div class="row">
		<div class="col-6 stretch nopadding">
			<?php if(has_post_thumbnail()) {
			the_post_thumbnail('large');
			} else {	}
			?>	
		</div>
		
		<div class="col-6 stretch nopadding">
			<?php if (get_field('portfolio')): ?>
				<img src="<?php the_field('portfolio');?>">
			<?php endif;?>
		</div>
	</div>
	
	
	<div class="row">
		<div class="col-8 staffbio">
			<?php the_field('staff_bio');?>
		</div>
		
		<div class="col-4">
			<div class="f1_mentor_details_social_container">
			<h3 class="text-teal">Find them online</h3>
				<?php if(get_field( "twitter_url" )) : echo('<a href="'); the_field( "twitter_url" ); echo('"><i class="fa fa-twitter" aria-hidden="true"></i></a>');  endif; ?>
				<?php if(get_field( "facebook_url" )) : echo('<a href="'); the_field( "facebook_url" ); echo('"><i class="fa fa-facebook" aria-hidden="true"></i></a>');  endif; ?>
				<?php if(get_field( "instagram_url" )) : echo('<a href="'); the_field( "instagram_url" ); echo('"><i class="fa fa-instagram" aria-hidden="true"></i></a>');  endif; ?>
				<?php if(get_field( "url" )) : echo('<a href="'); the_field( "url" ); echo('"><i class="fa fa-globe" aria-hidden="true"></i></a>');  endif; ?>



								</div>
			<div class="speakerquote">				
				<?php the_field('quote');?>
			</div>
		</div>
	</div>


</section>

<?php elseif (has_term('f1_staffgrid_tax','breakout')): ?>

<?php
//===================== ** ===================== //
//  Second Row, Breakout Speaker details block
//===================== ** ==================== //
?>

<section class="container speaker-top">
	<div class="row">
		<div class="col-6 stretch nopadding">
			<?php if(has_post_thumbnail()) {
			the_post_thumbnail('large');
			} else {	}
			?>	
		</div>
		
		<div class="col-6 stretch nopadding">
			<div class="staffbio">
				<?php the_field('staff_bio');?>				
			</div>
			
			<div class="f1_mentor_details_social_container">
			<h3 class="text-teal">Find them online</h3>
				<?php if(get_field( "twitter_url" )) : echo('<a href="'); the_field( "twitter_url" ); echo('"><i class="fa fa-twitter" aria-hidden="true"></i></a>');  endif; ?>
				<?php if(get_field( "facebook_url" )) : echo('<a href="'); the_field( "facebook_url" ); echo('"><i class="fa fa-facebook" aria-hidden="true"></i></a>');  endif; ?>
				<?php if(get_field( "instagram_url" )) : echo('<a href="'); the_field( "instagram_url" ); echo('"><i class="fa fa-instagram" aria-hidden="true"></i></a>');  endif; ?>
				<?php if(get_field( "url" )) : echo('<a href="'); the_field( "url" ); echo('"><i class="fa fa-globe" aria-hidden="true"></i></a>');  endif; ?>
			</div>

		</div>
	</div>
	

</section>



<?php endif; ?>






<section class="container pricegrid">
	<div class="row">
		<div class="col-10 col-centered">
			<h2 class="text-center text-white">
				Get your ticket to see <?php the_title();?> & many others!
			</h2>

			<p class="text-white text-center">
				All tickets include entrance to the Method + Madness Conference, PHXDW Kickoff Party,
				Method + Madness 	Opening Reception, and the PHXDW Closing Party
			</p>

			<?php
				//============ ** ============ //
				// 	   Get Tickets
				//============ ** ============ //
				
				get_template_part('parts/tickets');
				
				
				?>
			
			
		</div>




	</div>
</section>


<?php endwhile;
		endif; ?>


<?php
//============ ** ============ //
// 	   Sign up for email
//============ ** ============ //

get_template_part('parts/newsletter');


?>


<?php
//============ ** ============ //
// 	   Include Sponsors
//============ ** ============ //

get_template_part('parts/sponsors');

?>


<?php get_footer(); ?>
