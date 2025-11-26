<?php
  global $post;
  $output = '';
  $image = get_field('imageGrid');
  $myVar = get_field('fecha_evento');
  $fecha_evento =  get_field('fecha_evento');
  $fechaComparativa = get_field('fecha_calendario');
  $mivartime = date("Y", strtotime($fechaComparativa));

?>
<a class="items-eventos year-<?php echo $mivartime; ?>" href="<?php the_permalink(); ?>" data-time="<?php echo $mivartime; ?>">
 
  
      <div class="contEventogrid">
        <h2  class="descTitulo"><?php echo the_title() ?></h2>
        <div class="fecEvento"> <?php echo $mivartime ?></div>
      </div>
   <img src="<?php echo $image["url"]; ?>" class="imagen-evento">

    </a>

