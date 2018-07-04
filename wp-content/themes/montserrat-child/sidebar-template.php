<?php
/*
Template Name: Bottom bar template
*/
?>

<?php get_header(); ?>

<div id="nz-content" class='content nz-clearfix sidebar-<?php echo esc_attr($nz_sidebar_pos); ?> padding-<?php echo esc_attr($nz_padding); ?>'>
	<div class='container <?php echo esc_attr($nz_page_width); ?>'>
		<?php

			if($nz_sidebar_pos == "left") {

				echo '<div class="sidebar">';
					get_sidebar('page');
				echo '</div>';

				echo '<div class="main-content right">';
					get_template_part( '/includes/page/content-page-body' );
					comments_template();
				echo '</div>';
				
			} elseif ($nz_sidebar_pos == "right") {

				echo '<div class="main-content left">';
					get_template_part( '/includes/page/content-page-body' );
					comments_template();
				echo '</div>';

				echo '<div class="sidebar">';
					get_sidebar('page');
				echo '</div>';

			} else {
				echo get_template_part( '/includes/page/content-page-body' );
				comments_template();
			}

		?>
		
		
	</div>
</div>

<div id="sidebar-widget">
   
      <?php
      if ( !function_exists('my_custom_sidebar') || !dynamic_sidebar('sidebar-bottom') ) :
      endif; ?>
   
</div><div class="clear"></div>

<?php get_footer(); ?>
 