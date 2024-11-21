<?php 
    $data = array(
        'name'          => _x('Datas', 'post type general name'),
        'singular_name' => _x('Data', 'post type singular name'),
        'menu_name'     => 'Dados',
    );
    $args = array(
        'labels'            => $data,
        'description'       => 'Custom Post for data',
        'public' => true,
        'has_archive' => true,
        'show_in_nav_menus' => true,
        'supports' => array('title'),
        'menu_icon' => 'dashicons-universal-access',
    );
    register_post_type('data', $args);

    $banner = array(
        'name'          => _x('Banners', 'post type general name'),
        'singular_name' => _x('Banner', 'post type singular name'),
        'menu_name'     => 'Banners',
    );
    $args = array(
        'labels'            => $banner,
        'description'       => 'Custom Post for banners',
        'public' => true,
        'has_archive' => true,
        'show_in_nav_menus' => true,
        'supports' => array('title', 'revisions', 'thumbnail'),
        'menu_icon' => 'dashicons-images-alt',
    );
    register_post_type('Banners', $args);

    $news = array(
        'name'          => _x('Notícias', 'post type general name'),
        'singular_name' => _x('Noticia', 'post type singular name'),
        'menu_name'     => 'Noticias',
    );
    $args = array(
        'labels'            => $news,
        'description'       => 'Custom Post for noticias',
        'public' => true,
        'has_archive' => true,
        'show_in_nav_menus' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-welcome-widgets-menus',
    );
    register_post_type('noticias', $args);

    $president = array(
        'name'          => _x('Ex Presidentes', 'post type general name'),
        'singular_name' => _x('Ex Presidente', 'post type singular name'),
        'menu_name'     => 'Ex Presidentes',
    );
    $args = array(
        'labels'            => $president,
        'description'       => 'Custom Post for ex Presidentes',
        'public' => true,
        'has_archive' => true,
        'show_in_nav_menus' => true,
        'supports' => array('title', 'thumbnail'),
        'menu_icon' => 'dashicons-buddicons-buddypress-logo',
    );
    register_post_type('expresident', $args);


    flush_rewrite_rules();