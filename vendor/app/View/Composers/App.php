<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName' => $this->siteName(),
            'primaryNavigation' => $this->primaryNavigation(),
            'footerNavigation' => $this->footerNavigation(),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }

    /**
     * Primary Nav Menu arguments
     * @return array
     */
    public function primaryNavigation()
    {
        $args = array(
            'theme_location' => 'primary_navigation',
            'container'  => '',
            'container_class' => '',
            'menu_class' => 'navbar-nav',
            'depth' => 4,
            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
            'walker' => new \App\wp_bootstrap5_navwalker()
        );
        return $args;
    }

    public function footerNavigation()
    {
        $args = array(
            'theme_location' => 'footer_navigation',
            'container'  => ' ',
            'container_class' => '',
            'menu_class' => '',
            'depth' => 4,
            'fallback_cb' => ' ',
            'walker' => new \App\wp_bootstrap5_navwalker()
        );
        return $args;
    }
}

