$(document).ready(function () {
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

  var swiper = new Swiper('.clients-block .swiper-container', {
    slidesPerView: 6,
    spaceBetween: 10,
    navigation: {
      nextEl: '.clients-block .swiper-button-next',
      prevEl: ' clients-block .swiper-button-prev',
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
        slidesPerColumn: 2,
        spaceBetween: 10,
      },
    }
  });

  var swiper2 = new Swiper('.reviews-block.s1 .swiper-container', {
    spaceBetween: 100,
    effect: 'fade',
    navigation: {
      nextEl: '.reviews-block .fnavigation__btn--right',
      prevEl: '.reviews-block .fnavigation__btn--left',
    },
  });

  var swiper22 = new Swiper('.reviews-block.s2 .swiper-container', {
    spaceBetween: 100,
    effect: 'fade',
    navigation: {
      nextEl: '.reviews-block .fnavigation__btn--right',
      prevEl: '.reviews-block .fnavigation__btn--left',
    },
  });

  var swiper3 = new Swiper('.details__docs .swiper-container', {
    slidesPerView: 3,
    spaceBetween: 33,
    navigation: {
      nextEl: '.docs__navigation .fnavigation__btn--right',
      prevEl: '.docs__navigation .fnavigation__btn--left',
    },
    breakpoints: {
      768: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
    }
  });

  $("main").each(function () {
    $(this).hide();
  });
  $("#catalog").show();
});
