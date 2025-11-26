<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class shopping extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $shopping = new FieldsBuilder('shopping');

        $shopping
            ->setLocation('post_type', '==', 'page')
            ->and('page_template', '==', 'template-shopping.blade.php');

        $shopping
       
        ->addTab('seccionPrincipal', [
            'label' => 'Principal',
            'placement' => 'left',
        ])
            ->addImage('imagenFondoPrincipal', [
                'label' => 'Imagen fondo sección principal',
                'instructions' => 'Agregar una imagen con medida minima de 1135x569 y maxima de 2270x1138 y no supere los 300Kb en formato jpg, png, webp o gif',
                'min_width' => '1135',
                'min_height' => '569',
                'min_size' => '',
                'max_width' => '2270',
                'max_height' => '1138',
                'max_size' => '300KB',
                'mime_types' => 'jpg, png, webp, gif',
            ])
            ->addText('tituloSecPrincipal', [
                'label' => 'Titulo seccion principal',
            ])
            ->addImage('imagenUnoPrincipal', [
                'label' => 'Imagen superior uno',
                'instructions' => 'Agregar una imagen con medida de 348x175 y no supere los 100Kb en formato jpg, png, webp o gif',
                'min_width' => '348',
                'min_height' => '175',
                'min_size' => '',
                'max_width' => '348',
                'max_height' => '175',
                'max_size' => '100KB',
                'mime_types' => 'jpg, png, webp, gif',
            ])
            ->addPageLink('urlimagenUnoPrincipal', [
                'label' => 'URL imagen uno',
                'type' => 'page_link',
                'instructions' => '',
                'post_type' => ['shop'],
                'taxonomy' => [],
                'allow_null' => 0,
                'allow_archives' => 0,
                'multiple' => 0,
            ])
            ->addImage('imagenDosPrincipal', [
                'label' => 'Imagen superior dos',
                'instructions' => 'Agregar una imagen con medida de 373x211 y no supere los 100Kb en formato jpg, png, webp o gif',
                'min_width' => '373',
                'min_height' => '211',
                'min_size' => '',
                'max_width' => '373',
                'max_height' => '211',
                'max_size' => '100KB',
                'mime_types' => 'jpg, png, webp, gif',
            ])
            ->addPageLink('urlImagenDosPrincipal', [
                'label' => 'URL imagen dos',
                'type' => 'page_link',
                'instructions' => '',
                'post_type' => ['shop'],
                'taxonomy' => [],
                'allow_null' => 0,
                'allow_archives' => 0,
                'multiple' => 0,
            ])
            ->addTextArea('svgPrincipal', [
                'label' => 'Agregar el codigo SVG el camino sección principal',
            ])
        ->addTab('seccionFashion', [
            'label' => 'Fashion',
            'placement' => 'left',
        ])
        ->addImage('fondoFashion', [
            'label' => 'Imagen para el fondo de fashion',
            'instructions' => 'Agregar una imagen con medida minima de 1135x569 y maxima de 2270x1138 y no supere los 300Kb en formato jpg, png, webp o gif',
            'min_width' => '1135',
            'min_height' => '569',
            'min_size' => '',
            'max_width' => '2270',
            'max_height' => '1138',
            'max_size' => '300KB',
            'mime_types' => 'jpg, png, webp, gif',
        ])
        ->addImage('imagenFashion', [
            'label' => 'Imagen para la seccion fashion',
            'instructions' => 'Agregar una imagen con medida minima de 114x1100 y maxima de 228x2200 y no supere los 300Kb en formato jpg, png, webp o gif',
            'min_width' => '114',
            'min_height' => '1100',
            'min_size' => '',
            'max_width' => '228',
            'max_height' => '2200',
            'max_size' => '300KB',
            'mime_types' => 'jpg, png, webp, gif',
        ])
        ->addImage('imagenFashionHor', [
            'label' => 'Imagen para la seccion fashion',
            'instructions' => 'Agregar una imagen con medida minima de 1100x114 y maxima de 2200x228 y no supere los 300Kb en formato jpg, png, webp o gif',
            'min_width' => '1100',
            'min_height' => '114',
            'min_size' => '',
            'max_width' => '2200',
            'max_height' => '228',
            'max_size' => '300KB',
            'mime_types' => 'jpg, png, webp, gif',
        ])
        ->addImage('iconoFashion', [
            'label' => 'Imagen para el icono de fashion',
            'instructions' => 'Agregar una imagen con medida minima de 170x170 y maxima de 340x340 y no supere los 100Kb en formato jpg, png, webp o gif',
            'min_width' => '170',
            'min_height' => '170',
            'min_size' => '',
            'max_width' => '340',
            'max_height' => '340',
            'max_size' => '100KB',
            'mime_types' => 'jpg, png, webp, gif',
        ])
            ->addTextArea('svgFashion', [
                'label' => 'Agregar el codigo SVG el camino sección fashion',
            ])
            ->addText('tituloSecFashion', [
                'label' => 'Titulo seccion Fashion',
            ])
        ->addTab('seccionMotor', [
            'label' => 'Motor & Bike',
            'placement' => 'left',
        ])
        ->addImage('fondoMotor', [
            'label' => 'Imagen para el fondo de Motor',
            'instructions' => 'Agregar una imagen con medida minima de 1135x569 y maxima de 2270x1138 y no supere los 300Kb en formato jpg, png, webp o gif',
            'min_width' => '1135',
            'min_height' => '569',
            'min_size' => '',
            'max_width' => '2270',
            'max_height' => '1138',
            'max_size' => '300KB',
            'mime_types' => 'jpg, png, webp, gif',
        ])
            ->addText('tituloSecMotor', [
                'label' => 'Titulo seccion Motor',
            ])
            ->addTextArea('svgMotor', [
                'label' => 'Agregar el codigo SVG el camino sección Motor',
            ])

        ->addTab('seccionBeauty', [
            'label' => 'Beauty',
            'placement' => 'left',
        ])
        ->addImage('fondoBeauty', [
            'label' => 'Imagen para el fondo de beauty',
            'instructions' => 'Agregar una imagen con medida minima de 1135x569 y maxima de 2270x1138 y no supere los 300Kb en formato jpg, png, webp o gif',
            'min_width' => '1135',
            'min_height' => '569',
            'min_size' => '',
            'max_width' => '2270',
            'max_height' => '1138',
            'max_size' => '300KB',
            'mime_types' => 'jpg, png, webp, gif',
        ])
            ->addText('tituloSecBeauty', [
                'label' => 'Titulo seccion Beauty',
            ])
            ->addTextArea('svgBeauty', [
                'label' => 'Agregar el codigo SVG el camino sección Beauty',
            ])
            ->addImage('imagenBeauty', [
                'label' => 'Imagen paar seccion Beauty',
                'instructions' => 'Agregar una imagen con medida de 235x1080 y no supere los 100Kb en formato jpg, png, webp o gif',
                'min_width' => '235',
                'min_height' => '1080',
                'min_size' => '',
                'max_width' => '235',
                'max_height' => '1080',
                'max_size' => '100KB',
                'mime_types' => 'jpg, png, webp, gif',
            ])

        ->addTab('seccionFriki', [
            'label' => 'Firki',
            'placement' => 'left',
        ])
        ->addImage('fondoFriki', [
            'label' => 'Imagen para el fondo de friki',
            'instructions' => 'Agregar una imagen con medida minima de 1135x569 y maxima de 2270x1138 y no supere los 300Kb en formato jpg, png, webp o gif',
            'min_width' => '1135',
            'min_height' => '569',
            'min_size' => '',
            'max_width' => '2270',
            'max_height' => '1138',
            'max_size' => '300KB',
            'mime_types' => 'jpg, png, webp, gif',
        ])
            ->addText('tituloSecFriki', [
                'label' => 'Titulo seccion Friki',
            ])
            ->addTextArea('svgFriki', [
                'label' => 'Agregar el codigo SVG el camino sección Friki',
            ])
            ->addImage('imagenFriki', [
                'label' => 'Imagen paar seccion Friki',
                'instructions' => 'Agregar una imagen con medida de 1400x1516 y no supere los 200Kb en formato jpg, png, webp o gif',
                'min_width' => '1400',
                'min_height' => '1516',
                'min_size' => '',
                'max_width' => '1400',
                'max_height' => '1516',
                'max_size' => '200KB',
                'mime_types' => 'jpg, png, webp, gif',
            ])

        ->addTab('seccionGifts', [
            'label' => 'Gifts & Hobbies',
            'placement' => 'left',
        ])
        ->addImage('fondoGifts', [
            'label' => 'Imagen para el fondo de gifts',
            'instructions' => 'Agregar una imagen con medida minima de 1135x569 y maxima de 2270x1138 y no supere los 300Kb en formato jpg, png, webp o gif',
            'min_width' => '1135',
            'min_height' => '569',
            'min_size' => '',
            'max_width' => '2270',
            'max_height' => '1138',
            'max_size' => '300KB',
            'mime_types' => 'jpg, png, webp, gif',
        ])
            ->addText('tituloSecGifts', [
                'label' => 'Titulo seccion Gifts',
            ])
            ->addTextArea('svgGifts', [
                'label' => 'Agregar el codigo SVG el camino sección Gifts',
            ])
            ->addImage('imagenGifts', [
                'label' => 'Imagen paar seccion Gifts & Hobbies',
                'instructions' => 'Agregar una imagen con medida de 1046x2560 y no supere los 200Kb en formato jpg, png, webp o gif',
                'min_width' => '1046',
                'min_height' => '2560',
                'min_size' => '',
                'max_width' => '1046',
                'max_height' => '2560',
                'max_size' => '200KB',
                'mime_types' => 'jpg, png, webp, gif',
            ])

        ->addTab('seccionSupermercado', [
            'label' => 'Supermercado',
            'placement' => 'left',
        ])
        ->addImage('fondoSupermercado', [
            'label' => 'Imagen para el fondo de supermercado',
            'instructions' => 'Agregar una imagen con medida minima de 1135x569 y maxima de 2270x1138 y no supere los 300Kb en formato jpg, png, webp o gif',
            'min_width' => '1135',
            'min_height' => '569',
            'min_size' => '',
            'max_width' => '2270',
            'max_height' => '1138',
            'max_size' => '300KB',
            'mime_types' => 'jpg, png, webp, gif',
        ])
            ->addText('tituloSecSupermercado', [
                'label' => 'Titulo seccion Supermercado',
            ])
            ->addImage('imagenSupermercado', [
                'label' => 'Imagen paar seccion Beauty',
                'instructions' => 'Agregar una imagen con medida de 1400x1023 y no supere los 200Kb en formato jpg, png, webp o gif',
                'min_width' => '1400',
                'min_height' => '1023',
                'min_size' => '',
                'max_width' => '1400',
                'max_height' => '1023',
                'max_size' => '200KB',
                'mime_types' => 'jpg, png, webp, gif',
            ])

        ->addTab('seccionXmarket', [
            'label' => 'Xmarket',
            'placement' => 'left',
        ])
        ->addImage('fondoXmarket', [
            'label' => 'Imagen para el fondo de XMarket',
            'instructions' => 'Agregar una imagen con medida minima de 1135x569 y maxima de 2270x1138 y no supere los 300Kb en formato jpg, png, webp o gif',
            'min_width' => '1135',
            'min_height' => '569',
            'min_size' => '',
            'max_width' => '2270',
            'max_height' => '1138',
            'max_size' => '300KB',
            'mime_types' => 'jpg, png, webp, gif',
        ])
            ->addImage('imagenXmarket', [
                'label' => 'Imagen paar seccion X Market',
                'instructions' => 'Agregar una imagen con medida de 800x800 y no supere los 150Kb en formato jpg, png, webp o gif',
                'min_width' => '800',
                'min_height' => '1101',
                'min_size' => '',
                'max_width' => '1308',
                'max_height' => '1800',
                'max_size' => '150KB',
                'mime_types' => 'jpg, png, webp, gif',
            ])
            ->addPageLink('enlaceXmarket', [
                'label' => 'Enlace página X Market',
                'type' => 'page_link',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'post_type' => ['page'],
                'taxonomy' => [],
                'allow_null' => 0,
                'allow_archives' => 1,
                'multiple' => 0,
            ])
            
            ;

        return $shopping->build();
    }
}
