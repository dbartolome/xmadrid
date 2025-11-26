{{--
  Template Name: Template servicios
--}}

@extends('layouts.app')
@section('content')

<div class="contenedor" >
    <section class="panel">
      <div class="titSeccion" style="background-image: url(/wp-content/themes/xmadtema/resources/images/servicios/fondo-titulo.webp);">
      <h1 >Servicios</h1>
</div>
<div class="cont-servicios">
      <?php
        $taxonomy = 'categoriaservicios';
        $tax_terms = get_terms(array (
            'taxonomy' => $taxonomy,
            'post_per_page' => -1,
            ));
        foreach ($tax_terms as $tax_term) {
       
          $args2 = array(
            'post_type' => 'servicios',
            'posts_per_page' => -1,
          );
          $loop = new WP_Query( $args2 );
        ?>
        <div class="fila-servicios">
        @while ($loop->have_posts()) @php $loop->the_post() @endphp
            <?php
            $idPost =  get_the_ID();
            $terms =  get_the_terms( $idPost, $taxonomy );
            $nameCat = $terms[0]->name;
            $termClea = strip_tags($nameCat);
            if($termClea == $tax_term->name) { ?>
                    @include('partials.content-servicios')
               <?php } ?>
               
            @endwhile
            <div class="tituloCategorias" >
        <?php  echo $tax_term->name; ?></div>
            </div>
        <?php }
        ?>
        </div>
        <div class="imagen-superior">
    <img src="/wp-content/themes/xmadtema/resources/images/servicios/imagen_top.webp">
    </div>
      </div>
     
    </div>
   
            </section>
</div>
@endsection
