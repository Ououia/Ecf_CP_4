<?php

function myThemeSupport()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menu');
    register_nav_menu('header-menu', __('Header Menu'));
    register_nav_menu('footer-menu', __('Footer Menu'));
}



//limite la taille des exceprt afficher dans les articles
function wpdocs_custom_excerpt_length($length)
{
    return 20;
}

// import des script
function wpdocs_theme_name_scripts()
{
    wp_enqueue_style('style-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css'); // Bootstrap
    wp_enqueue_script('script-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js', [], false, true); //bootstrap
    wp_enqueue_script('script-lottie', 'https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js', [], false, true); // lootie files
}


function myTheme_menu_class($classes)
{

    $classes = ["nav-item", "fs-3", "text-light", "custom-border"];
    return $classes;
}


// Rajoute des classes aux menu crée avec wordpress
function myTheme_menu__link_class($attributs)
{
    $attributs["class"] = "fs-2 text-decoration-none text-white test";
    return $attributs;
}



// function myTheme_pagination()
// {
//     $pages =   paginate_links(['type' => 'array']);
//     if ($pages === null) {
//         return;
//     } else {
//         echo "<nav aria-label='Page navigation example'>";
//         echo "<ul class='pagination'>";
//         foreach ($pages as $page) {
//             if (strpos($page, "current")) {
//                 echo '<li class="page-item active">';
//             } else {
//                 echo '<li class="page-item">';
//             }
//             echo str_replace("page-numbers", "page-link", $page);
//             echo '</li>';
//         }
//         echo "</ul>";
//         echo '</nav>';
//     }
// }




add_action('wp_enqueue_scripts', 'wpdocs_theme_name_scripts');
add_action("after_setup_theme", "myThemeSupport");
add_filter("nav_menu_css_class", "myTheme_menu_class");
add_filter("nav_menu_link_attributes", "myTheme_menu__link_class");
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);
