{{--
  Template Name: Template Pet Friendly
--}}

@extends('layouts.app')

@section('content')

  
  <div class="contenedor">
    <section class="panel">
      <div class="seccion-principal">
        <div class="huella-inicio"><img src="@field('imagenHuella','url')" alt="@field('imagenHuella','alt')"></div>
        <div class="perro-modelo"><img src="@field('imagenPrincipal','url')" alt="@field('imagenPrincipal','alt')"></div>
        <div class="flechas-horizontales"><img src="@field('imagenIndicaciones','url')" alt="@field('imagenIndicaciones','alt')"></div>
        <div class="titulo-normas">@field('titPrimeraSeccion')</div>
        <div class="emoji-inicio"><img src="@field('imagenIcono','url')" alt="@field('imagenIcono','alt')"></div>
        <div class="estellas-home"><img src="@field('imagenEstrellas','url')" alt="@field('imagenEstrellas','alt')"></div>
        <div class="grupo-huellas">
          <div class="huella huella-1"><img src="@field('imagenHuellas','url')" alt="@field('imagenHuellas','alt')"></div>
          <div class="huella huella-2"><img src="@field('imagenHuellas','url')" alt="@field('imagenHuellas','alt')"></div>
          <div class="huella huella-3"><img src="@field('imagenHuellas','url')" alt="@field('imagenHuellas','alt')"></div>
          <div class="huella huella-4"><img src="@field('imagenHuellas','url')" alt="@field('imagenHuellas','alt')"></div>
          <div class="huella huella-5"><img src="@field('imagenHuellas','url')" alt="@field('imagenHuellas','alt')"></div>
          <div class="huella huella-6"><img src="@field('imagenHuellas','url')" alt="@field('imagenHuellas','alt')"></div>
          <div class="huella huella-7"><img src="@field('imagenHuellas','url')" alt="@field('imagenHuellas','alt')"></div>
          <div class="huella huella-8"><img src="@field('imagenHuellas','url')" alt="@field('imagenHuellas','alt')"></div>
        </div>
      <div class="camino-inicio-pet">
        @field('caminoSeccionUno') 
      </div>
      </div>
    </section>
    <section class="panel">
      <div class="seccion-segunda">
        <div class="texto-principal">
          @hasfields('parrafosSeccion')
            @fields('parrafosSeccion')
              <p>@sub('parrafo')</p>
            @endfields
          @endhasfields
        </div>
        <div class="perro-pirata">
          <img src="@field('imagenSeccionDos','url')" alt="@field('imagenSeccionDos','alt')">
        </div>
        <div class="camino-segundo-pet">
              @field('caminoSeccionDos') 
        </div>
      </div>
    </section>
    <section class="panel">
      <div class="seccion-tercera">
        <div class="letras-ppp-vertical"><div class="letra-vertical">P</div><div class="letra-vertical">P</div><div class="letra-vertical">P</div></div>
        <div class="col-perros-peligrosos">
          <div class="tit-perros-peligrosos">@field('tituloSeccionTres') </div>
          <div class="listado-perros-peligrosos">
            @hasfields('listadoPerros')
              <ul>
                @fields('listadoPerros')
                  <li>@sub('razaPerros')</li>
                @endfields
              </ul>
            @endhasfields
             
          </div>
        </div>
        <div class="col-requisitos">
          <div class="tit-requisitos">
           @field('tituloRequisitos')
          </div>
          <div class="text-requisitos">
            @hasfields('listadoRequisitos')
              @fields('listadoRequisitos')
                <p>@sub('itemRequisito')</p>
              @endfields
            @endhasfields
          </div>
        </div>
        <div class="perros-dron">
          <img src="@field('imagenFinalSeccionTres','url')" alt="@field('imagenFinalSeccionTres','alt')">
        </div>
        <div class="camino-tercero-pet">
          @field('caminoSeccionTres') 
        </div> 
      </div> 
    </section>
    <section class="panel">
      <div class="seccion-cuarta">
        <div class="tit-establecimientos">@field('titEstablecimientos')</div>
        <div class="listado-establecimientos">
            <div class="columnas col-uno-establecimientos">
              @field('listadoUno')
            </div>
            <div class="columnas col-dos-establecimientos">
              @field('listadoDos')
            </div>
            <div class="columnas col-tres-establecimientos">
              @field('listadoTres')
            </div>
        </div>
        <div class="text-inferior-establecimientos">
          @field('aclaracionEstablecimientos')
        </div>
        <div class="imagen-seccion-final">
          <img src="@field('imagenFinalSeccionCuatro','url')" alt="@field('imagenFinalSeccionCuatro','alt')">
     
         
        </div>
        <div class="final-seccion">
          <img src="/wp-content/themes/xmadtema/resources/images/petfriendly/x-madrid_vertical.webp" class="final-vertical">
          <img src="/wp-content/themes/xmadtema/resources/images//petfriendly/x-madrid.webp" width="100%" class="final-horizontal">
          </div>
          <div class="camino-cuarto-pet">
            @field('caminoSeccionCuatro')
          </div>
      </div>  
  </section>
  

  </div>
@endsection
