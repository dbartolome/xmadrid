
/* global console, window */
import { gsap } from 'gsap' ;
import { ScrollTrigger } from 'gsap/ScrollTrigger.js';
import $ from 'jquery';
/*
import { CSSPlugin } from 'gsap/CSSPlugin.js';
import { TextPlugin } from 'gsap/TextPlugin.js';
import { ScrollToPlugin } from 'gsap/ScrollToPlugin.js';
import Glide from '@glidejs/glide'
*/





export function promociones() {
  gsap.registerPlugin(ScrollTrigger);
  let arreglos;
//Convertimos en array las variables en el GET
function getVariableGetByName() {
  var variables = {};
  arreglos = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
     variables[key] = value;
  });
  return variables;
}


//Para recuperar la variable con nombre "ciudad", acudimos a dicha posición del arreglo.
let categoriaTipo = getVariableGetByName()["tipocategoria"];

console.log(arreglos);

$('#'+categoriaTipo).addClass('btn-activo');
  //$('#myModal').modal('handleUpdate')
   console.log('entramos en promociones');
  //let scrollTween;
   //  let sections = gsap.utils.toArray(".panel");
  
   // let mm = gsap.matchMedia();
   /* let elementos = document.getElementsByClassName('cont-promocion');

    let calcMedio = elementos.length / 2;

    

    let contDiv = calcMedio * 400;
    

    let asignoDiv = document.getElementById('id-promociones');
    console.log(asignoDiv);
    asignoDiv.style.width = contDiv+'px'; */

  /*  mm.add("(min-width: 800px)", () => {
      gsap.to(".contenedor", {
        xPercent: -200 * ( sections.length -1 ),
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
/*
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

  $('.item-categoria').on('click', function(){
    let miCategori = $(this).attr('id');
   
    
    $('.cont-promocion').removeClass('activa');
    if(miCategori == 'ver-todo') {
      $('.cont-promocion').addClass('activa');
    } else {
      $('.'+miCategori ).addClass('activa');
    }
    $('.item-categoria').removeClass('btn-activo');
    $(this).addClass('btn-activo');
  })


  }

