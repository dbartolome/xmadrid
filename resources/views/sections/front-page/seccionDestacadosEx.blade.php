<div class="panel panel-flex">  
  <div class="panel-seis">

    @hasoptions('destacadosGrid')
      @options('destacadosGrid')
        <div class="@sub('estiloGrid')">
          <a href="@sub('urlGridDestacado')">
          <img src="@sub('imagenGridDestacado','url')" alt="@sub('imagenGridDestacado','alt')">
        </a>
      </div>
      @endoptions
    @endhasoptions
    <div class="texto-experience">@option('claimDestacados')</div>
  </div>
  <div class="camino-final">
    @option('svgDestacados')
  </div>
</div>
