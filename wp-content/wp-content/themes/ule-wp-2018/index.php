<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ule_wp_2018
 */

get_header();

?>

    <!--
    ====================================================================================================================
                        INDEX.PHP INICIO
    ====================================================================================================================
    -->

    <div class="page-content page-principal-noticia" style="background-color: #dfdfdf !important;">
        <div class="container page-principal-estudiantes">
            <div class="row"> <!-- Destacados Estudiantes -->

                <?php get_sidebar(); ?>

                <!-- COLUMNA: CONTENIDO -->
                <div class="col-sm-9 bordespagina">
                    <div class="portlet ptcentral">

                        <?php
                        if ( have_posts() ) :

                            if ( is_home() && ! is_front_page() ) :
                                ?>
                                <div class="portlet-title">
                                    <div class="caption font-verde-titulo"><i class="mn-actualidadv"></i><span> <?php single_post_title(); ?> </span></div>
                                </div>
                            <?php
                            endif;
                        ?>


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
                                <ul>

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
                                    ?>

                                    <!--
                                    <li class="mt-list-item">
                                        <div class="list-icon-container">
                                            <a href="http://www.unileon.es/noticias/la-compania-emesis-colectiva-presentara-manana-la-obra-alteridad-en-el-albeitar">
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                        <div class="list-thumb">
                                            <a href="http://www.unileon.es/noticias/la-compania-emesis-colectiva-presentara-manana-la-obra-alteridad-en-el-albeitar" style="font-size: 40px;">
                                                <i class="fa fa-newspaper-o"></i>
                                            </a>
                                        </div>
                                        <div class="list-datetime bold uppercase font-green-jungle"> Viernes, 16 de Junio de 2017 </div>
                                        <div class="list-item-content">
                                            <h3 class="uppercase">
                                                <a href="http://www.unileon.es/noticias/la-compania-emesis-colectiva-presentara-manana-la-obra-alteridad-en-el-albeitar"> La compañía 'Emesis Colectiva' presentará mañana la obra 'Alteridad' en El Albéitar </a>
                                            </h3>
                                        </div>
                                    </li>
                                    -->

                                </ul>
                            </div>


                            <!--
                            ====================================================================================================================
                                                INICIO ZONA PAGINACIÓN
                            ====================================================================================================================
                            -->


                                <?php
                                    // Previous/next page navigation.
                                    the_posts_pagination( array(
                                        'type'      => 'list',
                                        'prev_text' => '<i class="fa fa-angle-left"></i>',
                                        'next_text' => '<i class="fa fa-angle-right"></i>',
                                    ));
                                ?>


                            <!--
                            ====================================================================================================================
                                                FIN ZONA PAGINACIÓN
                            ====================================================================================================================
                            -->

                        </div>

                        <?php
                        else :

                            get_template_part( 'template-parts/content', 'none' );

                        endif;
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--
    ====================================================================================================================
                        INDEX.PHP FIN
    ====================================================================================================================
    -->

<?php

get_footer();





