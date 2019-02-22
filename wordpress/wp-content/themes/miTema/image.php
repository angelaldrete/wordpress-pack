<?php
/**
 * The template for displaying image attachments
 *
 * @package WordPress
 * @subpackage Mi_Tema
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
			<?php
			while ( have_posts() ) :
				the_post();
				endwhile;
			?>

<?php get_footer(); ?>
