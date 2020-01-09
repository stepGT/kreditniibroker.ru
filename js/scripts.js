$(function () {
  $('.tariff__slick').slick({
    infinite: false,
    centerMode: true,
    centerPadding: '6%',
    responsive: [
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: false,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });
});