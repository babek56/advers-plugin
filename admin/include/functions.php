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
            6        
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

    

