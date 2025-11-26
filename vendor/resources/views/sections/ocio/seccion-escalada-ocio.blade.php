<div class="seccion-escalada-ocio">


<?php

$contOzone = '';
$ozone = get_field('ozone');
if( $ozone ){
  foreach( $ozone as $singleOzone ) {
    $permalink = get_permalink( $singleOzone->ID );
    $custom_field = get_field( 'logo', $singleOzone->ID );
    $contOzone .= '<div class="logo-ozone"><a href="'.$permalink .'" class="link-ocio"><img src="'.$custom_field["url"].'"></a></div>';
    }  
  }

  echo $contOzone;
?>

<div class="capa-bolos">
  <a href="<?php echo $permalink; ?>" ><img src="@field('imagenOzone', 'url')" alt="@field('imagenOzone', 'alt')"></a>
</div>

<?php

$contClimbat= '';
$climbat = get_field('climbat');
if( $climbat ){
  foreach( $climbat as $singleClimbat ) {
    $permalink = get_permalink( $singleClimbat->ID );
    $custom_field_dos = get_field( 'logo', $singleClimbat->ID );
    $contClimbat = '<div class="logo-climbat"><a href="'.$permalink .'" class="link-ocio"><img src="'.$custom_field_dos["url"].'"></a></div>';
    }  
  }

  echo $contClimbat;
?>
<div class="escalador">
  <a href="<?php echo $permalink; ?>" ><img src="@field('imagenClimbat','url')" alt="@field('imagenClimbat','alt')"></a>
  </div>
  <div class="ongravity">
    <a href="@field('URLOngravity')" class="link-ocio"><img src="@field('imagenOngravity','url')" alt="@field('imagenOngravity','alt')"></a>
  </div>
  <div class="camino-escalada">
  @field('svgSegundo')
  </div>
</div>