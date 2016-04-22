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
          professionals and students from across Arizona for a week-long
          celebration of design—a series of presentations, workshops and events,
          all curated to inspire and strengthen the Arizona design community.
        </p>
        <p>
          The highlight of Phoenix Design Week is the Method + Madness
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
        <img src="<?php bloginfo('template_url');?>/assets/img/early-bird.png" alt="Pre-sale Tickets">
        <h2>Method + Madness Conference<br>October 22-23, 2016</h2>
        <p>
          <em>Early Bird tickets inlcude admission to PHXDW Open Party on October 21
          and PHXDW Closing Party on October 28</em>
        </p>
      </div>
      <div class="col-6">
        <span>
          <strong>Only 100 Early Bird tickets available</strong><br>
          When they're gone, they're gone.
        </span>
        <p>
          Act fast and get deep discounts now on PHXDW presale tickets! Better
          yet, <a href="http://www.aiga.org/join/">become an AIGA member</a> for as little as $50/year and save even
          more — up to 60% off full-price admission.
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

        <a href="<?php bloginfo('url');?>/product/method-madness-early-bird-ticket/" class="button button-yellow">
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
          Support the most celebrated event in the Arizona design community, and
          hundreds of creative professionals will take notice.
        </p>
        <a href="http://factor1.me/2016/phxdw/wp-content/uploads/2016/04/phxdw-2016-sponsorship-packet-041416.pdf" class="button button-white">
          Learn More
        </a>
      </div>
    </div>
  </div>
</section>

<?php
// Include Newsletter Part
get_template_part('parts/newsletter');

// Include Sponsors Part
get_template_part('parts/sponsors');

get_footer();?>
