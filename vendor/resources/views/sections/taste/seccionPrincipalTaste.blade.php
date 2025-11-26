<div class="seccion-principal">
  <div class="item1-principal">
    <img src="@field('imagenUnoPrincipal','url')" alt="@field('imagenUnoPrincipal','alt')">
  </div>
  <div class="item2-principal">
    <div class="div-logo-pizza-uno" style="position: relative">
      <img src="@field('imagenDosPrincipal','url')" @field('imagenDosPrincipal','alt') class="logoPizzaUno">
     <!-- <img src="/wp-content/themes/xmadtema/resources/images/taste/principal/neon_pizza.webp" class="producto-pizza-uno" style="position: absolute; z-index: 99; left: 0"> -->
    </div>
  </div>
  <div class="item3-principal">
    <img src="@field('imagenCuatroPrincipal','url')" @field('imagenCuatroPrincipal','alt')>
  </div> 
  <div class="item4-principal">
    <img src="@field('imagenTresPrincipal','url')" alt="@field('imagenTresPrincipal','alt')">
  </div>
  <div class="item5-principal">
    <div class="text-intro">
    <img src="/wp-content/themes/xmadtema/resources/images/taste/principal/emoji.webp" class="div-emoji">
    @field('tituloSecPrincipal')
    <img src="/wp-content/themes/xmadtema/resources/images/taste/principal/huevo_frito.webp" class="div-huevo-frito">
    </div>
 </div>
 <div class="menusEspeciales">
  <div class="selec-tipo-menu" data-clase="celiaco" data-titulo="Opción sin gluten" id="celiaco">
    <img src="@option('iconoCeliaco','url')" class="img-menus-especiales" data-toggle="tooltip" data-placement="bottom" title="Opción sin gluten" alt="@option('iconoCeliaco','alt')"> 
    <div class="text-menu-especial">Opción sin gluten</div>
  </div>
  <div class="selec-tipo-menu" data-clase="vegano" data-titulo="Opción vegana" id="vegano">
    <img src="@option('iconoVegano','url')" class="img-menus-especiales" data-toggle="tooltip" data-placement="bottom" title="Opción vegana" alt="@option('iconoVegano','alt')"> 
    <div class="text-menu-especial">Opción vegana</div>
  </div>
  <div class="selec-tipo-menu" data-clase="vegatariano" data-titulo="Opción vegetariana" id="vegatariano">
    <img src="@option('iconoVegetariano','url')" class="img-menus-especiales" data-toggle="tooltip" data-placement="bottom" title="Opción vegetariana" alt="@option('iconoVegetariano','alt')"> 
    <div class="text-menu-especial">Opción vegetariana</div>
  </div>
 </div>
<a class="boton-info botones-promociones" style="background-image: url(/wp-content/themes/xmadtema/resources/images/info/fondo_btones.webp);" href="/promociones-x-madrid/?tipocategoria=food-and-drink">Promociones</a>
  <div class="camino-taste">
 @field('svgPrincipal')

  </div>
</div>
