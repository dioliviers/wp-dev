
<!-- só pelo nome archive.php o wordpress já identifica que é uma archive OBS:uma archive ela exibe todas as singles e etc  -->
<?php get_header(); ?>

<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="container">
                        <?php the_archive_title('<h1 class= "archive-title">' , ' </h1> '); ?> <!-- Define o titulo da archive -->
                        <?php the_archive_description('<div class="archive-description">' , ' </div>'); ?>
                        <div class="archive-items">
                            <?php 
                                if( have_posts() ):
                                    while( have_posts() ) : the_post();
                                    get_template_part( 'parts/content-archive' ); /* o segundo parametro é utilizado sempre que eu quero usar uma parte especifica deste template
                                      ele sempre vai incluir o nome do arquivo que tenha o nome identico ao segundo parametro, caso não exista o -archive ele vai chamar o proximo arquivo do template parts ou seja content.php*/
                                    endwhile;
                                    ?>
                                        <div class="wpdevs-pagination">
                                            <div class="pages new">
                                                <?php previous_posts_link( '<< Newer posts' ); ?>  <!--  essa função cria uma paginação para next -->
                                            </div>
                                            <div class="pages old">
                                                <?php next_posts_link( 'Older posts >>' ); ?> <!--  essa função cria uma paginação para back -->
                                            </div>
                                        </div>
                                    <?php
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