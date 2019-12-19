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
    controls: ['zoomControl']
  }); 
  let placemark = new ymaps.Placemark([55.7129601896129,37.418841339519744], {}, {
    // Опции.
    // Необходимо указать данный тип макета.
    iconLayout: 'default#image',
    // Своё изображение иконки метки.
    iconImageHref: `${window.directory}/img/mark.png`,
    // Размеры метки.
    iconImageSize: [124, 68],
    // Смещение левого верхнего угла иконки относительно
    // её "ножки" (точки привязки).
    iconImageOffset: [-65, -60]
  });
  let placemark2 = new ymaps.Placemark([55.712923848193526,37.41883597510172], {}, {
    // Опции.
    // Необходимо указать данный тип макета.
    iconLayout: 'default#image',
    // Своё изображение иконки метки.
    iconImageHref: `${window.directory}/img/mark.png`,
    // Размеры метки.
    iconImageSize: [124, 68],
    // Смещение левого верхнего угла иконки относительно
    // её "ножки" (точки привязки).
    iconImageOffset: [-65, -70]
  });
  myMap.controls.add('zoomControl', {position: {right: '40px', top: '5px'}});
  myMap.behaviors.disable('scrollZoom'); 
  myMap.geoObjects.add(placemark);
  myMapMobile.geoObjects.add(placemark2);
  myMapMobile.behaviors.disable('scrollZoom'); 
}

