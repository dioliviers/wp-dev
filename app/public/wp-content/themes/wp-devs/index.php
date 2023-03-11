<?php get_header(); ?>

<img src="<?php  header_image();?>" height="<?php echo get_custom_header()-> height; ?>" 
width="<?php echo get_custom_header() -> width; ?>" alt="" /> <!-- após adicionar as imagens em aparencia -> header, adicionamos
As imagens que irão ficar randomicas e logo após com essa chamada acima ele pega o header_image , coloca o height definido na function
 e exibe com o echo o tamanho pre definido e a larguda pre definida com o width -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section class="hero">
                        Hero
                    </section>
                    <section class="services">
                        Services
                    </section>
                    <section class="home-blog">
                        <div class="container">
                            <div class="blog-items">
                                <?php
                                    if( have_posts() ):/* Se existir post */
                                        while( have_posts() ) : the_post(); /* enquanto houver post no post  */
                                        ?>
                                            <article>
                                            <?php the_post_thumbnail('medium');?><!-- insere a imagem destacada ( thumbnail) nos posts  (tamanho padrão definido  pelo wp
                                             se colocarmos o parametro 'thumb' ele fica com 150x150, 'medium'(300x300) e 'large' ou 'full' deixa as imagens definidas em "configurações " padrão do wp
                                                OU podemos passar dentro do parametro um array(valor x valor ) ele também define no valor desejado-->

                                                <h3><?php the_title(); ?></h3><!-- ele exibe o titulo do post -->
                                                  <div class="meta-info">
                                                    <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p><!-- a data e o author obs: sempre um get tem um echo -->
                                                    <p>Categories: <?php the_category( ' ' ); ?></p><!-- a categoria -->
                                                    <p>Tags: <?php the_tags( '', ', '); ?></p> <!--  as tags -->
                                                </div>
                                                <?php the_content(); ?> <!--  exibe o conteúdo do content se houver post -->
                                            </article>
                                        <?php
                                        endwhile;
                                    else: ?>
                                        <p>Nothing yet to be displayed!</p>
                                <?php endif; ?>
                            </div>
                            <?php get_sidebar(); ?> <!-- chama o sidebar (widget) -->
                        </div>
                    </section>
                </main>
            </div>
        </div>
<?php get_footer(); ?>