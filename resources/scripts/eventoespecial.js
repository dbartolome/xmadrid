/* global console, document */
import $ from 'jquery';

//import { gsap } from 'gsap' ;
//import { ScrollTrigger } from 'gsap/ScrollTrigger.js';



export function eventoespecial() {

console.log('Inicializando evento especial');

  // Generar copos de nieve dinámicamente
  generateSnowflakes();

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

// Función para generar copos de nieve dinámicamente
function generateSnowflakes() {
  const snowflakesContainer = document.querySelector('.snowflakes');
  if (!snowflakesContainer) return;

  // Número aleatorio de copos entre 150 y 250
  const numSnowflakes = Math.floor(Math.random() * 101) + 150;

  // Colores navideños en RGBA con opacidad 0.4-0.5
  const colors = [
    'rgba(255, 255, 255, 0.45)',   // Blanco
    'rgba(235, 32, 40, 0.42)',     // Rojo navideño
    'rgba(34, 177, 76, 0.48)',     // Verde navideño
    'rgba(255, 215, 0, 0.43)',     // Oro/Amarillo
    'rgba(255, 255, 255, 0.5)',    // Blanco más visible
    'rgba(235, 32, 40, 0.45)',     // Rojo más visible
    'rgba(34, 177, 76, 0.44)',     // Verde más visible
    'rgba(255, 215, 0, 0.4)',      // Oro más sutil
  ];

  for (let i = 1; i <= numSnowflakes; i++) {
    const snowflake = document.createElement('i');
    snowflake.className = 'fa-solid fa-snowflake snow';
    
    // Posición aleatoria horizontal
    const leftPosition = Math.random() * 100;
    
    // Color aleatorio
    const randomColor = colors[Math.floor(Math.random() * colors.length)];
    
    // Duración aleatoria entre 12s y 25s (más lenta para bajar más)
    const duration = Math.random() * 13 + 12;
    
    // Delay aleatorio
    const delay = Math.random() * -10;
    
    // Tamaño aleatorio
    const sizeRandom = Math.random() * 0.8 + 0.4; // Entre 0.4 y 1.2
    
    snowflake.style.setProperty('--left', `${leftPosition}%`);
    snowflake.style.setProperty('--color', randomColor);
    snowflake.style.setProperty('--duration', `${duration}s`);
    snowflake.style.setProperty('--delay', `${delay}s`);
    snowflake.style.setProperty('--size', sizeRandom);
    snowflake.style.color = randomColor;
    snowflake.style.left = `${leftPosition}%`;
    snowflake.style.fontSize = `calc((0.5em + 1vw) * ${sizeRandom})`;
    snowflake.style.animationDuration = `${duration}s`;
    snowflake.style.animationDelay = `${delay}s`;
    
    snowflakesContainer.appendChild(snowflake);
  }

  console.log(`Generados ${numSnowflakes} copos de nieve`);
}