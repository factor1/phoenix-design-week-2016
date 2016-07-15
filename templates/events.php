<?php get_header();

//Template Name: Events

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
			<p class="text-white">
				Phoenix Design Week opens with the Kickoff Party and Method + Madness Conference, 
				followed by an impressive series of events hosted by individual groups across Phoenix. 
				<br>See the current schedule below.
			</p>
		</div>
	</div>
</section>




<?php
//================= ** ================= //
//  Second Row, Event repeaters block
//================= ** ================ //
?>

<section class="container ">
	<div class="row">
	<article class="col-12">

		<?php
		//  ACF Structure / Naming
		
		//  Master repeater - event_day
		
			// Section Title:		event_date (JS accordian)
				// Sub repeater:		events
					// Item title: 			event_name - h4
					// Event location:		event_date_location -p
					// Event detail:		event_detail -p
					// Button URL:			event_cta_url -a
					// CTA button label:	event_button_text -a 
		
		
		// No Events found content
		
		/*
		<p>Phoenix Design Week continues after Method + Madness with a series of daily events and
		workshops throughout the metro Phoenix area. There are no events scheduled yet for this day.</p>
		
		<p><a href="#event_form">Want to get yours on the calendar?</a></p>
		
		*/  ?>

	</article>
	</div>


</section>



<?php
//=============== ** =============== //
// 	   Suggest an Event form
//=============== ** =============== //
?>

<section class="container" id="event_form">
	<div class="row">

		<h2>Interested in putting together an event? Let us know!</h2>
		
		<?php gravity_form( 2, false, false, false, '', false ); ?>
		
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
