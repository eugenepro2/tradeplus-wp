if ($('#map').length) {
  ymaps.ready(init);     
}

 
let myMap;
let myMapMobile;
function init() { 
  myMap = new ymaps.Map('map', {
    center: [55.713347201528684,37.4155127010498],
    zoom: 16,
    controls: []
  }); 
  myMapMobile = new ymaps.Map('map-mobile', {
    center: [55.71226906904367,37.4166285],
    zoom: 16,
    controls: []
  }); 
  let placemark = new ymaps.Placemark([55.71226906904367,37.4166285], {}, {
    // Опции.
    // Необходимо указать данный тип макета.
    iconLayout: 'default#image',
    // Своё изображение иконки метки.
    iconImageHref: `${window.directory}/img/mark.svg`,
    // Размеры метки.
    iconImageSize: [179, 68],
    // Смещение левого верхнего угла иконки относительно
    // её "ножки" (точки привязки).
    iconImageOffset: [-50, -78]
  });
  let placemark2 = new ymaps.Placemark([55.71226906904367,37.4166285], {}, {
    // Опции.
    // Необходимо указать данный тип макета.
    iconLayout: 'default#image',
    // Своё изображение иконки метки.
    iconImageHref: `${window.directory}/img/mark.svg`,
    // Размеры метки.
    iconImageSize: [179, 68],
    // Смещение левого верхнего угла иконки относительно
    // её "ножки" (точки привязки).
    iconImageOffset: [-50, -78]
  });
  myMap.behaviors.disable('scrollZoom'); 
  myMap.geoObjects.add(placemark);
  myMapMobile.geoObjects.add(placemark2);
  myMapMobile.behaviors.disable('scrollZoom'); 
}

