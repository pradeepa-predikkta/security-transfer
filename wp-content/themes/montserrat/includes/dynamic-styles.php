<?php

function montserrat_ninzio_include_dynamic_styles() {
wp_enqueue_style('dynamic-styles', get_template_directory_uri() . '/css/dynamic-styles.css');

	montserrat_ninzio_global_variables();
	
	$montserrat_ninzio_main_color = (isset($GLOBALS['montserrat_ninzio']['main-color']) && !empty($GLOBALS['montserrat_ninzio']['main-color'])) ? $GLOBALS['montserrat_ninzio']['main-color'] : '#f0634c';

	/*	STYLING OPTIONS
	/*-------------------------*/

		$nz_site_back_col   = (isset($GLOBALS['montserrat_ninzio']['site-background']['background-color']) && $GLOBALS['montserrat_ninzio']['site-background']['background-color']) ? $GLOBALS['montserrat_ninzio']['site-background']['background-color'] : "#ffffff";
		$nz_site_back_img   = (isset($GLOBALS['montserrat_ninzio']['site-background']['background-image']) && $GLOBALS['montserrat_ninzio']['site-background']['background-image']) ? esc_url($GLOBALS['montserrat_ninzio']['site-background']['background-image']) : "";
		$nz_site_back_r     = (isset($GLOBALS['montserrat_ninzio']['site-background']['background-repeat']) && $GLOBALS['montserrat_ninzio']['site-background']['background-repeat']) ? $GLOBALS['montserrat_ninzio']['site-background']['background-repeat'] : "no-repeat";
		$nz_site_back_s     = (isset($GLOBALS['montserrat_ninzio']['site-background']['background-size']) && $GLOBALS['montserrat_ninzio']['site-background']['background-size']) ? $GLOBALS['montserrat_ninzio']['site-background']['background-size'] : "inherit";
		$nz_site_back_a     = (isset($GLOBALS['montserrat_ninzio']['site-background']['background-attachment']) && $GLOBALS['montserrat_ninzio']['site-background']['background-attachment']) ? $GLOBALS['montserrat_ninzio']['site-background']['background-attachment'] : "inherit";
		$nz_site_back_p     = (isset($GLOBALS['montserrat_ninzio']['site-background']['background-position']) && $GLOBALS['montserrat_ninzio']['site-background']['background-position']) ? $GLOBALS['montserrat_ninzio']['site-background']['background-position'] : "left top";

	/*	TYPOGRAPHY OPTIONS
	/*-------------------------*/
		
		$nz_main_font_size          = (isset($GLOBALS['montserrat_ninzio']['main-typo']['font-size']) && $GLOBALS['montserrat_ninzio']['main-typo']['font-size']) ? $GLOBALS['montserrat_ninzio']['main-typo']['font-size'] : "13px";
		$nz_main_line_height        = (isset($GLOBALS['montserrat_ninzio']['main-typo']['line-height']) && $GLOBALS['montserrat_ninzio']['main-typo']['line-height']) ? $GLOBALS['montserrat_ninzio']['main-typo']['line-height'] : "22px";
		$nz_main_font_family        = (isset($GLOBALS['montserrat_ninzio']['main-typo']['font-family']) && $GLOBALS['montserrat_ninzio']['main-typo']['font-family']) ? $GLOBALS['montserrat_ninzio']['main-typo']['font-family'] : "Arial, Helvetica, sans-serif";
		$nz_headings_font_family    = (isset($GLOBALS['montserrat_ninzio']['headings-typo']['font-family']) && $GLOBALS['montserrat_ninzio']['headings-typo']['font-family']) ? $GLOBALS['montserrat_ninzio']['headings-typo']['font-family'] : $nz_main_font_family;
		$nz_headings_text_transform = (isset($GLOBALS['montserrat_ninzio']['headings-typo']['text-transform']) && $GLOBALS['montserrat_ninzio']['headings-typo']['text-transform']) ? $GLOBALS['montserrat_ninzio']['headings-typo']['text-transform'] : "none";
		$nz_h1_font_size            = (isset($GLOBALS['montserrat_ninzio']['h1-typo']['font-size']) && $GLOBALS['montserrat_ninzio']['h1-typo']['font-size']) ? $GLOBALS['montserrat_ninzio']['h1-typo']['font-size'] : "50px";
		$nz_h1_line_height          = (isset($GLOBALS['montserrat_ninzio']['h1-typo']['line-height']) && $GLOBALS['montserrat_ninzio']['h1-typo']['line-height']) ? $GLOBALS['montserrat_ninzio']['h1-typo']['line-height'] : "60px";
		$nz_h2_font_size            = (isset($GLOBALS['montserrat_ninzio']['h2-typo']['font-size']) && $GLOBALS['montserrat_ninzio']['h2-typo']['font-size']) ? $GLOBALS['montserrat_ninzio']['h2-typo']['font-size'] : "40px";
		$nz_h2_line_height          = (isset($GLOBALS['montserrat_ninzio']['h2-typo']['line-height']) && $GLOBALS['montserrat_ninzio']['h2-typo']['line-height']) ? $GLOBALS['montserrat_ninzio']['h2-typo']['line-height'] : "50px";
		$nz_h3_font_size            = (isset($GLOBALS['montserrat_ninzio']['h3-typo']['font-size']) && $GLOBALS['montserrat_ninzio']['h3-typo']['font-size']) ? $GLOBALS['montserrat_ninzio']['h3-typo']['font-size'] : "30px";
		$nz_h3_line_height          = (isset($GLOBALS['montserrat_ninzio']['h3-typo']['line-height']) && $GLOBALS['montserrat_ninzio']['h3-typo']['line-height']) ? $GLOBALS['montserrat_ninzio']['h3-typo']['line-height'] : "40px";
		$nz_h4_font_size            = (isset($GLOBALS['montserrat_ninzio']['h4-typo']['font-size']) && $GLOBALS['montserrat_ninzio']['h4-typo']['font-size']) ? $GLOBALS['montserrat_ninzio']['h4-typo']['font-size'] : "24px";
		$nz_h4_line_height          = (isset($GLOBALS['montserrat_ninzio']['h4-typo']['line-height']) && $GLOBALS['montserrat_ninzio']['h4-typo']['line-height']) ? $GLOBALS['montserrat_ninzio']['h4-typo']['line-height'] : "34px";
		$nz_h5_font_size            = (isset($GLOBALS['montserrat_ninzio']['h5-typo']['font-size']) && $GLOBALS['montserrat_ninzio']['h5-typo']['font-size']) ? $GLOBALS['montserrat_ninzio']['h5-typo']['font-size'] : "18px";
		$nz_h5_line_height          = (isset($GLOBALS['montserrat_ninzio']['h5-typo']['line-height']) && $GLOBALS['montserrat_ninzio']['h5-typo']['line-height']) ? $GLOBALS['montserrat_ninzio']['h5-typo']['line-height'] : "28px";
		$nz_h6_font_size            = (isset($GLOBALS['montserrat_ninzio']['h6-typo']['font-size']) && $GLOBALS['montserrat_ninzio']['h6-typo']['font-size']) ? $GLOBALS['montserrat_ninzio']['h6-typo']['font-size'] : "16px";
		$nz_h6_line_height          = (isset($GLOBALS['montserrat_ninzio']['h6-typo']['line-height']) && $GLOBALS['montserrat_ninzio']['h6-typo']['line-height']) ? $GLOBALS['montserrat_ninzio']['h6-typo']['line-height'] : "26px";

	/*	HEADER
	/*-------------------------*/

		$nz_mob_height                   = (isset($GLOBALS['montserrat_ninzio']['mob-height']) && $GLOBALS['montserrat_ninzio']['mob-height']) ? $GLOBALS['montserrat_ninzio']['mob-height'] : "50";

		// VERSION 1

		$nz_h1_desk_height                   = (isset($GLOBALS['montserrat_ninzio']['h1-desk-height']) && $GLOBALS['montserrat_ninzio']['h1-desk-height']) ? $GLOBALS['montserrat_ninzio']['h1-desk-height'] : "90";
		$nz_h1_fixed_height                  = (isset($GLOBALS['montserrat_ninzio']['h1-fixed-height']) && $GLOBALS['montserrat_ninzio']['h1-fixed-height']) ? $GLOBALS['montserrat_ninzio']['h1-fixed-height'] : "90";
		$nz_h1_header_top_back_color         = (isset($GLOBALS['montserrat_ninzio']['h1-header-top-back-color']['color']) && $GLOBALS['montserrat_ninzio']['h1-header-top-back-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h1-header-top-back-color']['color'],$GLOBALS['montserrat_ninzio']['h1-header-top-back-color']['alpha']) : "#f0634c";
		$nz_h1_header_top_border_color       = (isset($GLOBALS['montserrat_ninzio']['h1-header-top-border-color']['color']) && $GLOBALS['montserrat_ninzio']['h1-header-top-border-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h1-header-top-border-color']['color'],$GLOBALS['montserrat_ninzio']['h1-header-top-border-color']['alpha']) : "";
		
		$nz_h1_header_top_menu_color_reg     = (isset($GLOBALS['montserrat_ninzio']['h1-header-top-menu-color']['regular']) && !empty($GLOBALS['montserrat_ninzio']['h1-header-top-menu-color']['regular'])) ? $GLOBALS['montserrat_ninzio']['h1-header-top-menu-color']['regular'] : '#999999';
		$nz_h1_header_top_menu_color_hov     = (isset($GLOBALS['montserrat_ninzio']['h1-header-top-menu-color']['hover']) && !empty($GLOBALS['montserrat_ninzio']['h1-header-top-menu-color']['hover'])) ? $GLOBALS['montserrat_ninzio']['h1-header-top-menu-color']['hover'] : '#f0634c';
		
		$nz_h1_header_top_social_links_color = (isset($GLOBALS['montserrat_ninzio']['h1-header-top-social-links-color']) && !empty($GLOBALS['montserrat_ninzio']['h1-header-top-social-links-color'])) ? $GLOBALS['montserrat_ninzio']['h1-header-top-social-links-color'] : '#ffffff';
		$nz_h1_top_button_text_color         = (isset($GLOBALS['montserrat_ninzio']['h1-top-button-text-color']) && !empty($GLOBALS['montserrat_ninzio']['h1-top-button-text-color'])) ? $GLOBALS['montserrat_ninzio']['h1-top-button-text-color'] : '#999999';
		$nz_h1_top_button_back_color         = (isset($GLOBALS['montserrat_ninzio']['h1-top-button-back-color']) && !empty($GLOBALS['montserrat_ninzio']['h1-top-button-back-color'])) ? $GLOBALS['montserrat_ninzio']['h1-top-button-back-color'] : '#ffffff';

		$nz_h1_desk_sidebar_toggle_color         = (isset($GLOBALS['montserrat_ninzio']['h1-desk-sidebar-toggle-color']['color']) && $GLOBALS['montserrat_ninzio']['h1-desk-sidebar-toggle-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h1-desk-sidebar-toggle-color']['color'],$GLOBALS['montserrat_ninzio']['h1-desk-sidebar-toggle-color']['alpha']) : "transparent";
		$nz_h1_desk_sidebar_toggle_border_color  = (isset($GLOBALS['montserrat_ninzio']['h1-desk-sidebar-toggle-border-color']['color']) && $GLOBALS['montserrat_ninzio']['h1-desk-sidebar-toggle-border-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h1-desk-sidebar-toggle-border-color']['color'],$GLOBALS['montserrat_ninzio']['h1-desk-sidebar-toggle-border-color']['alpha']) : "transparent";

		$nz_h1_desk_back_color               = (isset($GLOBALS['montserrat_ninzio']['h1-desk-back-color']['color']) && $GLOBALS['montserrat_ninzio']['h1-desk-back-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h1-desk-back-color']['color'],$GLOBALS['montserrat_ninzio']['h1-desk-back-color']['alpha']) : "#ffffff";
		$nz_h1_desk_border_color             = (isset($GLOBALS['montserrat_ninzio']['h1-desk-border-color']['color']) && $GLOBALS['montserrat_ninzio']['h1-desk-border-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h1-desk-border-color']['color'],$GLOBALS['montserrat_ninzio']['h1-desk-border-color']['alpha']) : "";
		$nz_h1_desk_separator_color          = (isset($GLOBALS['montserrat_ninzio']['h1-desk-separator-color']['color']) && $GLOBALS['montserrat_ninzio']['h1-desk-separator-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h1-desk-separator-color']['color'],$GLOBALS['montserrat_ninzio']['h1-desk-separator-color']['alpha']) : "";
		$nz_h1_desk_menu_effect_color        = (isset($GLOBALS['montserrat_ninzio']['h1-desk-menu-effect-color']['color']) && $GLOBALS['montserrat_ninzio']['h1-desk-menu-effect-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h1-desk-menu-effect-color']['color'],$GLOBALS['montserrat_ninzio']['h1-desk-menu-effect-color']['alpha']) : "#f0634c";
		$nz_h1_desk_menu_color_reg           = (isset($GLOBALS['montserrat_ninzio']['h1-desk-menu-color']['regular']) && $GLOBALS['montserrat_ninzio']['h1-desk-menu-color']['regular']) ? $GLOBALS['montserrat_ninzio']['h1-desk-menu-color']['regular'] : "#999999";
		$nz_h1_desk_menu_color_hov           = (isset($GLOBALS['montserrat_ninzio']['h1-desk-menu-color']['hover']) && $GLOBALS['montserrat_ninzio']['h1-desk-menu-color']['hover']) ? $GLOBALS['montserrat_ninzio']['h1-desk-menu-color']['hover'] : "#999999";
		$nz_h1_desk_submenu_back_color       = (isset($GLOBALS['montserrat_ninzio']['h1-desk-submenu-back-color']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-submenu-back-color'])) ? $GLOBALS['montserrat_ninzio']['h1-desk-submenu-back-color'] : '#292929';
		$nz_h1_desk_submenu_effect_color     = (isset($GLOBALS['montserrat_ninzio']['h1-desk-submenu-effect-color']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-submenu-effect-color'])) ? $GLOBALS['montserrat_ninzio']['h1-desk-submenu-effect-color'] : '#f0634c';
		$nz_h1_desk_submenu_color_reg        = (isset($GLOBALS['montserrat_ninzio']['h1-desk-submenu-color']['regular']) && $GLOBALS['montserrat_ninzio']['h1-desk-submenu-color']['regular']) ? $GLOBALS['montserrat_ninzio']['h1-desk-submenu-color']['regular'] : "#999999";
		$nz_h1_desk_submenu_color_hov        = (isset($GLOBALS['montserrat_ninzio']['h1-desk-submenu-color']['hover']) && $GLOBALS['montserrat_ninzio']['h1-desk-submenu-color']['hover']) ? $GLOBALS['montserrat_ninzio']['h1-desk-submenu-color']['hover'] : "#ffffff";

		$nz_h1_desk_menu_m                   = (class_exists( 'ReduxFramework' )) ? (isset($GLOBALS['montserrat_ninzio']['h1-desk-menu-m']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-menu-m'])) ? $GLOBALS['montserrat_ninzio']['h1-desk-menu-m'] : '0' : '20';
		$nz_h1_desk_menu_m_1600              = (isset($GLOBALS['montserrat_ninzio']['h1-desk-menu-m-1600']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-menu-m-1600'])) ? $GLOBALS['montserrat_ninzio']['h1-desk-menu-m-1600'] : $nz_h1_desk_menu_m;
		$nz_h1_desk_ls_w    	             = (isset($GLOBALS['montserrat_ninzio']['h1-desk-lw']['width']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-lw']['width'])) ? $GLOBALS['montserrat_ninzio']['h1-desk-lw']['width'] : "149px"; 
		$nz_h1_desk_menu_font_weight         = (isset($GLOBALS['montserrat_ninzio']['h1-desk-menu-typo']['font-weight']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-menu-typo']['font-weight'])) ? $GLOBALS['montserrat_ninzio']['h1-desk-menu-typo']['font-weight'] : "normal";
		$nz_h1_desk_menu_font_size           = (isset($GLOBALS['montserrat_ninzio']['h1-desk-menu-typo']['font-size']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-menu-typo']['font-size'])) ? $GLOBALS['montserrat_ninzio']['h1-desk-menu-typo']['font-size'] : "14px";
		$nz_h1_desk_menu_font_family         = (isset($GLOBALS['montserrat_ninzio']['h1-desk-menu-typo']['font-family']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-menu-typo']['font-family'])) ? $GLOBALS['montserrat_ninzio']['h1-desk-menu-typo']['font-family'] : "Arial, Helvetica, sans-serif";
		$nz_h1_desk_menu_text_transform      = (isset($GLOBALS['montserrat_ninzio']['h1-desk-menu-typo']['text-transform']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-menu-typo']['text-transform'])) ? $GLOBALS['montserrat_ninzio']['h1-desk-menu-typo']['text-transform'] : "none";
		$nz_h1_desk_submenu_font_size        = (isset($GLOBALS['montserrat_ninzio']['h1-desk-submenu-typo']['font-size']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-submenu-typo']['font-size'])) ? $GLOBALS['montserrat_ninzio']['h1-desk-submenu-typo']['font-size'] : "14px";
		$nz_h1_desk_submenu_font_weight      = (isset($GLOBALS['montserrat_ninzio']['h1-desk-submenu-typo']['font-weight']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-submenu-typo']['font-weight'])) ? $GLOBALS['montserrat_ninzio']['h1-desk-submenu-typo']['font-weight'] : "400";
		$nz_h1_desk_submenu_line_height      = (isset($GLOBALS['montserrat_ninzio']['h1-desk-submenu-typo']['line-height']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-submenu-typo']['line-height'])) ? $GLOBALS['montserrat_ninzio']['h1-desk-submenu-typo']['line-height'] : "24px";
		$nz_h1_desk_submenu_font_family      = (isset($GLOBALS['montserrat_ninzio']['h1-desk-submenu-typo']['font-family']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-submenu-typo']['font-family'])) ? $GLOBALS['montserrat_ninzio']['h1-desk-submenu-typo']['font-family'] : "Arial, Helvetica, sans-serif";
		$nz_h1_desk_submenu_text_transform   = (isset($GLOBALS['montserrat_ninzio']['h1-desk-submenu-typo']['text-transform']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-submenu-typo']['text-transform'])) ? $GLOBALS['montserrat_ninzio']['h1-desk-submenu-typo']['text-transform'] : "none";
		$nz_h1_desk_megamenu_text_transform  = (isset($GLOBALS['montserrat_ninzio']['h1-desk-megamenu-top-typo']['text-transform']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-megamenu-top-typo']['text-transform'])) ? $GLOBALS['montserrat_ninzio']['h1-desk-megamenu-top-typo']['text-transform'] : $nz_h1_desk_menu_text_transform;
		$nz_h1_desk_megamenu_font_weight     = (isset($GLOBALS['montserrat_ninzio']['h1-desk-megamenu-top-typo']['font-weight']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-megamenu-top-typo']['font-weight'])) ? $GLOBALS['montserrat_ninzio']['h1-desk-megamenu-top-typo']['font-weight'] : $nz_h1_desk_menu_font_weight;
		$nz_h1_desk_megamenu_font_size       = (isset($GLOBALS['montserrat_ninzio']['h1-desk-megamenu-top-typo']['font-size']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-megamenu-top-typo']['font-size'])) ? $GLOBALS['montserrat_ninzio']['h1-desk-megamenu-top-typo']['font-size'] : $nz_h1_desk_menu_font_size;
		$nz_h1_desk_megamenu_color           = (isset($GLOBALS['montserrat_ninzio']['h1-desk-megamenu-top-typo']['color']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-megamenu-top-typo']['color'])) ? $GLOBALS['montserrat_ninzio']['h1-desk-megamenu-top-typo']['color'] : "#ffffff";
		$nz_h1_desk_megamenu_top_border      = (isset($GLOBALS['montserrat_ninzio']['h1-desk-megamenu-top-border']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-megamenu-top-border'])) ? $GLOBALS['montserrat_ninzio']['h1-desk-megamenu-top-border'] : "#f0634c";



		$nz_h1_megamenu_buttons_back_color   = (isset($GLOBALS['montserrat_ninzio']['h1-megamenu-buttons-back-color']) && !empty($GLOBALS['montserrat_ninzio']['h1-megamenu-buttons-back-color'])) ? $GLOBALS['montserrat_ninzio']['h1-megamenu-buttons-back-color'] : '#f0634c';
		$nz_h1_megamenu_buttons_text_color   = (isset($GLOBALS['montserrat_ninzio']['h1-megamenu-buttons-text-color']) && !empty($GLOBALS['montserrat_ninzio']['h1-megamenu-buttons-text-color'])) ? $GLOBALS['montserrat_ninzio']['h1-megamenu-buttons-text-color'] : '#ffffff';

		$nz_h1_desk_fixed_back_color         = (isset($GLOBALS['montserrat_ninzio']['h1-desk-fixed-back-color']['color']) && $GLOBALS['montserrat_ninzio']['h1-desk-fixed-back-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h1-desk-fixed-back-color']['color'],$GLOBALS['montserrat_ninzio']['h1-desk-fixed-back-color']['alpha']) : $nz_h1_desk_back_color;
		$nz_h1_desk_fixed_separator_color    = (isset($GLOBALS['montserrat_ninzio']['h1-desk-fixed-separator-color']['color']) && $GLOBALS['montserrat_ninzio']['h1-desk-fixed-separator-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h1-desk-fixed-separator-color']['color'],$GLOBALS['montserrat_ninzio']['h1-desk-fixed-separator-color']['alpha']) : "";
		$nz_h1_desk_fixed_menu_effect_color  = (isset($GLOBALS['montserrat_ninzio']['h1-desk-fixed-menu-effect-color']['color']) && $GLOBALS['montserrat_ninzio']['h1-desk-fixed-menu-effect-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h1-desk-fixed-menu-effect-color']['color'],$GLOBALS['montserrat_ninzio']['h1-desk-fixed-menu-effect-color']['alpha']) : $nz_h1_desk_menu_effect_color;
		$nz_h1_desk_fixed_menu_color_reg     = (isset($GLOBALS['montserrat_ninzio']['h1-desk-fixed-menu-color']['regular']) && $GLOBALS['montserrat_ninzio']['h1-desk-fixed-menu-color']['regular']) ? $GLOBALS['montserrat_ninzio']['h1-desk-fixed-menu-color']['regular'] : $nz_h1_desk_menu_color_reg;
		$nz_h1_desk_fixed_menu_color_hov     = (isset($GLOBALS['montserrat_ninzio']['h1-desk-fixed-menu-color']['hover']) && $GLOBALS['montserrat_ninzio']['h1-desk-fixed-menu-color']['hover']) ? $GLOBALS['montserrat_ninzio']['h1-desk-fixed-menu-color']['hover'] : $nz_h1_desk_menu_color_hov;

		$nz_h1_desk_fixed_sidebar_toggle_color         = (isset($GLOBALS['montserrat_ninzio']['h1-desk-fixed-sidebar-toggle-color']['color']) && $GLOBALS['montserrat_ninzio']['h1-desk-fixed-sidebar-toggle-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h1-desk-fixed-sidebar-toggle-color']['color'],$GLOBALS['montserrat_ninzio']['h1-desk-fixed-sidebar-toggle-color']['alpha']) : $nz_h1_desk_sidebar_toggle_color;
		$nz_h1_desk_fixed_sidebar_toggle_border_color  = (isset($GLOBALS['montserrat_ninzio']['h1-desk-fixed-sidebar-toggle-border-color']['color']) && $GLOBALS['montserrat_ninzio']['h1-desk-fixed-sidebar-toggle-border-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h1-desk-fixed-sidebar-toggle-border-color']['color'],$GLOBALS['montserrat_ninzio']['h1-desk-fixed-sidebar-toggle-border-color']['alpha']) : $nz_h1_desk_sidebar_toggle_border_color;
		
		// VERSION 2

		$nz_h2_desk_height                   = (isset($GLOBALS['montserrat_ninzio']['h2-desk-height']) && $GLOBALS['montserrat_ninzio']['h2-desk-height']) ? $GLOBALS['montserrat_ninzio']['h2-desk-height'] : "90";
		$nz_h2_fixed_height                  = (isset($GLOBALS['montserrat_ninzio']['h2-fixed-height']) && $GLOBALS['montserrat_ninzio']['h2-fixed-height']) ? $GLOBALS['montserrat_ninzio']['h2-fixed-height'] : "90";
		$nz_h2_header_top_back_color         = (isset($GLOBALS['montserrat_ninzio']['h2-header-top-back-color']['color']) && $GLOBALS['montserrat_ninzio']['h2-header-top-back-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h2-header-top-back-color']['color'],$GLOBALS['montserrat_ninzio']['h2-header-top-back-color']['alpha']) : "#f0634c";
		$nz_h2_header_top_border_color       = (isset($GLOBALS['montserrat_ninzio']['h2-header-top-border-color']['color']) && $GLOBALS['montserrat_ninzio']['h2-header-top-border-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h2-header-top-border-color']['color'],$GLOBALS['montserrat_ninzio']['h2-header-top-border-color']['alpha']) : "";
		
		$nz_h2_header_top_menu_color_reg     = (isset($GLOBALS['montserrat_ninzio']['h2-header-top-menu-color']['regular']) && !empty($GLOBALS['montserrat_ninzio']['h2-header-top-menu-color']['regular'])) ? $GLOBALS['montserrat_ninzio']['h2-header-top-menu-color']['regular'] : '#999999';
		$nz_h2_header_top_menu_color_hov     = (isset($GLOBALS['montserrat_ninzio']['h2-header-top-menu-color']['hover']) && !empty($GLOBALS['montserrat_ninzio']['h2-header-top-menu-color']['hover'])) ? $GLOBALS['montserrat_ninzio']['h2-header-top-menu-color']['hover'] : '#f0634c';
		
		$nz_h2_header_top_social_links_color = (isset($GLOBALS['montserrat_ninzio']['h2-header-top-social-links-color']) && !empty($GLOBALS['montserrat_ninzio']['h2-header-top-social-links-color'])) ? $GLOBALS['montserrat_ninzio']['h2-header-top-social-links-color'] : '#ffffff';
		$nz_h2_top_button_text_color         = (isset($GLOBALS['montserrat_ninzio']['h2-top-button-text-color']) && !empty($GLOBALS['montserrat_ninzio']['h2-top-button-text-color'])) ? $GLOBALS['montserrat_ninzio']['h2-top-button-text-color'] : '#999999';
		$nz_h2_top_button_back_color         = (isset($GLOBALS['montserrat_ninzio']['h2-top-button-back-color']) && !empty($GLOBALS['montserrat_ninzio']['h2-top-button-back-color'])) ? $GLOBALS['montserrat_ninzio']['h2-top-button-back-color'] : '#ffffff';

		$nz_h2_desk_sidebar_toggle_color         = (isset($GLOBALS['montserrat_ninzio']['h2-desk-sidebar-toggle-color']['color']) && $GLOBALS['montserrat_ninzio']['h2-desk-sidebar-toggle-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h2-desk-sidebar-toggle-color']['color'],$GLOBALS['montserrat_ninzio']['h2-desk-sidebar-toggle-color']['alpha']) : "transparent";
		$nz_h2_desk_sidebar_toggle_border_color  = (isset($GLOBALS['montserrat_ninzio']['h2-desk-sidebar-toggle-border-color']['color']) && $GLOBALS['montserrat_ninzio']['h2-desk-sidebar-toggle-border-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h2-desk-sidebar-toggle-border-color']['color'],$GLOBALS['montserrat_ninzio']['h2-desk-sidebar-toggle-border-color']['alpha']) : "transparent";

		$nz_h2_desk_back_color               = (isset($GLOBALS['montserrat_ninzio']['h2-desk-back-color']['color']) && $GLOBALS['montserrat_ninzio']['h2-desk-back-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h2-desk-back-color']['color'],$GLOBALS['montserrat_ninzio']['h2-desk-back-color']['alpha']) : "#ffffff";
		$nz_h2_desk_border_color             = (isset($GLOBALS['montserrat_ninzio']['h2-desk-border-color']['color']) && $GLOBALS['montserrat_ninzio']['h2-desk-border-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h2-desk-border-color']['color'],$GLOBALS['montserrat_ninzio']['h2-desk-border-color']['alpha']) : "";
		$nz_h2_desk_menu_effect_color        = (isset($GLOBALS['montserrat_ninzio']['h2-desk-menu-effect-color']['color']) && $GLOBALS['montserrat_ninzio']['h2-desk-menu-effect-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h2-desk-menu-effect-color']['color'],$GLOBALS['montserrat_ninzio']['h2-desk-menu-effect-color']['alpha']) : "#f0634c";
		$nz_h2_desk_menu_color_reg           = (isset($GLOBALS['montserrat_ninzio']['h2-desk-menu-color']['regular']) && $GLOBALS['montserrat_ninzio']['h2-desk-menu-color']['regular']) ? $GLOBALS['montserrat_ninzio']['h2-desk-menu-color']['regular'] : "#999999";
		$nz_h2_desk_menu_color_hov           = (isset($GLOBALS['montserrat_ninzio']['h2-desk-menu-color']['hover']) && $GLOBALS['montserrat_ninzio']['h2-desk-menu-color']['hover']) ? $GLOBALS['montserrat_ninzio']['h2-desk-menu-color']['hover'] : "#999999";
		$nz_h2_desk_submenu_back_color       = (isset($GLOBALS['montserrat_ninzio']['h2-desk-submenu-back-color']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-submenu-back-color'])) ? $GLOBALS['montserrat_ninzio']['h2-desk-submenu-back-color'] : '#292929';
		$nz_h2_desk_submenu_effect_color     = (isset($GLOBALS['montserrat_ninzio']['h2-desk-submenu-effect-color']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-submenu-effect-color'])) ? $GLOBALS['montserrat_ninzio']['h2-desk-submenu-effect-color'] : '#f0634c';
		$nz_h2_desk_submenu_color_reg        = (isset($GLOBALS['montserrat_ninzio']['h2-desk-submenu-color']['regular']) && $GLOBALS['montserrat_ninzio']['h2-desk-submenu-color']['regular']) ? $GLOBALS['montserrat_ninzio']['h2-desk-submenu-color']['regular'] : "#999999";
		$nz_h2_desk_submenu_color_hov        = (isset($GLOBALS['montserrat_ninzio']['h2-desk-submenu-color']['hover']) && $GLOBALS['montserrat_ninzio']['h2-desk-submenu-color']['hover']) ? $GLOBALS['montserrat_ninzio']['h2-desk-submenu-color']['hover'] : "#ffffff";

		$nz_h2_desk_menu_m                   = (isset($GLOBALS['montserrat_ninzio']['h2-desk-menu-m']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-menu-m'])) ? $GLOBALS['montserrat_ninzio']['h2-desk-menu-m'] : '0';
		$nz_h2_desk_menu_m_1600              = (isset($GLOBALS['montserrat_ninzio']['h2-desk-menu-m-1600']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-menu-m-1600'])) ? $GLOBALS['montserrat_ninzio']['h2-desk-menu-m-1600'] : $nz_h2_desk_menu_m;
		$nz_h2_desk_ls_w    	             = (isset($GLOBALS['montserrat_ninzio']['h2-desk-lw']['width']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-lw']['width'])) ? $GLOBALS['montserrat_ninzio']['h2-desk-lw']['width'] : "149px"; 
		$nz_h2_desk_menu_font_weight         = (isset($GLOBALS['montserrat_ninzio']['h2-desk-menu-typo']['font-weight']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-menu-typo']['font-weight'])) ? $GLOBALS['montserrat_ninzio']['h2-desk-menu-typo']['font-weight'] : "normal";
		$nz_h2_desk_menu_font_size           = (isset($GLOBALS['montserrat_ninzio']['h2-desk-menu-typo']['font-size']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-menu-typo']['font-size'])) ? $GLOBALS['montserrat_ninzio']['h2-desk-menu-typo']['font-size'] : "14px";
		$nz_h2_desk_menu_font_family         = (isset($GLOBALS['montserrat_ninzio']['h2-desk-menu-typo']['font-family']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-menu-typo']['font-family'])) ? $GLOBALS['montserrat_ninzio']['h2-desk-menu-typo']['font-family'] : "Arial, Helvetica, sans-serif";
		$nz_h2_desk_menu_text_transform      = (isset($GLOBALS['montserrat_ninzio']['h2-desk-menu-typo']['text-transform']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-menu-typo']['text-transform'])) ? $GLOBALS['montserrat_ninzio']['h2-desk-menu-typo']['text-transform'] : "none";
		$nz_h2_desk_submenu_font_size        = (isset($GLOBALS['montserrat_ninzio']['h2-desk-submenu-typo']['font-size']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-submenu-typo']['font-size'])) ? $GLOBALS['montserrat_ninzio']['h2-desk-submenu-typo']['font-size'] : "14px";
		$nz_h2_desk_submenu_font_weight      = (isset($GLOBALS['montserrat_ninzio']['h2-desk-submenu-typo']['font-weight']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-submenu-typo']['font-weight'])) ? $GLOBALS['montserrat_ninzio']['h2-desk-submenu-typo']['font-weight'] : "400";
		$nz_h2_desk_submenu_line_height      = (isset($GLOBALS['montserrat_ninzio']['h2-desk-submenu-typo']['line-height']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-submenu-typo']['line-height'])) ? $GLOBALS['montserrat_ninzio']['h2-desk-submenu-typo']['line-height'] : "24px";
		$nz_h2_desk_submenu_font_family      = (isset($GLOBALS['montserrat_ninzio']['h2-desk-submenu-typo']['font-family']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-submenu-typo']['font-family'])) ? $GLOBALS['montserrat_ninzio']['h2-desk-submenu-typo']['font-family'] : "Arial, Helvetica, sans-serif";
		$nz_h2_desk_submenu_text_transform   = (isset($GLOBALS['montserrat_ninzio']['h2-desk-submenu-typo']['text-transform']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-submenu-typo']['text-transform'])) ? $GLOBALS['montserrat_ninzio']['h2-desk-submenu-typo']['text-transform'] : "none";
		$nz_h2_desk_megamenu_text_transform  = (isset($GLOBALS['montserrat_ninzio']['h2-desk-megamenu-top-typo']['text-transform']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-megamenu-top-typo']['text-transform'])) ? $GLOBALS['montserrat_ninzio']['h2-desk-megamenu-top-typo']['text-transform'] : $nz_h2_desk_menu_text_transform;
		$nz_h2_desk_megamenu_font_weight     = (isset($GLOBALS['montserrat_ninzio']['h2-desk-megamenu-top-typo']['font-weight']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-megamenu-top-typo']['font-weight'])) ? $GLOBALS['montserrat_ninzio']['h2-desk-megamenu-top-typo']['font-weight'] : $nz_h2_desk_menu_font_weight;
		$nz_h2_desk_megamenu_font_size       = (isset($GLOBALS['montserrat_ninzio']['h2-desk-megamenu-top-typo']['font-size']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-megamenu-top-typo']['font-size'])) ? $GLOBALS['montserrat_ninzio']['h2-desk-megamenu-top-typo']['font-size'] : $nz_h2_desk_menu_font_size;
		$nz_h2_desk_megamenu_color           = (isset($GLOBALS['montserrat_ninzio']['h2-desk-megamenu-top-typo']['color']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-megamenu-top-typo']['color'])) ? $GLOBALS['montserrat_ninzio']['h2-desk-megamenu-top-typo']['color'] : "#ffffff";
		$nz_h2_desk_megamenu_top_border      = (isset($GLOBALS['montserrat_ninzio']['h2-desk-megamenu-top-border']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-megamenu-top-border'])) ? $GLOBALS['montserrat_ninzio']['h2-desk-megamenu-top-border'] : "#f0634c";

		$nz_h2_megamenu_buttons_back_color   = (isset($GLOBALS['montserrat_ninzio']['h2-megamenu-buttons-back-color']) && !empty($GLOBALS['montserrat_ninzio']['h2-megamenu-buttons-back-color'])) ? $GLOBALS['montserrat_ninzio']['h2-megamenu-buttons-back-color'] : '#f0634c';
		$nz_h2_megamenu_buttons_text_color   = (isset($GLOBALS['montserrat_ninzio']['h2-megamenu-buttons-text-color']) && !empty($GLOBALS['montserrat_ninzio']['h2-megamenu-buttons-text-color'])) ? $GLOBALS['montserrat_ninzio']['h2-megamenu-buttons-text-color'] : '#ffffff';

		$nz_h2_desk_fixed_back_color         = (isset($GLOBALS['montserrat_ninzio']['h2-desk-fixed-back-color']['color']) && $GLOBALS['montserrat_ninzio']['h2-desk-fixed-back-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h2-desk-fixed-back-color']['color'],$GLOBALS['montserrat_ninzio']['h2-desk-fixed-back-color']['alpha']) : $nz_h2_desk_back_color;
		$nz_h2_desk_fixed_menu_effect_color  = (isset($GLOBALS['montserrat_ninzio']['h2-desk-fixed-menu-effect-color']['color']) && $GLOBALS['montserrat_ninzio']['h2-desk-fixed-menu-effect-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h2-desk-fixed-menu-effect-color']['color'],$GLOBALS['montserrat_ninzio']['h2-desk-fixed-menu-effect-color']['alpha']) : $nz_h2_desk_menu_effect_color;
		$nz_h2_desk_fixed_menu_color_reg     = (isset($GLOBALS['montserrat_ninzio']['h2-desk-fixed-menu-color']['regular']) && $GLOBALS['montserrat_ninzio']['h2-desk-fixed-menu-color']['regular']) ? $GLOBALS['montserrat_ninzio']['h2-desk-fixed-menu-color']['regular'] : $nz_h2_desk_menu_color_reg;
		$nz_h2_desk_fixed_menu_color_hov     = (isset($GLOBALS['montserrat_ninzio']['h2-desk-fixed-menu-color']['hover']) && $GLOBALS['montserrat_ninzio']['h2-desk-fixed-menu-color']['hover']) ? $GLOBALS['montserrat_ninzio']['h2-desk-fixed-menu-color']['hover'] : $nz_h2_desk_menu_color_hov;

		$nz_h2_desk_fixed_sidebar_toggle_color         = (isset($GLOBALS['montserrat_ninzio']['h2-desk-fixed-sidebar-toggle-color']['color']) && $GLOBALS['montserrat_ninzio']['h2-desk-fixed-sidebar-toggle-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h2-desk-fixed-sidebar-toggle-color']['color'],$GLOBALS['montserrat_ninzio']['h2-desk-fixed-sidebar-toggle-color']['alpha']) : $nz_h2_desk_sidebar_toggle_color;
		$nz_h2_desk_fixed_sidebar_toggle_border_color  = (isset($GLOBALS['montserrat_ninzio']['h2-desk-fixed-sidebar-toggle-border-color']['color']) && $GLOBALS['montserrat_ninzio']['h2-desk-fixed-sidebar-toggle-border-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h2-desk-fixed-sidebar-toggle-border-color']['color'],$GLOBALS['montserrat_ninzio']['h2-desk-fixed-sidebar-toggle-border-color']['alpha']) : $nz_h2_desk_sidebar_toggle_border_color;

		// VERSION 3

		$nz_h3_desk_height                   = (isset($GLOBALS['montserrat_ninzio']['h3-desk-height']) && $GLOBALS['montserrat_ninzio']['h3-desk-height']) ? $GLOBALS['montserrat_ninzio']['h3-desk-height'] : "90";
		$nz_h3_fixed_height                  = (isset($GLOBALS['montserrat_ninzio']['h3-fixed-height']) && $GLOBALS['montserrat_ninzio']['h3-fixed-height']) ? $GLOBALS['montserrat_ninzio']['h3-fixed-height'] : "90";
		
		$nz_h3_desk_social_links_color     = (isset($GLOBALS['montserrat_ninzio']['h3-desk-social-links-color']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-social-links-color'])) ? $GLOBALS['montserrat_ninzio']['h3-desk-social-links-color'] : '#999999';
		$nz_h3_desk_sidebar_toggle_color         = (isset($GLOBALS['montserrat_ninzio']['h3-desk-sidebar-toggle-color']['color']) && $GLOBALS['montserrat_ninzio']['h3-desk-sidebar-toggle-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h3-desk-sidebar-toggle-color']['color'],$GLOBALS['montserrat_ninzio']['h3-desk-sidebar-toggle-color']['alpha']) : "transparent";
		$nz_h3_desk_sidebar_toggle_border_color  = (isset($GLOBALS['montserrat_ninzio']['h3-desk-sidebar-toggle-border-color']['color']) && $GLOBALS['montserrat_ninzio']['h3-desk-sidebar-toggle-border-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h3-desk-sidebar-toggle-border-color']['color'],$GLOBALS['montserrat_ninzio']['h3-desk-sidebar-toggle-border-color']['alpha']) : "transparent";
		$nz_h3_desk_back_color               = (isset($GLOBALS['montserrat_ninzio']['h3-desk-back-color']['color']) && $GLOBALS['montserrat_ninzio']['h3-desk-back-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h3-desk-back-color']['color'],$GLOBALS['montserrat_ninzio']['h3-desk-back-color']['alpha']) : "#ffffff";
		$nz_h3_desk_border_color             = (isset($GLOBALS['montserrat_ninzio']['h3-desk-border-color']['color']) && $GLOBALS['montserrat_ninzio']['h3-desk-border-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h3-desk-border-color']['color'],$GLOBALS['montserrat_ninzio']['h3-desk-border-color']['alpha']) : "";
		$nz_h3_desk_separator_color          = (isset($GLOBALS['montserrat_ninzio']['h3-desk-separator-color']['color']) && $GLOBALS['montserrat_ninzio']['h3-desk-separator-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h3-desk-separator-color']['color'],$GLOBALS['montserrat_ninzio']['h3-desk-separator-color']['alpha']) : "";
		$nz_h3_desk_menu_effect_color        = (isset($GLOBALS['montserrat_ninzio']['h3-desk-menu-effect-color']['color']) && $GLOBALS['montserrat_ninzio']['h3-desk-menu-effect-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h3-desk-menu-effect-color']['color'],$GLOBALS['montserrat_ninzio']['h3-desk-menu-effect-color']['alpha']) : "#f0634c";
		$nz_h3_desk_menu_color_reg           = (isset($GLOBALS['montserrat_ninzio']['h3-desk-menu-color']['regular']) && $GLOBALS['montserrat_ninzio']['h3-desk-menu-color']['regular']) ? $GLOBALS['montserrat_ninzio']['h3-desk-menu-color']['regular'] : "#999999";
		$nz_h3_desk_menu_color_hov           = (isset($GLOBALS['montserrat_ninzio']['h3-desk-menu-color']['hover']) && $GLOBALS['montserrat_ninzio']['h3-desk-menu-color']['hover']) ? $GLOBALS['montserrat_ninzio']['h3-desk-menu-color']['hover'] : "#999999";
		$nz_h3_desk_submenu_back_color       = (isset($GLOBALS['montserrat_ninzio']['h3-desk-submenu-back-color']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-submenu-back-color'])) ? $GLOBALS['montserrat_ninzio']['h3-desk-submenu-back-color'] : '#292929';
		$nz_h3_desk_submenu_effect_color     = (isset($GLOBALS['montserrat_ninzio']['h3-desk-submenu-effect-color']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-submenu-effect-color'])) ? $GLOBALS['montserrat_ninzio']['h3-desk-submenu-effect-color'] : '#f0634c';
		$nz_h3_desk_submenu_color_reg        = (isset($GLOBALS['montserrat_ninzio']['h3-desk-submenu-color']['regular']) && $GLOBALS['montserrat_ninzio']['h3-desk-submenu-color']['regular']) ? $GLOBALS['montserrat_ninzio']['h3-desk-submenu-color']['regular'] : "#999999";
		$nz_h3_desk_submenu_color_hov        = (isset($GLOBALS['montserrat_ninzio']['h3-desk-submenu-color']['hover']) && $GLOBALS['montserrat_ninzio']['h3-desk-submenu-color']['hover']) ? $GLOBALS['montserrat_ninzio']['h3-desk-submenu-color']['hover'] : "#ffffff";

		$nz_h3_desk_menu_m                   = (isset($GLOBALS['montserrat_ninzio']['h3-desk-menu-m']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-menu-m'])) ? $GLOBALS['montserrat_ninzio']['h3-desk-menu-m'] : '0';
		$nz_h3_desk_menu_m_1600              = (isset($GLOBALS['montserrat_ninzio']['h3-desk-menu-m-1600']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-menu-m-1600'])) ? $GLOBALS['montserrat_ninzio']['h3-desk-menu-m-1600'] : $nz_h3_desk_menu_m;
		$nz_h3_desk_ls_w    	             = (isset($GLOBALS['montserrat_ninzio']['h3-desk-lw']['width']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-lw']['width'])) ? $GLOBALS['montserrat_ninzio']['h3-desk-lw']['width'] : "149px"; 
		$nz_h3_desk_menu_font_weight         = (isset($GLOBALS['montserrat_ninzio']['h3-desk-menu-typo']['font-weight']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-menu-typo']['font-weight'])) ? $GLOBALS['montserrat_ninzio']['h3-desk-menu-typo']['font-weight'] : "normal";
		$nz_h3_desk_menu_font_size           = (isset($GLOBALS['montserrat_ninzio']['h3-desk-menu-typo']['font-size']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-menu-typo']['font-size'])) ? $GLOBALS['montserrat_ninzio']['h3-desk-menu-typo']['font-size'] : "14px";
		$nz_h3_desk_menu_font_family         = (isset($GLOBALS['montserrat_ninzio']['h3-desk-menu-typo']['font-family']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-menu-typo']['font-family'])) ? $GLOBALS['montserrat_ninzio']['h3-desk-menu-typo']['font-family'] : "Arial, Helvetica, sans-serif";
		$nz_h3_desk_menu_text_transform      = (isset($GLOBALS['montserrat_ninzio']['h3-desk-menu-typo']['text-transform']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-menu-typo']['text-transform'])) ? $GLOBALS['montserrat_ninzio']['h3-desk-menu-typo']['text-transform'] : "none";
		$nz_h3_desk_submenu_font_size        = (isset($GLOBALS['montserrat_ninzio']['h3-desk-submenu-typo']['font-size']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-submenu-typo']['font-size'])) ? $GLOBALS['montserrat_ninzio']['h3-desk-submenu-typo']['font-size'] : "14px";
		$nz_h3_desk_submenu_font_weight      = (isset($GLOBALS['montserrat_ninzio']['h3-desk-submenu-typo']['font-weight']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-submenu-typo']['font-weight'])) ? $GLOBALS['montserrat_ninzio']['h3-desk-submenu-typo']['font-weight'] : "400";
		$nz_h3_desk_submenu_line_height      = (isset($GLOBALS['montserrat_ninzio']['h3-desk-submenu-typo']['line-height']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-submenu-typo']['line-height'])) ? $GLOBALS['montserrat_ninzio']['h3-desk-submenu-typo']['line-height'] : "24px";
		$nz_h3_desk_submenu_font_family      = (isset($GLOBALS['montserrat_ninzio']['h3-desk-submenu-typo']['font-family']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-submenu-typo']['font-family'])) ? $GLOBALS['montserrat_ninzio']['h3-desk-submenu-typo']['font-family'] : "Arial, Helvetica, sans-serif";
		$nz_h3_desk_submenu_text_transform   = (isset($GLOBALS['montserrat_ninzio']['h3-desk-submenu-typo']['text-transform']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-submenu-typo']['text-transform'])) ? $GLOBALS['montserrat_ninzio']['h3-desk-submenu-typo']['text-transform'] : "none";
		$nz_h3_desk_megamenu_text_transform  = (isset($GLOBALS['montserrat_ninzio']['h3-desk-megamenu-top-typo']['text-transform']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-megamenu-top-typo']['text-transform'])) ? $GLOBALS['montserrat_ninzio']['h3-desk-megamenu-top-typo']['text-transform'] : $nz_h3_desk_menu_text_transform;
		$nz_h3_desk_megamenu_font_weight     = (isset($GLOBALS['montserrat_ninzio']['h3-desk-megamenu-top-typo']['font-weight']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-megamenu-top-typo']['font-weight'])) ? $GLOBALS['montserrat_ninzio']['h3-desk-megamenu-top-typo']['font-weight'] : $nz_h3_desk_menu_font_weight;
		$nz_h3_desk_megamenu_font_size       = (isset($GLOBALS['montserrat_ninzio']['h3-desk-megamenu-top-typo']['font-size']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-megamenu-top-typo']['font-size'])) ? $GLOBALS['montserrat_ninzio']['h3-desk-megamenu-top-typo']['font-size'] : $nz_h3_desk_menu_font_size;
		$nz_h3_desk_megamenu_color           = (isset($GLOBALS['montserrat_ninzio']['h3-desk-megamenu-top-typo']['color']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-megamenu-top-typo']['color'])) ? $GLOBALS['montserrat_ninzio']['h3-desk-megamenu-top-typo']['color'] : "#ffffff";
		$nz_h3_desk_megamenu_top_border      = (isset($GLOBALS['montserrat_ninzio']['h3-desk-megamenu-top-border']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-megamenu-top-border'])) ? $GLOBALS['montserrat_ninzio']['h3-desk-megamenu-top-border'] : "#f0634c";

		$nz_h3_megamenu_buttons_back_color   = (isset($GLOBALS['montserrat_ninzio']['h3-megamenu-buttons-back-color']) && !empty($GLOBALS['montserrat_ninzio']['h3-megamenu-buttons-back-color'])) ? $GLOBALS['montserrat_ninzio']['h3-megamenu-buttons-back-color'] : '#f0634c';
		$nz_h3_megamenu_buttons_text_color   = (isset($GLOBALS['montserrat_ninzio']['h3-megamenu-buttons-text-color']) && !empty($GLOBALS['montserrat_ninzio']['h3-megamenu-buttons-text-color'])) ? $GLOBALS['montserrat_ninzio']['h3-megamenu-buttons-text-color'] : '#ffffff';

		$nz_h3_desk_fixed_back_color         = (isset($GLOBALS['montserrat_ninzio']['h3-desk-fixed-back-color']['color']) && $GLOBALS['montserrat_ninzio']['h3-desk-fixed-back-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h3-desk-fixed-back-color']['color'],$GLOBALS['montserrat_ninzio']['h3-desk-fixed-back-color']['alpha']) : $nz_h3_desk_back_color;
		$nz_h3_desk_fixed_separator_color    = (isset($GLOBALS['montserrat_ninzio']['h3-desk-fixed-separator-color']['color']) && $GLOBALS['montserrat_ninzio']['h3-desk-fixed-separator-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h3-desk-fixed-separator-color']['color'],$GLOBALS['montserrat_ninzio']['h3-desk-fixed-separator-color']['alpha']) : "";
		$nz_h3_desk_fixed_menu_effect_color  = (isset($GLOBALS['montserrat_ninzio']['h3-desk-fixed-menu-effect-color']['color']) && $GLOBALS['montserrat_ninzio']['h3-desk-fixed-menu-effect-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h3-desk-fixed-menu-effect-color']['color'],$GLOBALS['montserrat_ninzio']['h3-desk-fixed-menu-effect-color']['alpha']) : $nz_h3_desk_menu_effect_color;
		$nz_h3_desk_fixed_menu_color_reg     = (isset($GLOBALS['montserrat_ninzio']['h3-desk-fixed-menu-color']['regular']) && $GLOBALS['montserrat_ninzio']['h3-desk-fixed-menu-color']['regular']) ? $GLOBALS['montserrat_ninzio']['h3-desk-fixed-menu-color']['regular'] : $nz_h3_desk_menu_color_reg;
		$nz_h3_desk_fixed_menu_color_hov     = (isset($GLOBALS['montserrat_ninzio']['h3-desk-fixed-menu-color']['hover']) && $GLOBALS['montserrat_ninzio']['h3-desk-fixed-menu-color']['hover']) ? $GLOBALS['montserrat_ninzio']['h3-desk-fixed-menu-color']['hover'] : $nz_h3_desk_menu_color_hov;

		$nz_h3_desk_fixed_social_links_color     = (isset($GLOBALS['montserrat_ninzio']['h3-desk-fixed-social-links-color']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-fixed-social-links-color'])) ? $GLOBALS['montserrat_ninzio']['h3-desk-fixed-social-links-color'] : $nz_h3_desk_social_links_color;

		$nz_h3_desk_fixed_sidebar_toggle_color         = (isset($GLOBALS['montserrat_ninzio']['h3-desk-fixed-sidebar-toggle-color']['color']) && $GLOBALS['montserrat_ninzio']['h3-desk-fixed-sidebar-toggle-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h3-desk-fixed-sidebar-toggle-color']['color'],$GLOBALS['montserrat_ninzio']['h3-desk-fixed-sidebar-toggle-color']['alpha']) : $nz_h3_desk_sidebar_toggle_color;
		$nz_h3_desk_fixed_sidebar_toggle_border_color  = (isset($GLOBALS['montserrat_ninzio']['h3-desk-fixed-sidebar-toggle-border-color']['color']) && $GLOBALS['montserrat_ninzio']['h3-desk-fixed-sidebar-toggle-border-color']['color']) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['h3-desk-fixed-sidebar-toggle-border-color']['color'],$GLOBALS['montserrat_ninzio']['h3-desk-fixed-sidebar-toggle-border-color']['alpha']) : $nz_h3_desk_sidebar_toggle_border_color;

	/*	SHOP PAGE TITLE OPTIONS
	/*--------------------------*/

	    $nz_shop_text_color             = (isset( $GLOBALS['montserrat_ninzio']['shop-text-color']) && !empty($GLOBALS['montserrat_ninzio']['shop-text-color'])) ? $GLOBALS['montserrat_ninzio']["shop-text-color"] : "";
	    $nz_shop_back_color             = (isset( $GLOBALS['montserrat_ninzio']['shop-back']['background-color']) && !empty($GLOBALS['montserrat_ninzio']['shop-back']['background-color'])) ? $GLOBALS['montserrat_ninzio']["shop-back"]['background-color'] : "#333333";
	    $nz_shop_back_img               = (isset( $GLOBALS['montserrat_ninzio']['shop-back']['background-image']) && !empty($GLOBALS['montserrat_ninzio']['shop-back']['background-image'])) ? $GLOBALS['montserrat_ninzio']['shop-back']["background-image"] : "";
	    $nz_shop_back_img_repeat        = (isset( $GLOBALS['montserrat_ninzio']['shop-back']['background-repeat']) && !empty($GLOBALS['montserrat_ninzio']['shop-back']['background-repeat'])) ? $GLOBALS['montserrat_ninzio']['shop-back']['background-repeat'] : "no-repeat";
	    $nz_shop_back_img_position      = (isset( $GLOBALS['montserrat_ninzio']['shop-back']['background-position']) && !empty($GLOBALS['montserrat_ninzio']['shop-back']['background-position'])) ? $GLOBALS['montserrat_ninzio']['shop-back']['background-position'] : "left top";
	    $nz_shop_back_img_attachment    = (isset( $GLOBALS['montserrat_ninzio']['shop-back']['background-attachment']) && !empty($GLOBALS['montserrat_ninzio']['shop-back']['background-attachment'])) ? $GLOBALS['montserrat_ninzio']['shop-back']['background-attachment'] : "scroll";
	    $nz_shop_back_img_size          = (isset( $GLOBALS['montserrat_ninzio']['shop-back']['background-size']) && !empty($GLOBALS['montserrat_ninzio']['shop-back']['background-size'])) ? $GLOBALS['montserrat_ninzio']['shop-back']['background-size'] : "auto";
	    $nz_shop_breadcrumbs_text_color = (isset( $GLOBALS['montserrat_ninzio']['shop-breadcrumbs-text-color']) && !empty($GLOBALS['montserrat_ninzio']['shop-breadcrumbs-text-color'])) ? $GLOBALS['montserrat_ninzio']["shop-breadcrumbs-text-color"] : "#ffffff";

	/*	FOOTER OPTIONS
	/*--------------------------*/

		$nz_footer_back_col   = (isset($GLOBALS['montserrat_ninzio']['footer-background']['background-color']) && $GLOBALS['montserrat_ninzio']['footer-background']['background-color']) ? $GLOBALS['montserrat_ninzio']['footer-background']['background-color'] : "#2d3034";
		$nz_footer_back_img   = (isset($GLOBALS['montserrat_ninzio']['footer-background']['background-image']) && $GLOBALS['montserrat_ninzio']['footer-background']['background-image']) ? esc_url($GLOBALS['montserrat_ninzio']['footer-background']['background-image']) : "";
		$nz_footer_back_r     = (isset($GLOBALS['montserrat_ninzio']['footer-background']['background-repeat']) && $GLOBALS['montserrat_ninzio']['footer-background']['background-repeat']) ? $GLOBALS['montserrat_ninzio']['footer-background']['background-repeat'] : "no-repeat";
		$nz_footer_back_s     = (isset($GLOBALS['montserrat_ninzio']['footer-background']['background-size']) && $GLOBALS['montserrat_ninzio']['footer-background']['background-size']) ? $GLOBALS['montserrat_ninzio']['footer-background']['background-size'] : "cover";
		$nz_footer_back_a     = (isset($GLOBALS['montserrat_ninzio']['footer-background']['background-attachment']) && $GLOBALS['montserrat_ninzio']['footer-background']['background-attachment']) ? $GLOBALS['montserrat_ninzio']['footer-background']['background-attachment'] : "scroll";
		$nz_footer_back_p     = (isset($GLOBALS['montserrat_ninzio']['footer-background']['background-position']) && $GLOBALS['montserrat_ninzio']['footer-background']['background-position']) ? $GLOBALS['montserrat_ninzio']['footer-background']['background-position'] : "center center";

    $dynamic_css = "";

	if(isset($GLOBALS['montserrat_ninzio']['font-custom-css']) && !empty($GLOBALS['montserrat_ninzio']['font-custom-css'])){
		$dynamic_css .= esc_html($GLOBALS['montserrat_ninzio']['font-custom-css']);
	}

	if(isset($GLOBALS['montserrat_ninzio']['custom-css']) && !empty($GLOBALS['montserrat_ninzio']['custom-css'])){
		$dynamic_css .= $GLOBALS['montserrat_ninzio']['custom-css'];
	}

	/*  TYPOGRAPHY
	/*-------------------------*/
		
		$dynamic_css .='body,input,pre,code,kbd,samp,dt{
			font-size: '.$nz_main_font_size.';
			line-height: '.$nz_main_line_height.';
			font-family:'.$nz_main_font_family.';
		}';

		$dynamic_css .='.desk .header-top-menu ul li > a .txt {
			font-family:'.$nz_main_font_family.' !important;
		}';

		$dynamic_css .='h1,h2,h3,h4,h5,h6 {
			font-family:'.$nz_headings_font_family.';
			text-transform: '.$nz_headings_text_transform.';
		}';

		$dynamic_css .='h1 {font-size: '.$nz_h1_font_size.'; line-height: '.$nz_h1_line_height.';}';
		$dynamic_css .='h2 {font-size: '.$nz_h2_font_size.'; line-height: '.$nz_h2_line_height.';}';
		$dynamic_css .='h3 {font-size: '.$nz_h3_font_size.'; line-height: '.$nz_h3_line_height.';}';
		$dynamic_css .='h4 {font-size: '.$nz_h4_font_size.'; line-height: '.$nz_h4_line_height.';}';
		$dynamic_css .='h5 {font-size: '.$nz_h5_font_size.'; line-height: '.$nz_h5_line_height.';}';
		$dynamic_css .='h6 {font-size: '.$nz_h6_font_size.'; line-height: '.$nz_h6_line_height.';}';

		$dynamic_css .='.ls a,.mob-menu li a,#nz-content .search input[type="text"],
		.mob-header-content .header-top-menu li a,.mob-header-content .top-button,
		.header-top .top-button,.widget_title,.yawp_wim_title,textarea,select,button,
		.button, .button .txt,input[type="month"],input[type="number"],input[type="submit"],
		input[type="button"],input[type="date"],input[type="datetime"],input[type="password"],
		input[type="search"],input[type="datetime-local"],input[type="email"],input[type="tel"],
		input[type="text"],input[type="time"],input[type="url"],input[type="week"],
		input[type="reset"],.nz-timer,.count-value,.nz-testimonials .name,
		.nz-persons .person .name,.nz-pricing-table > .column .title,
		.nz-pricing-table .price,.tabset .tab,
		.toggle-title .toggle-title-header,.ninzio-navigation,.woocommerce-pagination,
		.ninzio-filter .filter, .single-details .nz-i-list a,.nz-table th,
		.comment-meta .comment-author cite,.wp-caption .wp-caption-text,
		.woocommerce .product .added_to_cart,.woocommerce-tabs .tabs > li,
		.woocommerce .single-product-summary .amount,.reset_variations,
		.footer-menu > ul > li > a,.share-label,.comment-meta .replay a,
		.woocommerce-tabs .commentlist .comment-text .meta,a.edit,a.view,
		.widget_icl_lang_sel_widget,.nz-progress .progress-percent,
		.nz-progress .progress-title,.nz-content-box-2 .box-title span,
		.footer-info,.product .price,.related-products-title h3,.post .post-more,
		.ninzio-nav-single > *,.error404-big,.box-more,.count-title,.nz-pricing-table .hlabel,
		.widget_nz_recent_entries .post .post-date-custom,.standard .post-date-custom,.status-author,
		.quote-author,.link-link,.single .post-social-share .social-links a span,
		.woocommerce .product .onsale,.widget_tag_cloud .tagcloud a,.post-tags a,
		.widget_product_tag_cloud .tagcloud a,.projects-tags a,
		.widget_recent_entries a,.widget_categories ul li a,
		.widget_pages ul li a,.widget_archive ul li a,
		.widget_meta ul li a,
		.widget_nav_menu li a,
		.widget_product_categories li a,
		.post .post-category ul li a,
		.tagline-title,
		.nz-accordion .toggle-title {
			font-family:'.$nz_headings_font_family.' !important;
		}';

	/*  BACKGROUND
	/*-------------------------*/

		$dynamic_css .='html,
		#gen-wrap {
			background-color:'.$nz_site_back_col.';';
			if(!empty($nz_site_back_img)){
				$dynamic_css .='background-image:url('.$nz_site_back_img.');
				background-repeat:'.$nz_site_back_r.';
				background-attachment: '.$nz_site_back_a.';
				-webkit-background-size: '.$nz_site_back_s.';
				-moz-background-size: '.$nz_site_back_s.';
				background-size: '.$nz_site_back_s.';
				background-position:'.$nz_site_back_p;
			}
		$dynamic_css .='}';

		$dynamic_css .='.shoping-cart .rich-header,
		.woo-account .rich-header,
		.shoping-cart .parallax-container,
		.woo-account .parallax-container,
		.shoping-cart .fixed-container,
		.woo-account .fixed-container {';
			if(!empty($nz_shop_back_img)){
				$dynamic_css .='background-image:url('.$nz_shop_back_img.');
				background-repeat:'.$nz_shop_back_img_repeat.';
				background-attachment: '.$nz_shop_back_img_attachment.';
				-webkit-background-size: '.$nz_shop_back_img_size.';
				-moz-background-size: '.$nz_shop_back_img_size.';
				background-size: '.$nz_shop_back_img_size.';
				background-position:'.$nz_shop_back_img_position;
			}
		$dynamic_css .='}';

		$dynamic_css .='.shoping-cart .rich-header h1,
		.woo-account .rich-header h1 {
			color:'.$nz_shop_text_color.'; 
		}';

		$dynamic_css .='.shoping-cart .rich-header .nz-breadcrumbs,
		.woo-account .rich-header .nz-breadcrumbs {
			color:'.$nz_shop_breadcrumbs_text_color.'; 
		}';

		$dynamic_css .='.footer-wa {
			background-color:'.$nz_footer_back_col.' !important;';
			if(!empty($nz_footer_back_img)){
				$dynamic_css .='background-image:url('.$nz_footer_back_img.';);
				background-repeat:'.$nz_footer_back_r.';
				background-attachment: '.$nz_footer_back_a.';
				-webkit-background-size: '.$nz_footer_back_s.';
				-moz-background-size: '.$nz_footer_back_s.';
				background-size: '.$nz_footer_back_s.';
				background-position:'.$nz_footer_back_p;
			}
		$dynamic_css .='}';

	/*  COLOR
	/*-------------------------*/
		
		$dynamic_css .='::-moz-selection {
			background-color:'.$montserrat_ninzio_main_color.';
			color: #ffffff;
		}';

		$dynamic_css .='::selection {
			background-color:'.$montserrat_ninzio_main_color.';
			color: #ffffff;
		}';

		/*COLOR DYNAMIC STYLES*/

		$dynamic_css .='.mob-menu li a:hover,
		.mob-menu .current-menu-item > a,
		.mob-menu .current-menu-parent > a,
		.mob-menu .current-menu-ancestor > a,
		.mob-menu ul li > a:hover > .di,
		.mob-menu .current-menu-item > a > .di,
		.mob-menu .current-menu-parent > a > .di,
		.mob-menu .current-menu-ancestor > a > .di,
		.mob-header-content .header-top-menu li a:hover,
		.mob-header-content .header-top-menu .current-menu-item > a,
		.mob-header-content .header-top-menu .current-menu-parent > a,
		.mob-header-content .header-top-menu .current-menu-ancestor > a,
		.mob-header-content .header-top-menu ul li > a:hover > .di,
		.mob-header-content .header-top-menu .current-menu-item > a > .di,
		.mob-header-content .header-top-menu .current-menu-parent > a > .di,
		.mob-header-content .header-top-menu .current-menu-ancestor > a > .di,
		.search-r .post-title a,.project-category a:hover,.project-details a:hover,
		.nz-related-portfolio .project-details a:hover,.single-details .nz-i-list a:hover,
		.blog-post .post .post-title:hover > a,.nz-recent-posts .post .post-title:hover > a,
		.blog-post .post .post-meta a:hover,.nz-recent-posts .post .post-meta a:hover,
		.blog-post .post .post-meta a:hover i,.nz-recent-posts .post .post-meta a:hover i,
		.woocommerce .product .price,.single-post-content a:not(.button),.nz-breadcrumbs a:hover,.error404-big,
		.nz-content-box-2 a:hover .box-title h3,.nz-breadcrumbs > *:before,
		.post-comments a:hover,.footer-menu ul li a:hover,.comment-meta .replay a:hover,
		.comment-content .edit-link a:hover,.loop .project-title a:hover,
		.loop .projects-category a:hover,.nz-related-projects .projects-category a:hover,
		.nz-recent-projects .projects-category a:hover,
		.widget_product_categories ul li a:hover,
		.widget_nav_menu ul li a:hover,
		.widget_shopping_cart p.buttons > a:hover,
		.widget_recent_entries a:hover,
		.widget_categories ul li a:hover,
		.widget_pages ul li a:hover,
		.widget_archive ul li a:hover,
		.widget_meta ul li a:hover,
		.widget_nz_recent_entries .post-title:hover,
		.widget_price_filter .price_slider_amount .button:hover,
		.sidebar .widget_shopping_cart .cart_list > li > a:hover,
		.sidebar .widget_products .product_list_widget > li > a:hover,
		.sidebar .widget_recently_viewed_products .product_list_widget > li > a:hover,
		.sidebar .widget_recent_reviews .product_list_widget > li > a:hover,
		.sidebar .widget_top_rated_products .product_list_widget > li > a:hover,
		.sidebar .widget_product_tag_cloud .tagcloud a:hover,
		.sidebar .post-tags a:hover,
		.sidebar .projects-tags a:hover,
		.sidebar .widget_tag_cloud .tagcloud a:hover,
		.sidebar .widget_recent_entries a:hover, 
		.sidebar .widget_nz_recent_entries .post-title:hover,
		.sidebar .widget_product_categories ul li a:hover, 
		.sidebar .widget_nav_menu ul li a:hover,
		.sidebar .widget_categories ul li a:hover, 
		.sidebar .widget_pages ul li a:hover, 
		.sidebar .widget_archive ul li a:hover, 
		.sidebar .widget_meta ul li a:hover,
		.site-widget-area .widget_shopping_cart .cart_list > li > a:hover,
		.site-widget-area .widget_products .product_list_widget > li > a:hover,
		.site-widget-area .widget_recently_viewed_products .product_list_widget > li > a:hover,
		.site-widget-area .widget_recent_reviews .product_list_widget > li > a:hover,
		.site-widget-area .widget_top_rated_products .product_list_widget > li > a:hover,
		.site-widget-area .widget_product_tag_cloud .tagcloud a:hover,
		.site-widget-area .post-tags a:hover,
		.site-widget-area .projects-tags a:hover,
		.site-widget-area .widget_tag_cloud .tagcloud a:hover,
		.footer-widget-area .widget_shopping_cart .cart_list > li > a:hover,
		.footer-widget-area .widget_products .product_list_widget > li > a:hover,
		.footer-widget-area .widget_recently_viewed_products .product_list_widget > li > a:hover,
		.footer-widget-area .widget_recent_reviews .product_list_widget > li > a:hover,
		.footer-widget-area .widget_top_rated_products .product_list_widget > li > a:hover,
		.footer-widget-area .widget_product_tag_cloud .tagcloud a:hover,
		.footer-widget-area .post-tags a:hover,
		.footer-widget-area .projects-tags a:hover,
		.footer-widget-area .widget_tag_cloud .tagcloud a:hover,
		.mob-header .widget_shopping_cart p.buttons > a:hover, 
		.mob-header .widget_price_filter .price_slider_amount .button:hover,
		.blog-post .post .postmeta a:hover,
		.standard .post .post-more:hover,
		#comments #submit:hover,
		.loop .small-image .projects .projects-category a:hover,
		.loop .medium-image .projects .projects-category a:hover,
		.loop .large-image .projects .projects-category a:hover,
		.loop .small-image-nogap .projects .projects-category a:hover,
		.loop .medium-image-nogap .projects .projects-category a:hover,
		.nz-recent-projects.small-image .projects-category a:hover,
		.nz-recent-projects.medium-image .projects-category a:hover,
		.nz-recent-projects.large-image .projects-category a:hover,
		.nz-recent-projects.small-image-nogap .projects-category a:hover,
		.nz-recent-projects.medium-image-nogap .projects-category a:hover,
		.nz-related-projects .projects-category a:hover,
		.ninzio-filter .filter.active,
		.ninzio-filter .filter:hover,
		.project-social-link-share .social-links a:hover,
		.post-social-share .social-links a:hover,
		.post-author-info .author-social-links a:hover,
		.woocommerce-tabs .commentlist .comment-text .meta,
		.box-more:hover,
		.nz-persons .person .name:hover,
		.nz-testimonials .name,
		.stepset .active .title {
			color: '.$montserrat_ninzio_main_color.' !important;
		}';

		$dynamic_css .='#nz-content a:not(.button),
		#nz-content a:not(.button):visited,
		.sidebar a:not(.button):not(.ui-slider-handle),
		.woo-cart .widget_shopping_cart .cart_list > li > a:hover,
		.woocommerce .single-product-summary .product_meta a,
		.reset_variations:hover,.count-icon,.nz-testimonials .name,
		.post-comments-area .comments-title,.footer-copyright a,
		.post-comments-area a,
		.post .post-more,
		.post-author-info-title a,
		.post-tags a:hover,
		.comment-meta .comment-author,
		.comment-meta .replay a,
		.shop-loader  {
			color: '.$montserrat_ninzio_main_color.';
		}';

		$dynamic_css .='#nz-content a:not(.button):hover,
		#nz-content a:not(.button):visited:hover,
		.woocommerce .product_meta a:hover,
		.sidebar a:not(.button):hover,
		.post-author-info-title a:hover {
			color: '.montserrat_ninzio_hex_to_rgb_shade($montserrat_ninzio_main_color,50).';
		}';

		$dynamic_css .='.ajax-loading-wrap .load-bar{
			color: '.montserrat_ninzio_hex_to_rgba($montserrat_ninzio_main_color,0.50).';
		}';

		/*BACKGROUND COLOR DYNAMIC STYLES*/

		$dynamic_css .='.flex-control-paging li a.flex-active,
		.flex-direction-nav a,
		.ninzio-navigation li a:hover,
		.ninzio-navigation li .current,
		.woocommerce-pagination li a:hover,
		.woocommerce-pagination li .current,
		.widget_price_filter .ui-slider .ui-slider-range,
		.nz-persons .person .title:after,
		.post .post-date:after,
		#nz-content .nz-single-image:before,
		.widget_twitter .follow,
		.nz-content-box-2 .box-title h3:after,
		.nz-content-box-2 .box-title h3:before,
		.nz-persons .person .title:after,
		.nz-persons .person .title:before,
		.header-top .header-top-menu ul .submenu-languages li a:after,
		.mob-menu-toggle2:hover,#top,.widget_calendar td#today,
		.desk-menu .sub-menu li > a:before,
		.standard .post-date-custom,.woocommerce-tabs .tabs > li.active:before,
		.widget_title:after,
		.yawp_wim_widget:after,
		.widget_nav_menu li a:before,
		.widget_product_categories li a:before,
		.widget_categories ul li a:before,
		.widget_pages ul li a:before,
		.widget_archive ul li a:before,
		.widget_meta ul li a:before,
		.widget_shopping_cart .cart_list .remove:hover,
		.footer-menu ul li a:after,
		.post .post-more:hover,
		.post .post-category ul li a,
		.single .single-post-content a:before,
		.nz-reletated-posts-sep:after,
		.post-comments-area .comments-title:after,
		.post-comments-area #respond #reply-title:after,
		.comment-meta .replay a:hover,
		.post-single-navigation a:hover,
		.single-projects .post-gallery .flex-direction-nav li a:hover,
		.projects-navigation a:hover,
		.single .project-details a:after,
		.nz-related-projects h3:after,
		.woocommerce .product .button:hover,
		.woocommerce .product .added_to_cart:hover,
		.woocommerce .product .product_type_external:hover,
		.social-links a:hover,
		.box-more:after,
		.nz-persons .person .name:after,
		.nz-accordion .toggle-title.active .toggle-icon,
		.tabset .tab.active,
		.stepset .active .step-title,
		.button.wc-backward {
			background-color: '.$montserrat_ninzio_main_color.' !important;
		}';

		$dynamic_css .='button,
		input[type="reset"],
		input[type="submit"],
		input[type="button"],
		.single-details .project-link,
		.wc-proceed-to-checkout a,
		.woocommerce-message .button.wc-forward,
		a.edit,a.view,#nz-content .nz-single-image:before,
		.loop .project-more,
		.nz-recent-projects .project-more,
		.woocommerce .product .onsale,
		.woocommerce .single-product-summary .product_meta a:after,
		.woocommerce-tabs .panel > h2:after, 
		.woocommerce-tabs .panel > #reviews > #comments > h2:after,
		.related-products-title h3:after,
		.button-ghost.default.icon-true.animate-false .btn-icon:after {
			background-color: '.$montserrat_ninzio_main_color.';
		}';


		$dynamic_css .='button:hover,input[type="reset"]:hover,
		input[type="submit"]:hover,input[type="button"]:hover,
		.single-details .project-link:hover,
		.woocommerce .single-product-summary .button:hover,
		.wc-proceed-to-checkout a:hover,
		.woocommerce-message .button.wc-forward:hover,
		.single_add_to_cart_button:hover,
		a.edit:hover,a.view:hover,
		.button-normal.default.icon-true.animate-false .btn-icon:after,
		.button-3d.default.icon-true.animate-false .btn-icon:after,
		.button-ghost.default.icon-true.animate-false:hover .btn-icon:after,
		.button.wc-backward:hover {
			background-color: '.montserrat_ninzio_hex_to_rgb_shade($montserrat_ninzio_main_color,20).';
		}';

		$dynamic_css .='.button-normal.default.icon-true.animate-false:hover .btn-icon:after {
			background-color: '.montserrat_ninzio_hex_to_rgb_shade($montserrat_ninzio_main_color,40).';
		}';

		$dynamic_css .='#projects-load-more .project-loader:before {
		    border-left: 2px solid '.$montserrat_ninzio_main_color.';
		}';


		$dynamic_css .='.widget_recent_projects .ninzio-overlay {
			background-color: '.montserrat_ninzio_hex_to_rgba($montserrat_ninzio_main_color,0.9).';
		}';

		$dynamic_css .='.nz-pricing-table > .column .title:after {
			border-bottom: 3em solid '.$montserrat_ninzio_main_color.';
		}';

		$dynamic_css .='.owl-controls .owl-page.active,
		.standard .post .post-more:hover,
		#comments #submit:hover {
			box-shadow: inset 0 0 0 2px '.$montserrat_ninzio_main_color.';
		}';

		$dynamic_css .='.social-links a:hover {
			box-shadow: inset 0 0 0 1px '.$montserrat_ninzio_main_color.' !important;
		}';

		$dynamic_css .='.slick-dots li.slick-active button {
			box-shadow: inset 0 0 0 20px '.$montserrat_ninzio_main_color.' !important;
		}';

		$dynamic_css .='.shop-loader:before {
			border: 1px solid '.$montserrat_ninzio_main_color.';
		}';

		$dynamic_css .='.nz-loader {
			border-top: 1px solid '.montserrat_ninzio_hex_to_rgba($montserrat_ninzio_main_color,0.1).';
			border-right: 1px solid '.montserrat_ninzio_hex_to_rgba($montserrat_ninzio_main_color,0.1).';
			border-bottom: 1px solid '.montserrat_ninzio_hex_to_rgba($montserrat_ninzio_main_color,0.1).';
			border-left: 1px solid '.montserrat_ninzio_hex_to_rgba($montserrat_ninzio_main_color,0.5).';
		}';

		$dynamic_css .='.widget_price_filter .ui-slider .ui-slider-handle,
		.widget_tag_cloud .tagcloud a:after,
		.post-tags a:after,
		.widget_product_tag_cloud .tagcloud a:after,
		.projects-tags a:after,
		.widget_tag_cloud .tagcloud a:before,
		.post-tags a:before,
		.widget_product_tag_cloud .tagcloud a:before,
		.projects-tags a:before,
		.widget_shopping_cart p.buttons > a:before,
		.widget_shopping_cart p.buttons > a:after,
		.widget_price_filter .price_slider_amount .button:before,
		.widget_price_filter .price_slider_amount .button:after {
			border-color: '.$montserrat_ninzio_main_color.' !important;
		}';

		$dynamic_css .='.single-details .nz-i-list span.icon {
			box-shadow: inset 0 0 0 20px '.$montserrat_ninzio_main_color.';
		}';

		$dynamic_css .='.default.button-normal{background-color: '.$montserrat_ninzio_main_color.';}';
		$dynamic_css .='.default.button-ghost {box-shadow:inset 0 0 0 2px '.$montserrat_ninzio_main_color.';color:'.$montserrat_ninzio_main_color.';}';
		$dynamic_css .='.default.button-3d {background-color:'.$montserrat_ninzio_main_color.';box-shadow: 0 4px '.montserrat_ninzio_hex_to_rgb_shade($montserrat_ninzio_main_color,50).';}';

		$dynamic_css .='.default.animate-false.button-3d:hover {box-shadow: 0 2px '.montserrat_ninzio_hex_to_rgb_shade($montserrat_ninzio_main_color,50).';}';
		$dynamic_css .='.default.animate-false.button-normal.hover-fill:hover{background-color: '.montserrat_ninzio_hex_to_rgb_shade($montserrat_ninzio_main_color,20).';}';
		
		$dynamic_css .='.default.button-ghost.hover-fill:hover,
		.default.button-ghost.hover-drop:after,
		.default.button-ghost.hover-side:after,
		.default.button-ghost.hover-scene:after,
		.default.button-ghost.hover-screen:after
		{background-color: '.$montserrat_ninzio_main_color.';}';

	/*  HEADER
	/*-------------------------*/

		$dynamic_css .='.mob-header-top {
		   	height: '.$nz_mob_height.'px !important;
		    line-height: '.$nz_mob_height.'px !important;
		}';

		$dynamic_css .='.mob-header-top .mob-menu-toggle,
	    .mob-sidebar-toggle {
			top: '.(($nz_mob_height-30)/2).'px !important;
		}';

		$dynamic_css .='.version1 .header-top {
			background-color: '.$nz_h1_header_top_back_color.';
		}';

		if(!empty($nz_h1_header_top_border_color)){
			$dynamic_css .='.version1 .header-top {
				border-bottom:1px solid '.$nz_h1_header_top_border_color.';
			}';
		}

		$dynamic_css .='.version1 .header-top .header-top-menu ul li a {
		    color: '.$nz_h1_header_top_menu_color_reg.';
		}';

		$dynamic_css .='.version1 .header-top .header-top-menu ul li:hover > a {
		    color: '.$nz_h1_header_top_menu_color_hov.';
		}';

		$dynamic_css .='.version1 .header-top .header-top-menu > ul > li:not(:last-child):after {
			color: '.montserrat_ninzio_hex_to_rgba($nz_h1_header_top_menu_color_reg,0.3).';
		}';

		$dynamic_css .='.version1 .header-top .top-button {
		    color: '.$nz_h1_top_button_text_color.';
		    background-color: '.$nz_h1_top_button_back_color.';
		}';

		$dynamic_css .='.version1 .header-top .top-button:hover {
		    background-color: '.montserrat_ninzio_hex_to_rgb_shade($nz_h1_top_button_back_color,20).';
		}';

		$dynamic_css .='.version1 .header-top .header-top-social-links a {
		    color: '.$nz_h1_header_top_social_links_color.' !important;
		}';

		$dynamic_css .='.version1 .header-top .header-top-menu ul li ul.submenu-languages,
		.version1 .desk-menu > ul > li ul.submenu-languages
		{width: '.$nz_h1_desk_ls_w .';}';

		$dynamic_css .='.version1.top-false {
			height:'.$nz_h1_desk_height.'px;
		}';

		$dynamic_css .='.version1.top-true {
			height:'.(40+$nz_h1_desk_height).'px;
		}';

		$dynamic_css .='.version1 .header-body {
		    background-color: '.$nz_h1_desk_back_color.';';
		    if(!empty($nz_h1_desk_border_color)){
				$dynamic_css .='border-bottom:1px solid '.$nz_h1_desk_border_color.';';
		    }
			$dynamic_css .='height:'.$nz_h1_desk_height.'px;
		}';

		$dynamic_css .='.version1 .logo,
		.version1 .logo-title {
			height: '.$nz_h1_desk_height.'px;
			line-height: '.$nz_h1_desk_height.'px;
		}';

		$dynamic_css .='.version1 .desk-menu .sub-menu {
			top: '.$nz_h1_desk_height.'px;
		}';

		$dynamic_css .='.version1 .search {
			top: '.($nz_h1_desk_height/2 + 20).'px;
		}';

		$dynamic_css .='.version1 .desk-cart-wrap {
			height:'.$nz_h1_desk_height.'px;
		}';

		$dynamic_css .='.version1 .search-toggle-wrap,
		.version1 .desk-cart-toggle,
		.version1 .site-sidebar-toggle {
			margin-top: '.(($nz_h1_desk_height-40)/2).'px;
		}';

		$dynamic_css .='.version1 .site-sidebar-toggle {
			background-color: '.$nz_h1_desk_sidebar_toggle_color.';
			box-shadow:inset 0 0 0 2px '.$nz_h1_desk_sidebar_toggle_border_color.';
		}';

		$dynamic_css .='.version1 .woo-cart {
		    top: '.$nz_h1_desk_height.'px;
		}';

		$dynamic_css .='.version1 .desk-menu > ul > li {
			margin-left: '.$nz_h1_desk_menu_m.'px !important;
			height: '.$nz_h1_desk_height.'px;
			line-height: '.$nz_h1_desk_height.'px;
		}';

		$dynamic_css .='.version1:not(.active) .logo-title {
			color: '.$nz_h1_desk_menu_color_reg.';
		}';

		$dynamic_css .='.version1 .desk-menu > ul > li > a {
		    color: '.$nz_h1_desk_menu_color_reg.';
			text-transform: '.$nz_h1_desk_menu_text_transform.';
			font-weight: '.$nz_h1_desk_menu_font_weight.';
			font-size: '.$nz_h1_desk_menu_font_size.';
			font-family: '.$nz_h1_desk_menu_font_family.';
			margin-top: '.(($nz_h1_desk_height-30)/2).'px;
		}';

		$dynamic_css .='.version1 .desk-cart-toggle span {
		    color: '.$nz_h1_desk_menu_color_reg;
		    if ($nz_h1_desk_menu_text_transform == "none"){
		    	$dynamic_css .='margin-left: -11px;';
		    }
		$dynamic_css .='}';

		$dynamic_css .='.version1 .desk-menu > ul > li.menu-item-language > a > .txt {
			box-shadow: inset 0 0 0 1px '.montserrat_ninzio_hex_to_rgba($nz_h1_desk_menu_color_reg,0.5).';
		}';

		$dynamic_css .='.version1 .desk-menu > ul > li.menu-item-language:hover > a > .txt {
			box-shadow: inset 0 0 0 1px '.montserrat_ninzio_hex_to_rgba($nz_h1_desk_menu_color_reg,0.7).';
		}';

		$dynamic_css .='.version1 .desk-menu > ul > li:hover > a,
		.version1 .desk-menu > ul > li.one-page-active > a,
		.version1 .desk-menu > ul > li.current-menu-item > a,
		.version1 .desk-menu > ul > li.current-menu-parent > a,
		.version1 .desk-menu > ul > li.current-menu-ancestor > a {
		    color: '.$nz_h1_desk_menu_color_hov.';
		}';

		$dynamic_css .='.one-page-top.version1 .desk-menu > ul > li.current-menu-item > a,
		.one-page-top.version1 .desk-menu > ul > li.current-menu-parent > a,
		.one-page-top.version1 .desk-menu > ul > li.current-menu-ancestor > a {
		    color: '.$nz_h1_desk_menu_color_reg.';
		}';

		$dynamic_css .='.one-page-top.version1 .desk-menu > ul > li:hover > a,
		.one-page-top.version1 .desk-menu > ul > li.one-page-active > a {
		    color: '.$nz_h1_desk_menu_color_hov.' !important;
		}';

		$dynamic_css .='.version1 .desk-menu .sub-menu,
		.version1 .header-top .header-top-menu ul li ul,
		.version1 .woo-cart {
			background-color: '.$nz_h1_desk_submenu_back_color.';
		}';

		$dynamic_css .='.version1 .search {
			background-color: '.$nz_h1_desk_submenu_back_color.' !important;
		}';

		$dynamic_css .='.version1 .desk-menu .sub-menu .sub-menu {
			background-color: '.montserrat_ninzio_hex_to_rgb_shade($nz_h1_desk_submenu_back_color,20).';
		}';

		$dynamic_css .='.version1 .desk-menu .sub-menu li > a {
		    color: '.$nz_h1_desk_submenu_color_reg.';
			text-transform: '.$nz_h1_desk_submenu_text_transform.';
			font-weight: '.$nz_h1_desk_submenu_font_weight.';
			font-size: '.$nz_h1_desk_submenu_font_size.';
			line-height: '.$nz_h1_desk_submenu_line_height.';
			font-family: '.$nz_h1_desk_submenu_font_family.';
		}';

		$dynamic_css .='.version1 .desk-menu .sub-menu li > a:before {
		    background-color:'.$nz_h1_desk_submenu_effect_color.' !important;
		}';

		$dynamic_css .='.version1 .header-top .header-top-menu ul li ul li a {
		    color: '.$nz_h1_desk_submenu_color_reg.';
		}';

		$dynamic_css .='.version1 .desk-menu .sub-menu li:hover > a,
		.version1 .header-top .header-top-menu ul li ul li:hover > a {
		    color: '.$nz_h1_desk_submenu_color_hov.';
		}';
		
		$dynamic_css .='.version1 .desk-menu [data-mm="true"] > .sub-menu > li > a {
			text-transform: '.$nz_h1_desk_megamenu_text_transform.';
			font-weight: '.$nz_h1_desk_megamenu_font_weight.';
			font-size: '.$nz_h1_desk_megamenu_font_size.';
			color: '.$nz_h1_desk_megamenu_color.' !important;
			font-family: '.$nz_h1_desk_menu_font_family.';
		}';

		if (isset($nz_h1_desk_megamenu_top_border) && !empty($nz_h1_desk_megamenu_top_border)) {
			
			$dynamic_css .='.version1 .desk-menu [data-mm="true"] > .sub-menu > li > a {
				padding: 31px 0 30px 0;
				position:relative;
			}';

			$dynamic_css .='.version1 .desk-menu [data-mm="true"] > .sub-menu > li > a:after {
				background-color: '.$nz_h1_desk_megamenu_top_border.';
				display:block;
				content: "";
			    width: 30px;
			    height: 2px;
			    display: block;
			    bottom: 20px;
			    left:0px;
			    position:absolute;
			}';

			$dynamic_css .='.version1 .yawp_wim_title {
				position:relative;
				padding: 31px 0 43px 0 !important;
				margin-bottom:0;
				line-height: '.$nz_h1_desk_submenu_line_height.';
			}';

			$dynamic_css .='.version1 .yawp_wim_title:after {
				background-color: '.$nz_h1_desk_megamenu_top_border.';
				display:block;
				content: "";
			    width: 30px;
			    height: 2px;
			    display: block;
			    bottom: 30px;
			    left:0px;
			    position:absolute;
			}';
		}

		$dynamic_css .='.version1 .desk-menu .sub-menu .label {font-family: '.$nz_h1_desk_menu_font_family.';}';

		$dynamic_css .='.version1 .search-true.cart-false .search-toggle:after,
		.version1 .cart-true .desk-cart-wrap:after {
			background-color: '.montserrat_ninzio_hex_to_rgba($nz_h1_desk_menu_color_reg,0.2).';
		}';

		$dynamic_css .='.version1 .search input[type="text"] {
		    color: '.$nz_h1_desk_submenu_color_reg.';
		}';

		/*EFFECTS*/
		$dynamic_css .='.version1.effect-underline .desk-menu > ul > li > a:after,
		.version1.effect-overline .desk-menu > ul > li > a:after,
		.version1.effect-fill .desk-menu > ul > li:hover > a,
		.version1.effect-fill .desk-menu > ul > li.one-page-active > a,
		.version1.effect-fill .desk-menu > ul > li.current-menu-item > a,
		.version1.effect-fill .desk-menu > ul > li.current-menu-parent > a,
		.version1.effect-fill .desk-menu > ul > li.current-menu-ancestor > a {
			background-color: '.$nz_h1_desk_menu_effect_color.';
		}';

		$dynamic_css .='.one-page-top.version1.effect-fill .desk-menu > ul > li:hover > a,
		.one-page-top.version1.effect-fill .desk-menu > ul > li.one-page-active > a {
			background-color: '.$nz_h1_desk_menu_effect_color.' !important;
		}';

		$dynamic_css .='.version1.effect-outline .desk-menu > ul > li:hover > a,
		.version1.effect-outline .desk-menu > ul > li.one-page-active > a,
		.version1.effect-outline .desk-menu > ul > li.current-menu-item > a,
		.version1.effect-outline .desk-menu > ul > li.current-menu-parent > a,
		.version1.effect-outline .desk-menu > ul > li.current-menu-ancestor > a {
			box-shadow: inset 0 0 0 2px '.$nz_h1_desk_menu_effect_color.';
		}';

		$dynamic_css .='.one-page-top.version1.effect-outline .desk-menu > ul > li:hover > a,
		.one-page-top.version1.effect-outline .desk-menu > ul > li.one-page-active > a {
			box-shadow: inset 0 0 0 2px '.$nz_h1_desk_menu_effect_color.' !important;
		}';

		$dynamic_css .='.version1.effect-overline .desk-menu > ul > li > a:after {
			top:-'.(($nz_h1_desk_height-30)/2).'px;
		}';

		if (isset($nz_h1_desk_separator_color) && !empty($nz_h1_desk_separator_color)) {
			$dynamic_css .='.version1 .desk-menu > ul:after {
				content:"";
				display:block;
				float:left;
				width:1px;
				height:40px;
				margin-top:'.(($nz_h1_desk_height - 40)/2).'px;
				margin-left: 25px;
    			margin-right: 20px;
				background-color:'.$nz_h1_desk_separator_color.';
				-webkit-transition: background-color 300ms linear;
				transition: background-color 300ms linear;
			}';
		}

		/*WIDGETS ------*/

			$dynamic_css .='.version1 .menu-item-type-yawp_wim,
			.version1 .menu-item-type-yawp_wim a:not(.button) {
				color: '.$nz_h1_desk_submenu_color_reg.';
				text-transform: '.$nz_h1_desk_submenu_text_transform.';
				font-weight: '.$nz_h1_desk_submenu_font_weight.';
				font-size: '.$nz_h1_desk_submenu_font_size.';
				line-height: '.$nz_h1_desk_submenu_line_height.';
				font-family: '.$nz_h1_desk_submenu_font_family.';
			}';

			$dynamic_css .='.version1 .widget_rss a, 
			.version1 .widget_nz_recent_entries a, 
			.version1 .widget_recent_comments a, 
			.version1 .widget_recent_entries a,
			.version1 .widget_nz_recent_entries .post .post-date,
			.version1 .nz-schedule li,
			.version1 .widget_twitter .tweet-time,
			.version1 .widget_shopping_cart .cart_list > li > a {
				color: '.$nz_h1_desk_submenu_color_reg.' !important;
			}';

			$dynamic_css .='.version1 .widget_rss a:hover, 
			.version1 .widget_nz_recent_entries a:hover, 
			.version1 .widget_recent_comments a:hover, 
			.version1 .widget_recent_entries a:hover,
			.version1 .widget_shopping_cart .cart_list > li > a:hover {
				color: '.$nz_h1_desk_submenu_color_hov.' !important;
			}';

			$dynamic_css .='.version1 .widget_twitter ul li:before,
			.version1 .widget_nz_recent_entries .post-body:before,
			.version1 .widget_recent_comments ul li:before {
				color: '.$nz_h1_desk_submenu_color_reg.' !important;
				background-color: '.montserrat_ninzio_hex_to_rgba($nz_h1_desk_submenu_color_reg, 0.2).' !important;
			}';

			$dynamic_css .='.version1 .nz-schedule {
				box-shadow: inset 0 0 0 1px '.montserrat_ninzio_hex_to_rgba($nz_h1_desk_submenu_color_reg, 0.2).';
			}';

			$dynamic_css .='.version1 .widget_shopping_cart .cart_list > li,
			.version1 .widget_products .product_list_widget > li, 
			.version1 .widget_recently_viewed_products .product_list_widget > li,
			.version1 .widget_recent_reviews .product_list_widget > li, 
			.version1 .widget_top_rated_products .product_list_widget > li {
				border-bottom: 1px solid '.montserrat_ninzio_hex_to_rgba($nz_h1_desk_submenu_color_reg, 0.2).';
			}';

			$dynamic_css .='.version1 .widget_price_filter .price_slider_wrapper .ui-widget-content {
				background-color: '.montserrat_ninzio_hex_to_rgba($nz_h1_desk_submenu_color_reg, 0.2).' !important;
			}';

			$dynamic_css .='.version1 .widget_calendar td#prev, 
			.version1 .widget_calendar td#next,
			.version1 .widget_calendar td,
			.version1 .widget_calendar caption,
			.version1 .widget_calendar th:first-child,
			.version1 .widget_calendar th:last-child {
				border-color: '.montserrat_ninzio_hex_to_rgba($nz_h1_desk_submenu_color_reg, 0.2).';
			}';


			$dynamic_css .='.version1 .widget_tag_cloud .tagcloud a:hover,
			.version1 .widget_product_tag_cloud .tagcloud a:hover, 
			.version1 .post-tags a:hover, 
			.version1 .projects-tags a:hover {
				color: '.$nz_h1_desk_submenu_effect_color.' !important;
			}';

			$dynamic_css .='.version1 .widget_calendar td#today {
				background-color: '.$nz_h1_desk_submenu_effect_color.' !important;
			}';

			$dynamic_css .='.version1 .widget_tag_cloud .tagcloud a:after,
			.version1 .widget_product_tag_cloud .tagcloud a:after, 
			.version1 .post-tags a:after, 
			.version1 .projects-tags a:after,
			.version1 .widget_tag_cloud .tagcloud a:before,
			.version1 .widget_product_tag_cloud .tagcloud a:before, 
			.version1 .post-tags a:before, 
			.version1 .projects-tags a:before {
				border-color: '.$nz_h1_desk_submenu_effect_color.' !important;
			}';

			$dynamic_css .='.version1 .widget_nav_menu ul li:hover a {
				color: '.$nz_h1_desk_submenu_color_reg.' !important;
			}';

			$dynamic_css .='.version1 .widget_product_categories ul li a:hover,
			.version1 .widget_shopping_cart p.buttons > a:hover,
			.version1 .widget_recent_entries a:hover,
			.version1 .widget_categories ul li a:hover,
			.version1 .widget_pages ul li a:hover,
			.version1 .widget_archive ul li a:hover,
			.version1 .widget_meta ul li a:hover,
			.version1 .widget_nz_recent_entries .post-title:hover,
			.version1 .widget_price_filter .price_slider_amount .button:hover,
			.version1 .widget_shopping_cart .cart_list > li > a:hover,
			.version1 .widget_products .product_list_widget > li > a:hover,
			.version1 .widget_recently_viewed_products .product_list_widget > li > a:hover,
			.version1 .widget_recent_reviews .product_list_widget > li > a:hover,
			.version1 .widget_top_rated_products .product_list_widget > li > a:hover,
			.version1 .widget_recent_entries a:hover, 
			.version1 .widget_nz_recent_entries .post-title:hover,
			.version1 .widget_product_categories ul li a:hover, 
			.version1 .widget_nav_menu ul li a:hover,
			.version1 .widget_recent_comments a:hover {
				color: '.$nz_h1_desk_submenu_color_hov.' !important;
			}';

			$dynamic_css .='.version1 .menu-item-type-yawp_wim a:hover {
				color: '.$nz_h1_desk_submenu_color_hov.';
			}';

			$dynamic_css .='.version1 textarea, 
			.version1 select, 
			.version1 input[type="date"], 
			.version1 input[type="datetime"], 
			.version1 input[type="datetime-local"], 
			.version1 input[type="email"], 
			.version1 input[type="month"], 
			.version1 input[type="number"], 
			.version1 input[type="password"], 
			.version1 input[type="search"], 
			.version1 input[type="tel"], 
			.version1 input[type="text"], 
			.version1 input[type="time"], 
			.version1 input[type="url"], 
			.version1 input[type="week"] {
				box-shadow: inset 0 0 0 1px '.montserrat_ninzio_hex_to_rgba($nz_h1_desk_submenu_color_reg,0.25).';
				color: '.$nz_h1_desk_submenu_color_reg.';
			}';

			$dynamic_css .='.version1 textarea:hover, 
			.version1 select:hover, 
			.version1 input[type="date"]:hover, 
			.version1 input[type="datetime"]:hover, 
			.version1 input[type="datetime-local"]:hover, 
			.version1 input[type="email"]:hover, 
			.version1 input[type="month"]:hover, 
			.version1 input[type="number"]:hover, 
			.version1 input[type="password"]:hover, 
			.version1 input[type="search"]:hover, 
			.version1 input[type="tel"]:hover, 
			.version1 input[type="text"]:hover, 
			.version1 input[type="time"]:hover, 
			.version1 input[type="url"]:hover, 
			.version1 input[type="week"]:hover {
				color: '.$nz_h1_desk_submenu_color_hov.' !important;
			}';

			$dynamic_css .='.version1 .desk-menu .button,
			.version1 .desk-menu button,
			.version1 .desk-menu input[type="reset"],
			.version1 .desk-menu input[type="submit"],
			.version1 .desk-menu input[type="button"] {
				background-color:'.$nz_h1_megamenu_buttons_back_color.' !important;
				color: '.$nz_h1_megamenu_buttons_text_color.' !important;
			}';

			$dynamic_css .='.version1 .desk-menu .button:hover,
			.version1 .desk-menu button:hover,
			.version1 .desk-menu input[type="reset"]:hover,
			.version1 .desk-menu input[type="submit"]:hover,
			.version1 .desk-menu input[type="button"]:hover {
				background-color:'.montserrat_ninzio_hex_to_rgb_shade($nz_h1_megamenu_buttons_back_color,20).' !important;
			}';

			$dynamic_css .='.version1 ::-webkit-input-placeholder {color: '.$nz_h1_desk_submenu_color_reg.';}';
			$dynamic_css .='.version1 :-moz-placeholder           {color: '.$nz_h1_desk_submenu_color_reg.';}';
			$dynamic_css .='.version1 ::-moz-placeholder          {color: '.$nz_h1_desk_submenu_color_reg.';}';
			$dynamic_css .='.version1 :-ms-input-placeholder      {color: '.$nz_h1_desk_submenu_color_reg.';}';

			$dynamic_css .='.version1 .widget_shopping_cart p.buttons > a:before, 
			.version1 .widget_shopping_cart p.buttons > a:after, 
			.version1 .widget_price_filter .price_slider_amount .button:before, 
			.version1 .widget_price_filter .price_slider_amount .button:after,
			.version1 .widget_price_filter .ui-slider .ui-slider-handle {
				border-color: '.$nz_h1_desk_submenu_effect_color.' !important;
			}';

			$dynamic_css .='.version1 .widget_price_filter .ui-slider .ui-slider-range {
				background-color: '.$nz_h1_desk_submenu_effect_color.' !important;
			}';

			$dynamic_css .='.version1 .widget_shopping_cart p.buttons > a:hover,
			.version1 .widget_price_filter .price_slider_amount .button:hover {
				color: '.$nz_h1_desk_submenu_effect_color.' !important;
			}';


			$dynamic_css .='.version1 .yawp_wim_title {
				text-transform: '.$nz_h1_desk_megamenu_text_transform.';
				font-weight: '.$nz_h1_desk_megamenu_font_weight.';
				font-size: '.$nz_h1_desk_megamenu_font_size.';
				color: '.$nz_h1_desk_megamenu_color.' !important;
				font-family: '.$nz_h1_desk_menu_font_family.';
			}';


			$dynamic_css .='.version1 .widget_tag_cloud .tagcloud a,
			.version1 .post-tags a,
			.version1 .widget_product_tag_cloud .tagcloud a,
			.version1 .projects-tags a {
				font-family: '.$nz_h1_desk_menu_font_family.';
				color: '.$nz_h1_desk_submenu_color_reg.';
				box-shadow:inset 0 0 0 1px '.montserrat_ninzio_hex_to_rgba($nz_h1_desk_submenu_color_reg, 0.3).' !important;
			}';

			$dynamic_css .='.version1 .widget_shopping_cart {
			    color: '.$nz_h1_desk_submenu_color_reg.';
			}';

			$dynamic_css .='.version1 .widget_shopping_cart .cart_list li {
				border-bottom: 1px solid '.montserrat_ninzio_hex_to_rgba($nz_h1_desk_submenu_color_reg,0.2).';
			}';

			$dynamic_css .='.version1 .widget_shopping_cart .cart_list li .remove {
				background-color: '.montserrat_ninzio_hex_to_rgb_shade($nz_h1_desk_submenu_back_color,10).' !important;
			}';

			$dynamic_css .='.version1 .widget_shopping_cart .cart_list li .remove:hover {
				background-color: '.$nz_h1_desk_submenu_effect_color.' !important;
			}';

			$dynamic_css .='.version1 .widget_shopping_cart .cart_list li img {
			    background-color: '.montserrat_ninzio_hex_to_rgba($nz_h1_desk_submenu_color_reg,0.1).';
			}';

			$dynamic_css .='.version1 .widget_shopping_cart .cart_list li:hover img {
			    background-color: '.montserrat_ninzio_hex_to_rgba($nz_h1_desk_submenu_color_reg,0.2).';
			}';

			$dynamic_css .='.version1 .widget_shopping_cart p.buttons > a, 
			.version1 .widget_price_filter .price_slider_amount .button {
				color: '.$nz_h1_desk_submenu_color_reg.' !important;
				box-shadow:inset 0 0 0 2px '.montserrat_ninzio_hex_to_rgba($nz_h1_desk_submenu_color_reg, 0.3).' !important;
			}';

			$dynamic_css .='.version1 .widget_shopping_cart p.buttons > a:hover, 
			.version1 .widget_price_filter .price_slider_amount .button:hover {
				color: '.$nz_h1_desk_submenu_effect_color.' !important;
			}';

			$dynamic_css .='.version1 .star-rating:before {
				color: '.montserrat_ninzio_hex_to_rgba($nz_h1_desk_submenu_color_reg, 0.4).' !important;
			}';

			$dynamic_css .='.version1 .widget_nav_menu li a:before,
			.version1 .widget_product_categories li a:before,
			.version1 .widget_categories ul li a:before,
			.version1 .widget_pages ul li a:before,
			.version1 .widget_archive ul li a:before,
			.version1 .widget_meta ul li a:before {
				background-color:'.$nz_h1_desk_submenu_effect_color.' !important;
			}';


			$dynamic_css .='.version1 .yawp_wim_title a {
				text-transform: '.$nz_h1_desk_megamenu_text_transform.' !important;
				font-weight: '.$nz_h1_desk_megamenu_font_weight.' !important;
				font-size: '.$nz_h1_desk_megamenu_font_size.' !important;
				color: '.$nz_h1_desk_megamenu_color.' !important;
				font-family: '.$nz_h1_desk_menu_font_family.' !important;
			}';

			$dynamic_css .='.version1 .widget_categories ul li,
			.version1 .widget_pages ul li,
			.version1 .widget_archive ul li,
			.version1 .widget_meta ul li {
				border-bottom: 1px solid '.montserrat_ninzio_hex_to_rgba($nz_h1_desk_submenu_color_reg,0.25).';
			}';

		/*------ WIDGETS*/

		/*FIXED*/

		$dynamic_css .='.version1.fixed-true.active .header-body,
		.version1.fixed-true.active {
			height:'.$nz_h1_fixed_height.'px;
		}';

		$dynamic_css .='.version1.fixed-true.active.top-true {
			height:'.($nz_h1_fixed_height + 40).'px;
		}';

		$dynamic_css .='.version1.fixed-true.active .logo,
		.version1.fixed-true.active .logo-title {
			height:'.$nz_h1_fixed_height.'px;
			line-height: '.$nz_h1_fixed_height.'px;
		}';

		$dynamic_css .='.version1.fixed-true.active .desk-menu .sub-menu {
			top: '.$nz_h1_fixed_height.'px;
		}';

		$dynamic_css .='.version1.fixed-true.active .search {
			top: '.($nz_h1_fixed_height/2 + 20).'px;
		}';

		$dynamic_css .='.version1.fixed-true.active .desk-cart-wrap {
			height:'.$nz_h1_fixed_height.'px;
		}';

		$dynamic_css .='.version1.fixed-true.active .search-toggle-wrap,
		.version1.fixed-true.active .desk-cart-toggle,
		.version1.fixed-true.active .site-sidebar-toggle {
			margin-top: '.(($nz_h1_fixed_height-40)/2).'px;
		}';

		$dynamic_css .='.version1.fixed-true.active .woo-cart {
		    top: '.$nz_h1_fixed_height.'px;
		}';

		$dynamic_css .='.version1.fixed-true.active .desk-menu > ul > li {
			height: '.$nz_h1_fixed_height.'px;
			line-height: '.$nz_h1_fixed_height.'px;
		}';

		$dynamic_css .='.version1.fixed-true.active .desk-menu > ul > li > a {
			margin-top: '.(($nz_h1_fixed_height-30)/2).'px;
		}';

		$dynamic_css .='.version1.fixed-true.active .logo-title {
			color: '.$nz_h1_desk_fixed_menu_color_reg.';
		}';

		$dynamic_css .='.version1.fixed-true.active .header-body {
		    background-color: '.$nz_h1_desk_fixed_back_color.';
		}';

		$dynamic_css .='.version1.fixed-true.active .desk-menu > ul > li > a {
		    color: '.$nz_h1_desk_fixed_menu_color_reg.';
		}';

		$dynamic_css .='.version1.fixed-true.active .desk-cart-toggle span {
		    color: '.$nz_h1_desk_fixed_menu_color_reg.';
		}';

		$dynamic_css .='.version1.fixed-true.active .desk-menu > ul > li:hover > a,
		.version1.fixed-true.active .desk-menu > ul > li.one-page-active > a,
		.version1.fixed-true.active .desk-menu > ul > li.current-menu-item > a,
		.version1.fixed-true.active .desk-menu > ul > li.current-menu-parent > a,
		.version1.fixed-true.active .desk-menu > ul > li.current-menu-ancestor > a {
		    color: '.$nz_h1_desk_fixed_menu_color_hov.';
		}';

		$dynamic_css .='.one-page-top.version1.fixed-true.active .desk-menu > ul > li.current-menu-item > a,
		.one-page-top.version1.fixed-true.active .desk-menu > ul > li.current-menu-parent > a,
		.one-page-top.version1.fixed-true.active .desk-menu > ul > li.current-menu-ancestor > a {
		    color: '.$nz_h1_desk_fixed_menu_color_reg.';
		}';

		$dynamic_css .='.one-page-top.version1.fixed-true.active .desk-menu > ul > li:hover > a,
		.one-page-top.version1.fixed-true.active .desk-menu > ul > li.one-page-active > a {
		    color: '.$nz_h1_desk_fixed_menu_color_hov.' !important;
		}';

		$dynamic_css .='.version1.fixed-true.active .site-sidebar-toggle {
			background-color: '.$nz_h1_desk_fixed_sidebar_toggle_color.';
			box-shadow:inset 0 0 0 2px '.$nz_h1_desk_fixed_sidebar_toggle_border_color.';
		}';

		$dynamic_css .='.version1.fixed-true.active .search-true.cart-false .search-toggle:after,
		.version1.fixed-true.active .cart-true .desk-cart-wrap:after {
			background-color: '.montserrat_ninzio_hex_to_rgba($nz_h1_desk_fixed_menu_color_reg,0.2).';
		}';

		$dynamic_css .='.version1.fixed-true.active.effect-outline .desk-menu > ul > li:hover > a,
		.version1.fixed-true.active.effect-outline .desk-menu > ul > li.one-page-active > a,
		.version1.fixed-true.active.effect-outline .desk-menu > ul > li.current-menu-item > a,
		.version1.fixed-true.active.effect-outline .desk-menu > ul > li.current-menu-parent > a,
		.version1.fixed-true.active.effect-outline .desk-menu > ul > li.current-menu-ancestor > a {
			box-shadow: inset 0 0 0 2px '.$nz_h1_desk_fixed_menu_effect_color.';
		}';

		$dynamic_css .='.one-page-top.version1.fixed-true.active.effect-outline .desk-menu > ul > li:hover > a,
		.one-page-top.version1.fixed-true.active.effect-outline .desk-menu > ul > li.one-page-active > a {
			box-shadow: inset 0 0 0 2px '.$nz_h1_desk_fixed_menu_effect_color.' !important;
		}';

		$dynamic_css .='.version1.fixed-true.active.effect-underline .desk-menu > ul > li > a:after,
		.version1.fixed-true.active.effect-overline .desk-menu > ul > li > a:after,
		.version1.fixed-true.active.effect-fill .desk-menu > ul > li:hover > a,
		.version1.fixed-true.active.effect-fill .desk-menu > ul > li.one-page-active > a,
		.version1.fixed-true.active.effect-fill .desk-menu > ul > li.current-menu-item > a,
		.version1.fixed-true.active.effect-fill .desk-menu > ul > li.current-menu-parent > a,
		.version1.fixed-true.active.effect-fill .desk-menu > ul > li.current-menu-ancestor > a {
			background-color: '.$nz_h1_desk_fixed_menu_effect_color.';
		}';

		$dynamic_css .='.one-page-top.version1.fixed-true.active.effect-fill .desk-menu > ul > li:hover > a,
		.one-page-top.version1.fixed-true.active.effect-fill .desk-menu > ul > li.one-page-active > a {
			background-color: '.$nz_h1_desk_fixed_menu_effect_color.' !important;
		}';

		if (isset($nz_h1_desk_fixed_separator_color) && !empty($nz_h1_desk_fixed_separator_color)) {
			$dynamic_css .='.version1.fixed-true.active .desk-menu > ul:after {
				background-color:'.$nz_h1_desk_fixed_separator_color.';
			}';
		}

		$dynamic_css .='.version2 .header-top {
			background-color: '.$nz_h2_header_top_back_color.';
		}';

		if(!empty($nz_h2_header_top_border_color)){
			$dynamic_css .='.version2 .header-top {
				border-bottom:1px solid '.$nz_h2_header_top_border_color.';
			}';
		}

		$dynamic_css .='.version2 .header-top .header-top-menu ul li a {
		    color: '.$nz_h2_header_top_menu_color_reg.';
		}';

		$dynamic_css .='.version2 .header-top .header-top-menu ul li:hover > a {
		    color: '.$nz_h2_header_top_menu_color_hov.';
		}';

		$dynamic_css .='.version2 .header-top .header-top-menu > ul > li:not(:last-child):after {
			color: '.montserrat_ninzio_hex_to_rgba($nz_h2_header_top_menu_color_reg,0.3).';
		}';

		$dynamic_css .='.version2 .header-top .top-button {
		    color: '.$nz_h2_top_button_text_color.';
		    background-color: '.$nz_h2_top_button_back_color.';
		}';

		$dynamic_css .='.version2 .header-top .top-button:hover {
		    background-color: '.montserrat_ninzio_hex_to_rgb_shade($nz_h2_top_button_back_color,20).';
		}';

		$dynamic_css .='.version2 .header-top .header-top-social-links a {
		    color: '.$nz_h2_header_top_social_links_color.' !important;
		}';

		$dynamic_css .='.version2 .header-top .header-top-menu ul li ul.submenu-languages,
		.version2 .desk-menu > ul > li ul.submenu-languages
		{width: '.$nz_h2_desk_ls_w .';}';

		$dynamic_css .='.version2.top-false {
			height:'.$nz_h2_desk_height.'px;
		}';

		$dynamic_css .='.version2.top-true {
			height:'.(40+$nz_h2_desk_height).'px;
		}';

		$dynamic_css .='.version2 .header-body {
		    background-color: '.$nz_h2_desk_back_color.';';
		    if(!empty($nz_h2_desk_border_color)){
				$dynamic_css .='border-bottom:1px solid '.$nz_h2_desk_border_color.';';
		    }
			$dynamic_css .='height:'.$nz_h2_desk_height.'px;';
		$dynamic_css .='}';

		$dynamic_css .='.version2 .logo,
		.version2 .logo-title,
		.version2.desk .logo-part {
			height: '.$nz_h2_desk_height.'px;
			line-height: '.$nz_h2_desk_height.'px;
		}';

		$dynamic_css .='.version2 .desk-menu .sub-menu {
			top: '.$nz_h2_desk_height.'px;
		}';

		$dynamic_css .='.version2 .search {
			top: '.($nz_h2_desk_height/2 + 20).'px;
		}';

		$dynamic_css .='.version2 .desk-cart-wrap {
			height:'.$nz_h2_desk_height.'px;
		}';

		$dynamic_css .='.version2 .search-toggle-wrap,
		.version2 .desk-cart-toggle,
		.version2 .site-sidebar-toggle {
			margin-top: '.(($nz_h2_desk_height-40)/2).'px;
		}';

		$dynamic_css .='.version2 .site-sidebar-toggle {
			background-color: '.$nz_h2_desk_sidebar_toggle_color.';';
			if($nz_h2_desk_sidebar_toggle_border_color != "none"){
				$dynamic_css .='box-shadow:inset 0 0 0 2px '.$nz_h2_desk_sidebar_toggle_border_color;
			}
		$dynamic_css .='}';

		$dynamic_css .='.version2 .woo-cart {
		    top: '.$nz_h2_desk_height.'px;
		}';

		$dynamic_css .='.version2 .desk-menu > ul > li {
			margin-left: '.$nz_h2_desk_menu_m.'px !important;
			height: '.$nz_h2_desk_height.'px;
			line-height: '.$nz_h2_desk_height.'px;
		}';

		$dynamic_css .='.version2:not(.active) .logo-title {
			color: '.$nz_h2_desk_menu_color_reg.';
		}';

		$dynamic_css .='.version2 .desk-menu > ul > li > a {
		    color: '.$nz_h2_desk_menu_color_reg.';
			text-transform: '.$nz_h2_desk_menu_text_transform.';
			font-weight: '.$nz_h2_desk_menu_font_weight.';
			font-size: '.$nz_h2_desk_menu_font_size.';
			font-family: '.$nz_h2_desk_menu_font_family.';
			margin-top: '.(($nz_h2_desk_height-30)/2).'px;
		}';

		$dynamic_css .='.version2 .desk-cart-toggle span {
		    color: '.$nz_h2_desk_menu_color_reg.';';
		    if ($nz_h2_desk_menu_text_transform == "none"){
		    	$dynamic_css .='margin-left: -11px;';
		    }
		$dynamic_css .='}';

		$dynamic_css .='.version2 .desk-menu > ul > li.menu-item-language > a > .txt {
			box-shadow: inset 0 0 0 1px '.montserrat_ninzio_hex_to_rgba($nz_h2_desk_menu_color_reg,0.5).';
		}';

		$dynamic_css .='.version2 .desk-menu > ul > li.menu-item-language:hover > a > .txt {
			box-shadow: inset 0 0 0 1px '.montserrat_ninzio_hex_to_rgba($nz_h2_desk_menu_color_reg,0.7).';
		}';

		$dynamic_css .='.version2 .desk-menu > ul > li:hover > a,
		.version2 .desk-menu > ul > li.one-page-active > a,
		.version2 .desk-menu > ul > li.current-menu-item > a,
		.version2 .desk-menu > ul > li.current-menu-parent > a,
		.version2 .desk-menu > ul > li.current-menu-ancestor > a {
		    color: '.$nz_h2_desk_menu_color_hov.';
		}';

		$dynamic_css .='.one-page-top.one-page-top.version2 .desk-menu > ul > li:hover > a,
		.one-page-top.version2 .desk-menu > ul > li.one-page-active > a {
			color: '.$nz_h2_desk_menu_color_hov.' !important;
		}';

		$dynamic_css .='.one-page-top.version2 .desk-menu > ul > li.current-menu-item > a,
		.one-page-top.version2 .desk-menu > ul > li.current-menu-parent > a,
		.one-page-top.version2 .desk-menu > ul > li.current-menu-ancestor > a {
		    color: '.$nz_h2_desk_menu_color_reg.';
		}';

		$dynamic_css .='.version2 .desk-menu .sub-menu,
		.version2 .header-top .header-top-menu ul li ul,
		.version2 .woo-cart {
			background-color: '.$nz_h2_desk_submenu_back_color.';
		}';

		$dynamic_css .='.version2 .search {
			background-color: '.$nz_h2_desk_submenu_back_color.' !important;
		}';

		$dynamic_css .='.version2 .desk-menu .sub-menu .sub-menu {
			background-color: '.montserrat_ninzio_hex_to_rgb_shade($nz_h2_desk_submenu_back_color,20).';
		}';

		$dynamic_css .='.version2 .desk-menu .sub-menu li > a {
		    color: '.$nz_h2_desk_submenu_color_reg.';
			text-transform: '.$nz_h2_desk_submenu_text_transform.';
			font-weight: '.$nz_h2_desk_submenu_font_weight.';
			font-size: '.$nz_h2_desk_submenu_font_size.';
			line-height: '.$nz_h2_desk_submenu_line_height.';
			font-family: '.$nz_h2_desk_submenu_font_family.';
		}';

		$dynamic_css .='.version2 .desk-menu .sub-menu li > a:before {
		    background-color:'.$nz_h2_desk_submenu_effect_color.' !important;
		}';

		$dynamic_css .='.version2 .header-top .header-top-menu ul li ul li a {
		    color: '.$nz_h2_desk_submenu_color_reg.';
		}';

		$dynamic_css .='.version2 .desk-menu .sub-menu li:hover > a,
		.version2 .header-top .header-top-menu ul li ul li:hover > a {
		    color: '.$nz_h2_desk_submenu_color_hov.';
		}';
		
		$dynamic_css .='.version2 .desk-menu [data-mm="true"] > .sub-menu > li > a {
			text-transform: '.$nz_h2_desk_megamenu_text_transform.';
			font-weight: '.$nz_h2_desk_megamenu_font_weight.';
			font-size: '.$nz_h2_desk_megamenu_font_size.';
			color: '.$nz_h2_desk_megamenu_color.' !important;
			font-family: '.$nz_h2_desk_menu_font_family.';
		}';

		if (isset($nz_h2_desk_megamenu_top_border) && !empty($nz_h2_desk_megamenu_top_border)) {
			
			$dynamic_css .='.version2 .desk-menu [data-mm="true"] > .sub-menu > li > a {
				padding: 31px 0 30px 0;
				position:relative;
			}';

			$dynamic_css .='.version2 .desk-menu [data-mm="true"] > .sub-menu > li > a:after {
				background-color: '.$nz_h2_desk_megamenu_top_border.';
				display:block;
				content: "";
			    width: 30px;
			    height: 2px;
			    display: block;
			    bottom: 20px;
			    left:0px;
			    position:absolute;
			}';

			$dynamic_css .='.version2 .yawp_wim_title {
				position:relative;
				padding: 31px 0 43px 0 !important;
				margin-bottom:0;
				line-height: '.$nz_h2_desk_submenu_line_height.';
			}';

			$dynamic_css .='.version2 .yawp_wim_title:after {
				background-color: '.$nz_h2_desk_megamenu_top_border.';
				display:block;
				content: "";
			    width: 30px;
			    height: 2px;
			    display: block;
			    bottom: 30px;
			    left:0px;
			    position:absolute;
			}';
		}


		/*WIDGETS ------*/

			$dynamic_css .='.version2 .menu-item-type-yawp_wim,
			.version2 .menu-item-type-yawp_wim a:not(.button) {
				color: '.$nz_h2_desk_submenu_color_reg.';
				text-transform: '.$nz_h2_desk_submenu_text_transform.';
				font-weight: '.$nz_h2_desk_submenu_font_weight.';
				font-size: '.$nz_h2_desk_submenu_font_size.';
				line-height: '.$nz_h2_desk_submenu_line_height.';
				font-family: '.$nz_h2_desk_submenu_font_family.';
			}';

			$dynamic_css .='.version2 .widget_rss a, 
			.version2 .widget_nz_recent_entries a, 
			.version2 .widget_recent_comments a, 
			.version2 .widget_recent_entries a,
			.version2 .widget_nz_recent_entries .post .post-date,
			.version2 .nz-schedule li,
			.version2 .widget_twitter .tweet-time,
			.version2 .widget_shopping_cart .cart_list > li > a {
				color: '.$nz_h2_desk_submenu_color_reg.' !important;
			}';

			$dynamic_css .='.version2 .widget_rss a:hover, 
			.version2 .widget_nz_recent_entries a:hover, 
			.version2 .widget_recent_comments a:hover, 
			.version2 .widget_recent_entries a:hover,
			.version2 .widget_shopping_cart .cart_list > li > a:hover {
				color: '.$nz_h2_desk_submenu_color_hov.' !important;
			}';

			$dynamic_css .='.version2 .widget_twitter ul li:before,
			.version2 .widget_nz_recent_entries .post-body:before,
			.version2 .widget_recent_comments ul li:before {
				color: '.$nz_h2_desk_submenu_color_reg.' !important;
				background-color: '.montserrat_ninzio_hex_to_rgba($nz_h2_desk_submenu_color_reg, 0.2).' !important;
			}';

			$dynamic_css .='.version2 .nz-schedule {
				box-shadow: inset 0 0 0 1px '.montserrat_ninzio_hex_to_rgba($nz_h2_desk_submenu_color_reg, 0.2).';
			}';

			$dynamic_css .='.version2 .widget_shopping_cart .cart_list > li,
			.version2 .widget_products .product_list_widget > li, 
			.version2 .widget_recently_viewed_products .product_list_widget > li,
			.version2 .widget_recent_reviews .product_list_widget > li, 
			.version2 .widget_top_rated_products .product_list_widget > li {
				border-bottom: 1px solid '.montserrat_ninzio_hex_to_rgba($nz_h2_desk_submenu_color_reg, 0.2).';
			}';

			$dynamic_css .='.version2 .widget_price_filter .price_slider_wrapper .ui-widget-content {
				background-color: '.montserrat_ninzio_hex_to_rgba($nz_h2_desk_submenu_color_reg, 0.2).' !important;
			}';

			$dynamic_css .='.version2 .widget_calendar td#prev, 
			.version2 .widget_calendar td#next,
			.version2 .widget_calendar td,
			.version2 .widget_calendar caption,
			.version2 .widget_calendar th:first-child,
			.version2 .widget_calendar th:last-child {
				border-color: '.montserrat_ninzio_hex_to_rgba($nz_h2_desk_submenu_color_reg, 0.2).';
			}';


			$dynamic_css .='.version2 .widget_tag_cloud .tagcloud a:hover,
			.version2 .widget_product_tag_cloud .tagcloud a:hover, 
			.version2 .post-tags a:hover, 
			.version2 .projects-tags a:hover {
				color: '.$nz_h2_desk_submenu_effect_color.' !important;
			}';

			$dynamic_css .='.version2 .widget_calendar td#today {
				background-color: '.$nz_h2_desk_submenu_effect_color.' !important;
			}';

			$dynamic_css .='.version2 .widget_tag_cloud .tagcloud a:after,
			.version2 .widget_product_tag_cloud .tagcloud a:after, 
			.version2 .post-tags a:after, 
			.version2 .projects-tags a:after,
			.version2 .widget_tag_cloud .tagcloud a:before,
			.version2 .widget_product_tag_cloud .tagcloud a:before, 
			.version2 .post-tags a:before, 
			.version2 .projects-tags a:before {
				border-color: '.$nz_h2_desk_submenu_effect_color.' !important;
			}';

			$dynamic_css .='.version2 .widget_nav_menu ul li:hover a {
				color: '.$nz_h2_desk_submenu_color_reg.' !important;
			}';

			$dynamic_css .='.version2 .widget_product_categories ul li a:hover,
			.version2 .widget_shopping_cart p.buttons > a:hover,
			.version2 .widget_recent_entries a:hover,
			.version2 .widget_categories ul li a:hover,
			.version2 .widget_pages ul li a:hover,
			.version2 .widget_archive ul li a:hover,
			.version2 .widget_meta ul li a:hover,
			.version2 .widget_nz_recent_entries .post-title:hover,
			.version2 .widget_price_filter .price_slider_amount .button:hover,
			.version2 .widget_shopping_cart .cart_list > li > a:hover,
			.version2 .widget_products .product_list_widget > li > a:hover,
			.version2 .widget_recently_viewed_products .product_list_widget > li > a:hover,
			.version2 .widget_recent_reviews .product_list_widget > li > a:hover,
			.version2 .widget_top_rated_products .product_list_widget > li > a:hover,
			.version2 .widget_recent_entries a:hover, 
			.version2 .widget_nz_recent_entries .post-title:hover,
			.version2 .widget_product_categories ul li a:hover, 
			.version2 .widget_nav_menu ul li a:hover,
			.version2 .widget_recent_comments a:hover {
				color: '.$nz_h2_desk_submenu_color_hov.' !important;
			}';

			$dynamic_css .='.version2 .menu-item-type-yawp_wim a:hover {
				color: '.$nz_h2_desk_submenu_color_hov.';
			}';

			$dynamic_css .='.version2 textarea, 
			.version2 select, 
			.version2 input[type="date"], 
			.version2 input[type="datetime"], 
			.version2 input[type="datetime-local"], 
			.version2 input[type="email"], 
			.version2 input[type="month"], 
			.version2 input[type="number"], 
			.version2 input[type="password"], 
			.version2 input[type="search"], 
			.version2 input[type="tel"], 
			.version2 input[type="text"], 
			.version2 input[type="time"], 
			.version2 input[type="url"], 
			.version2 input[type="week"] {
				box-shadow: inset 0 0 0 1px '.montserrat_ninzio_hex_to_rgba($nz_h2_desk_submenu_color_reg,0.25).';
				color: '.$nz_h2_desk_submenu_color_reg.';
			}';

			$dynamic_css .='.version2 textarea:hover, 
			.version2 select:hover, 
			.version2 input[type="date"]:hover, 
			.version2 input[type="datetime"]:hover, 
			.version2 input[type="datetime-local"]:hover, 
			.version2 input[type="email"]:hover, 
			.version2 input[type="month"]:hover, 
			.version2 input[type="number"]:hover, 
			.version2 input[type="password"]:hover, 
			.version2 input[type="search"]:hover, 
			.version2 input[type="tel"]:hover, 
			.version2 input[type="text"]:hover, 
			.version2 input[type="time"]:hover, 
			.version2 input[type="url"]:hover, 
			.version2 input[type="week"]:hover {
				color: '.$nz_h2_desk_submenu_color_hov.' !important;
			}';

			$dynamic_css .='.version2 .desk-menu .button,
			.version2 .desk-menu button,
			.version2 .desk-menu input[type="reset"],
			.version2 .desk-menu input[type="submit"],
			.version2 .desk-menu input[type="button"] {
				background-color:'.$nz_h2_megamenu_buttons_back_color.' !important;
				color: '.$nz_h2_megamenu_buttons_text_color.' !important;
			}';

			$dynamic_css .='.version2 .desk-menu .button:hover,
			.version2 .desk-menu button:hover,
			.version2 .desk-menu input[type="reset"]:hover,
			.version2 .desk-menu input[type="submit"]:hover,
			.version2 .desk-menu input[type="button"]:hover {
				background-color:'.montserrat_ninzio_hex_to_rgb_shade($nz_h2_megamenu_buttons_back_color,20).' !important;
			}';

			$dynamic_css .='.version2 ::-webkit-input-placeholder {color: '.$nz_h2_desk_submenu_color_reg.';}';
			$dynamic_css .='.version2 :-moz-placeholder           {color: '.$nz_h2_desk_submenu_color_reg.';}';
			$dynamic_css .='.version2 ::-moz-placeholder          {color: '.$nz_h2_desk_submenu_color_reg.';}';
			$dynamic_css .='.version2 :-ms-input-placeholder      {color: '.$nz_h2_desk_submenu_color_reg.';}';

			$dynamic_css .='.version2 .widget_shopping_cart p.buttons > a:before, 
			.version2 .widget_shopping_cart p.buttons > a:after, 
			.version2 .widget_price_filter .price_slider_amount .button:before, 
			.version2 .widget_price_filter .price_slider_amount .button:after,
			.version2 .widget_price_filter .ui-slider .ui-slider-handle {
				border-color: '.$nz_h2_desk_submenu_effect_color.' !important;
			}';

			$dynamic_css .='.version2 .widget_price_filter .ui-slider .ui-slider-range {
				background-color: '.$nz_h2_desk_submenu_effect_color.' !important;
			}';

			$dynamic_css .='.version2 .widget_shopping_cart p.buttons > a:hover,
			.version2 .widget_price_filter .price_slider_amount .button:hover {
				color: '.$nz_h2_desk_submenu_effect_color.' !important;
			}';


			$dynamic_css .='.version2 .yawp_wim_title {
				text-transform: '.$nz_h2_desk_megamenu_text_transform.';
				font-weight: '.$nz_h2_desk_megamenu_font_weight.';
				font-size: '.$nz_h2_desk_megamenu_font_size.';
				color: '.$nz_h2_desk_megamenu_color.' !important;
				font-family: '.$nz_h2_desk_menu_font_family.';
			}';


			$dynamic_css .='.version2 .widget_tag_cloud .tagcloud a,
			.version2 .post-tags a,
			.version2 .widget_product_tag_cloud .tagcloud a,
			.version2 .projects-tags a {
				font-family: '.$nz_h2_desk_menu_font_family.';
				color: '.$nz_h2_desk_submenu_color_reg.';
				box-shadow:inset 0 0 0 1px '.montserrat_ninzio_hex_to_rgba($nz_h2_desk_submenu_color_reg, 0.3).' !important;
			}';

			$dynamic_css .='.version2 .widget_shopping_cart {
			    color: '.$nz_h2_desk_submenu_color_reg.';
			}';

			$dynamic_css .='.version2 .widget_shopping_cart .cart_list li {
				border-bottom: 1px solid '.montserrat_ninzio_hex_to_rgba($nz_h2_desk_submenu_color_reg,0.2).';
			}';

			$dynamic_css .='.version2 .widget_shopping_cart .cart_list li .remove {
				background-color: '.montserrat_ninzio_hex_to_rgb_shade($nz_h2_desk_submenu_back_color,10).' !important;
			}';

			$dynamic_css .='.version2 .widget_shopping_cart .cart_list li .remove:hover {
				background-color: '.$nz_h2_desk_submenu_effect_color.' !important;
			}';

			$dynamic_css .='.version2 .widget_shopping_cart .cart_list li img {
			    background-color: '.montserrat_ninzio_hex_to_rgba($nz_h2_desk_submenu_color_reg,0.1).';
			}';

			$dynamic_css .='.version2 .widget_shopping_cart .cart_list li:hover img {
			    background-color: '.montserrat_ninzio_hex_to_rgba($nz_h2_desk_submenu_color_reg,0.2).';
			}';

			$dynamic_css .='.version2 .widget_shopping_cart p.buttons > a, 
			.version2 .widget_price_filter .price_slider_amount .button {
				color: '.$nz_h2_desk_submenu_color_reg.' !important;
				box-shadow:inset 0 0 0 2px '.montserrat_ninzio_hex_to_rgba($nz_h2_desk_submenu_color_reg, 0.3).' !important;
			}';

			$dynamic_css .='.version2 .widget_shopping_cart p.buttons > a:hover, 
			.version2 .widget_price_filter .price_slider_amount .button:hover {
				color: '.$nz_h2_desk_submenu_effect_color.' !important;
			}';

			$dynamic_css .='.version2 .star-rating:before {
				color: '.montserrat_ninzio_hex_to_rgba($nz_h2_desk_submenu_color_reg, 0.4).' !important;
			}';

			$dynamic_css .='.version2 .widget_nav_menu li a:before,
			.version2 .widget_product_categories li a:before,
			.version2 .widget_categories ul li a:before,
			.version2 .widget_pages ul li a:before,
			.version2 .widget_archive ul li a:before,
			.version2 .widget_meta ul li a:before {
				background-color:'.$nz_h2_desk_submenu_effect_color.' !important;
			}';


			$dynamic_css .='.version2 .yawp_wim_title a {
				text-transform: '.$nz_h2_desk_megamenu_text_transform.' !important;
				font-weight: '.$nz_h2_desk_megamenu_font_weight.' !important;
				font-size: '.$nz_h2_desk_megamenu_font_size.' !important;
				color: '.$nz_h2_desk_megamenu_color.' !important;
				font-family: '.$nz_h2_desk_menu_font_family.' !important;
			}';

			$dynamic_css .='.version2 .widget_categories ul li,
			.version2 .widget_pages ul li,
			.version2 .widget_archive ul li,
			.version2 .widget_meta ul li {
				border-bottom: 1px solid '.montserrat_ninzio_hex_to_rgba($nz_h2_desk_submenu_color_reg,0.25).';
			}';

		/*------ WIDGETS*/

		$dynamic_css .='.version2 .desk-menu .sub-menu .label {font-family: '.$nz_h2_desk_menu_font_family.';}';

		$dynamic_css .='.version2 .search-true.cart-false .search-toggle:after,
		.version2 .cart-true .desk-cart-wrap:after {
			background-color: '.montserrat_ninzio_hex_to_rgba($nz_h2_desk_menu_color_reg,0.2).';
		}';

		$dynamic_css .='.version2 .search input[type="text"],
		.version2 .woo-cart {
		    color: '.$nz_h2_desk_submenu_color_reg.';
		}';

		$dynamic_css .='.version2 .woo-cart .widget_shopping_cart .cart_list li {
			border-bottom: 1px solid '.montserrat_ninzio_hex_to_rgba($nz_h2_desk_submenu_color_reg,0.2).';
		}';

		$dynamic_css .='.version2 .woo-cart .widget_shopping_cart .cart_list li .remove {
			background-color: '.montserrat_ninzio_hex_to_rgb_shade($nz_h2_desk_submenu_back_color,20).';
		}';

		$dynamic_css .='.version2 .woo-cart .widget_shopping_cart .cart_list li .remove:hover {
			background-color: '.montserrat_ninzio_hex_to_rgb_shade($nz_h2_desk_submenu_back_color,30).' !important;
		}';

		$dynamic_css .='.version2 .woo-cart .widget_shopping_cart .cart_list li img {
		    background-color: '.montserrat_ninzio_hex_to_rgba($nz_h2_desk_submenu_color_reg,0.1).';
		}';

		$dynamic_css .='.version2 .woo-cart .widget_shopping_cart .cart_list li:hover img {
		    background-color: '.montserrat_ninzio_hex_to_rgba($nz_h2_desk_submenu_color_reg,0.2).';
		}';

		/*EFFECTS*/
		$dynamic_css .='.version2.effect-underline .desk-menu > ul > li > a:after,
		.version2.effect-overline .desk-menu > ul > li > a:after,
		.version2.effect-fill .desk-menu > ul > li:hover > a,
		.version2.effect-fill .desk-menu > ul > li.one-page-active > a,
		.version2.effect-fill .desk-menu > ul > li.current-menu-item > a,
		.version2.effect-fill .desk-menu > ul > li.current-menu-parent > a,
		.version2.effect-fill .desk-menu > ul > li.current-menu-ancestor > a {
			background-color: '.$nz_h2_desk_menu_effect_color.';
		}';

		$dynamic_css .='.one-page-top.version2.effect-fill .desk-menu > ul > li:hover > a,
		.one-page-top.version2.effect-fill .desk-menu > ul > li.one-page-active > a {
			background-color: '.$nz_h2_desk_menu_effect_color.' !important
		}';

		$dynamic_css .='.version2.effect-outline .desk-menu > ul > li:hover > a,
		.version2.effect-outline .desk-menu > ul > li.one-page-active > a,
		.version2.effect-outline .desk-menu > ul > li.current-menu-item > a,
		.version2.effect-outline .desk-menu > ul > li.current-menu-parent > a,
		.version2.effect-outline .desk-menu > ul > li.current-menu-ancestor > a {
			box-shadow: inset 0 0 0 2px '.$nz_h2_desk_menu_effect_color.';
		}';

		$dynamic_css .='.one-page-top.version2.effect-outline .desk-menu > ul > li:hover > a,
		.one-page-top.version2.effect-outline .desk-menu > ul > li.one-page-active > a {
			box-shadow: inset 0 0 0 2px '.$nz_h2_desk_menu_effect_color.' !important;
		}';

		$dynamic_css .='.version2.effect-overline .desk-menu > ul > li > a:after {
			top:-'.(($nz_h2_desk_height-30)/2).'px;
		}';

		/*FIXED*/
		$dynamic_css .='.version2.fixed-true.active .header-body,
		.version2.fixed-true.active {
			height:'.$nz_h2_fixed_height.'px;
		}';

		$dynamic_css .='.version2.fixed-true.active.top-true {
			height:'.($nz_h2_fixed_height + 40).'px;
		}';

		$dynamic_css .='.version2.fixed-true.active .logo,
		.version2.fixed-true.active .logo-title {
			height:'.$nz_h2_fixed_height.'px;
			line-height: '.$nz_h2_fixed_height.'px;
		}';

		$dynamic_css .='.version2.fixed-true.active .desk-menu .sub-menu {
			top: '.$nz_h2_fixed_height.'px;
		}';

		$dynamic_css .='.version2.fixed-true.active .search {
			top: '.($nz_h2_fixed_height/2 + 20).'px;
		}';

		$dynamic_css .='.version2.fixed-true.active .desk-cart-wrap {
			height:'.$nz_h2_fixed_height.'px;
		}';

		$dynamic_css .='.version2.fixed-true.active .search-toggle-wrap,
		.version2.fixed-true.active .desk-cart-toggle,
		.version2.fixed-true.active .site-sidebar-toggle {
			margin-top: '.(($nz_h2_fixed_height-40)/2).'px;
		}';

		$dynamic_css .='.version2.fixed-true.active .woo-cart {
		    top: '.$nz_h2_fixed_height.'px;
		}';

		$dynamic_css .='.version2.fixed-true.active .desk-menu > ul > li {
			height: '.$nz_h2_fixed_height.'px;
			line-height: '.$nz_h2_fixed_height.'px;
		}';

		$dynamic_css .='.version2.fixed-true.active .desk-menu > ul > li > a {
			margin-top: '.(($nz_h2_fixed_height-30)/2).'px;
		}';

		$dynamic_css .='.version2.fixed-true.active .logo-title {
			color: '.$nz_h2_desk_fixed_menu_color_reg.';
		}';

		$dynamic_css .='.version2.fixed-true.active .header-body {
		    background-color: '.$nz_h2_desk_fixed_back_color.';
		}';

		$dynamic_css .='.version2.fixed-true.active .desk-menu > ul > li > a {
		    color: '.$nz_h2_desk_fixed_menu_color_reg.';
		}';

		$dynamic_css .='.version2.fixed-true.active .desk-cart-toggle span {
		    color: '.$nz_h2_desk_fixed_menu_color_reg.';
		}';

		$dynamic_css .='.version2.fixed-true.active .desk-menu > ul > li:hover > a,
		.version2.fixed-true.active .desk-menu > ul > li.one-page-active > a,
		.version2.fixed-true.active .desk-menu > ul > li.current-menu-item > a,
		.version2.fixed-true.active .desk-menu > ul > li.current-menu-parent > a,
		.version2.fixed-true.active .desk-menu > ul > li.current-menu-ancestor > a {
		    color: '.$nz_h2_desk_fixed_menu_color_hov.';
		}';

		$dynamic_css .='.one-page-top.version2.fixed-true.active .desk-menu > ul > li.current-menu-item > a,
		.one-page-top.version2.fixed-true.active .desk-menu > ul > li.current-menu-parent > a,
		.one-page-top.version2.fixed-true.active .desk-menu > ul > li.current-menu-ancestor > a {
		    color: '.$nz_h2_desk_fixed_menu_color_reg.';
		}';

		$dynamic_css .='.one-page-top.version2.fixed-true.active .desk-menu > ul > li:hover > a,
		.one-page-top.version2.fixed-true.active .desk-menu > ul > li.one-page-active > a {
		    color: '.$nz_h2_desk_fixed_menu_color_hov.' !important;
		}';

		$dynamic_css .='.version2.fixed-true.active .site-sidebar-toggle {
			background-color: '.$nz_h2_desk_fixed_sidebar_toggle_color.';
			box-shadow:inset 0 0 0 2px '.$nz_h2_desk_fixed_sidebar_toggle_border_color.';
		}';

		$dynamic_css .='.version2.fixed-true.active .search-true.cart-false .search-toggle:after,
		.version2.fixed-true.active .cart-true .desk-cart-wrap:after {
			background-color: '.montserrat_ninzio_hex_to_rgba($nz_h2_desk_fixed_menu_color_reg,0.2).';
		}';

		$dynamic_css .='.version2.fixed-true.active.effect-outline .desk-menu > ul > li:hover > a,
		.version2.fixed-true.active.effect-outline .desk-menu > ul > li.one-page-active > a,
		.version2.fixed-true.active.effect-outline .desk-menu > ul > li.current-menu-item > a,
		.version2.fixed-true.active.effect-outline .desk-menu > ul > li.current-menu-parent > a,
		.version2.fixed-true.active.effect-outline .desk-menu > ul > li.current-menu-ancestor > a {
			box-shadow: inset 0 0 0 2px '.$nz_h2_desk_fixed_menu_effect_color.';
		}';

		$dynamic_css .='.one-page-top.version2.fixed-true.active.effect-outline .desk-menu > ul > li:hover > a,
		.one-page-top.version2.fixed-true.active.effect-outline .desk-menu > ul > li.one-page-active > a {
			box-shadow: inset 0 0 0 2px '.$nz_h2_desk_fixed_menu_effect_color.' !important;
		}';

		$dynamic_css .='.version2.fixed-true.active.effect-underline .desk-menu > ul > li > a:after,
		.version2.fixed-true.active.effect-overline .desk-menu > ul > li > a:after,
		.version2.fixed-true.active.effect-fill .desk-menu > ul > li:hover > a,
		.version2.fixed-true.active.effect-fill .desk-menu > ul > li.one-page-active > a,
		.version2.fixed-true.active.effect-fill .desk-menu > ul > li.current-menu-item > a,
		.version2.fixed-true.active.effect-fill .desk-menu > ul > li.current-menu-parent > a,
		.version2.fixed-true.active.effect-fill .desk-menu > ul > li.current-menu-ancestor > a {
			background-color: '.$nz_h2_desk_fixed_menu_effect_color.';
		}';

		$dynamic_css .='.one-page-top.version2.fixed-true.active.effect-fill .desk-menu > ul > li:hover > a,
		.one-page-top.version2.fixed-true.active.effect-fill .desk-menu > ul > li.one-page-active > a {
			background-color: '.$nz_h2_desk_fixed_menu_effect_color.' !important;
		}';

		$dynamic_css .='.version2.fixed-true.active.effect-overline .desk-menu > ul > li > a:after {
			top:-'.(($nz_h2_fixed_height-30)/2).'px;
		}';

		$dynamic_css .='.version3 .header-body {
		    background-color: '.$nz_h3_desk_back_color.';';
		    if(!empty($nz_h3_desk_border_color)){
				$dynamic_css .='border-bottom:1px solid '.$nz_h3_desk_border_color.';';
		    }
			$dynamic_css .='height:'.$nz_h3_desk_height.'px;';
		$dynamic_css .='}';

		$dynamic_css .='.version3 .logo,
		.version3 .logo-title {
			height: '.$nz_h3_desk_height.'px;
			line-height: '.$nz_h3_desk_height.'px;
		}';

		$dynamic_css .='.version3 .desk-menu .sub-menu {
			top: '.$nz_h3_desk_height.'px;
		}';

		$dynamic_css .='.version3 .search {
			top: '.($nz_h3_desk_height/2 + 20).'px;
		}';

		$dynamic_css .='.version3 .desk-cart-wrap {
			height:'.$nz_h3_desk_height.'px;
		}';

		$dynamic_css .='.version3 .search-toggle-wrap,
		.version3 .desk-cart-toggle,
		.version3 .site-sidebar-toggle,
		.version3 .header-social-links {
			margin-top: '.(($nz_h3_desk_height-40)/2).'px;
		}';

		$dynamic_css .='.version3 .site-sidebar-toggle {
			background-color: '.$nz_h3_desk_sidebar_toggle_color.';
			box-shadow:inset 0 0 0 2px '.$nz_h3_desk_sidebar_toggle_border_color.';
		}';

		$dynamic_css .='.version3 .woo-cart {
		    top: '.$nz_h3_desk_height.'px;
		}';

		$dynamic_css .='.version3 .desk-menu > ul > li {
			margin-left: '.$nz_h3_desk_menu_m.'px !important;
			height: '.$nz_h3_desk_height.'px;
			line-height: '.$nz_h3_desk_height.'px;
		}';

		$dynamic_css .='.version3:not(.active) .logo-title {
			color: '.$nz_h3_desk_menu_color_reg.';
		}';

		$dynamic_css .='.version3 .header-social-links  a {
		    color: '.$nz_h3_desk_social_links_color.';
		}';

		$dynamic_css .='.version3 .desk-menu > ul > li > a {
		    color: '.$nz_h3_desk_menu_color_reg.';
			text-transform: '.$nz_h3_desk_menu_text_transform.';
			font-weight: '.$nz_h3_desk_menu_font_weight.';
			font-size: '.$nz_h3_desk_menu_font_size.';
			font-family: '.$nz_h3_desk_menu_font_family.';
			margin-top: '.(($nz_h3_desk_height-30)/2).'px;
		}';

		$dynamic_css .='.version3 .desk-cart-toggle span {
		    color: '.$nz_h3_desk_menu_color_reg.';';
		    if ($nz_h3_desk_menu_text_transform == "none"){
		    	$dynamic_css .='margin-left: -11px;';
		    }
		$dynamic_css .='}';

		$dynamic_css .='.version3 .desk-menu > ul > li.menu-item-language > a > .txt {
			box-shadow: inset 0 0 0 1px '.montserrat_ninzio_hex_to_rgba($nz_h3_desk_menu_color_reg,0.5).';
		}';

		$dynamic_css .='.version3 .desk-menu > ul > li.menu-item-language:hover > a > .txt {
			box-shadow: inset 0 0 0 1px '.montserrat_ninzio_hex_to_rgba($nz_h3_desk_menu_color_reg,0.7).';
		}';

		$dynamic_css .='.version3 .desk-menu > ul > li:hover > a,
		.version3 .desk-menu > ul > li.one-page-active > a,
		.version3 .desk-menu > ul > li.current-menu-item > a,
		.version3 .desk-menu > ul > li.current-menu-parent > a,
		.version3 .desk-menu > ul > li.current-menu-ancestor > a {
		    color: '.$nz_h3_desk_menu_color_hov.';
		}';

		$dynamic_css .='.one-page-top.version3 .desk-menu > ul > li:hover > a,
		.one-page-top.version3 .desk-menu > ul > li.one-page-active > a {
			color: '.$nz_h3_desk_menu_color_hov.' !important;
		}';

		$dynamic_css .='.one-page-top.version3 .desk-menu > ul > li.current-menu-item > a,
		.one-page-top.version3 .desk-menu > ul > li.current-menu-parent > a,
		.one-page-top.version3 .desk-menu > ul > li.current-menu-ancestor > a {
		    color: '.$nz_h3_desk_menu_color_reg.';
		}';

		$dynamic_css .='.version3 .desk-menu .sub-menu,
		.version3 .header-top .header-top-menu ul li ul,
		.version3 .woo-cart {
			background-color: '.$nz_h3_desk_submenu_back_color.';
		}';

		$dynamic_css .='.version3 .search {
			background-color: '.$nz_h3_desk_submenu_back_color.' !important;
		}';

		$dynamic_css .='.version3 .desk-menu .sub-menu .sub-menu {
			background-color: '.montserrat_ninzio_hex_to_rgb_shade($nz_h3_desk_submenu_back_color,20).';
		}';

		$dynamic_css .='.version3 .desk-menu .sub-menu li > a {
		    color: '.$nz_h3_desk_submenu_color_reg.';
			text-transform: '.$nz_h3_desk_submenu_text_transform.';
			font-weight: '.$nz_h3_desk_submenu_font_weight.';
			font-size: '.$nz_h3_desk_submenu_font_size.';
			line-height: '.$nz_h3_desk_submenu_line_height.';
			font-family: '.$nz_h3_desk_submenu_font_family.';
		}';

		$dynamic_css .='.version3 .desk-menu .sub-menu li > a:before {
		    background-color:'.$nz_h3_desk_submenu_effect_color.' !important;
		}';

		$dynamic_css .='.version3 .desk-menu .sub-menu li:hover > a {
		    color: '.$nz_h3_desk_submenu_color_hov.';
		}';
		
		$dynamic_css .='.version3 .desk-menu [data-mm="true"] > .sub-menu > li > a {
			text-transform: '.$nz_h3_desk_megamenu_text_transform.';
			font-weight: '.$nz_h3_desk_megamenu_font_weight.';
			font-size: '.$nz_h3_desk_megamenu_font_size.';
			color: '.$nz_h3_desk_megamenu_color.' !important;
			font-family: '.$nz_h3_desk_menu_font_family.';
		}';

		if (isset($nz_h3_desk_megamenu_top_border) && !empty($nz_h3_desk_megamenu_top_border)) {
			
			$dynamic_css .='.version3 .desk-menu [data-mm="true"] > .sub-menu > li > a {
				padding: 31px 0 30px 0;
				position:relative;
			}';

			$dynamic_css .='.version3 .desk-menu [data-mm="true"] > .sub-menu > li > a:after {
				background-color: '.$nz_h3_desk_megamenu_top_border.';
				display:block;
				content: "";
			    width: 30px;
			    height: 2px;
			    display: block;
			    bottom: 20px;
			    left:0px;
			    position:absolute;
			}';

			$dynamic_css .='.version3 .yawp_wim_title {
				position:relative;
				padding: 31px 0 43px 0 !important;
				margin-bottom:0;
				line-height: '.$nz_h3_desk_submenu_line_height.';
			}';

			$dynamic_css .='.version3 .yawp_wim_title:after {
				background-color: '.$nz_h3_desk_megamenu_top_border.';
				display:block;
				content: "";
			    width: 30px;
			    height: 2px;
			    display: block;
			    bottom: 30px;
			    left:0px;
			    position:absolute;
			}';
		}

		/*WIDGETS ------*/

			$dynamic_css .='.version3 .menu-item-type-yawp_wim,
			.version3 .menu-item-type-yawp_wim a:not(.button) {
				color: '.$nz_h3_desk_submenu_color_reg.';
				text-transform: '.$nz_h3_desk_submenu_text_transform.';
				font-weight: '.$nz_h3_desk_submenu_font_weight.';
				font-size: '.$nz_h3_desk_submenu_font_size.';
				line-height: '.$nz_h3_desk_submenu_line_height.';
				font-family: '.$nz_h3_desk_submenu_font_family.';
			}';

			$dynamic_css .='.version3 .widget_rss a, 
			.version3 .widget_nz_recent_entries a, 
			.version3 .widget_recent_comments a, 
			.version3 .widget_recent_entries a,
			.version3 .widget_nz_recent_entries .post .post-date,
			.version3 .nz-schedule li,
			.version3 .widget_twitter .tweet-time,
			.version3 .widget_shopping_cart .cart_list > li > a {
				color: '.$nz_h3_desk_submenu_color_reg.' !important;
			}';

			$dynamic_css .='.version3 .widget_rss a:hover, 
			.version3 .widget_nz_recent_entries a:hover, 
			.version3 .widget_recent_comments a:hover, 
			.version3 .widget_recent_entries a:hover,
			.version3 .widget_shopping_cart .cart_list > li > a:hover {
				color: '.$nz_h3_desk_submenu_color_hov.' !important;
			}';

			$dynamic_css .='.version3 .widget_twitter ul li:before,
			.version3 .widget_nz_recent_entries .post-body:before,
			.version3 .widget_recent_comments ul li:before {
				color: '.$nz_h3_desk_submenu_color_reg.' !important;
				background-color: '.montserrat_ninzio_hex_to_rgba($nz_h3_desk_submenu_color_reg, 0.2).' !important;
			}';

			$dynamic_css .='.version3 .nz-schedule {
				box-shadow: inset 0 0 0 1px '.montserrat_ninzio_hex_to_rgba($nz_h3_desk_submenu_color_reg, 0.2).';
			}';

			$dynamic_css .='.version3 .widget_shopping_cart .cart_list > li,
			.version3 .widget_products .product_list_widget > li, 
			.version3 .widget_recently_viewed_products .product_list_widget > li,
			.version3 .widget_recent_reviews .product_list_widget > li, 
			.version3 .widget_top_rated_products .product_list_widget > li {
				border-bottom: 1px solid '.montserrat_ninzio_hex_to_rgba($nz_h3_desk_submenu_color_reg, 0.2).';
			}';

			$dynamic_css .='.version3 .widget_price_filter .price_slider_wrapper .ui-widget-content {
				background-color: '.montserrat_ninzio_hex_to_rgba($nz_h3_desk_submenu_color_reg, 0.2).' !important;
			}';

			$dynamic_css .='.version3 .widget_calendar td#prev, 
			.version3 .widget_calendar td#next,
			.version3 .widget_calendar td,
			.version3 .widget_calendar caption,
			.version3 .widget_calendar th:first-child,
			.version3 .widget_calendar th:last-child {
				border-color: '.montserrat_ninzio_hex_to_rgba($nz_h3_desk_submenu_color_reg, 0.2).';
			}';


			$dynamic_css .='.version3 .widget_tag_cloud .tagcloud a:hover,
			.version3 .widget_product_tag_cloud .tagcloud a:hover, 
			.version3 .post-tags a:hover, 
			.version3 .projects-tags a:hover {
				color: '.$nz_h3_desk_submenu_effect_color.' !important;
			}';

			$dynamic_css .='.version3 .widget_calendar td#today {
				background-color: '.$nz_h3_desk_submenu_effect_color.' !important;
			}';

			$dynamic_css .='.version3 .widget_tag_cloud .tagcloud a:after,
			.version3 .widget_product_tag_cloud .tagcloud a:after, 
			.version3 .post-tags a:after, 
			.version3 .projects-tags a:after,
			.version3 .widget_tag_cloud .tagcloud a:before,
			.version3 .widget_product_tag_cloud .tagcloud a:before, 
			.version3 .post-tags a:before, 
			.version3 .projects-tags a:before {
				border-color: '.$nz_h3_desk_submenu_effect_color.' !important;
			}';

			$dynamic_css .='.version3 .widget_nav_menu ul li:hover a {
				color: '.$nz_h3_desk_submenu_color_reg.' !important;
			}';

			$dynamic_css .='.version3 .widget_product_categories ul li a:hover,
			.version3 .widget_shopping_cart p.buttons > a:hover,
			.version3 .widget_recent_entries a:hover,
			.version3 .widget_categories ul li a:hover,
			.version3 .widget_pages ul li a:hover,
			.version3 .widget_archive ul li a:hover,
			.version3 .widget_meta ul li a:hover,
			.version3 .widget_nz_recent_entries .post-title:hover,
			.version3 .widget_price_filter .price_slider_amount .button:hover,
			.version3 .widget_shopping_cart .cart_list > li > a:hover,
			.version3 .widget_products .product_list_widget > li > a:hover,
			.version3 .widget_recently_viewed_products .product_list_widget > li > a:hover,
			.version3 .widget_recent_reviews .product_list_widget > li > a:hover,
			.version3 .widget_top_rated_products .product_list_widget > li > a:hover,
			.version3 .widget_recent_entries a:hover, 
			.version3 .widget_nz_recent_entries .post-title:hover,
			.version3 .widget_product_categories ul li a:hover, 
			.version3 .widget_nav_menu ul li a:hover,
			.version3 .widget_recent_comments a:hover {
				color: '.$nz_h3_desk_submenu_color_hov.' !important;
			}';

			$dynamic_css .='.version3 .menu-item-type-yawp_wim a:hover {
				color: '.$nz_h3_desk_submenu_color_hov.';
			}';

			$dynamic_css .='.version3 textarea, 
			.version3 select, 
			.version3 input[type="date"], 
			.version3 input[type="datetime"], 
			.version3 input[type="datetime-local"], 
			.version3 input[type="email"], 
			.version3 input[type="month"], 
			.version3 input[type="number"], 
			.version3 input[type="password"], 
			.version3 input[type="search"], 
			.version3 input[type="tel"], 
			.version3 input[type="text"], 
			.version3 input[type="time"], 
			.version3 input[type="url"], 
			.version3 input[type="week"] {
				box-shadow: inset 0 0 0 1px '.montserrat_ninzio_hex_to_rgba($nz_h3_desk_submenu_color_reg,0.25).';
				color: '.$nz_h3_desk_submenu_color_reg.';
			}';

			$dynamic_css .='.version3 textarea:hover, 
			.version3 select:hover, 
			.version3 input[type="date"]:hover, 
			.version3 input[type="datetime"]:hover, 
			.version3 input[type="datetime-local"]:hover, 
			.version3 input[type="email"]:hover, 
			.version3 input[type="month"]:hover, 
			.version3 input[type="number"]:hover, 
			.version3 input[type="password"]:hover, 
			.version3 input[type="search"]:hover, 
			.version3 input[type="tel"]:hover, 
			.version3 input[type="text"]:hover, 
			.version3 input[type="time"]:hover, 
			.version3 input[type="url"]:hover, 
			.version3 input[type="week"]:hover {
				color: '.$nz_h3_desk_submenu_color_hov.' !important;
			}';

			$dynamic_css .='.version3 .desk-menu .button,
			.version3 .desk-menu button,
			.version3 .desk-menu input[type="reset"],
			.version3 .desk-menu input[type="submit"],
			.version3 .desk-menu input[type="button"] {
				background-color:'.$nz_h3_megamenu_buttons_back_color.' !important;
				color: '.$nz_h3_megamenu_buttons_text_color.' !important;
			}';

			$dynamic_css .='.version3 .desk-menu .button:hover,
			.version3 .desk-menu button:hover,
			.version3 .desk-menu input[type="reset"]:hover,
			.version3 .desk-menu input[type="submit"]:hover,
			.version3 .desk-menu input[type="button"]:hover {
				background-color:'.montserrat_ninzio_hex_to_rgb_shade($nz_h3_megamenu_buttons_back_color,20).' !important;
			}';

			$dynamic_css .='.version3 ::-webkit-input-placeholder {color: '.$nz_h3_desk_submenu_color_reg.';}';
			$dynamic_css .='.version3 :-moz-placeholder           {color: '.$nz_h3_desk_submenu_color_reg.';}';
			$dynamic_css .='.version3 ::-moz-placeholder          {color: '.$nz_h3_desk_submenu_color_reg.';}';
			$dynamic_css .='.version3 :-ms-input-placeholder      {color: '.$nz_h3_desk_submenu_color_reg.';}';

			$dynamic_css .='.version3 .widget_shopping_cart p.buttons > a:before, 
			.version3 .widget_shopping_cart p.buttons > a:after, 
			.version3 .widget_price_filter .price_slider_amount .button:before, 
			.version3 .widget_price_filter .price_slider_amount .button:after,
			.version3 .widget_price_filter .ui-slider .ui-slider-handle {
				border-color: '.$nz_h3_desk_submenu_effect_color.' !important;
			}';

			$dynamic_css .='.version3 .widget_price_filter .ui-slider .ui-slider-range {
				background-color: '.$nz_h3_desk_submenu_effect_color.' !important;
			}';

			$dynamic_css .='.version3 .widget_shopping_cart p.buttons > a:hover,
			.version3 .widget_price_filter .price_slider_amount .button:hover {
				color: '.$nz_h3_desk_submenu_effect_color.' !important;
			}';


			$dynamic_css .='.version3 .yawp_wim_title {
				text-transform: '.$nz_h3_desk_megamenu_text_transform.';
				font-weight: '.$nz_h3_desk_megamenu_font_weight.';
				font-size: '.$nz_h3_desk_megamenu_font_size.';
				color: '.$nz_h3_desk_megamenu_color.' !important;
				font-family: '.$nz_h3_desk_menu_font_family.';
			}';


			$dynamic_css .='.version3 .widget_tag_cloud .tagcloud a,
			.version3 .post-tags a,
			.version3 .widget_product_tag_cloud .tagcloud a,
			.version3 .projects-tags a {
				font-family: '.$nz_h3_desk_menu_font_family.';
				color: '.$nz_h3_desk_submenu_color_reg.';
				box-shadow:inset 0 0 0 1px '.montserrat_ninzio_hex_to_rgba($nz_h3_desk_submenu_color_reg, 0.3).' !important;
			}';

			$dynamic_css .='.version3 .widget_shopping_cart {
			    color: '.$nz_h3_desk_submenu_color_reg.';
			}';

			$dynamic_css .='.version3 .widget_shopping_cart .cart_list li {
				border-bottom: 1px solid '.montserrat_ninzio_hex_to_rgba($nz_h3_desk_submenu_color_reg,0.2).';
			}';

			$dynamic_css .='.version3 .widget_shopping_cart .cart_list li .remove {
				background-color: '.montserrat_ninzio_hex_to_rgb_shade($nz_h3_desk_submenu_back_color,10).' !important;
			}';

			$dynamic_css .='.version3 .widget_shopping_cart .cart_list li .remove:hover {
				background-color: '.$nz_h3_desk_submenu_effect_color.' !important;
			}';

			$dynamic_css .='.version3 .widget_shopping_cart .cart_list li img {
			    background-color: '.montserrat_ninzio_hex_to_rgba($nz_h3_desk_submenu_color_reg,0.1).';
			}';

			$dynamic_css .='.version3 .widget_shopping_cart .cart_list li:hover img {
			    background-color: '.montserrat_ninzio_hex_to_rgba($nz_h3_desk_submenu_color_reg,0.2).';
			}';

			$dynamic_css .='.version3 .widget_shopping_cart p.buttons > a, 
			.version3 .widget_price_filter .price_slider_amount .button {
				color: '.$nz_h3_desk_submenu_color_reg.' !important;
				box-shadow:inset 0 0 0 2px '.montserrat_ninzio_hex_to_rgba($nz_h3_desk_submenu_color_reg, 0.3).' !important;
			}';

			$dynamic_css .='.version3 .widget_shopping_cart p.buttons > a:hover, 
			.version3 .widget_price_filter .price_slider_amount .button:hover {
				color: '.$nz_h3_desk_submenu_effect_color.' !important;
			}';

			$dynamic_css .='.version3 .star-rating:before {
				color: '.montserrat_ninzio_hex_to_rgba($nz_h3_desk_submenu_color_reg, 0.4).' !important;
			}';

			$dynamic_css .='.version3 .widget_nav_menu li a:before,
			.version3 .widget_product_categories li a:before,
			.version3 .widget_categories ul li a:before,
			.version3 .widget_pages ul li a:before,
			.version3 .widget_archive ul li a:before,
			.version3 .widget_meta ul li a:before {
				background-color:'.$nz_h3_desk_submenu_effect_color.' !important;
			}';


			$dynamic_css .='.version3 .yawp_wim_title a {
				text-transform: '.$nz_h3_desk_megamenu_text_transform.' !important;
				font-weight: '.$nz_h3_desk_megamenu_font_weight.' !important;
				font-size: '.$nz_h3_desk_megamenu_font_size.' !important;
				color: '.$nz_h3_desk_megamenu_color.' !important;
				font-family: '.$nz_h3_desk_menu_font_family.' !important;
			}';

			$dynamic_css .='.version3 .widget_categories ul li,
			.version3 .widget_pages ul li,
			.version3 .widget_archive ul li,
			.version3 .widget_meta ul li {
				border-bottom: 1px solid '.montserrat_ninzio_hex_to_rgba($nz_h3_desk_submenu_color_reg,0.25).';
			}';

		/*------ WIDGETS*/

		$dynamic_css .='.version3 .desk-menu .sub-menu .label {font-family: '.$nz_h3_desk_menu_font_family.';}';

		$dynamic_css .='.version3 .search-true.cart-false .search-toggle:after,
		.version3 .cart-true .desk-cart-wrap:after {
			background-color: '.montserrat_ninzio_hex_to_rgba($nz_h3_desk_menu_color_reg,0.2).';
		}';

		$dynamic_css .='.version3 .search input[type="text"],
		.version3 .woo-cart {
		    color: '.$nz_h3_desk_submenu_color_reg.';
		}';

		$dynamic_css .='.version3 .woo-cart .widget_shopping_cart .cart_list li {
			border-bottom: 1px solid '.montserrat_ninzio_hex_to_rgba($nz_h3_desk_submenu_color_reg,0.2).';
		}';

		$dynamic_css .='.version3 .woo-cart .widget_shopping_cart .cart_list li .remove {
			background-color: '.montserrat_ninzio_hex_to_rgb_shade($nz_h3_desk_submenu_back_color,20).';
		}';

		$dynamic_css .='.version3 .woo-cart .widget_shopping_cart .cart_list li .remove:hover {
			background-color: '.montserrat_ninzio_hex_to_rgb_shade($nz_h3_desk_submenu_back_color,30).' !important;
		}';

		$dynamic_css .='.version3 .woo-cart .widget_shopping_cart .cart_list li img {
		    background-color: '.montserrat_ninzio_hex_to_rgba($nz_h3_desk_submenu_color_reg,0.1).';
		}';

		$dynamic_css .='.version3 .woo-cart .widget_shopping_cart .cart_list li:hover img {
		    background-color: '.montserrat_ninzio_hex_to_rgba($nz_h3_desk_submenu_color_reg,0.2).';
		}';

		/*EFFECTS*/
		$dynamic_css .='.version3.effect-underline .desk-menu > ul > li > a:after,
		.version3.effect-overline .desk-menu > ul > li > a:after,
		.version3.effect-fill .desk-menu > ul > li:hover > a,
		.version3.effect-fill .desk-menu > ul > li.one-page-active > a,
		.version3.effect-fill .desk-menu > ul > li.current-menu-item > a,
		.version3.effect-fill .desk-menu > ul > li.current-menu-parent > a,
		.version3.effect-fill .desk-menu > ul > li.current-menu-ancestor > a {
			background-color: '.$nz_h3_desk_menu_effect_color.';
		}';

		$dynamic_css .='.one-page-top.version3.effect-fill .desk-menu > ul > li:hover > a,
		.one-page-top.version3.effect-fill .desk-menu > ul > li.one-page-active > a {
			background-color: '.$nz_h3_desk_menu_effect_color.' !important;
		}';

		$dynamic_css .='.version3.effect-outline .desk-menu > ul > li:hover > a,
		.version3.effect-outline .desk-menu > ul > li.one-page-active > a,
		.version3.effect-outline .desk-menu > ul > li.current-menu-item > a,
		.version3.effect-outline .desk-menu > ul > li.current-menu-parent > a,
		.version3.effect-outline .desk-menu > ul > li.current-menu-ancestor > a {
			box-shadow: inset 0 0 0 2px '.$nz_h3_desk_menu_effect_color.';
		}';

		$dynamic_css .='.one-page-top.version3.effect-outline .desk-menu > ul > li:hover > a,
		.one-page-top.version3.effect-outline .desk-menu > ul > li.one-page-active > a {
			box-shadow: inset 0 0 0 2px '.$nz_h3_desk_menu_effect_color.' !important;
		}';

		$dynamic_css .='.version3.effect-overline .desk-menu > ul > li > a:after {
			top:-'.(($nz_h3_desk_height-30)/2).'px;
		}';

		if (isset($nz_h3_desk_separator_color) && !empty($nz_h3_desk_separator_color)) {
			$dynamic_css .='.version3 .desk-menu > ul:after {
				content:"";
				display:block;
				float:left;
				width:2px;
				height:40px;
				margin-top:'.(($nz_2h3_desk_height - 40)/2).'px;
				margin-left: 25px;
    			margin-right: 20px;
				background-color:'.$nz_h3_desk_separator_color.';\
				-webkit-transition: background-color 300ms linear;
				transition: background-color 300ms linear;
			}';
		}

		/*FIXED*/
		$dynamic_css .='.version3.fixed-true.active .header-body,
		.version3.fixed-true.active {
			height:'.$nz_h3_fixed_height.'px;
		}';

		$dynamic_css .='.version3.fixed-true.active .logo,
		.version3.fixed-true.active .logo-title {
			height:'.$nz_h3_fixed_height.'px;
			line-height: '.$nz_h3_fixed_height.'px;
		}';

		$dynamic_css .='.version3.fixed-true.active .search,
		.version3.fixed-true.active .desk-menu .sub-menu {
			top: '.$nz_h3_fixed_height.'px;
		}';

		$dynamic_css .='.version3.fixed-true.active .search {
			top: '.($nz_h3_fixed_height/2 + 20).'px;
		}';

		$dynamic_css .='.version3.fixed-true.active .desk-cart-wrap {
			height:'.$nz_h3_fixed_height.'px;
		}';

		$dynamic_css .='.version3.fixed-true.active .header-social-links,
		.version3.fixed-true.active .search-toggle-wrap,
		.version3.fixed-true.active .desk-cart-toggle,
		.version3.fixed-true.active .site-sidebar-toggle {
			margin-top: '.(($nz_h3_fixed_height-40)/2).'px;
		}';

		$dynamic_css .='.version3.fixed-true.active .woo-cart {
		    top: '.$nz_h3_fixed_height.'px;
		}';

		$dynamic_css .='.version3.fixed-true.active .desk-menu > ul > li {
			height: '.$nz_h3_fixed_height.'px;
			line-height: '.$nz_h3_fixed_height.'px;
		}';

		$dynamic_css .='.version3.fixed-true.active .desk-menu > ul > li > a {
			margin-top: '.(($nz_h3_fixed_height-30)/2).'px;
		}';

		$dynamic_css .='.version3.fixed-true.active .header-social-links  a {
		    color: '.$nz_h3_desk_fixed_social_links_color.';
		}';

		$dynamic_css .='.version3.fixed-true.active .logo-title {
			color: '.$nz_h3_desk_fixed_menu_color_reg.';
		}';

		$dynamic_css .='.version3.fixed-true.active .header-body {
		    background-color: '.$nz_h3_desk_fixed_back_color.';
		}';

		$dynamic_css .='.version3.fixed-true.active .desk-menu > ul > li > a {
		    color: '.$nz_h3_desk_fixed_menu_color_reg.';
		}';

		$dynamic_css .='.version2.fixed-true.active .desk-cart-toggle span {
		    color: '.$nz_h2_desk_fixed_menu_color_reg.';
		}';

		$dynamic_css .='.version3.fixed-true.active .desk-menu > ul > li:hover > a,
		.version3.fixed-true.active .desk-menu > ul > li.one-page-active > a,
		.version3.fixed-true.active .desk-menu > ul > li.current-menu-item > a,
		.version3.fixed-true.active .desk-menu > ul > li.current-menu-parent > a,
		.version3.fixed-true.active .desk-menu > ul > li.current-menu-ancestor > a {
		    color: '.$nz_h3_desk_fixed_menu_color_hov.';
		}';

		$dynamic_css .='.one-page-top.version3.fixed-true.active .desk-menu > ul > li.current-menu-item > a,
		.one-page-top.version3.fixed-true.active .desk-menu > ul > li.current-menu-parent > a,
		.one-page-top.version3.fixed-true.active .desk-menu > ul > li.current-menu-ancestor > a {
		    color: '.$nz_h3_desk_fixed_menu_color_reg.';
		}';

		$dynamic_css .='.one-page-top.version3.fixed-true.active .desk-menu > ul > li:hover > a,
		.one-page-top.version3.fixed-true.active .desk-menu > ul > li.one-page-active > a {
		    color: '.$nz_h3_desk_fixed_menu_color_hov.' !important;
		}';

		$dynamic_css .='.version3.fixed-true.active .site-sidebar-toggle {
			background-color: '.$nz_h3_desk_fixed_sidebar_toggle_color.';
			box-shadow:inset 0 0 0 2px '.$nz_h3_desk_fixed_sidebar_toggle_border_color.';
		}';

		$dynamic_css .='.version3.fixed-true.active .search-true.cart-false .search-toggle:after,
		.version3.fixed-true.active .cart-true .desk-cart-wrap:after {
			background-color: '.montserrat_ninzio_hex_to_rgba($nz_h3_desk_fixed_menu_color_reg,0.2).';
		}';

		$dynamic_css .='.version3.fixed-true.active.effect-outline .desk-menu > ul > li:hover > a,
		.version3.fixed-true.active.effect-outline .desk-menu > ul > li.one-page-active > a,
		.version3.fixed-true.active.effect-outline .desk-menu > ul > li.current-menu-item > a,
		.version3.fixed-true.active.effect-outline .desk-menu > ul > li.current-menu-parent > a,
		.version3.fixed-true.active.effect-outline .desk-menu > ul > li.current-menu-ancestor > a {
			box-shadow: inset 0 0 0 2px '.$nz_h3_desk_fixed_menu_effect_color.';
		}';

		$dynamic_css .='.one-page-top.version3.fixed-true.active.effect-outline .desk-menu > ul > li:hover > a,
		.one-page-top.version3.fixed-true.active.effect-outline .desk-menu > ul > li.one-page-active > a {
			box-shadow: inset 0 0 0 2px '.$nz_h3_desk_fixed_menu_effect_color.' !important;
		}';

		$dynamic_css .='.version3.fixed-true.active.effect-underline .desk-menu > ul > li > a:after,
		.version3.fixed-true.active.effect-overline .desk-menu > ul > li > a:after,
		.version3.fixed-true.active.effect-fill .desk-menu > ul > li:hover > a,
		.version3.fixed-true.active.effect-fill .desk-menu > ul > li.one-page-active > a,
		.version3.fixed-true.active.effect-fill .desk-menu > ul > li.current-menu-item > a,
		.version3.fixed-true.active.effect-fill .desk-menu > ul > li.current-menu-parent > a,
		.version3.fixed-true.active.effect-fill .desk-menu > ul > li.current-menu-ancestor > a {
			background-color: '.$nz_h3_desk_fixed_menu_effect_color.';
		}';

		$dynamic_css .='.one-page-top.version3.fixed-true.active.effect-fill .desk-menu > ul > li:hover > a,
		.one-page-top.version3.fixed-true.active.effect-fill .desk-menu > ul > li.one-page-active > a {
			background-color: '.$nz_h3_desk_fixed_menu_effect_color.' !important;
		}';

		$dynamic_css .='.one-page-bullets a[href*="#"]:hover,
		.one-page-bullets .one-page-active[href*="#"] {
			box-shadow:inset 0 0 0 10px '.$montserrat_ninzio_main_color.';
		}';

		$dynamic_css .='.desk-menu > ul > li > a > .txt .label:before {
			border-color: '.$montserrat_ninzio_main_color.' transparent transparent transparent;
		}';

		$dynamic_css .='@media only screen and (min-width:1100px){';

			$dynamic_css .='.version1.fixed-true.stuck-false.stuck-boxed-false + .page-content-wrap {
				padding-top: '.$nz_h1_desk_height.'px;
			}';

			$dynamic_css .='.version1.fixed-true.stuck-false.stuck-boxed-false.top-true + .page-content-wrap {
				padding-top: '.(40 + $nz_h1_desk_height).'px;
			}';

			$dynamic_css .='.version1.fixed-true.active.stuck-boxed-false.stuck-false + .page-content-wrap  {
				padding-top: '.$nz_h1_fixed_height.'px;
			}';

			$dynamic_css .='.version1.stuck-true + .page-content-wrap > .rich-header {
				padding-top: '.(14 + $nz_h1_desk_height).'px;
			}';

			$dynamic_css .='.version1.stuck-boxed-true + .page-content-wrap > .rich-header {
				padding-top: '.(44 + $nz_h1_desk_height).'px;
			}';

			$dynamic_css .='.version1.stuck-true.top-true + .page-content-wrap > .rich-header {
				padding-top: '.(54 + $nz_h1_desk_height).'px;
			}';

			$dynamic_css .='.version1.stuck-boxed-true.top-true + .page-content-wrap > .rich-header {
				padding-top: '.(94 + $nz_h1_desk_height).'px;
			}';

			$dynamic_css .='.version1.stuck-true + .page-content-wrap > .rich-header.version1,
			.version1.stuck-boxed-true + .page-content-wrap > .rich-header.version1 {
				height: '.($nz_h1_desk_height+350).'px;
			}';

			$dynamic_css .='.version1.stuck-true + .page-content-wrap > .rich-header.version2,
			.version1.stuck-boxed-true + .page-content-wrap > .rich-header.version2 {
				height: '.($nz_h1_desk_height+150).'px;
			}';

			$dynamic_css .='.version1.stuck-true.top-true + .page-content-wrap > .rich-header.version1,
			.version1.stuck-boxed-true.top-true + .page-content-wrap > .rich-header.version1 {
				height: '.($nz_h1_desk_height+390).'px;
			}';

			$dynamic_css .='.version1.stuck-true.top-true + .page-content-wrap > .rich-header.version2,
			.version1.stuck-boxed-true.top-true + .page-content-wrap > .rich-header.version2 {
				height: '.($nz_h1_desk_height+190).'px;
			}';

			$dynamic_css .='.version1.fixed-true.active.effect-overline .desk-menu > ul > li > a:after {
				top:-'.(($nz_h1_fixed_height-30)/2).'px;
			}';

			$dynamic_css .='.version2.fixed-true.stuck-false + .page-content-wrap {
				padding-top: '.$nz_h2_desk_height.'px;
			}';

			$dynamic_css .='.version2.fixed-true.stuck-false.top-true + .page-content-wrap {
				padding-top: '.(40 + $nz_h2_desk_height).'px;
			}';

			$dynamic_css .='.version2.fixed-true.active.stuck-false + .page-content-wrap  {
				padding-top: '.$nz_h2_fixed_height.'px;
			}';

			$dynamic_css .='.version2.stuck-true + .page-content-wrap > .rich-header {
				padding-top: '.(14 + $nz_h2_desk_height).'px;
			}';

			$dynamic_css .='.version2.stuck-true.top-true + .page-content-wrap > .rich-header {
				padding-top: '.(54 + $nz_h2_desk_height).'px;
			}';

			$dynamic_css .='.version2.stuck-true + .page-content-wrap > .rich-header.version1 {
				height: '.($nz_h2_desk_height+350).'px;
			}';

			$dynamic_css .='.version2.stuck-true + .page-content-wrap > .rich-header.version2 {
				height: '.($nz_h2_desk_height+150).'px;
			}';

			$dynamic_css .='.version2.stuck-true.top-true + .page-content-wrap > .rich-header.version1 {
				height: '.($nz_h2_desk_height+390).'px;
			}';

			$dynamic_css .='.version2.stuck-true.top-true + .page-content-wrap > .rich-header.version2 {
				height: '.($nz_h2_desk_height+190).'px;
			}';

			$dynamic_css .='.fixed-true.header-version3.page-content-wrap:not(.revolution-slider-active)  {
				padding-top: '.$nz_h3_desk_height.'px;
			}';

			$dynamic_css .='.fixed-true.header-version3.page-content-wrap.active  {
				padding-top: '.$nz_h3_fixed_height.'px;
			}';

			$dynamic_css .='.version3.fixed-true.active.effect-overline .desk-menu > ul > li > a:after {
				top:-'.(($nz_h3_fixed_height-30)/2).'px;
			}';
		$dynamic_css .='}';

		if (isset($nz_h3_desk_fixed_separator_color) && !empty($nz_h3_desk_fixed_separator_color)) {
			$dynamic_css .='.version3.fixed-true .desk-menu {margin-right:50px;}';
			$dynamic_css .='.version3.fixed-true .desk-menu:after {
				content:"";
				display:block;
				width:1px;
				height:60px;
				position:absolute;
				right:-25px;
				top:-30px;
				background-color:'.$nz_h3_desk_fixed_separator_color.'
			}';
		}

		if (isset($nz_h3_desk_fixed_separator_color) && !empty($nz_h3_desk_fixed_separator_color)) {
			$dynamic_css .='.version3.fixed-true.active .desk-menu > ul:after {
				background-color:'.$nz_h3_desk_fixed_separator_color.';
			}';
		}

		$dynamic_css .='@media only screen and (min-width:1600px){';
			$dynamic_css .='.version1 .desk-menu > ul > li {
				margin-left: '.$nz_h1_desk_menu_m_1600.'px !important;
			}';
			$dynamic_css .='.version2 .desk-menu > ul > li {
				margin-left: '.$nz_h2_desk_menu_m_1600.'px !important;
			}';
			$dynamic_css .='.version3 .desk-menu > ul > li {
				margin-left: '.$nz_h3_desk_menu_m_1600.'px !important;
			}';
		$dynamic_css .='}';

	    wp_add_inline_style( 'dynamic-styles', $dynamic_css );
}
add_action( 'wp_enqueue_scripts', 'montserrat_ninzio_include_dynamic_styles' );
?>