<?php

/*  CONSTANTAS
/*======================*/

    define( 'MONTSERRAT_NINZIO_TEMPPATH', get_template_directory_uri());
    define( 'MONTSERRAT_NINZIO_IMAGES', MONTSERRAT_NINZIO_TEMPPATH. "/images");

    // WPML CONSTANTAS
    define('ICL_DONT_LOAD_NAVIGATION_CSS', true);
    define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true);

    function montserrat_ninzio_global_variables(){
        global $montserrat_ninzio, $woocommerce, $post, $product,$wp_query, $query_string;
    }

/*  HANDLE EXTERNAL PLUGINS
/*======================*/
    
    add_action( 'tgmpa_register', 'montserrat_ninzio_register_required_plugins' );
    function montserrat_ninzio_register_required_plugins() {

        $plugins = array(

            array(
                'name'      => esc_html__('Contact Form 7', 'montserrat'),
                'slug'      => 'contact-form-7',
                'required'  => true,
                'dismissable' => true
            ),

            array(
                'name'        => esc_html__('Woocommerce', 'montserrat'),
                'slug'        => 'woocommerce',
                'required'    => false,
                'dismissable' => true
            ),

            array(
                'name'      => esc_html__('One Click Demo Import', 'montserrat'),
                'slug'      => 'one-click-demo-import',
                'required'  => true
            ),

            array(
                'name'      => esc_html__('Regenerate Thumbnails', 'montserrat'),
                'slug'      => 'regenerate-thumbnails',
                'required'  => true,
                'dismissable' => true
            ),

            array(
                'name'      => esc_html__('Widgets in Menu for WordPress', 'montserrat'),
                'slug'      => 'widgets-in-menu',
                'required'  => false,
                'dismissable' => true
            ),

            array(
                'name'      => esc_html__('Envato WordPress Toolkit', 'montserrat'),
                'slug'      => 'wp-envato-market-master',
                'source'    => get_template_directory() . '/plugins/wp-envato-market-master.zip',
                'required'  => true,
                'force_activation' => false,
                'force_deactivation' => false,
                'external_url' => '',
                'dismissable' => true
            ),

            array(
                'name'      => esc_html__('WPBakery Visual Composer', 'montserrat'),
                'slug'      => 'js_composer',
                'source'    => get_template_directory() . '/plugins/js_composer.zip',
                'required'  => true,
                'force_activation' => false,
                'force_deactivation' => false,
                'external_url' => ''
            ),

            array(
                'name'      => esc_html__('Ninzio add-ons', 'montserrat'),
                'slug'      => 'ninzio-addons',
                'source'    => get_template_directory() . '/plugins/ninzio-addons.zip',
                'version'   => '2.5',
                'required'  => true,
                'force_activation' => false,
                'force_deactivation' => false,
                'external_url' => ''
            ),

            array(
                'name'      => esc_html__('Revolution slider', 'montserrat'),
                'slug'      => 'revslider',
                'source'    => get_template_directory() . '/plugins/revslider.zip',
                'required'  => true,
                'force_activation' => false,
                'force_deactivation' => false,
                'external_url' => '',
                'dismissable' => true
            )

        );

        $config = array(
            'id'                => 'montserrat',
            'default_path'      => '',                          // Default absolute path to pre-packaged plugins
            'parent_slug'       => 'themes.php',                // Default parent menu slug
            'capability'        => 'edit_theme_options',
            'menu'              => 'install-required-plugins',  // Menu slug
            'has_notices'       => true,                        // Show admin notices or not
            'dismissable'       => false,
            'is_automatic'      => false,                       // Automatically activate plugins after installation or not
            'message'           => '',                          // Message to output right before the plugins table
            'strings'           => array(
                'page_title'                                => esc_html__( 'Install Required Plugins', 'montserrat' ),
                'menu_title'                                => esc_html__( 'Install Plugins', 'montserrat' ),
                'installing'                                => esc_html__( 'Installing Plugin: %s', 'montserrat' ), // %1$s = plugin name
                'oops'                                      => esc_html__( 'Something went wrong with the plugin API.', 'montserrat' ),
                'notice_can_install_required'               => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'montserrat' ), // %1$s = plugin name(s)
                'notice_can_install_recommended'            => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'montserrat' ), // %1$s = plugin name(s)
                'notice_cannot_install'                     => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'montserrat' ), // %1$s = plugin name(s)
                'notice_can_activate_required'              => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'montserrat' ), // %1$s = plugin name(s)
                'notice_can_activate_recommended'           => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'montserrat' ), // %1$s = plugin name(s)
                'notice_cannot_activate'                    => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'montserrat' ), // %1$s = plugin name(s)
                'notice_ask_to_update'                      => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'montserrat' ), // %1$s = plugin name(s)
                'notice_cannot_update'                      => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'montserrat' ), // %1$s = plugin name(s)
                'install_link'                              => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'montserrat' ),
                'activate_link'                             => _n_noop( 'Activate installed plugin', 'Activate installed plugins', 'montserrat' ),
                'return'                                    => esc_html__( 'Return to Required Plugins Installer', 'montserrat' ),
                'plugin_activated'                          => esc_html__( 'Plugin activated successfully.', 'montserrat' ),
                'complete'                                  => esc_html__( 'All plugins installed and activated successfully. %s', 'montserrat' ), // %1$s = dashboard link
                'nag_type'                                  => 'updated' // Determines admin notice type - can only be 'updated' or 'error'
            )
        );

        tgmpa( $plugins, $config );

    }

/*  INCLUDES
/*======================*/

    if (!class_exists('TGM_Plugin_Activation') && file_exists( get_template_directory() . '/includes/class-tgm-plugin-activation.php' ) ) {
        require_once(get_template_directory() . '/includes/class-tgm-plugin-activation.php');
    }

    if (defined( 'WPB_VC_VERSION' ) && file_exists( get_template_directory() . '/plugins/js_composer.zip' ) ) {
        require_once(get_template_directory() . '/includes/ninzio_vc.php' );
    }

    require_once(get_template_directory() . '/includes/ninzio-functions.php');
    require_once(get_template_directory() . '/includes/custom-menu/custom-menu.php' );
    require_once(get_template_directory() . '/includes/dynamic-styles.php');
    require_once(get_template_directory() . '/includes/page-extended-options.php' );
    require_once(get_template_directory() . '/includes/post-extended-options.php' );

    if (class_exists('OCDI_Plugin')) {
       
        add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );
        add_filter( 'pt-ocdi/regenerate_thumbnails_in_content_import', '__return_false' );

        function montserrat_ninzio_intro_text( $default_text ) {
            $default_text = '<br><br><div class="ocdi__intro-text">
                <p class="about-description">
                    '.esc_html__( "Importing demo data (post, pages, images, theme settings, ...) is the easiest way to setup your theme.", "montserrat" ).'
                    '.esc_html__( "It will allow you to quickly edit everything instead of creating content from scratch.", "montserrat" ).'
                </p>
                <hr>
                <p>'.esc_html__( "When you import the data, the following things might happen:", "montserrat" ).'</p>
                <ul>
                    <li>'.esc_html__( "No existing posts, pages, categories, images, custom post types or any other data will be deleted or modified.", "montserrat" ).'</li>
                    <li>'.esc_html__( "Posts, pages, images, widgets, menus and other theme settings will get imported.", "montserrat" ).'</li>
                    <li>'.esc_html__( "Please click on the Import button only once and wait, it can take a couple of minutes.", "montserrat" ).'</li>
                    <li>'.esc_html__( "If you want to change the homepage version after import, do not import another demo, go to WordPress settings >> Reading and choose different homepage version as your front-page.", "montserrat" ).'</li>
                    <li>'.esc_html__( "If you want to import pages/posts/custom post type/menu etc. separately use regular WordPress importer", "montserrat" ).'</li>
                    <li>'.esc_html__( "After import don't forget to import Revolution Slider separately from Revolution Slider settings page", "montserrat" ).'</li>
                </ul>
                <hr>
            </div>';
            return $default_text;
        }
        add_filter( 'pt-ocdi/plugin_intro_text', 'montserrat_ninzio_intro_text' );

       function montserrat_ninzio_config_after_import_files() {

            $header_menu      = get_term_by('name', 'Header menu', 'nav_menu');
            $header_menu_1    = get_term_by('name', 'Header 2 menu left part', 'nav_menu');
            $header_menu_2    = get_term_by('name', 'Header 2 menu right part', 'nav_menu');
            $one_page_bullets = get_term_by('name', 'One page bullet navigation', 'nav_menu');
            $footer_menu      = get_term_by('name', 'Footer menu', 'nav_menu');

            $header_menu_id      = $header_menu->term_id;
            $header_menu_1_id    = $header_menu_1->term_id;
            $header_menu_2_id    = $header_menu_2->term_id;
            $one_page_bullets_id = $one_page_bullets->term_id;
            $footer_menu_id      = $footer_menu->term_id;

            $locations = get_theme_mod('nav_menu_locations');
            
            $locations['header-menu']      = $header_menu_id;
            $locations['header-menu-1']    = $header_menu_1_id;
            $locations['header-menu-2']    = $header_menu_2_id;
            $locations['one-page-bullets'] = $one_page_bullets_id;
            $locations['footer-menu']      = $footer_menu_id;

            set_theme_mod( 'nav_menu_locations', $locations );

            $home = get_page_by_title( 'Home' );
            update_option( 'page_on_front', $home->ID );
            update_option( 'show_on_front', 'page' );

            $blog   = get_page_by_title( 'Blog' );
            update_option( 'page_for_posts', $blog->ID );
       }
       add_action( 'pt-ocdi/after_all_import_execution', 'montserrat_ninzio_config_after_import_files', 10, 2 ); 
    }

/*  THEME SUPPORTS
/*======================*/

    /*  Thumbnail support
    /*-------------------*/

        if ( function_exists( 'add_theme_support' ) ) {

            add_theme_support( 'post-thumbnails');
            add_image_size( 'Montserrat-Ninzio-Half', 640, 520, true );           // Half
            add_image_size( 'Montserrat-Ninzio-Square', 440, 400, true );         // Square
            add_image_size( 'Montserrat-Ninzio-One-Third', 390, 300, true );      // One third
            add_image_size( 'Montserrat-Ninzio-Two-Third', 780, 480, true );      // Two thirds
            add_image_size( 'Montserrat-Ninzio-Three-Quarters', 870, 570, true ); // Two thirds
            add_image_size( 'Montserrat-Ninzio-Whole', 1170, 570, true );         // Whole

        }

        function montserrat_ninzio_custom_image_sizes( $sizes ) {
        
            $new_sizes = array();
            
            $added_sizes = get_intermediate_image_sizes();

            foreach( $added_sizes as $key => $value) {
                if($value != 'post-thumbnails' || $value != 'shop_thumbnail' || $value != 'shop_catalog' || $value != 'shop_single'){
                    $new_sizes[$value] = $value;
                }
            }

            $new_sizes = array_merge( $new_sizes, $sizes );
            
            return $new_sizes;
        }
        add_filter('image_size_names_choose', 'montserrat_ninzio_custom_image_sizes', 11, 1);

    /*  Multiple post/projects thumbnails
    /*-------------------*/

        if (class_exists('MultiPostThumbnails')) {

            // MultiPostThumbnails for posts
            new MultiPostThumbnails(
                array(
                    'label'     => esc_html__('2nd Featured Image', 'montserrat'),
                    'id'        => 'feature-image-2',
                    'post_type' => 'post'
                )
            );
            new MultiPostThumbnails(
                array(
                    'label'     => esc_html__('3rd Featured Image', 'montserrat'),
                    'id'        => 'feature-image-3',
                    'post_type' => 'post'
                )
            );
            new MultiPostThumbnails(
                array(
                    'label'     => esc_html__('4th Featured Image', 'montserrat'),
                    'id'        => 'feature-image-4',
                    'post_type' => 'post'
                )
            );
            new MultiPostThumbnails(
                array(
                    'label'     => esc_html__('5th Featured Image', 'montserrat'),
                    'id'        => 'feature-image-5',
                    'post_type' => 'post'
                )
            );

            // MultiPostThumbnails for projects
            new MultiPostThumbnails(
                array(
                    'label'     => esc_html__('2nd Featured Image', 'montserrat'),
                    'id'        => 'project-feature-image-2',
                    'post_type' => 'projects'
                )
            );
            new MultiPostThumbnails(
                array(
                    'label'     => esc_html__('3rd Featured Image', 'montserrat'),
                    'id'        => 'project-feature-image-3',
                    'post_type' => 'projects'
                )
            );
            new MultiPostThumbnails(
                array(
                    'label'     => esc_html__('4th Featured Image', 'montserrat'),
                    'id'        => 'project-feature-image-4',
                    'post_type' => 'projects'
                )
            );
            new MultiPostThumbnails(
                array(
                    'label'     => esc_html__('5th Featured Image', 'montserrat'),
                    'id'        => 'project-feature-image-5',
                    'post_type' => 'projects'
                )
            );

            // MultiPostThumbnails for product
            new MultiPostThumbnails(
                array(
                    'label'     => esc_html__(' second product image', 'montserrat'),
                    'id'        => 'feature-image-2',
                    'post_type' => 'product'
                )
            );
        }

    /*  HTML5 gallery and caption support (3.9 addition)
    /*-------------------*/

        add_theme_support( 'html5', array( 'gallery', 'caption' ) );

    /*  Content width
    /*-------------------*/

        if ( ! isset( $content_width ) ) {
            $content_width = 1170;
        }

    /*  Enable excerpt for pages
    /*-------------------*/

        add_action('init', 'montserrat_ninzio_page_excerpt');
        function montserrat_ninzio_page_excerpt() {
            add_post_type_support( 'page', 'excerpt' );
        }

    /*  Enable post formats for posts
    /*-------------------*/

        add_theme_support( 'post-formats', array( 'aside', 'audio', 'video', 'gallery', 'link', 'quote', 'status', 'chat') );
        add_post_type_support( 'post', 'post-formats' );

    /*  Enable automatic feed links
    /*-------------------*/

        add_theme_support( 'automatic-feed-links' );

    /*  Languages
    /*-------------------*/

        add_action('after_setup_theme', 'montserrat_ninzio_language_setup');
        function montserrat_ninzio_language_setup(){
            load_theme_textdomain('montserrat', get_template_directory() . '/languages');
        }

    /*  Menu
    /*-------------------*/

        function montserrat_ninzio_register_menu() {

            register_nav_menus(
                array(
                  'header-menu-1'    => esc_html__( 'Header 2 menu left part', 'montserrat' ),
                  'header-menu-2'    => esc_html__( 'Header 2 menu right part', 'montserrat' ),
                  'header-menu'      => esc_html__( 'Header menu', 'montserrat' ),
                  'header-top-menu'  => esc_html__( 'Header menu top navigation', 'montserrat' ),
                  'one-page-bullets' => esc_html__( 'One page bullet navigation', 'montserrat' ),
                  'footer-menu'      => esc_html__( 'Footer menu', 'montserrat' ),
                )
            );

        }
        add_action( 'after_setup_theme', 'montserrat_ninzio_register_menu' );

    /*  Sidebar
    /*-------------------*/

        add_action( 'widgets_init', 'montserrat_ninzio_register_sidebars' );
        function montserrat_ninzio_register_sidebars() {
            if ( function_exists( 'register_sidebar' ) ){

                register_sidebar( 
                    array (
                    'name'          => esc_html__( 'Site sidebar', 'montserrat'),
                    'id'            => 'site-widget-area',
                    'description'   => esc_html__('Site widget area', 'montserrat'),
                    'class'         => 'site-widget-area',
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h6 class="widget_title">',
                    'after_title'   => '</h6>' )
                );

                register_sidebar( 
                    array (
                    'name'          => esc_html__( 'Blog sidebar', 'montserrat'),
                    'id'            => 'blog-widget-area',
                    'description'   => esc_html__('Main widget area', 'montserrat'),
                    'class'         => 'blog-widget-area',
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h6 class="widget_title">',
                    'after_title'   => '</h6>' )
                );

                register_sidebar( 
                    array (
                    'name'          => esc_html__( 'Blog sidebar single', 'montserrat'),
                    'id'            => 'blog-widget-area-single',
                    'description'   => esc_html__('Blog widget area single', 'montserrat'),
                    'class'         => 'blog-widget-area-single',
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h6 class="widget_title">',
                    'after_title'   => '</h6>' )
                );

                register_sidebar( 
                    array (
                    'name'          => esc_html__( 'Projects sidebar', 'montserrat'),
                    'id'            => 'projects-widget-area',
                    'description'   => esc_html__('Projects widget area', 'montserrat'),
                    'class'         => 'projects-widget-area',
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h6 class="widget_title">',
                    'after_title'   => '</h6>' )
                );

                register_sidebar( 
                    array (
                    'name'          => esc_html__( 'Shop sidebar', 'montserrat'),
                    'id'            => 'shop-widget-area',
                    'description'   => esc_html__('Shop widget area', 'montserrat'),
                    'class'         => 'shop-widget-area',
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h6 class="widget_title">',
                    'after_title'   => '</h6>' )
                );

                register_sidebar( 
                    array (
                    'name'          => esc_html__( 'Shop sidebar single product', 'montserrat'),
                    'id'            => 'shop-widget-area-single',
                    'description'   => esc_html__('Shop widget area single', 'montserrat'),
                    'class'         => 'shop-widget-area',
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h6 class="widget_title">',
                    'after_title'   => '</h6>' )
                );

                for ($i=1; $i < 4; $i++) { 
                    register_sidebar( 
                        array (
                        'name'          => esc_html__( 'Page sidebar #','montserrat').$i,
                        'id'            => 'page-sidebar-'.$i,
                        'description'   => esc_html__('Page widget area', 'montserrat'),
                        'class'         => 'page-widget-area',
                        'before_widget' => '<div id="%1$s" class="widget %2$s">',
                        'after_widget'  => '</div>',
                        'before_title'  => '<h6 class="widget_title">',
                        'after_title'   => '</h6>' )
                    );
                }

                register_sidebar( 
                    array (
                    'name'          => esc_html__( 'Footer sidebar', 'montserrat'),
                    'id'            => 'footer-widget-area',
                    'description'   => esc_html__('Footer widget area', 'montserrat'),
                    'class'         => 'footer-widget-area',
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h6 class="widget_title">',
                    'after_title'   => '</h6>' )
                );

            }   
        }

    /*  WooCommerce
    /*-------------------*/

        if (class_exists('Woocommerce')){

            montserrat_ninzio_global_variables();

            if ( is_admin() && isset( $_GET['activated'] ) && $pagenow == 'themes.php' ) add_action( 'init', 'montserrat_ninzio_woo_img', 1 );

            $products_per_page = (isset($GLOBALS['montserrat_ninzio']['products-per-page']) && !empty($GLOBALS['montserrat_ninzio']['products-per-page'])) ? $GLOBALS['montserrat_ninzio']['products-per-page'] : "";
            
            if (!empty($products_per_page)) {
                add_filter( 'loop_shop_per_page', create_function( '$cols', 'return '.$products_per_page.';' ), 20 );
            }

            function montserrat_ninzio_woo_img() {
                $catalog = array(
                    'width'     => '440',
                    'height'    => '440',
                    'crop'      => 0
                );
                $single = array(
                    'width'     => '600',
                    'height'    => '600',
                    'crop'      => 1
                );
                $thumbnail = array(
                    'width'     => '90',
                    'height'    => '90',
                    'crop'      => 1 
                );

                update_option( 'shop_catalog_image_size', $catalog );
                update_option( 'shop_single_image_size', $single );
                update_option( 'shop_thumbnail_image_size', $thumbnail );
            }

            //change the position of add to cart
            remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
            remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
            remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
            remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
            add_action('woocommerce_before_shop_loop_item', 'montserrat_ninzio_product_thumb', 10 );
            add_action('woocommerce_after_shop_loop_item', 'montserrat_ninzio_product_det', 10 );


            function montserrat_ninzio_product_thumb() { ?>
                <?php 
                    global $post, $product;
                ?>
                <?php if ( $product->is_on_sale() ) : ?>
                    <?php
                    
                        $sale_price = get_post_meta( $post->ID, '_price', true);
                        $regular_price = get_post_meta( $post->ID, '_regular_price', true);

                        if (empty($regular_price)){ //then this is a variable product
                            $available_variations = $product->get_available_variations();
                            $variation_id=$available_variations[0]['variation_id'];
                            $variation= new WC_Product_Variation( $variation_id );
                            $regular_price = $variation ->regular_price;
                            $sale_price = $variation ->sale_price;
                        }
                        $sale = ceil(( ($regular_price - $sale_price) / $regular_price ) * 100);
                    ?>
                    <?php if ( !empty( $regular_price ) && !empty( $sale_price ) && $regular_price > $sale_price ) : ?>
                        <?php echo apply_filters( 'woocommerce_sale_flash', '<span class="product-status onsale">-' . $sale . '%</span>', $post, $product ); ?>
                    <?php endif ?>
                <?php endif; ?>
                <div class="nz-thumbnail">
                    <?php echo woocommerce_get_product_thumbnail();?>
                    <?php
                        if (class_exists('MultiPostThumbnails')) {
                            if (MultiPostThumbnails::has_post_thumbnail('product', 'feature-image-2')) {
                            $thumb_2 = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'feature-image-2', $post->ID);

                            echo '<img class="hover-img" src="'.$thumb_2.'" alt="'.get_the_title().'">';
                            }
                        }
                    ?>
                </div>
                <div class="product-details">
            <?php }

            function montserrat_ninzio_product_det() { ?>
                    <div class="cart-wrap nz-clearfix">
                        <?php woocommerce_template_loop_add_to_cart(); ?>
                        <div class="shop-loader">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>
            <?php }

            function montserrat_product_rating( $price ) {
                if (is_shop()) {
                    global $product; 
                    return wc_get_rating_html( $product->get_average_rating() ).$price; 
                } else {
                    return $price; 
                } 
            }
            add_filter( 'woocommerce_get_price_html', 'montserrat_product_rating' );

            //change the product-category structure
            add_action('woocommerce_before_subcategory_title', 'montserrat_ninzio_procut_cat_thumb_start', 5 );
            add_action('woocommerce_before_subcategory_title', 'montserrat_ninzio_procut_cat_thumb_end', 10 );
            add_action('woocommerce_after_subcategory_title', 'montserrat_ninzio_procut_cat_thumb_end2', 10 );

            function montserrat_ninzio_procut_cat_thumb_start() { ?>
                <div class="nz-thumbnail">
                    <div class="ninzio-overlay">
                        <span class="nz-overlay-before portfolio-link"></span>
                    </div>
            <?php 
            }

            function montserrat_ninzio_procut_cat_thumb_end() { ?>
                </div>
                <div class="category-details">
            <?php 
            }

            function montserrat_ninzio_procut_cat_thumb_end2() { ?>
                </div>
            <?php 
            }


            // Remove shop title
            add_filter( 'woocommerce_show_page_title' , 'montserrat_ninzio_hide_page_title' );
            function montserrat_ninzio_hide_page_title() {return false;}

            // Remove woocommerce breadcrumbs
            remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

            // Ensure cart contents update when products are added to the cart via AJAX
            add_filter('add_to_cart_fragments', 'montserrat_ninzio_add_to_cart');
            function montserrat_ninzio_add_to_cart( $fragments ) {
                
                global $woocommerce;

                ob_start(); ?>
                <a class="cart-contents" href="<?php echo esc_url($woocommerce->cart->get_cart_url()); ?>" title="<?php esc_html__('View your shopping cart', 'montserrat'); ?>">
                    <span class="cart-info"><?php echo esc_attr($woocommerce->cart->cart_contents_count); ?></span>
                </a>
                <?php

                $fragments['a.cart-contents'] = ob_get_clean();
                return $fragments;

            }

            //wrap single product image in column div
            remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
            remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
            remove_action('woocommerce_product_thumbnails', 'woocommerce_show_product_thumbnails', 20 );

            add_action( 'woocommerce_before_single_product_summary', 'montserrat_ninzio_column_open_div', 2);
            add_action( 'woocommerce_before_single_product_summary', 'montserrat_ninzio_column_close_div', 20);
            add_action( 'woocommerce_after_single_product_summary',  'montserrat_ninzio_clearfix_div', 2);
            add_action( 'woocommerce_before_add_to_cart_form',  'montserrat_ninzio_social_share', 2);

            function montserrat_ninzio_column_open_div(){  ?>
                <div class="single-image-content nz-clearfix">
                <div class='single-product-image'>
                    <?php global $product,$post; if ( $product->is_on_sale() ) : ?>
                        <?php
                        
                            $sale_price = get_post_meta( $post->ID, '_price', true);
                            $regular_price = get_post_meta( $post->ID, '_regular_price', true);

                            if (empty($regular_price)){ //then this is a variable product
                                $available_variations = $product->get_available_variations();
                                $variation_id=$available_variations[0]['variation_id'];
                                $variation= new WC_Product_Variation( $variation_id );
                                $regular_price = $variation ->regular_price;
                                $sale_price = $variation ->sale_price;
                            }
                            $sale = ceil(( ($regular_price - $sale_price) / $regular_price ) * 100);
                        ?>
                        <?php if ( !empty( $regular_price ) && !empty( $sale_price ) && $regular_price > $sale_price ) : ?>
                            <?php echo apply_filters( 'woocommerce_sale_flash', '<span class="product-status onsale">-' . $sale . '%</span>', $post, $product ); ?>
                        <?php endif ?>
                    <?php endif; ?>
                    <?php
                        $attachment_ids = $product->get_gallery_image_ids();
                    ?>
                    <div id="single-product-slider" class="slider flexslider">
                        <ul class="slides">
                            <?php if ($attachment_ids): ?>
                                <?php foreach ( $attachment_ids as $attachment_id ) { ?>
                                    <li>
                                        <?php $large_image_url2 = wp_get_attachment_image_src( $attachment_id, 'full' ); ?>
                                        <div>
                                            <?php echo wp_get_attachment_image( $attachment_id, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' )); ?>
                                        </div>
                                    </li>
                                <?php } ?>
                            <?php endif ?>
                        </ul>
                    </div>
                    <?php if ($attachment_ids): ?>
                        <div id="single-product-carousel" class="carousel flexslider">
                            <ul class="slides">
                                    <?php foreach ( $attachment_ids as $attachment_id ){ ?>
                                        <li>
                                            <?php echo wp_get_attachment_image( $attachment_id, apply_filters( 'single_product_small_thumbnail_size', 'shop_thumbnail' )); ?>
                                        </li>
                                    <?php } ?>
                            </ul>
                        </div>
                    <?php endif ?>
            <?php }

            function montserrat_ninzio_column_close_div(){
                echo "</div><div class='single-product-summary'>"; ?>
            <?php }

            function montserrat_ninzio_social_share(){ ?>
                <?php global $post; ?>
                <div class="post-social-share nz-clearfix">
                    <div class="social-links left nz-clearfix">
                        <a title="<?php echo esc_html__("Share on Facebook", 'montserrat'); ?>" class="post-facebook-share icon-facebook" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>"></a>
                        <a title="<?php echo esc_html__("Tweet this!", 'montserrat'); ?>" class="post-twitter-share icon-twitter" target="_blank" href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>"></a>
                        <a title="<?php echo esc_html__("Share on Pinterest", 'montserrat'); ?>" class="post-pinterest-share icon-pinterest" target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo esc_url($url); ?>"></a>
                        <a title="<?php echo esc_html__("Share on LinkedIn", 'montserrat'); ?>" class="post-linkedin-share icon-linkedin" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>"></a>
                        <a title="<?php echo esc_html__("Share on Google+", 'montserrat'); ?>" class="post-google-share icon-googleplus" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"></a>
                    </div>
                </div>
            <?php }

            function montserrat_ninzio_clearfix_div(){ ?>
                </div>
                <div class="nz-clearfix"></div>
            <?php }
                
            remove_action( 'woocommerce_before_shop_loop', 'wc_print_notices', 10 );
            remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
            remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

            function montserrat_ninzio_remove_pretty_photo(){
                wp_dequeue_style( 'woocommerce_prettyPhoto_css' );
                wp_dequeue_style( 'woocommerce_chosen_styles' );
                wp_dequeue_style( 'woocommerce_prettyPhoto_css' );
                wp_dequeue_script( 'prettyPhoto-init' );
                wp_dequeue_script( 'prettyPhoto' );
                wp_dequeue_script( 'wc-chosen' );
            }
            
            add_action( 'wp_enqueue_scripts', 'montserrat_ninzio_remove_pretty_photo', 99 );
            add_filter( 'woocommerce_enqueue_styles', '__return_false' );
            
            add_theme_support( 'woocommerce' );

        }

    /*  Visual Composer
    /*-------------------*/

        if(function_exists('vc_set_as_theme')) vc_set_as_theme();

    /*  Title Tag
    /*-------------------*/

        add_action( 'after_setup_theme', 'montserrat_ninzio_theme_slug_setup' );
        function montserrat_ninzio_theme_slug_setup() {
            add_theme_support( 'title-tag' );
        }

    /*  Redux
    /*-------------------*/

        function montserrat_ninzio_remove_redux_news() {
            remove_meta_box( 'redux_dashboard_widget', 'dashboard', 'side' );
        } 
        add_action('wp_dashboard_setup', 'montserrat_ninzio_remove_redux_news' );

        function montserrat_ninzio_redux_menu_page_removing() {
            remove_submenu_page( 'tools.php', 'redux-about' );
        }
        add_action( 'admin_menu', 'montserrat_ninzio_redux_menu_page_removing' );

    /*  Extra fields on user profile
    /*-------------------*/

        function montserrat_ninzio_social_links_profile( $fields ) {

            $fields['twitter']     = 'Twitter';
            $fields['facebook']    = 'Facebook';
            $fields['google-plus'] = 'Google +';
            $fields['linkedin']    = 'LinkedIn';
            $fields['instagram']   = 'Instagram';

            return $fields;
        }

        add_filter( 'user_contactmethods', 'montserrat_ninzio_social_links_profile' );

        function montserrat_ninzio_social_links_profile_save( $user_id ) {

            if ( ! current_user_can( 'edit_user', $user_id ) ) {
             return false;
            }

            if ( empty( $_POST['twitter'] ) ) {return false;}
            if ( empty( $_POST['facebook'] ) ) {return false;}
            if ( empty( $_POST['google-plus'] ) ) {return false;}
            if ( empty( $_POST['linkedin'] ) ) {return false;}
            if ( empty( $_POST['instagram'] ) ) {return false;}

            update_user_meta( $user_id, 'twitter', $_POST['twitter'] );
            update_user_meta( $user_id, 'facebook', $_POST['facebook'] );
            update_user_meta( $user_id, 'google-plus', $_POST['google-plus'] );
            update_user_meta( $user_id, 'linkedin', $_POST['linkedin'] );
            update_user_meta( $user_id, 'instagram', $_POST['instagram'] );
        }

        add_action( 'personal_options_update', 'montserrat_ninzio_social_links_profile_save' );
        add_action( 'edit_user_profile_update', 'montserrat_ninzio_social_links_profile_save' );

/*  SCRIPTS
/*======================*/

    function montserrat_ninzio_script()
    {
        if(!is_admin())
        {
            global $montserrat_ninzio;

            wp_enqueue_style( 'icomoon', MONTSERRAT_NINZIO_TEMPPATH . '/css/icomoon.css');
            wp_enqueue_style( 'header-im', MONTSERRAT_NINZIO_TEMPPATH . '/css/header-im.css');
            wp_enqueue_style( 'montserrat-style', get_stylesheet_uri() );

            if ( is_singular() && get_option( 'thread_comments' ) ) {
                wp_enqueue_script( 'comment-reply' );
            }

            if (isset($GLOBALS['montserrat_ninzio']['google-map-api']) && !empty($GLOBALS['montserrat_ninzio']['google-map-api'])) {
                wp_enqueue_script( 'gmap', '//maps.google.com/maps/api/js?key='.$GLOBALS['montserrat_ninzio']['google-map-api'], array(), false);
            } else {
                wp_enqueue_script( 'gmap', '//maps.google.com/maps/api/js', array(), false);
            }
            wp_enqueue_script( 'modernizr', MONTSERRAT_NINZIO_TEMPPATH . '/js/modernizr.js', array(), false);
            wp_enqueue_script( 'smoothscroll', MONTSERRAT_NINZIO_TEMPPATH . '/js/smoothscroll.js', array('jquery'), '', true);
            wp_enqueue_script( 'masonry', MONTSERRAT_NINZIO_TEMPPATH . '/js/masonry.pkgd.min.js', array('jquery'), '', true);
            wp_enqueue_script( 'shuffle', MONTSERRAT_NINZIO_TEMPPATH . '/js/jquery.shuffle.js', array('jquery'), '', true);
            wp_enqueue_script( 'controller', MONTSERRAT_NINZIO_TEMPPATH . '/js/controller.js', array('jquery'), '', true);
        
            wp_enqueue_script( 'montserrat-contact-form', MONTSERRAT_NINZIO_TEMPPATH.'/js/montserrat-contact-form.js', array('jquery'), '', true);
            wp_localize_script( 'montserrat-contact-form', 'montserrat_contact_form_ajax', array( 'montserrat_contact_form_ajaxurl' => admin_url( 'admin-ajax.php')));

            if (is_page()) {


                $values          = get_post_custom( get_the_ID() );
                $one_page        = (isset($values["one_page"][0]) && $values["one_page"][0] == "true") ? "true" : "false";

                if ($one_page == "true") {
                   
                    $nz_one_page_speed  = ($montserrat_ninzio['one-page-speed']) ? esc_js($montserrat_ninzio['one-page-speed']) : 750;
                    $nz_one_page_hash   = ($montserrat_ninzio['one-page-hash'] && $montserrat_ninzio['one-page-hash'] == 1) ? 'true' : 'false';
                    $nz_one_page_nav    = ($montserrat_ninzio['one-page-navigation']) ? $montserrat_ninzio['one-page-navigation'] : 'side';
                    $nz_one_page_filter = (isset($montserrat_ninzio['one-page-filter']) && $montserrat_ninzio['one-page-filter']) ? explode(',',esc_attr($montserrat_ninzio['one-page-filter'])) : '';
                    $nz_filter_array    = array();

                    $nz_offset = 0;
                    $nz_from   = 0;

                    $nz_header_version  = (isset($GLOBALS['montserrat_ninzio']['header-version']) && !empty($GLOBALS['montserrat_ninzio']['header-version'])) ? $GLOBALS['montserrat_ninzio']['header-version'] : 'version1';
                    $nz_h1_fixed_height = (isset($GLOBALS['montserrat_ninzio']['h1-fixed-height']) && $GLOBALS['montserrat_ninzio']['h1-fixed-height']) ? $GLOBALS['montserrat_ninzio']['h1-fixed-height'] : "90";
                    $nz_h2_fixed_height = (isset($GLOBALS['montserrat_ninzio']['h2-fixed-height']) && $GLOBALS['montserrat_ninzio']['h2-fixed-height']) ? $GLOBALS['montserrat_ninzio']['h2-fixed-height'] : "90";
                    $nz_h3_fixed_height = (isset($GLOBALS['montserrat_ninzio']['h3-fixed-height']) && $GLOBALS['montserrat_ninzio']['h3-fixed-height']) ? $GLOBALS['montserrat_ninzio']['h3-fixed-height'] : "90";

                    $nz_h1_desk_height = (isset($GLOBALS['montserrat_ninzio']['h1-desk-height']) && $GLOBALS['montserrat_ninzio']['h1-desk-height']) ? $GLOBALS['montserrat_ninzio']['h1-desk-height'] : "90";
                    $nz_h2_desk_height = (isset($GLOBALS['montserrat_ninzio']['h2-desk-height']) && $GLOBALS['montserrat_ninzio']['h2-desk-height']) ? $GLOBALS['montserrat_ninzio']['h2-desk-height'] : "90";
                    $nz_h3_desk_height = (isset($GLOBALS['montserrat_ninzio']['h3-desk-height']) && $GLOBALS['montserrat_ninzio']['h3-desk-height']) ? $GLOBALS['montserrat_ninzio']['h3-desk-height'] : "90";

                    $nz_h1_fixed = (isset($GLOBALS['montserrat_ninzio']['h1-fixed']) && $GLOBALS['montserrat_ninzio']['h1-fixed'] == 1) ? "true" : "false";
                    $nz_h2_fixed = (isset($GLOBALS['montserrat_ninzio']['h2-fixed']) && $GLOBALS['montserrat_ninzio']['h2-fixed'] == 1) ? "true" : "false";
                    $nz_h3_fixed = (isset($GLOBALS['montserrat_ninzio']['h3-fixed']) && $GLOBALS['montserrat_ninzio']['h3-fixed'] == 1) ? "true" : "false";

                    $nz_h1_header_top = (isset($GLOBALS['montserrat_ninzio']['h1-header-top']) && $GLOBALS['montserrat_ninzio']['h1-header-top'] == 1) ? "true" : "false";
                    $nz_h2_header_top = (isset($GLOBALS['montserrat_ninzio']['h2-header-top']) && $GLOBALS['montserrat_ninzio']['h2-header-top'] == 1) ? "true" : "false";

                    switch ($nz_header_version) {
                        case 'version1':
                            $nz_offset = ($nz_h1_fixed == "true") ? $nz_h1_fixed_height : 0;
                            $nz_from   = ($nz_h1_fixed == "true") ? (($nz_h1_header_top == "true") ? $nz_h1_desk_height+40 : $nz_h1_desk_height) : 0;
                            break;
                        case 'version2':
                            $nz_offset = ($nz_h2_fixed == "true") ? $nz_h2_fixed_height : 0;
                            $nz_from   = ($nz_h2_fixed == "true") ? (($nz_h2_header_top == "true") ? $nz_h2_desk_height+40 : $nz_h2_desk_height) : 0;
                            break;
                        case 'version3':
                            $nz_offset = ($nz_h3_fixed == "true") ? $nz_h3_fixed_height : 0;
                            $nz_from   = ($nz_h3_fixed == "true") ? $nz_h3_desk_height : 0;
                            break;
                    }

                    if (is_array($nz_one_page_filter)) {
                        foreach ($nz_one_page_filter as $filter) {
                            array_push($nz_filter_array, '#menu-item-'.$filter.' > a');
                        }
                    }

                    wp_enqueue_script( 'single-page-nav', MONTSERRAT_NINZIO_TEMPPATH.'/js/single-page-nav.js', array('jquery'), '', true);
                    wp_localize_script( 
                        'single-page-nav', 
                        'single_page_nav_opt', 
                        array(
                            'offset'      => $nz_offset,
                            'from'        => $nz_from,
                        )
                    );
                    wp_enqueue_script( 'montserrat-one-page', MONTSERRAT_NINZIO_TEMPPATH.'/js/montserrat-one-page.js', array('jquery'), '', true);
                    wp_localize_script( 
                        'montserrat-one-page', 
                        'montserrat_one_page_opt', 
                        array(
                            'navType'     => $nz_one_page_nav, 
                            'offset'      => $nz_offset,
                            'from'        => $nz_from,
                            'speed'       => $nz_one_page_speed,
                            'hash'        => $nz_one_page_hash,
                            'filterArray' => (!empty($nz_filter_array)) ? implode(', ', $nz_filter_array) : ''
                        )
                    );

                }
            }
        }

    }
    add_action( 'wp_enqueue_scripts', 'montserrat_ninzio_script' );

/* ADMIN STYLES/SCRIPTS
/*======================*/

    function montserrat_admin_scripts_styles() {
        wp_enqueue_script( 'ninzio-admin', MONTSERRAT_NINZIO_TEMPPATH . '/js/admin-scripts.js', array('jquery'), '', true);
        wp_enqueue_style( 'admin-styles', MONTSERRAT_NINZIO_TEMPPATH . '/css/admin-styles.css', array(), '', 'all' );
        wp_enqueue_style( 'jquery-ui', MONTSERRAT_NINZIO_TEMPPATH . '/css/jquery-ui.css', array(), '', 'all' );
        wp_enqueue_style( 'wp-color-picker' );
        wp_enqueue_script( 'wp-color-picker' );
        wp_enqueue_script( 'jquery-ui-spinner' );
        wp_enqueue_script( 'jquery-ui-sortable' );
        wp_enqueue_script('jquery-ui-datepicker');
        wp_enqueue_style( 'thickbox' );
        wp_enqueue_script( 'thickbox' );
        wp_enqueue_media();

        return;
    }
    add_action('admin_enqueue_scripts','montserrat_admin_scripts_styles');

?>