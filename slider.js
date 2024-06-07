$(function() {
    'use strict';
    
      $('.carousel .carousel-item[data-src]').each(function() {
          var $this = $(this);
  
          $this.prepend([
              '<div style="background-image: url(', $this.attr('data-src'), ')"></div>'
          ].join(''));
      });
  });
  
/* For touch devices jquery code for carousel from github for swiping */
  $('.carousel').on('touchstart', function(event){
    const xClick = event.originalEvent.touches[0].pageX;
    $(this).one('touchmove', function(event){
        const xMove = event.originalEvent.touches[0].pageX;
        const sensitivityInPx = 5;

        if( Math.floor(xClick - xMove) > sensitivityInPx ){
            $(this).carousel('next');
        }
        else if( Math.floor(xClick - xMove) < -sensitivityInPx ){
            $(this).carousel('prev');
        }
    });
    $(this).on('touchend', function(){
        $(this).off('touchmove');
    });
});