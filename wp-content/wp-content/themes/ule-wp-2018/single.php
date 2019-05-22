<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
                                <?php
                                if ( have_posts() ) :

                                    the_post();

                                    get_template_part( 'template-parts/content', get_post_type() );

                                    the_post_navigation();

                                    // If comments are open or we have at least one comment, load up the comment template.
                                    if ( comments_open() || get_comments_number() ) :
                                        comments_template();
                                    endif;
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
