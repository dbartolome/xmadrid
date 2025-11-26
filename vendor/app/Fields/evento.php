<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class evento extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $evento = new FieldsBuilder('evento');

        $evento
            ->setLocation('post_type', '==', 'evento');

        $evento
        ->addTab('infoEvento', [
            'label' => 'Información del evento',
            'placement' => 'left',
        ])
            ->addText('fecha_evento', [
                'label' => 'Fecha del evento',
                'instructions' => 'Fecha ',
            ])
            ->addDatePicker('fecha_calendario', [
                'label' => 'Fecha del evento para comparar',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'display_format' => 'd-m-Y',
                'return_format' => 'd-m-Y',
                'first_day' => 1,
            ])
            ->addTrueFalse('mostrarHome', [
                'label' => 'Si / No se muestra en la home',
                'instructions' => '',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Si',
                'ui_off_text' => 'No',
            ])
            ->addTrueFalse('destacadoSgenda', [
                'label' => 'Si / No se muestra destado en agenda',
                'instructions' => '',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Si',
                'ui_off_text' => 'No',
            ])
            ->addTextarea('duracion_evento', [
                'label' => 'Duracion del eventos',
                'instructions' => 'Introcude la descripcion del restaurante no mas de 300 caracteres',
            ])
            ->addTextarea('descripcion_corta', [
                'label' => 'Descripcion Corta',
                'instructions' => 'Introcude la descripcion del restaurante no mas de 300 caracteres',
            ])
        ->addTab('imagenesEvento', [
            'label' => 'Imagenes del evento',
            'placement' => 'left',
        ])
            ->addImage('imageGrid', [
                'label' => 'Imagen para el grid exterior horizontal',
                'instructions' => 'Imagen para el grid de los eventos se recomienda imagen sin texto. El tamaño debe ser 900 x 600',
                'required' => 0,
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => '450',
                'min_height' => '300',
                'min_size' => '',
                'max_width' => '900',
                'max_height' => '600',
                'max_size' => '',
                'mime_types' => '',
            ])
            ->addImage('imageDestacadoHome', [
                'label' => 'Imagen destada para la home vertical',
                'instructions' => 'Imagen para el grid de los eventos se recomienda imagen sin texto. El tamaño debe ser 600 x 800',
                'required' => 0,
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => '600',
                'min_height' => '800',
                'min_size' => '',
                'max_width' => '1200',
                'max_height' => '1600',
                'max_size' => '',
                'mime_types' => '',
            ])
            ->addImage('imageInterior', [
                'label' => 'Imagen para el interior del evento',
                'instructions' => 'Imagen para el interior de los eventos se puede utilizar imagen con texto. El tamaño debe ser 1200 x 600',
                'required' => 0,
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => '600',
                'min_height' => '300',
                'min_size' => '',
                'max_width' => '1200',
                'max_height' => '600',
                'max_size' => '',
                'mime_types' => '',
            ])
        
    
       
       ;

        return $evento->build();
    }
}
