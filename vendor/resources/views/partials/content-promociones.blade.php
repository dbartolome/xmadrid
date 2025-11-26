
<?php
    global $post;
   

    $bannerimagen = get_field('bannerimagen');

    $termPost = get_the_terms( $post->ID, 'tipopromocion' );


 $varTaxonomi = '';

if ( is_array($termPost) || is_object($termPost) ) {
    foreach ( $termPost as $tax ) {
        $varTaxonomi .= $tax->slug;
    }
}

    


    if($urlTaxonomia == '') {
      $contEncabezado = '<div class="cont-promocion '.$varTaxonomi.' activa">';
    }
    
    if($varTaxonomi == $urlTaxonomia) {
      $contEncabezado = '<div class="cont-promocion '.$varTaxonomi.' activa">';
    }
    
    if($varTaxonomi != $urlTaxonomia && $urlTaxonomia != '') {
      $contEncabezado = '<div class="cont-promocion '.$varTaxonomi.'">';
    }

    $contEncabezado .= '<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal'. $post->ID.'">
  <img src="'.$bannerimagen["url"].'" class="img-promocion"></button></div>';

  echo $contEncabezado;
?>



  

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $post->ID; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5>{!! get_the_title() !!}</h5>
       
    </div>
      <div class="modal-body">
        <div class="container bd-example-row">
          <div class="row">
            <div class="col-md-5"><img src="@field('bannerimagen', 'url')" width="100%"></div>
            <div class="col-md-7"><p>@field('descripcion')</p></div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-principal" data-bs-dismiss="modal" style="width: 100%; background-color: red; color: white; text-transform: uppercase">Cerrar</button>
      </div>
    </div>
  </div>
</div>
