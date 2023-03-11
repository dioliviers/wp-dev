<?php get_header(); ?>

<img src="<?php  header_image();?>" height="<?php echo get_custom_header()-> height; ?>" 
width="<?php echo get_custom_header() -> width; ?>" alt="" /> <!-- após adicionar as imagens em aparencia -> header, adicionamos
As imagens que irão ficar randomicas e logo após com essa chamada acima ele pega o header_image , coloca o height definido na function
 e exibe com o echo o tamanho pre definido e a larguda pre definida com o width -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
            <main id="main" class="site-main">
                    <h1>Blog</h1>
                    <div class="container">
                        <div class="blog-items">
                            <?php 
                                if( have_posts() ): /*  se tiver post */
                                    while( have_posts() ) : the_post(); /* enquanto tiver post no post */
                                    ?>
                                        <article>
                                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> <!--  usei a função para pegar o link e o titulo -->
                                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array( 275, 275 ) ); ?></a>
                                            <!-- peguei o link novamente e no post que tem a imagem destacada defini o tamanho de 275x275 -->
                                            <div class="meta-info">
                                                <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                                                <!-- get_the_date pega a data do post   e o nome do autor com a outra função-->
                                                <p>Categories: <?php the_category( ' ' ); ?></p>
                                                <!-- peguei a categoria com o the the_category  -->
                                                <p>Tags: <?php the_tags( '', ', '); ?></p>
                                                <!--  peguei as tags com the_tags -->
                                            </div>
                                            <?php the_excerpt(); ?>
                                        </article>
                                    <?php
                                    endwhile;
                                else: ?>
                                    <p>Nothing yet to be displayed!</p>
                            <?php endif; ?>                                
                        </div>
                        <?php get_sidebar(); ?>
                    </div>
                </main>
            </div>
        </div>
<?php get_footer(); ?>