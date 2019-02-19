$(document).ready(function () {
    $('main').each(function () {
        $(this).hide()
        $('#specials').show();
    });

    $('.navigation__list-item').each(function () {
        if ($(this).hasClass('active')) {
            var neededId = $(this).attr('href');
            $('#' + neededId).show();
        }
    });

    $('.navigation__list-item a').click(function (e) {
        e.preventDefault();
        var neededId = $(this).attr('href');
        $('main').each(function () {
            $(this).hide()
        });
  
        $('#' + neededId).show();
        $('.navigation__list-item').each(function () {
            $(this).removeClass('active');
        });
        $(this).parent().addClass('active');
    });
});