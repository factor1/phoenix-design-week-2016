<?php
  /**
   * The default page template.
   *
   * Used when a default template individual page is queried.
   */
  get_header();
?>


<?php
//============ ** ============ //
// 			Page HERO
//============ ** ============ //?>

<section class="hero container">
	<div class="row hero-content">
		<div class="col-10 col-centered text-center">
			<h1 class="text-white">
				<?php the_title();?>
			</h1>
		</div>
	</div>
</section>



<?php
//============ ** ============ //
// 			Page copy
//============ ** ============ //?>

<section class="container pagecopy">
	<div class="rowt">
	<?php if(have_posts()):?>
	  <section class="page--content container">
	    <?php while(have_posts()): the_post();?>
	      <div class="row">
	        <article class="col-10 col-centered">
	          <?php the_content();?>
	        </article>
	      </div>
	    <?php endwhile;?>
	  </section>
	<?php endif;?>
	</div>
</section>



<?php 
	// Is this the student applicaiton page? 
if ( is_page(87) ) : ?>
		<section class="container" id="student_form">
			<div class="row">
				<div class="col-10 col-centered">	
				<?php gravity_form( 4, false, false, false, '', false ); ?>
				</div>
				
			</div>
		</section>


<?php 
	// Is this the student applicaiton page? 
elseif ( is_page(88) ) : ?>
<section class="container tesimonial">
	<div class="row">
		<div class="col-12 text-center">
			<blockquote>
				<h2>
					&ldquo;I hope nobody ever tells the PHXDW organizers that they're only charging a tenth of what they should be for a conference of this caliber&rdquo;
				</h2>
				<cite>James Archer, 2014 attendee</cite>
			</blockquote>
		</div>
	</div>
</section>

<?php endif; ?>




<?php
// Include Newsletter Part
get_template_part('parts/newsletter');

// Include Sponsors Part
get_template_part('parts/sponsors');

get_footer();
