<footer class="site-footer">
            <div class="container">
                <div class="copyright">
                    <p>Copyright X -- All Rights Reserved</p>
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