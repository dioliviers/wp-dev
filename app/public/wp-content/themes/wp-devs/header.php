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
                        <?php 
                            if(has_custom_logo()){ /*  se tiver foto do logo  */
                                the_custom_logo(); /*  exibe logo */
                            }else{ /* senão */
                                ?>
                                    <a href="<?php echo home_url('/'); ?>"><span> <?php bloginfo ('name'); ?></a> <!-- ele vai pra home e exibe o nome da home usando 
                                o bloginfo  -->
                                <?php
                                
                            }
                             
                        ?><!--  aqui chama o logo através do theme_support para o logo -->
                    </div>
                    <div class="searchbox">
                        <?php get_search_form(); ?>
                             <!-- insere um campo de busca -->
                    </div>
                </div>
            </section>
              <?php if( !is_page('ladding-page')) /* se NAO for uma ladding page ele vai exibir o heade se for uma ladding page ele retorna false ou seja não seja exibido*/
            ?>
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
        <?php endif; ?/>
        </header>