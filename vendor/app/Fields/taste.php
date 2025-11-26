<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class taste extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $taste = new FieldsBuilder('taste');

        $taste
            ->setLocation('post_type', '==', 'taste');

        $taste
        ->addText('nombre', [
            'label' => 'Nombre',
            'instructions' => 'Nombre del restaurante',
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


        ->addImage('logoblanco', [
            'label' => 'Logo Blanco',
            'instructions' => 'Subir el logo en blanco. El tamaño del logo debe ser 300x300 con una resolucion de 96ppp y en formato png',
            'required' => 0,
            'wrapper' => [
                'width' => '',
                'class' => '',
                'id' => '',
            ],
            'return_format' => 'array',
            'preview_size' => 'thumbnail',
            'library' => 'all',
            'min_width' => '300',
            'min_height' => '300',
            'min_size' => '',
            'max_width' => '300',
            'max_height' => '300',
            'max_size' => '100kb',
            'mime_types' => 'png',
        ])
        ->addImage('logonegro', [
            'label' => 'Logo Negro',
            'instructions' => 'Subir el logo en negro. El tamaño del logo debe ser 300x300 con una resolucion de 96ppp y en formato png',
            'required' => 0,
            'wrapper' => [
                'width' => '',
                'class' => '',
                'id' => '',
            ],
            'return_format' => 'array',
            'preview_size' => 'thumbnail',
            'library' => 'all',
            'min_width' => '300',
            'min_height' => '300',
            'min_size' => '',
            'max_width' => '300',
            'max_height' => '300',
            'max_size' => '100kb',
            'mime_types' => 'png',
        ])
    ->addText('infoDestacada', [
        'label' => 'Informacion a destacar',
        'instructions' => 'Introducir el texto para destacar se situara encima de la descripción',
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
    ->addText('localizacion', [
        'label' => 'Localización',
        'instructions' => 'Localizacion del restaurante',
        'required' => 0,
        'wrapper' => [
            'width' => '',
            'class' => '',
            'id' => '',
        ],
        'default_value' => '',
        'placeholder' => 'Planta Calle - Local 1',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
    ])
    ->addImage('planosituacion', [
        'label' => 'Plano Localización',
        'instructions' => 'Imagen en miniatura de su posicion en el centro comercial',
        'required' => 0,
        'wrapper' => [
            'width' => '',
            'class' => '',
            'id' => '',
        ],
        'return_format' => 'array',
        'preview_size' => 'array',
        'library' => 'all',
        'min_width' => '',
        'min_height' => '',
        'min_size' => '',
        'max_width' => '',
        'max_height' => '',
        'max_size' => '',
        'mime_types' => '',
    ])
    ->addUrl('urlweb', [
            'label' => 'URL WEB',
            'instructions' => 'URL de la web del restaurante',
            'required' => 0,
            'wrapper' => [
                'width' => '',
                'class' => '',
                'id' => '',
            ],
            'default_value' => '',
            'placeholder' => ''
        ])
        ->addText('telefono', [
            'label' => 'Teléfono',
            'instructions' => 'Teléfono del restaurante',
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
        ->addText('extTelefono', [
            'label' => 'Extensión Teléfono',
            'instructions' => 'Extensión Teléfono del restaurante',
        ])
        ->addText('email', [
            'label' => 'E-mail',
            'instructions' => 'E-mail del restaurante',
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
    ->addRepeater('horario', [
                'label' => 'Horario',
                'instructions' => '',
                'required' => 0,

            ])
            ->addText('diasapertura', [
                'label' => 'Dias de apertura',
                'instructions' => 'Introducir el rango de dias en apertura',
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
            ->addText('horasapertura', [
                'label' => 'Horas apertura',
                'instructions' => 'El rango de horas de apertura en relacion alos dias anteriormente indicados',
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
            ->endRepeater()
        ->addImage('imagen1', [
            'label' => 'Primera imagen para el interior de la página del restaurante',
            'instructions' => 'Subir la imagen superior. El tamaño debe ser 800x500 con una resolución de 96ppp y en formato jpg. Y no superar los 350kb de tamaño',
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
            'max_width' => '800',
            'max_height' => '500',
            'max_size' => '350',
            'mime_types' => 'jpg',
        ])
        ->addImage('imagen2', [
            'label' => 'Segunda imagen para el interior de la página del restaurante',
            'instructions' => 'Subir la imagen inferior. El tamaño debe ser 800x400 con una resolución de 96ppp y en formato jpg. Y no superar los 350kb de tamaño',
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
            'max_width' => '800',
            'max_height' => '400',
            'max_size' => '350',
            'mime_types' => 'jpg',
        ])
        ->addImage('imagen3', [
            'label' => 'Imagen de un plato para mostrar en grid de la home',
            'instructions' => 'El tamaño debe ser 378x212 con una resolución de 96ppp y en formato jpg. Y no superar los 350kb de tamaño',
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
            'max_width' => '378',
            'max_height' => '212',
            'max_size' => '350',
            'mime_types' => 'jpg',
        ])
    ->addImage('imagen4', [
            'label' => 'Imagen del plato anterior con filtro rojo y logo y nombre restaurante en blanco',
            'instructions' => 'El tamaño debe ser 378x212 con una resolución de 96ppp y en formato jpg. Y no superar los 350kb de tamaño',
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
            'max_width' => '378',
            'max_height' => '212',
            'max_size' => '350',
            'mime_types' => 'jpg',
        ])
    ->addUrl('urlcarta', [
        'label' => 'URL de la carta',
        'instructions' => 'URL de la carta en la WEB restaurante',
        'required' => 0,
        'wrapper' => [
            'width' => '',
            'class' => '',
            'id' => '',
        ],
        'default_value' => '',
        'placeholder' => ''
    ])
    ->addTrueFalse('comidavegano', [
        'label' => 'Tiene Comida Vegana',
        'instructions' => 'Seleccionar esta opcion para que se habilite en el perfil del restaurante',
        'required' => 0,
        'wrapper' => [
            'width' => '',
            'class' => '',
            'id' => '',
        ],
        'message' => '',
        'default_value' => 0,
        'ui' => 1,
        'ui_on_text' => '',
        'ui_off_text' => '',
    ])
    ->addTrueFalse('comidavegetariana', [
        'label' => 'Tiene Comida Vegetariana',
        'instructions' => 'Seleccionar esta opcion para que se habilite en el perfil del restaurante',
        'required' => 0,
        'wrapper' => [
            'width' => '',
            'class' => '',
            'id' => '',
        ],
        'message' => '',
        'default_value' => 0,
        'ui' => 1,
        'ui_on_text' => '',
        'ui_off_text' => '',
    ])
    ->addTrueFalse('menuceliacos', [
        'label' => 'Tiene menu para celíacaos',
        'instructions' => 'Seleccionar esta opcion para que se habilite en el perfil del restaurante',
        'required' => 0,
        'wrapper' => [
            'width' => '',
            'class' => '',
            'id' => '',
        ],
        'message' => '',
        'default_value' => 0,
        'ui' => 1,
        'ui_on_text' => 'Si',
        'ui_off_text' => 'No',
    ]);

        return $taste->build();
    }
}
