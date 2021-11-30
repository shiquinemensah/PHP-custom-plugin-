
<?php
/** 
*PLugin Name: SXOD Plugin
* Description: PLugin test sxod
* Author: Mr sxod plugin 
* Author URI: https://test1.snobmonkey.co.uk/
* Version: 1.0.0
* Text Domain:sxod-plugin-test
*
*/



// // add bar after opening the body
// add_action('wp_body_open', 'tb_head');

// function get_user()
// {
//     if(!is_user_logged_in())
//     {
//         return 'to' get_bloginfo('name');
//     }
// }

// function tb_head()
// {
//     echo '<h3 class = "tb"> Welcome to ' . get_bloginfo('name') . '</h3>';

// }




// // add CSS to the top bar
// add_action('wp_print_styles', 'tb_css');

// function tb_css()
// {
//     echo '
//         <style>
//             h3.tb {color:#fff; margin: 0; padding: 30px; text-align:center; background: orange;}
//         </styles>  
//     ';
// }




// function twentyfourteen_child_scripts()  {
//     wp_enqueue_script()
// }



defined ('ABSPATH') or die(' what are you doing?');

class sxodPlugin
{
    function __construct() {
        add_action('init', array($this, 'custom_post_type'));
    }

    function activate(){
        // generate a CPT
        // flush rewrite rules

    }
    
    function deactivate(){
        // flush rewrite rules
    }

    function uninstall(){
        // delete CPT 
        // delete all the plugins data from the DB

    }
    
    function custom_post_type(){
        register_post_type('book', ['public' => true, 'lable' => 'Books']);

        
    }

    
}

if (class_exists('sxodPlugin')) {
    $sxodPlugin = new sxodPlugin();
}

//activation
register_activation_hook( __FILE__, array($sxodPlugin, 'activate') );
















?>