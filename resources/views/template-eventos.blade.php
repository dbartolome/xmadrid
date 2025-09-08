{{--
  Template Name: Template Eventos
--}}

@extends('layouts.app')
@section('content')
<?php
$today = date('Y-m-d');
$args = [
    'post_type' => 'evento',
    'posts_per_page' => 4,
    'meta_query'  => array(
      //Relación entre los dos custom fields
      'relation' => 'AND',
      array(
        'key'     => 'fecha_calendario',
        'value'   => $today,
        'compare' => '>=',
        'type'    => 'DATE'
      ),
      array(
        'key'     => 'destacadoSgenda',
        'value'   => '1',
        'compare' => 'LIKE'
      ),
),
    'orderby' => array(
        'fecha_calendario' => 'DESC',
      ),
    
  ];
  
$loop = new WP_Query( $args );

wp_reset_postdata();
$argsHistorico = [
  'post_type' => 'evento',
  'posts_per_page' => 17,
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
$loopHistorico = new WP_Query( $argsHistorico );


$imagenNoEventos = get_field('imagenNoEventos');

$urlHistoricoAgenda = get_field('urlHistoricoAgenda');
?>

<div class="contenedor">
    <section class="panel">
      <div class="cont-principal">
        <div class="col-intro">
          <div class="texto-seccion">
            <h1 class="tit-seccion">AGENDA</h1>
            <img src="/wp-content/themes/xmadtema/resources/images/eventos/lineas_mas.webp">
          </div>
          <div class="imagen-uno">
           <img src="/wp-content/themes/xmadtema/resources/images/eventos/right_now.webp">
          </div>
        </div>
        <div class="col-destacados">




        <?php
          // The Loop.
          if ( $loop->have_posts() ) {
            while ( $loop->have_posts() ) {
              $loop->the_post();
              $image = get_field('imageGrid');
              $enlace = get_permalink();
            
              echo '<div class="destacados imagen-dos"><a href="'.$enlace .'"><img src="'.$image["url"].'"></a></div>';      
            }
          } else {
            echo '<div class="sin-evento center"><a href="/agenda/"><img src="'. $imagenNoEventos["url"].'" width="90%"></a></div>';
          }

        ?>
        </div>
      
      </div>
    </section>
    <section class="panel panel-historico" >
     <div class="cont-general-historico">
      <h3 class="titulo-historico"><img src="/wp-content/themes/xmadtema/resources/images/eventos/lineas_mas.webp">Lo que <br /> te has <br /> perdido</h3>
      <div class="contenedor-historico">
        @while($loopHistorico->have_posts()) @php($loopHistorico->the_post())
          @include('partials.content-evento')
        @endwhile
        <a href="<?php echo $urlHistoricoAgenda; ?>" class="btn-ver-mas">
          <div class="texto-newsletter">ver mas eventos...</div>
        </a>
        
      </div>
    </section>
    <div class="final-seccion-taste">
      <img src="/wp-content/themes/xmadtema/resources/images/shopping/xmarketmb/xmadrid_final.webp" class="final-vertical">
      <img src="/wp-content/themes/xmadtema/resources/images/home/x-madrid.webp" width="100%" class="final-horizontal">
    </div>
  </div>
@endsection

<style>
 
</style>