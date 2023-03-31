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
    }
add_action( 'customize_register', 'wpdevs_customizer' );  /* aqui fazemos um hook adicionando em customize_register a função (gancho) wpdevs_custmoizer */
?>

