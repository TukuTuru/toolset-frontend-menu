<?php
/*
Plugin Name:  ToolWine FrontEnd Menu
*/

include( plugin_dir_path( __FILE__ ) . 'frontend-menu.php');
include( plugin_dir_path( __FILE__ ) . 'helper-callbacks.php');


add_filter('toolset_filter_toolset_admin_bar_menu_disable', 'td_layout_menu');
