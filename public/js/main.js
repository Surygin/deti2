
$('.menu-button').on('click', function(e) {
  e.preventDefault;
  $(this).toggleClass('menu-button__active');

});

$('.link-close').on('click', function(e) {
  e.preventDefault;
  $('.menu-button').toggleClass('menu-button__active');

});

$('.menu-button').on('click', function(e) {
  $('.header-menu').toggleClass('w-100');
  });

$('.link-close').on('click', function(e) {
  $('.header-menu').toggleClass('w-100');
});
// скролл 
    $('.go-to').click( function(){ // ловим клик по ссылке с классом go_to
    var scroll_el = $(this).attr('href'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
   if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
    $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 800); // анимируем скроолинг к элементу scroll_el
  }
    return false; // выключаем стандартное действие
  });
// маска для формы
jQuery(function($){
  $(".input-offer2").mask("+7(999) 999-9999");
  $(".form-input").mask("+7(999) 999-9999");
});