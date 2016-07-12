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
				Method + Madness Conference
			</h1>
			<h3 class="text-white">
				October 22-­23, 2016
				<br>The Phoenix Convention Center
				<br>8am Check­in • 9am Talks begin
			</h3>
			<a href="https://www.eventbrite.com/e/method-madness-conference-phxdw-2016-tickets-24939107542" class="button white text-purple">
				Claim Your Spot
			</a>
		</div>
	</div>
</section>

<?php
//============ ** ============ //
//  Second Row, info block
//============ ** ============ //
?>

<section class="container conf-content">
	<div class="row">
	<article class="col-12">

		<?php if(have_posts()):
			while(have_posts()): the_post();
				the_content();
			endwhile;
		endif ?>

	</article>
	</div>


</section>




<?php
//============ ** ============ //
//  Third Row, Event repeaters block
//============ ** ============ //
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
		
		
		<p>Phoenix Design Week continues after Method + Madness with a series of daily events and
		workshops throughout the metro Phoenix area. There are no events scheduled yet for this day.</p>
		
		<p><a href="#event_form">Want to get yours on the calendar?</a></p>
		


	</article>
	</div>


</section>



<?php
//============ ** ============ //
// 	   Sign up for email
//============ ** ============ //
?>

<section class="container" id="event_form">
	<div class="row">

		<h2>Interested in putting together an event? Let us know!</article>
		[form = gf_id=2]
		
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
