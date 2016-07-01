<?php 
//============ ** ============ //
// 			Home HERO 
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
	
	<div class="row">
	<h2 class=" col-12 text-white text-center">M+M Speakers</h2>
	
	<div class="col-4">
		<a href="#">
			<img src="http://placehold.it/300x300">
			<h4>Speaker Name</h4>
			<p>Speaker short Bio</p>
		</a>
	</div>
	
	<div class="col-4">
		<a href="#">
			<img src="http://placehold.it/300x300">
			<h4>Speaker Name</h4>
			<p>Speaker short Bio</p>
		</a>
	</div>
	
	<div class="col-4">
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
			
			
