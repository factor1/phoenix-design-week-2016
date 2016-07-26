<?php get_header(); 
	
//Template Name: Contact

?>


<?php
//============ ** ============ //
// 			Page HERO
//============ ** ============ //?>

<section class="hero contacthero container">
	<div class="row hero-content">
		<div class="col-10 col-centered text-center">
			<h1 class="text-white">
				Get in touch
			</h1>
			<p class="text-white">
				Got a question? Reach out to the appropriate person for the job, or 
				send us a message below. We’ll get back to you ASAP.
			</p>
		</div>
	</div>
</section>



<section class="container contactus">
	<div class="row">
	<div class="col-4">
	
		<?php if(have_posts()): 
			while(have_posts()): the_post();
				the_content();
			endwhile; 
		endif ?>
		
	</div>


	<div class="col-8">
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