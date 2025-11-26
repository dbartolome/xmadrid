<div class="sec-beauty">
  <div class="item1-beauty">
   <div class="tit-seccion-beauty"> 
   @field('tituloSecBeauty')

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
    'terms' => 'beauty',
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
  <div class="img-beauty"><img src="@field('imagenBeauty','url')" alt="@field('imagenBeauty','alt')"></div>
  <div class="camino-beauty">
    @field('svgBeauty')
  

  </div>
</div>