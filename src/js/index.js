"use strict";
import '../styles/style.scss'
import '@fancyapps/fancybox'
import '@fancyapps/fancybox/dist/jquery.fancybox.min.css'
// import 'slick-carousel/slick/slick-theme.css'
import 'slick-carousel/slick/slick.css'

import  Carousel  from './modules/slick-carousel'
import Accordion from './modules/accordion'

const slider = new Carousel()
slider.init()

const accordion = new Accordion()
accordion.init()



