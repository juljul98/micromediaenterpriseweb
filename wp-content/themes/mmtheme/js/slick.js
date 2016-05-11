// Banner Slider Slick
$('.slider').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: '.controllers .prev a',
      nextArrow: '.controllers .next a',
      autoplay: true,
      autoplaySpeed: 5000,
});
// Works Slider
$('.horizSlider').slick({
        infinite: true,
          slidesToShow: 4,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 10000,
         responsive: [
    {
      breakpoint: 1204,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
          infinite: true,
      }
    },
    {
      breakpoint: 580,
      settings: "unslick"
    }
  ]
});