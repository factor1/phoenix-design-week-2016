<?php get_header();

//Template Name: MM Conference Page

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

	<?php
	$args = array(
        'posts_per_page'            => -1,
        'post_type'              		=> 'f1_staffgrid_cpt',
        //'f1_staffgrid_tax'        => 'leadership', // Department Taxonomy (per site)
        'meta_key'              		=> 'last_name',
        'orderby'                   => 'meta_value',
        'order'                     => 'ASC'
  );

	// The Query
	$query = new WP_Query( $args );

	if( $query->have_posts() ):
	?>
		<div class="row row--justify-content-start speakerthumbgrid">

			<h2 class="col-12 text-white text-center">
				M+M Speakers
			</h2>
			<?php while( $query->have_posts() ): $query->the_post();?>
				<div class="col-4 speakerthumb">
					<a href="<?php the_permalink();?>">
						<?php the_post_thumbnail('profile-picture'); ?>
						<h4>
							<?php the_title();?>
						</h4>

						<p>
							<?php the_field('title');?>
						</p>
					</a>
				</div>
		<?php endwhile;?>

		<div class="col-4 speakerthumb">
			<img src="<?php bloginfo('template_url');?>/assets/img/andmore.png" alt="And many more!">
		</div>

		</div>
	<?php endif; wp_reset_postdata();?>

</section>


<?php
//============ ** ============ //
//  Third Row, Testimonial block
//============ ** ============ //
?>

<section class="container tesimonial">
	<div class="row">
		<div class="col-12 text-center">
			<blockquote>
				<h2>
					"Method + Madness inspires me to create more,
					strive to make my work better, and try new things.
					It reminds me why I love design."
				</h2>
				<cite>Kristie Erkkila</cite>
			</blockquote>
		</div>
	</div>
</section>


<?php
//============ ** ============ //
//  Join us downtown  (Phase 2)
//============ ** ============ //
?>
<section class="container join-us">
	<div class="row">
		<div class="col-6">
			<h2>Join us in downtown<br>Phoenix, AZ</h2>
			<p>
				M + M takes place in the heart of the city. The increasingly revitalized
				downtown area is full of plenty of dining options and nightlife hotspots,
				and by October we’ll be experiencing some of the best weather of the year.
			</p>
			<p>
				<strong>The Phoenix Convention Center</strong><br>
				100 N. 3rd Street<br>
				Phoenix, AZ 85004
			</p>
			<a href="#" class="button white">
				Learn About Downtown Phoenix
			</a>
		</div>
		<div class="col-6">
			<div class="<?php bloginfo('template_url');?>/assets/img/map.png" alt="Map of Phoenix">
		</div>
	</div>
</section>

<?php
//============ ** ============ //
//  Compare | Convince your boss  (Phase 2)
//============ ** ============ //
?>


<section class="container halfsplit comparesplit">
	<div class="row">
		<div class="leftyleft">
			<div class="thecontent">
				<h2 class="text-pink">How does Method + Madness compare to other conferences?</h2>
			<p>Not all conferences are created equal. Here’s why you should definitely attend this one.</p>
			<a href="" class="button">SEE HOW M + M STACKS UP</a>

			</div>
		</div>

		<div class="rightyright stretch">
			<div class="thecontent">
				<h2 class="text-white">Need help convincing your boss?</h2>
				<p>The Method + Madness Conference is a solid investment in your design career.</p>
				<a href="" class="button">WHY YOU SHOULD ATTEND</a>
			</div>
		</div>
	</div>
</section>




<?php
//============ ** ============ //
//  Pricing Grid
//============ ** ============ //
?>

<section class="container pricegrid">
	<div class="row">
		<div class="col-10 col-centered">
			<h2 class="text-center text-white">
				Save up to 60% now with Early Bird ticket pricing!<br>
				<strong>Prices go up July 15</strong>
			</h2>

			<p class="text-white text-center">
				All tickets include entrance to the Method + Madness Conference, PHXDW Kickoff Party,
				Method + Madness 	Opening Reception, and the PHXDW Closing Party
			</p>

			<div class="row" style="margin: 40px auto;">
				<div class="col-3 priceblock first">
					<div class="content">
					<p class="title">AIGA Member<br>General Admission</p>
					<p class="price">$199</p>
					</div>
				</div>

				<div class="col-3 priceblock second">
					<div class="content">
					<p class="title">AIGA Non-Member<br>General Admission</p>
					<p class="price">$269</p>
					</div>
				</div>

				<div class="col-3 priceblock third">
					<div class="content">
					<p class="title">AIGA Member<br>Student Admission</p>
					<p class="price">$99</p>
					</div>
				</div>

				<div class="col-3 priceblock fourth">
					<div class="content">
					<p class="title">AIGA Non-Member<br>Student Admission</p>
					<p class="price">$129</p>
					</div>
				</div>

			</div>


			<div class="row">
				<div class="col-4 col-centered">
					<a href="#" class="button white text-pink text-center" style="margin-bottom: 40px;">
						GET YOUR TICKET</a>
				</div>
			</div>

		</div>




	</div>
</section>



<?php
//============ ** ============ //
//  Students  (Phase 2)
//============ ** ============ //
?>

<section class="container halfsplit studentsplit">
<div class="row">
	<div class="leftyleft">
		<div class="thecontent">
			<h2>Are you a student on a shoestring?</h2>
			<p>Every year, we offer a limited number of student scholarships to attend the M + M Conference. </p>
			<a href="" class="button">LEARN MORE</a>

		</div>
	</div>

	<div class="rightyright stretch">
		<div class="thecontent">
			<h2>Why students love M + M</h2>
			<p>Don’t consider yourself a professional yet? We don’t mind! Here's why you should attend.</p>
			<a href="" class="button">GET THE DETAILS</a>

		</div>
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
