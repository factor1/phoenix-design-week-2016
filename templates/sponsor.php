<?php get_header(); 
	
//Template Name: Sponsors

?>

<section class="container hero">
	<h1>Sponsor Phoenix Design Week</h1>
	
	<p>Phoenix Design Week is the premier design event in Arizona for designers, students, educators, writers, illustrators, and marketing professionals. Each year, over 450 individuals gather in downtown Phoenix to celebrate and share their skills, while another 4,000+ stay up to date on the event through social media and email. </p>
	
	<p>Between the two ­day Method + Madness Conference and a host of local events taking place
	throughout the week, companies have plenty of opportunities to put their brand in front of an
	excited, targeted audience. All that’s missing is you.</p>
	
	<a href="" class="button">Download the sponsorship brochure</a>
</section>


<?php 
//================== ** ================== //	
//  PAST Sponsor Repeater Grid  (Borrowed from parts/sponsors)
//================== ** ================== //
?>	


    <?php // Past Sponsors ?>
    <?php if(have_rows('past_sponsors', 'option')):?>
    
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
      
    <?php endif;?>




<?php 
//============ ** ============ //	
//  	2 col Content here
//============ ** ============ //
?>	

		<?php if(have_posts()): 
			while(have_posts()): the_post();
				the_content();
			endwhile; 
		endif ?>



<?php 
//=============== ** =============== //	
//  	Available Sponsorships
//=============== ** =============== //
?>	

<section class="contianer">

ACF repeater ?

Final sponsor CTA

</section>



<?php 
//=============== ** =============== //	
//  	AIGA Sponsorships
//=============== ** =============== //
?>	

<section class="contianer">

<h2>Other sponsorship opportunities with AIGA</h2>
<p>AIGA Arizona hosts over 25 events annually attended by thousands of Arizona designers. If you
would like to support AIGA Arizona directly, there are multiple opportunities to interact with the
Arizona design community year­ round. Please contact Danielle Knotts at
danielle.knotts@arizona.aiga.org or (480) 529­1825 for more information.</p>

</section>



<?php 
//============ ** ============ //	
//  			FORM
//============ ** ============ //
?>	

<h2>Contact us</h2>

[form gf_id=3]

Button: Submit




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