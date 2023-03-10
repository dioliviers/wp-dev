<?php if( is_active_sidebar( 'sidebar-page' ) ): ?> 
    <aside class="sidebar">
        <?php dynamic_sidebar( 'sidebar-page' ); ?>
    </aside>
<?php endif;
/* condição se o sidebar estiver ativo ele vai colocar em uma classe e exibir o side bar através do id sidebar-page */
/* dynamic sidebar é a função que mostra o conteúdo da área de widgets */