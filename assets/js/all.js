/* Nifty Nav
* Author: Eric Stout / Factor1
* http://factor1studios.com
* Repo: https://github.com/factor1/nifty-nav
* Version: 2.2.0
*/

var niftyNav = function(options){
  $nifty_toggle = $('#nifty-nav-toggle');
  $nifty_panel = $('.nifty-panel');
  $nifty_nav_item = $('.nifty-nav-item');
  $nifty_parent = $('.nifty-panel ul li');

  var settings = $.extend({
    // These are the defaults.
    subMenus: false,
    mask: true,
    itemClickClose: true,
    panelPosition:  'absolute',
    subMenuParentLink:  false
  }, options );

  subMenus          = settings.subMenus;
  mask              = settings.mask;
  itemClickClose    = settings.itemClickClose;
  panelPosition     = settings.panelPosition;
  subMenuParentLink = settings.subMenuParentLink;


  // Core Nifty Nav Functions
  niftyRemove = function(){
    $('.nifty-mask').remove();
  };

  niftyUnmask = function(){
    $('.nifty-mask').animate({opacity: 0.0});
    setTimeout(niftyRemove, 800);
  };

  // on nifty nav toggle click
  $nifty_toggle.click(function(){
    var $this = $(this);
    $this.toggleClass('nifty-active');
    $nifty_panel.slideToggle(500).css('position',panelPosition);

    // if panelPosition is fixed
    if( panelPosition == 'fixed' ){
      $('body').toggleClass('nifty-lock');
    }

    if( mask === true){
      // if a mask exists
      if( $('.nifty-mask').length > 0 ){
        niftyUnmask();
      } else{
        // if no mask exists
        $('body').append('<div class="nifty-mask"></div>');
        $('.nifty-mask').animate({opacity: 1.0});

        // if a user clicks on the mask
        $('.nifty-mask').click(function(){
          $nifty_panel.slideUp(500);
          niftyUnmask();
          $nifty_toggle.removeClass('nifty-active');

          // if panelPosition is fixed
          if( panelPosition == 'fixed' ){
            $('body').removeClass('nifty-lock');
          }
        });
      }
    }
  });

  // close nifty nav on nav item click
  if( itemClickClose === true ){
    $nifty_nav_item.click(function(){
      $nifty_panel.slideUp(500);
      niftyUnmask();
      $nifty_toggle.removeClass('nifty-active');

      // if panelPosition is fixed
      if( panelPosition == 'fixed' ){
        $('body').removeClass('nifty-lock');
      }

    });
  }

  // if sub menus are enabled
  if( subMenus === true ){
    var $nifty_parent_active;
    // if subMenuParentLink is false
    if( subMenuParentLink === false ){
      $('.nifty-panel .menu-item-has-children > a').click(function(event){
        event.preventDefault();
      });
    }

    $nifty_parent.click(function(){
      $nifty_parent_active = $(this);
      $nifty_parent_active.find('.sub-menu').slideToggle();
      $nifty_parent_active.find('a').toggleClass('nifty-menu-opened');
    });
  }

};

// Height and Transform functions for tickets container
var fancyCalculate = function(){
  var intro       = $('.intro--block'),
  ticketContainer = $('.tickets--container'),
  sponsorContainer = $('.sponsors--container'),
  newsletterContainer = $('.newsletter--container'),
  ticketHeight    = $('.tickets--container').height(),
  translateVal    = ticketHeight/2;

  intro.css('padding-bottom', translateVal+40);
  ticketContainer.css('margin', '-'+translateVal+'px auto 0');

};

jQuery( document ).ready(function( $ ) {
  fancyCalculate();

  $('.close-icon').click(function(){
    var $this = $(this);
    $this.parent().css('display','none');
  });

  // niftyNav
  niftyNav({
    mask: false
  });
  
});


// Flexible Accordions

$accordion = $('.accordion--title');
$accordion.click(function(){
  $this = $(this);
  $this.find('.fa').toggleClass('fa-chevron-down');
  $this.find('.fa').toggleClass('fa-chevron-up');
  $this.find('.accordion--content').slideToggle();
});

