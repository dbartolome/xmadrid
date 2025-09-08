{{--
  Template Name: Template para legales
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-10 p-3">
      @include('partials.page-header')
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-lg-10 p-3">
      @include('partials.content-page')
      </div>
    </div>
  </div>  
    
  
  
    @endwhile
@endsection
