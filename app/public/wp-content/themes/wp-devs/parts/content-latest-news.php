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