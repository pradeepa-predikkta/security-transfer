<?php get_header(); ?>
<?php
    
    montserrat_ninzio_global_variables();

    $nz_rh_version      = (isset($GLOBALS['montserrat_ninzio']['rh-version']) && !empty($GLOBALS['montserrat_ninzio']['rh-version'])) ? $GLOBALS['montserrat_ninzio']['rh-version'] : 'version1'; 
    $nz_header_version  = (isset($GLOBALS['montserrat_ninzio']['header-version']) && !empty($GLOBALS['montserrat_ninzio']['header-version'])) ? $GLOBALS['montserrat_ninzio']['header-version'] : 'version1';

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

    $styles             = "";
    $styles_fp          = "";

    $styles_title       = "";
    $styles_breadcrumbs = "";

	$nz_text_color          	 = (isset( $GLOBALS['montserrat_ninzio']['tech_rh_text_color']) && !empty($GLOBALS['montserrat_ninzio']['tech_rh_text_color'])) ? $GLOBALS['montserrat_ninzio']["tech_rh_text_color"] : "";
    $nz_back_color          	 = (isset( $GLOBALS['montserrat_ninzio']['tech_rh_back']['background-color']) && !empty($GLOBALS['montserrat_ninzio']['tech_rh_back']['background-color'])) ? $GLOBALS['montserrat_ninzio']['tech_rh_back']['background-color'] : "";
    $nz_back_img            	 = (isset( $GLOBALS['montserrat_ninzio']['tech_rh_back']['background-image']) && !empty($GLOBALS['montserrat_ninzio']['tech_rh_back']['background-image'])) ? $GLOBALS['montserrat_ninzio']['tech_rh_back']['background-image'] : "";
    $nz_breadcrumbs_text_color   = (isset( $GLOBALS['montserrat_ninzio']['tech_breadcrumbs_text_color']) && !empty($GLOBALS['montserrat_ninzio']['tech_breadcrumbs_text_color'])) ? $GLOBALS['montserrat_ninzio']["tech_breadcrumbs_text_color"] : "";
    $nz_breadcrumbs_back_color   = (isset( $GLOBALS['montserrat_ninzio']['tech_breadcrumbs_back_color']['color']) && !empty($GLOBALS['montserrat_ninzio']['tech_breadcrumbs_back_color']['color'])) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']['tech_breadcrumbs_back_color']['color'],$GLOBALS['montserrat_ninzio']['tech_breadcrumbs_back_color']['alpha']) : "";
    
    $nz_back_img_repeat     = (isset( $GLOBALS['montserrat_ninzio']['tech_rh_back']['background-repeat']) && !empty($GLOBALS['montserrat_ninzio']['tech_rh_back']['background-repeat'])) ? $GLOBALS['montserrat_ninzio']['tech_rh_back']['background-repeat'] : "no-repeat";
    $nz_back_img_position   = (isset( $GLOBALS['montserrat_ninzio']['tech_rh_back']['background-position']) && !empty($GLOBALS['montserrat_ninzio']['tech_rh_back']['background-position'])) ? $GLOBALS['montserrat_ninzio']['tech_rh_back']['background-position'] : "left top";
    $nz_back_img_attachment = (isset( $GLOBALS['montserrat_ninzio']['tech_rh_back']['background-attachment']) && !empty($GLOBALS['montserrat_ninzio']['tech_rh_back']['background-attachment'])) ? $GLOBALS['montserrat_ninzio']['tech_rh_back']['background-attachment'] : "scroll";
    $nz_back_img_size       = (isset( $GLOBALS['montserrat_ninzio']['tech_rh_back']['background-size']) && !empty($GLOBALS['montserrat_ninzio']['tech_rh_back']['background-size'])) ? $GLOBALS['montserrat_ninzio']['tech_rh_back']['background-size'] : "auto";
    $nz_parallax            = (isset( $GLOBALS['montserrat_ninzio']['tech-parallax']) && $GLOBALS['montserrat_ninzio']['tech-parallax'] == 1) ? "true" : "false";

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
        $styles_breadcrumbs .= 'background-color:'.$nz_breadcrumbs_back_color.';';
    }
?>
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
					<h1 style="<?php echo esc_attr($styles_title); ?>"><?php echo esc_html__('404 Error page', 'montserrat'); ?></h1>				
					<div class="rh-separator">&nbsp;</div>
                    <div style="<?php echo esc_attr($styles_breadcrumbs); ?>" class="nz-breadcrumbs nz-clearfix"><?php montserrat_ninzio_breadcrumbs(); ?></div>
				</div>
			<?php elseif ($nz_rh_version == "version2"): ?>
				<div class="rh-content">
					<h1 style="<?php echo esc_attr($styles_title); ?>"><?php echo esc_html__('404 Error page', 'montserrat'); ?></h1>				
				</div>
			<?php endif ?>

		</div>
		<?php if ($nz_rh_version == 'version1'): ?>
            <div id="slider-arrow" data-target="#nz-content" data-from="<?php echo esc_attr($nz_from); ?>" data-offset="<?php echo esc_attr($nz_offset); ?>" class="i-separator animate nz-clearfix"><i class="icon-arrow-down10"></i></div>
        <?php endif ?>
	</header>
<?php endif ?>
<div id="nz-content" class='content nz-clearfix padding-true'>
	<div class='container'>
		<div class="error404-wrap">
			<div class="error404-big">404</div>
			<h3 class="error404-title"><?php echo esc_html__("Page not found", 'montserrat'); ?></h3>
			<a class="button button-normal grey_light full-false medium square animate-false anim-type-ghost hover-fill" href="<?php echo esc_url(home_url('/')); ?>" target="_self"><span class="txt"><?php echo esc_html__('Goto homepage', 'montserrat'); ?></span></a>
		</div>
	</div>
</div>
<!-- container end -->
<?php get_footer(); ?>
