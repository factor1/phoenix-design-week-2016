<?php get_header();

//Template Name: MM Schedule Page

?>


<?php
//============ ** ============ //
// 			Page HERO
//============ ** ============ //?>

<section class="hero mmconf_hero container">
	<div class="row hero-content">
		<div class="col-10 col-centered text-center">
			<h1 class="text-white">
				Method + Madness Program
			</h1>
			<h3 class="text-white">
				October 22-­23, 2016
				<br>The Phoenix Convention Center
				<br>8am Check­in • 9am Talks begin
			</h3>
		</div>
	</div>
</section>

<?php
//================= ** ====================== //
//  Second Row, Daily content schedule blocks
//================= ** ====================== //
?>


<section class="container conf-program">
	<div class="row">
	<article class="col-11 col-centered">
		<h3>Saturday, October 22</h3>
		
		<?php if( have_rows('program_sat') ) : ?>
			
			<ul class="daily-details">	
				<?while( have_rows('program_sat') ): the_row(); ?>	
					<li class="row">
						<div class="col-4"><?php the_sub_field('time'); ?></div>
						<div class="col-8"><?php the_sub_field('detail'); ?></div>
					</li>
				<?php endwhile; ?>
			</ul>
        <?php else: ?>
       	 	<div class="col-6 col-centered">
	   	 		<p class="text-center">There aren't any events scheduled for this day.</p>
	   	 	</div>
       	
	   	<?php endif; ?>
		       	
	</article>
	
	
	<article class="col-11 col-centered">
		<h3>Sunday, October 23</h3>
		
		<ul class="daily-details">	

			<li class="row">
				<div class="col-4">Time</div>
				<div class="col-8">Breakout
					<div class="breakout">
						<p class="tag">Tag name</p>
						<p class="speaker">Speaker Name <span>Company name</span></p>
						<p class="title">title of talk here</p>
					</div>
				
				</div>
			</li>
			<li class="row">
				<div class="col-4">Time</div>
				<div class="col-8">Detail</div>
			</li>
			<li class="row">
				<div class="col-4">Time</div>
				<div class="col-8">Detail</div>
			</li>
			<li class="row">
				<div class="col-4">Time</div>
				<div class="col-8">Detail</div>
			</li>
			<li class="row">
				<div class="col-4">Time</div>
				<div class="col-8">Detail</div>
			</li>
			<li class="row">
				<div class="col-4">Time</div>
				<div class="col-8">Detail</div>
			</li>
			<li class="row">
				<div class="col-4">Time</div>
				<div class="col-8">Detail</div>
			</li>
			<li class="row">
				<div class="col-4">Time</div>
				<div class="col-8">Detail</div>
			</li>
			<li class="row">
				<div class="col-4">Time</div>
				<div class="col-8">Detail</div>
			</li>
		</ul>
	</article>
	
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
	
	
		