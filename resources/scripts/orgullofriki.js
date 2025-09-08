/* global console */
import $ from 'jquery';

//import { gsap } from 'gsap' ;
//import { ScrollTrigger } from 'gsap/ScrollTrigger.js';



export function orgullofriki() {



console.log('entramos en pet friendly');

  $('.item-actividad').on('click',function(){
    if($(this).hasClass('item-abierto')) {
      $(this).removeClass('item-abierto');
      $('.texto-actividad').css({
        'display': 'none',
      })
    } else {
      $('.item-actividad').removeClass('item-abierto');
      $('.texto-actividad').css({
        'display': 'none',
      })
      $(this).addClass('item-abierto');
      $('.texto-actividad',this).css({
        'display':'block',
      });
    }
   
  
   
  });
}