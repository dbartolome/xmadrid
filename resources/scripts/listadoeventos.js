
/* global console */
//import { gsap } from 'gsap' ;
//import { ScrollTrigger } from 'gsap/ScrollTrigger.js';
import $ from 'jquery';


/*
import { CSSPlugin } from 'gsap/CSSPlugin.js';
import { TextPlugin } from 'gsap/TextPlugin.js';
import { ScrollToPlugin } from 'gsap/ScrollToPlugin.js';
import Glide from '@glidejs/glide'
*/


export function funcionListadoEventos() {

    console.log('entro en listado eventos');
  
    $('.fecha-ano').on('click', function() {
      $('.items-eventos').css({'display':'none'});
      $('.year-' + $(this).data('time')).fadeIn();
      $('.fecha-ano').removeClass('activo')
      $(this).addClass('activo');
      console.log( $(this).data('time'));
    })
  }

