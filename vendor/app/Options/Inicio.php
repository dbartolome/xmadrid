<?php

namespace App\Options;

use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Inicio extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Inicio';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Inicio | Opciones';

    /**
     * The option page permission capability.
     *
     * @var string
     */
    public $capability = 'edit_theme_options';
    
    /**
     * The option page menu position.
     *
     * @var int
     */
    public $position = 9;

/**
     * The option page autoload setting.
     *
     * @var bool
     */
    public $autoload = true;

    /**
     * Localized text displayed on the submit button.
     *
     * @return string
     */
    public function updateButton()
    {
        return __('Update', 'acf');
    }

    /**
     * Localized text displayed after form submission.
     *
     * @return string
     */
    public function updatedMessage()
    {
        return __('Options Updated', 'acf');
    }

    /**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $inicio = new FieldsBuilder('inicio');

        $inicio
            ->addTab('header', [
                'label' => 'Header Web',
                'placement' => 'left',
            ])
                ->addImage('logoWeb', [
                    'label' => 'Logo para el header',
                    'instructions' => 'Agregar una imagen con medida minima de 500x507 y maxima de 1000x1014 y no supere los 150Kb en formato jpg, png, webp o gif',
                    'min_width' => '500',
                    'min_height' => '507',
                    'min_size' => '',
                    'max_width' => '1000',
                    'max_height' => '1014',
                    'max_size' => '150KB',
                    'mime_types' => 'jpg, png, webp, gif',
                ])
            ->addTab('intro', [
                'label' => 'Seccion principal inicio',
                'placement' => 'left',
            ])
                ->addImage('fondoSeccionIntro', [
                    'label' => 'Imagen para el fondo de la seccion intro',
                    'instructions' => 'Agregar una imagen con medida minima de 1135x569 y maxima de 2270x1138 y no supere los 300Kb en formato jpg, png, webp o gif',
                    'min_width' => '1135',
                    'min_height' => '569',
                    'min_size' => '',
                    'max_width' => '2270',
                    'max_height' => '1138',
                    'max_size' => '300KB',
                    'mime_types' => 'jpg, png, webp, gif',
                ])
                ->addFile('videoPrincipal', [
                    'label' => 'Video Principal',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => [],
                    'wrapper' => [
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ],
                    'return_format' => 'array',
                    'library' => 'all',
                    'min_size' => '',
                    'max_size' => '20MB',
                    'mime_types' => 'mp4',
                ])
                ->addTrueFalse('videoSlider', [
                    'label' => 'Slider en la home',
                    'message' => '',
                    'default_value' => 0,
                    'ui' =>  1,
                    'ui_on_text' => 'ON',
                    'ui_off_text' => 'OFF',
                ])
                ->addRepeater('sliderHome', [
                    'label' => 'Slider para la home',
                    'button_label' => 'Agregar Imagenes al slider',
                    'sub_fields' => [],
                ])
                    ->addImage('imageSlide', [
                        'label' => 'Imagen para el slide',
                        'instructions' => 'Agregar una imagen que no supere el 1920x1080 y no supere los 400Kb en formato jpg, png, webp o gif',
                        'min_width' => '',
                        'min_height' => '',
                        'min_size' => '',
                        'max_width' => '1920',
                        'max_height' => '1080',
                        'max_size' => '400KB',
                        'mime_types' => 'jpg, png, webp, gif',
                    ])
                    ->addImage('imageSlideResponsive', [
                        'label' => 'Imagen para el slide responsive',
                        'instructions' => 'Agregar una imagen que no supere el 1000x1200 y no supere los 400Kb en formato jpg, png, webp o gif',
                        'min_width' => '',
                        'min_height' => '',
                        'min_size' => '',
                        'max_width' => '1000',
                        'max_height' => '1200',
                        'max_size' => '400KB',
                        'mime_types' => 'jpg, png, webp, gif',
                    ])
                    ->addPageLink('enlaceSlide', [
                        'label' => 'Enlace para el slide',
                        'type' => 'page_link',
                        'instructions' => 'Selecciona el enlace del slide',
                        'required' => 0,
                        'conditional_logic' => [],
                        'wrapper' => [
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ],
                        'post_type' => ['evento', 'page', 'shop','taste','ocioydeporte'],
                        'taxonomy' => [],
                        'allow_null' => 0,
                        'allow_archives' => 0,
                        'multiple' => 0,
                    ])
                ->endRepeater()
                ->addTextArea('svgEntradas', [
                    'label' => 'Agregar el codigo SVG el camino de la home',
                    'instructions' => 'Agregar el codigo del SVG para el camino',
                ])
                ->addImage('fondoVideo', [
                    'label' => 'Imagen para el fondo del video',
                    'instructions' => 'Agregar una imagen con medida minima de 696x350 y maxima de 1392x350 y no supere los 200Kb en formato jpg, png, webp o gif',
                    'min_width' => '696',
                    'min_height' => '350',
                    'min_size' => '',
                    'max_width' => '1392',
                    'max_height' => '350',
                    'max_size' => '200KB',
                    'mime_types' => 'jpg, png, webp, gif',
                ])
                ->addImage('indicadorCamino', [
                    'label' => 'Imagen para indicador navegación',
                    'instructions' => 'Agregar una imagen con medida minima de 108x117 y maxima de 216x234 y no supere los 100Kb en formato jpg, png, webp o gif',
                    'min_width' => '108',
                    'min_height' => '117',
                    'min_size' => '',
                    'max_width' => '216',
                    'max_height' => '234',
                    'max_size' => '100KB',
                    'mime_types' => 'jpg, png, webp, gif',
                ])
            ->addTab('Inicio', [
                'label' => 'Seccion Shopping',
                'placement' => 'left',
            ])
                ->addText('tituloShopping', [
                    'label' => 'Titulo para la seccion de shopping',
                ])
                ->addImage('imagenTituloShopping', [
                    'label' => 'Imagen que acompaña al titulo de dhopping',
                    'instructions' => 'Agregar una imagen con medida minima de 343x603 y maxima de 686x1206 y no supere los 100Kb en formato jpg, png, webp o gif',
                    'min_width' => '343',
                    'min_height' => '603',
                    'min_size' => '',
                    'max_width' => '686',
                    'max_height' => '1206',
                    'max_size' => '100KB',
                    'mime_types' => 'jpg, png, webp, gif',
                ])
                ->addPageLink('urTituloShopping', [
                    'label' => 'URL para el titulo de shopping',
                    'type' => 'page_link',
                    'instructions' => 'Selecciona la pagina  a la que linkar el titulo',
                    'post_type' => ['page'],
                    'taxonomy' => [],
                    'allow_null' => 0,
                    'allow_archives' => 0,
                    'multiple' => 0,
                ])
                ->addImage('fondoSeccionShopping', [
                    'label' => 'Imagen para el fondo de la seccion Shopping',
                    'instructions' => 'Agregar una imagen con medida minima de 1135x569 y maxima de 2270x1138 y no supere los 300Kb en formato jpg, png, webp o gif',
                    'min_width' => '1135',
                    'min_height' => '569',
                    'min_size' => '',
                    'max_width' => '2270',
                    'max_height' => '1138',
                    'max_size' => '300KB',
                    'mime_types' => 'jpg, png, webp, gif',
                ])
                ->addImage('imgSupIzquierda', [
                    'label' => 'Imagen superior Izquierda',
                    'instructions' => 'Agregar una imagen con medida minima de 688x370 y maxima de 1376x740 y no supere los 100Kb en formato jpg, png, webp o gif',
                    'min_width' => '688',
                    'min_height' => '370',
                    'min_size' => '',
                    'max_width' => '1376',
                    'max_height' => '740',
                    'max_size' => '100KB',
                    'mime_types' => 'jpg, png, webp, gif',
                ])
                ->addPageLink('urlImgSupIzquierda', [
                    'label' => 'URL para la iamgen izquierda',
                    'type' => 'page_link',
                    'instructions' => 'Selecciona la pagina  a la que linkar la imagen superior izquierda',
                    'post_type' => ['page'],
                    'taxonomy' => [],
                    'allow_null' => 0,
                    'allow_archives' => 0,
                    'multiple' => 0,
                ])
                ->addImage('indicadorSiguiente', [
                    'label' => 'Imagen para indicar siguiente',
                    'instructions' => 'Agregar una imagen con medida minima de 245x98 y maxima de 490x196 y no supere los 100Kb en formato jpg, png, webp o gif',
                    'min_width' => '245',
                    'min_height' => '98',
                    'min_size' => '',
                    'max_width' => '490',
                    'max_height' => '196',
                    'max_size' => '100KB',
                    'mime_types' => 'jpg, png, webp, gif',
                ])
                ->addImage('imagenDestacadoUno', [
                    'label' => 'Imagen para destacado uno Shopping',
                    'instructions' => 'Agregar una imagen con medida minima de 1086x500 y maxima de 2172x100 y no supere los 200Kb en formato jpg, png, webp o gif',
                    'min_width' => '800',
                    'min_height' => '533',
                    'min_size' => '',
                    'max_width' => '800',
                    'max_height' => '533',
                    'max_size' => '200KB',
                    'mime_types' => 'jpg, png, webp, gif',
                ])
                ->addImage('imagenDestacadoUnoSup', [
                    'label' => 'Imagen para animacion destacado uno Shopping',
                    'instructions' => 'Agregar una imagen con medida minima de 2560x135 y maxima de 5120x270 y no supere los 100Kb en formato jpg, png, webp o gif',
                    'min_width' => '2560',
                    'min_height' => '135',
                    'min_size' => '',
                    'max_width' => '5120',
                    'max_height' => '270',
                    'max_size' => '100KB',
                    'mime_types' => 'jpg, png, webp, gif',
                ])
                ->addPageLink('urlimagenDestacadoUno', [
                    'label' => 'URL para destacado uno',
                    'type' => 'page_link',
                    'instructions' => 'Selecciona el enlace para el destacado uno',
                    'post_type' => ['page','taste','shop','ocioydeporte'],
                    'taxonomy' => [],
                    'allow_null' => 0,
                    'allow_archives' => 0,
                    'multiple' => 0,
                ])
                ->addImage('imagenDestacadoDos', [
                    'label' => 'Imagen segundo destacado shopping',
                    'instructions' => 'Agregar una imagen con medida minima de 293x520 y maxima de 586x1040 y no supere los 400Kb en formato jpg, png, webp o gif',
                    'min_width' => '293',
                    'min_height' => '520',
                    'min_size' => '',
                    'max_width' => '586',
                    'max_height' => '1040',
                    'max_size' => '400KB',
                    'mime_types' => 'jpg, png, webp, gif',
                ])
                ->addPageLink('urlimagenDestacadoDos', [
                    'label' => 'URL para destacado dos',
                    'type' => 'page_link',
                    'instructions' => 'Selecciona el enlace para el destacado dos',
                    'post_type' => ['page','taste','shop','ocioydeporte'],
                    'taxonomy' => [],
                    'allow_null' => 0,
                    'allow_archives' => 0,
                    'multiple' => 0,
                ])
                ->addImage('imagenSuperiorDerecha', [
                    'label' => 'Imagen Superior derecha',
                    'instructions' => 'Agregar una imagen con medida minima de 450x380 y maxima de 900x760 y no supere los 200Kb en formato jpg, png, webp o gif',
                    'min_width' => '450',
                    'min_height' => '380',
                    'min_size' => '',
                    'max_width' => '900',
                    'max_height' => '760',
                    'max_size' => '200KB',
                    'mime_types' => 'jpg, png, webp, gif',
                ])
                ->addPageLink('urlImagenSuperiorDerecha', [
                    'label' => 'URL para imagen superior derecha',
                    'type' => 'page_link',
                    'instructions' => 'Selecciona el enlace para la imagen superior derecha',
                    'post_type' => ['page','taste','shop','ocioydeporte'],
                    'taxonomy' => [],
                    'allow_null' => 0,
                    'allow_archives' => 0,
                    'multiple' => 0,
                ])
                ->addTextArea('svgShopping', [
                    'label' => 'Agregar el codigo SVG el camino de shopping',
                    'instructions' => 'Agregar el codigo del SVG para el camino',
                ])
            
            ->addTab('movilVideo', [
                'label' => 'Movil Tik Tok',
                'placement' => 'left',
            ])
                ->addImage('fondoSeccionVideo', [
                    'label' => 'Fondo seccion video',
                    'instructions' => 'Agregar una imagen con medida minima de 1135x569 y maxima de 2270x1138 y no supere los 300Kb en formato jpg, png, webp o gif',
                    'min_width' => '1135',
                    'min_height' => '569',
                    'min_size' => '',
                    'max_width' => '2270',
                    'max_height' => '1138',
                    'max_size' => '300KB',
                    'mime_types' => 'jpg, png, webp, gif',
                ])
                ->addImage('capaVideo', [
                    'label' => 'Imagen capa video',
                    'instructions' => 'Agregar una imagen con medida exacta de 839x808 y no supere los 200Kb en formato jpg, png, webp o gif',
                    'min_width' => '839',
                    'min_height' => '808',
                    'min_size' => '',
                    'max_width' => '839',
                    'max_height' => '808',
                    'max_size' => '400KB',
                    'mime_types' => 'png, webp',
                ])
                ->addFile('videoTelefono', [
                    'label' => 'Video Telefono',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => [],
                    'wrapper' => [
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ],
                    'return_format' => 'array',
                    'library' => 'all',
                    'min_size' => '',
                    'max_size' => '20MB',
                    'mime_types' => 'mp4',
                ])
                ->addImage('logoRedSocial', [
                    'label' => 'Imagen para la red social',
                    'instructions' => 'Agregar una imagen con medida minima de 190x266 y maxima de 380x532 y no supere los 50Kb en formato jpg, png, webp o gif',
                    'min_width' => '190',
                    'min_height' => '266',
                    'min_size' => '',
                    'max_width' => '390',
                    'max_height' => '532',
                    'max_size' => '50KB',
                    'mime_types' => 'jpg, png, webp, gif',
                ])
                ->addText('urlLogoRedSocial', [
                    'label' => 'URL para la red social',
                    'instructions' => 'Introducir la URL del video para la red social',
                ])
                ->addImage('logoRedInstagram', [
                    'label' => 'Imagen para la red Instagram',
                    'instructions' => 'Agregar una imagen con medida minima de 190x266 y maxima de 380x532 y no supere los 50Kb en formato jpg, png, webp o gif',
                    'min_width' => '190',
                    'min_height' => '266',
                    'min_size' => '',
                    'max_width' => '390',
                    'max_height' => '532',
                    'max_size' => '50KB',
                    'mime_types' => 'jpg, png, webp, gif',
                ])
                ->addText('urlLogoInstagram', [
                    'label' => 'URL para la red Instagram',
                    'instructions' => 'Introducir la URL del video para la red social',
                ])
            ->addTab('agenda', [
                'label' => 'Agenda',
                'placement' => 'left',
            ])
                ->addImage('fondoSeccionAgenda', [
                    'label' => 'Fondo seccion agenda',
                    'instructions' => 'Agregar una imagen con medida minima de 1135x569 y maxima de 2270x1138 y no supere los 300Kb en formato jpg, png, webp o gif',
                    'min_width' => '1135',
                    'min_height' => '569',
                    'min_size' => '',
                    'max_width' => '2270',
                    'max_height' => '1138',
                    'max_size' => '300KB',
                    'mime_types' => 'jpg, png, webp, gif',
                ])
                ->addImage('imgNoEvento', [
                    'label' => 'Imagen para cuando no hay eventos',
                    'instructions' => 'Agregar una imagen con medida minima de 1135x569 y maxima de 2270x1138 y no supere los 300Kb en formato jpg, png, webp o gif',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '300KB',
                    'mime_types' => 'jpg, png, webp, gif',
                ])
                ->addText('titSeccionEventos', [
                    'label' => 'Titulo para la sección eventos',
                    'instructions' => 'Introducir el titulo para la seccion evento',
                ])

                ->addRelationship('eventosAgenda', [
                    'label' => 'Eventos Agenda',
                    'instructions' => 'Selecciona 3 eventos para la agenda',
                    'required' => 0,
                    'conditional_logic' => [],
                    'wrapper' => [
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ],
                    'post_type' => ['evento'],
                    'taxonomy' => [],
                    'filters' => [
                        0 => 'search',
                    ],
                    'elements' => '',
                    'min' => '0',
                    'max' => '3',
                    'return_format' => 'object',
                ])
                ->addTextArea('svgEventos', [
                    'label' => 'Agregar el codigo SVG el camino de eventos',
                    'instructions' => 'Agregar el codigo del SVG para el camino',
                ])
            ->addTab('menuExperiencia', [
                'label' => 'Menú experiencia X',
                'placement' => 'left',
            ])
                ->addImage('fondoMenuExperiencia', [
                    'label' => 'Fondo seccion menú experiencia',
                    'instructions' => 'Agregar una imagen con medida minima de 1135x569 y maxima de 2270x1138 y no supere los 300Kb en formato jpg, png, webp o gif',
                    'min_width' => '1135',
                    'min_height' => '569',
                    'min_size' => '',
                    'max_width' => '2270',
                    'max_height' => '1138',
                    'max_size' => '300KB',
                    'mime_types' => 'jpg, png, webp, gif',
                ])
                ->addImage('imagenMenuExperiencia', [
                    'label' => 'Imagen seccion menú experiencia',
                    'instructions' => 'Agregar una imagen con medida minima de 836x1036 y maxima de 1672x2072 y no supere los 200Kb en formato jpg, png, webp o gif',
                    'min_width' => '836',
                    'min_height' => '1036',
                    'min_size' => '',
                    'max_width' => '1672',
                    'max_height' => '2072',
                    'max_size' => '200KB',
                    'mime_types' => 'jpg, png, webp, gif',
                ])
                ->addText('menuOcio', [
                    'label' => 'Item 1 menú experiencia',
                ])
                ->addPageLink('URLmenuOcio', [
                    'label' => 'URL del menú',
                    'type' => 'page_link',
                    'instructions' => '',
                    'post_type' => ['page'],
                    'taxonomy' => [],
                    'allow_null' => 0,
                    'allow_archives' => 0,
                    'multiple' => 0,
                ])
                ->addText('menuFood', [
                    'label' => 'Item 2 menú experiencia',
                ])
                ->addPageLink('URLmenuFood', [
                    'label' => 'URL del menú',
                    'type' => 'page_link',
                    'instructions' => '',
                    'post_type' => ['page'],
                    'taxonomy' => [],
                    'allow_null' => 0,
                    'allow_archives' => 0,
                    'multiple' => 0,
                ])
                ->addText('menuCine', [
                    'label' => 'Item 3 menú experiencia',
                ])
                ->addPageLink('URLmenuCine', [
                    'label' => 'URL del menú',
                    'type' => 'page_link',
                    'instructions' => '',
                    'post_type' => ['page','ocioydeporte'],
                    'taxonomy' => [],
                    'allow_null' => 0,
                    'allow_archives' => 0,
                    'multiple' => 0,
                ])
                ->addPageLink('urlPetFriendly', [
                    'label' => 'URL del de petFriendly',
                    'type' => 'page_link',
                    'instructions' => '',
                    'post_type' => ['page'],
                    'taxonomy' => [],
                    'allow_null' => 0,
                    'allow_archives' => 0,
                    'multiple' => 0,
                ])
                ->addImage('imagenUnoPet', [
                    'label' => 'Imagen uno de pet friendly',
                    'instructions' => 'Agregar una imagen con medida minima de 188x190 y maxima de 376x380 y no supere los 100Kb en formato jpg, png, webp o gif',
                    'min_width' => '188',
                    'min_height' => '190',
                    'min_size' => '',
                    'max_width' => '376',
                    'max_height' => '380',
                    'max_size' => '100KB',
                    'mime_types' => 'jpg, png, webp, gif',
                ])
                ->addImage('imagenDosPet', [
                    'label' => 'Imagen dos de pet friendly',
                    'instructions' => 'Agregar una imagen con medida minima de 200x243 y maxima de 400x243 y no supere los 100Kb en formato jpg, png, webp o gif',
                    'min_width' => '200',
                    'min_height' => '243',
                    'min_size' => '',
                    'max_width' => '400',
                    'max_height' => '486',
                    'max_size' => '100KB',
                    'mime_types' => 'jpg, png, webp, gif',
                ])
            ->addTab('gridDestacados', [
                'label' => 'Grid destacados',
                'placement' => 'left',
            ])
                ->addImage('imagenFondoGridDestacados', [
                    'label' => 'Imagen Fondo destacado uno',
                    'instructions' => 'Agregar una imagen con medida minima de 1135x569 y maxima de 2270x1138 y no supere los 300Kb en formato jpg, png, webp o gif',
                    'min_width' => '1135',
                    'min_height' => '569',
                    'min_size' => '',
                    'max_width' => '2270',
                    'max_height' => '1138',
                    'max_size' => '300KB',
                    'mime_types' => 'jpg, png, webp, gif',
                ])
                ->addRepeater('destacadosGrid', [
                    'label' => 'Cuadricula de destacados ',
            
                ])
                    ->addImage('imagenGridDestacado', [
                        'label' => 'Imagen destacado uno',
                    ])
                    ->addPageLink('urlGridDestacado', [
                        'label' => 'URL destacado uno',
                        'type' => 'page_link',
                        'instructions' => '',
                        'post_type' => [],
                        'taxonomy' => [],
                        'allow_null' => 0,
                        'allow_archives' => 0,
                        'multiple' => 0,
                    ])
                    ->addSelect('estiloGrid', [
                        'label' => 'Estilo del grid',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => [],
                        'wrapper' => [
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ],
                        'choices' => [
                            'destacado-dos' => 'destacado-dos',
                            'destacado-uno' => 'destacado-uno',
                            'video-uno' => 'video-uno',
                            'video-dos' => 'video-dos',
                            'video-tres' => 'video-tres',
                            'video-cuatro' => 'video-cuatro',
                            'reproductor-video' => 'reproductor-video',
                            'palomitas' => 'palomitas', 
                        ],
                        'default_value' => [],
                        'allow_null' => 0,
                        'multiple' => 0,
                        'ui' => 0,
                        'ajax' => 0,
                        'return_format' => 'value',
                        'placeholder' => '',
                    ])
                ->endRepeater()
                ->addText('claimDestacados', [
                    'label' => 'Claim para los destacados',
                ])
                ->addTextArea('svgDestacados', [
                    'label' => 'Agregar el codigo SVG el camino de destacados',
                    'instructions' => 'Agregar el codigo del SVG para el camino',
                ])
            ->addTab('seccionInfo', [
                    'label' => 'Seccion Info',
                    'placement' => 'left',
                ])
                ->addImage('imagenFondoInfo', [
                    'label' => 'Imagen fondo sección info',
                    'instructions' => 'Agregar una imagen con medida minima de 1135x569 y maxima de 2270x1138 y no supere los 300Kb en formato jpg, png, webp o gif',
                    'min_width' => '1135',
                    'min_height' => '569',
                    'min_size' => '',
                    'max_width' => '2270',
                    'max_height' => '1138',
                    'max_size' => '300KB',
                    'mime_types' => 'jpg, png, webp, gif',
                ])
                ->addText('tituloSecInfo', [
                    'label' => 'Titulo seccion Info',
                ])
                ->addPageLink('urlSeccionInfo', [
                    'label' => 'URL destacado uno',
                    'type' => 'page_link',
                    'instructions' => '',
                    'post_type' => ['page'],
                    'taxonomy' => [],
                    'allow_null' => 0,
                    'allow_archives' => 0,
                    'multiple' => 0,
                ])
                ->addImage('imagenInfo', [
                    'label' => 'Imagen Para info',
                    'instructions' => 'Agregar una imagen con medida minima de 1268x1100 y maxima de 2436x2200 y no supere los 800Kb en formato jpg, png, webp o gif',
                    'min_width' => '1268',
                    'min_height' => '1100',
                    'min_size' => '',
                    'max_width' => '2436',
                    'max_height' => '2200',
                    'max_size' => '800KB',
                    'mime_types' => 'jpg, png, webp, gif',
                ])
                ->addTab('iconosRestaurantes', [
                    'label' => 'Iconos especiales',
                    'placement' => 'left',
                ])
                    ->addImage('iconoCeliaco', [
                        'label' => 'Imagen icono celiaco',
                        'instructions' => 'Agregar una imagen con medida de 335x335 y no supere los 100Kb en formato jpg, png, webp o gif',
                        'min_width' => '335',
                        'min_height' => '335',
                        'min_size' => '',
                        'max_width' => '335',
                        'max_height' => '335',
                        'max_size' => '800KB',
                        'mime_types' => 'png, webp, gif',
                    ])
                    ->addImage('iconoVegano', [
                        'label' => 'Imagen icono vegano',
                        'instructions' => 'Agregar una imagen con medida de 335x335 y no supere los 100Kb en formato jpg, png, webp o gif',
                        'min_width' => '335',
                        'min_height' => '335',
                        'min_size' => '',
                        'max_width' => '335',
                        'max_height' => '335',
                        'max_size' => '800KB',
                        'mime_types' => 'png, webp, gif',
                    ])
                    ->addImage('iconoVegetariano', [
                        'label' => 'Imagen icono vegetariano',
                        'instructions' => 'Agregar una imagen con medida de 335x335 y no supere los 100Kb en formato jpg, png, webp o gif',
                        'min_width' => '335',
                        'min_height' => '335',
                        'min_size' => '',
                        'max_width' => '335',
                        'max_height' => '335',
                        'max_size' => '800KB',
                        'mime_types' => 'png, webp, gif',
                    ])
                    ->addTab('fondos', [
                        'label' => 'Fondos secciones',
                        'placement' => 'left',
                    ])
                    ->addImage('fondoXmarket', [
                        'label' => 'Imagen para un fondo X MArket',
                        'instructions' => 'Agregar una imagen con medida minima de 1135x569 y maxima de 2270x1138 y no supere los 300Kb en formato jpg, png, webp o gif',
                        'min_width' => '1135',
                        'min_height' => '569',
                        'min_size' => '',
                        'max_width' => '2270',
                        'max_height' => '1138',
                        'max_size' => '300KB',
                        'mime_types' => 'jpg, png, webp, gif',
                    ])
                    ->addImage('fondoShop', [
                        'label' => 'Imagen para un fondo Shop',
                        'instructions' => 'Agregar una imagen con medida minima de 1135x569 y maxima de 2270x1138 y no supere los 300Kb en formato jpg, png, webp o gif',
                        'min_width' => '1135',
                        'min_height' => '569',
                        'min_size' => '',
                        'max_width' => '2270',
                        'max_height' => '1138',
                        'max_size' => '300KB',
                        'mime_types' => 'jpg, png, webp, gif',
                    ])
                    ->addImage('fondoEvento', [
                        'label' => 'Imagen para un fondo Evento',
                        'instructions' => 'Agregar una imagen con medida minima de 1135x569 y maxima de 2270x1138 y no supere los 300Kb en formato jpg, png, webp o gif',
                        'min_width' => '1135',
                        'min_height' => '569',
                        'min_size' => '',
                        'max_width' => '2270',
                        'max_height' => '1138',
                        'max_size' => '300KB',
                        'mime_types' => 'jpg, png, webp, gif',
                    ])
                    ->addImage('fondoTaste', [
                        'label' => 'Imagen para un fondo Taste',
                        'instructions' => 'Agregar una imagen con medida minima de 1135x569 y maxima de 2270x1138 y no supere los 300Kb en formato jpg, png, webp o gif',
                        'min_width' => '1135',
                        'min_height' => '569',
                        'min_size' => '',
                        'max_width' => '2270',
                        'max_height' => '1138',
                        'max_size' => '300KB',
                        'mime_types' => 'jpg, png, webp, gif',
                    ])
                    ->addImage('fondoOcioDeporte', [
                        'label' => 'Imagen para un fondo Ocio y Deporte',
                        'instructions' => 'Agregar una imagen con medida minima de 1135x569 y maxima de 2270x1138 y no supere los 300Kb en formato jpg, png, webp o gif',
                        'min_width' => '1135',
                        'min_height' => '569',
                        'min_size' => '',
                        'max_width' => '2270',
                        'max_height' => '1138',
                        'max_size' => '300KB',
                        'mime_types' => 'jpg, png, webp, gif',
                    ])
    ->addTab('newsletter', [
        'label' => 'Pop Up Nesletter',
        'placement' => 'left',
        ])
                    ->addTextarea('svgCerrar', [
                        'label' => 'Svg Boton cerrar',
                    ])
                    ->addImage('imgNewletter', [
                        'label' => 'Imagen para la parte superior del formulario',
                        'instructions' => 'Agregar imagen formato jpg, png, webp o gif',
                        'min_width' => '',
                        'min_height' => '',
                        'min_size' => '',
                        'max_width' => '',
                        'max_height' => '',
                        'max_size' => '',
                        'mime_types' => 'jpg, png, webp, gif',
                    ])
                    ->addText('titPopUp', [
                        'label' => 'Titulo Par el formulario formulario',
                    ])
                    ->addTextarea('descripcionPopup', [
                        'label' => 'Descripcion del pop up',
                    ])
                    ->addText('sortCode', [
                        'label' => 'Short Code de formulario',
                    ])
                ;
        
        return $inicio->build();
       
    }
}
