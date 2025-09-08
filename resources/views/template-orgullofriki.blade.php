{{--
  Template Name: Template para orgullo friki
--}}
<?php 

$destacadoOrgullo = get_field('destacadoOrgullo');
$textoOrgulllo = get_field('textoOrgulllo');
$videoFondo = get_field('videoFondo');




  $contEventos = '';
// Check rows exists.
if( have_rows('evcentosOrgullo') ) {


    while( have_rows('evcentosOrgullo') ) {
      the_row();
      $tituloEvento = get_sub_field('tituloEvento');
      $descripcionEvento = get_sub_field('descripcionEvento');
      $colorFondo = get_sub_field('colorFondo');
      $colorTexto = get_sub_field('colorTexto');
        // Do something, but make sure you escape the value if outputting directly...

      $contEventos .= '<div class="item-actividad">
                        <div class="titulo-actividad">'.$tituloEvento.'</div>
                        <div class="texto-actividad"><hr class="separador">'.$descripcionEvento .'</div></div>';
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
    <div class="imagen-header"><img src="<?php echo $destacadoOrgullo["url"]; ?>" width="100%"></div>
  </div>
 
  <div class="presentacion">
    <?php echo $textoOrgulllo; ?>
  </div>

    <div class="cont-actividades">
    <?php echo $contEventos; ?>
    </div>

<div class="texto-explciacion">*Las actividades, eventos, concursos y conciertos podrían sufrir modificaciones de horario, ubicación o contenido.</div>
  @endwhile
@endsection
