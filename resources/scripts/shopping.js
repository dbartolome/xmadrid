
/* global document, window */
//import $ from 'jquery';
import { gsap } from 'gsap' ;
import { ScrollTrigger } from 'gsap/ScrollTrigger.js';
import { ScrollToPlugin } from 'gsap/ScrollToPlugin.js';
import { DrawSVGPlugin } from 'gsap/DrawSVGPlugin.js';


gsap.registerPlugin(ScrollTrigger, ScrollToPlugin, DrawSVGPlugin);
let mm = gsap.matchMedia();




export function shopping(colorCamino) {

/*
  let shapesInicio = "#layerInicioShopping path",  
  aniSVG  = gsap.timeline({repeat: 0, yoyo:false, reverse: true});
  aniSVG .fromTo(shapesInicio , {drawSVG:"0% 0%", fill: "transparent", stroke: "transparent"}, {duration: 0.1, drawSVG:"95% 100%", fill: colorCamino, stroke: colorCamino, stagger: 0.1});
*/
  let shapesFashion = "#layerFashion path",  
  ani2SVG  = gsap.timeline({repeat: 0, yoyo:false, reverse: true});
  ani2SVG .fromTo(shapesFashion , {drawSVG:"0% 0%", fill: "transparent", stroke: "transparent"}, {duration: 0.1, drawSVG:"95% 100%", fill: colorCamino, stroke: colorCamino, stagger: 0.1});
  
  let shapesMotor = "#layerMotor path",  
  ani3SVG  = gsap.timeline({repeat: 0, yoyo:false, reverse: true});
  ani3SVG .fromTo(shapesMotor,{drawSVG:"0% 0%", fill: "transparent", stroke: "transparent"}, {duration: 0.1, drawSVG:"95% 100%", fill: colorCamino, stroke: colorCamino, stagger: 0.1});
  
  let shapesBeauty = "#layerBeauty path",  
  ani4SVG  = gsap.timeline({repeat: 0, yoyo:false, reverse: true});
  ani4SVG .fromTo(shapesBeauty,{drawSVG:"0% 0%", fill: "transparent", stroke: "transparent"}, {duration: 0.1, drawSVG:"95% 100%", fill: colorCamino, stroke: colorCamino, stagger: 0.1});

  let shapesHobbies = "#layerHobbies path",  
  ani5SVG  = gsap.timeline({repeat: 0, yoyo:false, reverse: true});
  ani5SVG .fromTo(shapesHobbies,{drawSVG:"0% 0%", fill: "transparent", stroke: "transparent"}, {duration: 0.1, drawSVG:"95% 100%", fill: colorCamino, stroke: colorCamino, stagger: 0.1});

  let shapesAccesories = "#layerAccesories path",  
  ani6SVG  = gsap.timeline({repeat: 0, yoyo:false, reverse: true});
  ani6SVG.fromTo(shapesAccesories,{drawSVG:"0% 0%", fill: "transparent", stroke: "transparent"}, {duration: 0.1, drawSVG:"95% 100%", fill: colorCamino, stroke: colorCamino, stagger: 0.1});

  let scrollTween;
  let sections = gsap.utils.toArray(".panel");

    mm.add("(min-width: 800px)", () => {
     scrollTween = gsap.to('.contenedor', {
        xPercent: -72.5 * (sections.length - 1),
        //xPercent: -460,
        //x: () => window.innerWidth,
        ease: "none",
        scrollTrigger: {
          trigger: ".contenedor",
          pin: true,
          pinSpacing: true,
          scrub: 0.1,
          //snap: 1 / (sections.length - 1),
          end: () => "+=" + document.querySelector(".contenedor").offsetWidth,
        }
      });

      let panelsContainer = document.querySelectorAll(".panel");
      let miArray = new Array();
      for(let i=0; i<panelsContainer.length; i++) {
        miArray[i] = panelsContainer[i].getBoundingClientRect().left / 4.3 ;
        
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

   

   /* ScrollTrigger.create({
      animation: aniSVG,
      trigger: ".seccion-principal-shopping",
      start: "50% 40%",
      end: "85% 30%",
      endTrigger: ".seccion-principal-shopping",
      scrub: true,
      containerAnimation: scrollTween,

    });*/
    ScrollTrigger.create({
      animation: ani2SVG,
      trigger: ".sec-fashion",
      start: "50% 40%",
      end: "85% 30%",
      endTrigger: ".sec-fashion",
      scrub: true,
      containerAnimation: scrollTween,
    });
    ScrollTrigger.create({
      animation: ani3SVG,
      trigger: ".sec-motor-bike",
      start: "50% 40%",
      end: "85% 30%",
      endTrigger: ".sec-motor-bike",
      scrub: true,
      containerAnimation: scrollTween,
    });
    ScrollTrigger.create({
      animation: ani4SVG,
      trigger: ".sec-beauty",
      start: "50% 40%",
      end: "85% 30%",
      endTrigger: ".sec-beauty",
      scrub: true,
      containerAnimation: scrollTween,
    });
    ScrollTrigger.create({
      animation: ani5SVG,
      trigger: ".sec-hobbies",
      start: "50% 40%",
      end: "85% 30%",
      endTrigger: ".sec-hobbies",
      scrub: true,
      containerAnimation: scrollTween,
    });

    ScrollTrigger.create({
      animation: ani6SVG,
      trigger: ".sec-accesories",
      start: "50% 40%",
      end: "85% 30%",
      endTrigger: ".sec-accesories",
      scrub: true,
      containerAnimation: scrollTween,
    });



}

