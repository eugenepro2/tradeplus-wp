import $ from 'jquery';

//Вызывем при загрузке страницы
setWidthAndOffsetFirstMenuItem();
//Вызываем при изминении окна браузера
$(window).resize(function() {
  setWidthAndOffsetFirstMenuItem();
});
//Вызываем при наведении на элемент меню
$('nav ul li').hover(function() {
  setWidthAndOffsetMenuItem($(this));
});



function setWidthAndOffsetFirstMenuItem() {
  $('nav ul li').each((i, el) => {
    if ($(el).hasClass('active')) {
      setWidthAndOffsetMenuItem($(el));
    }
  });  
}

function setWidthAndOffsetMenuItem(item) {
  const slide  = $('.slide');
  const width = item.width();
  const offsetItem = item.offset();
  slide.width(width);
  slide.offset({
    left: offsetItem.left,
  });  
}
