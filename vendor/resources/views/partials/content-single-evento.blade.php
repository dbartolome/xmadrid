
  
  <div class="capa-volver"> 
    <nav class="nav-links order-0 order-sm-1" style="text-transform: uppercase; font-weight: bold;padding: 1%">
    <div class="btnAnterior">{{ previous_post_link('%link', '<<') }} </div>
    <div class="btnAnterior"><a href="/agenda"> VOLVER AGENDA </a> </div> 
    <div class="btnAnterior">{{ next_post_link('%link', '>>') }} </div>
  </nav>
  </div>
   <!-- <a class="btn-volver" href="/agenda" style="background-image: url(/wp-content/themes/xmadtema/resources/images/info/fondo_btones.webp);">VOLVER A LA AGENDA</a>-->

<div class="contenedor">
  <section class="panel">
    <div class="cont-principal">
      <img src="@field('imageInterior','url')" class="img-superior">
      <img src="@field('imageInterior','url')" class="img-fondo">
   
     
    </div>
  </section>
  <section class="panel">
    <div class="cont-texto">
      <h1 class="titulo-evento">@php(the_title())</h1>
      <div class="contenido-evento">@php(the_content())</div>
    </div>
  </section>
 </div>

 <style>
  .btnAnterior a{
    color: white;
    background-color:#eb2028;
    padding: 2vw;
    font-size: calc(1em + 0.2vw);
  }

  p {
    margin-bottom: 0;
    padding: 0 !important;
  }
 </style>