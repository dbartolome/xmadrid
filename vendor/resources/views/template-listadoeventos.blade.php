{{--
  Template Name: Template Listado Eventos
--}}

@extends('layouts.app')
@section('content')
<?php
$today = date('Y-m-d');

$args = [
  'post_type' => 'evento',
  'posts_per_page' => -1,
  'meta_query'  => array(
    //Relación entre los dos custom fields
    array(
      'key'     => 'fecha_calendario',
      'value'   => $today,
      'compare' => '<',
      'type'    => 'DATE'
    ),
    'orderby' => array(
        'fecha_calendario' => 'ASC',
      ),
  ),
  
];
$loop = new WP_Query( $args );


$imagenNoEventos = get_field('imagenNoEventos');

?>
 
      
<div class="titulo-historico">
  Lo que te has perdido
</div>
<div class="filtro-anos">
  <div class="fecha-ano" data-time="2024">2024</div> 
  <div class="fecha-ano" data-time="2023">2023 </div>
  <div class="fecha-ano" data-time="2022">2022</div>
  <div class="fecha-ano" data-time="2021">2021</div>
  <div class="fecha-ano" data-time="2020">2020</div>
</div>
    <section class="panel-historico" >
        @while($loop->have_posts()) @php($loop->the_post())


          @include('partials.content-listadoevento')


        @endwhile
      
        
      
    </section>
    <div class="final-seccion-taste">
      <img src="/wp-content/themes/xmadtema/resources/images/home/x-madrid.webp" width="100%" class="final-horizontal">
    </div>

@endsection
