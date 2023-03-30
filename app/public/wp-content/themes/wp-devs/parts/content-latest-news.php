<article class="latest-news">
    <?php if ( has_post_thumbnail() ): ?> <!-- aqui a imagem destacada do post só vai aparecer e ela tiver sido inserida pelo usuário do site -->
        <a href = "<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?> </a> <!-- disponibiliza a imagem destacada
        e faz ela ficar no tamanho medium devido o parametro -->
    <?php endif; ?>
        <h3> <a href="<?php the_title(); ?>"></a> </h3>
        <div class="meta-info">
        <p>
            by <span><?php the_author_posts_link(); ?></span> 
            <?php if (has_category()): ?>
                <p>Categories: <?php the_category( ' ' ); ?></p>
            <?php endif; ?>
            <?php if (has_tag()): ?>
                <p>Tags: <?php the_tags( '', ', '); ?></p>
            <?php endif; ?>
        </p>
        <p><span><?php echo get_the_date(); ?></p>
        </div>
    <?php the_excerpt(); ?>
</article>