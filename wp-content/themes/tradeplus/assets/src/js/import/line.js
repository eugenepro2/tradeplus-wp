import 'is-in-viewport';
const line = $('.line');

$(window).on('scroll', function() {
  $('.heading').each(function(i, el) {
    if ( $(el).is( ':in-viewport' ) ) {
      $(el).find('.line__thin').width(line.offset().left);
    } 
  });
});
