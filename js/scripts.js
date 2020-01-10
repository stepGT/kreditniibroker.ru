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
});