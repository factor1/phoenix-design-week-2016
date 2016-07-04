<!--
Title Sponsor - Limit 1
Premier Sponsor - Limit 5
Premier Print and Large Format Sponsor - Limit 5
Leadership Sponsor 
Industry Sponsor
Agency Sponsor
-->




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

    <?php // Title Sponsors ?>
    <?php if(have_rows('title_sponsors', 'option')):?>
    
    <div class="row">
      <div class="col-12 text-center">
        <h4 class="sponsors--headline">
          Premier Sponsors
        </h4>
      </div>
    </div>
    
      <div class="row row--justify-content-center">
        <?php while(have_rows('title_sponsors', 'option')): the_row();?>
          <div class="col-3 text-center sponsors--grid-item">
            <a href="<?php the_sub_field('sponsor_link');?>" target="_blank">
              <img src="<?php the_sub_field('sponsor_image');?>" alt="Sponsor Image">
            </a>
          </div>
        <?php endwhile;?>
      </div>
      
    <?php endif;?>





    <?php // Premier Sponsors ?>
    <?php if(have_rows('premier_sponsors', 'option')):?>
    
    <div class="row">
      <div class="col-12 text-center">
        <h4 class="sponsors--headline">
          Premier Sponsors
        </h4>
      </div>
    </div>
    
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
    
    
    
    

    <?php // Print Sponsors ?>
    <?php if(have_rows('print_sponsors', 'option')):?>
    <div class="row">
      <div class="col-12 text-center">
        <h4 class="sponsors--headline">
          Premier Print and Large Format Sponsor
        </h4>
      </div>
    </div>
    
      <div class="row row--justify-content-center">
        <?php while(have_rows('print_sponsors', 'option')): the_row();?>
          <div class="col-3 text-center sponsors--grid-item">
            <a href="<?php the_sub_field('sponsor_link');?>" target="_blank">
              <img src="<?php the_sub_field('sponsor_image');?>" alt="Sponsor Image">
            </a>
          </div>
        <?php endwhile;?>
      </div>
    <?php endif;?>
    
    
    


    <?php // Leadership Sponsors ?>
    <?php if(have_rows('leadership_sponsors', 'option')):?>
    <div class="row">
      <div class="col-12 text-center">
        <h4 class="sponsors--headline">
          Industry Sponsors
        </h4>
      </div>
    </div>
    
      <div class="row row--justify-content-center">
        <?php while(have_rows('leadership_sponsors', 'option')): the_row();?>
          <div class="col-3 text-center sponsors--grid-item">
            <a href="<?php the_sub_field('sponsor_link');?>" target="_blank">
              <img src="<?php the_sub_field('sponsor_image');?>" alt="Sponsor Image">
            </a>
          </div>
        <?php endwhile;?>
      </div>
    <?php endif;?>
    
    
    
    



    <?php // Industry Sponsors ?>
    <?php if(have_rows('industry_sponsors', 'option')):?>
    <div class="row">
      <div class="col-12 text-center">
        <h4 class="sponsors--headline">
          Industry Sponsors
        </h4>
      </div>
    </div>
    
      <div class="row row--justify-content-center">
        <?php while(have_rows('industry_sponsors', 'option')): the_row();?>
          <div class="col-3 text-center sponsors--grid-item">
            <a href="<?php the_sub_field('sponsor_link');?>" target="_blank">
              <img src="<?php the_sub_field('sponsor_image');?>" alt="Sponsor Image">
            </a>
          </div>
        <?php endwhile;?>
      </div>
    <?php endif;?>
    
    
    
    
    <?php // Agency Sponsors ?>
    <?php if(have_rows('agency_sponsors', 'option')):?>
    <div class="row">
      <div class="col-12 text-center">
        <h4 class="sponsors--headline">
          Agency Sponsors
        </h4>
      </div>
    </div>
    
      <div class="row row--justify-content-center">
        <?php while(have_rows('agency_sponsors', 'option')): the_row();?>
          <div class="col-3 text-center sponsors--grid-item">
            <a href="<?php the_sub_field('sponsor_link');?>" target="_blank">
              <img src="<?php the_sub_field('sponsor_image');?>" alt="Sponsor Image">
            </a>
          </div>
        <?php endwhile;?>
      </div>
    <?php endif;?>
    
    
    
    <?php // Partner Organization / Sponsors ?>
    
    <?php if(have_rows('partner_sponsors', 'option')):?>
    <div class="row">
      <div class="col-12 text-center">
        <h4 class="sponsors--headline">
           Partner Organizations who helped organize this event
        </h4>
      </div>
    </div>
    
      <div class="row row--justify-content-center">
        <?php while(have_rows('partner_sponsors', 'option')): the_row();?>
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
