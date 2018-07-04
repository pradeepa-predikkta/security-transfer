<?php

	montserrat_ninzio_global_variables();

	$nz_rh_version     = (isset($GLOBALS['montserrat_ninzio']['rh-version']) && !empty($GLOBALS['montserrat_ninzio']['rh-version'])) ? $GLOBALS['montserrat_ninzio']['rh-version'] : 'version1'; 
	$nz_layout         = (isset($GLOBALS['montserrat_ninzio']['layout']) && !empty($GLOBALS['montserrat_ninzio']['layout']) ) ? $GLOBALS['montserrat_ninzio']['layout'] : "wide";
	$nz_header_version = (isset($GLOBALS['montserrat_ninzio']['header-version']) && !empty($GLOBALS['montserrat_ninzio']['header-version'])) ? $GLOBALS['montserrat_ninzio']['header-version'] : 'version1';
	$nz_one_page_nav   = (isset($GLOBALS['montserrat_ninzio']['one-page-navigation']) && !empty($GLOBALS['montserrat_ninzio']['one-page-navigation'])) ? $GLOBALS['montserrat_ninzio']['one-page-navigation'] : 'top';

	$nz_mob_logo       = (isset($GLOBALS['montserrat_ninzio']['mob-logo']['url']) && !empty($GLOBALS['montserrat_ninzio']['mob-logo']['url'])) ? esc_url($GLOBALS['montserrat_ninzio']['mob-logo']['url']) : '';

	if (isset($GLOBALS['montserrat_ninzio']['mob-logo-retina']['url']) && !empty($GLOBALS['montserrat_ninzio']['mob-logo-retina']['url'])) {$nz_mob_logo = esc_url($GLOBALS['montserrat_ninzio']['mob-logo-retina']['url']);}

	$nz_mob_logo_w          = (isset($GLOBALS['montserrat_ninzio']['mob-logo']['url']) && !empty($GLOBALS['montserrat_ninzio']['mob-logo']['url'])) ? $GLOBALS['montserrat_ninzio']['mob-logo']['width'] : '';
	$nz_mob_logo_h          = (isset($GLOBALS['montserrat_ninzio']['mob-logo']['url']) && !empty($GLOBALS['montserrat_ninzio']['mob-logo']['url'])) ? $GLOBALS['montserrat_ninzio']['mob-logo']['height'] : '';

	$desk_class  = "header desk ".$nz_header_version." page-title-section-".$nz_rh_version. " one-page-".$nz_one_page_nav;

	// VERSION 1 OPTIONS
		
		$nz_h1_desk_logo                 = (isset($GLOBALS['montserrat_ninzio']['h1-desk-logo']['url']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-logo']['url'])) ? esc_url($GLOBALS['montserrat_ninzio']['h1-desk-logo']['url']) : "";
		if (isset($GLOBALS['montserrat_ninzio']['h1-desk-logo-retina']['url']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-logo-retina']['url'])) 
		{$nz_h1_desk_logo = esc_url($GLOBALS['montserrat_ninzio']['h1-desk-logo-retina']['url']);}
		$nz_h1_desk_logo_w               = (isset($GLOBALS['montserrat_ninzio']['h1-desk-logo']['url']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-logo']['url'])) ? $GLOBALS['montserrat_ninzio']['h1-desk-logo']['width']: "";
		$nz_h1_desk_logo_h               = (isset($GLOBALS['montserrat_ninzio']['h1-desk-logo']['url']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-logo']['url'])) ? $GLOBALS['montserrat_ninzio']['h1-desk-logo']['height'] : "";
		
		$nz_h1_desk_fixed_logo                 = (isset($GLOBALS['montserrat_ninzio']['h1-desk-fixed-logo']['url']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-fixed-logo']['url'])) ? esc_url($GLOBALS['montserrat_ninzio']['h1-desk-fixed-logo']['url']) : $nz_h1_desk_logo;
		if (isset($GLOBALS['montserrat_ninzio']['h1-desk-fixed-logo-retina']['url']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-fixed-logo-retina']['url'])) 
		{$nz_h1_desk_fixed_logo = esc_url($GLOBALS['montserrat_ninzio']['h1-desk-fixed-logo-retina']['url']);}
		$nz_h1_desk_fixed_logo_w               = (isset($GLOBALS['montserrat_ninzio']['h1-desk-fixed-logo']['url']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-fixed-logo']['url'])) ? $GLOBALS['montserrat_ninzio']['h1-desk-fixed-logo']['width']: $nz_h1_desk_logo_w;
		$nz_h1_desk_fixed_logo_h               = (isset($GLOBALS['montserrat_ninzio']['h1-desk-fixed-logo']['url']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-fixed-logo']['url'])) ? $GLOBALS['montserrat_ninzio']['h1-desk-fixed-logo']['height'] : $nz_h1_desk_logo_h;
		
		$nz_h1_stucked                   		  = (isset($GLOBALS['montserrat_ninzio']['h1-stucked']) && $GLOBALS['montserrat_ninzio']['h1-stucked'] == 1) ? "true" : "false";
		$nz_h1_stucked_boxed             		  = (isset($GLOBALS['montserrat_ninzio']['h1-stucked-boxed']) && $GLOBALS['montserrat_ninzio']['h1-stucked-boxed'] == 1) ? "true" : "false";
		$nz_h1_header_top                		  = (isset($GLOBALS['montserrat_ninzio']['h1-header-top']) && $GLOBALS['montserrat_ninzio']['h1-header-top'] == 1) ? "true" : "false";
		$nz_h1_full_width                		  = (isset($GLOBALS['montserrat_ninzio']['h1-full-width']) && $GLOBALS['montserrat_ninzio']['h1-full-width'] == 1) ? "true" : "false";
		$nz_h1_header_top_social_links   		  = (isset($GLOBALS['montserrat_ninzio']['h1-header-top-social-links']) && $GLOBALS['montserrat_ninzio']['h1-header-top-social-links'] == 1) ? "true" : "false";
		$nz_h1_desk_search               		  = (isset($GLOBALS['montserrat_ninzio']['h1-desk-search']) && $GLOBALS['montserrat_ninzio']['h1-desk-search'] == 1) ? "true" : "false";
		$nz_h1_desk_shop_cart            		  = (isset($GLOBALS['montserrat_ninzio']['h1-desk-shop-cart']) && $GLOBALS['montserrat_ninzio']['h1-desk-shop-cart'] == 1) ? "true" : "false";
		$nz_h1_desk_sidebar_toggle       		  = (isset($GLOBALS['montserrat_ninzio']['h1-desk-sidebar-toggle']) && $GLOBALS['montserrat_ninzio']['h1-desk-sidebar-toggle'] == 1) ? "true" : "false";
		$nz_h1_desk_icons_version        		  = (isset($GLOBALS['montserrat_ninzio']['h1-desk-icons-version']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-icons-version'])) ? $GLOBALS['montserrat_ninzio']['h1-desk-icons-version'] : "dark";
		$nz_h1_desk_menu_effect          		  = (isset($GLOBALS['montserrat_ninzio']['h1-desk-menu-effect']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-menu-effect'])) ? $GLOBALS['montserrat_ninzio']['h1-desk-menu-effect'] : "underline";
		$nz_h1_fixed                     		  = (isset($GLOBALS['montserrat_ninzio']['h1-fixed']) && $GLOBALS['montserrat_ninzio']['h1-fixed'] == 1) ? "true" : "false";
		$nz_h1_desk_fixed_icons_version  		  = (isset($GLOBALS['montserrat_ninzio']['h1-desk-fixed-icons-version']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-fixed-icons-version'])) ? $GLOBALS['montserrat_ninzio']['h1-desk-fixed-icons-version'] : $nz_h1_desk_icons_version;
		$nz_h1_desk_submenu_effect       		  = (isset($GLOBALS['montserrat_ninzio']['h1-desk-submenu-effect']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-submenu-effect'])) ? $GLOBALS['montserrat_ninzio']['h1-desk-submenu-effect'] : "ghost";
		$nz_h1_desk_submenu_hover_effect 		  = (isset($GLOBALS['montserrat_ninzio']['h1-desk-submenu-hover-effect']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-submenu-hover-effect'])) ? $GLOBALS['montserrat_ninzio']['h1-desk-submenu-hover-effect'] : "underline";
		$nz_h1_desk_megamenu_submenu_hover_effect = (isset($GLOBALS['montserrat_ninzio']['h1-desk-megamenu-submenu-hover-effect']) && !empty($GLOBALS['montserrat_ninzio']['h1-desk-megamenu-submenu-hover-effect'])) ? $GLOBALS['montserrat_ninzio']['h1-desk-megamenu-submenu-hover-effect'] : "underline";
		$nz_h1_megamenu_icons_version  		      = (isset($GLOBALS['montserrat_ninzio']['h1-megamenu-icons-version']) && !empty($GLOBALS['montserrat_ninzio']['h1-megamenu-icons-version'])) ? $GLOBALS['montserrat_ninzio']['h1-megamenu-icons-version'] : 'dark';

		if ($nz_h1_stucked_boxed == "true") {
			$nz_h1_full_width = 'false';
		}

	// VERSION 2 OPTIONS

		$nz_h2_desk_logo                 = (isset($GLOBALS['montserrat_ninzio']['h2-desk-logo']['url']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-logo']['url'])) ? esc_url($GLOBALS['montserrat_ninzio']['h2-desk-logo']['url']) : "";
		if (isset($GLOBALS['montserrat_ninzio']['h2-desk-logo-retina']['url']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-logo-retina']['url'])) 
		{$nz_h2_desk_logo = esc_url($GLOBALS['montserrat_ninzio']['h2-desk-logo-retina']['url']);}
		$nz_h2_desk_logo_w               = (isset($GLOBALS['montserrat_ninzio']['h2-desk-logo']['url']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-logo']['url'])) ? $GLOBALS['montserrat_ninzio']['h2-desk-logo']['width']: "";
		$nz_h2_desk_logo_h               = (isset($GLOBALS['montserrat_ninzio']['h2-desk-logo']['url']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-logo']['url'])) ? $GLOBALS['montserrat_ninzio']['h2-desk-logo']['height'] : "";
		
		$nz_h2_desk_fixed_logo                 = (isset($GLOBALS['montserrat_ninzio']['h2-desk-fixed-logo']['url']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-fixed-logo']['url'])) ? esc_url($GLOBALS['montserrat_ninzio']['h2-desk-fixed-logo']['url']) : $nz_h2_desk_logo;
		if (isset($GLOBALS['montserrat_ninzio']['h2-desk-fixed-logo-retina']['url']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-fixed-logo-retina']['url'])) 
		{$nz_h2_desk_fixed_logo = esc_url($GLOBALS['montserrat_ninzio']['h2-desk-fixed-logo-retina']['url']);}
		$nz_h2_desk_fixed_logo_w               = (isset($GLOBALS['montserrat_ninzio']['h2-desk-fixed-logo']['url']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-fixed-logo']['url'])) ? $GLOBALS['montserrat_ninzio']['h2-desk-fixed-logo']['width']: $nz_h2_desk_logo_w;
		$nz_h2_desk_fixed_logo_h               = (isset($GLOBALS['montserrat_ninzio']['h2-desk-fixed-logo']['url']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-fixed-logo']['url'])) ? $GLOBALS['montserrat_ninzio']['h2-desk-fixed-logo']['height'] : $nz_h2_desk_logo_h;
		
		$nz_h2_stucked                   		  = (isset($GLOBALS['montserrat_ninzio']['h2-stucked']) && $GLOBALS['montserrat_ninzio']['h2-stucked'] == 1) ? "true" : "false";
		$nz_h2_header_top                		  = (isset($GLOBALS['montserrat_ninzio']['h2-header-top']) && $GLOBALS['montserrat_ninzio']['h2-header-top'] == 1) ? "true" : "false";
		$nz_h2_header_top_social_links   		  = (isset($GLOBALS['montserrat_ninzio']['h2-header-top-social-links']) && $GLOBALS['montserrat_ninzio']['h2-header-top-social-links'] == 1) ? "true" : "false";
		$nz_h2_desk_search               		  = (isset($GLOBALS['montserrat_ninzio']['h2-desk-search']) && $GLOBALS['montserrat_ninzio']['h2-desk-search'] == 1) ? "true" : "false";
		$nz_h2_desk_shop_cart            		  = (isset($GLOBALS['montserrat_ninzio']['h2-desk-shop-cart']) && $GLOBALS['montserrat_ninzio']['h2-desk-shop-cart'] == 1) ? "true" : "false";
		$nz_h2_desk_sidebar_toggle       		  = (isset($GLOBALS['montserrat_ninzio']['h2-desk-sidebar-toggle']) && $GLOBALS['montserrat_ninzio']['h2-desk-sidebar-toggle'] == 1) ? "true" : "false";
		$nz_h2_desk_icons_version        		  = (isset($GLOBALS['montserrat_ninzio']['h2-desk-icons-version']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-icons-version'])) ? $GLOBALS['montserrat_ninzio']['h2-desk-icons-version'] : "dark";
		$nz_h2_desk_menu_effect          		  = (isset($GLOBALS['montserrat_ninzio']['h2-desk-menu-effect']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-menu-effect'])) ? $GLOBALS['montserrat_ninzio']['h2-desk-menu-effect'] : "underline";
		$nz_h2_fixed                     		  = (isset($GLOBALS['montserrat_ninzio']['h2-fixed']) && $GLOBALS['montserrat_ninzio']['h2-fixed'] == 1) ? "true" : "false";
		$nz_h2_desk_fixed_icons_version  		  = (isset($GLOBALS['montserrat_ninzio']['h2-desk-fixed-icons-version']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-fixed-icons-version'])) ? $GLOBALS['montserrat_ninzio']['h2-desk-fixed-icons-version'] : $nz_h2_desk_icons_version;
		$nz_h2_desk_submenu_effect       		  = (isset($GLOBALS['montserrat_ninzio']['h2-desk-submenu-effect']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-submenu-effect'])) ? $GLOBALS['montserrat_ninzio']['h2-desk-submenu-effect'] : "ghost";
		$nz_h2_desk_submenu_hover_effect 		  = (isset($GLOBALS['montserrat_ninzio']['h2-desk-submenu-hover-effect']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-submenu-hover-effect'])) ? $GLOBALS['montserrat_ninzio']['h2-desk-submenu-hover-effect'] : "underline";
		$nz_h2_desk_megamenu_submenu_hover_effect = (isset($GLOBALS['montserrat_ninzio']['h2-desk-megamenu-submenu-hover-effect']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-megamenu-submenu-hover-effect'])) ? $GLOBALS['montserrat_ninzio']['h2-desk-megamenu-submenu-hover-effect'] : "underline";
		$nz_h2_megamenu_icons_version  		      = (isset($GLOBALS['montserrat_ninzio']['h2-megamenu-icons-version']) && !empty($GLOBALS['montserrat_ninzio']['h2-megamenu-icons-version'])) ? $GLOBALS['montserrat_ninzio']['h2-megamenu-icons-version'] : 'dark';

	// VERSION 3 OPTIONS

		$nz_h3_desk_logo                 = (isset($GLOBALS['montserrat_ninzio']['h3-desk-logo']['url']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-logo']['url'])) ? esc_url($GLOBALS['montserrat_ninzio']['h3-desk-logo']['url']) : "";
		if (isset($GLOBALS['montserrat_ninzio']['h3-desk-logo-retina']['url']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-logo-retina']['url'])) 
		{$nz_h3_desk_logo = esc_url($GLOBALS['montserrat_ninzio']['h3-desk-logo-retina']['url']);}
		$nz_h3_desk_logo_w               = (isset($GLOBALS['montserrat_ninzio']['h3-desk-logo']['url']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-logo']['url'])) ? $GLOBALS['montserrat_ninzio']['h3-desk-logo']['width']: "";
		$nz_h3_desk_logo_h               = (isset($GLOBALS['montserrat_ninzio']['h3-desk-logo']['url']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-logo']['url'])) ? $GLOBALS['montserrat_ninzio']['h3-desk-logo']['height'] : "";
		
		$nz_h3_desk_fixed_logo                 = (isset($GLOBALS['montserrat_ninzio']['h3-desk-fixed-logo']['url']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-fixed-logo']['url'])) ? esc_url($GLOBALS['montserrat_ninzio']['h3-desk-fixed-logo']['url']) : $nz_h3_desk_logo;
		if (isset($GLOBALS['montserrat_ninzio']['h3-desk-fixed-logo-retina']['url']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-fixed-logo-retina']['url'])) 
		{$nz_h3_desk_fixed_logo = esc_url($GLOBALS['montserrat_ninzio']['h3-desk-fixed-logo-retina']['url']);}
		$nz_h3_desk_fixed_logo_w               = (isset($GLOBALS['montserrat_ninzio']['h3-desk-fixed-logo']['url']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-fixed-logo']['url'])) ? $GLOBALS['montserrat_ninzio']['h3-desk-fixed-logo']['width']: $nz_h3_desk_logo_w;
		$nz_h3_desk_fixed_logo_h               = (isset($GLOBALS['montserrat_ninzio']['h3-desk-fixed-logo']['url']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-fixed-logo']['url'])) ? $GLOBALS['montserrat_ninzio']['h3-desk-fixed-logo']['height'] : $nz_h3_desk_logo_h;
		
		$nz_h3_full_width                		  = (isset($GLOBALS['montserrat_ninzio']['h3-full-width']) && $GLOBALS['montserrat_ninzio']['h3-full-width'] == 1) ? "true" : "false";
		$nz_h3_desk_search               		  = (isset($GLOBALS['montserrat_ninzio']['h3-desk-search']) && $GLOBALS['montserrat_ninzio']['h3-desk-search'] == 1) ? "true" : "false";
		$nz_h3_desk_social_links         		  = (isset($GLOBALS['montserrat_ninzio']['h3-desk-social-links']) && $GLOBALS['montserrat_ninzio']['h3-desk-social-links'] == 1) ? "true" : "false";
		$nz_h3_desk_shop_cart            		  = (isset($GLOBALS['montserrat_ninzio']['h3-desk-shop-cart']) && $GLOBALS['montserrat_ninzio']['h3-desk-shop-cart'] == 1) ? "true" : "false";
		$nz_h3_desk_sidebar_toggle       		  = (isset($GLOBALS['montserrat_ninzio']['h3-desk-sidebar-toggle']) && $GLOBALS['montserrat_ninzio']['h3-desk-sidebar-toggle'] == 1) ? "true" : "false";
		$nz_h3_desk_icons_version        		  = (isset($GLOBALS['montserrat_ninzio']['h3-desk-icons-version']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-icons-version'])) ? $GLOBALS['montserrat_ninzio']['h3-desk-icons-version'] : "dark";
		$nz_h3_desk_menu_effect          		  = (isset($GLOBALS['montserrat_ninzio']['h3-desk-menu-effect']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-menu-effect'])) ? $GLOBALS['montserrat_ninzio']['h3-desk-menu-effect'] : "underline";
		$nz_h3_fixed                     		  = (isset($GLOBALS['montserrat_ninzio']['h3-fixed']) && $GLOBALS['montserrat_ninzio']['h3-fixed'] == 1) ? "true" : "false";
		$nz_h3_desk_fixed_icons_version  		  = (isset($GLOBALS['montserrat_ninzio']['h3-desk-fixed-icons-version']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-fixed-icons-version'])) ? $GLOBALS['montserrat_ninzio']['h3-desk-fixed-icons-version'] : $nz_h3_desk_icons_version;
		$nz_h3_desk_submenu_effect       		  = (isset($GLOBALS['montserrat_ninzio']['h3-desk-submenu-effect']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-submenu-effect'])) ? $GLOBALS['montserrat_ninzio']['h3-desk-submenu-effect'] : "ghost";
		$nz_h3_desk_submenu_hover_effect 		  = (isset($GLOBALS['montserrat_ninzio']['h3-desk-submenu-hover-effect']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-submenu-hover-effect'])) ? $GLOBALS['montserrat_ninzio']['h3-desk-submenu-hover-effect'] : "underline";
		$nz_h3_desk_megamenu_submenu_hover_effect = (isset($GLOBALS['montserrat_ninzio']['h3-desk-megamenu-submenu-hover-effect']) && !empty($GLOBALS['montserrat_ninzio']['h3-desk-megamenu-submenu-hover-effect'])) ? $GLOBALS['montserrat_ninzio']['h3-desk-megamenu-submenu-hover-effect'] : "underline";
		$nz_h3_megamenu_icons_version  		      = (isset($GLOBALS['montserrat_ninzio']['h3-megamenu-icons-version']) && !empty($GLOBALS['montserrat_ninzio']['h3-megamenu-icons-version'])) ? $GLOBALS['montserrat_ninzio']['h3-megamenu-icons-version'] : 'dark';

	if ($nz_header_version == "version1") {
		$desk_class .=" stuck-".$nz_h1_stucked;
		$desk_class .=" stuck-boxed-".$nz_h1_stucked_boxed;
		$desk_class .=" top-".$nz_h1_header_top;
		$desk_class .=" full-width-".$nz_h1_full_width;
		$desk_class .=" sl-".$nz_h1_header_top_social_links;
		$desk_class .=" search-".$nz_h1_desk_search;
		$desk_class .=" cart-".$nz_h1_desk_shop_cart;
		$desk_class .=" sidebar-toggle-".$nz_h1_desk_sidebar_toggle;
		$desk_class .=" iversion-".$nz_h1_desk_icons_version;
		$desk_class .=" effect-".$nz_h1_desk_menu_effect;
		$desk_class .=" hover-effect-".$nz_h1_desk_submenu_hover_effect;
		$desk_class .=" megamenu-hover-effect-".$nz_h1_desk_megamenu_submenu_hover_effect;
		$desk_class .=" subeffect-".$nz_h1_desk_submenu_effect;
		$desk_class .=" fixed-".$nz_h1_fixed;
		$desk_class .=" fiversion-".$nz_h1_desk_fixed_icons_version;
		$desk_class .=" wiversion-".$nz_h1_megamenu_icons_version;
	} elseif ($nz_header_version == "version2") {
		$desk_class .=" stuck-".$nz_h2_stucked;
		$desk_class .=" top-".$nz_h2_header_top;
		$desk_class .=" sl-".$nz_h2_header_top_social_links;
		$desk_class .=" search-".$nz_h2_desk_search;
		$desk_class .=" cart-".$nz_h2_desk_shop_cart;
		$desk_class .=" sidebar-toggle-".$nz_h2_desk_sidebar_toggle;
		$desk_class .=" iversion-".$nz_h2_desk_icons_version;
		$desk_class .=" effect-".$nz_h2_desk_menu_effect;
		$desk_class .=" hover-effect-".$nz_h2_desk_submenu_hover_effect;
		$desk_class .=" megamenu-hover-effect-".$nz_h2_desk_megamenu_submenu_hover_effect;
		$desk_class .=" subeffect-".$nz_h2_desk_submenu_effect;
		$desk_class .=" fixed-".$nz_h2_fixed;
		$desk_class .=" fiversion-".$nz_h2_desk_fixed_icons_version;
		$desk_class .=" wiversion-".$nz_h2_megamenu_icons_version;
	} elseif ($nz_header_version == "version3") {
		$desk_class .=" sl-".$nz_h3_desk_social_links;
		$desk_class .=" full-width-".$nz_h3_full_width;
		$desk_class .=" search-".$nz_h3_desk_search;
		$desk_class .=" cart-".$nz_h3_desk_shop_cart;
		$desk_class .=" sidebar-toggle-".$nz_h3_desk_sidebar_toggle;
		$desk_class .=" iversion-".$nz_h3_desk_icons_version;
		$desk_class .=" effect-".$nz_h3_desk_menu_effect;
		$desk_class .=" hover-effect-".$nz_h3_desk_submenu_hover_effect;
		$desk_class .=" megamenu-hover-effect-".$nz_h3_desk_megamenu_submenu_hover_effect;
		$desk_class .=" subeffect-".$nz_h3_desk_submenu_effect;
		$desk_class .=" fixed-".$nz_h3_fixed;
		$desk_class .=" fiversion-".$nz_h3_desk_fixed_icons_version;
		$desk_class .=" wiversion-".$nz_h3_megamenu_icons_version;
	}

	$mobarg = array( 
		'theme_location' => 'header-menu', 
		'depth'          => 3, 
		'container'      => false, 
		'menu_id'        => 'mob-header-menu',
		'link_before'    => '<span class="mi"></span><span class="txt">',
		'link_after'     => '</span><span class="di icon-arrow-down9"></span>'
	);

	$mobarg_1 = array( 
		'theme_location' => 'header-menu-1', 
		'depth'          => 3, 
		'container'      => false, 
		'menu_id'        => 'mob-header-menu-1',
		'link_before'    => '<span class="mi"></span><span class="txt">',
		'link_after'     => '</span><span class="di icon-arrow-down9"></span>'
	);

	$mobarg_2 = array( 
		'theme_location' => 'header-menu-2', 
		'depth'          => 3, 
		'container'      => false, 
		'menu_id'        => 'mob-header-menu-2',
		'link_before'    => '<span class="mi"></span><span class="txt">',
		'link_after'     => '</span><span class="di icon-arrow-down9"></span>'
	);

	$arg = array( 
		'theme_location' => 'header-menu', 
		'depth'          => 3, 
		'container'      => false, 
		'menu_id'        => 'header-menu',
		'link_before'    => '<span class="mi"></span><span class="txt">',
		'link_after'     => '</span><span class="di icon-arrow-right9"></span>',
		'walker'         => new nz_scm_walker
	);

	$arg_1 = array( 
		'theme_location' => 'header-menu-1', 
		'depth'          => 3, 
		'container'      => false, 
		'menu_id'        => 'header-menu-1',
		'link_before'    => '<span class="mi"></span><span class="txt">',
		'link_after'     => '</span><span class="di icon-arrow-right9"></span>',
		'walker'         => new nz_scm_walker
	);

	$arg_2 = array( 
		'theme_location' => 'header-menu-2', 
		'depth'          => 3, 
		'container'      => false, 
		'menu_id'        => 'header-menu-2',
		'link_before'    => '<span class="mi"></span><span class="txt">',
		'link_after'     => '</span><span class="di icon-arrow-right9"></span>',
		'walker'         => new nz_scm_walker
	);

	$arg_top = array( 
		'theme_location' => 'header-top-menu', 
		'depth'          => 2, 
		'container'      => false, 
		'menu_id'        => 'header-top-menu',
		'link_before'    => '<span class="mi"></span><span class="txt">',
		'link_after'     => '</span>'
	);

?>