<?php 
	montserrat_ninzio_global_variables();
	$nz_blog_layout              = (isset($GLOBALS['montserrat_ninzio']['blog-layout']) && !empty($GLOBALS['montserrat_ninzio']['blog-layout'])) ? $GLOBALS['montserrat_ninzio']['blog-layout'] : "medium";
?>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<article data-grid="ninzio_01" <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<?php

					$values = get_post_custom( $post->ID );
					$nz_featured_media = isset($values["featured_media"][0]) ? $values["featured_media"][0] : "true";
					$nz_audio_mp3      = isset($values["audio_mp3"][0]) ? $values["audio_mp3"][0] : "";
					$nz_audio_ogg      = isset($values["audio_ogg"][0]) ? $values["audio_ogg"][0] : "";
					$nz_audio_embed    = isset($values["audio_embed"][0]) ? $values["audio_embed"][0] : "";
					$nz_video_mp4      = isset($values["video_mp4"][0]) ? $values["video_mp4"][0] : "";
					$nz_video_ogv      = isset($values["video_ogv"][0]) ? $values["video_ogv"][0] : "";
					$nz_video_webm     = isset($values["video_webm"][0]) ? $values["video_webm"][0] : "";
					$nz_video_embed    = isset($values["video_embed"][0]) ? $values["video_embed"][0] : "";
					$nz_video_poster   = isset($values["video_poster"][0]) ? $values["video_poster"][0] : "";
					$nz_status_author  = isset($values["status_author"][0]) ? $values["status_author"][0] : "";
					$nz_quote_author   = isset($values["quote_author"][0]) ? $values["quote_author"][0] : "";
					$nz_link_url       = isset($values["link_url"][0]) ? $values["link_url"][0] : "";
					$post_format       = get_post_format($post->ID);

					$defaults = array(
						'before'           => '<div id="page-links">',
						'after'            => '</div>',
						'link_before'      => '',
						'link_after'       => '',
						'next_or_number'   => 'next',
						'separator'        => ' ',
						'nextpagelink'     => esc_html__( 'Continue reading', 'montserrat' ),
						'previouspagelink' => esc_html__( 'Go back' , 'montserrat'),
						'pagelink'         => '%',
						'echo'             => 1
					);

					?>
					<?php if (is_single()): ?>
						<?php if ($post_format == "0" || $post_format == 'aside' || $post_format == 'link' || $post_format == 'quote' || $post_format == 'status' || $post_format == 'chat'): ?>
							<?php if ($nz_featured_media == 'true'): ?>
								<?php echo montserrat_ninzio_thumbnail('full', $post->ID);?>
							<?php endif ?>
						<?php elseif($post_format == "gallery"): ?>
							<?php if ($nz_featured_media == 'true'): ?>
								<?php echo montserrat_ninzio_post_gallery('full', $post->ID); ?>
							<?php endif ?>
						<?php endif ?>
						<?php if (has_post_format('video') || has_post_format('audio')) {$nz_featured_media = "false";} ?>
						<?php if (has_post_format('audio')): ?>
							<?php if (!empty($nz_audio_mp3) || !empty($nz_audio_ogg) || !empty($nz_audio_embed)): ?>
								<div class="post-audio media">
									<?php 
										if(!empty($nz_audio_embed) && empty($nz_audio_ogg) && empty($nz_audio_mp3)) {
											echo "<div class='post-audio-embed'>".$nz_audio_embed."</div>";
										} elseif (!empty($nz_audio_ogg) || !empty($nz_audio_mp3)) {
											echo do_shortcode('[audio mp3="'.$nz_audio_mp3.'" ogg="'.$nz_audio_ogg.'"][/audio]'); 
										}
									?>
								</div>
							<?php endif ?>
						<?php endif ?>
						<?php if (has_post_format('video')): ?>
							<?php if (!empty($nz_video_mp4) || !empty($nz_video_ogv) || !empty($nz_video_webm) || !empty($nz_video_embed)): ?>
								<div class="post-video media">
									<?php
										if(!empty($nz_video_embed) && empty($nz_video_mp4) && empty($nz_video_ogv) && empty($nz_video_webm)) {
											echo "<div class='post-video-embed'><div class='flex-mod'>".$nz_video_embed."</div></div>";
										} elseif((!empty($nz_video_mp4) || !empty($nz_video_ogv) || !empty($nz_video_webm))) {
											echo do_shortcode('[video mp4="'.$nz_video_mp4.'" ogv="'.$nz_video_ogv.'" webm="'.$nz_video_webm.'" poster="'.$nz_video_poster.'"][/video]');
										}
									?>
								</div>
							<?php endif; ?>
						<?php endif ?>
						<div class="post-body">

						    <?php if ( '' != get_the_title() ): ?>
								<h1 class="post-title"><?php the_title(); ?></h1>
							<?php endif ?>

						    <div class="postmeta">
								<div class="post-date-full-single"><?php echo get_the_date(); ?></div>
								<div class="post-author"><?php echo get_the_author(); ?></div>
								<?php if (has_post_format('video') || has_post_format('audio')): ?>
									<?php if ('' != get_the_category_list()): ?>
										<div class="post-category"><?php echo get_the_category_list(esc_html__( ', ', 'montserrat' )); ?></div>
									<?php endif ?>
								<?php endif ?>
								<div class="post-comments">
									<?php if (comments_open()) : ?>
										<?php comments_popup_link( '<span class="leave-reply">' . esc_html__( 'Leave a comment', 'montserrat') . '</span>', esc_html__( 'One comment so far', 'montserrat'), esc_html__( 'View all % comments', 'montserrat') ); ?>
									<?php else : ?>
										<?php echo esc_html__('Comments are off for this post', 'montserrat'); ?>
									<?php endif;?>
								</div>
								<?php if (function_exists('ninzio_addons_post_social_share')): ?>
									<?php echo ninzio_addons_post_social_share(); ?>
								<?php endif ?>
							</div>
							
							<div class="single-post-content">
								<?php

									the_content(); 
									$defaults = array(
										'before'           => '<div id="page-links">',
										'after'            => '</div>',
										'link_before'      => '',
										'link_after'       => '',
										'next_or_number'   => 'next',
										'separator'        => ' ',
										'nextpagelink'     => esc_html__( 'Continue reading', 'montserrat' ),
										'previouspagelink' => esc_html__( 'Go back' , 'montserrat'),
										'pagelink'         => '%',
										'echo'             => 1
									);
									wp_link_pages($defaults);

								?>
							</div>	
							<?php if (has_post_format('link') && !empty($nz_link_url)): ?>
								<div class="link-link"><?php echo "- ".$nz_link_url; ?></div>
							<?php endif ?>
							<?php if (has_post_format('quote') && !empty($nz_quote_author)): ?>
								<div class="quote-author"><?php echo "- ". $nz_quote_author; ?></div>
							<?php endif ?>
							<?php if (has_post_format('status') && !empty($nz_status_author)): ?>
								<div class="status-author"><?php echo "- ". $nz_status_author; ?></div>
							<?php endif ?>

							<?php if (has_tag()): ?>
								<div class="post-tags"><?php the_tags('', '', ''); ?></div>
							<?php endif ?>
						</div>
					<?php else: ?>
						<?php if ($nz_blog_layout == "standard"): ?>
                    		<div class="post-date-custom"><span><?php echo get_the_date("d"); ?></span><span><?php echo get_the_date("M"); ?></span></div>
							<span class="post-format-status format-<?php echo ($post_format == "0") ? 'standard' : $post_format; ?>"></span>
							<?php if ($post_format == "0" || $post_format == 'chat'): ?>
								<?php echo montserrat_ninzio_thumbnail($nz_blog_layout, $post->ID);?>
							<?php elseif($post_format == "gallery"): ?>
								<?php echo montserrat_ninzio_post_gallery($nz_blog_layout, $post->ID); ?>
							<?php endif ?>
							<?php if (has_post_format('video') || has_post_format('audio')) {$nz_featured_media = "false";} ?>
							<?php if (has_post_format('audio')): ?>
								<?php if (!empty($nz_audio_mp3) || !empty($nz_audio_ogg) || !empty($nz_audio_embed)): ?>
									<div class="post-audio media">
										<?php 
											if(!empty($nz_audio_embed) && empty($nz_audio_ogg) && empty($nz_audio_mp3)) {
												echo "<div class='post-audio-embed'>".$nz_audio_embed."</div>";
											} elseif (!empty($nz_audio_ogg) || !empty($nz_audio_mp3)) {
												echo do_shortcode('[audio mp3="'.$nz_audio_mp3.'" ogg="'.$nz_audio_ogg.'"][/audio]'); 
											}
										?>
									</div>
								<?php endif ?>
							<?php endif ?>
							<?php if (has_post_format('video')): ?>
								<?php if (!empty($nz_video_mp4) || !empty($nz_video_ogv) || !empty($nz_video_webm) || !empty($nz_video_embed)): ?>
									<div class="post-video media">
										<?php
											if(!empty($nz_video_embed) && empty($nz_video_mp4) && empty($nz_video_ogv) && empty($nz_video_webm)) {
												echo "<div class='post-video-embed'><div class='flex-mod'>".$nz_video_embed."</div></div>";
											} elseif((!empty($nz_video_mp4) || !empty($nz_video_ogv) || !empty($nz_video_webm))) {
												echo do_shortcode('[video mp4="'.$nz_video_mp4.'" ogv="'.$nz_video_ogv.'" webm="'.$nz_video_webm.'" poster="'.$nz_video_poster.'"][/video]');
											}
										?>
									</div>
								<?php endif; ?>
							<?php endif ?>
						<?php else: ?>
							<?php
								if (has_post_format('gallery')) {echo montserrat_ninzio_post_gallery($nz_blog_layout, $post->ID);} 
								else {echo montserrat_ninzio_thumbnail($nz_blog_layout, $post->ID);}
							?>
						<?php endif ?>
						<?php get_template_part('/includes/blog/content-blog-post-body'); ?>
				<?php endif; ?>	
			</article>

			<?php if (is_single()): ?>

				<?php if ($GLOBALS['montserrat_ninzio']['blog-author'] && $GLOBALS['montserrat_ninzio']['blog-author'] == 1): ?>

					<aside class="post-author-info">
						<?php if ('' != get_avatar(get_the_author_meta('email'), '60')): ?>
							<div class="author-gavatar ninzio-gavatar"><?php echo get_avatar(get_the_author_meta('email'), '60'); ?></div>
						<?php endif ?>
						<div class="author-info-box">
							<h3 class="post-author-info-title"><a href="<?php echo get_author_posts_url( get_the_author_meta("ID") ); ?>"><?php echo get_the_author_meta("first_name")." ".get_the_author_meta("last_name"); ?></a></h3>
							<?php if ('' != get_the_author_meta("description")): ?>
								<div class="author-description"><?php echo get_the_author_meta("description"); ?></div>
							<?php endif ?>
							<div class="author-social-links nz-clearfix">
								<?php if ('' != get_the_author_meta("twitter")): ?>
									<a class="author-twitter icon-twitter" href="<?php echo esc_url(get_the_author_meta("twitter")); ?>"></a>
								<?php endif ?>
								<?php if ('' != get_the_author_meta("facebook")): ?>
									<a class="author-facebook icon-facebook" href="<?php echo esc_url(get_the_author_meta("facebook")); ?>"></a>
								<?php endif ?>
								<?php if ('' != get_the_author_meta("google-plus")): ?>
									<a class="author-google-plus icon-googleplus" href="<?php echo esc_url(get_the_author_meta("google-plus")); ?>"></a>
								<?php endif ?>
								<?php if ('' != get_the_author_meta("linkedin")): ?>
									<a class="author-linkedin icon-linkedin" href="<?php echo esc_url(get_the_author_meta("linkedin")); ?>"></a>
								<?php endif ?>
								<?php if ('' != get_the_author_meta("instagram")): ?>
									<a class="author-instagram icon-instagram" href="<?php echo esc_url(get_the_author_meta("instagram")); ?>"></a>
								<?php endif ?>
							</div>
						</div>
					</aside>

				<?php endif; ?>

				<?php if (isset($GLOBALS['montserrat_ninzio']['blog-rp']) && $GLOBALS['montserrat_ninzio']['blog-rp'] == 1): ?>

					<?php 

						montserrat_ninzio_global_variables();
						$terms          = wp_get_post_tags($post->ID);

					?>

					<?php if ($terms): ?>

						<?php

							$tagids = array();
							foreach($terms as $tag) {$tagids[] = $tag->term_id;}

							$args = array(
								'post_type' => 'post',
								'tag__in'   => $tagids,
								'posts_per_page'      => 6,
								'ignore_sticky_posts' => 1,
								'orderby'             => 'date',
								'post__not_in'        => array($post->ID)
							);

						    $related_posts = new WP_Query($args);

						?>

						<?php if ($related_posts->have_posts()): ?>
							<h3 class="nz-reletated-posts-sep"><?php echo esc_html__("Related posts", 'montserrat'); ?></h3>
							<div data-animate="false" data-autoplay="false" data-columns="3" class="nz-recent-posts nz-carousel related-posts grid nz-clearfix">

								<?php while($related_posts->have_posts()) : $related_posts->the_post(); ?>

									<div class="post format-<?php echo get_post_format(); ?> nz-clearfix" data-grid="ninzio_01">

										<?php if (has_post_thumbnail()): ?>

											<?php 
												$values = get_post_custom( $post->ID );
									            $post_format = get_post_format($post->ID);
									            $nz_link_url = isset($values["link_url"][0]) ? $values["link_url"][0] : "";
									            $link = ($post_format == "link") ? $nz_link_url : get_permalink();
								            ?>

								            <div class="nz-thumbnail">
								                <?php echo get_the_post_thumbnail( $post->ID, 'Montserrat-Ninzio-Half' ); ?>
							                    <div class="ninzio-overlay">
							                        <a class="nz-overlay-before" title="View details" href="<?php echo esc_url($link); ?>"></a>
							                    </div>
								            </div>

							        	<?php endif; ?>

										<div class="post-body">

											<?php if ( '' != get_the_title() ): ?>
												<?php if (has_post_format('link')): ?>
													<h3 class="post-title">
														<a href="<?php echo esc_url($nz_link_url); ?>" title="<?php echo (esc_html__("Go to", 'montserrat').' '.$nz_link_url); ?>" target="_blank">
															<?php echo get_the_title(); ?>
														</a>
													</h3>
												<?php else: ?>
													<h3 class="post-title">
														<a href="<?php echo get_permalink(); ?>" title="<?php echo (esc_html__("Read more about", 'montserrat').' '.get_the_title()); ?>" rel="bookmark">
															<?php echo get_the_title(); ?>
														</a>
													</h3>
												<?php endif; ?>
											<?php endif; ?>
											<div class="post-date-full"><?php echo get_the_date('j M Y') ?></div>
										</div>
									</div>
										
								<?php endwhile; ?>

								<?php wp_reset_postdata(); ?>

							</div>

						<?php endif ?>
						
					<?php endif ?>

				<?php endif; ?>

				<?php if (isset($GLOBALS['montserrat_ninzio']['blog-comments']) && $GLOBALS['montserrat_ninzio']['blog-comments'] == 1) {
					comments_template();
				} ?>

			<?php endif; ?>
			
		<?php endwhile; ?>

	<?php else : ?>

		<?php montserrat_ninzio_not_found('post'); ?>

	<?php endif; ?>