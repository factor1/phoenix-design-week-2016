// Height and Transform functions for tickets container
var fancyCalculate = function(){
  var intro       = $('.intro--block'),
  ticketContainer = $('.tickets--container'),
  sponsorContainer = $('.sponsors--container'),
  ticketHeight    = $('.tickets--container').height(),
  translateVal    = ticketHeight/2;

  intro.css('padding-bottom', translateVal+40);
  ticketContainer.css('transform', 'translateY(-'+translateVal+'px)');
  sponsorContainer.css('transform', 'translateY(-'+translateVal+'px)');

};

jQuery( document ).ready(function( $ ) {
  fancyCalculate();
});
