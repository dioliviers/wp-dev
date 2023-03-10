<?php
    function wpdevs_load_scripts(){
        wp_enqueue_style('wpdevs-style', get_stylesheet_uri(), array(), filemtime(  
        get_template_directory().'/style.css'),'all'); /* Carrega a pasta style.css */
        wp_enqueue_style('google-font','https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,700;1,400&display=swap', array(), null ); /* carrega fonte */
        wp_enqueue_script('dropdown', get_template_directory_uri() .'/js/dropdown.js',array(),'1.0',true); /*Nome pro script, pegar a url  e caminho, arrau (fila), versão */

    }
add_action( 'wp_enqueue_scripts','wpdevs_load_scripts' );/* nome do hook, ação do hook */


function wpdevs_config(){
    register_nav_menus( /* registrando Menu */
        array(
            'wp_devs_main_menu' => 'Main menu',  /* primeiro SLUG segundo NOME NO PAINEL */
            'wp_devs_footer_menu' => 'Footer Menu',
        )
    );
    $args=array( /* aqui  alteramos o height e o widht do header para o padrão definido abaixo */ 
        'height' => 225,
        'width' => 1920
    );
    add_theme_support('custom-header',$args);/* aqui ele vai adicionar no dashboard em aparencias a opção Header ou seja ele vai habilitar 
    o suporte a imagens no cabeçalho no header*/
    add_theme_support('post-thumbnails');/* adiciona a opção de inserir thumbnails nos posts ( aparece opção pra inserir Imagens destacada em miniaturas) */
    add_theme_support('custom-logo', array ( /* aqui chamamos o suporte ao tema para o logo do site */
        'width' => 200, /* definimos um tamanho para imagem */
        'height' => 110, /* definimos uma altura */
        'flex-height' => true, /* deixa flexivel */
        'flex-width' => true /* deixa flexivel */
        
        /* quando definimos a imagem no painel ela aparecerá nas dimensões configuradas acima */
    ));


};

add_action('after_setup_theme','wpdevs_config',0); /* o '0' define prioridade maxima */
add_action( 'widgets_init', 'wpdevs_sidebars' ); /* dou um nome pro hook e chamo a função para ser exibida */

function wpdevs_sidebars(){ /* crio uma função */
    register_sidebar( /*  chamo a função register_sidebar e passo como parametro em array as informações para inserir no sidebar */
        array( 
            'name'  => 'Blog Sidebar',  /* nome do widget */
            'id'    => 'sidebar-blog', /*  classe */
            'description'   => 'This is the Blog Sidebar. You can add your widgets here.', /* descrição */
            'before_widget' => '<div class="widget-wrapper">',/* cria uma classe antes */
            'after_widget'  => '</div>',/* fecha a classe depois */
            'before_title'  => '<h4 class="widget-title">',/* cria uma classe antes */
            'after_title'   => '</h4>' /* fecha a classe depois */
        )
    );

    register_sidebar( /*  chamo a função register_sidebar e passo como parametro em array as informações para inserir no sidebar */
        array( 
            'name'  => 'Page Sidebar',  /* nome do widget */
            'id'    => 'sidebar-page', /*  classe */
            'description'   => 'This is the Blog Sidebar. You can add your widgets here.', /* descrição */
            'before_widget' => '<div class="widget-wrapper">',/* cria uma classe antes */
            'after_widget'  => '</div>',/* fecha a classe depois */
            'before_title'  => '<h4 class="widget-title">',/* cria uma classe antes */
            'after_title'   => '</h4>' /* fecha a classe depois */
        )
    );

    register_sidebar( /*  chamo a função register_sidebar e passo como parametro em array as informações para inserir no sidebar */
        array( 
            'name'  => 'Sevice 1',  /* nome do widget */
            'id'    => 'services-1', /*  classe */
            'description'   => 'One service area', /* descrição */
            'before_widget' => '<div class="widget-wrapper">',/* cria uma classe antes */
            'after_widget'  => '</div>',/* fecha a classe depois */
            'before_title'  => '<h4 class="widget-title">',/* cria uma classe antes */
            'after_title'   => '</h4>' /* fecha a classe depois */
        )
    );

    register_sidebar( /*  chamo a função register_sidebar e passo como parametro em array as informações para inserir no sidebar */
        array( 
            'name'  => 'Service 2',  /* nome do widget */
            'id'    => 'services-2', /*  classe */
            'description'   => 'two service area', /* descrição */
            'before_widget' => '<div class="widget-wrapper">',/* cria uma classe antes */
            'after_widget'  => '</div>',/* fecha a classe depois */
            'before_title'  => '<h4 class="widget-title">',/* cria uma classe antes */
            'after_title'   => '</h4>' /* fecha a classe depois */
        )
    );

    register_sidebar( /*  chamo a função register_sidebar e passo como parametro em array as informações para inserir no sidebar */
        array( 
            'name'  => 'Service 3',  /* nome do widget */
            'id'    => 'services-3', /*  classe */
            'description'   => 'three service area', /* descrição */
            'before_widget' => '<div class="widget-wrapper">',/* cria uma classe antes */
            'after_widget'  => '</div>',/* fecha a classe depois */
            'before_title'  => '<h4 class="widget-title">',/* cria uma classe antes */
            'after_title'   => '</h4>' /* fecha a classe depois */
        )
    );

}