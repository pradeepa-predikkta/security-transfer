<?php 
	montserrat_ninzio_global_variables();
	include(get_template_directory().'/includes/html-class.php');
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie <?php echo esc_attr($shop_class); ?> <?php echo esc_attr($blank_class); ?> <?php echo esc_attr($post_class); ?>" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie <?php echo esc_attr($shop_class); ?> <?php echo esc_attr($blank_class); ?> <?php echo esc_attr($post_class); ?>" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie <?php echo esc_attr($shop_class); ?> <?php echo esc_attr($blank_class); ?> <?php echo esc_attr($post_class); ?>" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie <?php echo esc_attr($shop_class); ?> <?php echo esc_attr($blank_class); ?> <?php echo esc_attr($post_class); ?>" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js <?php echo esc_attr($shop_class); ?> <?php echo esc_attr($blank_class); ?> <?php echo esc_attr($post_class); ?>" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<!-- META TAGS -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- LINK TAGS -->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php include(get_template_directory().'/includes/header/header-opt.php'); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- general wrap start -->
<div id="gen-wrap">

	<?php if ($nz_header_version == "version1"): ?>
		<?php if ($nz_h1_desk_sidebar_toggle == "true"): ?>
			<?php get_sidebar('site'); ?>
			<div class="site-overlay">&nbsp;</div>
		<?php endif ?>
	<?php elseif ($nz_header_version == "version2"): ?>
		<?php if ($nz_h2_desk_sidebar_toggle == "true"): ?>
			<?php get_sidebar('site'); ?>
			<div class="site-overlay">&nbsp;</div>
		<?php endif ?>
	<?php else: ?>
		<?php if ($nz_h3_desk_sidebar_toggle == "true"): ?>
			<?php get_sidebar('site'); ?>
			<div class="site-overlay">&nbsp;</div>
		<?php endif ?>
	<?php endif ?>

	<!-- wrap start -->
	<div id="wrap" class="nz-<?php echo esc_attr($nz_layout); ?>">

		<?php if ($nz_header_version == "version2"): ?>
			<?php include(get_template_directory().'/includes/header/header-2.php'); ?>
			<div class="page-content-wrap">
			<?php if (is_page()): ?>
				<?php get_template_part( '/includes/page/content-page-header' ); ?>
			<?php endif ?>
		<?php elseif ($nz_header_version == "version3"): ?>
			<?php if (is_page()): ?>
				<?php 
					$values        = get_post_custom( get_the_ID() );
					$nz_rev_slider = (isset($values["rev_slider"][0])) ? $values["rev_slider"][0] : "";
				?>
				<?php if(shortcode_exists("rev_slider") && !empty($nz_rev_slider)): ?>
					<div class="page-content-wrap revolution-slider-active fixed-<?php echo esc_attr($nz_h3_fixed); ?> header-<?php echo esc_attr($nz_header_version); ?>">
				<?php else: ?>
					<div class="page-content-wrap fixed-<?php echo esc_attr($nz_h3_fixed); ?> header-<?php echo esc_attr($nz_header_version); ?>">
				<?php endif ?>
				<?php get_template_part( '/includes/page/content-page-header-v2' ); ?>
			<?php else: ?>
				<?php include(get_template_directory().'/includes/header/header-3.php'); ?>
				<div class="page-content-wrap fixed-<?php echo esc_attr($nz_h3_fixed); ?> header-<?php echo esc_attr($nz_header_version); ?>">
			<?php endif; ?>
		<?php else: ?>
			<?php include(get_template_directory().'/includes/header/header-1.php'); ?>
			<div class="page-content-wrap">
			<?php if (is_page()): ?>
				<?php get_template_part( '/includes/page/content-page-header' ); ?>
			<?php endif ?>
		<?php endif ?>