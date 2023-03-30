<article>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php if ( has_post_thumbnail() ): ?> <!-- aqui a imagem destacada do post só vai aparecer e ela tiver sido inserida pelo usuário do site -->
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array( 275, 275 ) ); ?></a><!--  pega o link da pagina e posta a imagem do the_post_thumbnail em 275x275 -->
    <?php endif; ?>
    <div class="meta-info">
        <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p> <!--  pega a data e o autor do post -->
         <?php if (has_category()): ?> <!-- se tiver categoria ele vai exibir o conteúdo da condicional -->
            <p>Categories: <?php the_category( ' ' ); ?></p> 
         <?php endif; ?>
        <?php if (has_tag()): ?> <!-- se tiver alguma tag, ele vai exibir o conteúdo da condicional -->
            <p>Tags: <?php the_tags( '', ', '); ?></p>
        <?php endif; ?>
    </div>
    <?php the_excerpt(); ?>
</article>