{{--
  Template Name: Template Shopping
--}}

@extends('layouts.app')

@section('content')

  
  <div class="contenedor">
   {{--  <section class="panel" id="principal" style="background-image: url(@field('imagenFondoPrincipal','url'));">
      @include('sections.shopping.seccionPrincipalShopping')
    </section> --}}
    <section class="panel" id="fashion">
      @include('sections.shopping.seccionFashionShopping')
    </section>
   
     <section class="panel" id="motor" >
      @include('sections.shopping.seccionMotorBikeShopping')
    </section>
    <section class="panel" id="beauty">
      @include('sections.shopping.seccionBeautyShopping')
    </section>
  {{-- <section class="panel" style="background-image: url(/wp-content/themes/xmadtema/resources/images/shopping/decotech/fondo_decotech.webp);">
      @include('sections.shopping.seccionDecotechShopping')
    </section>  --}}
    <section class="panel" id="hobbies" >
      @include('sections.shopping.seccionHobbiesShopping')
    </section>

    <section class="panel" id="accesories" >
      @include('sections.shopping.seccionAccesoriesShopping')
    </section>
    <section class="panel" id="supermercado" >
      @include('sections.shopping.seccionSupermarketShopping')
    </section>
      <section class="panel" id="xmarket" >
      @include('sections.shopping.seccionXmarketShopping')
    </section>
  
  </div>
  <div class="menu-categorias">
    <!-- <a href="/#principal" class="btnMnu">Inicio</a> -->
    <a href="#fashion" class="btnMnu">Fashion</a>
    <a href="#motor" class="btnMnu">Motor & Bike</a>
    <a href="#beauty" class="btnMnu">Beauty</a>
    <a href="#hobbies" class="btnMnu">Friki</a>
    <a href="#accesories" class="btnMnu">Gifts & hobbies</a>
    <a href="#supermercado" class="btnMnu">Supermercado</a>
    <a href="#xmarket" class="btnMnu">The X Market</a>
  </div>
@endsection

