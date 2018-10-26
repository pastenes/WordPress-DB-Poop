<?php // DB Poop admin menu

// Exit if file is called directly
if (!defined('ABSPATH')) {
	exit;
}

// Add admin bar button
function add_item( $admin_bar ){
    global $pagenow;
    $admin_bar->add_menu( array( 'id'=>'db-dump','title'=>'DB Poop','href'=>'#' ) );
}
add_action('admin_bar_menu', 'add_item', 100);