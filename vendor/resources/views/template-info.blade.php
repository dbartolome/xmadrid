{{--
  Template Name: Template Info
--}}

@extends('layouts.app')

@section('content')


  <div class="contenedor">
    <section class="panel">
      <div class="seccion-intro">
        <div class="flechas-inicio">
          <img src="@field('flechasInfo','url')" class="flechas-sup" alt="@field('flechasInfo','alt')">
        </div>
        <div class="texto-info">
          @field('titSeccion')
        </div>
        <div class="col-horarios">
          <div class="tit-horarios">
            @field('titSeccionHorarios')
          </div>
          <div class="tit-shop">
            @field('titShop')
          </div>
          <div class="text-shop">
            <div class="dias-apertura">@field('lineaUnoShop')</div>
            <div class="dias-apertura">@field('lineaDosShop')</div>
            <div class="fechas-especiales">@field('lineaTresShop')</div>
          </div>
          <div class="tit-food">
            @field('titTaste')
          </div>
          <div class="text-food">
            <div class="dias-apertura">@field('lineaUnoTaste')</div>
            <div class="dias-apertura">@field('lineaDosTaste')</div>
            <div class="fechas-especiales">@field('lineaTresTaste')</div>
          </div>
          <div class="tit-food">
            @field('titOcioydeporte')
          </div>
          <div class="text-food">
            <div class="dias-apertura">@field('lineaUnoOcioydeporte')</div>
            <div class="dias-apertura">@field('lineaDosOcioydeporte')</div>
          <div class="fechas-especiales">@field('lineaTresOcioydeporte')</div>
          @field('lineaCuatroOcioydeporte')
          </div>
        </div>
        <div class="camino-info-inicio">
          @field('svgInicioInfo')
         

        </div>
      </div>  
    </section>
    <section class="panel">
      <div class="seccio-final">
  
        <div class="text-contacto">@field('titContactoInfo')</div> 
        <div class="contacto-info">
          @hasfields('btnContactar')
            @fields('btnContactar')
            <div class="iconos-contacto"> 
              <img src="@sub('iconoContacto','url')" alt="@sub('iconoContacto','alt')">
              <div class="texto-contacto">
                @sub('textIcoContacto')
              </div>
            </div>
            @endfields
          @endhasfields
        </div>
       {{--  <div class="logo-info"><img src="@field('logoXmadrid','url')" alt="@field('logoXmadrid','alt')" class="flechas-sup"></div> --}}
       <div class="text-comollegar">@field('titComoLlegar')</div> 
       <div class="direccio-text">
          @field('direccionXmadrid')
        </div>
        <div class="iconos-como-llegar">
          @hasfields('btnComoLLegar')
            @fields('btnComoLLegar')
              <div class="iconos-transporte"><img src="@sub('iconoComoLlegar','url')" alt="@sub('iconoComoLlegar','alt')" class="img-menus-especiales" data-toggle="tooltip" data-placement="bottom" title="@sub('textIcoComoLLegar')"></div>
            @endfields
          @endhasfields
        
        </div>
        <div class="capa-btn-mapa"><a href="https://goo.gl/maps/H8BE8JU6BgKDPMZ37" target="_blank" class="botones-info btn-mapa">ver mapa</a></div>
       
        <div class="text-servicios">@field('titServicios')</div>
  
		  
		  <?php 

if ( have_rows('btnServicios') ) { 
    while ( have_rows('btnServicios') ) { 
		the_row();
        
   
        $texto_boton = get_sub_field('txtBoton');
        $clase_boton = get_sub_field('txtClase');
        $enlace      = get_sub_field('enlaceServicios');
		    $urlexterna = get_sub_field('urlexterna');
        if ( $enlace ) { 
           echo '<a class="botones-info btn-'.$clase_boton.'" href="'.$enlace.'">'.$texto_boton.'</a>';
		}
		if($urlexterna ) {
			echo '<a class="botones-info btn-'.$clase_boton.'" href="'.$urlexterna.'" target="_blank">'.$texto_boton.'</a>';
		}
	}
} 
?>
		

		  
        <div class="camino-llegar">
         @field('svgComollegar')
        </div>
      </div>
    </section>
    <!-- style="background-image: url(/wp-content/themes/xmadtema/resources/images/info/fondo_secundario.webp);" -->
    <section class="panel">
      <div class="seccion-contacto">
        <div class="text-contacto">@field('titContacto')</div>
        <div class="capa-formularios cont-form-negocio">
          <div class="titulo-form-negocios">@field('textFormEmpresas')</div>
          <?php 
          
          $shortcodeFormEmpresas = get_field('shortcodeFormEmpresas');
          $shortcodeFormPersonas = get_field('shortcodeFormPersonas');
           
          
          ?>
          
          <div class="form-negocio"><?php echo do_shortcode( $shortcodeFormEmpresas ); ?></div>
        </div>
        <div class="ico-negocio"> <img src="@field('iconoFormUno','url')" alt="@field('iconoFormUno','alt')"></div>
        <div class="capa-formularios cont-form-contactanos">
          <div class="titulo-form-contar">@field('textFormPersonas')</div>
          <div class="form-contar"><?php echo do_shortcode(  $shortcodeFormPersonas );  ?></div>
        </div>
        <div class="ico-personal"><img src="@field('iconoFormDos','url')" alt="@field('iconoFormDos','alt')"></div>
        <div class="final-seccion-taste">
          <img src="/wp-content/themes/xmadtema/resources/images/shopping/xmarketmb/xmadrid_final.webp" class="final-vertical">
          <img src="/wp-content/themes/xmadtema/resources/images/home/x-madrid.webp" width="100%" class="final-horizontal">
      </div>
      </div>
     
    </section>
  </div>
@endsection


