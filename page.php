<?php
  /**
   * The default page template.
   *
   * Used when a default template individual page is queried.
   */
  get_header();
?>

<section class="page--intro">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <img src="<?php bloginfo('template_url');?>/assets/img/phxdw-logo.png" alt="Phoenix Design Week 2016" class="main-logo">
        <h1 class="event-date">
          October 21-28, 2016
        </h1>
      </div>
    </div>
  </div>
</section>

<?php
  get_footer();
