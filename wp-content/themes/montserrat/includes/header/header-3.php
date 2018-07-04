<?php include(get_template_directory().'/includes/header/header-opt.php'); ?>
<header class="header mob-header cart-<?php echo esc_attr($nz_h3_desk_shop_cart); ?> nz-clearfix">
	<div class="mob-header-top nz-clearfix">
		<div class="container">
			<?php if (!empty($nz_mob_logo)): ?>
				<div class="logo logo-mob">
					<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>">
						<img style="max-width:<?php echo esc_attr($nz_mob_logo_w); ?>px;max-height:<?php echo esc_attr($nz_mob_logo_h); ?>px;" src="<?php echo esc_url($nz_mob_logo); ?>" alt="<?php bloginfo('name'); ?>">
					</a>
				</div>
			<?php else: ?>
				<div class="logo-title"><?php echo get_bloginfo('name') ?></div>
			<?php endif ?>
			<span class="mob-menu-toggle"></span>
			<?php if ($nz_h3_desk_sidebar_toggle == "true"): ?>
				<span class="mob-sidebar-toggle"></span>
			<?php endif ?> 
		</div>
	</div>
	<div class="mob-header-content nz-clearfix">

		<div class="container">

			<nav class="mob-menu nz-clearfix">
				<?php if(has_nav_menu("header-menu")): ?>
					<?php wp_nav_menu($arg); ?>
				<?php endif; ?>
			</nav>

			<?php if ($nz_h3_header_top_social_links == "true"): ?>
				<div class="social-links nz-clearfix">
					<?php include(get_template_directory().'/includes/social-links.php'); ?>
				</div>
			<?php endif ?>

			<?php if ($nz_h3_desk_shop_cart == "true"): ?>
			    <?php if (class_exists('Woocommerce')): ?>
				    <div class="cart-toggle">
						<a class="cart-contents" href="<?php echo esc_url($GLOBALS['woocommerce']->cart->get_cart_url()); ?>" title="<?php esc_html__('View your shopping cart', 'montserrat'); ?>">
		                    <span class="cart-info"><?php echo esc_attr($GLOBALS['woocommerce']->cart->cart_contents_count); ?></span>
		                </a>
				    </div>
			    <?php endif ?>
		    <?php endif ?>

			<?php if ($nz_h3_desk_search == "true"): ?>
				<div class="search nz-clearfix">
					<?php get_search_form(); ?>
				</div>
			<?php endif ?>

		</div>
	</div>
</header>
<header class="<?php echo esc_attr($desk_class); ?>">

	<div class="header-content">

		<div class="header-body">
			<div class="container nz-clearfix">

				<?php if (!empty($nz_h3_desk_logo)): ?>
					<div class="logo logo-desk">
						<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>">
							<img class="normal-logo" style="max-width:<?php echo esc_attr($nz_h3_desk_logo_w); ?>px;max-height:<?php echo esc_attr($nz_h3_desk_logo_h); ?>px;" src="<?php echo esc_url($nz_h3_desk_logo); ?>" alt="<?php bloginfo('name'); ?>">
							<img class="fixed-logo" style="max-width:<?php echo esc_attr($nz_h3_desk_fixed_logo_w); ?>px;max-height:<?php echo esc_attr($nz_h3_desk_fixed_logo_h); ?>px;margin-top:-<?php echo esc_attr($nz_h3_desk_fixed_logo_h/2); ?>px" src="<?php echo esc_url($nz_h3_desk_fixed_logo); ?>" alt="<?php bloginfo('name'); ?>">
						</a>
					</div>
				<?php else: ?>
					<div class="logo-title"><?php echo get_bloginfo('name') ?></div>
				<?php endif ?>

				<?php if ($nz_h3_desk_sidebar_toggle == "true"): ?>
					<div class="site-sidebar-toggle"></div>
				<?php endif ?>

				<?php if ($nz_h3_desk_search == "true"): ?>
					<div class="search-toggle-wrap">
						<div class="search-toggle"></div>
						<div class="search"><?php get_search_form(); ?></div>
					</div>
				<?php endif ?>

				<?php if ($nz_h3_desk_shop_cart == "true"): ?>
					<?php if (class_exists('Woocommerce')): ?>
						<div class="desk-cart-wrap">
							<div class="desk-cart-toggle">
								<a class="cart-contents" href="<?php echo esc_url($GLOBALS['woocommerce']->cart->get_cart_url()); ?>" title="<?php echo esc_html__('View your shopping cart', 'montserrat'); ?>">
				                    <span class="cart-info"><?php echo esc_attr($GLOBALS['woocommerce']->cart->cart_contents_count); ?></span>
				                </a>
					        </div>
					        <div class="woo-cart nz-clearfix">
				                <?php
				                    if ( version_compare( WOOCOMMERCE_VERSION, "2.0.0" ) >= 0 ) {
				                        echo montserrat_ninzio_get_the_widget( 'WC_Widget_Cart', 'title=Cart' );
				                    } else {
				                        echo montserrat_ninzio_get_the_widget( 'WooCommerce_Widget_Cart', 'title=Cart' );
				                    }
				                ?>
			            	</div>
						</div>
					<?php endif ?>
				<?php endif ?>

				<?php if ($nz_h3_desk_social_links == "true"): ?>
					<div class="social-links header-social-links nz-clearfix">
						<?php include(get_template_directory().'/includes/social-links.php'); ?>
					</div>
				<?php endif ?>

				<?php if(has_nav_menu("header-menu")): ?>
					<nav class="header-menu desk-menu nz-clearfix">
						<?php wp_nav_menu($arg); ?>
					</nav>
				<?php endif; ?>
			</div>
		</div>

	</div>
</header>