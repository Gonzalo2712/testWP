<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Oficina de Evaluación y Calidad
 * @since OEC - Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link type="text/css" rel="stylesheet" media="screen" href="/wp-content/themes/ule_ocw/style/ule.css" />
<link type="text/css" rel="stylesheet" media="screen" href="/wp-content/themes/ule_ocw/style/content.css" />
<link type="text/css" rel="stylesheet" media="screen" href="/wp-content/themes/ule_ocw/style/ule-admin.css" />
<link type="text/css" rel="stylesheet" media="print" href="/wp-content/themes/ule_ocw/style/print.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<script type="text/javascript" src="/wp-content/themes/ule_ocw/scripts/jquery.qtip.js"></script>
<script type="text/javascript" src="/wp-content/themes/ule_ocw/scripts/ule.js"></script>
<script type="text/VBScript" src="/wp-content/themes/ule_ocw/scripts/ule.vbs"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39187146-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body class="ule not-front not-logged-in page-node node-type-page no-sidebars i18n-es">

<div id="page">
	<div id="header">
		<div id="main-menu">
			<div id="block-menu-primary-links" class="block block-menu">
				<div class="content2">
					<ul class="menu">
						<li class="leaf first"><a href="http://www.unileon.es/actualidad" title="">Actualidad</a></li>
						<li class="leaf"><a href="http://www.unileon.es/estudiantes" title="">Estudiantes</a></li>
						<li class="leaf"><a href="http://www.unileon.es/investigadores" title="">Investigadores</a></li>
						<li class="leaf"><a href="http://www.unileon.es/personal" title="">Personal</a></li>
						<li class="leaf"><a href="http://www.unileon.es/universidad" title="">Universidad</a></li>
						<li class="leaf last"><a href="http://www.unileon.es/sede-electronica" title="">Sede electrónica</a></li>
					</ul>
				</div>
			</div>
		</div><!-- /main-menu -->
	<!-- /main-menu -->
		<h1 style="float: left;"><a href="http://ocw.unileon.es" title="Inicio" rel="home">
			<img id="shield" src="/wp-content/themes/ule_ocw/art/escudo-cabecera.png" alt="Inicio" />
			<span id="universidad">Universidad</span>
			<span id="de">de</span>
			<span id="leon">León</span>
		</a></h1>
		<div class="titulo-dpto">
			<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		</div>
	</div> <!-- /header -->

	<div id="content-wrapper">
