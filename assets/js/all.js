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
});
