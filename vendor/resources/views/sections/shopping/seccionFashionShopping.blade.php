<div class="sec-fashion">
  <div class="item1">
      <img src="@field('imagenFashion','url')" alt="@field('imagenFashion','alt')" class="logo-vertical">
      <img src="@field('imagenFashionHor','url')" alt="@field('imagenFashionHor','alt')" class="logo-horizontal">
  </div>
  <div class="item2"> 
      <img src="@field('iconoFashion','url')" alt="@field('iconoFashion','alt')">
      <div class="tit-seccion-fashion">@field('tituloSecFashion')</div>
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
    'terms' => 'fashion',
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
  <div class="camino-fashion">
  @field('svgFashion')

  </div>
  <a class="boton-info botones-promociones" style="background-image: url(/wp-content/themes/xmadtema/resources/images/info/fondo_btones.webp);" href="/promociones-x-madrid/?tipocategoria=shopping">Promociones</a>
</div>