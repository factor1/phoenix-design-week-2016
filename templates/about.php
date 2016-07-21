<?php get_header();

//Template Name: About

?>


<?php
//============ ** ============ //
// 			Page HERO
//============ ** ============ //?>

<section class="hero abouthero container">
	<div class="row hero-content">
		<div class="col-10 col-centered text-center">
			<h1 class="text-white">
				About Phoenix Design Week
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

		<?php if(have_posts()):
			while(have_posts()): the_post();
				the_content();
			endwhile;
		endif ?>

	</article>
	</div>


</section>



<?php
//=============== ** =============== //
// 	   		Past Speakers
//=============== ** =============== //
?>

<section class="container past_speakers">
	<div class="row">
	<div class="col-12">

		
<h2 class="text-pink text-center">Past Method + Madness Speakers</h2>

<ul>
	<li>Altay Sendil, Pinterest</li>
	<li>Armin Vit, Under Consideration</li>
	<li>Alex Medina, Reach Records</li>
	<li>Alicia Eggert, Bowdoin College</li>
	<li>Ashleigh Axios, The White House</li>
	<li>Becky Simpson</li>
	<li>Brian Singer, Facebook</li>
	<li>Bobby Martin, Original Champions of Design</li>
	<li>Danny Yount</li>
	<li>Debbie Millman, Sterling Brands</li>
	<li>Eddie Opara, Pentagram</li>
	<li>Heidi Meredith & Renée Walker</li>
	<li>Hillman Curtis</li>
	<li>Jacqui Oakley</li>
	<li>James Victore</li>
	<li>James White</li>
	<li>Jared Spool, UIE</li>
	<li>Jennifer Hom, Google</li>
	<li>Jennifer Kinon, Origin Champions of Design</li>
	<li>Jessica Walsh, SagmeisterWalsh</li>
	<li>Josh Higgins, Facebook</li>
	<li>Juan Carlos Pagan, Deutsch NY</li>
	<li>Justin Ahrens, Rule 29</li>
	<li>Kate Bingaman­Burt</li>
	<li>Kelly Stevens, Whole Foods</li>
	<li>Kenneth Fitzgerald</li>
	<li>Lotta Niemenan</li>
	<li>Mikey Burton</li>
	<li>Paul Sahre</li>
	<li>PJ McCormick, Amazon</li>
	<li>Rich Roat, House Industries</li>
	<li>Sam Harrison, Zing Zone</li>
	<li>Stefan Bucher, 344 Loves You</li>
	<li>Stewart Scott­Curran, Creative Live</li>
	<li>Todd Berger & Lucian F&ouml;hr</li>
	<li>Von Glitschka</li>
	<li>Yomar Agusto</li>
	<li>Bianca Giaever</li>
	<br style="clear:both;">
</ul>
	
	</div>	
	</div>
</section>


<?php
//=============== ** =============== //
// 	   		Meet the Team
//=============== ** =============== //
?>


<section class="container meet_team">
	<div class="row">
	<div class="col-12">

<h2 class="text-center text-yellow">Meet the team</h2>
<p>These are the volunteers who have given their time and talents to put together this year’s Phoenix Design Week. </p>

<ul>
	<li>Liz Magura, AIGA Arizona President and Speaker Coordination</li>
	<li>Amy Robinson, Project Management and Volunteer Coordination</li>
	<li>Danielle Knotts, Sponsorship Director</li>
	<li>Kathy Morgan, Finance Director</li>
	<li>Melissa Balkon, Creative Director</li>
	<li>Tara Anderson, Design Support</li>
	<li>Allison Perlis, Design Support</li>
	<li>Jessie Gould, Copywriting</li>
	<li>Matt Adams, Web Director</li>
	<li>Eric Stout, Web Developer</li>
	<li>Leah Newsom, Events Coordinator</li>
	<li>Rebekah Cancino, Speaker Coordinator</li>
</ul>

	</div>
	</div>
</section>







<?php
//=============== ** =============== //
// 	   	Conference Promo Split
//=============== ** =============== //
?>



<section class="container halfsplit abouthalves">
	<div class="row">
		<div class="leftyleft">
			<div class="thecontent">

				<h2 class="text-pink">Learn more about the Method + Madness Conference</h2>
				<p>The Method + Madness Conference is a solid investment in your design career.</p>

				<a href="https://www.eventbrite.com/e/method-madness-conference-phxdw-2016-tickets-24939107542" class="button pink">Get your M + M ticket</a>

			</div>
		</div>

		<div class="rightyright stretch">
			<div class="thecontent">
				<h2 class="text-white">	Check out <br>Phoenix Design Week events</h2>
				<p>There are design events all week across the city.</p>
				<a href="<?php echo home_url(); ?>/events" class="button purple">See the event schedule</a>
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
