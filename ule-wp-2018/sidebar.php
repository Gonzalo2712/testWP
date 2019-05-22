<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ule_wp_2018
 */


if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

    <div class="col-sm-3 sinbordes">
        <div class="portlet menule">

            <?php
            /*
            $menus = get_terms('nav_menu');
            foreach($menus as $menu) {

                echo '<div class="portlet-title">';
                echo '<div class="caption"> '.$menu->name.' <i class="mn-actualidadb"></i></div>';
                echo '</div>';

                wp_nav_menu(array(
                    'menu'           => $menu->slug,
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_id'        => 'newsmenu',
                    'menu_class'     => 'portlet-body',
                    'depth'          => 0,
                    'items_wrap'     => '<ul class="'.$menu->slug.' ver-inline-menu menu nav">%3$s</ul>',
                ));
            }
            */
            ?>

            <?php dynamic_sidebar( 'sidebar-1' ); ?>

	    </div>
    </div>

<?php endif; ?>

<!--
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
return;
}
?>


<div class="col-md-4 sinbordes">
    <div class="portlet menule">

        <?php

        $menus = get_terms('nav_menu');
        foreach($menus as $menu) {

            echo '<div class="portlet-title">';
            echo '<div class="caption"> '.$menu->name.' <i class="mn-actualidadb"></i></div>';
            echo '</div>';

            wp_nav_menu(array(
                'menu'           => $menu->slug,
                'theme_location' => 'primary',
                'container'      => false,
                'menu_id'        => 'newsmenu',
                'menu_class'     => 'portlet-body',
                'depth'          => 0,
                'items_wrap'     => '<ul class="'.$menu->slug.' ver-inline-menu menu nav">%3$s</ul>',
            ));
        }
        ?>

    </div>
</div>
-->
