<?php

//adding custom post type "Entreprises"

function entreprises_custom_post_type() {
    register_post_type('entreprise', 
    array(
        'rewrite' => array('slug' => 'entreprises'),//this changes the url of our custom post type
        'labels' => array(//this array changes the value of the buttons and names when creating a new project
            'name' => 'Entreprises',
            'singular_name' => 'Entreprise',
            'add_new_item' => 'Ajouter une nouvelle entreprise',
            'edit_item' => 'Edit Entreprise'
        ),
        'menu-icon' => 'dashicons-admin-multisite',//this adds an icon from https://developer.wordpress.org/resource/dashicons
        'public' => true,// this allows this kind of post to be seen by unlogged users
        'has_archive' => true,//this allows to filter post by date, author etc
        'supports' => array(//this is what is supported by this custom post type
            'title', 'thumbnail', 'editor', 'excerpt', 'comments'
        )//voir ce qu'il faut garder ou pas
    )
    );
}

add_action('init', 'entreprises_custom_post_type');
