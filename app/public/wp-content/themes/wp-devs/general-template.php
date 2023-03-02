<?php
/*
Template Name: General Template
*/

/* criei um modelo padrão de template que pode ser replicado em qualquer pagina que chamar o template (general) */
?>
<?php get_header(); ?>
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
                                            <h2>teste teste teste</h2>
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