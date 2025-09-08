<?php

/**
 * Theme setup.
 */

namespace App;

use App\View\Composers\Post;
use function Roots\bundle;

/**
 * Register the theme assets.
 *
 * @return void
 */
add_action('wp_enqueue_scripts', function () {
    bundle('app')->enqueue();
}, 100);

/**
 * Register the theme assets with the block editor.
 *
 * @return void
 */
add_action('enqueue_block_editor_assets', function () {
    bundle('editor')->enqueue();
}, 100);

/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from the Soil plugin if activated.
     *
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil', [
        'clean-up',
        'nav-walker',
        'nice-search',
        'relative-urls',
    ]);

    /**
     * Disable full-site editing support.
     *
     * @link https://wptavern.com/gutenberg-10-5-embeds-pdfs-adds-verse-block-color-options-and-introduces-new-patterns
     */
    remove_theme_support('block-templates');

    /**
     * Register the navigation menus.
     *
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage'),
        'footer_navigation' => __('Footer Navigation', 'sage'),
    ]);

    /**
     * Disable the default block patterns.
     *
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
     */
    remove_theme_support('core-block-patterns');

    /**
     * Enable plugins to manage the document title.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Enable post thumbnail support.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable responsive embed support.
     *
     * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#responsive-embedded-content
     */
    add_theme_support('responsive-embeds');

    /**
     * Enable HTML5 markup support.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'script',
        'style',
    ]);

    /**
     * Enable selective refresh for widgets in customizer.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#customize-selective-refresh-widgets
     */
    add_theme_support('customize-selective-refresh-widgets');
}, 20);

/**
 * Register the theme sidebars.
 *
 * @return void
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ];

    register_sidebar([
        'name' => __('Primary', 'sage'),
        'id' => 'sidebar-primary',
    ] + $config);

    register_sidebar([
        'name' => __('Footer', 'sage'),
        'id' => 'sidebar-footer',
    ] + $config);
});

add_action('admin_init', function () {
    
   //     remove_post_type_support('page', 'editor');
   

     // If not in the admin, return.
     if ( ! is_admin() ) {
        return;
     }
     // Get the post ID on edit post with filter_input super global inspection.
     $current_post_id = filter_input( INPUT_GET, 'post', FILTER_SANITIZE_NUMBER_INT );
     // Get the post ID on update post with filter_input super global inspection.
     $update_post_id = filter_input( INPUT_POST, 'post_ID', FILTER_SANITIZE_NUMBER_INT );
     // Check to see if the post ID is set, else return.
     if ( isset( $current_post_id ) ) {
        $post_id = absint( $current_post_id );
     } else if ( isset( $update_post_id ) ) {
        $post_id = absint( $update_post_id );
     } else {
        return;
     }
     // Don't do anything unless there is a post_id.
     if ( isset( $post_id ) ) {
        // Get the template of the current post.
        $template_file = get_post_meta( $post_id, '_wp_page_template', true );
        // Example of removing page editor for page-your-template.php template.
        if (  'template-shopping.blade.php' === $template_file || 'template-taste.blade.php' === $template_file || 'template-eventos.blade.php' === $template_file || 'template-ocioydeporte.blade.php' === $template_file || 'template-petfriendly.blade.php' === $template_file || 'template-info.blade.php' === $template_file ) {
            remove_post_type_support('page', 'editor');
            remove_post_type_support( 'page', 'comments');
            remove_post_type_support( 'page', 'author');
            // Other features can also be removed in addition to the editor. See: https://codex.wordpress.org/Function_Reference/remove_post_type_support
        }
     }
});

add_action( 'init', function() {

    register_extended_post_type( 'taste', [
        'labels' => [
            "menu_name" => __( "Taste", "sage" ),
            "all_items" => __( "Todos los restaurantes", "sage" ),
            "add_new" => __( "Añadir nuevo restaurante", "sage" ),
            "add_new_item" => __( "Añadir nuevo restaurante", "sage" ),
            "edit_item" => __( "Editar restaurante", "sage" ),
            "new_item" => __( "Nuevo restaurante", "sage" ),
        ],


        'supports' => [
            "title",
            "thumbnail",
            "excerpt",
        ],
        'edit' => false,
        'block_editor' => true,
        # Add the post type to the site's main RSS feed:
        'show_in_feed' => true,
        'show_in_rest' => true,

        # Show all posts on the post type archive:
        'archive' => [
            'nopaging' => true,
        ],

        # Add the post type to the 'Recently Published' section of the dashboard:
        'dashboard_activity' => true,
        'menu_icon' => 'dashicons-groups',
        # Add some custom columns to the admin screen:
        'admin_cols' => [
            'tiporestaurante' => array(
                'title'    => 'Categoria Restaurante',
                'taxonomy' => 'tastecategory'
            ),
            'logonegro' => array(
                'title'       => 'Logo',
                'meta_key'    => 'logonegro',
                'function' => function() {
                    global $post;
                    $numero = $post->ID;
                    $variableName = get_field('logonegro',$numero);
                    echo '<img src="'.$variableName["url"].'" width="100%">';
                },
            ),
            'descripcion' => array(
                'title'       => 'Descripcion corta',
                'post_field'    => 'post_excerpt',
            ),
            'comidavegano' => array(
                'title'       => 'Comida vegana',
                'meta_key'    => 'comidavegano',
            ),
            'comidavegetariana' => array(
                'title'       => 'Comida vegetariana',
                'meta_key'    => 'comidavegetariana',
            ),
            'menuceliacos' => array(
                'title'       => 'Comida celicaos',
                'meta_key'    => 'menuceliacos',
            ),
            'logonegro' => array(
                'title'       => 'Logo',
                'meta_key'    => 'logonegro',
                'function' => function() {
                    global $post;
                    $numero = $post->ID;
                    $variableName = get_field('logonegro',$numero);
                    echo '<img src="'.$variableName["url"].'" width="100%">';
                },
            ),
            'descripcionlarga' => array(
                'title'       => 'Descripcion completa',
                'meta_key'    => 'descripcion',
            ),
        ],

        # Add some dropdown filters to the admin screen:
        'admin_filters' => [
           
        ],

    ], array(

        # Override the base names used for labels:
        'singular' => 'Taste',
        'plural'   => 'Taste',
        'slug'     => 'taste',

    ) );
	
    register_extended_post_type( 'shop', [
        'labels' => [
            "menu_name" => __( "Shop", "sage" ),
            "all_items" => __( "Todas las tiendas", "sage" ),
            "add_new" => __( "Añadir nuevo tienda", "sage" ),
            "add_new_item" => __( "Añadir nuevo tienda", "sage" ),
            "edit_item" => __( "Editar tienda", "sage" ),
            "new_item" => __( "Nuevo tienda", "sage" ),
        ],


        'supports' => [
            "title",
            "thumbnail",
            "excerpt",
        ],
        'edit' => false,
        'block_editor' => true,
        # Add the post type to the site's main RSS feed:
        'show_in_feed' => true,
        'show_in_rest' => true,
        # Show all posts on the post type archive:
        'archive' => [
            'nopaging' => true,
        ],

        # Add the post type to the 'Recently Published' section of the dashboard:
        'dashboard_activity' => true,
        'menu_icon' => 'dashicons-groups',
        # Add some custom columns to the admin screen:
        'admin_cols' => [
            'tiporestaurante' => array(
                'title'    => 'Categoria Tienda',
                'taxonomy' => 'shopcategory'
            ),
            'logonegro' => array(
                'title'       => 'Logo',
                'meta_key'    => 'logonegro',
                'function' => function() {
                    global $post;
                    $numero = $post->ID;
                    $variableName = get_field('logonegro',$numero);
                    echo '<img src="'.$variableName["url"].'" width="100%">';
                },
            ),
            'descripcion' => array(
                'title'       => 'Descripcion corta',
                'post_field'    => 'post_excerpt',
            ),
            'logonegro' => array(
                'title'       => 'Logo',
                'meta_key'    => 'logonegro',
                'function' => function() {
                    global $post;
                    $numero = $post->ID;
                    $variableName = get_field('logonegro',$numero);
                    echo '<img src="'.$variableName["url"].'" width="100%">';
                },
            ),
            'descripcionlarga' => array(
                'title'       => 'Descripcion completa',
                'meta_key'    => 'descripcion',
            ),
        ],

        # Add some dropdown filters to the admin screen:
        'admin_filters' => [
            'fpersonaje' => array(
                'title'    => 'Personaje',
                'meta_key' => 'personajePrincipal',
            ),
            'ftipoCasting' => array(
                'title'           => 'Tipo Casting',
                'meta_key' => 'tipoCasting',
            ),
        ],

    ], array(

        # Override the base names used for labels:
        'singular' => 'Shop',
        'plural'   => 'Shops',
        'slug'     => 'shop',

    ) );

    register_extended_post_type( 'promociones', [
        'labels' => [
            "menu_name" => __( "Promociones", "sage" ),
            "all_items" => __( "Todas las promociones", "sage" ),
            "add_new" => __( "Añadir nuevo promocion", "sage" ),
            "add_new_item" => __( "Añadir nuevo promocion", "sage" ),
            "edit_item" => __( "Editar promocion", "sage" ),
            "new_item" => __( "Nuevo promocion", "sage" ),
        ],


        'supports' => [
            "title",
            "thumbnail",
            "excerpt",
            "editor",
        ],
        'edit' => false,
        'block_editor' => true,
        # Add the post type to the site's main RSS feed:
        'show_in_feed' => true,

        # Show all posts on the post type archive:
        'archive' => [
            'nopaging' => true,
        ],

        # Add the post type to the 'Recently Published' section of the dashboard:
        'dashboard_activity' => true,
        'menu_icon' => 'dashicons-groups',
        # Add some custom columns to the admin screen:
        'admin_cols' => [
            'duracionpromocion' => array(
                'title'    => 'Duración de la promoción',
                'meta_key' => 'duracion_promo'
            ),
            'descripcion' => array(
                'title'       => 'Descripcion',
                'meta_key'    => 'descripcion',
            ),
            'fecha_final' => array(
                'title'       => 'Fecha Final',
                'meta_key'    => 'fecha_final',
                
                
            ),
            'bannerpromocion' => array(
                'title'       => 'Imagen promoción',
                'meta_key'    => 'bannerimagen',
                'function' => function() {
                    global $post;
                    $numero = $post->ID;
                    $variableName = get_field('bannerimagen',$numero);
                    echo '<img src="'.$variableName["url"].'" width="100%">';
                },
            ),
        ],

        # Add some dropdown filters to the admin screen:
        'admin_filters' => [
            'fpersonaje' => array(
                'title'    => 'Personaje',
                'meta_key' => 'personajePrincipal',
            ),
            'ftipoCasting' => array(
                'title'           => 'Tipo Casting',
                'meta_key' => 'tipoCasting',
            ),
        ],

    ], array(

        # Override the base names used for labels:
        'singular' => 'Promocion',
        'plural'   => 'Promociones',
        'slug'     => 'promocion',

    ) );
   
    register_extended_post_type( 'servicios', [
        'labels' => [
            "menu_name" => __( "Servicios", "sage" ),
            "all_items" => __( "Todas las servicios", "sage" ),
            "add_new" => __( "Añadir nuevo servicio", "sage" ),
            "add_new_item" => __( "Añadir nuevo servicio", "sage" ),
            "edit_item" => __( "Editar servicio", "sage" ),
            "new_item" => __( "Nuevo servicio", "sage" ),
        ],


        'supports' => [
            "title",
            "thumbnail",
            "excerpt",
        ],
        'edit' => false,
        'block_editor' => true,
        # Add the post type to the site's main RSS feed:
        'show_in_feed' => true,

        # Show all posts on the post type archive:
        'archive' => [
            'nopaging' => true,
        ],

        # Add the post type to the 'Recently Published' section of the dashboard:
        'dashboard_activity' => true,
        'menu_icon' => 'dashicons-groups',
        # Add some custom columns to the admin screen:
        'admin_cols' => [
            'tiposervicio' => array(
                'title'    => 'Tipo Servicio',
                'taxonomy' => 'categoriaservicios'
            ),
            'descripcion' => array(
                'title'       => 'Descripcion',
                'meta_key'    => 'descripcion',
            ),
            'iconoservicio' => array(
                'title'       => 'Icono',
                'meta_key'    => 'icono',
                'function' => function() {
                    global $post;
                    $numero = $post->ID;
                    $variableName = get_field('icono',$numero);
                    echo '<img src="'.$variableName["url"].'" width="100%">';
                },
            ),
            
        ],

        # Add some dropdown filters to the admin screen:
        'admin_filters' => [
            'fpersonaje' => array(
                'title'    => 'Personaje',
                'meta_key' => 'personajePrincipal',
            ),
            'ftipoCasting' => array(
                'title'           => 'Tipo Casting',
                'meta_key' => 'tipoCasting',
            ),
        ],

    ], array(

        # Override the base names used for labels:
        'singular' => 'Servicio',
        'plural'   => 'Servicios',
        'slug'     => 'servicios',

    ) );

    register_extended_post_type( 'evento', [
        'labels' => [
            "menu_name" => __( "Eventos", "sage" ),
            "all_items" => __( "Todas las eventos", "sage" ),
            "add_new" => __( "Añadir nuevo evento", "sage" ),
            "add_new_item" => __( "Añadir nuevo evento", "sage" ),
            "edit_item" => __( "Editar evento", "sage" ),
            "new_item" => __( "Nuevo evento", "sage" ),
        ],


        'supports' => [
            "title",
            "thumbnail",
            "editor",
            "excerpt",
        ],
        'edit' => true,
        'block_editor' => true,
        # Add the post type to the site's main RSS feed:
        'show_in_feed' => true,
        'show_in_rest' => true,
        # Show all posts on the post type archive:
        'archive' => [
            'nopaging' => true,
        ],

        # Add the post type to the 'Recently Published' section of the dashboard:
        'dashboard_activity' => true,
        'menu_icon' => 'dashicons-groups',
        # Add some custom columns to the admin screen:
        'admin_cols' => [
            'fechaFinal' => array(
                'title'       => 'Duración',
                'meta_key'    => 'duracion_evento',
            ),
            'descripcionCorta' => array(
                'title'       => 'Descripcion',
                'meta_key'    => 'descripcion_corta',
            ),
            'published' => array(
                'title'      => 'Last Modified',
	            'post_field' => 'post_modified',
		    ),
            'creado' => array(
                'title'      => 'Fecha creacion',
	            'post_field' => 'post_date',
		    ),
            
        ],

        # Add some dropdown filters to the admin screen:
        // 'admin_filters' => [
        //     'fpersonaje' => array(
        //         'title'    => 'Personaje',
        //         'meta_key' => 'personajePrincipal',
        //     ),
        //     'ftipoCasting' => array(
        //         'title'           => 'Tipo Casting',
        //         'meta_key' => 'tipoCasting',
        //     ),
        // ],

    ], array(

        # Override the base names used for labels:
        'singular' => 'Evento',
        'plural'   => 'Eventos',
        'slug'     => 'evento',

    ) );

    register_extended_post_type( 'ocioydeporte', [
        'labels' => [
            "menu_name" => __( "Ocio y Deporte", "sage" ),
            "all_items" => __( "Todas las actividades", "sage" ),
            "add_new" => __( "Añadir nuevo actividad", "sage" ),
            "add_new_item" => __( "Añadir nueva actividado", "sage" ),
            "edit_item" => __( "Editar actividad", "sage" ),
            "new_item" => __( "Nuevo actividad", "sage" ),
        ],


        'supports' => [
            "title",
            "thumbnail",
            "excerpt",
        ],
        'edit' => false,
        'block_editor' => true,
        # Add the post type to the site's main RSS feed:
        'show_in_feed' => true,
        'show_in_rest' => true,
        # Show all posts on the post type archive:
        'archive' => [
            'nopaging' => true,
        ],

        # Add the post type to the 'Recently Published' section of the dashboard:
        'dashboard_activity' => true,
        'menu_icon' => 'dashicons-groups',
        # Add some custom columns to the admin screen:
        'admin_cols' => [
            'ocioydeportecategory' => array(
                'title'    => 'Categoria',
                'taxonomy' => 'ocioydeportecategory'
            ),
            'logo' => array(
                'title'       => 'Logo',
                'meta_key'    => 'logo',
                'function' => function() {
                    global $post;
                    $numero = $post->ID;
                    $variableName = get_field('logo',$numero);
                    echo '<img src="'.$variableName["url"].'" width="100%">';
                },
            ),
            'descripcion' => array(
                'title'       => 'Descripcion corta',
                'post_field'    => 'post_excerpt',
            ),

            'localizacionPlanta' => array(
                'title'       => 'Localizacion',
                'meta_key'    => 'locplanta',
            ),
            'descripcionlarga' => array(
                'title'       => 'Descripcion completa',
                'meta_key'    => 'descripcion',
            ),
        ],

        # Add some dropdown filters to the admin screen:
        // 'admin_filters' => [
        //     'fpersonaje' => array(
        //         'title'    => 'Personaje',
        //         'meta_key' => 'personajePrincipal',
        //     ),
        //     'ftipoCasting' => array(
        //         'title'           => 'Tipo Casting',
        //         'meta_key' => 'tipoCasting',
        //     ),
        // ],

    ], array(

        # Override the base names used for labels:
        'singular' => 'Ocio y Deporte',
        'plural'   => 'Ocio y Deportes',
        'slug'     => 'ocioydeporte',

    ) );

    register_extended_taxonomy( 'tastecategory', 'taste', [

        # Use radio buttons in the meta box for this taxonomy on the post editing screen:
        'public'            => true,
        'show_ui'           => true,
        'hierarchical'      => true,
        'query_var'         => true,
        'exclusive'         => false, # Custom arg  // true means: just one can be selected
        'allow_hierarchy'   => false, # Custom arg  //
        'meta_box'          => null,  # Custom arg  // can be null, 'simple', 'radio', 'dropdown' -> 'radio' and 'dropdown' just allow exclusive choices (will overwrite the set choise), simple has exclusive and multi options
        'dashboard_glance'  => false, # Custom arg  // show or not on dashboard glance
        'checked_ontop'     => null,  # Custom arg  //
        'admin_cols'        => null,  # Custom arg  // added admin columns
        'required'          => false, # Custom arg  //

        # Add a custom column to the admin screen:


    ], array(

        # Override the base names used for labels:
        'singular' => 'Taste Category',
        'plural'   => 'Taste Categories',
        'slug'     => 'tastecategory'

    ) );

    register_extended_taxonomy( 'shopcategory', 'shop', [

        # Use radio buttons in the meta box for this taxonomy on the post editing screen:
        'public'            => true,
        'show_ui'           => true,
        'hierarchical'      => true,
        'query_var'         => true,
        'exclusive'         => false, # Custom arg  // true means: just one can be selected
        'allow_hierarchy'   => false, # Custom arg  //
        'meta_box'          => null,  # Custom arg  // can be null, 'simple', 'radio', 'dropdown' -> 'radio' and 'dropdown' just allow exclusive choices (will overwrite the set choise), simple has exclusive and multi options
        'dashboard_glance'  => false, # Custom arg  // show or not on dashboard glance
        'checked_ontop'     => null,  # Custom arg  //
        'admin_cols'        => null,  # Custom arg  // added admin columns
        'required'          => false, # Custom arg  //

        # Add a custom column to the admin screen:


    ], array(

        # Override the base names used for labels:
        'singular' => 'Shop Category',
        'plural'   => 'Shop Categories',
        'slug'     => 'shopcategory'

    ) );

    register_extended_taxonomy( 'categoriaservicios', 'servicios', [

        # Use radio buttons in the meta box for this taxonomy on the post editing screen:
        'public'            => true,
        'show_ui'           => true,
        'hierarchical'      => true,
        'query_var'         => true,
        'exclusive'         => false, # Custom arg  // true means: just one can be selected
        'allow_hierarchy'   => false, # Custom arg  //
        'meta_box'          => null,  # Custom arg  // can be null, 'simple', 'radio', 'dropdown' -> 'radio' and 'dropdown' just allow exclusive choices (will overwrite the set choise), simple has exclusive and multi options
        'dashboard_glance'  => false, # Custom arg  // show or not on dashboard glance
        'checked_ontop'     => null,  # Custom arg  //
        'admin_cols'        => null,  # Custom arg  // added admin columns
        'required'          => false, # Custom arg  //

        # Add a custom column to the admin screen:


    ], array(

        # Override the base names used for labels:
        'singular' => 'Shop Category',
        'plural'   => 'Shop Categories',
        'slug'     => 'categoriaservicios'

    ) );

    register_extended_taxonomy( 'ocioydeportecategory', 'ocioydeporte', [

        # Use radio buttons in the meta box for this taxonomy on the post editing screen:
        'public'            => true,
        'show_ui'           => true,
        'hierarchical'      => true,
        'query_var'         => true,
        'exclusive'         => false, # Custom arg  // true means: just one can be selected
        'allow_hierarchy'   => false, # Custom arg  //
        'meta_box'          => null,  # Custom arg  // can be null, 'simple', 'radio', 'dropdown' -> 'radio' and 'dropdown' just allow exclusive choices (will overwrite the set choise), simple has exclusive and multi options
        'dashboard_glance'  => false, # Custom arg  // show or not on dashboard glance
        'checked_ontop'     => null,  # Custom arg  //
        'admin_cols'        => null,  # Custom arg  // added admin columns
        'required'          => false, # Custom arg  //

        # Add a custom column to the admin screen:


    ], array(

        # Override the base names used for labels:
        'singular' => 'Ocio y Deporte Category',
        'plural'   => 'Ocio y Deportes Categories',
        'slug'     => 'ocioydeportecategory'

    ) );

    register_extended_taxonomy( 'tipopromocion', 'promociones', [

        # Use radio buttons in the meta box for this taxonomy on the post editing screen:
        'public'            => true,
        'show_ui'           => true,
        'hierarchical'      => true,
        'query_var'         => true,
        'exclusive'         => false, # Custom arg  // true means: just one can be selected
        'allow_hierarchy'   => false, # Custom arg  //
        'meta_box'          => null,  # Custom arg  // can be null, 'simple', 'radio', 'dropdown' -> 'radio' and 'dropdown' just allow exclusive choices (will overwrite the set choise), simple has exclusive and multi options
        'dashboard_glance'  => false, # Custom arg  // show or not on dashboard glance
        'checked_ontop'     => null,  # Custom arg  //
        'admin_cols'        => null,  # Custom arg  // added admin columns
        'required'          => false, # Custom arg  //

        # Add a custom column to the admin screen:


    ], array(

        # Override the base names used for labels:
        'singular' => 'Tipo Promocion',
        'plural'   => 'Tipos Promocion',
        'slug'     => 'tipopromocion'

    ) );
} );


