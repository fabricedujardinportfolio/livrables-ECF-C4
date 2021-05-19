<?php
//FUNCTION
//SIDEBAR 
function fabrice_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Primary Sidebar', 'fabrice_widgets' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here to appear in your Primary Sidebar.', 'fabrice_widgets' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title"><span>',
		'after_title'   => '</span></h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Secondary Sidebar', 'fabrice_widgets' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here to appear in your Secondary Sidebar.', 'fabrice_widgets' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title"><span>',
		'after_title'   => '</span></h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Front Page Widget Area', 'fabrice_widgets' ),
		'id'            => 'sidebar-front-page-widget-area',
		'description'   => esc_html__( 'Add widgets here to appear in Front Page Widget Area.', 'fabrice_widgets' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title"><span>',
		'after_title'   => '</span></h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Header Right Widget Area', 'fabrice_widgets' ),
		'id'            => 'header-right',
		'description'   => esc_html__( 'Add widgets here to appear in Header Right Widget Area.', 'fabrice_widgets' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title"><span>',
		'after_title'   => '</span></h2>',
	) );

}

//Function pour rajouter un menu
function fabrice_enregistre_mon_menu() {
    register_nav_menu( 'menu_principal', __( 'Menu principal de Fabrice ECF-4 NC' ) );// ajouter un menu crée dans wordpress dans le header de notre théme
}

// Activation des fonctionalité disponible de wordpress sur le théme
function fabrice_support() {
    add_theme_support('title-tag'); 
    // add_theme_support('post-thumbnails'); // Function servant à appeler la mise en avant de l'image dans un article 
    // Définir la taille des images mises en avant
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size( 2000, 400, true );
    // Définir d'autres tailles d'images
    add_image_size( 'products', 800, 600, false );
    add_image_size( 'square', 256, 256, false );
}

//DEPENDANCE
function fabrice_register_asset(){    
      // Déclarer style.css à la racine du thème    
    
    wp_enqueue_style(
        'bootstrap',
        get_template_directory_uri() . '/css/bootstrap.min.css',
        array(), 
        '5.7'
    );  
  	
    // Déclarer un autre fichier CSS
    wp_enqueue_style( 
        'bootstrap', 
        get_template_directory_uri() . 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js',
        array(), 
        '1.0'
    );
    wp_enqueue_style( 
        'css',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );
}

//ACTION

//Appel de function pour rajouter un menu
add_action( 'widgets_init', 'fabrice_widgets_init' );
add_action( 'init', 'fabrice_enregistre_mon_menu' ); // Rajouter un menu pour créer
add_action( 'after_setup_theme', 'fabrice_support'); // Les support du théme
add_action('wp_enqueue_scripts','fabrice_register_asset'); // Les dépendance
