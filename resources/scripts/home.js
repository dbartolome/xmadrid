
/* global document, console, addEventListener, window */
import $ from 'jquery';
import { gsap } from 'gsap' ;
import { ScrollTrigger } from 'gsap/ScrollTrigger.js';
import { DrawSVGPlugin } from 'gsap/DrawSVGPlugin.js';

/*
import { CSSPlugin } from 'gsap/CSSPlugin.js';
import { TextPlugin } from 'gsap/TextPlugin.js';
import { ScrollToPlugin } from 'gsap/ScrollToPlugin.js';
import Glide from '@glidejs/glide'
*/



export function homeFunction(colorCamino) {



  let divsCount = document.getElementsByClassName('slidePrincipal');

 function modificarSlider() {
  for(let i = 0; i<divsCount.length; i++) {
    let imgnormal = divsCount[i].dataset.imgnormal;
    let imgresponsive = divsCount[i].dataset.imgresponsive;
    if ( window.innerWidth >= 768) {
      divsCount[i].src = imgnormal;
    } else {
      divsCount[i].src = imgresponsive;
    }
  }
 }
 modificarSlider();


 $( window ).on( "resize", modificarSlider);
 

  gsap.registerPlugin(ScrollTrigger, DrawSVGPlugin);


let sections = gsap.utils.toArray(".panel");




let mm = gsap.matchMedia();

mm.add("(min-width: 800px)", () => {
  let scrollTween = gsap.to('.contenedor', {
    xPercent: -67 * ( sections.length -1 ),
    ease: "none",
    scrollTrigger: {
      trigger: ".contenedor",
      pin: true,
      scrub: 0.1,
      //snap: 1 / (sections.length - 1),
      end: () => "+=" + document.querySelector(".contenedor").offsetWidth
    }
  });

  let shapes = "#layerShopping path",  
  aniSVG  = gsap.timeline({repeat: 0, yoyo:false, reverse: true});
  aniSVG.fromTo(shapes, {drawSVG:"0% 0%", fill: "transparent"}, {duration: 0.1, drawSVG:"95% 100%", fill: colorCamino, stagger: 0.1});

  let shapes3 = "#layerPrimero path",
  aniSVG3  = gsap.timeline({repeat: 0, yoyo:false, reverse: true});
  aniSVG3.fromTo( shapes3, { drawSVG:"0% 0%", fill: "transparent", },{ duration: 0.05, drawSVG:"95% 100%", fill: colorCamino, stagger: 0.1,});
 

  ScrollTrigger.create({
      animation: aniSVG3,
      trigger: ".panel-uno",
      start: "20% 10%",
      end: "90% 50%",
      endTrigger: ".panel-uno",
      scrub: true,
      containerAnimation: scrollTween,
      
  });

  ScrollTrigger.create({
        animation: aniSVG,
        trigger: ".panel-dos",
        start: "40% 40%",
        end: "85% 30%",
        endTrigger: ".panel-dos",
        scrub: true,
        containerAnimation: scrollTween,
      
  });


  let shapesEventos = "#layerEventos path",  
  ani4SVG  = gsap.timeline({repeat: 0, yoyo:false, reverse: true});
  ani4SVG.fromTo(shapesEventos, {drawSVG:"0% 0%", fill: "transparent"}, {duration: 0.1, drawSVG:"95% 100%", fill: colorCamino, stagger: 0.1});

  ScrollTrigger.create({
    animation: ani4SVG,
    trigger: ".panel-cuatro",
    start: "40% 40%",
    end: "85% 30%",
    endTrigger: ".panel-cuatro",
    scrub: true,
    containerAnimation: scrollTween,
    
  });

  let shapesFinal = "#layerFinal path",  
  ani5SVG  = gsap.timeline({repeat: 0, yoyo:false, reverse: true});
  ani5SVG.fromTo(shapesFinal , {drawSVG:"0% 0%", fill: "transparent"}, {duration: 0.1, drawSVG:"95% 100%", fill: colorCamino, stagger: 0.1});

  ScrollTrigger.create({
    animation: ani5SVG,
    trigger: ".panel-seis",
    start: "5% 40%",
    end: "85% 30%",
    endTrigger: ".panel-seis",
    scrub: true,
    containerAnimation: scrollTween,
    
  });

});

let marquee = document.querySelectorAll('#banda-uno');

// added event listener because it doesn't get the right width
addEventListener("load", function () {
 

  let elemntoAncho = this.document.querySelector('.grid-destacado-uno');
  marquee.forEach(el => {
  // set a default rate, the higher the value, the faster it is
  //let rate = 200;
  // get the width of the element
  let distance = elemntoAncho .clientWidth;
  console.log(distance );
  // get the margin-right of the element
  let style = window.getComputedStyle(el);
  let marginRight = parseInt(style.marginRight) || 0;
  // get the total width of the element
  let totalDistance = distance + marginRight;
  // get the duration of the animation 
  // for a better explanation, see the quoted codepen in the first comment
  //let time = totalDistance / rate;
  // get the parent of the element
  //let container = el.parentElement;

  gsap.to('#banda-uno', {
   repeat: -1,
   x: '-'+totalDistance,
   ease: "none",
   duration: 10,
  });
 });
});

/*
let nuevVariable = $('.composicion-imagenes').data('video');
let segundaVariable = $('.composicion-imagenes').data('movil');
var ventana_ancho = $(window).width();

if(ventana_ancho <= 768) {
  console.log('es mas pequeño');
  console.log($('source').val());
  $('video#myVideo source').attr('src', nuevVariable);
} else {
  console.log('es mas grande');
  $('video#myVideo source').attr('src',segundaVariable);
}


$(document).ready(function() {
  var videoID = 'myVideo';
  var sourceID = 'mp4video';
  var newmp4 = 'media/video2.mp4';
  
 
  $('#videolink1').on(click,function(event) {
    $('#'+videoID).get(0).pause();
    $('#'+sourceID).attr('src', newmp4);
    $('#'+videoID).get(0).load();
    $('#'+videoID).get(0).play();
  });
});
*/
}

