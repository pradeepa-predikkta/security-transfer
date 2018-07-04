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

    $nz_blog_title             = (isset( $GLOBALS['montserrat_ninzio']['blog-title']) && !empty($GLOBALS['montserrat_ninzio']['blog-title'])) ? esc_attr($GLOBALS['montserrat_ninzio']["blog-title"]) : "";
    $nz_text_color             = (isset( $GLOBALS['montserrat_ninzio']['blog-text-color']) && !empty($GLOBALS['montserrat_ninzio']['blog-text-color'])) ? $GLOBALS['montserrat_ninzio']["blog-text-color"] : "";
    $nz_back_color             = (isset( $GLOBALS['montserrat_ninzio']['blog-back']['background-color']) && !empty($GLOBALS['montserrat_ninzio']['blog-back']['background-color'])) ? $GLOBALS['montserrat_ninzio']["blog-back"]['background-color'] : "#333333";
    $nz_back_img               = (isset( $GLOBALS['montserrat_ninzio']['blog-back']['background-image']) && !empty($GLOBALS['montserrat_ninzio']['blog-back']['background-image'])) ? $GLOBALS['montserrat_ninzio']['blog-back']["background-image"] : "";
    $nz_back_img_repeat        = (isset( $GLOBALS['montserrat_ninzio']['blog-back']['background-repeat']) && !empty($GLOBALS['montserrat_ninzio']['blog-back']['background-repeat'])) ? $GLOBALS['montserrat_ninzio']['blog-back']['background-repeat'] : "no-repeat";
    $nz_back_img_position      = (isset( $GLOBALS['montserrat_ninzio']['blog-back']['background-position']) && !empty($GLOBALS['montserrat_ninzio']['blog-back']['background-position'])) ? $GLOBALS['montserrat_ninzio']['blog-back']['background-position'] : "left top";
    $nz_back_img_attachment    = (isset( $GLOBALS['montserrat_ninzio']['blog-back']['background-attachment']) && !empty($GLOBALS['montserrat_ninzio']['blog-back']['background-attachment'])) ? $GLOBALS['montserrat_ninzio']['blog-back']['background-attachment'] : "scroll";
    $nz_back_img_size          = (isset( $GLOBALS['montserrat_ninzio']['blog-back']['background-size']) && !empty($GLOBALS['montserrat_ninzio']['blog-back']['background-size'])) ? $GLOBALS['montserrat_ninzio']['blog-back']['background-size'] : "auto";
    $nz_breadcrumbs_text_color = (isset( $GLOBALS['montserrat_ninzio']['blog-breadcrumbs-text-color']) && !empty($GLOBALS['montserrat_ninzio']['blog-breadcrumbs-text-color'])) ? $GLOBALS['montserrat_ninzio']["blog-breadcrumbs-text-color"] : "#ffffff";
    $nz_breadcrumbs_back_color = (isset( $GLOBALS['montserrat_ninzio']['blog-breadcrumbs-back-color']['color']) && !empty($GLOBALS['montserrat_ninzio']['blog-breadcrumbs-back-color']['color'])) ? montserrat_ninzio_hex_to_rgba($GLOBALS['montserrat_ninzio']["blog-breadcrumbs-back-color"]['color'],$GLOBALS['montserrat_ninzio']["blog-breadcrumbs-back-color"]['alpha']) : "rgba(255,255,255,0.1)";
    $nz_parallax               = (isset( $GLOBALS['montserrat_ninzio']['blog-parallax']) && $GLOBALS['montserrat_ninzio']['blog-parallax'] == 1) ? "true" : "false";

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
                    <?php if (is_author() || is_archive() || is_day() || is_tag() || is_category() || is_month() || is_day() || is_year()): ?>
                        <h1 style="<?php echo esc_attr($styles_title); ?>">
                            <?php if (is_category()): ?>
                                <?php echo single_cat_title("", true); ?>
                            <?php elseif(is_tag()): ?>
                                <?php echo single_tag_title("", true); ?>
                            <?php elseif(is_day()): ?>
                                <?php echo get_the_date('F dS Y'); ?>
                            <?php elseif(is_month()): ?>
                                <?php echo get_the_date('Y, F'); ?>
                            <?php elseif(is_year()): ?>
                                <?php echo get_the_date('Y'); ?>
                            <?php elseif(is_author()): ?>
                                <?php $userdata = get_userdata($GLOBALS['author']); ?>
                                <?php echo esc_html__("Articles posted by", 'montserrat'); ?> "<?php echo esc_attr($userdata->first_name)." ".esc_attr($userdata->last_name); ?>"
                            <?php else: ?>
                                <?php echo esc_html__("Posts", 'montserrat'); ?>
                            <?php endif ?>
                        </h1>
                        <div class="rh-separator">&nbsp;</div>
                        <div style="<?php echo esc_attr($styles_breadcrumbs); ?>" class="nz-breadcrumbs nz-clearfix"><?php montserrat_ninzio_breadcrumbs(); ?></div>
                    <?php else: ?>
                        <?php if (isset($GLOBALS['montserrat_ninzio']['blog-title']) && !empty($GLOBALS['montserrat_ninzio']['blog-title'])): ?>
                            <h1 style="<?php echo esc_attr($styles_title); ?>"><?php echo esc_attr($GLOBALS['montserrat_ninzio']['blog-title']); ?></h1>
                        <?php else: ?>
                            <h1 style="<?php echo esc_attr($styles_title); ?>"><?php echo esc_html__("Posts", 'montserrat'); ?></h1>
                        <?php endif ?>
                        <div class="rh-separator">&nbsp;</div>
                        <div style="<?php echo esc_attr($styles_breadcrumbs); ?>" class="nz-breadcrumbs nz-clearfix"><?php montserrat_ninzio_breadcrumbs(); ?></div>
                    <?php endif; ?>
                </div>
            <?php elseif ($nz_rh_version == "version2"): ?>
                <div class="rh-content">
                    <?php if (is_author() || is_archive() || is_day() || is_tag() || is_category() || is_month() || is_day() || is_year()): ?>
                        <h1 style="<?php echo esc_attr($styles_title); ?>">
                            <?php if (is_category()): ?>
                                <?php echo single_cat_title("", true); ?>
                            <?php elseif(is_tag()): ?>
                                <?php echo single_tag_title("", true); ?>
                            <?php elseif(is_day()): ?>
                                <?php echo get_the_date('F dS Y'); ?>
                            <?php elseif(is_month()): ?>
                                <?php echo get_the_date('Y, F'); ?>
                            <?php elseif(is_year()): ?>
                                <?php echo get_the_date('Y'); ?>
                            <?php elseif(is_author()): ?>
                                <?php $userdata = get_userdata($GLOBALS['author']); ?>
                                <?php echo esc_html__("Articles posted by", 'montserrat'); ?> "<?php echo esc_attr($userdata->display_name); ?>"
                            <?php else: ?>
                                <?php echo esc_html__("Posts", 'montserrat'); ?>
                            <?php endif ?>
                        </h1>
                    <?php else: ?>
                        <?php if (isset($GLOBALS['montserrat_ninzio']['blog-title']) && !empty($GLOBALS['montserrat_ninzio']['blog-title'])): ?>
                            <h1 style="<?php echo esc_attr($styles_title); ?>"><?php echo esc_attr($GLOBALS['montserrat_ninzio']['blog-title']); ?></h1>
                        <?php else: ?>
                            <h1 style="<?php echo esc_attr($styles_title); ?>"><?php echo esc_html__("Posts", 'montserrat'); ?></h1>
                        <?php endif ?>
                    <?php endif; ?>                
                </div>
            <?php endif ?>
        </div>
        <?php if ($nz_rh_version == 'version1'): ?>
            <div id="slider-arrow" data-target="#nz-target" data-from="<?php echo esc_attr($nz_from); ?>" data-offset="<?php echo esc_attr($nz_offset); ?>" class="i-separator animate nz-clearfix"></div>
        <?php endif ?>
    </header>
<?php endif ?>