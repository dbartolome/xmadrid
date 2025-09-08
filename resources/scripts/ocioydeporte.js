
/* global document, window */
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





export function ocioDeporte(colorCamino) {
  gsap.registerPlugin(ScrollTrigger, DrawSVGPlugin, ScrollToPlugin);

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


    let scrollTween;
    let sections = gsap.utils.toArray(".panel");
  
    let mm = gsap.matchMedia();

    mm.add("(min-width: 800px)", () => {
      scrollTween = gsap.to(".contenedor", {
        xPercent: - 87 * ( sections.length -1 ),
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
        miArray[i] = panelsContainer[i].getBoundingClientRect().left / 3.5 ;
        
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
        
        let miVarDos;
        switch(otraVariable) {
          case 0:
            miVarDos = miArray[0];
            break;
          case 1:
            miVarDos = miArray[0];
            break;
          case 2:
            miVarDos = miArray[1];
            break;
          case 3:
            miVarDos = miArray[1];
            break;
          case 4:
            miVarDos = miArray[1];
            break;
          case 5:
            miVarDos = miArray[2];
            break;
          case 6:
            miVarDos = miArray[3];
            break;
          case 7:
            miVarDos = miArray[4];
            break;
            
        }
    
        gsap.to(window, {
          duration: 1,
          scrollTo: {
            y:  miVarDos,
          },
        });
      });
    });
    });

    

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
  });

  var tl = gsap.timeline({repeat: -1, repeatDelay: 0});
tl.from(".capa-buzo", {top: "-70vh", duration: 8, ease: "slow(0.7, 0.7, false)"})
tl.to(".capa-buzo", {top: "100vh", opacity: 0, duration: 6, delay: 2, ease: "power4.out"}) ;


  }

