<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class petfriendly extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $petfriendly = new FieldsBuilder('petfriendly');

        $petfriendly
        ->setLocation('post_type', '==', 'page')
        ->and('page_template', '==', 'template-petfriendly.blade.php');

        $petfriendly
        ->addTab('seccionFondos', [
            'label' => 'Fondo Pagina',
            'placement' => 'left',
        ])
            ->addImage('fondoPagina', [
                'label' => 'Fondo para las secciones',
                'instructions' => 'Agregar una imagen con medida minima de 1135x569 y maxima de 2270x1138 y no supere los 300Kb en formato jpg, png, webp o gif',
                'min_width' => '1135',
                'min_height' => '569',
                'min_size' => '',
                'max_width' => '2270',
                'max_height' => '1138',
                'max_size' => '300KB',
                'mime_types' => 'jpg, png, webp, gif',
            ])
        ->addTab('seccionPrincipal', [
            'label' => 'Principal',
            'placement' => 'left',
        ])
            ->addImage('imagenHuella', [
                'label' => 'Imagen huella',
            ])
            ->addTextarea('titPrimeraSeccion', [
                'label' => 'Titulo para la primera seccion',
            ])
            ->addImage('imagenPrincipal', [
                'label' => 'Imagen principal de la seccion',
            ])
            ->addImage('imagenEstrellas', [
                'label' => 'Imagen estrellas seccion principal',
            ])
            ->addImage('imagenIndicaciones', [
                'label' => 'Imagen indicaciones seccion principal',
            ])
            ->addImage('imagenIcono', [
                'label' => 'Imagen emoji de perro',
            ])
            ->addImage('imagenHuellas', [
                'label' => 'Imagen para huellas',
            ])
            ->addTextarea('caminoSeccionUno', [
                'label' => 'Camino para la seccion primera',
            ])
        ->addTab('seccionSegubnda', [
            'label' => 'Seccion Dos',
            'placement' => 'left',
        ])
            ->addRepeater('parrafosSeccion', [
                'label' => 'Parrafos para la sección',
                'button_label' => 'Agregar parrafos par esta secciom',
            ])
                ->addTextarea('parrafo', [
                    'label' => 'Parrafo',
                ])
            ->endRepeater()
            ->addImage('imagenSeccionDos', [
                'label' => 'Imagen para la segunda sección',
            ])
            ->addTextarea('caminoSeccionDos', [
                'label' => 'Camino para la seccion segunda',
            ])
            ->addTab('seccionTercera', [
                'label' => 'Seccion Tres',
                'placement' => 'left',
            ])
            ->addTextarea('textoDestacado', [
                'label' => 'Texto para las letras destacadas',
            ])
            ->addTextarea('tituloSeccionTres', [
                'label' => 'Texto titulo destacado',
            ])
            ->addRepeater('listadoPerros', [
                'label' => 'Listado de perros',
                'button_label' => 'Listado de perros potencialmente peligrosos',
            ])
                ->addText('razaPerros', [
                    'label' => 'Raza de perro potencialmente peligroso',
                ])
            ->endRepeater()
            ->addTextarea('tituloRequisitos', [
                'label' => 'Titulo para requisitos',
            ])
            ->addRepeater('listadoRequisitos', [
                'label' => 'Listado de requisitos',
                'button_label' => 'Listado de requisitos',
            ])
                ->addTextarea('itemRequisito', [
                    'label' => 'item de los requisitos',
                ])
            ->endRepeater()
            ->addImage('imagenFinalSeccionTres', [
                'label' => 'Imagen para la tercera seccion',
            ])
                ->addTextarea('caminoSeccionTres', [
                    'label' => 'Camino para la seccion segunda',
                ])

        ->addTab('seccionCuarta', [
            'label' => 'Seccion Cuatro',
            'placement' => 'left',
        ])
            ->addTextarea('titEstablecimientos', [
                'label' => 'Titulo para establecimientos',
            ])
            ->addTextarea('listadoUno', [
                'label' => 'Listado uno de establecimientos',
            ])
            ->addTextarea('listadoDos', [
                'label' => 'Listado dos de establecimientos',
            ])
            ->addTextarea('listadoTres', [
                'label' => 'Listado tres de establecimientos',
            ])
            ->addTextarea('aclaracionEstablecimientos', [
                'label' => 'Aclaración para establecimientos',
            ])
            ->addImage('imagenFinalSeccionCuatro', [
                'label' => 'Imagen para la cuarta seccion',
            ])
            ->addTextarea('caminoSeccionCuatro', [
                'label' => 'Camino para la seccion cuatro',
            ])
            ;

        return $petfriendly->build();
    }
}
