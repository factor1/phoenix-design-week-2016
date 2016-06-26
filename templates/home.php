<?php get_header(); 
	
//Template Name: Home Page

?>
 
 
<?php 
//============ ** ============ //
// 			Home HERO 
//============ ** ============ //?>

<section class="home-hero container">
	<div class="row hero-content">
		<h1>PHOENIX DESIGN WEEK IS COMING</h1>
		<h3>October 22-28, 2016  •  Phoenix Design Week 2016</h3>
	</div>
</section>



<?php 
//============ ** ============ //	
//  Second Row, info block 
//============ ** ============ //
?>

<section class="container home-intros">
	<div class="row">
		
		<?php // Left Col, Spans the next col splits top and bottom ?>
		<div class="col-6">
	     	<?php the_content();?>
	    </div>
	    
	    <?php // Right Col, Splits top and bottom ?>
	    <div class="col-6">
	    	<div class="home-cta-top">
		    	<h3>Attend the Method + Madness Conference</h3>
		    	<p>Check out this year’s speakers and reserve your spot now!</p>
		    	<a href="#" class="button pink">LEARN MORE ABOUT M + M</a>
	    	</div>
	    	
	    	<div class="home-cta-bottom">
		    	<h3>See all Phoenix Design Week events</h3>
		    	<p>There are design events all week across the city.</p>
		    	<a href="#" class="button purple">SSEE THE EVENT SCHEDULE</a>
	    	</div>
	      
	    </div>
	</div>
</section>



<?php 
//============ ** ============ //
// 	   Become a Sponsor CTA 
//============ ** ============ //
?>

<section class="container home-sponsor">
	<div class="row text-center">
		<h3>Become a sponsor</h3>
		<p>Invest in the most celebrated event in the Arizona design community, and hundreds of creative professionals will take notice./p>
		<a href="#" class="button white">See sponsorship opportunities</a>
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
