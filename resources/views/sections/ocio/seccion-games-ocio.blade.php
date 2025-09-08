<?php 

$args = array(
  'post_type' => 'ocioydeporte',
  'posts_per_page' => -1,
  'orderby'        => 'rand',
  'tax_query' => array(
  array(
    'taxonomy' => 'ocioydeportecategory',
    'field' => 'slug',
    'terms' => 'gamestech',
    ),
  ),
);
$query = new WP_Query( $args );

?>
<div class="seccion-games-ocio">
  <div class="tit-games-tech">
    <div class="text-games">@field('tituloGame')</div>
  </div>

  <div class="columna-uno" style="background-image: url(/wp-content/themes/xmadtema/resources/images/ocioydeporte/games/fondo_uno.webp);">
    <img src="@field('imagenUnoGame','url')" alt="@field('imagenUnoGame','alt')">
  </div>
  <div class="cont-logos">
    <?php 
    if ( $query->have_posts() ) {
      while ( $query->have_posts() ) {
        $query->the_post();
        $shopLink = get_the_permalink();
        $imgShop = get_field('logo');
        echo '<a href="'.$shopLink.'" class="link-logo"> 
              <img src="'.$imgShop["url"].'">
            </a>';
      }
    } else {
      esc_html_e( 'Sorry, no posts matched your criteria.' );
    }
    // Restore original Post Data.
    wp_reset_postdata();
  ?>

  </div>

<div class="columna-especial">
    <img src="@field('imagenEspcial','url')">
  </div>
  
  <div class="final-seccion-ocio">
    <img src="/wp-content/themes/xmadtema/resources/images/shopping/xmarketmb/xmadrid_final.webp" class="final-vertical">
    <img src="/wp-content/themes/xmadtema/resources/images/home/x-madrid.webp" width="100%" class="final-horizontal">
</div>
</div>

