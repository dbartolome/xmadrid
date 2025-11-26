<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class temaocioydeporte extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $temaocioydeporte = new FieldsBuilder('temaocioydeporte');

        $temaocioydeporte
            ->setLocation('post_type', '==', 'page')
            ->and('page_template', '==', 'template-ocioydeporte.blade.php');

        $temaocioydeporte
        ->addTab('seccionPrincipal', [
            'label' => 'Principal',
            'placement' => 'left',
        ])
            ->addImage('imagenDescuentoPrincipal', [
                'label' => 'Imagen seccion principal',
                'instructions' => 'Agregar una imagen con medida minima de 604x430 y maxima de 1208x860 y no supere los 100Kb en formato jpg, png, webp o gif',
                'min_width' => '604',
                'min_height' => '430',
                'min_size' => '',
                'max_width' => '1208',
                'max_height' => '860',
                'max_size' => '100KB',
                'mime_types' => 'jpg, png, webp, gif',
            ])
            ->addText('tituloSecPrincipal', [
                'label' => 'Titulo seccion principal',
            ])
            ->addRelationship('marepolis', [
                'label' => 'Selcciona Mareopolis',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'post_type' => ['ocioydeporte'],
                'taxonomy' => [],
                'filters' => [],
                'elements' => '',
                'min' => '',
                'max' => '',
                'return_format' => 'object',
            ])
            ->addRelationship('honnasurf', [
                'label' => 'Selcciona Honan surf',
                'post_type' => ['ocioydeporte'],
                'taxonomy' => [],
                'filters' => [],
                'elements' => '',
                'min' => '',
                'max' => '',
                'return_format' => 'object',
            ])
            ->addTextArea('svgPrincipal', [
                'label' => 'Agregar el codigo SVG el camino sección principal',
            ])
        ->addTab('seccionSegunda', [
            'label' => 'Segunda seccion',
            'placement' => 'left',
        ])
            ->addRelationship('ozone', [
                'label' => 'Selcciona Ozone',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'post_type' => ['ocioydeporte'],
                'taxonomy' => [],
                'filters' => [],
                'return_format' => 'object',
            ])
            ->addImage('imagenOzone', [
                'label' => 'Imagen para ozone',
                'instructions' => 'Agregar una imagen con medida de 787x454 y no supere los 100Kb en formato jpg, png, webp o gif',
                'min_width' => '787',
                'min_height' => '454',
                'min_size' => '',
                'max_width' => '787',
                'max_height' => '454',
                'max_size' => '100KB',
                'mime_types' => 'jpg, png, webp, gif',
            ])
            ->addRelationship('climbat', [
                'label' => 'Selecciona Climbat',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'post_type' => ['ocioydeporte'],
                'taxonomy' => [],
                'filters' => [],
                'return_format' => 'object',
            ])
            ->addImage('imagenClimbat', [
                'label' => 'Imagen para Climbat',
                'instructions' => 'Agregar una imagen con medida de 473x773 y no supere los 100Kb en formato jpg, png, webp o gif',
                'min_width' => '473',
                'min_height' => '773',
                'min_size' => '',
                'max_width' => '473',
                'max_height' => '773',
                'max_size' => '100KB',
                'mime_types' => 'jpg, png, webp, gif',
            ])
            ->addImage('imagenOngravity', [
                'label' => 'Imagen para On Gravity',
                'instructions' => 'Agregar una imagen con medida de 905x1100 y no supere los 100Kb en formato jpg, png, webp o gif',
                'min_width' => '905',
                'min_height' => '1100',
                'min_size' => '',
                'max_width' => '905',
                'max_height' => '1100',
                'max_size' => '700KB',
                'mime_types' => 'jpg, png, webp, gif',
            ])
            ->addPageLink('URLOngravity', [
                'label' => 'URL del menú',
                'type' => 'page_link',
                'instructions' => '',
                'post_type' => ['ocioydeporte'],
                'taxonomy' => [],
                'allow_null' => 0,
                'allow_archives' => 0,
                'multiple' => 0,
            ])

            ->addTextArea('svgSegundo', [
                'label' => 'Agregar el codigo SVG el camino de la segunda sección',
            ])
        ->addTab('extremeFun', [
            'label' => 'Extreme & FUN',
            'placement' => 'left',
        ])
            ->addText('tituloSecExtreme', [
                'label' => 'Titulo seccion Extreme and FUN',
            ])
            ->addImage('imagenTitExtre', [
                'label' => 'Imagen para el titulo de Extreme and FUN',
                'instructions' => 'Agregar una imagen con medida de 1208x291 y no supere los 150Kb en formato jpg, png, webp o gif',
                'min_width' => '1208',
                'min_height' => '291',
                'min_size' => '',
                'max_width' => '1208',
                'max_height' => '291',
                'max_size' => '150KB',
                'mime_types' => 'jpg, png, webp, gif',
            ])
            ->addImage('imagenSegunda', [
                'label' => 'Imagen segunda paar seccion de extreme and FUN',
                'instructions' => 'Agregar una imagen con medida de 286x385 y no supere los 100Kb en formato jpg, png, webp o gif',
                'min_width' => '286',
                'min_height' => '385',
                'min_size' => '',
                'max_width' => '286',
                'max_height' => '385',
                'max_size' => '100KB',
                'mime_types' => 'jpg, png, webp, gif',
            ])
            ->addTextArea('svgExtreme', [
                'label' => 'Agregar el codigo SVG el camino de Extreme and FUN',
            ])
        ->addTab('fitness', [
            'label' => 'Fitness',
            'placement' => 'left',
        ])
        ->addText('tituloFitnes', [
            'label' => 'Titulo seccion Extreme and FUN',
        ])
            ->addImage('imagenUnoFitness', [
                'label' => 'Imagen uno para Fitness',
                'instructions' => 'Agregar una imagen con medida de 211x484 y no supere los 100Kb en formato jpg, png, webp o gif',
                'min_width' => '211',
                'min_height' => '484',
                'min_size' => '',
                'max_width' => '211',
                'max_height' => '484',
                'max_size' => '100KB',
                'mime_types' => 'jpg, png, webp, gif',
            ])
            ->addImage('imagenDosFitness', [
                'label' => 'Imagen dos para Fitness',
                'instructions' => 'Agregar una imagen con medida de 466x253 y no supere los 100Kb en formato jpg, png, webp o gif',
                'min_width' => '466',
                'min_height' => '253',
                'min_size' => '',
                'max_width' => '466',
                'max_height' => '253',
                'max_size' => '100KB',
                'mime_types' => 'jpg, png, webp, gif',
            ])
            ->addTextArea('svgFitness', [
                'label' => 'Agregar el codigo SVG el camino de Fitness',
            ])

        ->addTab('gamesTech', [
            'label' => 'Games & Tech',
            'placement' => 'left',
        ])
        ->addImage('imagenFondoGames', [
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
            ->addText('tituloGame', [
                'label' => 'Titulo seccion Games & Tech',
            ])
            ->addImage('imagenEspcial', [
                'label' => 'Imagen especial para Games & Tech',
                'instructions' => '',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '600KB',
                'mime_types' => 'jpg, png, webp, gif',
            ])
            ->addImage('imagenUnoGame', [
                'label' => 'Imagen uno para Games & Tech',
                'instructions' => 'Agregar una imagen con medida de 740x500 y no supere los 600Kb en formato jpg, png, webp o gif',
                'min_width' => '740',
                'min_height' => '500',
                'min_size' => '',
                'max_width' => '740',
                'max_height' => '500',
                'max_size' => '600KB',
                'mime_types' => 'jpg, png, webp, gif',
            ])
               
            
        ;

        return $temaocioydeporte->build();
    }
}
