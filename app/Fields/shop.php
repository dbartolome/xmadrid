<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class shop extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $shop = new FieldsBuilder('shop');

        $shop
            ->setLocation('post_type', '==', 'shop');

        $shop
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
    
    
        ->addImage('logoblanco', [
            'label' => 'Logo Blanco',
            'instructions' => 'Subir el logo en blanco. El tamaño del logo debe ser 300x300 con una resolución de 96ppp y en formato png',
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
            'instructions' => 'Subir el logo en negro. El tamaño del logo debe ser 300x300 con una resolución de 96ppp y en formato png,',
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
        ->addImage('imagenProducto', [
            'label' => 'Imagen de algun producto para poder mostar en inicio',
            'instructions' => 'Subir el logo en negro. El tamaño del logo debe ser 300x300 con una resolución de 96ppp y en formato png,',
            'required' => 0,
            'wrapper' => [
                'width' => '',
                'class' => '',
                'id' => '',
            ],
            'return_format' => 'array',
            'preview_size' => 'thumbnail',
            'library' => 'all',
            'min_width' => '373',
            'min_height' => '211',
            'min_size' => '',
            'max_width' => '746',
            'max_height' => '422',
            'max_size' => '100kb',
            'mime_types' => 'png, webp',
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
            'instructions' => 'Nombre del operador',
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
        ->addUrl('urlweb', [
            'label' => 'URL WEB',
            'instructions' => 'URL de la web de la tienda',
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
            'instructions' => 'Teléfono de la tienda',
            'required' => 0,
            'wrapper' => [
                'width' => '',
                'class' => '',
                'id' => '',
            ],
            'default_value' => '',
            'placeholder' => '000000000',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ])
        ->addText('email', [
            'label' => 'E-mail',
            'instructions' => 'E-mail de la tienda',
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
            'label' => 'Primera imagen para el interior de la página de la tienda',
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
            'label' => 'Segunda imagen para el interior de la página de la tienda',
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
        ]);

        return $shop->build();
    }
}
