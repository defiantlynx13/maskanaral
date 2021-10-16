<?php
use Plugin_Name_Dir\Includes\Functions\Utility;
$cu_id=get_current_user_id();
$request=$_REQUEST;
$dash_assets_url=trailingslashit( PLUGIN_NAME_URL ) . 'assets/dashboard/';
    if (isset($request['id']) and $request['id']!='' and intval($request['id']) > 0 and get_post(intval($request['id'])))
    {
        $current_prop=get_post(intval($request['id']));
        Utility::load_template( 'aral-prop.head', compact( array('dash_assets_url','current_prop') ), 'front' );
        Utility::load_template( 'aral-prop.header', compact( array('dash_assets_url','current_prop')), 'front' );
//        Utility::load_template( 'aral-prop.preloader', compact( array('dash_assets_url','current_prop') ), 'front' );
        Utility::load_template( 'aral-prop.content', compact( array('dash_assets_url','current_prop') ), 'front' );
        Utility::load_template( 'aral-prop.footer', compact( array('dash_assets_url','current_prop') ), 'front' );
    }
    else
    {
        Utility::load_template( 'aral-prop.prop-not-found', compact( 'dash_assets_url' ), 'front' );
    }


?>


