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
<?php $total_results = $wp_query->found_posts; ?>
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
					<h1 style="<?php echo esc_attr($styles_title); ?>"><?php echo esc_html__('Search results', 'montserrat'); ?></h1>				
					<div class="rh-separator">&nbsp;</div>
                    <div style="<?php echo esc_attr($styles_breadcrumbs); ?>" class="nz-breadcrumbs nz-clearfix"><?php montserrat_ninzio_breadcrumbs(); ?></div>
				</div>
			<?php elseif ($nz_rh_version == "version2"): ?>
				<div class="rh-content">
					<h1 style="<?php echo esc_attr($styles_title); ?>"><?php echo esc_html__('Search results', 'montserrat'); ?></h1>				
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
		<div class="search-form">
			<?php echo get_search_form(); ?>
		</div>
		<div class="search-results-title">
			<?php echo esc_attr($total_results).esc_html__(' search results for', 'montserrat').' <strong><i>"'.get_search_query().'</i></strong>"'; ?>
		</div>
		<div class="search-posts">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>

					<?php $post_type = get_post_type( get_the_ID() ); ?>

					<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<div class="post-body">

							<?php if ($post_type == "post"): ?>
								<span title="<?php echo esc_attr($post_type); ?>" class="post-indication icon-feather2"></span>
							<?php elseif($post_type == "portfolio"): ?>
								<span title="<?php echo esc_attr($post_type); ?>" class="post-indication icon-briefcase2"></span>
							<?php else: ?>
								<span title="<?php echo esc_attr($post_type); ?>" class="post-indication icon-newspaper3"></span>
							<?php endif ?>

							<?php if ( '' != get_the_title() ): ?>
								<h3 class="post-title">
									<a href="<?php the_permalink(); ?>" title="<?php echo esc_html__("Go to", 'montserrat').' '.get_the_title(); ?>" rel="bookmark">
										<?php the_title(); ?>
									</a>
								</h3>
							<?php endif; ?>

							<div class="post-meta nz-clearfix">
								<div class="post-author"><?php echo esc_html__("Posted by", 'montserrat'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>" title="<?php echo esc_html__('View all posts by', 'montserrat'); ?> <?php the_author(); ?>"><?php the_author(); ?></a></div>
							</div>
							<?php if ( '' != get_the_content() ): ?>
							<div class="post-content nz-clearfix">
								<?php the_excerpt(); ?>
							</div>
							<?php endif; ?>
							<a href="<?php the_permalink(); ?>" class="search-button square button button-ghost default small animate-false hover-fill"><?php echo esc_html__("Read more", 'montserrat'); ?><span class="screen-reader-text"> <?php the_title();?></span></a>
						</div>
					</article>
				<?php endwhile; ?>
				<?php montserrat_ninzio_post_nav_num(); ?>
			<?php else : ?>
				<div class="suggestions">
					<p><strong><?php echo esc_html__('Suggestions:', 'montserrat'); ?></strong></p>
					<ol>
						<li><?php echo esc_html__('Make sure that all words are spelled correctly', 'montserrat'); ?></li>
						<li><?php echo esc_html__('Try different keywords', 'montserrat'); ?></li>
						<li><?php echo esc_html__('Try more general keywords', 'montserrat'); ?></li>
						<li><?php echo esc_html__('Try fewer keywords', 'montserrat'); ?></li>
					</ol>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>