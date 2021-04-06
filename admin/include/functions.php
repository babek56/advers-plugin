<?php


//add menu for option 
add_action('admin_menu', 'wpbs_add_menu_page');
function wpbs_add_menu_page()
{
  add_menu_page(
    'تنظیمات نوار اعلانات',
    ' نوار اعلانات',
    'administrator',
    'wpbs_add_menu',
    'wpbs_echo_option',
    wpbs_image_url . '/FAVICON.png',
    6
  );

  //add submenu for option 
  function wpbs_echo_option()
  {
    include wpbs_advs_plugin_dir . 'admin/view/adminLayout.php';
  }

  add_submenu_page(
    'wpbs_add_menu',
    'تنظیمات افزونه',
    'تنظیمات',
    'administrator',
    'wpbs_adv_option',
    'wpbs_advertisment_option',
    '1'
  );

  //add view page for adding option page
  function wpbs_advertisment_option()
  {
    include wpbs_advs_plugin_dir . 'admin/view/adminLayoutOption.php';
  };

  add_submenu_page(
    'wpbs_add_menu',
    'افزودن اعلام',
    'افزودن اعلام',
    'administrator',
    'wpbs_adv_option2',
    'wpbs_advertisment_option2',
    '1'
  );


  //add view page for adding advertisment
  function wpbs_advertisment_option2()
  {
    include wpbs_advs_plugin_dir . 'admin/view/adminLayoutOption2.php';
  };
};

//add links in plugins page
add_filter("plugin_action_links_" . wpbs_baseName, "wpbs_add_link_to_pluginPage");
function wpbs_add_link_to_pluginPage($links)
{
  $links[] = '<a target="_blank" href="' . admin_url('admin.php?page=wpbs_adv_option') . '">تنظیمات</a>';
  return $links;
};

//add admin bar menu
add_action('admin_bar_menu','wpbs_admin_bar_menu',150);
function wpbs_admin_bar_menu(){
  global $wp_admin_bar;
  $menuArg= array(
    //'parent' => 'root-defult',
    'id' => 'wpbs_ads_barmenu',
    'title' => '<img src="'. wpbs_image_url.'/FAVICON.PNG" width= "24" height="24"> نوار اعلانات' ,
    'href' => admin_url('admin.php?page=wpbs_adv_option'),
    'meta' => array(
      'target' => '_blank'
          )
  );
  $wp_admin_bar -> add_menu($menuArg); 

  //add admin bar submenu
  $wp_admin_bar -> add_menu(array(
    'parent' => 'wpbs_ads_barmenu',
    'id' => 'wpbs_adsBarMenu',
    'title' => 'تنظیمات',
    'href' => admin_url('admin.php?page=wpbs_adv_option'),
  )); 
};