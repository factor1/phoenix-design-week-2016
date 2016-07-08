<?php get_header(); 
	
//Template Name: MM Conference Page

?>


<?php 
//============ ** ============ //
// 			Page HERO 
//============ ** ============ //?>

<section class="hero container">
	<div class="row hero-content text-center">
		<h1 class="text-white">Method + Madness Conference</h1>
		<h3 class="text-white">October 22-­23, 2016
													<br>The Phoenix Convention Center
													<br>8am Check­in • 9am Talks begin</h3>
		<a href="" class="button white text-purple">Be There</a>
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
	
	<div class="row speakerthumbgrid">
	<h2 class=" col-12 text-white text-center">M+M Speakers</h2>
	
	<div class="col-4 speakerthumb">
		<a href="#">
			<img src="http://placehold.it/300x300">
			<h4>Speaker Name</h4>
			<p>Speaker short Bio</p>
		</a>
	</div>
	 
	<div class="col-4 speakerthumb">
		<a href="#">
			<img src="http://placehold.it/300x300">
			<h4>Speaker Name</h4>
			<p>Speaker short Bio</p>
		</a>
	</div>
	
	<div class="col-4 speakerthumb">
		<a href="#">
			<img src="http://placehold.it/300x300">
		</a>
	</div>
	
	</div>
</section>


<?php 
//============ ** ============ //	
//  Third Row, Testimonial block 
//============ ** ============ //
?>

<section class="container tesimonial">
	<div class="row">
		<div class="col-12">
			<blockquote>
			<h2  class="text-center">
					"Method + Madness inspires me to create more, 
					strive to make my work better, and try new things. 
					It reminds me why I love design."</h2>
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

<h2>Join us in downtown Phoenix, AZ</h2>
<p>M + M takes place in the heart of the city. The increasingly revitalized downtown area is full of plenty of dining options and nightlife hotspots, and by October we’ll be experiencing some of the best weather of the year. </p>

	Button text: Learn About Downtown Phoenix



<?php 
//============ ** ============ //	
//  Compare | Convince your boss  (Phase 2)
//============ ** ============ //
?>	

<<<<<<< HEAD
<section class="container halfsplit">
	<div class="leftyleft">
			<div class="thecontent">
			<h2>How does Method + Madness compare to other conferences?</h2>
			<p>Not all conferences are created equal. Here’s why you should definitely attend this one.</p>
			<a href="" class="button">SEE HOW M + M STACKS UP</a>
			</div>
	</div>
	
		<div class="rightyright stretch">
				<div class="thecontent">
				<h2>Need help convincing your boss?</h2>
				<p>The Method + Madness Conference is a solid investment in your design career.</p>
				<a href="" class="button">WHY YOU SHOULD ATTEND</a>
				</div>

=======

<section class="container halfsplit comparesplit">
	<div class="row">
		<div class="leftyleft">
			<div class="thecontent">
				<h2 class="text-pink">Headline</h2>
				<p>Some content here</p>
				<a href="" class="button pink text-white">CTA!</a>
			
			</div>
		</div>
		
		<div class="rightyright stretch">
			<div class="thecontent">
				<h2 class="text-white">Headline</h2>
				<p class="text-white">Some content here</p>
				<a href="" class="button purple text-white">CTA!</a>
			</div>
		</div>
>>>>>>> b2e9ede83d94b2a8a4fa6d35b4d8feb05b7eb2d9
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
		<div class="thecontent">kdhsjf</div>
	</div>
	
	<div class="rightyright stretch">
		<div class="thecontent">kdhsjf</div>
	</div>
</div>
</section>


<!-- left -->
<h2>Are you a student on a shoestring?</h2>
<p>Every year, we offer a limited number of student scholarships to attend the M + M Conference. </p>
<a href="" class="button">LEARN MORE</a>


<!-- right -->
<h2>Why students love M + M</h2>
<p>Don’t consider yourself a professional yet? We don’t mind! Here's why you should attend.</p>
<a href="" class="button">GET THE DETAILS</a>




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
