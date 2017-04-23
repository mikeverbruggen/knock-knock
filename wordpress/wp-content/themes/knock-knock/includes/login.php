<?php
function require_login()
{
    if (!is_user_logged_in()) {
        auth_redirect();
    }
}

function my_login_logo_url()
{
    return home_url();
}
add_filter('login_headerurl', 'my_login_logo_url');

function my_login_logo_url_title()
{
    return 'Klopvaart Intranet';
}
add_filter('login_headertitle', 'my_login_logo_url_title');

function my_login_stylesheet()
{
    wp_enqueue_style('custom-login', get_stylesheet_directory_uri() . '/style-login.css');
}
add_action('login_enqueue_scripts', 'my_login_stylesheet');
