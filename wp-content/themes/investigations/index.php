<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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

	<div class="main-content">
		<?php if (have_posts()) :
			while (have_posts()) : the_post(); ?>
				<?php the_title(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>