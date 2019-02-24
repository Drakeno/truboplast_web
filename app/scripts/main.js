$(document).ready(function () {
  $("main").each(function () {
    $(this).hide();
    $("#main-page").show();
  });
  $(".navigation__list-item").each(function () {
    if ($(this).hasClass("active")) {
      var neededId = $(this).attr("href");
      $("#" + neededId).show();
    }
  });
  $(".navigation__list-item a").click(function (e) {
    e.preventDefault();
    var neededId = $(this).attr("href");
    $("main").each(function () {
      $(this).hide();
    });

    $("#" + neededId).show();
    $(".navigation__list-item").each(function () {
      $(this).removeClass("active");
    });
    $(this)
      .parent()
      .addClass("active");
  });

  $('.swiper-container').each(function (index, element) {
    $(this).addClass('s' + index);
  });

  var swiper = new Swiper('.s0', {
    slidesPerView: 6,
    spaceBetween: 10,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  var swiper2 = new Swiper('.s1', {
    spaceBetween: 100,
    effect: 'fade',
    navigation: {
      nextEl: '.fnavigation__btn--right',
      prevEl: '.fnavigation__btn--left',
    },
  });
});
