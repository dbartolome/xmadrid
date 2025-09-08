<div class="seccion-principal-ocio">
 <div class="intro-pagina">
  <img src="@field('imagenDescuentoPrincipal','url')">
  <div class="text-titulo-ocio">@field('tituloSecPrincipal')</div>
</div>
<a class="boton-info botones-promociones" style="background-image: url(/wp-content/themes/xmadtema/resources/images/info/fondo_btones.webp);" href="/promociones-x-madrid/?tipocategoria=ocio-y-deporte">Promociones</a>
<div class="img-oblicuas">
  <img src="/wp-content/themes/xmadtema/resources/images/ocioydeporte/principal/lineas-oblicuas.webp">
</div>
<img src="/wp-content/themes/xmadtema/resources/images/ocioydeporte/principal/lineas.png" class="lineas-inmersion">
<?php
  $contMarepolis = '';
  $marepolis = get_field('marepolis');
  if( $marepolis ){
    foreach( $marepolis as $singleMarepolis ) {
      $permalink = get_permalink( $singleMarepolis->ID );
      $custom_field = get_field( 'logo', $singleMarepolis->ID );
        $contMarepolis .= '<div class="logo-marepolis"><a href="'.$permalink .'" class="link-ocio"><img src="'.$custom_field["url"].'"></a></div><div class="capa-buzo">
  <a href="'. $permalink .'"><img src="/wp-content/themes/xmadtema/resources/images/ocioydeporte/principal/buzo.webp"></a>
</div>';
      }  
    }

    echo $contMarepolis;
  ?>




  <?php

$contHonnasurf = '';
$marepolis = get_field('honnasurf');
if( $marepolis ){
  foreach( $marepolis as $singleMarepolis ) {
    $permalink = get_permalink( $singleMarepolis->ID );
    $custom_field = get_field( 'logo', $singleMarepolis->ID );
        $contHonnasurf .= '<div class="logo-surf"><a href="'.$permalink .'" class="link-ocio"><img src="'.$custom_field["url"].'"></a></div>';
    }  
  }

  echo $contHonnasurf;
?>
  <div class="columna-central-surf">
    <a href="<?php echo $permalink; ?>" class="enlace-surf">
      <img src="/wp-content/themes/xmadtema/resources/images/ocioydeporte/surf/surf_principal_fondo.webp" class="telefono" style="position: relative; z-index: 99">
        <video autoplay="1" id="myVideo" loop="1"  preload="auto" muted playsinline class="video-surf-ocio" style="position: absolute">
        <source src="/wp-content/themes/xmadtema/resources/images/videos/hanna_surf.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
  
    </a>

    

  </div>
  <div class="columna-derecha-surf">
    <a href="<?php echo $permalink; ?>"><img src="/wp-content/themes/xmadtema/resources/images/ocioydeporte/surf/palmeras.webp"></a>
  </div>
  <div class="camino-ocio-principal">
    @field('svgPrincipal')
  </div>
</div>

