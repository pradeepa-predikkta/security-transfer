	<?php montserrat_ninzio_global_variables();?>

		<?php if (!is_page()): ?>
			<?php if (isset($GLOBALS['montserrat_ninzio']['footer-editor']) && $GLOBALS['montserrat_ninzio']['footer-editor']): ?>
				<div class="footer-editor nz-clearfix">
					<?php echo do_shortcode($GLOBALS['montserrat_ninzio']['footer-editor']); ?>
				</div>
			<?php endif ?>
		<?php endif ?>

		<!-- footer start -->
		<footer class='footer'>
			<div class="footer-wa nz-clearfix">
				<div class="container">
					<?php get_sidebar('footer'); ?>
				</div>
			</div>
			<div class="footer-info-area nz-clearfix">
				<div class="container">
					<?php if (isset($GLOBALS['montserrat_ninzio']['footer-copy']) && $GLOBALS['montserrat_ninzio']['footer-copy']): ?>
						<div class="footer-copyright nz-clearfix">
							<?php echo wp_kses($GLOBALS['montserrat_ninzio']['footer-copy'],wp_kses_allowed_html( 'post' )); ?>
						</div>
					<?php endif ?>
					<?php if(has_nav_menu("footer-menu")): ?>
						<nav class="footer-menu nz-clearfix">
							<?php wp_nav_menu(array( 
								'theme_location' => 'footer-menu', 
								'depth'          => 1, 
								'container'      => false, 
								'menu_id'        => 'footer-menu',
								'link_before'    => '',
								'link_after'     => ''
							)); ?>
						</nav>
					<?php endif; ?>
				</div>
			</div>
		</footer>
		<!-- footer end -->
		</div>
	</div>
	<!-- wrap end -->
</div>
<a id="top" href="#wrap"></a>
<!-- general wrap end -->
<?php if (is_page()){
	$nz_one_page_nav    = ($GLOBALS['montserrat_ninzio']['one-page-navigation']) ? $GLOBALS['montserrat_ninzio']['one-page-navigation'] : 'top'; 
	$nz_one_page_status = "false";
	$values = get_post_custom( get_the_ID() );
	if (isset($values['one_page'][0]) && $values['one_page'][0] == "true") {
		$nz_one_page_status = "true";
	}
?>
	<?php if ($nz_one_page_status == "true" && $nz_one_page_nav == "side"): ?>
		<?php
			$arg = array( 
				'theme_location' => 'one-page-bullets', 
				'depth'          => 1, 
				'container'      => false, 
				'menu_id'        => 'one-page-bullets',
				'link_before'    => '',
				'link_after'     => ''
			);
		?>
		<div class="one-page-bullets"><?php wp_nav_menu($arg); ?></div>
	<?php endif; ?>
<?php } ?>
<?php wp_footer(); ?>
</body>
</html>