<?php
use Plugin_Name_Dir\Includes\Functions\Utility;
$cu_id=get_current_user_id();
$request=$_REQUEST;
$dash_assets_url=trailingslashit( PLUGIN_NAME_URL ) . 'assets/dashboard/';
$current_prop=get_post(intval($request['id']));

Utility::load_template( 'aral-all-prop.head', compact( array('dash_assets_url','current_prop') ), 'front' );
Utility::load_template( 'aral-all-prop.header', compact( array('dash_assets_url','current_prop')), 'front' );
    Utility::load_template( 'aral-prop.preloader', compact( array('dash_assets_url','current_prop') ), 'front' );
Utility::load_template( 'aral-all-prop.content', compact( array('dash_assets_url','current_prop') ), 'front' );
Utility::load_template( 'aral-all-prop.footer', compact( array('dash_assets_url','current_prop') ), 'front' );
?>
