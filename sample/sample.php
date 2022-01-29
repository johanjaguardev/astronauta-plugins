<?php
/*
Plugin Name:Sample Plugin
Description: Sample Plugin
Author: Johan Vargas
*/

add_action("wp_footer", "mfp_Add_Text");
 
// Define 'mfp_Add_Text'
function mfp_Add_Text()
{
  echo "<p style='color: black;'>After the footer is loaded, my text is added!</p>";
}

require_once plugin_dir_path(__FILE__) . 'includes/sample-admin.php';

/*
 * Add my new menu to the Admin Control Panel
 */
// Hook the 'admin_menu' action hook, run the function named 'mfp_Add_My_Admin_Link()'
add_action( 'admin_menu', 'sampleAdminLink' );
// Add a new top level menu link to the ACP
function sampleAdminLink()
{
      add_menu_page(
        'Sample Page', // Title of the page
        'Sample Plugin', // Text to show on the menu link
        'manage_options', // Capability requirement to see the link
        'includes/sample-admin.php' // The 'slug' - file to display when clicking the link
    );
}
?> 