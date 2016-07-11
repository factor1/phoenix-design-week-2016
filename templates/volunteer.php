<?php get_header(); 
	
//Template Name: Volunteer

?>



		<?php if(have_posts()): 
			while(have_posts()): the_post();
				the_content();
			endwhile; 
		endif ?>


<?php 
//================== ** ================== //	
//  ACF Volunteer opportunities repeater
//================== ** ================== //
?>	


<?php 
//============ ** ============ //	
//  			FORM
//============ ** ============ //
?>	

<h2>Interested in volunteering? Reach out, and we’ll send you the details!</h2>

[gravity form here]

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