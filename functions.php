<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (! file_exists($composer = __DIR__.'/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

try {
    \Roots\bootloader();
} catch (Throwable $e) {
    wp_die(
        __('You need to install Acorn to use this theme.', 'sage'),
        '',
        [
            'link_url' => 'https://docs.roots.io/acorn/2.x/installation/',
            'link_text' => __('Acorn Docs: Installation', 'sage'),
        ]
    );
}

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['setup', 'filters'])
    ->each(function ($file) {
        if (! locate_template($file = "app/{$file}.php", true, true)) {
            wp_die(
                /* translators: %s is replaced with the relative file path */
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });

/*
|--------------------------------------------------------------------------
| Enable Sage Theme Support
|--------------------------------------------------------------------------
|
| Once our theme files are registered and available for use, we are almost
| ready to boot our application. But first, we need to signal to Acorn
| that we will need to initialize the necessary service providers built in
| for Sage when booting.
|
*/

add_theme_support('sage');


/* voy a crear un hook para eliminr las promociones */

if ( ! wp_next_scheduled( 'borrar_promociones_expiradas' ) ) {
  wp_schedule_event( time(), 'daily', 'borrar_promociones_expiradas' );
}


add_action( 'borrar_promociones_expiradas', 'eliminar_promociones_fecha_vencida' );

function eliminar_promociones_fecha_vencida() {
  $hoy = date('Ymd'); // Formato ACF de tipo date

  $args = [
    'post_type'      => 'promociones',
    'post_status'    => ['publish', 'draft'],
    'posts_per_page' => -1,
    'meta_query'     => [
      [
        'key'     => 'fecha_final',
        'value'   => $hoy,
        'compare' => '<=',
        'type'    => 'DATE',
      ],
    ],
  ];

  $query = new WP_Query( $args );

  if ( $query->have_posts() ) {
    foreach ( $query->posts as $post ) {
      wp_trash_post( $post->ID, true ); // true = eliminación permanente
    }
  }

   wp_reset_postdata();
}





add_action('init', 'test_eliminar_promociones_expiradas');

function test_eliminar_promociones_expiradas() {
  if (isset($_GET['borrar_promos']) && current_user_can('administrator')) {
    eliminar_promociones_fecha_vencida();
  }
}