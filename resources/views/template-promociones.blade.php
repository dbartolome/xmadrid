{{--
  Template Name: Template promociones
--}}
<?php

$urlTaxonomia = '';
if (isset($_GET['tipocategoria']) && $_GET['tipocategoria'] !== '') {
    $urlTaxonomia = $_GET['tipocategoria'];
}

  $today = date('Y-m-d');
  $args = array(
      'post_type' => 'promociones',
      'posts_per_page' => -1,
      'meta_query'  => array(
//Relación entre los dos custom fields
        array(
          'key'     => 'fecha_final',
          'value'   => $today,
          'compare' => '>',
        
        ),
    ),
      'orderby' => array(
      'fecha_final' => 'DESC',
    ),
    );
    $loop = new WP_Query( $args );
  
    ?>
@extends('layouts.app')
@section('content')


<div class="seccion-principal" >
  <div class="titSeccion">
    <h1 >PROMOCIONES</h1>
  </div>
</div>
<?php

  $taxonomy = 'tipopromocion';
  $tax_terms = get_terms(
    $taxonomy, array(
      'hide_empty' => true,
      )
  );
  $menuDrop = '';
    foreach ($tax_terms as $tax_term) {
      $menuDrop .= '<div class="item-categoria" id="'. $tax_term->slug .'">' .  $tax_term->name.'</div>';
    }
    $menuDrop .= '<div class="item-categoria" id="ver-todo">Ver Todos</div>';

  echo '<div class="menu-categoria" aria-labelledby="dropdownMenuLink">'.$menuDrop.'</div>'; 
  
?>
    <section class="seccion-promociones"> 
     
   
       
          @while ($loop->have_posts()) @php $loop->the_post() @endphp


        
          
            @include('partials.content-promociones',['taxonima' =>  $urlTaxonomia, 'nomPagina' => 'elenco'])
          @endwhile
      
     
   
    </section>

@endsection
