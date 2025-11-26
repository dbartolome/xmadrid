<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class info extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $info = new FieldsBuilder('info');

        $info
        ->setLocation('post_type', '==', 'page')
        ->and('page_template', '==', 'template-info.blade.php');
        $info
        ->addTab('fondosPagina', [
            'label' => 'Fondos página',
            'placement' => 'left',
        ])
            ->addImage('fondoInfo', [
                'label' => 'Imagen para un fondo',
                'instructions' => 'Agregar una imagen con medida minima de 1135x569 y maxima de 2270x1138 y no supere los 300Kb en formato jpg, png, webp o gif',
                'min_width' => '1135',
                'min_height' => '569',
                'min_size' => '',
                'max_width' => '2270',
                'max_height' => '1138',
                'max_size' => '300KB',
                'mime_types' => 'jpg, png, webp, gif',
            ])
        ->addTab('principal', [
            'label' => 'Inicio',
            'placement' => 'left',
            'instructions' => 'Propiedades de la primera parte de +Info',
        ])
            ->addImage('flechasInfo', [
                'label' => 'Imagen para las flechas de info',
                'instructions' => 'Agregar una imagen con medida de 697x143 y no supere los 100Kb en formato jpg, png, webp o gif',
                'min_width' => '697',
                'min_height' => '143',
                'min_size' => '',
                'max_width' => '697',
                'max_height' => '143',
                'max_size' => '100KB',
                'mime_types' => 'jpg, png, webp, gif',
            ])
            ->addText('titSeccion', [
                'label' => 'Titulo principal',
                'instructions' => 'Titulo para la seccion',
            ])
            ->addTextArea('svgInicioInfo', [
                'label' => 'Agregar el codigo SVG el camino de la primera seccion',
                'instructions' => 'Agregar el codigo del SVG para el camino',
            ])
        ->addTab('horarios', [
            'label' => 'Horarios',
            'placement' => 'left',
            ])
            ->addText('titSeccionHorarios', [
                'label' => 'Titulo para el apartado de horarios',
            ])
            ->addText('titShop', [
                'label' => 'Titulo las tiendas',
            ])
            ->addText('lineaUnoShop', [
                'label' => 'Primera linea de las tiendas',
            ])
            ->addText('lineaDosShop', [
                'label' => 'Segunda linea de las tiendas',
            ])
            ->addText('lineaTresShop', [
                'label' => 'Tercera linea de las tiendas',
            ])
            ->addText('titTaste', [
                'label' => 'Titulo los restaurantes',
            ])
            ->addText('lineaUnoTaste', [
                'label' => 'Primera linea de los restaurantes',
            ])
            ->addText('lineaDosTaste', [
                'label' => 'Segunda linea de los restaurantes',
            ])
            ->addText('lineaTresTaste', [
                'label' => 'Tercera linea de los restaurantes',
            ])
            ->addText('titOcioydeporte', [
                'label' => 'Titulo ocio y deportes',
            ])
            ->addText('lineaUnoOcioydeporte', [
                'label' => 'Primera linea de ocio y deportes',
            ])
            ->addText('lineaDosOcioydeporte', [
                'label' => 'Segunda linea de ocio y deportes',
            ])
            ->addText('lineaTresOcioydeporte', [
                'label' => 'Tercera linea de ocio y deportes',
            ])
            ->addText('lineaCuatroOcioydeporte', [
                'label' => 'Cuarta linea de ocio y deportes',
            ])

            ->addTab('servicios', [
                'label' => 'Servicios',
                'placement' => 'left',
                ])
                ->addText('titServicios', [
                    'label' => 'Titulo para sección servicios',
                ])
                ->addRepeater('btnServicios', [
                    'label' => 'Botones para servicios',
                    'button_label' => 'Agregar botones de servicios',
                ])
                ->addText('txtBoton', [
                    'label' => 'Texto Botón',
                    'instructions' => 'Agregar el texto para el boton',
                ])
                ->addPageLink('enlaceServicios', [
                    'label' => 'Enlace botón',
                    'type' => 'page_link',
                    'instructions' => 'Seleccionar la pagina a la que enlazara el boton',
                    'required' => 0,
                    'conditional_logic' => [],
                    'wrapper' => [
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ],
                    'post_type' => [],
                    'taxonomy' => [],
                    'allow_null' => 0,
                    'allow_archives' => 0,
                    'multiple' => 0,
                ])
				->addUrl('urlexterna', [
        			'label' => 'URL EXTERNA',
    			])
                ->addText('txtClase', [
                    'label' => 'Texto para la clase',
                    'instructions' => 'Agregar el texto para el boton',
                ])

                ->endRepeater()
            ->addTab('comollegar', [
                'label' => 'Cómo Llegar',
                'placement' => 'left',
            ])
            
                ->addText('titComoLlegar', [
                    'label' => 'Titulo para sección Como llegar',
                ])
                ->addText('titContactoInfo', [
                    'label' => 'Titulo para sección Contacto Info',
                ])
                ->addImage('logoXmadrid', [
                    'label' => 'Imagen logo XMADRID',
                    'instructions' => 'Agregar una imagen con medida de 896x194 y no supere los 100Kb en formato jpg, png, webp o gif',
                    'min_width' => '896',
                    'min_height' => '194',
                    'min_size' => '',
                    'max_width' => '896',
                    'max_height' => '194',
                    'max_size' => '100KB',
                    'mime_types' => 'jpg, png, webp, gif',
                ])
                ->addText('direccionXmadrid', [
                    'label' => 'Dirección de X Madrid',
                ])
                ->addRepeater('btnComoLLegar', [
                    'label' => 'Iconos de como llegar',
                    'button_label' => 'Agregar iconos de cómo legar',
                ])
                    ->addImage('iconoComoLlegar', [
                        'label' => 'Iconos para como llegar',
                        'instructions' => 'Agregar una imagen con medida de 85x85 y no supere los 100Kb en formato jpg, png, webp o gif',
                        'min_width' => '85',
                        'min_height' => '85',
                        'min_size' => '',
                        'max_width' => '85',
                        'max_height' => '85',
                        'max_size' => '100KB',
                        'mime_types' => 'jpg, png, webp, gif',
                    ])
                    ->addText('textIcoComoLLegar', [
                        'label' => 'Texto Como llegar',
                        'instructions' => 'Introducir texto para los tooltip de los iconos de como llegar',
                    ])
                ->endRepeater()
                ->addRepeater('btnContactar', [
                    'label' => 'Iconos de contacto',
                    'button_label' => 'Agregar iconos de contacto',
                ])
                    ->addImage('iconoContacto', [
                        'label' => 'Iconos de contacto',
                        'instructions' => 'Agregar una imagen con medida de 150x150 y no supere los 100Kb en formato jpg, png, webp o gif',
                        'min_width' => '150',
                        'min_height' => '150',
                        'min_size' => '',
                        'max_width' => '150',
                        'max_height' => '150',
                        'max_size' => '100KB',
                        'mime_types' => 'jpg, png, webp, gif',
                    ])
                    ->addText('textIcoContacto', [
                        'label' => 'Texto Contacto',
                        'instructions' => 'Introducir texto para los tooltip de los iconos de contacto',
                    ])
                ->endRepeater()
                ->addTextArea('svgComollegar', [
                    'label' => 'Agregar el codigo SVG el camino de sección como llegar',
                    'instructions' => 'Agregar el codigo del SVG para el camino',
                ])
            ->addTab('contacto', [
                'label' => 'Contacto',
                'placement' => 'left',
            ])
                ->addText('titContacto', [
                    'label' => 'Titulo para sección contacto',
                ])
                ->addImage('iconoFormUno', [
                    'label' => 'Iconos Formulario de empresas',
                    'instructions' => 'Agregar una imagen con medida de 151x124 y no supere los 100Kb en formato jpg, png, webp o gif',
                    'min_width' => '151',
                    'min_height' => '124',
                    'min_size' => '',
                    'max_width' => '151',
                    'max_height' => '124',
                    'max_size' => '100KB',
                    'mime_types' => 'jpg, png, webp, gif',
                ])
                ->addText('textFormEmpresas', [
                    'label' => 'Texto formularios de empresas',
                    'instructions' => 'Introducir texto para los tooltip de los iconos de contacto',
                ])
                ->addText('shortcodeFormEmpresas', [
                    'label' => 'Codigo para el formulario de empresa',
                    'instructions' => 'Introducir texto para los tooltip de los iconos de contacto',
                ])
                ->addImage('iconoFormDos', [
                    'label' => 'Iconos formulario de personas',
                    'instructions' => 'Agregar una imagen con medida de 187x178 y no supere los 100Kb en formato jpg, png, webp o gif',
                    'min_width' => '187',
                    'min_height' => '178',
                    'min_size' => '',
                    'max_width' => '187',
                    'max_height' => '178',
                    'max_size' => '100KB',
                    'mime_types' => 'jpg, png, webp, gif',
                ])
                ->addText('textFormPersonas', [
                    'label' => 'Texto formularios de personas',
                ])
                ->addText('shortcodeFormPersonas', [
                    'label' => 'Codigo para el formulario de personas',
                ])

        ;

        return $info->build();
    }
}
