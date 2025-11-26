/* global window, document */
import $ from 'jquery';
import { gsap } from 'gsap';
/* 
import { DrawSVGPlugin } from 'gsap/DrawSVGPlugin.js'; */
/*
let contador = 0;

$('.hamburger').on('click',function () {
  $(this).toggleClass('is-active');
  if(contador == 0 ) {
    $('.menu-movil').animate({
      'display': 'block',
      'left': '0',
    }, 500);
    contador = 1;
   
  } else {
    $('.menu-movil').animate({
      'display': 'block',
      'left': '-100vw',
    }, 500);
    contador = 0;
  }
}); 
*/

$('#btn-abrir-newsletter').on('click', function(){
 $('#contenedor-formulario').css('display','flex');
})
$('#ico-cerrar-btn').on('click', ()=>{
  $('#contenedor-formulario').css('display','none');
})
let tl = gsap.timeline();


    gsap.set(".ball", {xPercent: -50, yPercent: -50});

    const ball = document.querySelector(".ball");
    const pos = { x: window.innerWidth / 2, y: window.innerHeight / 2 };
    const mouse = { x: pos.x, y: pos.y };
    const speed = 0.2;

    const xSet = gsap.quickSetter(ball, "x", "px");
    const ySet = gsap.quickSetter(ball, "y", "px");

    window.addEventListener("mousemove", e => {    
      mouse.x = e.x;
      mouse.y = e.y;  
    });

tl.fromTo('.menu-movil',{
  x: "-100vw",
  y: "100vh",
  },{
  x: 0,
  y: 0,
  })
tl.pause();
gsap.ticker.add(() => {
  
  // adjust speed for higher refresh monitors
  const dt = 1.0 - Math.pow(1.0 - speed, gsap.ticker.deltaRatio()); 
  
  pos.x += (mouse.x - pos.x) * dt;
  pos.y += (mouse.y - pos.y) * dt;
  xSet(pos.x);
  ySet(pos.y);
});


let contador = 0;

$('.hamburger').on('click',function () {
  $(this).toggleClass('is-active');
  if(contador == 0 ) {
    tl.play();
    contador = 1;
  } else {
    tl.reverse();
    contador = 0;
  }
}); 

