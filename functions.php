
<?php


/* Ajout des emplacements des zones de widget */
function theme_widgets_init() {

// Colonne de droite principale
register_sidebar( array(
'name' =>'Colonne de droite principale',
'id' => 'primary-right-column',
'description' =>'La colonne de droite principale.',
'before_widget' => '<li id="%1$s" class="widget_container %2$s">',
'after_widget' => '</li>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>'
) );

}
add_action( 'widgets_init', 'theme_widgets_init' );

/* Ajout des styles */
function css_styles() {
wp_register_style( 'style-theme',get_template_directory_uri() . '/dist/style-theme.css' );
wp_enqueue_style( 'style-theme' );
}
add_action('wp_enqueue_scripts','css_styles');
