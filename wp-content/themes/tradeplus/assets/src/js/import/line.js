import 'is-in-viewport';
import $ from 'jquery';

AnimateLine();

$(window).on('scroll', function() {
  AnimateLine();
});

function AnimateLine() {
  const line = $('.line');
  $('.heading').each(function(i, el) {
    if ( $(el).is( ':in-viewport' ) ) {
      $(el).find('.line__thin').width(line.offset().left + 150);
    } 
  });
}
