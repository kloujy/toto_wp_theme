<?php 
if ( ! function_exists( "toto_setup" ) ) {
    function toto_setup() {
        add_theme_support( "title-tag" );
        add_theme_support( "post-thumbnails" );
        register_nav_menus([
            "primary" => esc_html__( "nav bar", "toto" )
        ]);
        /* #TODO à tester
        if ( is_customize_preview() ) {
            require get_template_directory() . "/inc/starter_content.php";
            add_theme_support( "starter-content", $starter_content );
        }
        */
    }
}
add_action( "after_setup_theme", "toto_setup" );

function toto_scripts() {
    wp_enqueue_style( "toto-style", get_template_directory_uri() . "/style.css", array("toto-bootstrap"), wp_get_theme()->get( "Version" ));
    wp_enqueue_style( "toto-bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css", array(), "5.1.3");
    wp_enqueue_script( "toto-bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js", array(), "5.1.3", true);     
}
add_action( "wp_enqueue_scripts", "toto_scripts" );

function toto_widget(){
    register_sidebar([
        "name" => "toto footer",
        "id" => "toto-footer-1",
        "description" => "toto footer",
        "before_title" => "",
        "after_title" => "",
        "before_widget" => "",
        "after_widget" => ""
    ]);
}
add_action( "widgets_init", "toto_widget" );
?>