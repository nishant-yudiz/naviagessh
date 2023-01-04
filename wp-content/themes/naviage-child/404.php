<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

	<div class="error-page text-center">
		<div class="error-page-content">
			<h1>404 </h1>
			<h2>Page Not Found</h2>
			<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'naviage' ); ?></p>
				<div class="submit-btn">
					<a href="<?php echo home_url(); ?>">Back to Home</a>
				</div>
		</div>
	</div>

<?php
get_footer();
