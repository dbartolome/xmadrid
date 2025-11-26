// Import Bootstrap
/* global console, document */
import 'bootstrap';
import domReady from '@roots/sage/client/dom-ready';


import { homeFunction } from './home.js';
import { shopping } from  './shopping.js';
import {taste} from './taste.js';
import { ocioDeporte } from './ocioydeporte.js';
import './common.js';
import { carteleraCine } from './carteleracine.js';
import { funcionEventos } from './eventos.js';
import { servicios } from './servicios.js';
import { promociones } from './promociones.js';
import { infPage } from './info.js';
import { singleEvento } from './singleEvento.js';
import { interiores } from './interiores.js';
import { petfriendly } from './petfriendly.js';
import { funcionListadoEventos } from './listadoeventos.js';
import { orgullofriki} from './orgullofriki.js';
/**
 * Application entrypoint
 */
domReady(async () => {
  // ...




  const colorCamino = '#d9a032';
  
  if (document.body.classList.contains('page-template-template-eventos')) {
    funcionEventos();
  }

  if (document.body.classList.contains('page-template-template-listadoeventos')) {
    funcionListadoEventos();
  }


  if (document.body.classList.contains('page-template-template-orgullofriki')) {
    orgullofriki();
  }

  if (document.body.classList.contains('page-template-template-ocioydeporte')) {
    ocioDeporte(colorCamino);
  }

  if (document.body.classList.contains('page-template-template-cine')) {
    carteleraCine();
  }

  if (document.body.classList.contains('page-template-template-info')) {
    infPage(colorCamino);
  }

  if (document.body.classList.contains('single-evento')) {
    singleEvento();
  }

  if (document.body.classList.contains('page-template-template-shopping')) {
    shopping(colorCamino);
  }
  
  if (document.body.classList.contains('home')) {
    homeFunction(colorCamino);
  }

  if (document.body.classList.contains('page-template-template-taste')) {
    taste(colorCamino);
  }

  if (document.body.classList.contains('page-template-template-servicios')) {
    servicios();
  }

  if (document.body.classList.contains('single-ocioydeporte') || document.body.classList.contains('single-shop') || document.body.classList.contains('single-taste') ) {
     interiores();
   }
  
  if (document.body.classList.contains('page-template-template-petfriendly')) {
    petfriendly(colorCamino);
  }

  if (document.body.classList.contains('page-template-template-promociones')) {
    promociones();
  }

});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);



