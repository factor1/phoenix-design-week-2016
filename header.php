<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php endif; ?>
  <?php if (is_search()) { ?>
   <meta name="robots" content="noindex, nofollow" />
	<?php } ?>

  <meta property="og:title" content="<?php the_title(); ?>" />
  <meta property="og:site_name" content="<?php bloginfo('name') ?>">

  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

  <?php wp_head(); ?>

  <!-- Typekit -->
  <script src="https://use.typekit.net/hbk2blk.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>
<body <?php body_class(); ?>>

  <?php // Main Content ?>
  <main class="main--container">

  <header class="container">
		<div class="row">
			<div class="col-8" style="padding-left:0px;">
				<h1 class="branding"><a href=""><span>Phonix Design Week</span></a></h1>
				<h2>Phoenix Design Week   ||   October 21-28, 2016</h2>
			</div>

			<div class="col-4 header-buy-menu">
        <a href="#" class="buynow">
		      Buy Method + Madness Tickets
        </a>
        <div class="nifty-burger">
          <a id="nifty-nav-toggle" ><span></span></a>
        </div>

        <?php // Nifty Nav Panel ?>
        <div class="nifty-panel">
          <div class="container">
            <div class="row">
              <div class="col-12 text-right">
                <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
              </div>
            </div>
          </div>
        </div>
        
			</div>

		</div>
  </header>
