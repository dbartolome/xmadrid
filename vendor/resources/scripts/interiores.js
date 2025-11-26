
/* global document, console */
import { gsap } from 'gsap' ;
import { ScrollTrigger } from 'gsap/ScrollTrigger.js';
import { DrawSVGPlugin } from 'gsap/DrawSVGPlugin.js';


export function interiores() {
  gsap.registerPlugin(ScrollTrigger, DrawSVGPlugin);


console.log('entro aqui');
    let scrollTween;
    console.log(scrollTween);
    let sections = gsap.utils.toArray(".panel");
  
    let mm = gsap.matchMedia();

    
    mm.add("(min-width: 800px)", () => {
      scrollTween = gsap.to(".contenedor", {
        xPercent: - 12 * ( sections.length -1 ),
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

  /*  let shapesInteriorInicio = "#layerInterioresInicio path",  
    aniSVG  = gsap.timeline({repeat: 0, yoyo:false, reverse: true});
    aniSVG .fromTo(shapesInteriorInicio , {drawSVG:"0% 0%", fill: "transparent", stroke: "transparent"}, {duration: 0.1, drawSVG:"95% 100%", fill: colorCamino, stroke: colorCamino, stagger: 0.1});

    let shapesInteriorHorarios = "#layerHorarios path",  
    ani1SVG  = gsap.timeline({repeat: 0, yoyo:false, reverse: true});
    ani1SVG .fromTo(shapesInteriorHorarios , {drawSVG:"0% 0%", fill: "transparent", stroke: "transparent"}, {duration: 0.1, drawSVG:"95% 100%", fill: colorCamino, stroke: colorCamino, stagger: 0.1});

    let shapesInteriorFinal = "#layerFinal path",  
    ani2SVG  = gsap.timeline({repeat: 0, yoyo:false, reverse: true});
    ani2SVG .fromTo(shapesInteriorFinal , {drawSVG:"0% 0%", fill: "transparent", stroke: "transparent"}, {duration: 0.1, drawSVG:"95% 100%", fill: colorCamino, stroke: colorCamino, stagger: 0.1});

  

  ScrollTrigger.create({
    animation: aniSVG,
    trigger: ".cont-principal",
    start: "10% 5%",
    end: "85% 30%",
    endTrigger: ".cont-principal",
    scrub: true,
    containerAnimation: scrollTween,
  
  });

  ScrollTrigger.create({
    animation: ani1SVG,
    trigger: ".cont-principal",
    start: "40% 25%",
    end: "85% 30%",
    endTrigger: ".cont-horarios",
    scrub: true,
    containerAnimation: scrollTween,
  });

  ScrollTrigger.create({
    animation: ani2SVG,
    trigger: ".cont-horarios",
    start: "40% 5%",
    end: "85% 90%",
    endTrigger: ".cont-final",
    scrub: true,
    containerAnimation: scrollTween,
  }); */

 
  }

