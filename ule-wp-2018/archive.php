<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ule_wp_2018
 */

get_header();
?>

    <div class="page-content page-principal-noticia" style="background-color: #dfdfdf !important;">
        <div class="container page-principal-estudiantes">
            <div class="row"> <!-- Destacados Estudiantes -->

                <?php get_sidebar(); ?>

                <!-- COLUMNA: CONTENIDO -->
                <div class="col-sm-9 bordespagina">
                    <div class="portlet ptcentral">
                        <div class="portlet-body mt-element-list">

                            <!-- breadcrumbs -->
                            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                                <?php
                                if(function_exists('bcn_display')) {
                                    bcn_display();
                                }
                                ?>
                            </div>
                            <!-- breadcrumbs -->

                            <div class="mt-list-container list-news ext-1">

                                <?php if ( have_posts() ) : ?>

                                    <header class="page-header">
                                        <?php
                                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                                        the_archive_description( '<div class="archive-description">', '</div>' );
                                        ?>
                                    </header><!-- .page-header -->

                                    <?php
                                    /* Start the Loop */
                                    while ( have_posts() ) :
                                        the_post();

                                        /*
                                         * Include the Post-Type-specific template for the content.
                                         * If you want to override this in a child theme, then include a file
                                         * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                         */
                                        get_template_part( 'template-parts/content', get_post_type() );

                                    endwhile;

                                    the_posts_navigation();

                                else :

                                    get_template_part( 'template-parts/content', 'none' );

                                endif;
                                ?>




                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?php
get_footer();
