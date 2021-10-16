<?php
/**
 * Utility Class File
 *
 * This class contains functions that help you in general tasks like rendering
 * template, convert to persian numbers and words and so on. These functions
 * have been used in many of my projects and I decide to add it in this boilerplate.
 * If you want to use some written functions which are used many times in your codes,
 * you can put it in this file (or files something like that)
 *
 * @package    Plugin_Name_Dir\Includes\Functions
 * @author     Your_Name <youremail@nomail.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://yoursite.com
 * @since      1.0.0
 */

namespace Plugin_Name_Dir\Includes\Functions;

/**
 * Class Utility.
 * This class contains functions that help you in general tasks like rendering
 * template, convert to numbers and words and so on.
 *
 * @package    Plugin_Name_Dir\Includes\Functions
 * @author     Your_Name <youremail@nomail.com>
 */
class Utility {

	/**
	 * Method load_template in Utility Class
	 *
	 * This method calls to render Admin or Front HTML templates from templates/admin
	 * or templates/front directories. You can use from dot (.) to separate nested
	 * directories and this method will include your desire file for your plugin.
	 *
	 * @access  public
	 * @static
	 *
	 * @param string $template Path of template file which  is separated by dot.
	 * @param array  $params   Related parameters that must be extracted to use inside your template.
	 * @param string $type     To detect admin or front directory to use related constant path.
	 */
	public static function load_template( $template, $params = array(), $type = 'admin' ) {
		$template       = str_replace( '.', '/', $template );
		$base_path      = 'admin' === $type ? PLUGIN_NAME_TPL_ADMIN : PLUGIN_NAME_TPL_FRONT;
		$view_file_path = $base_path . $template . '.php';
		if ( file_exists( $view_file_path ) && is_readable( $view_file_path ) ) {
			! empty( $params ) ? extract( $params ) : null;
			/**
			 * Include template file path which will be rendered by your plugin.
			 */
			include $view_file_path;
		} else {
			echo '<h1>Your file does not exist. </h1>';
			exit;
		}

	}

	/**
	 * Method is_admin in Utility Class
	 *
	 * You can check with this method that user is admin and logged in.
	 *
	 * @access  public
	 * @static
	 */
	public static function is_admin() {
		return is_user_logged_in() && current_user_can( 'manage_options' );
	}

	/**
	 * Method check_menu_link in Utility Class
	 *
	 * This method can help you to generate link for menu (and other parts)
	 * in special dashboard. Also you can skip to generate url for page which
	 * is inside it (at the moment).
	 *
	 * @access  public
	 * @static
	 *
	 * @param string $menu_current_url Current menu URL.
	 * @param string $page            Page URL that client is inside it at the moment.
	 *
	 * @return string
	 */
	public static function check_menu_link( $menu_current_url, $page ) {
		if ( strpos( $menu_current_url, $page ) !== false ) {
			return '#';
		} else {
			return self::create_url( '/your-desire-url-start' . $page );
		}
	}

	/**
	 * Method create_url in Utility Class
	 *
	 * This method generate absolute URL from relative address.
	 *
	 * @access  public
	 * @static
	 *
	 * @param string $url Relative address that is passed to this method.
	 *
	 * @return string It returns absolute path.
	 */
	public static function create_url( $url = '/' ) {
		return get_site_url() . $url;

	}

	/**
	 * Method echo_active_class in Utility Class
	 *
	 * This method can echo active class (string) for item in menu that client
	 * is inside it (at the moment).
	 *
	 * @access  public
	 * @static
	 *
	 * @param string $menu_current_url Current menu URL.
	 * @param string $page            Page URL that client is inside it at the moment.
	 *
	 * @return string
	 */
	public static function echo_active_class( $menu_current_url, $page ) {

		if ( strpos( $menu_current_url, $page ) !== false ) {
			return ' active ';
		} else {
			return '';
		}
	}

	/**
	 * Method detect_page in Utility Class
	 *
	 * This method can detect that url is the same with page (which client is inside it).
	 *
	 * @access  public
	 * @static
	 *
	 * @param string $menu_current_url Current menu URL.
	 * @param string $page            Page URL that client is inside it at the moment.
	 *
	 * @return string
	 */
	public static function detect_page( $menu_current_url, $page ) {
		if ( strpos( $menu_current_url, $page ) !== false ) {
			return true;
		} else {
			return false;
		}
	}

	/**
	 * Method generate_random_code in Utility Class
	 *
	 * This method uses to generate cryptographically secure pseudo-random bytes (to use in e.g. unique token).
	 *
	 * @access  public
	 * @static
	 * @see     http://php.net/manual/en/function.random-bytes.php
	 *
	 * @param int $length The length of the random string that should be returned in bytes.
	 *
	 * @return string Returns a string containing the requested number of cryptographically secure random bytes.
	 */
	public static function generate_random_code( $length = 16 ) {
		return bin2hex( random_bytes( $length ) );
	}

	/**
	 * Method format_amount_by_3_digits in Utility Class
	 *
	 * This method uses to separate numbers, 3 digits of 3 digits in persian numbers format.
	 *
	 * @access  public
	 * @static
	 * @see     http://php.net/manual/en/function.number-format.php
	 *
	 * @param number $amount The number being formatted.
	 *
	 * @return string A formatted version of number.
	 */
	public static function format_amount_by_3_digits( $amount ) {
		$amount = number_format( $amount );

		return self::convert_to_persian_number( $amount );
	}

	/**
	 * Method convert_to_persian_number in Utility Class
	 *
	 * This method converts English number to Persian number in a string
	 *
	 * @access  public
	 * @static
	 * @see     http://php.net/manual/en/function.number-format.php
	 *
	 * @param string $number The number which is passed to method.
	 *
	 * @return string A formatted version of number.
	 */
	public static function convert_to_persian_number( $number ) {
		$persian_numbers = [ '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹', '۰' ];
		$english_numbers = [ '1', '2', '3', '4', '5', '6', '7', '8', '9', '0' ];

		return str_replace( $english_numbers, $persian_numbers, $number );
	}


    public static function convert_to_english_number( $number ) {
        $persian_numbers = [ '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹', '۰' ];
        $english_numbers = [ '1', '2', '3', '4', '5', '6', '7', '8', '9', '0' ];

        return str_replace( $persian_numbers, $english_numbers, $number );
    }
	/**
	 * Method convert_ip_to_long in Utility Class
	 *
	 * This method converts ip of visitor to long integer.
	 *
	 * @access  public
	 * @static
	 * @see     http://php.net/manual/en/function.ip2long.php
	 *
	 * @return  int/FALSE Returns the long integer or FALSE if ip_address is invalid.
	 */
	public static function convert_ip_to_long() {
		$remote_address = filter_var( wp_unslash( $_SERVER['REMOTE_ADDR'] ), FILTER_SANITIZE_STRING );
		if ( '::1' === $remote_address ) {
			$remote_address = '127.0.0.1';
		}

		return ip2long( $remote_address );
	}

	/**
	 * Method get_visitor_ip_address in Utility Class
	 *
	 * This method returns visitor IP address.
	 *
	 * @access  public
	 * @static
	 *
	 * @return  string Returns IP address of visitor.
	 */
	public static function get_visitor_ip_address() {
		$remote_address = filter_var( wp_unslash( $_SERVER['REMOTE_ADDR'] ), FILTER_SANITIZE_STRING );
		if ( '::1' === $remote_address ) {
			$remote_address = '127.0.0.1';
		}

		return $remote_address;
	}


    /**
     * Method save plugin option on admin page  in Utility Class
     *
     * this method return plugin options after save option
     *
     * @access  public
     * @static
     *
     * @return  array of plugin options.
     */
    public static function update_plugin_options( array $setting_page_form_data) {
        $res=array();
        if (isset($setting_page_form_data['api_token']) and $setting_page_form_data['api_token'] != '')
        {
            $setting_page_form_data=self::normalize_settings_page_form_data($setting_page_form_data);
            $setting_page_form_data['bot_username']= self::Bot_Get_Me($setting_page_form_data['api_token']);
            update_option('TSB_settings',$setting_page_form_data,false);
            if ($setting_page_form_data['bot_username'] !='unauthorized')
            {
                if (isset($setting_page_form_data['request_type']) and $setting_page_form_data['request_type'] == 'webhook')
                {
                    $res['webhook']=self::set_bot_webhook($setting_page_form_data['api_token'],$setting_page_form_data['bot_username']);
                }
                else
                {
                    $res['get_updates']=self::delete_bot_webhook($setting_page_form_data['api_token']);
                }
            }
        }
        else
        {
            $setting_page_form_data=self::normalize_settings_page_form_data($setting_page_form_data);
            update_option('TSB_settings',$setting_page_form_data,false);
        }
        return $res;
    }





    public static function write_log($log) {
        if (true === WP_DEBUG) {
            if (is_array($log) || is_object($log)) {
                error_log(print_r($log, true));
            } else {
                error_log($log);
            }
        }
    }



    public static function get_prop_exp_id($prop_id)
    {
        if ( metadata_exists('post',$prop_id,'expert_id'))
        {
            $exp_id=get_post_meta($prop_id,'expert_id',true);
            $type=get_post_meta($prop_id,'type',true);
            $args = array(
                'role'    => 'administrator'
            );
            $users = get_users( $args );
            $admins_id=array();
            foreach ( $users as $user )
            {
                $admins_id[]=$user->ID;
            }


                switch (get_post_meta($prop_id,'deal_type',true))
                {
                    case 'فروش':
                        if (in_array($type,array('آپارتمان','دفتر کار اداری','مغازه تجاری')))
                        {
                            $exp_id=self::get_exp_id_for_sale('آپارتمان،مغازه تجاری،دفتر کار اداری');
                        }
                        else
                        {
                            $exp_id=self::get_exp_id_for_sale('	ویلا،خانه ویلایی،زمین');
                        }
                        break;
                    case 'رهن و اجاره':
                    case 'رهن کامل':
                        $exp_id=self::get_exp_id_for_rent_mortgage();
                        break;
                }

        }
        else
        {
            $type=get_post_meta($prop_id,'type',true);
            switch (get_post_meta($prop_id,'deal_type',true))
            {
                case 'فروش':
                    if (in_array($type,array('آپارتمان','دفتر کار اداری','مغازه تجاری')))
                    {
                        $exp_id=self::get_exp_id_for_sale('آپارتمان،مغازه تجاری،دفتر کار اداری');
                    }
                    else
                    {
                        $exp_id=self::get_exp_id_for_sale('	ویلا،خانه ویلایی،زمین');
                    }
                    break;
                case 'رهن و اجاره':
                case 'رهن کامل':
                    $exp_id=self::get_exp_id_for_rent_mortgage();
                    break;
            }
        }
        if (empty($exp_id))
        {
            $args = array(
                'role'    => 'administrator'
            );
            $users = get_users( $args );
            $admins_id=array();
            foreach ( $users as $user )
            {
                $admins_id[]=$user->ID;
            }

            $exp_id=$admins_id[rand(0,count($admins_id))];
        }
        return $exp_id;
    }

    public static function get_exp_ids()
    {
        $args = array(
            'meta_key'     => 'is_expert',
            'meta_value'   => '1',
            'meta_compare' => '=='
        );

        $experts_user= get_users($args);

        $exp_ids=array();

        foreach ($experts_user as $user)
        {
            $exp_ids[]=$user->ID;
        }

        return $exp_ids;
    }
    public static function is_user_exp($user_id)
    {
        $exp_ids=self::get_exp_ids();
        if (in_array($user_id,$exp_ids))
        {
            return true;
        }
        return false;
    }
    public static function get_current_user_fname_lname()
    {
        $current_user = wp_get_current_user();
        if(empty($current_user->user_firstname) || empty($current_user->user_lastname))
        {
            return 'بدون نام';
        }
        else
        {
            return $current_user->user_firstname.' '.$current_user->user_lastname;
        }

    }
    public static function get_exp_id_for_rent_mortgage()
    {
        $args=array(
            'meta_query'    => array(
                'relation'  => 'AND',
                array(
                    'key'     => 'is_expert',
                    'value'   => '1',
                    'compare' => 'like',
                ),
                array(
                    'key'     => 'exp_main_group',
                    'value'   => 'رهن و اجاره',
                    'compare' => '=',
                ),
            )
        );

        $results = new \WP_User_Query( $args );
        $results=$results->get_results();

        $exp_ids=array();

        foreach ($results as $user)
        {
            $exp_ids[]=$user->ID;
        }

        return $exp_ids[rand(0,count($exp_ids))];
    }
    public static function get_all_exp_id_for_rent_mortgage()
    {
        $args=array(
            'meta_query'    => array(
                'relation'  => 'AND',
                array(
                    'key'     => 'is_expert',
                    'value'   => '1',
                    'compare' => 'like',
                ),
                array(
                    'key'     => 'exp_main_group',
                    'value'   => 'رهن و اجاره',
                    'compare' => '=',
                ),
            )
        );

        $results = new \WP_User_Query( $args );
        $results=$results->get_results();

        $exp_ids=array();

        foreach ($results as $user)
        {
            $exp_ids[]=$user->ID;
        }

        return $exp_ids;
    }
    public static function get_exp_id_for_sale($prop_sub_group)
    {
        $args=array(
            'meta_query'    => array(
                'relation'  => 'AND',
                array(
                    'key'     => 'is_expert',
                    'value'   => '1',
                    'compare' => 'like',
                ),
                array(
                    'key'     => 'exp_main_group',
                    'value'   => 'فروش',
                    'compare' => 'like',
                ),
                array(
                    'key'     => 'exp_sub_group',
                    'value'   => $prop_sub_group,
                    'compare' => '=',
                ),
            )
        );

        $results = new \WP_User_Query( $args );
        $results=$results->get_results();
        $exp_ids=array();
        foreach ($results as $result)
        {
            $exp_ids[]=$result->ID;
        }
        return $exp_ids[rand(0,count($exp_ids))];
    }
    public static function get_all_exp_ids_for_sale($prop_sub_group)
    {
        $args=array(
            'meta_query'    => array(
                'relation'  => 'AND',
                array(
                    'key'     => 'is_expert',
                    'value'   => '1',
                    'compare' => 'like',
                ),
                array(
                    'key'     => 'exp_main_group',
                    'value'   => 'فروش',
                    'compare' => 'like',
                ),
                array(
                    'key'     => 'exp_sub_group',
                    'value'   => $prop_sub_group,
                    'compare' => '=',
                ),
            )
        );

        $results = new \WP_User_Query( $args );
        $results=$results->get_results();
        $exp_ids=array();
        foreach ($results as $result)
        {
            $exp_ids[]=$result->ID;
        }
        return $exp_ids;
    }


    public static function show_owner_det_or_not($prop_id,$user_id)
    {
        if (is_user_logged_in())
        {

            if (metadata_exists('post',$prop_id,'expert_id'))
            {
                if (Utility::check_prop_exp_is_admin($prop_id))
                {
                    $type=get_post_meta($prop_id,'type',true);
                    switch (get_post_meta($prop_id,'deal_type',true))
                    {
                        case 'فروش':

	                        if (in_array($type,array('آپارتمان')))
	                        {
		                        $sale_1_exp_id=Utility::get_all_exp_ids_for_sale('آپارتمان،مغازه تجاری،دفتر کار اداری');
		                        $sale_2_exp_id=Utility::get_all_exp_ids_for_sale('ویلا،خانه ویلایی،زمین');
		                        if (in_array($user_id,$sale_1_exp_id) || in_array($user_id,$sale_2_exp_id))
		                        {
			                        return true;
		                        }
		                        else
		                        {
			                        return false;
		                        }
	                        }
	                        elseif (in_array($type,array('دفتر کار اداری','مغازه تجاری')))
                            {
                                $sale_1_exp_id=Utility::get_all_exp_ids_for_sale('آپارتمان،مغازه تجاری،دفتر کار اداری');
                                if (in_array($user_id,$sale_1_exp_id))
                                {
                                    return true;
                                }
                                else
                                {
                                    return false;
                                }
                            }
                            else
                            {
                                $sale_2_exp_id=Utility::get_all_exp_ids_for_sale('ویلا،خانه ویلایی،زمین');
                                if (in_array($user_id,$sale_2_exp_id))
                                {
                                    return true;
                                }
                                else
                                {
                                    return false;
                                }
                            }
                            break;
                        case 'رهن و اجاره':
                            $rent_mortgage_exp_id=Utility::get_all_exp_id_for_rent_mortgage();
                            if (in_array($user_id,$rent_mortgage_exp_id))
                            {
                                return true;
                            }
                            else
                            {
                                return false;
                            }
                            break;
                        case 'رهن کامل':
                            $rent_mortgage_exp_id=Utility::get_all_exp_id_for_rent_mortgage();
                            if (in_array($user_id,$rent_mortgage_exp_id))
                            {
                                return true;
                            }
                            else
                            {
                                return false;
                            }
                            break;
                    }
                }
                else
                {
                    $exp_id=get_post_meta($prop_id,'expert_id',true);
                    if ($exp_id == get_current_user_id())
                    {
                        return true;
                    }
                    else
                    {
                        return false;
                    }
                }
            }
        }
        else
        {
            return false;
        }
    }

    public static function check_prop_exp_is_admin($prop_id)
    {
        $exp_id=get_post_meta($prop_id,'expert_id',true);

        $args = array(
            'role'    => 'administrator'
        );
        $users = get_users( $args );
        $admins_id=array();
        foreach ( $users as $user )
        {
            $admins_id[]=$user->ID;
        }

        if (in_array($exp_id,$admins_id))
        {
            return true;
        }
        else
        {
            return false;
        }


    }

    public static  function is_request_from_office()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP']))
            //check ip from share internet
            $ip=$_SERVER['HTTP_CLIENT_IP'];
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
            //to check ip is pass from proxy
            $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
        else
            $ip=$_SERVER['REMOTE_ADDR'];

        if ($ip == '2.180.24.12')
            return true;
    }


    public static function get_similar_prop($prop_id)
    {
        $deal_type=get_post_meta($prop_id,'deal_type',true);
        $type=get_post_meta($prop_id,'type',true);
        $district_name=get_post_meta($prop_id,'district_name',true);
        $infrastructure_area=Utility::convert_to_english_number(get_post_meta($prop_id,'infrastructure_area',true));
        $args = array(
            'post_type'=> 'aralproperty',
            'posts_per_page'=>3,
            'orderby' =>'date',
            'order' =>'DESC',
            'meta_query' => array(
                'relation' => 'AND',
                'deal_type_clause' => array(
                    'key' => 'deal_type',
                    'value' => $deal_type,
                ),
                'type_clause' => array(
                    'key' => 'type',
                    'value' => $type,
                ),
                'infra_area_clause' => array(
                    'key' => 'infrastructure_area',
                    'value'   => array( $infrastructure_area-10, $infrastructure_area+10 ),
                    'type'    => 'numeric',
                    'compare' => 'BETWEEN',
                ),
                'district_name_clause' => array(
                    'key' => 'district_name',
                    'value' => $district_name,
                ),
            )
        );
        $query = new \WP_Query( $args );
        $similar_prop=array();
        if ( $query->have_posts() )
        {
            while ( $query->have_posts() )
            {
                $nested_array=array();
                $query->the_post();
                $nested_array['id']=get_the_ID();
                $nested_array['url']=home_url('aral-prop?id='.get_the_ID());
                $nested_array['title']=get_the_title();
                $nested_array['infra_area']=Utility::convert_to_english_number(get_post_meta(get_the_ID(),'infrastructure_area',true));
                $nested_array['price']=get_post_meta(get_the_ID(),'price',true);
                $nested_array['street']=get_post_meta(get_the_ID(),'street',true);
                $nested_array['city_name']=get_post_meta(get_the_ID(),'city_name',true);
                $nested_array['district_name']=get_post_meta(get_the_ID(),'district_name',true);
                $nested_array['district_name']=get_post_meta(get_the_ID(),'district_name',true);
                $numtostring=new \Plugin_Name_Dir\Includes\Functions\Number_To_String();
                $nested_array['price_string']=$numtostring->convert(get_post_meta(get_the_ID(),'price',true)).' '.'تومان';

                $similar_prop[]=$nested_array;
            }
        }
        return $similar_prop;
    }


    public  static function prop_date_publish($prop_id)
    {
        $tmp=explode('/',get_the_date("Y/m/d",$prop_id));
        $date1 = Date::jalali_to_gregorian($tmp[0],$tmp[1],$tmp[2],'/');
        $date2 = date("Y/m/d");

        $diff = abs(strtotime($date2) - strtotime($date1));

        $years = floor($diff / (365*60*60*24));
        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
        $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

        $date_title="";
        if ($years > 0)
        {
            $date_title.=$years." سال و ";
        }
        if ($months > 0)
        {
            $date_title.=$months." ماه و ";
        }
        if ($days > 0)
        {
            $date_title.=$days." روز پیش ";
        }
        else
        {
            $date_title.=" امروز ";
        }

        return $date_title;

    }

    public  static function get_prop_image_count($prop_id)
    {
        if(metadata_exists('post',$prop_id,'images') and !empty(get_post_meta($prop_id,'images',true)))
        {
            $all_imgs=explode('\n',trim(get_post_meta($prop_id,'images',true)));
            return count($all_imgs);
        }
        else {
            return 0;
        }

    }

	public  static function get_prop_image($prop_id)
	{
		$dash_assets_url=trailingslashit( PLUGIN_NAME_URL ) . 'assets/dashboard/';

		if (metadata_exists('post',$prop_id,'exp') and get_post_meta($prop_id,'exp',true) > 0)
		{
			return wp_get_attachment_image_src( get_post_meta($prop_id,'exp_0_image',true))[0];
		}

		if (metadata_exists('post',$prop_id,'cover_media_link') and !empty(get_post_meta($prop_id,'cover_media_link',true)))
		{
			return get_post_meta($prop_id,'cover_media_link',true);
		}

		if(metadata_exists('post',$prop_id,'images') and !empty(get_post_meta($prop_id,'images',true)))
		{
			$all_imgs=explode('\n',trim(get_post_meta($prop_id,'images',true)));
			if (empty($all_imgs[0]))
			{
				return get_post_meta($prop_id,'images',true);
			}
			else
			{
				return $all_imgs[0];
			}
		}


		return $dash_assets_url.'assets/media/image/img_holder3.jpeg';


	}

    public  static function get_prop_images($prop_id)
    {
        if (metadata_exists('post',$prop_id,'exp') and get_post_meta($prop_id,'exp',true) > 0)
        {
            $all_exp_img=array();
            for ($i=0;$i<get_post_meta($prop_id,'exp',true);$i++)
            {
                $all_exp_img[]=wp_get_attachment_image_src(get_post_meta($prop_id,'exp_'.$i.'_image',true))[0];
            }
            return array(
                'images'=>$all_exp_img,
                'images_count'=>get_post_meta($prop_id,'exp',true),
            );
        }

        if(metadata_exists('post',$prop_id,'images') and !empty(get_post_meta($prop_id,'images',true)))
        {
            $gallery_images=explode(PHP_EOL,trim(get_post_meta($prop_id,'images',true)));
            return array(
                'images'=>$gallery_images,
                'images_count'=>count($gallery_images),
            );
        }

        return array(
            'images'=>null,
            'images_count'=>0,
        );
    }

    public  static function get_region_district($region_id)
    {
       $region=array(
	       1 => array(
		       'برسلانی',
		       'بنفشه',
		       'اقبال',
		       'پیروزی',
		       'ولایتی',
		       'لادن',
		       'خضرائی منش',
		       'محیط زیست',
		       'حافظیه',
		       'نور',
		       'گلدیس',
		       'شهرآرا',
		       'صیاد شیرازی',
		       'سرو',
		       'رحیم زاده',
		       'چراغچی',
		       'ویلا',
		       'شهرستانی',
		       'فکوری',
		       'صارمی',
	       ),
	       2 => array(
		       'حافظ',
		       'صارمی',
		       'آب و برق',
		       'ویلا',
		       'پیروزی',
		       'فکوری',
		       'لاله',
		       'بهار',
		       'نسترن',
		       'برکپور',
		       '19بهمن',
		       'هنرستان',
		       'هاشمیه',
	       ),
	       3 => array(
		       'صارمی',
		       'پیروزی',
		       'فکوری',
		       'هاشمیه',
		       'کوثر',
		       'باهنر',
		       'تابان',
		       'کوثر شمالی',
		       'کوثر جنوبی',
		       'لاله',
	       ),
	       4 => array(
		       'قائم مقام',
		       'صدف',
		       'شهید قانع',
		       'ستاری',
		       'معلم',
		       'دندانپزشکان',
		       'فارغ التحصیلان',
		       'پژوهش',
		       'دادگر',
		       'غدیر',
		       'شریف',
		       'آزادگان',
		       'تعلیم',
		       'آموزگار',
		       'فرهنگ',
	       ),
	       5 => array(
		       'دانشجو',
		       'فرهنگ',
		       'معلم',
		       'مهران',
		       'آموزگار',
		       'دانش آموز',
		       'شیخ مفید',
		       'سید مرتضی',
		       'سید رضی',
		       'عدل',
		       'معاد',
		       'قاسمی',
		       'سروش',
		       'جلال آل احمد',
		       'مدرس',
		       'میرزا کوچک خان',
		       'بیهقی',
		       'امامت',
		       'استقلال',
		       'آزادی',
	       ),
	       6 => array(
		       'سرافرازان',
		       'فکوری',
		       'دلاوران',
		       'رهایی',
		       'پایداری',
		       'نماز',
		       'حق شناس',
	       ),
	       7 => array(
		       'پیروزی',
		       'فکوری',
		       'رضوی',
		       'خاقانی',
		       'دعبل خراعی',
		       'رودکی',
		       'فرخی',
		       'زکریا',
		       'کاوه',
		       'دهخدا',
		       'کلانتری',
	       ),
	       8 => array(
		       'فردوسی',
		       'ملک آباد',
		       'سجاد',
		       'جانباز',
		       'خیام شمالی',
		       'خیام جنوبی',
		       'خیام',
		       'احمد آباد',
		       'سناباد',
		       'ارشاد',
		       'فرامرز عباسی',
		       'مهدی',
		       'سمانه',
		       'کلاهدوز',
		       'دهخدا',
		       'شهید دستغیب',
		       'ملاصدار',
		       'ابوذر عفاری',
		       'رضا',
		       'بهشتی',
		       'قاضی طباطبایی',
		       'شهید صادقی',
	       ),
	       9 => array(
		       'امام علی',
		       'نهضت',
		       'آزاده',
		       'فلاحی',
		       'رفیعی',
		       'شریعتی',
		       'دکتر حسابی',
		       'شاهد',
		       'هاشمی رفسنجانی',
		       'هاشمی مهنه',
		       'فاطمیه',
		       'بهورز',
		       'استاد یوسفی',
		       'ادیب شمالی',
		       'ادیب جنوبی',
		       'امامیه',
		       'حجاب',
		       'اندیشه',
		       'رستگاری',
		       'کردنخانی',
		       'رازی',
	       ),
	       10 => array(
		       'هاشمی رفسنجانی',
		       'مجیدیه',
		       'الهیه',
		       'رحمانیه',
		       'اقدسیه',
		       'امیریه',
		       'تقویه',
		       'محمدیه',
		       'صادقیه',
		       'سجادیه',
		       'نقویه',
		       'مهدیه',
	       )
       );
       return $region[$region_id];
    }
}
