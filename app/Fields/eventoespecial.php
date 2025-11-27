<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class eventoespecial extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $eventoespecial  = new FieldsBuilder('eventoespecial');

        $eventoespecial
        ->setLocation('post_type', '==', 'page')
        ->and('page_template', '==', 'template-eventoespecial.blade.php');

        $eventoespecial
   

        ->addImage('destacadoEspecial', [
            'label' => 'Imagen para el header de la página de evento',
        ])
        ->addWysiwyg('textoEspecial', [
            'label' => 'Presentación para el evento especial',
        ])
        ->addFile('videoFondo', [
            'label' => 'video para el fondo',
        ])
        ->addFile('archivoPdf', [
            'label' => 'Archivo PDF para descargar',
            'return_format' => 'url',
        ])
        ->addRepeater('eventosEspecial', [
            'label' => 'Eventos de la página especial',
            'button_label' => 'AGREGAR EVENTO',
            'layout' => 'row',
        ])
        ->addTextarea('tituloEvento', [
            'label' => 'Título para el evento',
        ])
        ->addTextarea('descripcionEvento', [
            'label' => 'Texto para el evento',
        ])
        ->addColorPicker('colorFondo', [
            'label' => 'Color de fondo del recuadro del evento',
        ])
        ->addColorPicker('colorTexto', [
            'label' => 'Color de texto del evento',
        ])
        ->endRepeater();

        return $eventoespecial->build();
    }
}
