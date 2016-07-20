<?php get_header();

//Template Name: Speaker Single

?>

<?php if(have_posts()):
			while(have_posts()): the_post();
			
			


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




<?php
//================= ** ================= //
//  Second Row, Event repeaters block
//================= ** ================ //
?>

<section class="container speaker-top">
	<div class="row">
		<div class="col-6">
			<?php if(has_post_thumbnail()) {
			the_post_thumbnail('large');
			} else {	}
			?>	
		</div>
		
		<div class="col-6">
			<?php if (get_field('portfolio')): ?>
				<img src="<?php the_field('portfolio');?>">
			<?php endif;?>
		</div>
	</div>
	
	
	<div class="row">
		<div class="col-8">
			<?php the_content();?>
		</div>
		
		<div class="col-4">
			<?php // social ?>
			<?php the_field('quote');?>
		</div>
	</div>


</section>



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
		endif ?>


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
