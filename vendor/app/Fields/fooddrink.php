<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class fooddrink extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $fooddrink = new FieldsBuilder('fooddrink');

        $fooddrink
            ->setLocation('post_type', '==', 'page')
            ->and('page_template', '==', 'template-taste.blade.php');

        $fooddrink
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
                'instructions' => 'Agregar una imagen con medida de 702x608 y no supere los 300Kb en formato jpg, png, webp o gif',
                'min_width' => '702',
                'min_height' => '608',
                'min_size' => '',
                'max_width' => '702',
                'max_height' => '608',
                'max_size' => '300KB',
                'mime_types' => 'jpg, png, webp, gif',
            ])
            ->addImage('imagenDosPrincipal', [
                'label' => 'Imagen superior dos',
                'instructions' => 'Agregar una imagen con medida de 377x381 y no supere los 400Kb en formato jpg, png, webp o gif',
                'min_width' => '377',
                'min_height' => '381',
                'min_size' => '',
                'max_width' => '377',
                'max_height' => '381',
                'max_size' => '400KB',
                'mime_types' => 'jpg, png, webp, gif',
            ])
            ->addImage('imagenTresPrincipal', [
                'label' => 'Imagen superior tres',
                'instructions' => 'Agregar una imagen con medida de 439x657 y no supere los 150Kb en formato jpg, png, webp o gif',
                'min_width' => '439',
                'min_height' => '657',
                'min_size' => '',
                'max_width' => '439',
                'max_height' => '657',
                'max_size' => '150KB',
                'mime_types' => 'jpg, png, webp, gif',
            ])
            ->addImage('imagenCuatroPrincipal', [
                'label' => 'Imagen superior cuatro',
                'instructions' => 'Agregar una imagen con medida de 259x259 y no supere los 100Kb en formato jpg, png, webp o gif',
                'min_width' => '259',
                'min_height' => '259',
                'min_size' => '',
                'max_width' => '259',
                'max_height' => '259',
                'max_size' => '100KB',
                'mime_types' => 'jpg, png, webp, gif',
            ])
            ->addTextArea('svgPrincipal', [
                'label' => 'Agregar el codigo SVG el camino sección principal',
            ])
        ->addTab('seccionMediterranea', [
            'label' => 'Mediterranea',
            'placement' => 'left',            
        ])
            ->addText('tituloMediterranea', [
                'label' => 'Titulo seccion Mediterranea',
            ])
            ->addImage('imagenElementoMediterranea', [
                'label' => 'Imagen elemento Mediterranea',
                'instructions' => 'Agregar una imagen con medida de 870x1755 y no supere los 400Kb en formato jpg, png, webp o gif',
                'min_width' => '870',
                'min_height' => '1755',
                'min_size' => '',
                'max_width' => '870',
                'max_height' => '1755',
                'max_size' => '400KB',
                'mime_types' => 'jpg, png, webp, gif',
            ])
            ->addTextArea('svgMediterranea', [
                'label' => 'Agregar el codigo SVG el camino sección Mediterranea',
            ])
        ->addTab('seccionAsiatica', [
            'label' => 'Asiatica',
            'placement' => 'left',            
        ])
            ->addText('tituloAsiatica', [
                'label' => 'Titulo seccion Asiatica',
            ])
            ->addImage('imagenElementoAsiatica', [
                'label' => 'Imagen elemento Asiatica',
                'instructions' => 'Agregar una imagen con medida de 914x183 y no supere los 100Kb en formato jpg, png, webp o gif',
                'min_width' => '914',
                'min_height' => '183',
                'min_size' => '',
                'max_width' => '914',
                'max_height' => '183',
                'max_size' => '100KB',
                'mime_types' => 'jpg, png, webp, gif',
            ])
            ->addTextArea('svgAsiatica', [
                'label' => 'Agregar el codigo SVG el camino sección Asiatica',
            ])
        ->addTab('seccionAmericana', [
            'label' => 'Americana & Tex Mex',
            'placement' => 'left',
        ])
            ->addText('tituloAmericana', [
                'label' => 'Titulo seccion Americana',
            ])
            ->addImage('imagenElementoAmericana', [
                'label' => 'Imagen elemento Americana',
                'instructions' => 'Agregar una imagen con medida de 2560x1830 y no supere los 300Kb en formato jpg, png, webp o gif',
                'min_width' => '2560',
                'min_height' => '1830',
                'min_size' => '',
                'max_width' => '2560',
                'max_height' => '1830',
                'max_size' => '200KB',
                'mime_types' => 'jpg, png, webp, gif',
            ])
            ->addTextArea('svgAmericana', [
                'label' => 'Agregar el codigo SVG el camino sección Americana',
            ])
        ->addTab('seccionTerraceo', [
            'label' => 'Terraceo',
            'placement' => 'left',            
        ])
            ->addText('tituloTerraceo', [
                'label' => 'Titulo seccion Terraceo',
            ])
            ->addImage('imagenElementoTerraceo', [
                'label' => 'Imagen elemento Terraceo',
                'instructions' => 'Agregar una imagen con medida de 1500x1000 y no supere los 200Kb en formato jpg, png, webp o gif',
                'min_width' => '1500',
                'min_height' => '1000',
                'min_size' => '',
                'max_width' => '1500',
                'max_height' => '1000',
                'max_size' => '200KB',
                'mime_types' => 'jpg, png, webp, gif',
            ])
         
        ->addTab('seccionCafeyhelado', [
            'label' => 'Cafe y Helado',
            'placement' => 'left',            
        ])
            ->addText('tituloCafeyhelado', [
                'label' => 'Titulo seccion Café y helado',
            ])
            ->addImage('imagenElementoCafeyhelado', [
                'label' => 'Imagen elemento Cafeyhelado',
                'instructions' => 'Agregar una imagen con medida de 1272x608 y no supere los 605Kb en formato jpg, png, webp o gif',
                'min_width' => '1272',
                'min_height' => '2306',
                'min_size' => '',
                'max_width' => '1272',
                'max_height' => '2306',
                'max_size' => '605KB',
                'mime_types' => 'jpg, png, webp, gif',
            ])
            ->addTextArea('svgCafeyhelado', [
                'label' => 'Agregar el codigo SVG el camino sección Cafeyhelado',
            ])

;

        return $fooddrink->build();
    }
}
