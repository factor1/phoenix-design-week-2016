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