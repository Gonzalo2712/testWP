<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Oficina de Evaluación y Calidad
 * @since OEC - Twenty Ten 1.0
 */

get_header(); ?>

	<div id="contents">
		<div id="content2" role="main">

			<div id="post-0" class="post error404 not-found">
				<h1 class="entry-title"><?php _e( 'Not Found', 'twentyten' ); ?></h1>
				<div class="entry-content">
					<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'twentyten' ); ?></p>
					<p><?php echo get_post_status(69); ?></p>	
					<p><?php
						echo "ulr anterior: ".$_SERVER["REQUEST_URI"]."<br />";
						echo "ulr: ".get_page_uri(69);
						?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</div><!-- #post-0 -->

		</div><!-- #content2 -->
	</div><!-- #contents -->
	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>