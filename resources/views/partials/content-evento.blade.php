<?php
  global $post;
  $output = '';
  $image = get_field('imageGrid');
  $myVar = get_field('fecha_evento');
  $fecha_evento =  get_field('fecha_evento');
?>
<a class="items-eventos" href="<?php the_permalink(); ?>">
 
  
      <div class="contEventogrid">
        <h2  class="descTitulo"><?php echo the_title() ?></h2>
        <div class="fecEvento"> <?php echo $fecha_evento ?></div>
      </div>
   <img src="<?php echo $image["url"]; ?>" class="imagen-evento">

    </a>

