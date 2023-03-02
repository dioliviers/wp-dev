<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo ('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?><!-- sem essa função não funciona nenhuma folha de estilo  -->
</head>
<body <?php body_class();?>>
 
    <div id="page" class="site">
        <header>
            <section class="top-bar">
                <div class="container">
                    <div class="logo">
                        logo
                    </div>
                    <div class="searchbox">
                        search
                    </div>
                </div>
            </section>
              

            <section class="menu-area">
                <div class="container">
                    <nav class="main-menu">
                        <button class="check-button">
                            <div class="menu-icon">
                                <div class="bar1"></div>
                                <div class="bar2"></div>
                                <div class="bar3"></div>
                            </div>
                        </button>
                        <?php wp_nav_menu( 
                            array( 
                                'theme_location' => 'wp_devs_main_menu', /* THEME_LOCATION RECEBE O SLUG DO MENU CRIADO EM FUNCTIONS.PHP */
                                'depth' => 2 /* Restringe a quantidade de submenus 0 = Sem restrição, 1 = 1 sub menu , 2 = 2 submenus */
                            ) 
                        );?> 
                    </nav>
                </div>
            </section>
        </header>