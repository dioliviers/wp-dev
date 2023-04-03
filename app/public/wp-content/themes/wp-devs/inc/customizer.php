<!-- aqui fazemos adicionamos um item para alterar o copyright através do customizar no tema, se clicarmos em customizar 
apresentará um novo item para manipular o copyright -->
<?php
    function wpdevs_customizer( $wp_customize ){/*  essa variavel é um array de objetos */
        //1 copyright Section
        $wp_customize->add_section( /* aqui é um item do objeto wp_customize */
            'sec_copyright',
            array(
                'title' => 'Copyright Settings',
                'description' => 'Copyright Settings'
            )
             /* essa variavel é um objeto da classe wp_customize_manager  que é responsavel pela execução e controle
            do customize*/
        ); 
                $wp_customize->add_setting( /* outro item do objeto wp_customize */
                    'set_copyright',
                    array(
                        'type'=> 'theme_mod',  /* pega o tema */
                        'default' => 'Copyright X - All Rights Reserved', /* deixa como default a frase */
                        'sanitize_callback' => 'sanitize_text_field'
                    )
                );

                $wp_customize->add_control( /* outro item do objeto wp_customize */
                    'set_copyright',
                    array(
                        'label' => 'Copyright Information',/* nome da label */
                        'description' => ' Please, type your copyright here', /* Corresponde ao texto que aparece antes do campo */
                        'section' => 'sec_copyright', /* Corresponde ao nome da sessão que esse controle está ligado, ligação entre o controle e a section*/
                        'type' => 'text' /* tipo do campo texto */
                    )
                );

                // 2 Hero
    $wp_customize->add_section( /* utilizando o wp_customize para estilizar o hero */
        'sec_hero',
        array(
            'title' => 'Hero Section'
        )
    );

        // Title
        $wp_customize->add_setting(   /* utilizando o wp_customize para estilizar o titulo */
            'set_hero_title',
            array(
                'type' => 'theme_mod',
                'default' => 'Please, add some title',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );

        $wp_customize->add_control( /* utilizando o wp_customize para estilizar o titulo */
            'set_hero_title',
            array(
                'label' => 'Hero Title',
                'description' => 'Please, type your here title here',
                'section' => 'sec_hero',
                'type' => 'text'
            )
        );  
        
        // Subtitle
        $wp_customize->add_setting( /* utilizando o wp_customize para estilizar o subtitulo */
            'set_hero_subtitle',
            array(
                'type' => 'theme_mod',
                'default' => 'Please, add some subtitle',
                'sanitize_callback' => 'sanitize_textarea_field'
            )
        );

        $wp_customize->add_control( /* utilizando o wp_customize para estilizar o subtitulo  */
            'set_hero_subtitle',
            array(
                'label' => 'Hero Subtitle',
                'description' => 'Please, type your subtitle here',
                'section' => 'sec_hero',
                'type' => 'textarea'
            )
        );

        // Button Text
        $wp_customize->add_setting(
            'set_hero_button_text',
            array(
                'type' => 'theme_mod',
                'default' => 'Learn More',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );

        $wp_customize->add_control(
            'set_hero_button_text',
            array(
                'label' => 'Hero button text',
                'description' => 'Please, type your hero button text here',
                'section' => 'sec_hero',
                'type' => 'text'
            )
        );

        // Button link
        $wp_customize->add_setting(
            'set_hero_button_link',
            array(
                'type' => 'theme_mod',
                'default' => '#',
                'sanitize_callback' => 'esc_url_raw'/* função de escape */
            )
        );

        $wp_customize->add_control(
            'set_hero_button_link',
            array(
                'label' => 'Hero button link',
                'description' => 'Please, type your hero button link here',
                'section' => 'sec_hero',
                'type' => 'url'
            )
        ); 
        
        // Hero Height
        $wp_customize->add_setting(
            'set_hero_height',
            array(
                'type' => 'theme_mod',
                'default' => 800,
                'sanitize_callback' => 'absint'
            )
        );

        $wp_customize->add_control(
            'set_hero_height',
            array(
                'label' => 'Hero height',
                'description' => 'Please, type your hero height',
                'section' => 'sec_hero',
                'type' => 'number'
            )
        );

        // Hero Background
    $wp_customize->add_setting(
        'set_hero_background',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint' /* função do wp verifica se é inteiro e se é positivo */
        )
    );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize,
        'set_hero_background',
        array(
            'label' => 'Hero Image',
            'section'   => 'sec_hero',
            'mime_type' => 'image'
        )));
            // 3. Blog
$wp_customize->add_section( 
    'sec_blog', 
    array(
        'title' => 'Blog Section'
) );

        // Posts per page
        $wp_customize->add_setting( 
            'set_per_page', 
            array(
                'type' => 'theme_mod',
                'sanitize_callback' => 'absint'
        ) );

        $wp_customize->add_control( 
            'set_per_page', 
            array(
                'label' => 'Posts per page',
                'description' => 'How many items to display in the post list?',			
                'section' => 'sec_blog',
                'type' => 'number'
        ) );

        // Post categories to include
        $wp_customize->add_setting( 
            'set_category_include', 
            array(
                'type' => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field'
        ) );

        $wp_customize->add_control( 
            'set_category_include', 
            array(
                'label' => 'Post categories to include',
                'description' => 'Comma separated values or single category ID',
                'section' => 'sec_blog',
                'type' => 'text'
        ) );	

        // Post categories to exclude
        $wp_customize->add_setting( 
            'set_category_exclude', 
            array(
                'type' => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field' /* essa função pega tudo que é digitado, remove todas as tags
                espaços em branco e converte em entidades html , eu defino que neste campo ele receberá apenas textos*/
        ) );

        $wp_customize->add_control( 
            'set_category_exclude', 
            array(
                'label' => 'Post categories to exclude',
                'description' => 'Comma separated values or single category ID',			
                'section' => 'sec_blog',
                'type' => 'text'
        ) );
    }
add_action( 'customize_register', 'wpdevs_customizer' );  /* aqui fazemos um hook adicionando em customize_register a função (gancho) wpdevs_custmoizer */
?>

