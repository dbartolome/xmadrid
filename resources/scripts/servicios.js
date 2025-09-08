
/* global  console*/
//import { gsap } from 'gsap' ;
//import { ScrollTrigger } from 'gsap/ScrollTrigger.js';

/*
import { CSSPlugin } from 'gsap/CSSPlugin.js';
import { TextPlugin } from 'gsap/TextPlugin.js';
import { ScrollToPlugin } from 'gsap/ScrollToPlugin.js';
import Glide from '@glidejs/glide'
*/
import $ from 'jquery';




export function servicios() {
  //gsap.registerPlugin(ScrollTrigger);
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
 
  console.log($);

  //let scrollTween;
     /*  let sections = gsap.utils.toArray(".panel");
  
    let mm = gsap.matchMedia();

    mm.add("(min-width: 800px)", () => {
     gsap.to(".contenedor", {
        xPercent: - 84 * ( sections.length -1 ),
        ease: "none",
        scrollTrigger: {
          trigger: ".contenedor",
          pin: true,
          scrub: 0.1,
          //snap: 1 / (sections.length - 1),
          end: () => "+=" + document.querySelector(".contenedor").offsetWidth
        }
      });
    });

 let shapesOcio = "#layerOcio path",  
  aniSVG  = gsap.timeline({repeat: 0, yoyo:false, reverse: true});
  aniSVG .fromTo(shapesOcio , {drawSVG:"0% 0%", fill: "transparent", stroke: "transparent"}, {duration: 0.1, drawSVG:"95% 100%", fill: colorCamino, stroke: colorCamino, stagger: 0.1});

  let shapesEscalada = "#layerEscalada path",  
  ani1SVG  = gsap.timeline({repeat: 0, yoyo:false, reverse: true});
  ani1SVG .fromTo(shapesEscalada , {drawSVG:"0% 0%", fill: "transparent", stroke: "transparent"}, {duration: 0.1, drawSVG:"95% 100%", fill: colorCamino, stroke: colorCamino, stagger: 0.1});

  let shapesExtreme = "#layerExtreme path",  
  ani2SVG  = gsap.timeline({repeat: 0, yoyo:false, reverse: true});
  ani2SVG .fromTo(shapesExtreme , {drawSVG:"0% 0%", fill: "transparent", stroke: "transparent"}, {duration: 0.1, drawSVG:"95% 100%", fill: colorCamino, stroke: colorCamino, stagger: 0.1});

  let shapeFitness = "#layerFitness path",  
  ani3SVG  = gsap.timeline({repeat: 0, yoyo:false, reverse: true});
  ani3SVG .fromTo(shapeFitness , {drawSVG:"0% 0%", fill: "transparent", stroke: "transparent"}, {duration: 0.1, drawSVG:"95% 100%", fill: colorCamino, stroke: colorCamino, stagger: 0.1});


  ScrollTrigger.create({
    animation: aniSVG,
    trigger: ".seccion-principal-ocio",
    start: "50% 40%",
    end: "85% 30%",
    endTrigger: ".seccion-principal-ocio",
    scrub: true,
    containerAnimation: scrollTween,

  });

  ScrollTrigger.create({
    animation: ani1SVG,
    trigger: ".seccion-escalada-ocio",
    start: "50% 40%",
    end: "85% 30%",
    endTrigger: ".seccion-escalada-ocio",
    scrub: true,
    containerAnimation: scrollTween,
  });

  ScrollTrigger.create({
    animation: ani2SVG,
    trigger: ".seccion-extreme-ocio",
    start: "50% 40%",
    end: "85% 30%",
    endTrigger: ".seccion-extreme-ocio",
    scrub: true,
    containerAnimation: scrollTween,
  });

  ScrollTrigger.create({
    animation: ani3SVG,
    trigger: ".seccion-fitness-ocio",
    start: "50% 40%",
    end: "85% 30%",
    endTrigger: ".seccion-fitness-ocio",
    scrub: true,
    containerAnimation: scrollTween,
  }); */
  }

