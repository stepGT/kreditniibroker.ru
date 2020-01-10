$(function () {
  $('.tariff__slick').slick({
    infinite: false,
    centerMode: true,
    centerPadding: '6%',
    responsive: [
      {
        breakpoint: 375,
        settings: {
          arrows: true,
          centerMode: true,
          //centerPadding: '10px',
          slidesToShow: 1
        }
      }
    ]
  });
  //
  $('.header__form form input').keyup(function () {
    var empty = false;
    $('.header__form form').find('input[type="text"]').each(function () {
      if (($(this).val() == '')) {
        empty = true;
      }
    });
    if (empty) {
      $('.header__form button').css('background', '#ccc').attr('disabled', 'disabled');
    }
    else {
      $('.header__form button').css('background', '#3363be').removeAttr('disabled');
    }
  });
});