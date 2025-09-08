{{--
  Template Name: Template Inicio
--}}

@extends('layouts.app')

@section('content')



<div class="contenedor">
  <section class="seccion-principal">
    <div class="panel panel-corto">
      <div class="panel-uno">
        @include('sections.front-page.seccionIntro')
      </div>
    </div>
  </section>
  <section class="seccion-shopping">
    <div class="panel panel-corto">
      <div class="panel-dos">
        @include('sections.front-page.seccionShopping')  
     </div>
    </div>
  </section>
  <section class="seccion-telefono">
    <div class="panel">
     <div class="panel-tres">
       @include('sections.front-page.seccionTelefono')
     </div>
    </div>
    </section>
   <section class="seccion-eventos" >
   <div class="panel">
   
    <div class="panel-cuatro">
      @include('sections.front-page.seccionEvents')
    </div>
</div>
    </section>
    <section>
    <div class="panel panel-corto">
    <div class="panel-cinco">
    @include('sections.front-page.seccionIntroExperience')
    </div>
    </div>
    </section>
    <section class="seccion-destacados">
      <div class="panel panel-corto">
        
        @include('sections.front-page.seccionDestacadosEx')
        
      </div>
    </section> 
    <section class="seccion-info"">
    <div class="panel">
      <div class="panel-siete">
      @include('sections.front-page.seccionInfo')
      </div>
    </div>
    </section> 
   
  </div>
  <img src="/wp-content/themes/xmadtema/resources/images/home/skate.webp" class="skate-inferior">
@endsection


