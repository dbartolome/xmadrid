{{--
  Template Name: Tema Cinema
--}}
@extends('layouts.app')



@section('content')
<?php
 

 $peliculas = simplexml_load_file('https://tickets.ocineurbanxmadrid.es/compra/generapdfs/pdf/cartelerapeliculas.xml');


 $longitud_pelis  =  sizeof($peliculas);
$limitePelis = $longitud_pelis / 2;
 $contadorPelis = 0;
 $cont_pelis_sup = '';
 $cont_pelis_inf = '';

 foreach($peliculas as $pelicula)
 {
   if($contadorPelis < $limitePelis) {
 
     $contadorNodos = 0;
     $cont_pelis_sup .= '<div class="fichaPeli" >';
     $cont_pelis_sup .= '<img src="';
     $cont_pelis_sup .= $pelicula->POSTER;
     $cont_pelis_sup .= '">';
     $cont_pelis_sup .= '<div class="contenido"> ' . $pelicula->TITULOORIGINAL;
     $cont_pelis_sup .= '<br />';
     $cont_pelis_sup .= '<div class="masInfoPeli">Duración: '.$pelicula->DURACION .' min.  <a href= "'. $pelicula->URLINFO .'" target="_blank"> ver + info </a></div>';
     $cont_pelis_sup .= '</div>';
 
 
     $contadorNodos = $pelicula->count();
     $mostrarCuenta = $contadorNodos - 7;
     $verSesion = '';
     $cont_pelis_sup .= '<div class="capaHorarios">';
     for($i = 1; $i <=  $mostrarCuenta; $i++ ) {
       $verSesion = 'SESION'.$i;
       $varLink = $pelicula->$verSesion->URLENTRADA;
       $varFecha = $pelicula->$verSesion->FECHA;
       $varHora = $pelicula->$verSesion->HORA;
       $varSala = $pelicula->$verSesion->SALA;
 
       $cont_pelis_sup .= '<a href="'. $varLink .'" target="_blank">'. $varFecha .' - '. $varHora .' - '. $varSala .'</a>';
       $cont_pelis_sup .= '<br />';
     }
     $cont_pelis_sup .= '</div>';
     $cont_pelis_sup .= '<div class="btnComprar">Comprar entrada</div>';
     $cont_pelis_sup .= '</div>';
   } else if ($contadorPelis > $limitePelis) {
     $contadorNodos = 0;
     $cont_pelis_inf .= '<div class="fichaPeli" >';
     $cont_pelis_inf .= '<img src="';
     $cont_pelis_inf .= $pelicula->POSTER;
     $cont_pelis_inf .= '">';
     $cont_pelis_inf .= '<div class="contenido"> ' . $pelicula->TITULOORIGINAL;
     $cont_pelis_inf .= '<br />';
     $cont_pelis_inf .= '<div class="masInfoPeli">Duración: '.$pelicula->DURACION .' min.  <a href= "'. $pelicula->URLINFO .'" target="_blank"> ver + info </a></div>';
     $cont_pelis_inf .= '</div>';
 
 
     $contadorNodos = $pelicula->count();
     $mostrarCuenta = $contadorNodos - 7;
     $verSesion = '';
     $cont_pelis_inf .= '<div class="capaHorarios">';
     for($i = 1; $i <=  $mostrarCuenta; $i++ ) {
       $verSesion = 'SESION'.$i;
       $varLink = $pelicula->$verSesion->URLENTRADA;
       $varFecha = $pelicula->$verSesion->FECHA;
       $varHora = $pelicula->$verSesion->HORA;
       $varSala = $pelicula->$verSesion->SALA;
 
       $cont_pelis_inf .= '<a href="'. $varLink .'" target="_blank">'. $varFecha .' - '. $varHora .' - '. $varSala .'</a>';
       $cont_pelis_inf .= '<br />';
     }
     $cont_pelis_inf .= '</div>';
     $cont_pelis_inf .= '<div class="btnComprar">Comprar entrada</div>';
     $cont_pelis_inf .= '</div>';
   }
   $contadorPelis++;
  
 }
 ?>
  <div class="contenedor">
    <section class="panel">


<div class="listado-superior">
  <?php echo $cont_pelis_sup; ?>
</div>
<div class="listado-inferior">
  <?php echo $cont_pelis_inf; ?>
</div>


    </section>
</div>

@endsection