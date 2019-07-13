import Slideout from 'slideout';
import $ from 'jquery';

$('.menu-button').on('click', function() {
  $(this).find('span').toggleClass('active');
  $('.header__mobile').toggleClass('active');
  $('body').toggleClass('active');
});
