<?php
/**
 * The template file for about page
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Custom theme
 * @subpackage pro_investigations
 * @since 1.0
 * @version 1.0
 */
get_header();
?>

	<div class="container-fluid">
		<div class="page-content">
			<?php if (have_posts()) :
				while (have_posts()) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div class="about-footer">
			<div class="about-footer-content">
				<h2>Interested in working with us? </h2>
				<a href="<?php site_url('/contact-us/') ?>" role="button" class="btn btn-lg btn-outline-info">
					Contact Us
				</a>
			</div>
		</div>
	</div>

<?php get_footer(); ?>