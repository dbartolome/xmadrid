<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class agendatema extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $agendatema = new FieldsBuilder('agendatema');

        $agendatema
        ->setLocation('post_type', '==', 'page')
        ->and('page_template', '==', 'template-eventos.blade.php');

        $agendatema
        ->addTab('eventos', [
            'label' => 'Eventos destacados',
            'placement' => 'left',
        ])
        ->addImage('imagenNoEventos', [
            'label' => 'Imagen cuadno no hay eventos',
            'instructions' => 'Agregar una imagen para cuando no tenemos eventos',
            'min_width' => '1920',
            'min_height' => '1080',
            'min_size' => '',
            'max_width' => '1920',
            'max_height' => '1080',
            'max_size' => '300KB',
            'mime_types' => 'jpg, png, webp, gif',
        ])
        ->addText('urlHistoricoAgenda', [
            'label' => 'Url para el historico de eventos',
        ])
        ;

        return $agendatema->build();
    }
}
