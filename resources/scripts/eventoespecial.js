/* global console */
import $ from 'jquery';

//import { gsap } from 'gsap' ;
//import { ScrollTrigger } from 'gsap/ScrollTrigger.js';



export function eventoespecial() {

console.log('Inicializando evento especial');

  $('.item-actividad').on('click', function(e) {
    e.preventDefault();
    const $item = $(this);
    const $allItems = $('.item-actividad');
    const $contentArea = $('.texto-actividad', this);
    const isExpanded = $item.hasClass('item-abierto');

    // Cerrar cualquier otro item abierto
    $allItems.not($item).each(function() {
      $(this).removeClass('item-abierto');
      $(this).attr('aria-expanded', 'false');
      $('.texto-actividad', this).stop(true, false).fadeOut(300);
    });

    // Toggle del item actual
    if(isExpanded) {
      $item.removeClass('item-abierto');
      $item.attr('aria-expanded', 'false');
      $contentArea.stop(true, false).fadeOut(300);
    } else {
      $item.addClass('item-abierto');
      $item.attr('aria-expanded', 'true');
      $contentArea.stop(true, false).fadeIn(300);
    }
  });

  // Mejorar accesibilidad con Enter/Space
  $('.item-actividad').on('keypress', function(e) {
    if (e.key === 'Enter' || e.key === ' ') {
      e.preventDefault();
      $(this).trigger('click');
    }
  });
}