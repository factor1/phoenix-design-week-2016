<?php get_header(); 
	
//Template Name: Home Page

?>
 
 
<?php 
//============ ** ============ //
// 			Home HERO 
//============ ** ============ //?>

<section class="hero container">
	<div class="row hero-content text-center">
		<h1 class="text-white">PHOENIX DESIGN WEEK IS COMING</h1>
		<h3 class="text-white">October 22-28, 2016  •  Phoenix Design Week 2016</h3>
	</div>
</section>



<?php 
//============ ** ============ //	
//  Second Row, info block 
//============ ** ============ //
?>


<section class="container home-intros halfsplit">
	<div class="leftyleft">
			<div class="thecontent">
			
				<?php if(have_posts()): 
				while(have_posts()): the_post();
					the_content();
		     	endwhile; 
		     	endif ?>
			</div>
	</div>
	
	<div class="rightyright stretch">
		<div class="content-a">
			<div class="thecontent">
			
			<h3 style="text-pink">Attend the Method + Madness Conference</h3>
	    	<p>Check out this year’s speakers and reserve your spot now!</p>
	    	<a href="#" class="button pink text-white">LEARN MORE ABOUT M + M</a>
			
			
			</div>
		</div>
		<div class="content-b">
			<div class="thecontent">
				
			<h3 class="text-white">See all Phoenix Design Week events</h3>
			<p class="text-white">There are design events all week across the city.</p>
			<a href="#" class="button purple text-white">SEE THE EVENT SCHEDULE</a>
				
			</div>
		</div>
	</div>
</section>





<section class="container home-intros">
	<div class="row">
		
		<?php // Left Col, Spans the next col splits top and bottom ?>
		<div class="col-6 home-thecontent">
		
			<?php if(have_posts()): 
				while(have_posts()): the_post();
					the_content();
		     	endwhile; 
		     	endif ?>
	    </div>
	    
	    <?php // Right Col, Splits top and bottom ?>
	    <div class="col-6 home-splits">
	    	<div class="home-cta-top">
		    	<h3 style="text-pink">Attend the Method + Madness Conference</h3>
		    	<p>Check out this year’s speakers and reserve your spot now!</p>
		    	<a href="#" class="button pink text-white">LEARN MORE ABOUT M + M</a>
	    	</div>
	    	
	    	<div class="home-cta-bottom">
		    	<h3 class="text-white">See all Phoenix Design Week events</h3>
		    	<p class="text-white">There are design events all week across the city.</p>
		    	<a href="#" class="button purple text-white">SEE THE EVENT SCHEDULE</a>
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
		<h3 class="text-white">Become a sponsor</h3>
		<p class="text-white">Invest in the most celebrated event in the Arizona design community, and hundreds of creative professionals will take notice.</p>
		<a href="#" class="button white text-pink">See sponsorship opportunities</a>
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
