{{--
  Template Name: Template Restaurantes
--}}

@extends('layouts.app')

@section('content')

  
<div class="contenedor">
    <section class="panel" id="principal">
      @include('sections.taste.seccionPrincipalTaste')
    </section>
    <section class="panel" id="mediterranea" >
    @include('sections.taste.seccionMediterraneaTaste')
    </section>
    <section class="panel" id="asian">
    @include('sections.taste.seccionFusionTaste')
    </section>
    <section class="panel" id="american">
    @include('sections.taste.seccionAroundTaste')
    </section>
    <section class="panel" id="drinks">
    @include('sections.taste.seccionCocktailsTaste')
    </section>
    <section class="panel" id="coffe" >
    @include('sections.taste.seccionIcecreamTaste')
    </section>
  </div>
  <div class="menu-categorias">
    <a href="#principal" class="btnMnu">Inicio</a>
    <a href="#mediterranea" class="btnMnu">Mediterránea</a>
    <a href="#asian" class="btnMnu">Asiática</a>
    <a href="#american" class="btnMnu">American & Tex Mex</a>
    <a href="#drinks" class="btnMnu">Terraceo</a>
    <a href="#coffe" class="btnMnu">Cafés y helados</a>
  </div>
  <?php

$args = array(
  'post_type' => 'taste',
  'posts_per_page' => -1,
  'orderby'        => 'rand',
  'meta_query' => array(
    'relation' => 'OR',
    'comida_vegetariana' => array(
        'key' => 'comidavegetariana',
        'value' => 1,
      ),
      'comida_vegana' => array(
        'key' => 'comidavegeno',
        'value' => 1,
      ),
      'menu_celiaco' => array(
        'key' => 'menuceliacos',
        'value' => 1,
      ),
    ),
   
  
);
$query = new WP_Query( $args );

?>
<div class="restaurantes-especiales">
  <div class="btn-capa-cerrar"><img src="/wp-content/themes/xmadtema/resources/images/btn_cerrar.webp"></div>
  <div class="tit-especial"></div>
<?php
$miContenedor = '';
 if ( $query->have_posts() ) {
     while ( $query->have_posts() ) {
       $query->the_post();
       $textClase = '';
       $shopLink = get_the_permalink();
       $imgShop = get_field('logonegro'); 
       $menuCeliaco = get_field('menuceliacos'); 
       $comidaVegana = get_field('comidavegano'); 
       $comidaVegetariana = get_field('comidavegetariana'); 

      if($menuCeliaco == 1) {
        $textClase .= 'celiaco ';
      }

      if($comidaVegana == 1) {
        $textClase .= 'vegano ';
      }

      if($comidaVegetariana == 1) {
        $textClase .= 'vegatariano ';
      }
       
      $miContenedor .='<div class="link-logo-especiales '.$textClase.'">
        <a href="'.$shopLink.'">
              <img src="'. $imgShop["url"] .'">
        </a>
      </div>';
    }
   } else {
     esc_html_e( 'Sorry, no posts matched your criteria.' );
   }
   // Restore original Post Data.
   wp_reset_postdata();
   echo $miContenedor;
?>
</div>

@endsection






