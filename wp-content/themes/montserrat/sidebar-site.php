<?php if(is_active_sidebar('site-widget-area')): ?>
	<div class='site-widget-area widget-area'>
	<div class="mob-sidebar-toggle2"></div>
	<div class="custom-scroll-bar">  
		<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar('site-widget-area') ) : ?>
		<?php endif; ?>
	</div>
	</div>
<?php endif; ?>