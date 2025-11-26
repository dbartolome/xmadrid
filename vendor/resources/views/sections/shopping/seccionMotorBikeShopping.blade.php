<div class="sec-motor-bike">
  <div class="item1-motor-bike">
   <div class="tit-seccion-motor-bike"> 
    @field('tituloSecMotor')
   </div>
  </div>
  <?php 

  $args = array(
    'post_type' => 'shop',
    'posts_per_page' => -1,
    'orderby'        => 'rand',
    'tax_query' => array(
    array(
      'taxonomy' => 'shopcategory',
      'field' => 'slug',
      'terms' => 'motorbike',
      ),
    ),
  );
  $query = new WP_Query( $args );
  
  ?>
  <div class="cont-logos">
    <?php 
    if ( $query->have_posts() ) {
      while ( $query->have_posts() ) {
        $query->the_post();
        $shopLink = get_the_permalink();
        $imgShop = get_field('logonegro');
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
  <div class="item7-motor-bike" style="background-image: url(/wp-content/themes/xmadtema/resources/images/shopping/motorbike/puntos_finales.webp);">
  
    <img src="/wp-content/themes/xmadtema/resources/images/shopping/motorbike/emogi.webp" class="imagen-sup">
     
  
  </div>
<div class="camino-moto">
@field('svgMotor')
</div>
</div>