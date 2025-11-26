<div class="sec-hobbies">
 
  <?php 

  $args = array(
    'post_type' => 'shop',
    'posts_per_page' => -1,
    'orderby'        => 'rand',
    'tax_query' => array(
    array(
      'taxonomy' => 'shopcategory',
      'field' => 'slug',
      'terms' => 'hobbies',
      ),
    ),
  );
  $query = new WP_Query( $args );
  
  ?>
<div class="item1-hobbies">
   <div class="tit-seccion-hobbies"> 
  @field('tituloSecFriki')  
   </div>
  </div>
  <div class="secion-rayos" style="background-image: url(/wp-content/themes/xmadtema/resources/images/shopping/hobbies/rayos_seccion.webp);">
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
  </div>
<div class="img-friki"><img src="@field('imagenFriki','url')" alt="@field('imagenFriki','alt')"></div>
<div class="camino-hobbies">
@field('svgFriki')
</div>
</div>