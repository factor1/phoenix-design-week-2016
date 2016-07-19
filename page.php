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
      <div class="col-8 col-centered text-center">
        <a href="<?php bloginfo('url');?>/">
          <img src="<?php bloginfo('template_url');?>/assets/img/phxdw-logo.png" alt="Phoenix Design Week 2016" class="main-logo">
        </a>
        <h1 class="event-date">
          October 21-28, 2016
        </h1>
      </div>
    </div>
  </div>
</section>

<section class="page--title container">
  <div class="row">
    <div class="col-10 col-centered text-center">
      <h1>
        <?php the_title();?>
      </h1>
    </div>
  </div>
</section>

<?php if(have_posts()):?>
  <section class="page--content container">
    <?php while(have_posts()): the_post();?>
      <div class="row">
        <article class="col-11 col-centered">
          <?php the_content();?>
        </article>
      </div>
    <?php endwhile;?>
  </section>
<?php endif;?>

<?php
// Include Newsletter Part
get_template_part('parts/newsletter');

// Include Sponsors Part
get_template_part('parts/sponsors');

get_footer();
