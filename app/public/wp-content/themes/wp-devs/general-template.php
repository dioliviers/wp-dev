<?php
/*
Template Name: General Template
*/

/* criei um modelo padrão de template que pode ser replicado em qualquer pagina que chamar o template (general) */
?>
<?php get_header(); ?>

<img src="<?php  header_image();?>" height="<?php echo get_custom_header()-> height; ?>" 
width="<?php echo get_custom_header() -> width; ?>" alt="" /> <!-- após adicionar as imagens em aparencia -> header, adicionamos
As imagens que irão ficar randomicas e logo após com essa chamada acima ele pega o header_image , coloca o height definido na function
 e exibe com o echo o tamanho pre definido e a larguda pre definida com o width -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="container">
                        <div class="general-template">
                            <?php 
                                if( have_posts() ):
                                    while( have_posts() ) : the_post();
                                    ?>
                                        <article>
                                            <h1><?php the_title(); ?></h1>
                                            <?php the_content(); ?>
                                        </article>
                                    <?php
                                    endwhile;
                                else: ?>
                                    <p>Nothing yet to be displayed!</p>
                            <?php endif; ?>                                
                        </div>
                    </div>
                </main>
            </div>
        </div>
<?php get_footer(); ?>