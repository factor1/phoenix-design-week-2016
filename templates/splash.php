<?php
/* Template Name: Splash Page */
get_header();
?>

<div class="intro--block">
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
</div>

<div class="tickets--container">
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

      </div>
    </div>
  </div>
</div>

<?php get_footer();?>
