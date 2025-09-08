<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ocioydeporte extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $ocioydeporte = new FieldsBuilder('ocioydeporte');

        $ocioydeporte
            ->setLocation('post_type', '==', 'ocioydeporte');

        $ocioydeporte
        ->addText('nombre', [
            'label' => 'Nombre',
            'instructions' => 'Nombre del operador',
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
        ->addImage('logo', [
            'label' => 'Logo',
            'instructions' => 'Subir el logo del operador en cvolor o B/N Tamaño 300x300 resolucion 96ppp. Formato jpg y no superar los 100kb',
            'required' => 0,
            'wrapper' => [
                'width' => '',
                'class' => '',
                'id' => '',
            ],
            'return_format' => 'array',
            'preview_size' => '',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '300',
            'max_height' => '300',
            'max_size' => '100',
            'mime_types' => 'jpg, png, webp',
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
        ->addText('locplanta', [
            'label' => 'Planta',
            'instructions' => 'Planta en la que se encuentra el operador: Baja , Calle o Primera',
            'required' => 0,
            'wrapper' => [
                'width' => '',
                'class' => '',
                'id' => '',
            ],
            'default_value' => '',
            'placeholder' => 'Calle',
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
            'instructions' => 'URL de la web del operador',
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
            'instructions' => 'Teléfono del operador',
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
        ->addText('email', [
            'label' => 'E-mail',
            'instructions' => 'E-mail del operador',
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
        ->addText('aclaracionReservas', [
            'label' => 'Aclaracion Info y Reservas',
            'instructions' => 'Texto para la aclaración de las reservas',
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
            'label' => 'Primera imagen para Slider encabezado',
            'instructions' => 'Subir imagen con el tamaño de 800x400 resolucion 96ppp. formato jpg y un tamaño inferior a 150kb',
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
        ->addImage('imagen2', [
            'label' => 'Segunda imagen para Slider encabezado',
            'instructions' => 'Subir imagen con el tamaño de 800x400 resolucion 96ppp. formato jpg y un tamaño inferior a 150kb',
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
        ->addImage('imagen3', [
            'label' => 'Tercera imagen para Slider encabezado',
            'instructions' => 'Subir imagen con el tamaño de 800x400 resolucion 96ppp. formato jpg y un tamaño inferior a 150kb',
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
        ]);

        return $ocioydeporte->build();
    }
}
