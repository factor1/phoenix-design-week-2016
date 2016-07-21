<?php get_header();

//Template Name: Events

?>


<?php
//============ ** ============ //
// 			Page HERO
//============ ** ============ //?>

<section class="hero events-hero container">
	<div class="row hero-content">
		<div class="col-10 col-centered text-center">
			<h1 class="text-white">
				Phoenix Design Week Events
			</h1>
			<p class="text-white">
				Phoenix Design Week opens with the Kickoff Party and Method + Madness Conference, 
				followed by an impressive series of events hosted by individual groups across Phoenix. 
				See the current schedule below.
			</p>
		</div>
	</div>
</section>




<?php
//================= ** ================= //
//  Second Row, Event repeaters block
//================= ** ================ //
?>

<section class="container weekevents">
	<div class="row" style="padding:0px;">
	<article class="col-12" style="padding:0px;">
	
	
	
	<?php
	// Event Accordions
	?>

<?php if( have_rows('event_day') ):?>
  <section class="flex-accordions container">

    <?php while( have_rows('event_day') ): the_row(); ?>
		<div class="big-accordian">
      <?php // ACCORDION TITLE ?>
      <div class="accordion--title container">
        <div class="row">
          <div class="col-12 titlebox">
            <h2><?php the_sub_field('event_date');?></h2><i class="fa fa-chevron-down"></i>
          </div>
        </div>
        <?php // ACCORDION CONTENT ?>
        <div class="accordion--content">
          <div class="container">
            <div class="row">
              <div class="col-12">
              
              <div class="row">
			  	
			  	<?php if( have_rows('events') ): while( have_rows('events') ): the_row(); ?>
               	 	<div class="col-4">
		               	 <h4 class="text-teal"><?php the_sub_field('event_name'); ?></h4>
		               	 
		               	 <p><?php the_sub_field('event_date_location'); ?></p>
		               	 <p><?php the_sub_field('event_detail'); ?></p>
		               	 
		               	 <?php if (the_sub_field('event_cta_url')): ?>
		               	 	<a href="<?php the_sub_field('event_cta_url'); ?>" class="button purple text-white">
		               	 		<?php the_sub_field('event_button_text>'); ?>
					   	 	</a>
		               	 <?php endif; ?>
               	 	</div>
                <?php endwhile; endif; ?>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
		</div> <?php // END big-accordian ?>
    <?php endwhile;?>

  </section>
<?php endif;?>







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
		<div class="col-12">
		<h2 class="text-center text-white">Interested in putting together an event? Let us know!</h2>
		
		<?php gravity_form( 2, false, false, false, '', false ); ?>
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
