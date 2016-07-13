<?php get_header(); 
	
//Template Name: Contact

?>


<?php
//============ ** ============ //
// 			Page HERO
//============ ** ============ //?>

<section class="hero container">
	<div class="row hero-content">
		<div class="col-10 col-centered text-center">
			<h1 class="text-white">
				Phoenix Design Week Events
			</h1>
			<h2 class="text-white">
				Phoenix Design Week opens with the Kickoff Party and Method + Madness Conference, 
				followed by an impressive series of events hosted by individual groups across Phoenix. 
				See the current schedule below.
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




<?php 
//============ ** ============ //
// 	   Gravity Form ID 1
//============ ** ============ //

?>


<div class="col-8">
FORMS
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