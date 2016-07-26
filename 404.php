<?php
  /**
   * The 404 Not Found template.
   * 
   * Used when WordPress encounters an unknown URL.
   */
  get_header();
?>


<section class="hero container">
	<div class="row hero-content">
		<div class="col-10 col-centered text-center">
			<h1 class="text-white">
				Hmm, that page does not exist...
			</h1>
		</div>
	</div>
</section>



<?php
  get_sidebar();
  get_footer();
