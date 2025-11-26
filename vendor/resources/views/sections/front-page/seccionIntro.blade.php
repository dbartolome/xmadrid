

  <?php 
  // Check rows existexists.
  $contSlider = '';
  $contSlides= '';
  $contIndicadores = '';
  $i = 0;
  if( have_rows('sliderHome','option') ){
      // Loop through rows.
      while( have_rows('sliderHome','option') ) { 
        the_row();
           // Load sub field value.
          $urlSlide = get_sub_field('enlaceSlide');
          $imgSlide = get_sub_field('imageSlide');
          $imageSlideResponsive = get_sub_field('imageSlideResponsive');
          if($imageSlideResponsive == '') {
            $imageSlideResponsive = get_sub_field('imageSlide');
          }
          if($i == 0) {
            $contSlides .= '<div class="carousel-item h-100 active"><a href="'.$urlSlide.'"><img src="'.$imgSlide["url"].'" class="d-block w-100 h-100 slidePrincipal" data-imgnormal="'.$imgSlide["url"].'" data-imgresponsive="'. $imageSlideResponsive["url"].'" alt="'.$imgSlide["alt"].'" style="object-fit: contain;"></a></div>';
            $contIndicadores .= '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="'.$i.'" class="active" aria-current="true" aria-label="Slide '.$i.'"></button>';
            $i++;
          } else {
            $contSlides .= '<div class="carousel-item h-100"><a href="'.$urlSlide.'"><img src="'.$imgSlide["url"].'" class="d-block w-100 h-100 slidePrincipal" data-imgnormal="'.$imgSlide["url"].'" data-imgresponsive="'. $imageSlideResponsive["url"].'" alt="'.$imgSlide["alt"].'" style="object-fit: contain;"></a></div>';
            $contIndicadores .= '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="'.$i.'" aria-current="true" aria-label="Slide '.$i.'"></button>';
            $i++;
          }

  

          // Do something...

      // End loop.
     
        }
      $contSlider .= '<div id="carouselExampleIndicators" class="carousel slide fondo-slider" data-bs-ride="carousel">';
     // $contSlider .= '<div class="carousel-indicators">'.$contIndicadores.'</div>';
      $contSlider .= '<div class="carousel-inner h-100">'.$contSlides.'</div>';
      $contSlider .= '<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>';
      $contSlider .= '</div>';
  // No value.
    } else {

    }
?>
 
  @hasoption('videoSlider')
  <div class="composicion-slider">
    <?php echo $contSlider; ?>
    <img src="@option('fondoVideo','url')" class="fondo-mancha">  
  </div>
    @else 
    <div class="composicion-imagenes" data-video="@option('videoPrincipal','url')" data-movil="@option('videoPrincipal','url')">
    <video autoplay="1" id="myVideo" loop="1"  preload="auto" muted playsinline class="fondo-buceo">
      <source src="@option('videoPrincipal','url')" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <img src="@option('fondoVideo','url')" class="fondo-mancha">  
  </div>
  @endoption
  
  
 


<div class="flecha-superior">
  <img src="@option('indicadorCamino','url')">
</div>

<div class="capa-camino">
  @option('svgEntradas')
</div>