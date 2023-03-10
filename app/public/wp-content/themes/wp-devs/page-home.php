<?php get_header(); ?>
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section class="hero">
                        Hero
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
                                'category_not_in'=> array (1),/* n??o quero que apare??a a categoria com o id 1 */
                            );                       
                            $postlist = new WP_Query($args); /*  para chamar a query do args preciso de um novo argumento e passar como parametro a 
                            query, e depois colocar dentro de uma vari??vel no caso postList */
                            
                                /* aqui passei a variavel j?? com o filtro do query e estou comparando j?? com o filtro utilizando a 
                                vari??vel*/
                                if( $postlist->have_posts() ):/* Se existir post */
                                    while( $postlist->have_posts() ) : $postlist->the_post(); /* enquanto houver post no post  */
                                    ?>
                                    <article class="latest-news">
                                        <a href = "<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?> </a> <!-- disponibiliza a imagem destacada
                                         e faz ela ficar no tamanho medium devido o parametro -->
                                            <h3> <a href="<?php the_title(); ?>"></a> </h3>
                                            <div class="meta-info">
                                            <p>
                                                by <span><?php the_author_posts_link(); ?></span> 
                                                Categories: <span><?php the_category( ' ' ); ?></span>
                                                Tags: <?php the_tags( '', ', ' ); ?>
                                            </p>
                                            <p><span><?php echo get_the_date(); ?></p>
                                            </div>
                                        <?php the_excerpt(); ?>
                                    </article>
                                    <?php
                                    endwhile;
                                    wp_reset_postdata(); /*  isso garante que a consulta que ela vai fazer n??o vai afetar a consulta principal
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