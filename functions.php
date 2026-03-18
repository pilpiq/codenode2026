<?php
function codenode2026_scripts() {
    wp_enqueue_style (
        'codenode2026-style',
        get_stylesheet_uri()
    );
}
add_action('wp_equeue_style','codenode2026_scripts');

function codenode2026_setup() {
    register_nav_menus(
        array ('main-menu' => 'Menu Principal'
        )
    );
}
add_action('after_setup_theme','codenode2026_setup');