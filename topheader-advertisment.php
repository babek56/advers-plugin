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

    add_action( 'admin_menu','wpbs_add_menu_page');
     function wpbs_add_menu_page(){
      add_menu_page(
           'تنظیمات نوار اعلانات',
           ' نوار اعلانات',
           'administrator',
           'wpbs_add_menu',
           'wpbs_echo_option',
            plugins_url('images/FAVICON.png', __FILE__ ),
            10          
      );

     
      function wpbs_echo_option(){
      include plugin_dir_path(__FILE__) . 'admin/view/adminLayout.php';
    };
  };



add_action('wp_footer','bs_showMessage');
  function bs_showMessage(){
    $messages = array(
      'Don’t wait for extraordinary opportunities. Seize common occasions and make them great.
      Orison Swett Marden',
      'Look at people for an example, but then make sure to do things your way. Surround yourself with positive people',
      'If you don’t design your own life plan, chances are you’ll fall into someone else’s plan. And guess what they have planned for you? Not much. ~ Jim Rohn',
      'Work hard, stay positive, and get up early. It’s the best part of the day.
      George Allen, Sr',
      'The fact of a person isn’t the same that the person shows, haply the fact is same that the person can’t show it, if you want to identify a person listen to his unsaid not said',
      'Always turn a negative situation into a positive situation.
      Michael Jordan',
      'We will feel influence of good person when we lose them',
      'If you smile when no one else is around, you really mean it.
      Andy Rooney'
    );
    

    $messageIndex = rand (0 , 7);
    $message = $messages[$messageIndex];
    
    ?>

    <p class="bs-rand" style ="position:fixed; top:30px; width:100%; height:50px; padding:10px 5px; background-color:red; color:#FFF; font-size:16px;     text-align: center;
 z-index:999;">
    <?php echo $message; ?>
    </p>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    jQuery(document).ready(function($){
      $(window).scroll(function(){
        if ($(this).scrollTop() > 50){
          $('.bs-rand').fadeOut(2000);
        }
      });
    });

    </script>


    <?php 
};
    



  
 
  
  



