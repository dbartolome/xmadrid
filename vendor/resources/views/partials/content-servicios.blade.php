<?php 
global $post;


$icono = get_field('icono', $post->ID);
$textoTool = get_field('descripcion', $post->ID);
$eltitulo = strtoupper(get_the_title());

?>
<div class="cont-icono">
 
 <img src="<?php echo $icono["url"]; ?>" class="imgIcono" data-toggle="tooltip" data-placement="bottom" title="<?php echo $eltitulo; echo ' '; echo $textoTool;?>" alt="@option('iconoCeliaco','alt')">
  <div class="titulo-servicio">{!! get_the_title() !!}</div>

    
</div>
