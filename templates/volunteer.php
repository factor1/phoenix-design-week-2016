<?php get_header(); 
	
//Template Name: Volunteer

?>

<?php
//============ ** ============ //
// 			Page HERO
//============ ** ============ //?>

<section class="hero container">
	<div class="row hero-content">
		<div class="col-10 col-centered text-center">
			<h1 class="text-white">
				Volunteer at Phoenix Design Week
			</h1>
			
			<p class="text-white">
			Thank you for your interest in being a volunteer at one of the most exciting design events in the state! Every year, AIGA Arizona relies on a squad of volunteers to bring Phoenix Design Week to life, and we are always excited to welcome driven individuals who have an interest in the design community.
			</p>
			
		</div>
	</div>
</section>






<section class="container volcontent">
	<div class="row">
		<div class="col-11 col-centered">



		<?php if(have_posts()): 
			while(have_posts()): the_post();
				the_content();
			endwhile; 
		endif ?>
		
		</div>
	</div>
</section>


<?php 
//================== ** ================== //	
//  ACF Volunteer opportunities repeater
//================== ** ================== //
?>	


<?php 
//============ ** ============ //	
//  			FORM
//============ ** ============ //
?>	


<section class="container volform">
	<div class="row">
		<div class="col-11 col-centered">

		<h2 class="text-center text-white">Interested in volunteering? Reach out, and we’ll send you the details!</h2>
		
		<?php gravity_form( 3, false, false, false, '', false ); ?>
		
		</div>
	</div>
</section>




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