<?php get_header(); ?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="error-404">
                    <header>
                        <h1><?php _e( 'Page not found' , 'wp-devs' );?></h1> <!-- chamando a função _e e passe como parametro o texto a ser traduzido, o segundo parametro é a pasta que ele fara
                    a tradução -->
                        <p><?php _e( 'Unfortunately, the page you tried to reach does not exist on this site.' , 'wp-devs' );?></p><!-- chamando a função _e e passe como parametro o texto a ser traduzido, o segundo parametro é a pasta que ele fara
                    a tradução -->
                    </header>

                    <div class="error">
                        <p><?php _e( 'How about doing a search?' , 'wp-devs' );?></p>
                        <?php get_search_form(); ?> <!-- essa função cria um campo de busca -->
                        <?php 
                        the_widget( 
                            'WP_Widget_Recent_Posts',/* essa função pega como parametro os posts recentes */
                            array(
                                'title' => _e( 'Latest Posts' ),/* pega o titulo dos ultimos posts */
                                'number'    => 3 /*  informa a quantidade de posts a ser exibido */
                            ) 
                        ); 
                        ?>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<?php get_footer(); ?>