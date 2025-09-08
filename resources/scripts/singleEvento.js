
/* global */
import { gsap } from 'gsap' ;
import { ScrollTrigger } from 'gsap/ScrollTrigger.js';
import { DrawSVGPlugin } from 'gsap/DrawSVGPlugin.js';
import { ScrollToPlugin } from 'gsap/ScrollToPlugin.js';
/*
import { CSSPlugin } from 'gsap/CSSPlugin.js';
import { TextPlugin } from 'gsap/TextPlugin.js';
import { ScrollToPlugin } from 'gsap/ScrollToPlugin.js';
import Glide from '@glidejs/glide'
*/





export function singleEvento() {
  gsap.registerPlugin(ScrollTrigger, DrawSVGPlugin, ScrollToPlugin);

  
    /*let sections = gsap.utils.toArray(".panel");
  
    let mm = gsap.matchMedia();

    mm.add("(min-width: 800px)", () => {
      gsap.to(".contenedor", {
        xPercent: - 100 * ( sections.length ),
        ease: "none",
        scrollTrigger: {
          trigger: ".contenedor",
          pin: true,
          scrub: 0.1,
          //snap: 1 / (sections.length - 1),
          end: () => "+=" + document.querySelector(".contenedor").offsetWidth
        }
      });
    }); */

    
  }

