
/* global document, console */
import { gsap } from 'gsap' ;
import { ScrollTrigger } from 'gsap/ScrollTrigger.js';
//import $ from 'jquery';


/*
import { CSSPlugin } from 'gsap/CSSPlugin.js';
import { TextPlugin } from 'gsap/TextPlugin.js';
import { ScrollToPlugin } from 'gsap/ScrollToPlugin.js';
import Glide from '@glidejs/glide'
*/


export function funcionEventos() {

  gsap.registerPlugin(ScrollTrigger);


    console.log('entro en eventos');
  
    let mm = gsap.matchMedia();

    mm.add("(min-width: 800px)", () => {
      gsap.to(".contenedor", {
        xPercent: - 62,
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
  }

