<?php get_header(); ?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="error-404">
                    <header>
                        <h1>Page not found</h1>
                        <p>Unfortunately, the page you tried to reach does not exist on this site.</p>
                    </header>

                    <div class="error">
                        <p>How about doing a search?</p>
                        <?php get_search_form(); ?> <!-- essa função cria um campo de busca -->
                        <?php 
                        the_widget( 
                            'WP_Widget_Recent_Posts',/* essa função pega como parametro os posts recentes */
                            array(
                                'title' => 'Latest Posts',/* pega o titulo dos ultimos posts */
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