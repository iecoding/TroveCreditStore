<?php 
/**
 * Theme setup
 */
  function woocatalog_setup() {
    load_theme_textdomain( 'woocatalog' );       // WP textdomain
    add_theme_support( 'automatic-feed-links' );    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'title-tag' );               // WordPress Titles 
    add_theme_support( 'post-thumbnails' );         // WordPress Featured Image
    add_theme_support( 'woocommerce', array(
			'thumbnail_image_width' => 320,
			'single_image_width' 	=> 900,
			'product_grid'			=> array(
				'default_rows'		=> 10,
				'min_rows'			=> 5,
				'max_rows' 			=> 10,
				'default_columns' 	=> 3,
				'min_columns'		=> 2,
				'max_columns' 		=> 5,
			)
        ));
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );
    
    /*
      * Switch default core markup for search form, comment form, and comments
      * to output valid HTML5.
      */
    add_theme_support( 'html5', array(
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'script',
      'style'
    ) );
  }
  add_action( 'after_setup_theme', 'woocatalog_setup', 0 );

/**
 * Enqueue scripts and styles.
 */
  function woocatalog_scripts() {
    # CSS
    ## Vendors
    wp_enqueue_style('tailwind-css', get_theme_file_uri('/build/index.css'), array(), '3.1.4', 'all' ); // Tailwind CSS
    wp_enqueue_style('font-awesome-pro', get_template_directory_uri() . '/assets/css/vendor/font-awesome-pro.min.css', '5.12.0', 'all' );   // Font Awesome Pro.min.css
    wp_enqueue_style('themify-icons', get_template_directory_uri() . '/assets/css/vendor/themify-icons.css', array(), '1.0', 'all' );                       // Font Awesome Pro.min.css
    ## Plugins

    # JS
    ## Vendors
    wp_enqueue_script('tailwind-js', get_theme_file_uri('/build/index.js'), array('wp-element'), '1.0', true );
    wp_enqueue_script('jquery-js', get_theme_file_uri('/assets/js/vendor/jquery-3.6.1.min.js'), array('wp-element', 'tailwind-js'), '3.6.1', true );
    
    ## Plugins
    wp_enqueue_script('jquery-validate', get_theme_file_uri("/assets/js/plugins/jquery.validate.min.js"), array('jquery-js'), null, true);
    wp_enqueue_script('flowbite-js', get_theme_file_uri("/assets/js/plugins/flowbite.min.js"), array('jquery-js'), null, true);

    ## Custom
    wp_enqueue_script('main-js', get_theme_file_uri("/assets/js/main.js"), array('wp-element', 'tailwind-js','jquery-js','jquery-validate'), null, true);

    # AJAX
    wp_localize_script('main-js', 'woocatalog_vars', ['ajaxurl'=>admin_url('admin-ajax.php')] );      
  }
  add_action( 'wp_enqueue_scripts', 'woocatalog_scripts' );

/**
 * Branding backoffice
 */
function login_logo() { 
  ?>
      <style>
          body.login div#login h1 a {
              background-image: url('<?php echo myprefix_get_option( "logo_login" ); ?>');
              background-size: <?php echo myprefix_get_option( 'logo_login_w' ); ?>px <?php echo myprefix_get_option( 'logo_login_h' ); ?>px;
              padding-bottom: 5px;
              width: <?php echo myprefix_get_option( 'logo_login_w' ); ?>px;
              height: <?php echo myprefix_get_option( 'logo_login_h' ); ?>px;
          }
      </style>
  <?php }
add_action( 'login_enqueue_scripts', 'login_logo' );

function logo_url() {
  return get_site_url();
}
add_filter( 'login_headerurl', 'logo_url' );

function login_logo_url_title() {
  return get_bloginfo('name');
}
add_filter( 'login_headertext', 'login_logo_url_title' );

/**
 * Removing woocommerce breadcumbs.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);

// Add specific CSS class by filter to BODY tag.
add_filter( 'body_class', function( $classes ) {
    return array_merge( $classes, array( 'woocatalog-body' ) );
} );

/**
 * Fixing breadcums 
 */
add_filter('wpseo_breadcrumb_links', 'custom_breadcrumb_links');
function custom_breadcrumb_links($links) {

    if ( is_product_category() ) {
        $breadcrumb[] = array(
            'url' => get_permalink( wc_get_page_id( 'shop' ) ),
            'text' => 'Catálogo',
        );

        array_splice( $links, 1, -2, $breadcrumb );
    }

    return $links;
}

/**
 * Adding revisions functionality to product type post
 * 
 */
add_filter( 'woocommerce_register_post_type_product', 'wpse_modify_product_post_type' );

function wpse_modify_product_post_type( $args ) {
     $args['supports'][] = 'revisions';

     return $args;
}

/**
* General options theme
*/
add_action( 'cmb2_admin_init', 'myprefix_register_theme_options_metabox' );
/**
 * Hook in and register a metabox to handle a theme options page and adds a menu item.
 */
function myprefix_register_theme_options_metabox() {

    /**
     * Registers options page menu item and form.
     */
    $cmb_options = new_cmb2_box( array(
        'id'           => 'myprefix_option_metabox',
        'title'        => esc_html__( 'Opciones del sitio', 'nogalia' ),
        'object_types' => array( 'options-page' ),

        /*
         * The following parameters are specific to the options-page box
         * Several of these parameters are passed along to add_menu_page()/add_submenu_page().
         */

        'option_key'      => 'myprefix_options', // The option key and admin menu page slug.
        // 'icon_url'        => 'dashicons-palmtree', // Menu icon. Only applicable if 'parent_slug' is left empty.
        // 'menu_title'      => esc_html__( 'Options', 'myprefix' ), // Falls back to 'title' (above).
        // 'parent_slug'     => 'themes.php', // Make options page a submenu item of the themes menu.
        'capability'      => 'manage_woocommerce', // Cap required to view options-page.
        // 'position'        => 1, // Menu position. Only applicable if 'parent_slug' is left empty.
        // 'admin_menu_hook' => 'network_admin_menu', // 'network_admin_menu' to add network-level options page.
        // 'display_cb'      => false, // Override the options-page form output (CMB2_Hookup::options_page_output()).
        // 'save_button'     => esc_html__( 'Save Theme Options', 'myprefix' ), // The text for the options-page save button. Defaults to 'Save'.
    ) );

    /*
     * Options fields ids only need
     * to be unique within this box.
     * Prefix is not needed.
     */
    $cmb_options->add_field( array(
        'name' => __( 'Imagen de fondo del encabezado', 'woocatalog' ),
        'desc' => __( 'Selecciona la imagen. Tamaño x px', 'woocatalog' ),
        'id'   => 'bg_header',
        'type' => 'file',
    ) );

    $cmb_options->add_field( array(
      'name' => __( 'Logo', 'woocatalog' ),
      'desc' => __( 'Selecciona la imagen. Tamaño x px', 'woocatalog' ),
      'id'   => 'logo',
      'type' => 'file',
     ) );

    $cmb_options->add_field( array(
      'name' => esc_html__( 'Texto alternativo (Logo)', 'cmb2' ),
      'desc' => esc_html__( 'Descripción corta del sitio web', 'cmb2' ),
      'id'   => 'resume',
      'type' => 'textarea',
    ) );

    $cmb_options->add_field( array(
        'name' => esc_html__( 'Footer Copywrite', 'cmb2' ),
        'desc' => esc_html__( 'Última línea del footer', 'cmb2' ),
        'id'   => 'footer_copywrite',
        'type' => 'text',
    ) );

    $cmb_options->add_field( array(
      'name' => esc_html__( 'Facebook', 'cmb2' ),
      'desc' => esc_html__( 'URL Facebook', 'cmb2' ),
      'id'   => 'facebook',
      'type' => 'text_url',
    ) );

    $cmb_options->add_field( array(
      'name' => esc_html__( 'LinkedIn', 'cmb2' ),
      'desc' => esc_html__( 'URL LinkedIn', 'cmb2' ),
      'id'   => 'linkedin',
      'type' => 'text_url',
    ) );

    $cmb_options->add_field( array(
      'name' => esc_html__( 'Maps', 'cmb2' ),
      'desc' => esc_html__( 'URL Maps', 'cmb2' ),
      'id'   => 'google_maps',
      'type' => 'text_url',
    ) );

    $cmb_options->add_field( array(
      'name' => __( 'Logo login', 'woocatalog' ),
      'desc' => __( 'Selecciona la imagen. Tamaño x px', 'woocatalog' ),
      'id'   => 'logo_login',
      'type' => 'file',
     ) );
    
    $cmb_options->add_field( array(
      'name' => esc_html__( 'Logo login W', 'cmb2' ),
      'desc' => esc_html__( 'Ancho', 'cmb2' ),
      'id'   => 'logo_login_w',
      'type' => 'text',
      'attributes' => array(
        'type' => 'number',
      ),
    ) );

    $cmb_options->add_field( array(
      'name' => esc_html__( 'Logo login H', 'cmb2' ),
      'desc' => esc_html__( 'Alto', 'cmb2' ),
      'id'   => 'logo_login_h',
      'type' => 'text',
      'attributes' => array(
        'type' => 'number',
      ),
    ) );
}

/**
 * Wrapper function around cmb2_get_option. To show custom fields out of loop.
 * @since  0.1.0
 * @param  string $key     Options array key
 * @param  mixed  $default Optional default value
 * @return mixed           Option value
 */
function myprefix_get_option( $key = '', $default = false ) {
	if ( function_exists( 'cmb2_get_option' ) ) {
		// Use cmb2_get_option as it passes through some key filters.
		return cmb2_get_option( 'myprefix_options', $key, $default );
	}

	// Fallback to get_option if CMB2 is not loaded yet.
	$opts = get_option( 'myprefix_options', $default );

	$val = $default;

	if ( 'all' == $key ) {
		$val = $opts;
	} elseif ( is_array( $opts ) && array_key_exists( $key, $opts ) && false !== $opts[ $key ] ) {
		$val = $opts[ $key ];
	}

	return $val;
}

/**
 * Adapting  Ecommerce templates
 */
require 'inc/woocatalog-theme-implementations.php'; // GENERAL THEME ADAPTATIONS