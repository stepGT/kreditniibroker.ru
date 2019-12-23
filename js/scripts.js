$(function () {
  $('.tariff__slick').slick({
    centerMode: true,
    centerPadding: '6%',
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
});