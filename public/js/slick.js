$(document).ready(function(){
    $('.slick1,.slick2,.slick3').slick({
  centerMode: true,
  centerPadding: '60px',
  dots: false,
  infinite: true,
  cssEase: 'linear',
  variableWidth: true,
  rtl: true,
  speed: 400,
  slidesToShow: 3,
  slidesToScroll: 2,
  autoplay: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
       
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }

  ]
    });
  });