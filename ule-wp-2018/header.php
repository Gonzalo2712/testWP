<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ule_wp_2018
 */

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="es" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="es" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<!-- BEGIN HEAD -->
<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>

    <!--
    <meta charset="utf-8" />
    <title>Universidad de León</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Preview page of Metronic Admin Theme #3 for dashboard & statistics" name="description" />
    -->

    <!--
    ============================================
    = INICIO DE ESTILOS BÁSICOS Y OBLIGATORIOS =
    ============================================
    ESTO ES NECESARIO POR BÁSICA QUE SEA LA PÁGINA
    -->

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="//cdn.unileon.es/master/metronic/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="//cdn.unileon.es/master/metronic/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="//cdn.unileon.es/master/metronic/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="//cdn.unileon.es/master/metronic/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="//cdn.unileon.es/master/metronic/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="//cdn.unileon.es/master/metronic/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->

    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="//cdn.unileon.es/master/metronic/assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="//cdn.unileon.es/master/metronic/assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <!-- END THEME LAYOUT STYLES -->


    <!--
    =========================================
    = FIN DE ESTILOS BÁSICOS Y OBLIGATORIOS =
    =========================================
    -->

    <!--
    ===============================================================
    = INICIO DE ESTILOS PARA EL PLUGIN DE TOASTR (NOTIFICACIONES) =
    ===============================================================
    -->
    <link href="//cdn.unileon.es/master/metronic/assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />
    <!--
    ===============================================================
    = FIN DE ESTILOS PARA EL PLUGIN DE TOASTR (NOTIFICACIONES) =
    ===============================================================
    -->

    <!--
    ===============================================================
    = INICIO DE ESTILOS PARA EL PLUGIN DE SWEET ALERTS (NOTIFICACIONES) =
    ===============================================================
    -->
    <link href="//cdn.unileon.es/master/metronic/assets/global/plugins/bootstrap-sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
    <!--
    ===============================================================
    = FIN DE ESTILOS PARA EL PLUGIN DE SWEET ALERTS (NOTIFICACIONES) =
    ===============================================================
    -->

    <!--
    ===================================================
    = INICIO DE ESTILOS PARA EL PLUGIN DE DATE PICKER =
    ===================================================
    -->
    <link href="//cdn.unileon.es/master/metronic/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
    <!--
    ================================================
    = FIN DE ESTILOS PARA EL PLUGIN DE DATE PICKER =
    ================================================
    -->

    <!--
    ===================================================
    = INICIO DE ESTILOS PARA EL PLUGIN DE DATE PICKER =
    ===================================================
    -->
    <link href="//cdn.unileon.es/master/metronic/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
    <!--
    ================================================
    = FIN DE ESTILOS PARA EL PLUGIN DE DATE PICKER =
    ================================================
    -->

    <!--
    ==========================================================
    = INICIO DE ESTILOS PARA EL PLUGIN DEL EDITOR SUMMERNOTE =
    ==========================================================
    -->
    <link href="//cdn.unileon.es/master/metronic/assets/global/plugins/bootstrap-summernote/summernote.css" rel="stylesheet" type="text/css" />
    <!--
    =======================================================
    = FIN DE ESTILOS PARA EL PLUGIN DEL EDITOR SUMMERNOTE =
    =======================================================
    -->


    <!--
    ============================================
    = INICIO DE ESTILOS PARA EL PLUGIN SELECT2 =
    ============================================
    -->
    <link href="//cdn.unileon.es/master/metronic/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="//cdn.unileon.es/master/metronic/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!--
    =========================================
    = FIN DE ESTILOS PARA EL PLUGIN SELECT2 =
    =========================================
    -->


    <!--
    ==============================================
    = INICIO DE ESTILOS PARA EL PLUGIN FILEINPUT =
    ==============================================
    -->
    <link href="//cdn.unileon.es/master/metronic/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
    <!--
    ===========================================
    = FIN DE ESTILOS PARA EL PLUGIN FILEINPUT =
    ===========================================
    -->

    <!--
    ==================================================
    = INICIO DE ESTILOS PARA EL PLUGIN SOCIAL ICONOS =
    ==================================================
    -->
    <link href="//cdn.unileon.es/master/metronic/assets/global/plugins/socicon/socicon.css" rel="stylesheet" type="text/css">
    <!--
    ===============================================
    = FIN DE ESTILOS PARA EL PLUGIN SOCIAL ICONOS =
    ===============================================
    -->

    <!--
    ===============================================
    = INICIO DE ESTILOS PARA EL PLUGIN DATATABLES =
    ===============================================
    -->
    <link href="//cdn.unileon.es/master/metronic/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="//cdn.unileon.es/master/metronic/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!--
    ============================================
    = FIN DE ESTILOS PARA EL PLUGIN DATATABLES =
    ============================================
    -->

    <!-- BEGIN ULE STYLES -->
    <link href="/wp-content/themes/<?php echo get_template(); ?>/css/ule_template.css" rel="stylesheet" type="text/css" />
    <!-- END ULE STYLES -->

</head>
<!-- END HEAD -->

<body class="page-container-bg-solid">

<!-- ESTRUCTURA PRINCIPAL DEL LA PAGINA -->
<!-- ESTRUCTURA PRINCIPAL DEL LA PAGINA -->
<!-- ESTRUCTURA PRINCIPAL DEL LA PAGINA -->

<div class="page-wrapper">

    <!--
    ====================================================================================================================
                        INICIO CABECERA
    ====================================================================================================================
    -->
    <!-- FILA PARA LA CABECERA -->
    <div class="page-wrapper-row">
        <div class="page-wrapper-top">

            <!-- BEGIN HEADER -->
            <div class="page-header">

                <!--
                ====================================================================================================================
                                    INICIO ZONA LOGO, MENÚ PRINCIPAL Y USUARIO
                ====================================================================================================================
                -->

                <div class="page-header-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2" style="padding-left: 5px;">

                                <!-- BEGIN LOGO -->
                                <div class="page-logo">
                                    <a href="index.htm">
                                        <img src="/wp-content/themes/<?php echo get_template(); ?>/img/escudo-ule2.svg" class="img-responsive hidden-xs hidden-sm" alt="Logo de la Universidad" />
                                        <img src="/wp-content/themes/<?php echo get_template(); ?>/img/escudo.svg" class="img-responsive hidden-ld hidden-md visible-xs visible-sm" style="height: 3.7em; max-height: 90px;" alt="Logo de la Universidad" />
                                    </a>
                                </div>
                                <!-- END LOGO -->

                            </div>

                            <!--
                            ====================================================================================================================
                                                INICIO MENÚ PRINCIPAL
                            ====================================================================================================================
                            -->

                            <div class="col-md-8">

                                <div class="menu-superior">

                                    <!-- BEGIN HEADER TOP -->

                                    <div class="page-header-menu">

                                        <div class="hor-menu coniconos">
                                            <ul class="nav navbar-nav">
                                                <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown">
                                                    <a href="#">
                                                        <i class="mn-universidad"></i>
                                                        <span> Universidad </span>
                                                    </a>
                                                </li>
                                                <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown">
                                                    <a href="#">
                                                        <i class="mn-estudiantes"></i>
                                                        <span> Estudiantes </span>
                                                    </a>
                                                </li>
                                                <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown">
                                                    <a href="#">
                                                        <i class="mn-investigadores"></i>
                                                        <span> Investigadores </span>
                                                    </a>
                                                </li>
                                                <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown">
                                                    <a href="#">
                                                        <i class="mn-personal"></i>
                                                        <span> Personal </span>
                                                    </a>
                                                </li>
                                                <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown">
                                                    <a href="#">
                                                        <i class="mn-actualidad"></i>
                                                        <span> Actualidad </span>
                                                    </a>
                                                </li>
                                                <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown">
                                                    <a href="http://sede.unileon.es/">
                                                        <i class="mn-sede"></i>
                                                        <span> Sede electrónica </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <!-- BEGIN HEADER TOP -->

                                    <h1 class="blog-title"><?php bloginfo( 'name' ); ?></h1>

                                </div>

                            </div>

                            <!--
                            ====================================================================================================================
                                                FIN MENÚ PRINCIPAL
                            ====================================================================================================================
                            -->

                            <div class="col-md-2 iniciobuscador" style="padding-right: 5px;">
                                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                                <a href="javascript:;" class="menu-toggler"></a>
                                <!-- END RESPONSIVE MENU TOGGLER -->

                                <!-- END TOP NAVIGATION MENU -->

                            </div>

                        </div>
                    </div>
                </div>
                <!-- END HEADER TOP -->

                <!--
                ====================================================================================================================
                                    FIN ZONA LOGO, MENÚ PRINCIPAL Y USUARIO
                ====================================================================================================================
                -->



            </div>
            <!-- END HEADER -->
        </div>
    </div> <!-- FIN DE FILA PARA LA CABECERA -->

    <!--
    ====================================================================================================================
                        FIN CABECERA
    ====================================================================================================================
    -->

    <!--
    ====================================================================================================================
                        INICIO CONTENIDO PRINCIPAL
    ====================================================================================================================
    -->

    <!-- FILA PARA EL CONTENIDO PRINCIPAL -->
    <div class="page-wrapper-row full-height">
        <div class="page-wrapper-middle">
            <div class="page-container">
                <div class="page-content-wrapper">

                    <!--
                    ====================================================================================================================
                                        INICIO CONTENIDO
                    ====================================================================================================================
                    -->

