@hasoption('imgSupIzquierda', 'url')
 <div class="mancha-superior">
    @hasoption('urlImgSupIzquierda')
      <a href="@option('urlImgSupIzquierda')"><img src="@option('imgSupIzquierda', 'url')" alt="@option('imgSupIzquierda', 'alt')" id="imgmancha-superior"></a>
    @else 
    <img src="@option('imgSupIzquierda', 'url')" alt="@option('imgSupIzquierda', 'alt')" id="imgmancha-superior">
    @endoption
  </div>
@endoption

@hasoption('indicadorSiguiente', 'url')
<div class="grid-flechas">
  <img src="@option('indicadorSiguiente','url')">
</div>
@endoption

  <div class="grid-sup-der">

    <a href="@option('urlImagenSuperiorDerecha')"><img src="@option('imagenSuperiorDerecha','url')" alt="@option('imagenSuperiorDerecha','alt')" id="imggrid-sup-der"></a>
  </div>
 
  <div class="grid-destacado-uno">
    <a href="@option('urlimagenDestacadoUno')">
      
      <img src="@option('imagenDestacadoUno','url')" alt="@option('imagenDestacadoUno','alt')" id="imggrid-destacado-uno">
    </a>
  </div>
 
  <div class="grid-destacado-dos">
    <a href="@option('urlimagenDestacadoDos')"> <img src="@option('imagenDestacadoDos','url')" alt="@option('imagenDestacadoDos','alt')" id="imggrid-destacado-dos"></a>
  </div>
  <div class="tit-shop">
    <a href="@option('urTituloShopping')" class="link-secciones">@option('tituloShopping')</a>
    <a href="@option('urTituloShopping')"> <img src="@option('imagenTituloShopping','url')" alt="@option('imagenTituloShopping','alt')" class="img-shopping"></a>
  </div>
 
<div class="capa-svg">

@option('svgShopping')

</div>

<style>
	.grid-destacado-uno img {
		object-position: top;
	}
</style>