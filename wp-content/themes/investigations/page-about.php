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
	</div>
    <div class="container">
        <div class="row justify-content-center about-footer">
            <div class="col-4">
                <h4>Interested in working with us? </h4>
            </div>
            <div class="col-4">
                <a href="<?php echo site_url('/contact-us/') ?>" role="button" class="btn btn-lg btn-outline-info">
                    Contact Us
                </a>
            </div>
        </div>
    </div>

<?php get_footer(); ?>