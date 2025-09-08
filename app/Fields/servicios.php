<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class servicios extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $servicios = new FieldsBuilder('servicios');

        $servicios
            ->setLocation('post_type', '==', 'servicios');

        $servicios
        ->addText('nombre', [
            'label' => 'Nombre',
            'instructions' => 'Nombre del servicio',
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
    
    
        ->addImage('icono', [
            'label' => 'Icono del servicio',
            'instructions' => 'Sube el icono del servicio. Tamaño de los iconos de servicios 600x600 con resolucion 96ppp y formato PNG. EL tamaño no superara los 50kb',
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
            'max_width' => '600',
            'max_height' => '600',
            'max_size' => '50',
            'mime_types' => 'png',
        ])
        ->addTextarea('descripcion', [
            'label' => 'Descripcion del servicio',
            'instructions' => 'Introcude la descripcion del servicio',
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
        ]);

        return $servicios->build();
    }
}
