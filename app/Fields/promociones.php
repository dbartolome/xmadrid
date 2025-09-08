<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class promociones extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $promociones = new FieldsBuilder('promociones');

        $promociones
            ->setLocation('post_type', '==', 'promociones');

        $promociones
        ->addText('nombre', [
            'label' => 'Nombre',
            'instructions' => 'Nombre de la tienda',
            'required' => 0,
            'wrapper' => [
                'width' => '',
                'class' => '',
                'id' => '',
            ],
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ])
    
    
        ->addImage('bannerimagen', [
            'label' => 'Imagen del banner',
            'instructions' => 'Imagen para la promocion',
            'required' => 0,
            'wrapper' => [
                'width' => '',
                'class' => '',
                'id' => '',
            ],
            'return_format' => 'array',
            'preview_size' => 'thumbnail',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
        ])
        ->addTextarea('descripcion', [
            'label' => 'Descripcion',
            'instructions' => 'Introcude la descripcion del restaurante no mas de 300 caracteres',
            'required' => 0,
            'wrapper' => [
                'width' => '',
                'class' => '',
                'id' => '',
            ],
            'default_value' => '',
            'placeholder' => '',
            'maxlength' => '',
            'rows' => '',
            'new_lines' => '',
        ])
        ->addText('duracion_promo', [
            'label' => 'Agregar la duracion de la promo',
            'instructions' => '',
        ])
        ->addDatePicker('fecha_final', [
                'label' => 'Dia en el que termina la promocion u oferta',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'display_format' => 'Y-m-d',
                'return_format' => 'Y-m-d',
                'first_day' => 1,
            ])
        ->addRelationship('postrelacinado', [
            'label' => 'Tenna Realcionado',
            'instructions' => '',
            'required' => 0,
            'wrapper' => [
                'width' => '',
                'class' => '',
                'id' => '',
            ],
            'post_type' => [
                'shop',
                'taste',
                'play'
            ],
            'filters' => [
                0 => 'search',
                1 => 'post_type',
            ],
            'elements' => '',
            'min' => '',
            'max' => '',
            'return_format' => 'object',
        ]);

        return $promociones->build();
    }
}
