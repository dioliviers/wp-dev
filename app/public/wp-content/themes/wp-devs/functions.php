<?php
    function wpdevs_load_scripts(){
        wp_enqueue_style('wpdevs-style', get_stylesheet_uri(), array(), filemtime(  
        get_template_directory().'/style.css'),'all'); /* Carrega a pasta style.css */
        wp_enqueue_style('google-font','https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,700;1,400&display=swap', array(), null ); /* carrega fonte */
        wp_enqueue_script('dropdown', get_template_directory_uri() .'/js/dropdown.js',array(),'1.0',true); /*Nome pro script, pegar a url  e caminho, arrau (fila), versão */

    }
add_action( 'wp_enqueue_scripts','wpdevs_load_scripts' );/* nome do hook, ação do hook */

register_nav_menus( /* registrando Menu */
    array(
        'wp_devs_main_menu' => 'Main menu',  /* primeiro SLUG segundo NOME NO PAINEL */
        'wp_devs_footer_menu' => 'Footer Menu',
    )
);
