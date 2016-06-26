<?php // Sponsors Container ?>
<section class="sponsors--container">

    <div class="row">
      <div class="col-12 text-center">
        <h4 class="sponsors--headline">
           Partner Organizations who helped organize this event
        </h4>
      </div>
    </div>
    <?php if(have_rows('premier_sponsors', 'option')):?>
      <div class="row row--justify-content-center">
        <?php while(have_rows('premier_sponsors', 'option')): the_row();?>
          <div class="col-3 text-center sponsors--grid-item">
            <a href="<?php the_sub_field('sponsor_link');?>" target="_blank">
              <img src="<?php the_sub_field('sponsor_image');?>" alt="Sponsor Image">
            </a>
          </div>
        <?php endwhile;?>
      </div>
    <?php endif;?>
</section>
