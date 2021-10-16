<?php
use Plugin_Name_Dir\Includes\Functions\Utility;
$cu_id=get_current_user_id();
if (is_user_logged_in())
{

	if (Utility::is_user_exp($cu_id) and !current_user_can('administrator'))
	{
		Utility::load_template( 'aral-exp-files.head',  compact( 'dash_assets_url' ), 'front' );
//            Utility::load_template( 'dashboard.users.general.preloader',  compact( 'dash_assets_url' ), 'front' );
		Utility::load_template( 'aral-exp-files.header',  compact( 'dash_assets_url' ), 'front' );
		Utility::load_template( 'aral-exp-files.content', array(), 'front' );
		Utility::load_template( 'aral-exp-files.footer', compact( 'dash_assets_url' ), 'front' );
	}
	else
	{
		wp_redirect(home_url('aral-dashboard'),'303');
		exit();
	}


}
else
{
	wp_redirect(home_url('auth?ref=aral-exp-files'));
	exit;
}
?>