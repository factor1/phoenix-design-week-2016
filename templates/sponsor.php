<?php get_header(); 
	
//Template Name: Sponsors

?>

<section class="container hero">
	<div class="row hero-content">
		<div class="col-10 col-centered text-center">
			<h1 class="text-white">Sponsor Phoenix Design Week</h1>
	
	<p class="text-white">Phoenix Design Week is the premier design event in Arizona for designers, students, educators, writers, illustrators, and marketing professionals. Each year, over 450 individuals gather in downtown Phoenix to celebrate and share their skills, while another 4,000+ stay up to date on the event through social media and email. </p>
	
	<p class="text-white">Between the two ­day Method + Madness Conference and a host of local events taking place
	throughout the week, companies have plenty of opportunities to put their brand in front of an
	excited, targeted audience. All that’s missing is you.</p>
	
	<a href="http://phxdw.com/wp-content/uploads/2016/06/phxdw-2016-sponsorship-packet-051316.pdf" class="button white">Download the sponsorship brochure</a>
	
		</div>
	</div>
</section>


<?php 
//================== ** ================== //	
//  PAST Sponsor Repeater Grid  (Borrowed from parts/sponsors)
//================== ** ================== //
?>	


    <?php // Past Sponsors ?>
    <?php if(have_rows('past_sponsors', 'option')):?>
    
<section class="container sponsors--container">
    <div class="row">
      <div class="col-12 text-center">
        <h4 class="sponsors--headline">
          Past sponsors have included
        </h4>
      </div>
    </div>
    
      <div class="row row--justify-content-center">
        <?php while(have_rows('past_sponsors', 'option')): the_row();?>
          <div class="col-3 text-center sponsors--grid-item">
            <a href="<?php the_sub_field('sponsor_link');?>" target="_blank">
              <img src="<?php the_sub_field('sponsor_image');?>" alt="Sponsor Image">
            </a>
          </div>
        <?php endwhile;?>
      </div>
</section>    
    <?php endif;?>




<?php 
//============ ** ============ //	
//  	2 col Content here
//============ ** ============ //
?>	

<section class="container sponsorcontent">
	<div class="row">
		<div class="col-11 col-centered">
		<?php if(have_posts()): 
			while(have_posts()): the_post();
				the_content();
			endwhile; 
		endif ?>
		
		</div>
	</div>
</section>



<?php 
//=============== ** =============== //	
//  	Available Sponsorships
//=============== ** =============== //
?>	


<section class="container levels">
	<div class="row" style="margin:0 auto; padding:60px 0;">
		<div class="col-12 col-centered">
		
		<h2 class="text-center text-blue">Sponsorship opportunities</h2>
		
		<?php if( have_rows('levels') ):?>
			<ul>
			<?php while( have_rows('levels') ): the_row(); ?>
				<li class="detailblock">
					<h3><?php the_sub_field('level_name');?></h3>
					<div class="vol_description"><?php the_sub_field('description');?></div>
				</li>
			<?php endwhile; ?>
			</ul>
		<?php endif; ?>
		
		<a href="http://phxdw.com/wp-content/uploads/2016/06/phxdw-2016-sponsorship-packet-051316.pdf" class="button pink">Download the sponsorship brochure</a>

		</div>
	</div>
</section>




<?php 
//=============== ** =============== //	
//  	AIGA Sponsorships
//=============== ** =============== //
?>	


<section class="container home-sponsor">
	<div class="row">
		<div class="col-10 col-centered text-center">
			<h3 class="text-white">Other sponsorship opportunities with AIGA</h3>
			<p class="text-white">AIGA Arizona hosts over 25 events annually attended by thousands of Arizona designers. If you
would like to support AIGA Arizona directly, there are multiple opportunities to interact with the
Arizona design community year­ round. Please contact Danielle Knotts at
<a href="mailto:danielle.knotts@arizona.aiga.org">danielle.knotts@arizona.aiga.org</a> or (480) 529­-1825 for more information.</p>
	
		</div>
	</div>
</section>



<?php 
//============ ** ============ //	
//  			FORM
//============ ** ============ //
?>	

<section class="container" id="event_form">
	<div class="row">
		<div class="col-12">
		<h2 class="text-center text-white">Contact us</h2>
		
		<?php gravity_form( 2, false, false, false, '', false ); ?>
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