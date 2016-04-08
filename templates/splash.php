<?php
/* Template Name: Splash Page */
get_header();
?>

<?php // Intro Container ?>
<section class="intro--block">
  <div class="container">
    <div class="row">
      <div class="col-8 col-centered text-center">
        <img src="<?php bloginfo('template_url');?>/assets/img/phxdw-logo.png" alt="Phoenix Design Week 2016" class="main-logo">
        <h1 class="event-date">
          October 21-28, 2016
        </h1>
        <p>
          Every year, Phoenix Design Week brings together hundreds of creative
          professionals and students from across the Valley for a week-long
          celebration of design—a series of presentations, workshops and events,
          all curated to inspire and strengthen the Phoenix design community.
        </p>
        <p>
          The highlight of Phoenix Design Week is the Method and Madness
          Conference, a two-day conference organized by community volunteers
          that features world-class speakers and local experts imparting
          actionable insights, hands-on education and a fiery passion for their
          craft.
        </p>
      </div>
    </div>
  </div>
</section>

<?php // Tickets Container ?>
<section class="tickets--container">
  <div class="container">
    <div class="row">
      <div class="col-6 text-center">
        <img src="<?php bloginfo('template_url');?>/assets/img/presale.png" alt="Pre-sale Tickets">
        <h2>Method + Madness Conference<br>October 22-23, 2016</h2>
      </div>
      <div class="col-6">
        <span>
          <strong>Only 100 tickets available</strong><br>
          When they're gone, they're gone.
        </span>
        <p>
          Pre-sale tickets are now on sale—act fast for deep discounts! For a
          limited time, become an AIGA member and save up to 60% off full
          price non-member admission.
        </p>

        <?php // Pricing Table ?>
        <div class="pricing-table--container">
          <?php // row ?>
          <div class="row">
            <div class="col-5">
              <p>
                AIGA Member
              </p>
            </div>
            <div class="col-3 text-left">
              <p>
                <strong>
                  $149
                </strong>
              </p>
            </div>
            <div class="col-4 text-left">
              <p>
                <strike>
                  $299 full price
                </strike>
              </p>
            </div>
          </div>
          <?php // row ?>
          <div class="row">
            <div class="col-5">
              <p>
                Non-Member
              </p>
            </div>
            <div class="col-3 text-left">
              <p>
                <strong>
                  $229
                </strong>
              </p>
            </div>
            <div class="col-4 text-left">
              <p>
                <strike>
                  $369 full price
                </strike>
              </p>
            </div>
          </div>
          <?php // row ?>
          <div class="row">
            <div class="col-5">
              <p>
                Student Member
              </p>
            </div>
            <div class="col-3 text-left">
              <p>
                <strong>
                  $79
                </strong>
              </p>
            </div>
            <div class="col-4 text-left">
              <p>
                <strike>
                  $99 full price
                </strike>
              </p>
            </div>
          </div>
          <?php // row ?>
          <div class="row">
            <div class="col-5">
              <p>
                Student
              </p>
            </div>
            <div class="col-3 text-left">
              <p>
                <strong>
                  $99
                </strong>
              </p>
            </div>
            <div class="col-4 text-left">
              <p>
                <strike>
                  $149 full price
                </strike>
              </p>
            </div>
          </div>
        </div>

        <a href="#" class="button button-yellow">
          Buy Tickets
        </a>
      </div>
    </div>
  </div>
</section>

<?php // Become A Sponsor Container ?>
<section class="become-sponsor--container">
  <div class="container">
    <div class="row">
      <div class="col-10 col-centered">
        <h1>
          Become A Sponsor
        </h1>
        <p>
          Support the most celebrated event in the Phoenix design community, and
          hundreds of creative professionals will take notice.
        </p>
        <a href="#" class="button button-white">
          Learn More
        </a>
      </div>
    </div>
  </div>
</section>

<?php // Newsletter Container ?>
<section class="newsletter--container">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1>
          Sign Up For Email Alerts
        </h1>
        <p>
          Phoenix Design Week 2016 is just heating up. Be the first to know
          about PHXDW events, Method + Madness Conference speakers and more.
        </p>
      </div>
    </div>
    <form class="row">
      <div class="col-5">
        <input type="text" placeholder="Name">
      </div>
      <div class="col-5">
        <input type="email" placeholder="Email Address">
      </div>
      <div class="col-2">
        <input type="submit" class="button button-drkpurple" value="Sign Up">
      </div>
    </form>
  </div>
</section>

<?php // Sponsors Container ?>
<section class="sponsors--container">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1>
          PHXDW Is Made Possible By Generous Sponsors
        </h1>
      </div>
    </div>

    <?php // Premier Sponsors ?>
    <div class="row">
      <div class="col-12 text-center">
        <h4 class="sponsors--headline">
          Premier Sponsors
        </h4>
      </div>
    </div>
    <?php if(have_rows('premier_sponsors', 'option')):?>
      <div class="row">
        <?php while(have_rows('premier_sponsors', 'option')): the_row();?>
          <div class="col-3 text-center sponsors--grid-item">
            <a href="<?php the_sub_field('sponsor_link');?>" target="_blank">
              <img src="<?php the_sub_field('sponsor_image');?>" alt="Sponsor Image">
            </a>
          </div>
        <?php endwhile;?>
      </div>
    <?php endif;?>

    <?php // Print Sponsors ?>
    <div class="row">
      <div class="col-12 text-center">
        <h4 class="sponsors--headline">
          Print Sponsors
        </h4>
      </div>
    </div>
    <?php if(have_rows('print_sponsors', 'option')):?>
      <div class="row">
        <?php while(have_rows('print_sponsors', 'option')): the_row();?>
          <div class="col-3 text-center sponsors--grid-item">
            <a href="<?php the_sub_field('sponsor_link');?>" target="_blank">
              <img src="<?php the_sub_field('sponsor_image');?>" alt="Sponsor Image">
            </a>
          </div>
        <?php endwhile;?>
      </div>
    <?php endif;?>

  </div>
</section>

<?php get_footer();?>
