<?php
/**
 * The template for displaying Tag Archive pages.
 *
 * @package WordPress
 * @subpackage Oficina de Evaluaci�n y Calidad
 * @since OEC - Twenty Ten 1.0
 */

get_header(); 
get_sidebar(); ?>

		<div id="contents">
			<div id="content2" role="main">

				<h1 class="page-title"><?php
					printf( __( 'Tag Archives: %s', 'twentyten' ), '<span>' . single_tag_title( '', false ) . '</span>' );
				?></h1>

<?php
/* Run the loop for the tag archive to output the posts
 * If you want to overload this in a child theme then include a file
 * called loop-tag.php and that will be used instead.
 */
 get_template_part( 'loop', 'tag' );
?>
			</div><!-- #content2 -->
		</div><!-- #contents -->

<?php get_footer(); ?>
