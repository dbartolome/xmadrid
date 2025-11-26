/* global document, console */
//import $ from 'jquery';

import { gsap } from 'gsap' ;
import { ScrollTrigger } from 'gsap/ScrollTrigger.js';

/*
import { CSSPlugin } from 'gsap/CSSPlugin.js';
import { TextPlugin } from 'gsap/TextPlugin.js';
import { ScrollToPlugin } from 'gsap/ScrollToPlugin.js';
import Glide from '@glidejs/glide'
*/


export function petfriendly(colorCamino) {



console.log('entramos en pet friendly');
  gsap.registerPlugin(ScrollTrigger);

    let scrollTween;
    let sections = gsap.utils.toArray(".panel");
    console.log(sections);
    let mm = gsap.matchMedia();

    mm.add("(min-width: 800px)", () => {
      scrollTween = gsap.to(".contenedor", {
        xPercent: - 78.5 * ( sections.length -1 ),
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

   
  let aniSVG  = gsap.timeline({repeat: 0, yoyo:false, reverse: true});
  aniSVG.fromTo("#layerInicioPet path", {drawSVG:"0% 0%", fill: "transparent"}, {duration: 0.1, drawSVG:"95% 100%", fill: colorCamino, stagger: 0.1});

  ScrollTrigger.create({
    animation: aniSVG,
    trigger: ".seccion-principal",
    start: "10% 5%",
    end: "85% 60%",
    endTrigger: ".seccion-principal",
    scrub: true,
    containerAnimation: scrollTween,
  });

  let ani2SVG  = gsap.timeline({repeat: 0, yoyo:false, reverse: true});
  ani2SVG.fromTo("#layerPetSegundo path", {drawSVG:"0% 0%", fill: "transparent"}, {duration: 0.1, drawSVG:"95% 100%", fill: colorCamino, stagger: 0.1});

  ScrollTrigger.create({
    animation: ani2SVG,
    trigger: ".seccion-segunda",
    start: "35% 50%",
    end: "85% 80%",
    endTrigger: ".seccion-segunda",
    scrub: true,
    containerAnimation: scrollTween,
  });

  let ani3SVG  = gsap.timeline({repeat: 0, yoyo:false, reverse: true});
  ani3SVG.fromTo("#layerPetTercera path", {drawSVG:"0% 0%", fill: "transparent"}, {duration: 0.1, drawSVG:"95% 100%", fill: colorCamino, stagger: 0.1});

  ScrollTrigger.create({
    animation: ani3SVG,
    trigger: ".seccion-tercera",
    start: "35% 50%",
    end: "85% 80%",
    endTrigger: ".seccion-tercera",
    scrub: true,
    containerAnimation: scrollTween,
  });

  let ani4SVG  = gsap.timeline({repeat: 0, yoyo:false, reverse: true});
  ani4SVG.fromTo("#layerPetCuarta path", {drawSVG:"0% 0%", fill: "transparent"}, {duration: 0.1, drawSVG:"95% 100%", fill: colorCamino, stagger: 0.1});

  ScrollTrigger.create({
    animation: ani4SVG,
    trigger: ".seccion-cuarta",
    start: "15% 50%",
    end: "65% 80%",
    endTrigger: ".seccion-cuarta",
    scrub: true,
    containerAnimation: scrollTween,
  });

  

}

