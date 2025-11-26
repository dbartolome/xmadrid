<?php
$args = array(
  'post_type' => 'taste',
  'posts_per_page' => -1,
  'orderby'        => 'rand',
  'tax_query' => array(
  array(
    'taxonomy' => 'tastecategory',
    'field' => 'slug',
    'terms' => 'asiatica',
    ),
  ),
);
$query = new WP_Query( $args );

?>

<div class="sec-fusion">
  <div class="item1-fusion">
    <div class="tit-seccion-fusion"> 
    
@field('tituloAsiatica')
    </div> 
   </div>
  
  <div class="cont-logos">
     
    <?php 
    if ( $query->have_posts() ) {
      while ( $query->have_posts() ) {
        $query->the_post();
        $shopLink = get_the_permalink();
        $imgShop = get_field('logonegro'); ?>
       <div class="link-logo">
        <a href="<?php echo $shopLink; ?>"> 
              <img src="@field('logonegro', 'url')">
              <div class="menus-especiales">
                @hasfield('menuceliacos')
                  <img src="@option('iconoCeliaco','url')" class="img-menus-especiales" data-toggle="tooltip" data-placement="bottom" title="Opción sin gluten" alt="@option('iconoCeliaco','alt')">
                @endfield
                @hasfield('comidavegano')
                  <img src="@option('iconoVegano','url')" class="img-menus-especiales" data-toggle="tooltip" data-placement="bottom" title="Opción vegana" alt="@option('iconoVegano','alt')">
                @endfield
                @hasfield('comidavegetariana')
                  <img src="@option('iconoVegetariano','url')" class="img-menus-especiales" data-toggle="tooltip" data-placement="bottom" title="Opción vegetariana" alt="@option('iconoVegetariano','alt')">
                @endfield
              </div>
        </a>
      </div>
        
      
     <?php }
    } else {
      esc_html_e( 'Sorry, no posts matched your criteria.' );
    }
    // Restore original Post Data.
    wp_reset_postdata();
  ?>
  </div>
  <div class="imagen-final"><img src="@field('imagenElementoAsiatica','url')" alt="@field('imagenElementoAsiatica','alt')"></div>
  <div class="camino-fusion">

@field('svgAsiatica')

  </div>
</div>



