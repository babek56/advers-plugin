<?php

add_action( 'admin_menu','wpbs_add_menu_page');
     function wpbs_add_menu_page(){
      add_menu_page(
           'تنظیمات نوار اعلانات',
           ' نوار اعلانات',
           'administrator',
           'bs_add_menu',
           'bs_echo_option',
            wpbs_image_url.'/FAVICON.png',
            5          
      );

     
      function bs_echo_option(){
         include wpbs_advs_plugin_dir . 'admin/view/adminLayout.php';
    }

    add_submenu_page(
      'bs_add_menu',
      'تنظیمات افزونه',
      'تنظیمات',
      'administrator',
      'wpbs_adv_option',
      'wpbs_advertisment_option',
      '1'
    );

    function wpbs_advertisment_option(){
      include wpbs_advs_plugin_dir . 'admin/view/adminLayoutOption.php';
    };

    add_submenu_page(
      'bs_add_menu',
      'افزودن اعلام',
      'افزودن اعلام',
      'administrator',
      'wpbs_adv_option2',
      'wpbs_advertisment_option2',
      '1'
    );

    function wpbs_advertisment_option2(){
      include wpbs_advs_plugin_dir . 'admin/view/adminLayoutOption2.php';
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