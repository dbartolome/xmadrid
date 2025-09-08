<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class orgullofriki extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $orgullofriki  = new FieldsBuilder('orgullofriki');

        $orgullofriki
        ->setLocation('post_type', '==', 'page')
        ->and('page_template', '==', 'template-orgullofriki.blade.php');

        $orgullofriki
   

        ->addImage('destacadoOrgullo', [
            'label' => 'Imagen para el header de la pagina de orgullo',
        ])
        ->addWysiwyg('textoOrgulllo', [
            'label' => 'Presentacion para el dia del orgullo',
        ])
        ->addFile('videoFondo', [
            'label' => 'video para el fondo',
        ])
        ->addRepeater('evcentosOrgullo', [
            'label' => 'eventos del dia del orgullo',
            'button_label' => 'AGREGAR EVENTO',
            'layout' => 'row',
        ])
        ->addText('tituloEvento', [
            'label' => 'Titulo para el veneto',
        ])
        ->addWysiwyg('descripcionEvento', [
            'label' => 'Texto para el evento',
        ])
        ->addColorPicker('colorFondo', [
            'label' => 'Color de fondo del recuadro',
        ])
        ->addColorPicker('colorTexto', [
            'label' => 'Color de texto del evento',
        ])
        ->endRepeater();

        return $orgullofriki->build();
    }
}
