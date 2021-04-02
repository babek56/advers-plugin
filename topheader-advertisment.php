<?php
/**
 * Plugin Name:       اعلامیه بالای فروشگاه
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       افزونه ای برای قرار دادن اعلام و اخبار فروشگاه و سایت های ورد پرس.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            babak safayi
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */

defined('ABSPATH') || exit;

    define('wpbs_advs_plugin_dir', plugin_dir_path(__FILE__));
    define('wpbs_image_url',plugins_url('images',__FILE__));
    if (is_admin()){
      include wpbs_advs_plugin_dir.'admin/include/functions.php';
    }
    

     
    



  
 
  
  



