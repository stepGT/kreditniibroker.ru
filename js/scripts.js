$(function () {
  $('.tariff__slick').slick({
    centerMode: true,
    centerPadding: '5%',
    responsive: [
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });
  //
  $('.header__form form input').keyup(function () {
    var header__form_button = $('.header__form button');
    //
    $('.header__form form').find('input[type="text"]').each(function () {
      //
      if (($(this).val() == '')) {
        header__form_button.css('opacity', '.7').attr('disabled', 'disabled');
      }
      else {
        header__form_button.css('opacity', '1').removeAttr('disabled');
      }
    });
  });
  // Mask
  $("#phone").inputmask({'mask': '+7 (999) 999-9999'});

  $('.header__form form').submit(function (e) {
    e.preventDefault();
    $.ajax({
      url: $(this).attr('action')
    }).done(function (response) {
      var $modal = $('.modal');
      $modal.modal('show');
      $modal.on('hide.bs.modal', function (e) {
        $('.header__form form input').val('')
      })
    });
  });
});