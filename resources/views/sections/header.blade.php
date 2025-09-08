<header class="banner" >

<a href="{{ home_url('/') }}" class="brand"><img src="@option('logoWeb','url')" class="img-logo"></a>
  
    <button class="hamburger hamburger--emphatic" type="button">
      <span class="titulo-menu">MENÚ</span>
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>

</header>

<div class="menu-movil">
  @if (has_nav_menu('primary_navigation'))
    {!! wp_nav_menu($primaryNavigation) !!}
  @endif
</div>
<div class="ball"></div>
<?php

  if(is_front_page()){
    echo '<div id="namePage" style="position: fixed; z-index: -99999; font-size: 0;">home</div>';
  } else {
    echo '<div id="namePage" style="position: fixed; z-index: -99999; font-size: 0;">'. substr(get_page_template_slug(), 0, -10) .'</div>';
  };
?>