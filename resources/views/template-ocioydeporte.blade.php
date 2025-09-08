{{--
  Template Name: Template Ocio y Deportes
--}}

@extends('layouts.app')

@section('content')

<div class="contenedor">
    <section class="panel" id="principal">
    @include('sections.ocio.seccion-principal-ocio')
    </section>
  {{--   <section class="panel">
    @include('sections.ocio.seccion-surf-ocio')
    </section> --}}
    <section class="panel" id="escalada">
    @include('sections.ocio.seccion-escalada-ocio')
    </section>
    <section class="panel" id="extreme">
    @include('sections.ocio.seccion-extreme-ocio')
    </section>
    <section class="panel" id="fitness">
    @include('sections.ocio.seccion-fitness-ocio')
    </section>
    <section class="panel" id="games">
    @include('sections.ocio.seccion-games-ocio')
    </section>
  </div>
  <div class="menu-categorias">    <a href="/#principal" class="btnMnu">Buceo</a>
    <a href="#principal" class="btnMnu">Surf</a> 
    <a href="#escalada" class="btnMnu">Bolera</a> 
    <a href="#escalada" class="btnMnu">Escalada</a>
    <a href="#escalada" class="btnMnu">Freestyle</a> 
    <a href="#extreme" class="btnMnu">Extreme & Fun</a>
    <a href="#fitness" class="btnMnu">Fitness</a>
    <a href="#games" class="btnMnu">Games & tech</a>
  </div>
@endsection


