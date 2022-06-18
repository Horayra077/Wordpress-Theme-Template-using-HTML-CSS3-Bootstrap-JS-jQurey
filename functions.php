<?php

function law_management_files()
{
    wp_enqueue_script('bootstrap_js', get_theme_file_uri('/assets/js/bootstrap.bundle.min.js'), NULL, '1.0', true);
    wp_enqueue_script('jquery_js', get_theme_file_uri('/assets/js/jquery-3.6.0.min.js'), NULL, '1.0', true);
    wp_enqueue_script('custom_js', get_theme_file_uri('/assets/js/custom.js'), NULL, '1.0', true);
    wp_enqueue_style('custom_google_fonts', '//fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&family=Mulish:wght@700;800;900&family=Poppins:wght@300;400;500;600;700&display=swap');
    wp_enqueue_style('bootstrap_css', get_theme_file_uri('/assets/css/bootstrap.min.css'));
    wp_enqueue_style('bootstrap_icon', get_theme_file_uri('/assets/css/bootstrap-icons.css'));
    wp_enqueue_style('law_management_style', get_theme_file_uri('/assets/css/style.css'));
}
add_action('wp_enqueue_scripts', 'law_management_files');


add_action('wp_loaded', 'noAdminBar');

function noAdminBar()
{
    show_admin_bar(false);
}
