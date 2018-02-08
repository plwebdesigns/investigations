<?php
/**
 * The homepage template file
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

//Get Custom Fields
$header = get_field('header');
$content = get_field('content');
?>

    <div class="main-header">
        <div class="main-header-text" role="main">
            <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <? endwhile; ?>
        </div>
    </div>
	<div class="container-fluid">
        <div class="home-content">
            <h2><? echo $header; ?></h2>
            <p><? echo $content; ?></p>
        </div>
    </div>

<?php get_footer(); ?>