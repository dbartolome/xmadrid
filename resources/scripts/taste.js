/* global document, window */
import { gsap } from 'gsap' ;
import { ScrollTrigger } from 'gsap/ScrollTrigger.js';
import { DrawSVGPlugin } from 'gsap/DrawSVGPlugin.js';
import { ScrollToPlugin } from 'gsap/ScrollToPlugin.js';
import $ from 'jquery';
/*import { CSSPlugin } from 'gsap/CSSPlugin.js';
import { TextPlugin } from 'gsap/TextPlugin.js';
import { ScrollToPlugin } from 'gsap/ScrollToPlugin.js';
import Glide from '@glidejs/glide'
*/

// eslint-disable-next-line no-undef

  gsap.registerPlugin(ScrollTrigger, DrawSVGPlugin, ScrollToPlugin);


let sections = gsap.utils.toArray(".panel");
let mm = gsap.matchMedia();
let scrollTween;

export function taste(colorCamino) {

  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })

  mm.add("(min-width: 800px)", () => {
    scrollTween = gsap.to('.contenedor', {
      xPercent: - 100 * ( sections.length -1 ),
      ease: "none",
      scrollTrigger: {
        trigger: ".contenedor",
        pin: true,
        scrub: 0.1,
        //snap: 1 / (sections.length - 1),
        end: () => "+=" + document.querySelector(".contenedor").offsetWidth
      }
    });

    let panelsContainer = document.querySelectorAll(".panel");
    let miArray = new Array();
    for(let i=0; i<panelsContainer.length; i++) {
      miArray[i] = panelsContainer[i].getBoundingClientRect().left / 5 ;
    
    }
  
    let menuContainer = document.querySelectorAll(".menu-categorias a.btnMnu");
    let segundoArray = new Array();
    for(let j=0; j<menuContainer.length; j++) {
      segundoArray[j] = menuContainer[j].getAttribute("href").substring(1);
    }
  
    gsap.utils.toArray(".menu-categorias a").forEach(function(a) {
      a.addEventListener("click", function(e) {
      e.preventDefault();      
      let otraVariable = segundoArray.indexOf( e.target.getAttribute("href").substring(1));
      let miVarDos  = miArray[otraVariable];
      gsap.to(window, {
        duration: 1,
        scrollTo: {
          y:  miVarDos,
        },
      });
    });
  });
  });

  let shapesTaste = "#layerTaste path",  
  aniSVG  = gsap.timeline({repeat: 0, yoyo:false, reverse: true});
  aniSVG .fromTo(shapesTaste , {drawSVG:"0% 0%", fill: "transparent", stroke: "transparent"}, {duration: 0.1, drawSVG:"95% 100%", fill: colorCamino, stroke: colorCamino, stagger: 0.1});

  let shapesMediterranea = "#layerMediterraneo path",  
  ani1SVG  = gsap.timeline({repeat: 0, yoyo:false, reverse: true});
  ani1SVG .fromTo(shapesMediterranea , {drawSVG:"0% 0%", fill: "transparent", stroke: "transparent"}, {duration: 0.1, drawSVG:"95% 100%", fill: colorCamino, stroke: colorCamino, stagger: 0.1});

  let shapesFusion = "#layerFusion path",  
  ani2SVG  = gsap.timeline({repeat: 0, yoyo:false, reverse: true});
  ani2SVG .fromTo(shapesFusion , {drawSVG:"0% 0%", fill: "transparent", stroke: "transparent"}, {duration: 0.1, drawSVG:"95% 100%", fill: colorCamino, stroke: colorCamino, stagger: 0.1});


  let shapesArround = "#layerArround path",  
  ani3SVG  = gsap.timeline({repeat: 0, yoyo:false, reverse: true});
  ani3SVG .fromTo(shapesArround , {drawSVG:"0% 0%", fill: "transparent", stroke: "transparent"}, {duration: 0.1, drawSVG:"95% 100%", fill: colorCamino, stroke: colorCamino, stagger: 0.1});

  let shapesFinal = "#layerFinalTaste path",  
  ani4SVG  = gsap.timeline({repeat: 0, yoyo:false, reverse: true});
  ani4SVG .fromTo(shapesFinal, {drawSVG:"0% 0%", fill: "transparent", stroke: "transparent"}, {duration: 0.1, drawSVG:"95% 100%", fill: colorCamino, stroke: colorCamino, stagger: 0.1});


  ScrollTrigger.create({
    animation: aniSVG,
    trigger: ".seccion-principal",
    start: "50% 40%",
    end: "85% 30%",
    endTrigger: ".seccion-principal",
    scrub: true,
    containerAnimation: scrollTween,

  });

  ScrollTrigger.create({
    animation: ani1SVG,
    trigger: ".sec-mediterranea",
    start: "50% 40%",
    end: "85% 30%",
    endTrigger: ".sec-mediterranea",
    scrub: true,
    containerAnimation: scrollTween,

  });

  ScrollTrigger.create({
    animation: ani2SVG,
    trigger: ".sec-fusion",
    start: "50% 40%",
    end: "85% 30%",
    endTrigger: ".sec-fusion",
    scrub: true,
    containerAnimation: scrollTween,

  });

  ScrollTrigger.create({
    animation: ani3SVG,
    trigger: ".sec-around",
    start: "50% 40%",
    end: "85% 30%",
    endTrigger: ".sec-around",
    scrub: true,
    containerAnimation: scrollTween,

  });

  ScrollTrigger.create({
    animation: ani4SVG,
    trigger: ".sec-cocktails",
    start: "50% 40%",
    end: "70% 80%",
    endTrigger: ".sec-icecream",
    scrub: true,
    containerAnimation: scrollTween,
  });
  
  $('.selec-tipo-menu').on('click', function(){
    var htmlString = $(this).data('titulo');
    var classText = $(this).data('clase');
    $('.link-logo-especiales').fadeOut('fast');
    $('.restaurantes-especiales').animate({
      right: 0,
      opacity: 1,
    }, 1000, function(){
      $('.tit-especial').html(htmlString);
      $('.'+classText).fadeIn('fast');
    })
  })

  $('.btn-capa-cerrar').on('click', function(){
    var ventana_ancho = $(window).width();
    if(ventana_ancho > 768) {
      $('.restaurantes-especiales').animate({
        right: '-30vw',
        opacity: '0',
      });
      $('.link-logo-especiales').fadeOut('fast');
    } else {
      $('.restaurantes-especiales').animate({
        right: '-90vw',
        opacity: '0',
      });
      $('.link-logo-especiales').fadeOut('fast');
    }
  });

}

