<?php
function bootstrapbase() {
    
    /*---------------------------------------------------------------------------------
    -------------------------ÚLTIMA VERSIÓN ESTABLE DE JQUERY--------------------------
    -----------------------------------------------------------------------------------*/

    $url_jquery = 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js';
    $test_url_jquery = @fopen($url, 'r');

    if ($test_url_jquery !== false) {
        function load_external_jQuery(){
            wp_deregister_script('jquery');
            wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js',true,'3.4.1',true);
            wp_enqueue_script('jquery');
        }

        add_action('wp_enqueue_scripts', 'load_external_jQuery');
    
    } else {
        function load_local_jQuery(){
            wp_deregister_script('jquery');
            wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js',true,'3.4.1',true);
            wp_enqueue_script('jquery');
        }

        add_action('wp_enqueue_scripts', 'load_local_jQuery');
    }

    
	/*---------------------------------------------------------------------------------
    --------------------------------ESTILOS UTILIZADOS---------------------------------
    -----------------------------------------------------------------------------------*/

    wp_register_style('Bootstrap4-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', true,'4.3.1');
    wp_enqueue_style('Bootstrap4-css');
    
	wp_register_style('owl-carousel', get_template_directory_uri() . '/assets/assets/css/owl.carousel.min.css', true, '2.3.4');
    wp_enqueue_style('owl-carousel');
    
	wp_register_style('owl-theme', get_template_directory_uri() . '/assets/assets/css/owl.theme.default.min.css', true, '2.3.4');
    wp_enqueue_style('owl-theme');
    
	wp_register_style('fancybox3-css', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css', true, '3.5.7');
    wp_enqueue_style('fancybox3-css');
    
    wp_register_style('Fontawesome-css','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css', true, '5.11.2');
    wp_enqueue_style('Fontawesome-css');

    wp_register_style('main-css', get_template_directory_uri() . '/assets/css/main.css', false, null);
    wp_enqueue_style('main-css');
    

	/*---------------------------------------------------------------------------------
    --------------------------------SCRIPTS UTILIZADOS---------------------------------
    -----------------------------------------------------------------------------------*/

    wp_register_script( 'Bootstrap4-js','https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', true,'4.3.1',true );
    wp_enqueue_script('Bootstrap4-js');

	wp_register_script('Popper-js','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', true,'1.4.17',true );
    wp_enqueue_script('Popper-js');    
    
    wp_register_script('owl-carousel2', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', true, '2.3.4', true);
    wp_enqueue_script('owl-carousel2');
    
	wp_register_script('fancybox3-js', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', false, '3.5.7', true);
    wp_enqueue_script('fancybox3-js');

} 
add_action( 'wp_enqueue_scripts', 'bootstrapbase' );
?>