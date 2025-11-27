{{--
  Template Name: Template para evento especial
--}}
<?php 

$destacadoEspecial = get_field('destacadoEspecial');
$textoEspecial = get_field('textoEspecial');
$videoFondo = get_field('videoFondo');
$archivoPdf = get_field('archivoPdf');




  $contEventos = '';
// Check rows exists.
if( have_rows('eventosEspecial') ) {


    while( have_rows('eventosEspecial') ) {
      the_row();
      $tituloEvento = get_sub_field('tituloEvento');
      $descripcionEvento = get_sub_field('descripcionEvento');
      $colorFondo = get_sub_field('colorFondo');
      $colorTexto = get_sub_field('colorTexto');
        // Do something, but make sure you escape the value if outputting directly...

      $contEventos .= '<div class="item-actividad" role="button" tabindex="0" aria-expanded="false">
                        <div class="titulo-actividad">'.$tituloEvento.'</div>
                        <div class="texto-actividad"><hr class="separador">'.$descripcionEvento.'</div></div>';
    // End loop.
         }

// No value.
}
    // Do something.

?>
@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
  <div class="capa-video">
    <video autoplay="1" id="myVideo" loop="1"  preload="auto" muted playsinline>
      <source src="<?php echo $videoFondo["url"]; ?>" type="video/mp4">
    </video>
   </div>
  <div class="cont-superior">
    <div class="imagen-header"><img src="<?php echo $destacadoEspecial["url"]; ?>" width="100%"></div>
  </div>
 
  <div class="presentacion">
    <?php echo $textoEspecial; ?>
  </div>

  <?php if($archivoPdf): ?>
  <div class="contenedor-boton-pdf-principal">
    <a href="<?php echo $archivoPdf; ?>" class="boton-descargar-pdf" target="_blank">
      <i class="fa-solid fa-gift"></i>
      Descargar PDF
      <i class="fa-solid fa-snowflake"></i>
    </a>
  </div>
  <?php endif; ?>

    <div class="cont-actividades">
      
      <?php echo $contEventos; ?>
    </div>

<div class="snowflakes" aria-hidden="true"></div>
<div class="texto-explciacion">* LOS HORARIOS Y LAS ACTIVIDADES PODRÍAN SUFRIR MODIFICACIONES Y/O CANCELACIONES.</div>
  @endwhile
@endsection