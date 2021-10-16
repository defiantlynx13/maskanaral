<?php
use Plugin_Name_Dir\Includes\Functions\Utility;
$cu_id=get_current_user_id();
if (is_user_logged_in())
{
    if (current_user_can('administrator'))
    {
        Utility::load_template( 'dashboard.admins.general.head',  compact( 'dash_assets_url' ), 'front' );
//            Utility::load_template( 'dashboard.users.general.preloader',  compact( 'dash_assets_url' ), 'front' );
        Utility::load_template( 'dashboard.admins.general.header',  compact( 'dash_assets_url' ), 'front' );
        Utility::load_template( 'dashboard.admins.dashboard-content', array(), 'front' );
        Utility::load_template( 'dashboard.admins.general.footer', compact( 'dash_assets_url' ), 'front' );
    }
    else
    {
        if (Utility::is_user_exp($cu_id))
        {
            Utility::load_template( 'dashboard.experts.general.head',  compact( 'dash_assets_url' ), 'front' );
//            Utility::load_template( 'dashboard.users.general.preloader',  compact( 'dash_assets_url' ), 'front' );
            Utility::load_template( 'dashboard.experts.general.header',  compact( 'dash_assets_url' ), 'front' );
            Utility::load_template( 'dashboard.experts.dashboard-content', array(), 'front' );
            Utility::load_template( 'dashboard.experts.general.footer', compact( 'dash_assets_url' ), 'front' );
        }
        else
        {
            Utility::load_template( 'dashboard.users.general.head',  compact( 'dash_assets_url' ), 'front' );
//            Utility::load_template( 'dashboard.users.general.preloader',  compact( 'dash_assets_url' ), 'front' );
            Utility::load_template( 'dashboard.users.general.header',  compact( 'dash_assets_url' ), 'front' );
            Utility::load_template( 'dashboard.users.dashboard-content', array(), 'front' );
            Utility::load_template( 'dashboard.users.general.footer', compact( 'dash_assets_url' ), 'front' );
        }
    }

}
else
{
    wp_redirect(home_url('auth?ref=aral-dashboard'));
    exit;
}
?>


