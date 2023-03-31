<footer class="site-footer">
            <div class="container">
                <div class="copyright">
                    <p><?php echo get_theme_mod( 'set_copyright' , 'Copyright X - All rights' );?></p> <!-- chamamos o get_theme_mod para exibir a função que existe no customizer.php
                onde neste arquivo tem as configurações para exibir no customizar do wp as alterações do copyright -->
                </div>
                 <nav class="footer-menu">
                   <?php wp_nav_menu( /* crio o menu para o footer feito no painel */
                        array(
                          'theme_location' => 'wp_devs_footer_menu', /* pega o slug do footern o function */
                          'depth' => '1' /* quantidade de submenu */
                        )
                    );?>
                </nav>
            </div>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body> 
</html>