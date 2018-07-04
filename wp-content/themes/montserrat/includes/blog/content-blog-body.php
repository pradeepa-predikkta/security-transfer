<?php

	montserrat_ninzio_global_variables();

	$nz_blog_loop_sidebar        = (isset($GLOBALS['montserrat_ninzio']['blog-wa']) && $GLOBALS['montserrat_ninzio']['blog-wa'] == 1) ? "true" : "false";
	$nz_blog_single_sidebar      = (isset($GLOBALS['montserrat_ninzio']['blog-was']) && $GLOBALS['montserrat_ninzio']['blog-was'] == 1) ? "true" : "false";
	$nz_blog_layout              = (isset($GLOBALS['montserrat_ninzio']['blog-layout']) && !empty($GLOBALS['montserrat_ninzio']['blog-layout'])) ? $GLOBALS['montserrat_ninzio']['blog-layout'] : "medium";
?>
<div class="blog-layout-wrap <?php echo esc_attr($nz_blog_layout); ?> sidebar-<?php echo esc_attr($nz_blog_loop_sidebar); ?>" id="nz-target">
	
		<?php if (!is_single()): ?>
			<div id="loop" class="loop">
				<div class="container nz-clearfix">
						
					<?php if ($nz_blog_loop_sidebar == "true"): ?>
						<section class="main-content left">
							<section class="content lazy blog-layout nz-clearfix">
								<div class="blog-post blog-post-1 nz-clearfix"><?php get_template_part( '/includes/blog/content-blog-post' ); ?></div>
							</section>
							<?php montserrat_ninzio_post_nav_num() ?>
						</section>
						<aside class="sidebar">
							<?php if($GLOBALS['montserrat_ninzio']['blog-wa'] && $GLOBALS['montserrat_ninzio']['blog-wa'] == 1){get_sidebar();} ?>
						</aside>
					<?php else: ?>
						<section class="content lazy blog-layout nz-clearfix">
							<div class="blog-post blog-post-1 nz-clearfix"><?php get_template_part( '/includes/blog/content-blog-post' ); ?></div>
						</section>
						<?php montserrat_ninzio_post_nav_num() ?>
					<?php endif ?>

				</div>
			</div>
		<?php elseif(is_single()): ?>
			<div class="post-single-navigation nz-clearfix">
				<?php previous_post_link('%link', ''); ?>
				<?php next_post_link('%link', ''); ?>
			</div>
			<div class="container">
				<section class='content nz-clearfix'>
					<?php if ($nz_blog_single_sidebar == "true"): ?>
						<section class="main-content left">
							<div class="blog-post"><?php get_template_part( '/includes/blog/content-blog-post' ); ?></div>
						</section>
						<aside class="sidebar">
							<?php if($GLOBALS['montserrat_ninzio']['blog-was'] && $GLOBALS['montserrat_ninzio']['blog-was'] == 1){get_sidebar('single');} ?>
						</aside>
					<?php else: ?>
						<div class="blog-post"><?php get_template_part( '/includes/blog/content-blog-post' ); ?></div>
					<?php endif ?>	
				</section>
			</div>
		<?php endif; ?>	
</div>