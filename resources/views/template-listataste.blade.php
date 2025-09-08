{{--
       Template Name: Template Listado Taste
     --}}

@extends('layouts.app')

@section('content')
  <?php
  $args = [
    'post_type' => 'taste',
    'posts_per_page' => -1
  ];
  $loop = new WP_Query( $args )
  ?>


    <section >
      <div class="container-fluid m-5 p-5">
        <div class="row justify-content-center">
          @while($loop->have_posts()) @php $loop->the_post() @endphp
            <?php $logonegro = get_field('logonegro',$loop->post->ID); ?>
            <div class="col-4">
              <?php echo wp_get_attachment_image($logonegro, "full"); ?>
            </div>
          @endwhile
        </div>
      </div>
    </section>
      @endsection
<style>
  .menu-movil {
    display: none;
  }
</style>
