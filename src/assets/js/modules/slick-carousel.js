import 'slick-carousel'
import jQuery from 'jquery';
import $ from 'jquery';
window.$ = jQuery;

export default class Carousel {

  sliderHandler (className) {

    const config = this.config(className)

    $(className).slick(config);
  }

  config(className) {
    let config

    if (className === '.js-slider-approach') {
      config = {
        speed: 500,
        arrows: false,
        slidesToShow: 7 ,
        infinite: true,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 992,
            settings: {

              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 3
            }
          },
          {
            breakpoint: 480,
            settings: {
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 1
            }
          }
        ]
      }
    }

    if (className === '.js-slider-happening') {
      config  = {
        dots: true,
        arrows: true,
        slidesToShow: 1,
        infinite: true,
        slidesToScroll: 1,
        appendDots: $('.js-dots-container'),
        prevArrow: $('.prev-arrow'),
        nextArrow: $('.next-arrow'),
        dotsClass: 'happening__dots',
      }
    }

    return config
  }

  init() {
    if( $('.js-slider-approach').length ) {
      this.sliderHandler('.js-slider-approach')
    }
    if( $('.js-slider-happening').length ) {
      this.sliderHandler('.js-slider-happening')
    }
  }
}