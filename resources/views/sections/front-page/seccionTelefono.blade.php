@hasoption('urlPetFriendly')
  <a href="@option('urlPetFriendly')" class="div-petfriendly">
    <img src="@option('imagenUnoPet','url')" alt="@option('imagenUnoPet','alt')" class="huella-icono">
    <img src="@option('imagenDosPet','url')"  alt="@option('imagenDosPet','alt')"  class="perrito-capa" >
  </a>
@endoption
<div class="capa-telefono">
<img src="@option('capaVideo','url')" alt="@option('capaVideo','alt')" class="telefono" style="position: relative; z-index: 99">
<video autoplay="1" id="myVideo" loop="1"  preload="auto" muted playsinline class="video-tel">
  <source src="@option('videoTelefono','url')" type="video/mp4">
  Your browser does not support the video tag.
</video>
<a href="@option('urlLogoRedSocial')" target="_blank"><img src="@option('logoRedSocial','url')" alt="@option('logoRedSocial','alt')" class="img-tik-tok"></a>
<a href="@option('urlLogoInstagram')" target="_blank"><img src="@option('logoRedInstagram','url')" alt="@option('logoRedInstagram','alt')" class="img-instagram"></a>
</div>
