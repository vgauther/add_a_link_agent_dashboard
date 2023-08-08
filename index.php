<?php
/*
Plugin Name: Add link to Dashboard
Plugin URI: https://nivo-web.com/
Description: Plugin to do reservation
Version: 1.0
Author: Nivo-Web
Author URI: https://nivo-web.fr/
Text Domain: add_link_to_dash
Domain Path: /languages
*/

add_action('admin_menu', 'rs_Add_Link_Menu');
function rs_Add_Link_Menu()
{

    // add_menu_page(
    //     'Overview', // Title of the page
    //     'Overview',
    //     'manage_options',
    //     'https://labobasque.com/agent-dashboard/',
    //     'nr_menu_overview'
    // );
    // add_menu_page( 'redirecting', 'View Site', 'manage_options', null, 'redirect_home_987', 'dashicons-admin-links');
    global $menu;
    
    // Position après la "Tableau de bord" (position 4 dans le tableau)
    $position = 4;
    
    // Ajout d'un nouvel élément de menu avec une icône
    $menu[] = array(
        'Menu Agent',       // Classe CSS pour l'icône du menu
        'read',                        // Capacité requise pour accéder au lien (peut être personnalisée)
        'https://labobasque.com/agent-dashboard/',  // L'URL du lien externe
        '',                            // L'ID unique pour le lien (laissez vide)
        '',               // Le texte du lien affiché dans le menu
        '',                        // Type d'élément de menu
        'dashicons-admin-links',
        4                      // Position dans le menu
    );
}

// add_menu_page( string $page_title, string $menu_title, string $capability, string $menu_slug, callable $callback = '', string $icon_url = '', int|float $position = null )

// add_menu_page( 'redirecting', 'View Site', 'read', 'my-top-level-handle', 'redirect_home_987');


function redirect_home_987(){
    wp_redirect( 'https://labobasque.com/agent-dashboard/'); 
    exit;
  }