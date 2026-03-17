<?php
// custom post type 
function cvd_custom_post()
{
    $front_page_card_label = array(
        'name' => __('Front_Page_Cards', 'textdomain'),
        'singular_name' => __('Front_Page_Card', 'textdomain'),
        'add_new' => __('Add Front_Page_Card', 'textdomain'),
        'edit_item' => __('Edit Front_Page_Card', 'textdomain'),
        'add_new_item' => __('Add New Front_Page_Card', 'textdomain'),
        'all_items' => __('Front_Page_Cards', 'textdomain')
    );

    $front_page_cards_args = array(
        'labels' => $front_page_card_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail')
    );

    $mission_card_label = array(
        'name' => __('Mission_Cards', 'textdomain'),
        'singular_name' => __('Mission_Card', 'textdomain'),
        'add_new' => __('Add Mission_Card', 'textdomain'),
        'edit_item' => __('Edit Mission_Card', 'textdomain'),
        'add_new_item' => __('Add New Mission_Card', 'textdomain'),
        'all_items' => __('Mission_Cards', 'textdomain')
    );

    $mission_cards_args = array(
        'labels' => $mission_card_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail')
    );

    register_post_type('mission_cards', $mission_cards_args);
    register_post_type('front_page_cards', $front_page_cards_args);
}

add_action('init', 'cvd_custom_post');