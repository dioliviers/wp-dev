<?php get_header(); ?>
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                <section class="hero" style="background-image: url('http://localhost:10004/wp-content/uploads/2023/04/fotografo-com-copia-espaco-1-scaled.jpg')">
                        <div class="overlay" style="min-height: 800px">
                            <div class="container">
                                <div class="hero-items">
                                    <h1>Lorem ipsum dolor</h1>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae voluptates soluta natus aliquid fugit hic laudantium.</p>
                                    <a href="#">Learn More</a> 
                                </div>
                            </div>
                        </div>
                    </section>
                        <section class="services">
                        <h2>Services </h2>
                        <div class="container">
                            <div class="services-item">
                                <?php 
                                    if ( is_active_sidebar('services-1') ) {
                                        dynamic_sidebar( 'services-1' );
                                    }
                                ?>
                            </div>
                            <div class="services-item">
                                <?php 
                                    if ( is_active_sidebar('services-2') ) {
                                        dynamic_sidebar( 'services-2' );
                                    }
                                ?>
                            </div>
                            <div class="services-item">
                                <?php
                                     if ( is_active_sidebar('services-3') ) {
                                        dynamic_sidebar( 'services-3' );
                                    }
                                ?>
                            </div>
                        </div>
                    </section>
                    <section class="home-blog">
                        <h2>latest news </h2>
                        <div class="container">
                            <?php 
                            $args = array( /* pegoo os argumentos do array e coloco em args */
                                'post-type' => 'post', /* tipo de post -> post*/
                                'posts_per_page' => '4,', /* post por pagina 3 */
                                'category_in' => array (7,4,8), /* passo o id das categorias que eu quero pegar  */
                                'category_not_in'=> array (1),/* não quero que apareça a categoria com o id 1 */
                            );                       
                            $postlist = new WP_Query($args); /*  para chamar a query do args preciso de um novo argumento e passar como parametro a 
                            query, e depois colocar dentro de uma variável no caso postList */
                            
                                /* aqui passei a variavel já com o filtro do query e estou comparando já com o filtro utilizando a 
                                variável*/
                                if( $postlist->have_posts() ):/* Se existir post */
                                    while( $postlist->have_posts() ) : $postlist->the_post(); /* enquanto houver post no post  */
                                    get_template_part( 'parts/content' , 'content-latest-news' );
                                    ?>
                                        
                                    <?php
                                    endwhile;
                                    wp_reset_postdata(); /*  isso garante que a consulta que ela vai fazer não vai afetar a consulta principal
                                    do wordpress */
                                else: ?>
                                    <p>Nothing yet to be displayed!</p>
                            <?php endif; ?>                                
                        </div>
                    </section>
                </main>
            </div>
        </div>
<?php get_footer(); ?>