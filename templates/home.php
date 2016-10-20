<?php get_header();

//Template Name: Home Page

?>


<?php
//============ ** ============ //
// 			Home HERO
//============ ** ============ //?>

<section class="hero home_hero container">
	<div class="row hero-content text-center">
		<div class="col-12">
			<h1 class="text-white">Method + Madness is on!</h1>
			<h3 class="text-white">Enjoy over a dozen keynote speakers and choose between 6 breakout tracks.</h3>
			<p><a href="http://phxdw.com/mm-program/" class="button white">See the M+M Program</a></p>
		</div>
	</div>
</section>



<?php
//============ ** ============ //
//  Second Row, info block
//============ ** ============ //
?>


<section class="container home-intros halfsplit">
	<div class="row">
		<div class="leftyleft">
				<div class="thecontent">

					<?php if(have_posts()):
					while(have_posts()): the_post();
						the_content();
			     	endwhile;
			     	endif ?>
				</div><?php // end thecontent ?>
		</div><?php // end leftyleft ?>

		<div class="rightyright stretch">
			<div class="content-a">
				<div class="thecontent">

				<h3 style="text-pink">Attend the Method + Madness Conference</h3>
		    	<p>Check out this year’s speakers and reserve your spot now!</p>
		    	<a href="<?php echo home_url(); ?>/method-and-madness-conference/" class="button pink text-white">LEARN MORE ABOUT M+M</a>


				</div><?php // end thecontent ?>
			</div><?php // end content a ?>

			<div class="content-b">
				<div class="thecontent">

				<h3 class="text-white">See all Phoenix Design Week events</h3>
				<p class="text-white">There are design events all week across the city.</p>
				<a href="<?php echo home_url(); ?>/events" class="button purple text-white">SEE THE EVENT SCHEDULE</a>

				</div><?php // end thecontent ?>
			</div><?php // end content b ?>
		</div><?php // end rightyright ?>
	</div><?php // end row ?>
</section>





<?php
//============ ** ============ //
// 	   Become a Sponsor CTA
//============ ** ============ //
?>

<section class="container home-sponsor">
	<div class="row">
		<div class="col-10 col-centered text-center">
			<h3 class="text-white">See what’s happening at Method + Madness</h3>
<!-- 			<p class="text-white">Invest in the most celebrated event in the Arizona design community, and hundreds of creative professionals will take notice.</p> -->
			<a href="<?php echo home_url(); ?>/events" class="button white text-pink">View the schedule</a>
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
