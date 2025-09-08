<div class="capa-eventos">
<div class="text-events"><a href="/agenda/" class="link-secciones"><div class="animacion-hover"><img src="/wp-content/themes/xmadtema/resources/images/home/fuegos-artificiales.gif"><img src="/wp-content/themes/xmadtema/resources/images/home/fuegos_artificiales_dos.gif"></div>@option('titSeccionEventos')</a></div>
<?php
/*$i = 0;
$contEventos = '';
$imgNoEvento = get_field('imgNoEvento','option');
$eventosAgenda = get_field('eventosAgenda','option');
if( $eventosAgenda ){
  foreach( $eventosAgenda as $eventoAgenda ) {
    $permalink = get_permalink( $eventoAgenda->ID );
    $custom_field = get_field( 'imageGrid', $eventoAgenda->ID );
    $custom_Vertical = get_field( 'imageDestacadoHome', $eventoAgenda->ID );
      if($i === 0) {
        $contEventos .= '<div class="eventoTres"><a href="'.$permalink .'"><img src="'.$custom_Vertical["url"].'"></a></div>';
      } else if($i === 1){
        $contEventos .= '<div class="evento-dos"><a href="'.$permalink .'"><img src="'.$custom_field["url"].'" ></a></div>';
      } else {
        $contEventos .= '<div class="evento-uno"><a href="'.$permalink .'"><img src="'.$custom_field["url"].'"></a></div>';
      }
      $i++;
    }  
  } else {
    $contEventos .= '<div class="sin-evento"><a href="/agenda/"><img src="'.$imgNoEvento["url"].'"></a></div>';
  }

  echo $contEventos; */

  $today = date('Y-m-d');
  $args = [
    'post_type' => 'evento',
    'posts_per_page' => 3,
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
        'key'     => 'mostrarHome',
        'value'   => '1',
        'compare' => 'LIKE'
      ),
),
    'orderby' => array(
        'fecha_calendario' => 'DESC',
      ),
    
  ];
    $loop = new WP_Query( $args ); 
    $i = 0;
    $imgNoEvento = get_field('imgNoEvento','option');
    ?>
    @if ($loop->have_posts() )
      @while ($loop->have_posts()) @php $loop->the_post() @endphp      
        <?php
          $image = get_field('imageGrid');
          $imageDestacadoHome = get_field('imageDestacadoHome');
          $enlace = get_permalink();
        if($i === 0) {
              echo '<div class="eventoTres"><a href="'. $enlace .'"><img src="'.$imageDestacadoHome["url"].'"></a></div>';
              } else if($i === 1){
                echo ' <div class="evento-dos"><a href="'. $enlace .'"><img src="'.$image["url"].'" ></a></div>';
              } else {
                echo  '<div class="evento-uno"><a href="'. $enlace .'"><img src="'.$image["url"].'"></a></div>';
              }
              $i++;
      ?>
      
    


      @endwhile
    @else
       <div class="sin-evento"><a href="/agenda/"><img src="<?php echo $imgNoEvento["url"]; ?>"></a></div>
    @endif





</div>
<div class="camino-eventos">
@option('svgEventos')
</div>