/* Funciones y Definiciones */
<?php

if(!function_exists('bootstrapbase_setup')):

    function bootstrapbase_setup() {

        //La etiqueta <title> es definida con el administrador de Wordpress
        add_theme_support( 'title-tag' );

        //Agregamos medidas en px para los Post-thumbnails
        add_theme_support( 'post-thumbnails' );
		update_option('thumbnail_size_w', 170);
        update_option('medium_size_w', 470);
        update_option('large_size_w', 970);

        // Definimos los menus a editar con el administrador de Wordpress.
		register_nav_menus(
			array(
				'header-menu' => __( 'Primary', 'bootstrapbase' ),
				'footer-menu' => __( 'Footer Menu', 'bootstrapbase' ),
				'social-menu' => __( 'Social Links Menu', 'bootstrapbase' ),
			)
        );
        
        // Definimos el logotipo a editar con el administrador de Wordpress.
        add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);
    }

endif;

?>