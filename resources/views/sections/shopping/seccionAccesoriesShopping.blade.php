<?php 

$args = array(
  'post_type' => 'shop',
  'posts_per_page' => -1,
  'orderby'        => 'rand',
  'tax_query' => array(
  array(
    'taxonomy' => 'shopcategory',
    'field' => 'slug',
    'terms' => 'gift-and-hobbies',
    ),
  ),
);
$query = new WP_Query( $args );

?>
<div class="sec-accesories">
  <div class="item1-accesories">
   <div class="tit-seccion-accesories"> 
   @field('tituloSecGifts')
  </div>
</div>
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
  <div class="img-globos"> 
    <img src="/wp-content/themes/xmadtema/resources/images/shopping/accesories/globos_x.webp">
  </div>
  <div class="camino-accesories">
    @field('svgGifts')
  </div>
</div>