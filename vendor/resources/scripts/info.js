/* global document */
import { gsap } from 'gsap' ;
import { ScrollTrigger } from 'gsap/ScrollTrigger.js';
import { DrawSVGPlugin } from 'gsap/DrawSVGPlugin.js';
import $ from 'jquery';
/*
import { CSSPlugin } from 'gsap/CSSPlugin.js';
import { TextPlugin } from 'gsap/TextPlugin.js';
import { ScrollToPlugin } from 'gsap/ScrollToPlugin.js';
import Glide from '@glidejs/glide'
*/

// eslint-disable-next-line no-undef

gsap.registerPlugin(ScrollTrigger,  DrawSVGPlugin);

export function infPage(colorCamino) {
  let sections = gsap.utils.toArray(".panel");

  let mm = gsap.matchMedia();
  
  let shapesInfoInicio = "#layerInfoInicio path",  
  aniSVG  = gsap.timeline({repeat: 0, yoyo:false, reverse: true});
  aniSVG .fromTo(shapesInfoInicio,{drawSVG:"0% 0%", fill: "transparent", stroke: "transparent"}, {duration: 0.1, drawSVG:"95% 100%", fill: colorCamino, stroke: colorCamino, stagger: 0.1});
  let shapesLlegar = "#layerLlegar path",  
  ani2SVG  = gsap.timeline({repeat: 0, yoyo:false, reverse: true});
  ani2SVG .fromTo(shapesLlegar,{drawSVG:"0% 0%", fill: "transparent", stroke: "transparent"}, {duration: 0.1, drawSVG:"95% 100%", fill: colorCamino, stroke: colorCamino, stagger: 0.1});

  let scrollTween;
 
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })

  mm.add("(min-width: 800px)", () => {
    scrollTween = gsap.to('.contenedor', {
      xPercent: - 22 * ( sections.length -1 ),
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

  ScrollTrigger.create({
    animation: aniSVG,
    trigger: ".seccion-intro",
    start: "15% 5%",
    end: "95% 35%",
    endTrigger: ".seccion-intro",
    scrub: true,
    containerAnimation: scrollTween,

  });

  ScrollTrigger.create({
    animation: ani2SVG,
    trigger: ".seccio-final",
    start: "15% 50%",
    end: "95% 70%",
    endTrigger: ".seccio-final",
    scrub: true,
    containerAnimation: scrollTween,
  });
}





