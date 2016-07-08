<?php get_header(); 
	
//Template Name: MM Conference Page

?>


<?php 
//============ ** ============ //
// 			Page HERO 
//============ ** ============ //?>

<section class="hero container">
	<div class="row hero-content text-center">
		<h1 class="text-white">PHOENIX DESIGN WEEK IS COMING</h1>
		<h3 class="text-white">October 22-28, 2016  •  Phoenix Design Week 2016</h3>
		<a href="" class="button white text-purple">Claim your spot</a>
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
			<h2  class="text-center">Some big quote here</h2>
			<cite>Your momma</cite>
			</blockquote>
		</div>
	</div>
</section>
			

<?php 
//============ ** ============ //	
//  Join us downtown  (Phase 2)
//============ ** ============ //
?>		




<?php 
//============ ** ============ //	
//  Compare | Convince your boss  (Phase 2)
//============ ** ============ //
?>	


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
