<?php
add_action('wp_enqueue_scripts', 'childhood_styles'); //add_action - хук, запуск "отложенного" действия
add_action('wp_enqueue_scripts', 'childhood_scripts'); // сейчас это последовательные функции ниже

function childhood_styles() {
    wp_enqueue_style( 'childhood-style', get_stylesheet_uri() ); // динамическое получение файла стилей
};


function childhood_scripts() {
    wp_enqueue_script( 'childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true );
    wp_deregister_script( 'jquery' );
    wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js' );
    wp_enqueue_script('jquery');
}; //получение файла со скриптами, где true - подключение в wp_footer 

add_theme_support( 'custom-logo' ); //Установка поддержки кастомного логотипа
add_theme_support( 'post-thumbnails' ); //Установка поддержки кастомного логотипа
add_theme_support( 'menus' ); // Активация динамического меню

add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
function filter_nav_menu_link_attributes($atts, $item, $args) {
    if ($args->menu === 'Main') {
    	$atts['class'] = 'header__nav-item';

    	if ($item->current) {
		    $atts['class'] .= ' header__nav-item-active';
	    }
    	//print_r($item); //Чтобы узнать уникальный ID категории, к которой будет привязываться активный класс меню
    	if( $item->ID === 147 && ( in_category( 'soft_toys' ) || in_category( 'education_toys' ) )) {
		    $atts['class'] .= ' header__nav-item-active';
	    }

    	return $atts;
    }
}
?>