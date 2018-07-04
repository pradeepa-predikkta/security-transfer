<?php

function montserrat_ninzio_child_scripts() {
    wp_enqueue_style( 'montserrat_ninzio-parent-style', get_template_directory_uri(). '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'montserrat_ninzio_child_scripts' );



function my_custom_sidebar() {
    register_sidebar(
        array (
            'name' => 'Sidebar bottom',
            'id' => 'sidebar-bottom',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'my_custom_sidebar' );

?>