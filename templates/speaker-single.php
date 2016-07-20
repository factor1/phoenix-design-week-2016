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

<section class="container about_intro">
	<div class="row">
	<article class="col-11 col-centered">

		
		<?php		the_content();?>
			

	</article>
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
