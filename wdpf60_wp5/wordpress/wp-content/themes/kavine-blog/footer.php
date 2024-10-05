<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shadow Themes
 */

$default = kavine_blog_get_default_mods();
$footer_bg_image = get_theme_mod( 'kavine_blog_footer_bg_image');
?> 
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo" <?php if (!empty($footer_bg_image)){ ?> style="background-image: url('<?php echo esc_url($footer_bg_image); ?>');" <?php } ?>>
		<div class="footer-overlay"></div>
		<div class="footer-overlay-two"></div>
		<!-- supports column-1, column-2, column-3 and column-4 -->
		<!-- supports unequal-width and equal-width -->
		<?php  
		$count = 0;
		for ( $i=1; $i <=4 ; $i++ ) { 
			if ( is_active_sidebar( 'footer-' . $i ) ) {
				$count++;
			}
		}
		
		if ( 0 !== $count ) : ?>
			<div class="footer-widgets-area page-section column-<?php echo esc_attr( $count );?>">
			    <div class="wrapper">
					<?php 
					for ( $j=1; $j <=4; $j++ ) { 
						if ( is_active_sidebar( 'footer-' . $j ) ) {
			    			echo '<div class="column-wrapper">';
							dynamic_sidebar( 'footer-' . $j ); 
			    			echo '</div>';
						}
					}
					?>
				</div><!-- .wrapper -->
			</div><!-- .footer-widget-area -->

		<?php endif;
		 
		$footer_menu = get_theme_mod( 'kavine_blog_enable_footer_social_menu', true );
		$footer_text_enable = get_theme_mod( 'kavine_blog_enable_footer_text', true );
		$footer_text = get_theme_mod( 'kavine_blog_copyright_txt', $default['kavine_blog_copyright_txt'] );
		$powered_by_text = get_theme_mod( 'kavine_blog_powered_by_txt', $default['kavine_blog_powered_by_txt'] );

		if ( $footer_menu || $footer_text_enable ) :
			$class = ( $footer_menu && $footer_text_enable ) ? 'column-2' : 'column-1' ;
			?>
			<div class="site-info column-1">
				<!-- supports column-1 and column-2 -->
				<?php 

				?>
				<div class="wrapper">
					<?php if ( $footer_text_enable==true && (!empty($footer_text) || !empty($powered_by_text)) ) { ?>
					    <span class="footer-copyright">
					      	<?php 
						      	if (!empty($footer_text)) {
						      		echo wp_kses_post($footer_text );
						      	}  
					      	?>
					      	<?php 
						      	if (!empty($powered_by_text)) {
						      		echo wp_kses_post($powered_by_text );
						      	}  
					      	?>
					    </span><!-- .footer-copyright -->
					<?php } ?>
				    
				    
				</div><!-- .wrapper -->    
				
			</div><!-- .site-info -->
		<?php endif; ?>
	</footer><!-- #colophon -->
	<div class="popup-overlay"></div>
	<?php  
	$backtop = get_theme_mod( 'kavine_blog_back_to_top_enable', true );
	if ( $backtop ) { ?>
		<div class="totop"><?php echo kavine_blog_get_icon_svg( 'keyboard_arrow_down' ); ?></div>
	<?php }	?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
