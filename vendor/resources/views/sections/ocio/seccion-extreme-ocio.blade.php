<?php 


$args = array(
  'post_type' => 'ocioydeporte',
  'posts_per_page' => -1,
  'orderby'        => 'rand',
  'tax_query' => array(
  array(
    'taxonomy' => 'ocioydeportecategory',
    'field' => 'slug',
    'terms' => 'extreme-fun',
    ),
  ),
);
$query = new WP_Query( $args );
?>


<div class="seccion-extreme-ocio">
  <div class="logo-intro">
    <div class="texto-extreme">Extreme</div>
    <img src="/wp-content/themes/xmadtema/resources/images/ocioydeporte/extreme/FUN.webp">
  </div>  
  <div class="capa-globos">
    <img src="/wp-content/themes/xmadtema/resources/images/ocioydeporte/extreme/globos.webp">
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
  
<div class="camino-extreme">
@field('svgExtreme')

</div>
</div>