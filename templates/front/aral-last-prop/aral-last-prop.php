<?php
use Plugin_Name_Dir\Includes\Functions\Utility;
$cu_id=get_current_user_id();
$request=$_REQUEST;
$dash_assets_url=trailingslashit( PLUGIN_NAME_URL ) . 'assets/dashboard/';
Utility::load_template( 'aral-last-prop.head', compact( array('dash_assets_url','current_prop') ), 'front' );
Utility::load_template( 'aral-last-prop.header', compact( array('dash_assets_url','current_prop')), 'front' );
       Utility::load_template( 'aral-last-prop.preloader', compact( array('dash_assets_url','current_prop') ), 'front' );
Utility::load_template( 'aral-last-prop.content', compact( array('dash_assets_url','current_prop') ), 'front' );
Utility::load_template( 'aral-last-prop.footer', compact( array('dash_assets_url','current_prop') ), 'front' );
?>
