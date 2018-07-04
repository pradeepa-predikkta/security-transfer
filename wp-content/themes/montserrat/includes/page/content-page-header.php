<?php
	
	montserrat_ninzio_global_variables();

	$nz_rh_version     = (isset($GLOBALS['montserrat_ninzio']['rh-version']) && !empty($GLOBALS['montserrat_ninzio']['rh-version'])) ? $GLOBALS['montserrat_ninzio']['rh-version'] : 'version1'; 
	$nz_header_version = (isset($GLOBALS['montserrat_ninzio']['header-version']) && !empty($GLOBALS['montserrat_ninzio']['header-version'])) ? $GLOBALS['montserrat_ninzio']['header-version'] : 'version1';

	$nz_offset = 0;
	$nz_from   = 0;

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

	$values           = get_post_custom( get_the_ID() );
	$nz_rev_slider    = (isset($values["rev_slider"][0])) ? $values["rev_slider"][0] : "";

	$styles             = "";
	$styles_fp          = "";

	$styles_title       = "";
	$styles_breadcrumbs = "";

	$nz_text_color          = (isset( $values['rh_text_color'][0]) && !empty($values['rh_text_color'][0])) ? $values["rh_text_color"][0] : "";
    $nz_back_color          = (isset( $values['rh_back_color'][0]) && !empty($values['rh_back_color'][0])) ? $values["rh_back_color"][0] : "#333333";
    $nz_back_img            = (isset( $values['rh_back_img'][0]) && !empty($values['rh_back_img'][0])) ? $values["rh_back_img"][0] : "";

    $nz_breadcrumbs_text_color   = (isset( $values['breadcrumbs_text_color'][0]) && !empty($values['breadcrumbs_text_color'][0])) ? $values["breadcrumbs_text_color"][0] : "#ffffff";
    $nz_breadcrumbs_back_color   = (isset( $values['breadcrumbs_back_color'][0]) && !empty($values['breadcrumbs_back_color'][0])) ? $values["breadcrumbs_back_color"][0] : "#333333";
    $nz_breadcrumbs_back_opacity = (isset( $values['breadcrumbs_back_opacity'][0]) && !empty($values['breadcrumbs_back_opacity'][0])) ? $values["breadcrumbs_back_opacity"][0] : "0.3";

    $nz_back_img_repeat     = (isset( $values['rh_back_img_repeat'][0]) && !empty($values['rh_back_img_repeat'][0])) ? $values["rh_back_img_repeat"][0] : "no-repeat";
    $nz_back_img_position   = (isset( $values['rh_back_img_position'][0]) && !empty($values['rh_back_img_position'][0])) ? $values["rh_back_img_position"][0] : "left top";
    $nz_back_img_attachment = (isset( $values['rh_back_img_attachment'][0]) && !empty($values['rh_back_img_attachment'][0])) ? $values["rh_back_img_attachment"][0] : "scroll";
    $nz_back_img_size       = (isset( $values['rh_back_img_size'][0]) && !empty($values['rh_back_img_size'][0])) ? $values["rh_back_img_size"][0] : "auto";
    $nz_parallax            = (isset( $values['parallax'][0]) && !empty($values['parallax'][0])) ? $values["parallax"][0] : "false";

    if (class_exists('Woocommerce')){
        if (is_cart() || is_checkout() || is_account_page()) {
            $nz_parallax = (isset( $GLOBALS['montserrat_ninzio']['shop-parallax']) && $GLOBALS['montserrat_ninzio']['shop-parallax'] == 1) ? "true" : "false";
        }
    }

    if (!empty($nz_back_color)) {$styles .= 'background-color:'.$nz_back_color.';';}
    if (!empty($nz_text_color)) {$styles .= 'color:'.$nz_text_color.';';}
	if (!empty($nz_back_img)) {

		if ($nz_parallax != "true" && $nz_back_img_attachment != "fixed") {
			$styles .= 'background-image:url('.$nz_back_img.');';
    		$styles .= 'background-repeat:'.$nz_back_img_repeat.';';
    		$styles .= 'background-position:'.$nz_back_img_position.';';
    		if ($nz_back_img_size == "cover") {$styles .= '-webkit-background-size: cover;-moz-background-size: cover;background-size: cover;';}
		}

		if ($nz_parallax == "true" || $nz_back_img_attachment == "fixed") {

	    	$nz_back_img_repeat     = "no-repeat";
			$nz_back_img_size       = "cover";

			$styles_fp .= 'background-image:url('.$nz_back_img.');';
			$styles_fp .= 'background-repeat:'.$nz_back_img_repeat.';';
			$styles_fp .= 'background-position:'.$nz_back_img_position.';';
	    }

		if ($nz_parallax == "true") {$nz_back_img_attachment = "scroll";}

	}

	if (!empty($nz_breadcrumbs_text_color)) {
		$styles_breadcrumbs .= 'color:'.$nz_breadcrumbs_text_color.';';
	}

	if (!empty($nz_breadcrumbs_back_color)) {
		if (!empty($nz_breadcrumbs_back_opacity)) {
			$styles_breadcrumbs .= 'background-color:'.montserrat_ninzio_hex_to_rgba($nz_breadcrumbs_back_color,$nz_breadcrumbs_back_opacity).';';
		} else {
			$styles_breadcrumbs .= 'background-color:'.$nz_breadcrumbs_back_color.';';
		}
	}

?>
<?php if(shortcode_exists("rev_slider") && !empty($nz_rev_slider)): ?>
	<?php echo(do_shortcode('[rev_slider '.$nz_rev_slider.']')); ?>
<?php else: ?>
	<?php if ($nz_rh_version != "none"): ?>
		<header class="rich-header page-header <?php echo esc_attr($nz_rh_version); ?>" data-parallax="<?php echo esc_attr($nz_parallax); ?>" style="<?php echo esc_attr($styles); ?>">
			<?php if ($nz_parallax == "true"): ?>
				<div class="parallax-container" style="<?php echo esc_attr($styles_fp); ?>">&nbsp;</div>
			<?php endif ?>
			<?php if ($nz_back_img_attachment == "fixed"): ?>
				<div class="fixed-container" style="<?php echo esc_attr($styles_fp); ?>">&nbsp;</div>
			<?php endif ?>
			<div class="container nz-clearfix">

				<?php if ($nz_rh_version == "version1"): ?>
					<div class="rh-content">
						<h1 style="<?php echo esc_attr($styles_title); ?>"><?php echo get_the_title(); ?></h1>				
						<div class="rh-separator">&nbsp;</div>
						<div style="<?php echo esc_attr($styles_breadcrumbs); ?>" class="nz-breadcrumbs nz-clearfix"><?php montserrat_ninzio_breadcrumbs(); ?></div>
					</div>
				<?php else: ?>
					<div class="rh-content">
						<h1 style="<?php echo esc_attr($styles_title); ?>"><?php echo get_the_title(); ?></h1>				
					</div>
				<?php endif ?>

			</div>
			<?php if ($nz_rh_version == 'version1'): ?>
				<div id="slider-arrow" data-target="#nz-content" data-from="<?php echo esc_attr($nz_from); ?>" data-offset="<?php echo esc_attr($nz_offset); ?>" class="i-separator animate nz-clearfix"></div>
			<?php endif ?>
		</header>
	<?php endif ?>
<?php endif ?>
