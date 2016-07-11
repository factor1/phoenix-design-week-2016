<?php get_header(); 
	
//Template Name: Contact

?>



		<?php if(have_posts()): 
			while(have_posts()): the_post();
				the_content();
			endwhile; 
		endif ?>




<?php 
//============ ** ============ //
// 	   Gravity Form ID 1
//============ ** ============ //

FORMS!


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