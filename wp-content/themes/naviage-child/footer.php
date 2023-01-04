<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<?php get_template_part('template-parts/footer/footer-widgets'); ?>

<footer id="colophon" class="site-footer">
	<?php if (has_nav_menu('footer')) : ?>
		<nav aria-label="<?php esc_attr_e('Secondary menu', 'twentytwentyone'); ?>" class="footer-navigation">
			<ul class="footer-navigation-wrapper">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'items_wrap'     => '%3$s',
						'container'      => false,
						'depth'          => 1,
						'link_before'    => '<span>',
						'link_after'     => '</span>',
						'fallback_cb'    => false,
					)
				);
				?>
			</ul><!-- .footer-navigation-wrapper -->
		</nav><!-- .footer-navigation -->
	<?php endif; ?>
	<div class="site-info">
		<div class="copyright">
			<?php dynamic_sidebar('footer-left'); ?>
		</div><!-- copyright -->
		<!--  -->
		<div class="site-name">
			<?php if (has_custom_logo()) : ?>
				<div class="site-logo"><?php the_custom_logo(); ?></div>
			<?php else : ?>
				<?php if (get_bloginfo('name') && get_theme_mod('display_title_and_tagline', true)) : ?>
					<?php if (is_front_page() && !is_paged()) : ?>
						<?php bloginfo('name'); ?>
					<?php else : ?>
						<a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
					<?php endif; ?>
				<?php endif; ?>
			<?php endif; ?>
		</div><!-- .site-name -->

		<?php
		if (function_exists('the_privacy_policy_link')) {
			the_privacy_policy_link('<div class="privacy-policy">', '</div>');
		}
		?>
		<div class="privacy-terms">
			<?php dynamic_sidebar('footer-right'); ?>
		</div>
	</div><!-- .site-info -->
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
<script>
	document.addEventListener('wpcf7submit', function(event) {
		var status = event.detail.status;
		console.log(status);
		if( status === 'validation_failed'){
		jQuery('.swal2-container').hide();
		jQuery('body').removeClass("swal2-shown");
		jQuery('body').removeClass("swal2-iosfix");
		jQuery('body').css("padding-right","0");
		}else{
			jQuery('#swal2-content').text('Your submission has been sent.');
			jQuery('#swal2-title').text('Thank You!');	
		}    
	});	
</script>
</body>

</html>