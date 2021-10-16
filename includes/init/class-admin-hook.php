<?php
/**
 * Admin_Hook Class File
 *
 * This file contains hooks that you need in admin panel of WordPress
 * (like enqueue styles or scripts in admin panel)
 *
 * @package    Plugin_Name_Dir\Includes\Init
 * @author     Your_Name <youremail@nomail.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://yoursite.com
 * @since      1.0.0
 */

namespace Plugin_Name_Dir\Includes\Init;

use Plugin_Name_Dir\Includes\Functions\Date;
use Plugin_Name_Dir\Includes\Functions\Utility;
use Plugin_Name_Dir\Includes\Functions\SmsIr;

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Plugin_Name_Dir\Includes\Init
 * @author     Your_Name <youremail@nomail.com>
 */
class Admin_Hook {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $plugin_name The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $version The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @access   public
	 *
	 * @param      string $plugin_name The name of this plugin.
	 * @param      string $version     The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 * @access   public
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
//        if (get_current_screen()->base == "toplevel_page_TSB_settings")
//        {
//            wp_enqueue_style(
//                $this->plugin_name . '_admin_style',
//                PLUGIN_NAME_ADMIN_CSS . 'TSB-admin.css',
//                array(),
//                $this->version,
//                'all'
//            );
//
//            wp_enqueue_style(
//                $this->plugin_name . '_emoji_area',
//                PLUGIN_NAME_ADMIN_CSS . 'emojionearea.min.css',
//                array(),
//                $this->version,
//                'all'
//            );
//        }
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 * @access   public
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

//        if (get_current_screen()->base == "toplevel_page_TSB_settings")
//        {
//            wp_enqueue_script(
//                $this->plugin_name . '_emoji_area',
//                PLUGIN_NAME_ADMIN_JS . 'emojionearea.min.js',
//                array( 'jquery' ),
//                $this->version,
//                true
//            );
//
//            wp_enqueue_script(
//                $this->plugin_name . '_admin_script',
//                PLUGIN_NAME_ADMIN_JS . 'TSB-admin.js',
//                array( 'jquery' ),
//                $this->version,
//                true
//            );
//
//        }

	}

    public static function get_districts_callback()
    {
        $request=$_POST['city_name'];
        $sub_array=array();
        switch($request)
        {
            case 'مشهد':
                $sub_array[]=array(
                    'id'=>1,
                    'name'=>'قاسم آباد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3599 59.5042')
                );

                $sub_array[]=array(
                    'id'=>2,
                    'name'=>'احمدآباد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2954 59.5742')
                );

                $sub_array[]=array(
                    'id'=>3,
                    'name'=>'بلوار پیروزی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3104 59.5055')
                );

                $sub_array[]=array(
                    'id'=>4,
                    'name'=>'بلوار فکوری',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3 59.5048')
                );

                $sub_array[]=array(
                    'id'=>5,
                    'name'=>'کوثر جنوبی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3073 59.508')
                );

                $sub_array[]=array(
                    'id'=>6,
                    'name'=>'جاده سنتو',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3221 59.5411')
                );

                $sub_array[]=array(
                    'id'=>7,
                    'name'=>'کوثر شمالی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3127 59.5157')
                );

                $sub_array[]=array(
                    'id'=>8,
                    'name'=>'معلم',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3342 59.5024')
                );

                $sub_array[]=array(
                    'id'=>9,
                    'name'=>'الهیه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3764 59.4747')
                );

                $sub_array[]=array(
                    'id'=>10,
                    'name'=>'آب و برق',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3132 59.4818')
                );

                $sub_array[]=array(
                    'id'=>11,
                    'name'=>'فلاحی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3585 59.498')
                );

                $sub_array[]=array(
                    'id'=>12,
                    'name'=>'بلوار هاشمیه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3058 59.5013')
                );

                $sub_array[]=array(
                    'id'=>13,
                    'name'=>'بلوار صارمی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3164 59.5042')
                );

                $sub_array[]=array(
                    'id'=>14,
                    'name'=>'خیابان توفیق',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3156 59.5735')
                );

                $sub_array[]=array(
                    'id'=>15,
                    'name'=>'۲۰ متری بلال',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3259 59.6332')
                );

                $sub_array[]=array(
                    'id'=>16,
                    'name'=>'۲۰ متری طلاب',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2899 59.6524')
                );

                $sub_array[]=array(
                    'id'=>17,
                    'name'=>'۳۰ متری طلاب',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2954 59.6477')
                );

                $sub_array[]=array(
                    'id'=>18,
                    'name'=>'آبادگران',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2682 59.5487')
                );

                $sub_array[]=array(
                    'id'=>19,
                    'name'=>'آبروان جاده سرخس',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.0678 59.9575')
                );

                $sub_array[]=array(
                    'id'=>20,
                    'name'=>'آبکوه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3064 59.5819')
                );

                $sub_array[]=array(
                    'id'=>21,
                    'name'=>'آپادانا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.30967861066055 59.57346470034736')
                );

                $sub_array[]=array(
                    'id'=>22,
                    'name'=>'آخوند خراسانی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2862 59.6033')
                );

                $sub_array[]=array(
                    'id'=>23,
                    'name'=>'آرامگاه فردوسی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.4629 59.493')
                );

                $sub_array[]=array(
                    'id'=>24,
                    'name'=>'آرمان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.34099244213782 59.463715310981115')
                );

                $sub_array[]=array(
                    'id'=>25,
                    'name'=>'آزادشهر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3346 59.533')
                );

                $sub_array[]=array(
                    'id'=>26,
                    'name'=>'آزادگان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3407 59.4798')
                );

                $sub_array[]=array(
                    'id'=>27,
                    'name'=>'آزاده',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3522 59.478')
                );

                $sub_array[]=array(
                    'id'=>28,
                    'name'=>'آیت الله بهجت',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2958 59.6141')
                );

                $sub_array[]=array(
                    'id'=>29,
                    'name'=>'ابرار',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3491 59.4774')
                );

                $sub_array[]=array(
                    'id'=>30,
                    'name'=>'ابن سینا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2979 59.585')
                );

                $sub_array[]=array(
                    'id'=>31,
                    'name'=>'ابوذر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3084 59.6308')
                );

                $sub_array[]=array(
                    'id'=>32,
                    'name'=>'ابوذر غفاری',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2915 59.5646')
                );

                $sub_array[]=array(
                    'id'=>33,
                    'name'=>'ابومسلم',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2975 59.5804')
                );

                $sub_array[]=array(
                    'id'=>34,
                    'name'=>'ابونصر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2988 59.5819')
                );

                $sub_array[]=array(
                    'id'=>35,
                    'name'=>'اتوبان جاده نیشابور',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.094 59.6799')
                );

                $sub_array[]=array(
                    'id'=>36,
                    'name'=>'احمدی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2783 59.6326')
                );

                $sub_array[]=array(
                    'id'=>37,
                    'name'=>'ارداک',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.7221 59.3907')
                );

                $sub_array[]=array(
                    'id'=>38,
                    'name'=>'ارشاد الرضا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.285 59.5861')
                );

                $sub_array[]=array(
                    'id'=>39,
                    'name'=>'ارغوان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.34769268359788 59.46770668029786')
                );

                $sub_array[]=array(
                    'id'=>40,
                    'name'=>'ارمغان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3481 59.468')
                );

                $sub_array[]=array(
                    'id'=>41,
                    'name'=>'استقلال',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3334 59.537')
                );

                $sub_array[]=array(
                    'id'=>42,
                    'name'=>'اسدالله زاده',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2982 59.5897')
                );

                $sub_array[]=array(
                    'id'=>43,
                    'name'=>'التیمور',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.319 59.6883')
                );

                $sub_array[]=array(
                    'id'=>44,
                    'name'=>'المهدی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.305 59.6418')
                );

                $sub_array[]=array(
                    'id'=>45,
                    'name'=>'امام خمینی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2794 59.5954')
                );

                $sub_array[]=array(
                    'id'=>46,
                    'name'=>'امام دوست',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.36590658878896 59.53218697422679')
                );

                $sub_array[]=array(
                    'id'=>47,
                    'name'=>'امام رضا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2711 59.6007')
                );

                $sub_array[]=array(
                    'id'=>48,
                    'name'=>'امام هادی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3583 59.5493')
                );

                $sub_array[]=array(
                    'id'=>49,
                    'name'=>'امیرآباد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2625 59.6579')
                );

                $sub_array[]=array(
                    'id'=>50,
                    'name'=>'امیر کبیر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2792 59.5727')
                );

                $sub_array[]=array(
                    'id'=>51,
                    'name'=>'انوری',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.25933922201779 59.59830116895809')
                );

                $sub_array[]=array(
                    'id'=>52,
                    'name'=>'ایثارگران',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.329 59.6111')
                );

                $sub_array[]=array(
                    'id'=>53,
                    'name'=>'ایستگاه سراب',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2943 59.6021')
                );

                $sub_array[]=array(
                    'id'=>54,
                    'name'=>'بابانظر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3004 59.657')
                );

                $sub_array[]=array(
                    'id'=>55,
                    'name'=>'بابک',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2969 59.5755')
                );

                $sub_array[]=array(
                    'id'=>56,
                    'name'=>'بازار سرشور',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.283 59.6038')
                );

                $sub_array[]=array(
                    'id'=>57,
                    'name'=>'باغچه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('35.9819 59.599')
                );

                $sub_array[]=array(
                    'id'=>58,
                    'name'=>'بخارایی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.303 59.5709')
                );

                $sub_array[]=array(
                    'id'=>59,
                    'name'=>'بردباری',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2753 59.5876')
                );

                $sub_array[]=array(
                    'id'=>60,
                    'name'=>'برزش آباد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.37043347989971 59.76750785076906')
                );

                $sub_array[]=array(
                    'id'=>61,
                    'name'=>'برسلانی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3351 59.466')
                );

                $sub_array[]=array(
                    'id'=>62,
                    'name'=>'برک پور',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3086 59.4966')
                );

                $sub_array[]=array(
                    'id'=>63,
                    'name'=>'برکپور',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.308 59.4939')
                );

                $sub_array[]=array(
                    'id'=>64,
                    'name'=>'بزرگراه آزادی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3762 59.5077')
                );

                $sub_array[]=array(
                    'id'=>65,
                    'name'=>'بزرگراه آسیایی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3872 59.5077')
                );

                $sub_array[]=array(
                    'id'=>66,
                    'name'=>'بزرگراه امام علی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3467 59.5065')
                );

                $sub_array[]=array(
                    'id'=>67,
                    'name'=>'بزرگراه شهید چراغچی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3414 59.5836')
                );

                $sub_array[]=array(
                    'id'=>68,
                    'name'=>'بزرگ راه غدیر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.26 59.6367')
                );

                $sub_array[]=array(
                    'id'=>69,
                    'name'=>'بزرگراه فجر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3198 59.6389')
                );

                $sub_array[]=array(
                    'id'=>70,
                    'name'=>'بزرگراه قائم',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3421 59.5818')
                );

                $sub_array[]=array(
                    'id'=>71,
                    'name'=>'بزرگراه کلانتری',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2837 59.561')
                );

                $sub_array[]=array(
                    'id'=>72,
                    'name'=>'بزرگراه میثاق',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3682 59.4921')
                );

                $sub_array[]=array(
                    'id'=>73,
                    'name'=>'بزرگراه همت',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2939 59.6575')
                );

                $sub_array[]=array(
                    'id'=>74,
                    'name'=>'بزرگمهر جنوبی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3144 59.5514')
                );

                $sub_array[]=array(
                    'id'=>75,
                    'name'=>'بزرگمهر شمالی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.317 59.5506')
                );

                $sub_array[]=array(
                    'id'=>76,
                    'name'=>'بعثت',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3025 59.65')
                );

                $sub_array[]=array(
                    'id'=>77,
                    'name'=>'بلوار حسابی جنوبی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3495 59.4949')
                );

                $sub_array[]=array(
                    'id'=>78,
                    'name'=>'بلوار آموزگار',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3404 59.5126')
                );

                $sub_array[]=array(
                    'id'=>79,
                    'name'=>'بولوار ابوطالب',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3251 59.5965')
                );

                $sub_array[]=array(
                    'id'=>80,
                    'name'=>'بلوار ادیب',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3583 59.5204')
                );

                $sub_array[]=array(
                    'id'=>81,
                    'name'=>'بلوار استاد یوسفی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3572 59.5194')
                );

                $sub_array[]=array(
                    'id'=>82,
                    'name'=>'بلوار اقبال لاهوری',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3346 59.4684')
                );

                $sub_array[]=array(
                    'id'=>83,
                    'name'=>'بلوار اقدسیه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3768 59.4804')
                );

                $sub_array[]=array(
                    'id'=>84,
                    'name'=>'بلوار امامت',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3313 59.536')
                );

                $sub_array[]=array(
                    'id'=>85,
                    'name'=>'بلوار امامیه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3588 59.5129')
                );

                $sub_array[]=array(
                    'id'=>86,
                    'name'=>'بلوار امت',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2922 59.6412')
                );

                $sub_array[]=array(
                    'id'=>87,
                    'name'=>'بلوار امیر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3424 59.5783')
                );

                $sub_array[]=array(
                    'id'=>88,
                    'name'=>'بلوار امیرالمومنین',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2894 59.6268')
                );

                $sub_array[]=array(
                    'id'=>89,
                    'name'=>'بلوار امیریه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3815 59.4853')
                );

                $sub_array[]=array(
                    'id'=>90,
                    'name'=>'بلوار اندیشه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3644 59.5287')
                );

                $sub_array[]=array(
                    'id'=>91,
                    'name'=>'بلوار باهنر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3129 59.5216')
                );

                $sub_array[]=array(
                    'id'=>92,
                    'name'=>'بلوار برادران خلیلی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2777 59.5676')
                );

                $sub_array[]=array(
                    'id'=>93,
                    'name'=>'بلوار برنسی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3281 59.4653')
                );

                $sub_array[]=array(
                    'id'=>94,
                    'name'=>'بلوار بعثت',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2931 59.5665')
                );

                $sub_array[]=array(
                    'id'=>95,
                    'name'=>'بلوار توس',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3615 59.5498')
                );

                $sub_array[]=array(
                    'id'=>96,
                    'name'=>'بلوار ثامن',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2685 59.6223')
                );

                $sub_array[]=array(
                    'id'=>97,
                    'name'=>'بلوار جانباز',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3223 59.4889')
                );

                $sub_array[]=array(
                    'id'=>98,
                    'name'=>'بلوار جمهوری',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2602 59.6067')
                );

                $sub_array[]=array(
                    'id'=>99,
                    'name'=>'بلوار چمن',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2685 59.6223')
                );

                $sub_array[]=array(
                    'id'=>100,
                    'name'=>'بلوار حافظ',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3223 59.4889')
                );

                $sub_array[]=array(
                    'id'=>101,
                    'name'=>'بلوار حجاب',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.361 59.5209')
                );

                $sub_array[]=array(
                    'id'=>102,
                    'name'=>'بلوار حر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2592 59.6875')
                );

                $sub_array[]=array(
                    'id'=>103,
                    'name'=>'حسابی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3583 59.5104')
                );

                $sub_array[]=array(
                    'id'=>104,
                    'name'=>'بلوار حسابی شمالی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3619 59.5117')
                );

                $sub_array[]=array(
                    'id'=>104,
                    'name'=>'بلوار دانش آمور',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3352 59.5131')
                );

                $sub_array[]=array(
                    'id'=>106,
                    'name'=>'بلوار دانشجو',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3364 59.5043')
                );

                $sub_array[]=array(
                    'id'=>107,
                    'name'=>'بلوار دستغیب',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3109 59.5666')
                );

                $sub_array[]=array(
                    'id'=>108,
                    'name'=>'بلوار دلاوارن',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2851 59.5121')
                );

                $sub_array[]=array(
                    'id'=>109,
                    'name'=>'بلوار دندانپزشکان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.341 59.4761')
                );

                $sub_array[]=array(
                    'id'=>110,
                    'name'=>'بلوار دهقان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.27786208089151 59.64624199535579')
                );

                $sub_array[]=array(
                    'id'=>111,
                    'name'=>'بلوار رحمانیه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3702 59.4718')
                );

                $sub_array[]=array(
                    'id'=>112,
                    'name'=>'بلوار رسالت',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.315 59.6391')
                );

                $sub_array[]=array(
                    'id'=>113,
                    'name'=>'بلوار رستمی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2674 59.6348')
                );

                $sub_array[]=array(
                    'id'=>114,
                    'name'=>'بلوار رضوی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2931 59.5412')
                );

                $sub_array[]=array(
                    'id'=>115,
                    'name'=>'بلوار رضویه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3898 59.4997')
                );

                $sub_array[]=array(
                    'id'=>116,
                    'name'=>'بلوار زکریا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2897 59.5436')
                );

                $sub_array[]=array(
                    'id'=>117,
                    'name'=>'بلوار ساجدی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3422 59.5588')
                );

                $sub_array[]=array(
                    'id'=>118,
                    'name'=>'بلوار سپاه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2234 59.6108')
                );

                $sub_array[]=array(
                    'id'=>119,
                    'name'=>'بلوار سجاد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3179 59.5517')
                );

                $sub_array[]=array(
                    'id'=>120,
                    'name'=>'بلوار سجادیه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3712 59.4738')
                );

                $sub_array[]=array(
                    'id'=>121,
                    'name'=>'بلوار سرافرازان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2908 59.5034')
                );

                $sub_array[]=array(
                    'id'=>122,
                    'name'=>'بلوار سید رضی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3339 59.5205')
                );

                $sub_array[]=array(
                    'id'=>123,
                    'name'=>'بلوار شریعتی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3534 59.5025')
                );

                $sub_array[]=array(
                    'id'=>124,
                    'name'=>'بلوار شفا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3293 59.5983')
                );

                $sub_array[]=array(
                    'id'=>125,
                    'name'=>'بلوار شمس',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.5793 59.2127')
                );

                $sub_array[]=array(
                    'id'=>126,
                    'name'=>'بلوار شهید رفیعی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3514 59.4888')
                );

                $sub_array[]=array(
                    'id'=>127,
                    'name'=>'بلوار شهید صادقی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3161 59.5753')
                );

                $sub_array[]=array(
                    'id'=>128,
                    'name'=>'بلوار شهید کاوه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.272 59.5565')
                );

                $sub_array[]=array(
                    'id'=>129,
                    'name'=>'بلوار شهید کریمی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3167 59.5965')
                );

                $sub_array[]=array(
                    'id'=>130,
                    'name'=>'بلوار شهید کشوری',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3154 59.6129')
                );

                $sub_array[]=array(
                    'id'=>131,
                    'name'=>'بلوار شیرودی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2712 59.6233')
                );

                $sub_array[]=array(
                    'id'=>132,
                    'name'=>'بلوار صادقیه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3758 59.4727')
                );

                $sub_array[]=array(
                    'id'=>133,
                    'name'=>'بلوار صبا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2282 59.6125')
                );

                $sub_array[]=array(
                    'id'=>134,
                    'name'=>'بلوار صدر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2672 59.6197')
                );

                $sub_array[]=array(
                    'id'=>135,
                    'name'=>'بلوار صیاد شیرازی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3168 59.4776')
                );

                $sub_array[]=array(
                    'id'=>136,
                    'name'=>'بلوار عبادی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3135 59.6139')
                );
                $sub_array[]=array(
                    'id'=>137,
                    'name'=>'بلوار عبدالمطلب',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3251 59.5947')
                );
                $sub_array[]=array(
                    'id'=>138,
                    'name'=>'بلوار عزیزیه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3868 59.4928')
                );
                $sub_array[]=array(
                    'id'=>139,
                    'name'=>'بلوار عصمتیه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3841 59.4979')
                );
                $sub_array[]=array(
                    'id'=>140,
                    'name'=>'بلوار فارغ التحصیلان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.342 59.4682')
                );
                $sub_array[]=array(
                    'id'=>141,
                    'name'=>'بلوار فردوسی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3245 59.5608')
                );
                $sub_array[]=array(
                    'id'=>142,
                    'name'=>'بلوار فرهنگ',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3301 59.507')
                );
                $sub_array[]=array(
                    'id'=>143,
                    'name'=>'بلوار فلسطین',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3056 59.5657')
                );
                $sub_array[]=array(
                    'id'=>144,
                    'name'=>'بلوار قرنی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3128 59.5874')
                );
                $sub_array[]=array(
                    'id'=>145,
                    'name'=>'بلوار کشاورز',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3563 59.5689')
                );
                $sub_array[]=array(
                    'id'=>146,
                    'name'=>'بلوار کلاهدوز',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3066 59.5796')
                );
                $sub_array[]=array(
                    'id'=>147,
                    'name'=>'بلوار کوهستان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3406 59.4562')
                );
                $sub_array[]=array(
                    'id'=>148,
                    'name'=>'بلوار گاز',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3136 59.6329')
                );
                $sub_array[]=array(
                    'id'=>149,
                    'name'=>'بلوار گلدیس',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3229 59.4694')
                );
                $sub_array[]=array(
                    'id'=>150,
                    'name'=>'بلوار گلها',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3612 59.4678')
                );
                $sub_array[]=array(
                    'id'=>151,
                    'name'=>'بلوار لادن',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3218 59.4723')
                );
                $sub_array[]=array(
                    'id'=>152,
                    'name'=>'بلوار مجیدیه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3681 59.4685')
                );
                $sub_array[]=array(
                    'id'=>153,
                    'name'=>'بلوار محمدیه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3696 59.4829')
                );
                $sub_array[]=array(
                    'id'=>154,
                    'name'=>'بلوار مدرس',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.293 59.5994')
                );
                $sub_array[]=array(
                    'id'=>155,
                    'name'=>'بلوار مصلی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2691 59.6359')
                );
                $sub_array[]=array(
                    'id'=>156,
                    'name'=>'بلوار ملک آباد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3073 59.5512')
                );
                $sub_array[]=array(
                    'id'=>157,
                    'name'=>'بلوار منتظری',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2937 59.5594')
                );
                $sub_array[]=array(
                    'id'=>158,
                    'name'=>'بلوار مهدیه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3832 59.4636')
                );
                $sub_array[]=array(
                    'id'=>159,
                    'name'=>'بلوار مهران',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3361 59.5202')
                );
                $sub_array[]=array(
                    'id'=>160,
                    'name'=>'بلوار موسوی قوچانی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.329 59.5868')
                );
                $sub_array[]=array(
                    'id'=>161,
                    'name'=>'بلوار مولوی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.5811 59.2087')
                );
                $sub_array[]=array(
                    'id'=>162,
                    'name'=>'بلوار میامی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2413 59.7605')
                );
                $sub_array[]=array(
                    'id'=>163,
                    'name'=>'بلوار نامجو',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2776 59.5758')
                );
                $sub_array[]=array(
                    'id'=>164,
                    'name'=>'بلوار نقویه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3915 59.4843')
                );
                $sub_array[]=array(
                    'id'=>165,
                    'name'=>'بلوار نماز',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.271 59.5406')
                );
                $sub_array[]=array(
                    'id'=>166,
                    'name'=>'بلوار نمایشگاه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3453 59.4633')
                );
                $sub_array[]=array(
                    'id'=>167,
                    'name'=>'بلوار هاشمی مهنه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3638 59.4952')
                );
                $sub_array[]=array(
                    'id'=>168,
                    'name'=>'بلوار هدایت',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3296 59.603')
                );
                $sub_array[]=array(
                    'id'=>169,
                    'name'=>'بلوار هفت تیر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3143 59.4911')
                );
                $sub_array[]=array(
                    'id'=>170,
                    'name'=>'بلوار هنرستان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3137 59.5002')
                );
                $sub_array[]=array(
                    'id'=>171,
                    'name'=>'بلوار هنرور',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3269 59.6082')
                );
                $sub_array[]=array(
                    'id'=>172,
                    'name'=>'بلوار وکیل آباد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('6.3306 59.4907')
                );
                $sub_array[]=array(
                    'id'=>173,
                    'name'=>'بلوار ولایت',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2799 59.6341')
                );
                $sub_array[]=array(
                    'id'=>174,
                    'name'=>'بلوار ولیعصر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3424 59.5785')
                );
                $sub_array[]=array(
                    'id'=>175,
                    'name'=>'بنفشه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.32 59.5559')
                );
                $sub_array[]=array(
                    'id'=>176,
                    'name'=>'بهاران',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.343 59.557')
                );
                $sub_array[]=array(
                    'id'=>177,
                    'name'=>'بهارستان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2747 59.5455')
                );
                $sub_array[]=array(
                    'id'=>178,
                    'name'=>'سپاد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3455 59.6')
                );
                $sub_array[]=array(
                    'id'=>179,
                    'name'=>'بهشت',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3194 59.5139')
                );
                $sub_array[]=array(
                    'id'=>180,
                    'name'=>'بهشتی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2827 59.5744')
                );
                $sub_array[]=array(
                    'id'=>181,
                    'name'=>'بهمن',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.347 59.6247')
                );
                $sub_array[]=array(
                    'id'=>182,
                    'name'=>'بهروز',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3571 59.4957')
                );
                $sub_array[]=array(
                    'id'=>183,
                    'name'=>'بوستان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3606 59.4705')
                );
                $sub_array[]=array(
                    'id'=>184,
                    'name'=>'بلوار ارشاد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('6.3187 59.5713')
                );
                $sub_array[]=array(
                    'id'=>185,
                    'name'=>'بیستون',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3158 59.5691')
                );
                $sub_array[]=array(
                    'id'=>186,
                    'name'=>'بیهقی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.32405779788323 59.532114110746974')
                );
                $sub_array[]=array(
                    'id'=>187,
                    'name'=>'پاستور',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2971 59.5819')
                );
                $sub_array[]=array(
                    'id'=>188,
                    'name'=>'پاسداران',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.289 59.5965')
                );
                $sub_array[]=array(
                    'id'=>189,
                    'name'=>'پایداری',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2897 59.5068')
                );
                $sub_array[]=array(
                    'id'=>190,
                    'name'=>'پرستار',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2918 59.5798')
                );
                $sub_array[]=array(
                    'id'=>191,
                    'name'=>'پرورش',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.334 59.5052')
                );
                $sub_array[]=array(
                    'id'=>192,
                    'name'=>'پروین اعتصامی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2594 59.6131')
                );
                $sub_array[]=array(
                    'id'=>193,
                    'name'=>'پژوهش',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3424 59.4659')
                );
                $sub_array[]=array(
                    'id'=>194,
                    'name'=>'پلیس راه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3658 59.5376')
                );
                $sub_array[]=array(
                    'id'=>195,
                    'name'=>'پنج تن',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3167 59.6774')
                );
                $sub_array[]=array(
                    'id'=>196,
                    'name'=>'پنجراه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.281 59.6218')
                );
                $sub_array[]=array(
                    'id'=>197,
                    'name'=>'تعبدی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3083 59.6063')
                );
                $sub_array[]=array(
                    'id'=>198,
                    'name'=>'تقی آباد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2901 59.5829')
                );
                $sub_array[]=array(
                    'id'=>199,
                    'name'=>'توحید',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3014 59.6022')
                );
                $sub_array[]=array(
                    'id'=>200,
                    'name'=>'توس',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.4808 59.5332')
                );
                $sub_array[]=array(
                    'id'=>201,
                    'name'=>'ثمانه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3311 59.557')
                );
                $sub_array[]=array(
                    'id'=>202,
                    'name'=>'جاده آرامگاه فردوسی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.4578 59.4913')
                );
                $sub_array[]=array(
                    'id'=>203,
                    'name'=>'جاده ابلق',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3422 59.7678')
                );
                $sub_array[]=array(
                    'id'=>204,
                    'name'=>'جاده بیرجند',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('32.865746677088076 59.251402822214665')
                );
                $sub_array[]=array(
                    'id'=>205,
                    'name'=>'جاده تربت حیدریه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('35.897 59.4835')
                );
                $sub_array[]=array(
                    'id'=>206,
                    'name'=>'جاده ریحان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.5097 59.4104')
                );
                $sub_array[]=array(
                    'id'=>207,
                    'name'=>'جاده ساغشک',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.47 59.309')
                );
                $sub_array[]=array(
                    'id'=>208,
                    'name'=>'جاده سد طرق',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2124 59.5633')
                );
                $sub_array[]=array(
                    'id'=>209,
                    'name'=>'جاده سد کارده',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.5661 59.6816')
                );
                $sub_array[]=array(
                    'id'=>210,
                    'name'=>'جاده سرخس',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.1224 59.9117')
                );
                $sub_array[]=array(
                    'id'=>211,
                    'name'=>'جاد ه شاندیز',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3765 59.4136')
                );
                $sub_array[]=array(
                    'id'=>212,
                    'name'=>'جاده طرقبه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3309 59.4212')
                );
                $sub_array[]=array(
                    'id'=>213,
                    'name'=>'جاده فریمان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('35.8862 59.7437')
                );
                $sub_array[]=array(
                    'id'=>214,
                    'name'=>'جاده قدیم قوچان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.388 59.5216')
                );
                $sub_array[]=array(
                    'id'=>215,
                    'name'=>'جاده قدیم نیشابور',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.1162 59.6392')
                );
                $sub_array[]=array(
                    'id'=>216,
                    'name'=>'جاده قوچان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.4775 59.3559')
                );
                $sub_array[]=array(
                    'id'=>217,
                    'name'=>'جاده کارخانه سیمان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3449 59.6586')
                );
                $sub_array[]=array(
                    'id'=>218,
                    'name'=>'جاده کاهو',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.4924 59.2777')
                );
                $sub_array[]=array(
                    'id'=>219,
                    'name'=>'جاده کشف',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3629 59.5764')
                );
                $sub_array[]=array(
                    'id'=>220,
                    'name'=>'جاده کلات',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3499 59.6287')
                );
                $sub_array[]=array(
                    'id'=>221,
                    'name'=>'جاهد شهر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3648 59.4685')
                );
                $sub_array[]=array(
                    'id'=>222,
                    'name'=>'جلال آل احمد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3325 59.5282')
                );
                $sub_array[]=array(
                    'id'=>223,
                    'name'=>'جنت',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2929 59.5977')
                );
                $sub_array[]=array(
                    'id'=>224,
                    'name'=>'جهان آرا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.27529036474396 59.57255107196761')
                );
                $sub_array[]=array(
                    'id'=>225,
                    'name'=>'چاهشک',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.4143 59.4509')
                );
                $sub_array[]=array(
                    'id'=>226,
                    'name'=>'چراغچی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3238 59.4886')
                );
                $sub_array[]=array(
                    'id'=>227,
                    'name'=>'چمران',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2917 59.5982')
                );
                $sub_array[]=array(
                    'id'=>228,
                    'name'=>'چناران',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.65005801558107 59.11806271432087')
                );
                $sub_array[]=array(
                    'id'=>229,
                    'name'=>'چهارراه بیسیم',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2797 59.5974')
                );
                $sub_array[]=array(
                    'id'=>230,
                    'name'=>'چهارراه برق',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.301 59.6369')
                );
                $sub_array[]=array(
                    'id'=>231,
                    'name'=>'چهارراه خسروی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2895 59.6058')
                );
                $sub_array[]=array(
                    'id'=>232,
                    'name'=>'چهارراه دانش',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.279 59.6079')
                );
                $sub_array[]=array(
                    'id'=>233,
                    'name'=>'چهارراه دکترا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2921 59.5883')
                );
                $sub_array[]=array(
                    'id'=>234,
                    'name'=>'چهارراه اه آهن',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3582 59.5078')
                );
                $sub_array[]=array(
                    'id'=>235,
                    'name'=>'چهارراه شهدا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2943 59.6113')
                );
                $sub_array[]=array(
                    'id'=>236,
                    'name'=>'چهارراه عامل',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3094 59.6032')
                );
                $sub_array[]=array(
                    'id'=>237,
                    'name'=>'چهارراه عشرت آباد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3017 59.6129')
                );
                $sub_array[]=array(
                    'id'=>238,
                    'name'=>'',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2808 59.5966')
                );
                $sub_array[]=array(
                    'id'=>239,
                    'name'=>'چهارراه لشکر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('')
                );
                $sub_array[]=array(
                    'id'=>240,
                    'name'=>'چهارراه مخابرات',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3547 59.5202')
                );
                $sub_array[]=array(
                    'id'=>241,
                    'name'=>'چهارراه مقدم',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2942 59.6239')
                );
                $sub_array[]=array(
                    'id'=>242,
                    'name'=>'چهارراه ورزش',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3518 59.5027')
                );
                $sub_array[]=array(
                    'id'=>243,
                    'name'=>'چهار طبقه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2915 59.5988')
                );
                $sub_array[]=array(
                    'id'=>244,
                    'name'=>'چهار فصل',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.4476 59.4308')
                );
                $sub_array[]=array(
                    'id'=>245,
                    'name'=>'حافظ',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.248 59.5941')
                );
                $sub_array[]=array(
                    'id'=>246,
                    'name'=>'حامد جنوبی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3154 59.5466')
                );
                $sub_array[]=array(
                    'id'=>247,
                    'name'=>'حامد شمالی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.322 59.5495')
                );
                $sub_array[]=array(
                    'id'=>248,
                    'name'=>'حرعاملی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3191 59.593')
                );
                $sub_array[]=array(
                    'id'=>249,
                    'name'=>'حسین باشی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3082 59.6063')
                );
                $sub_array[]=array(
                    'id'=>250,
                    'name'=>'حکیم نظامی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2819 59.5748')
                );
                $sub_array[]=array(
                    'id'=>252,
                    'name'=>'حومه شهر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2105 59.6418')
                );
                $sub_array[]=array(
                    'id'=>253,
                    'name'=>'خادم الشریعه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.36836012638344 59.54031944274903')
                );
                $sub_array[]=array(
                    'id'=>254,
                    'name'=>'خرمشهر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.27 59.5918')
                );
                $sub_array[]=array(
                    'id'=>255,
                    'name'=>'خسروی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3768 59.4805')
                );
                $sub_array[]=array(
                    'id'=>256,
                    'name'=>'خضرائی منش',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3268 59.4795')
                );
                $sub_array[]=array(
                    'id'=>257,
                    'name'=>'خلج',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2388 59.5989')
                );
                $sub_array[]=array(
                    'id'=>258,
                    'name'=>'خواجه ربیع',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3367 59.6284')
                );
                $sub_array[]=array(
                    'id'=>259,
                    'name'=>'خوش هوا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.5005 59.6193')
                );
                $sub_array[]=array(
                    'id'=>260,
                    'name'=>'دانشگاه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2938 59.5953')
                );
                $sub_array[]=array(
                    'id'=>261,
                    'name'=>'رازی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3542 59.5348')
                );
                $sub_array[]=array(
                    'id'=>262,
                    'name'=>'صدف',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3377 59.4968')
                );
                $sub_array[]=array(
                    'id'=>263,
                    'name'=>'هفده شهریور',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2722 59.6143')
                );
                $sub_array[]=array(
                    'id'=>264,
                    'name'=>'خیام جنوبی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.32038112747794 59.56538200378419')
                );
                $sub_array[]=array(
                    'id'=>265,
                    'name'=>'خین عرب',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3594 59.5847')
                );
                $sub_array[]=array(
                    'id'=>266,
                    'name'=>'دادگر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3409 59.4782')
                );
                $sub_array[]=array(
                    'id'=>267,
                    'name'=>'دانش غربی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2842 59.604')
                );
                $sub_array[]=array(
                    'id'=>268,
                    'name'=>'دانش سرا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3059 59.5881')
                );
                $sub_array[]=array(
                    'id'=>269,
                    'name'=>'دروازه طلایی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2914 59.5989')
                );
                $sub_array[]=array(
                    'id'=>270,
                    'name'=>'دریا دل',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2987 59.6169')
                );
                $sub_array[]=array(
                    'id'=>271,
                    'name'=>'دعبل خزایی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2882 59.5445')
                );
                $sub_array[]=array(
                    'id'=>272,
                    'name'=>'ده غیبی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.1746 59.6067')
                );
                $sub_array[]=array(
                    'id'=>273,
                    'name'=>'دهخدا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2909 59.5398')
                );
                $sub_array[]=array(
                    'id'=>274,
                    'name'=>'دهشک',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.4958 59.4778')
                );
                $sub_array[]=array(
                    'id'=>275,
                    'name'=>'دولت آباد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.44614210212922 59.18197631835938')
                );
                $sub_array[]=array(
                    'id'=>276,
                    'name'=>'راه آهن',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.304 59.6212')
                );
                $sub_array[]=array(
                    'id'=>277,
                    'name'=>'راهنمایی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3031 59.5708')
                );
                $sub_array[]=array(
                    'id'=>278,
                    'name'=>'رضا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2915 59.5691')
                );
                $sub_array[]=array(
                    'id'=>279,
                    'name'=>'رضا شهر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2812 59.5319')
                );
                $sub_array[]=array(
                    'id'=>280,
                    'name'=>'رهایی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2904 59.509')
                );
                $sub_array[]=array(
                    'id'=>281,
                    'name'=>'رودکی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2781 59.5715')
                );
                $sub_array[]=array(
                    'id'=>282,
                    'name'=>'زیبا شهر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3305 59.5392')
                );
                $sub_array[]=array(
                    'id'=>283,
                    'name'=>'سامانیه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.319 59.5082')
                );

                $sub_array[]=array(
                    'id'=>284,
                    'name'=>'سپیده',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2232 59.6125')
                );

                $sub_array[]=array(
                    'id'=>285,
                    'name'=>'سروش',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3311 59.5234')
                );
                $sub_array[]=array(
                    'id'=>286,
                    'name'=>'سعد آباد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3056 59.59')
                );
                $sub_array[]=array(
                    'id'=>287,
                    'name'=>'سعدی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2946 59.601')
                );
                $sub_array[]=array(
                    'id'=>288,
                    'name'=>'سلمان فارسی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2999 59.579')
                );
                $sub_array[]=array(
                    'id'=>289,
                    'name'=>'سناباد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3017 59.5844')
                );
                $sub_array[]=array(
                    'id'=>290,
                    'name'=>'سنایی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2999 59.5978')
                );

                $sub_array[]=array(
                    'id'=>291,
                    'name'=>'سه راه ادبیات',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2957 59.5861')
                );
                $sub_array[]=array(
                    'id'=>292,
                    'name'=>'سه راه دانش',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3822 59.5353')
                );
                $sub_array[]=array(
                    'id'=>293,
                    'name'=>'سه راه فردوسی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.4552 59.4762')
                );
                $sub_array[]=array(
                    'id'=>294,
                    'name'=>'سیده مرتضی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3261 59.5143')
                );
                $sub_array[]=array(
                    'id'=>295,
                    'name'=>'سیدان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.5152 59.2998')
                );
                $sub_array[]=array(
                    'id'=>296,
                    'name'=>'سیدی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2374 59.6043')
                );
                $sub_array[]=array(
                    'id'=>297,
                    'name'=>'شاهد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3578 59.5168')
                );
                $sub_array[]=array(
                    'id'=>298,
                    'name'=>'شاهنامه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.4765 59.5261')
                );
                $sub_array[]=array(
                    'id'=>299,
                    'name'=>'شهرستانی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3102 59.4717')
                );
                $sub_array[]=array(
                    'id'=>300,
                    'name'=>'شهرک ابوذر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2255 59.6151')
                );
                $sub_array[]=array(
                    'id'=>301,
                    'name'=>'شهرک بهارستان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.5155 59.3224')
                );
                $sub_array[]=array(
                    'id'=>302,
                    'name'=>'شهرک ثامن',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2899 59.669')
                );
                $sub_array[]=array(
                    'id'=>303,
                    'name'=>'شهید قانع',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.339 59.4886')
                );
                $sub_array[]=array(
                    'id'=>304,
                    'name'=>'شهید صدوق',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3041 59.6391')
                );
                $sub_array[]=array(
                    'id'=>305,
                    'name'=>'شیخ طوسی شمالی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3185 59.6723')
                );
                $sub_array[]=array(
                    'id'=>306,
                    'name'=>'طبرسی بلوار اول',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2996 59.6346')
                );
                $sub_array[]=array(
                    'id'=>307,
                    'name'=>'طبرسی بلوار دوم',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.322 59.6722')
                );
                $sub_array[]=array(
                    'id'=>308,
                    'name'=>'طلاب',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2989 59.6475')
                );
                $sub_array[]=array(
                    'id'=>309,
                    'name'=>'عارف',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2928 59.5774')
                );
                $sub_array[]=array(
                    'id'=>310,
                    'name'=>'عدل خمینی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.277 59.5959')
                );
                $sub_array[]=array(
                    'id'=>311,
                    'name'=>'علیمردانی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2964 59.6383')
                );
                $sub_array[]=array(
                    'id'=>312,
                    'name'=>'عنصری غربی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2754 59.6106')
                );
                $sub_array[]=array(
                    'id'=>313,
                    'name'=>'عنصری شرقی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2701 59.6157')
                );
                $sub_array[]=array(
                    'id'=>314,
                    'name'=>'غدیر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3396 59.4813')
                );
                $sub_array[]=array(
                    'id'=>315,
                    'name'=>'فاطمیه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3625 59.4928')
                );
                $sub_array[]=array(
                    'id'=>316,
                    'name'=>'فداییان اسلام',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2656 59.6131')
                );
                $sub_array[]=array(
                    'id'=>317,
                    'name'=>'فرامرز عباسی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3369 59.5574')
                );
                $sub_array[]=array(
                    'id'=>318,
                    'name'=>'فرهاد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3119 59.5592')
                );
                $sub_array[]=array(
                    'id'=>319,
                    'name'=>'فیاض بخش',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2764 59.5903')
                );
                $sub_array[]=array(
                    'id'=>320,
                    'name'=>'قائم',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2452 59.5971')
                );
                $sub_array[]=array(
                    'id'=>321,
                    'name'=>'قائم مقام فراهانی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3356 59.5002')
                );
                $sub_array[]=array(
                    'id'=>323,
                    'name'=>'قاضی طباطبایی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3143 59.5794')
                );
                $sub_array[]=array(
                    'id'=>324,
                    'name'=>'قباد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2631 59.6036')
                );
                $sub_array[]=array(
                    'id'=>325,
                    'name'=>'کارگر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.341 59.5655')
                );
                $sub_array[]=array(
                    'id'=>326,
                    'name'=>'کاشانی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3042 59.6104')
                );
                $sub_array[]=array(
                    'id'=>327,
                    'name'=>'کامیاب',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3131 59.61')
                );
                $sub_array[]=array(
                    'id'=>328,
                    'name'=>'کاهو',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.455 59.2158')
                );
                $sub_array[]=array(
                    'id'=>329,
                    'name'=>'کاویان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.0413 59.6985')
                );
                $sub_array[]=array(
                    'id'=>330,
                    'name'=>'کرامت',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.28849401481101 59.669580459594734')
                );
                $sub_array[]=array(
                    'id'=>331,
                    'name'=>'کوشش',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2613 59.6038')
                );
                $sub_array[]=array(
                    'id'=>332,
                    'name'=>'کوهسنگی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2875 59.5738')
                );
                $sub_array[]=array(
                    'id'=>333,
                    'name'=>'مجد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3065 59.5876')
                );
                $sub_array[]=array(
                    'id'=>334,
                    'name'=>'مجلسی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3055 59.6311')
                );
                $sub_array[]=array(
                    'id'=>335,
                    'name'=>'مطهری جنوبی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3045 59.5933')
                );
                $sub_array[]=array(
                    'id'=>336,
                    'name'=>'مطهری شمالی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3157 59.607')
                );
                $sub_array[]=array(
                    'id'=>337,
                    'name'=>'معاد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3326 59.5282')
                );
                $sub_array[]=array(
                    'id'=>338,
                    'name'=>'مفتح',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2942 59.6469')
                );
                $sub_array[]=array(
                    'id'=>339,
                    'name'=>'ملاصدرا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2914 59.5745')
                );
                $sub_array[]=array(
                    'id'=>340,
                    'name'=>'ملک الشعرا بهار',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2822 59.594')
                );
                $status='found';
                break;

            case 'طرقبه':
                $sub_array[]=array(
                    'id'=>2554,
                    'name'=>'امام زاده یاسر و ناصر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3206','36.3206')
                );

                $sub_array[]=array(
                    'id'=>190,
                    'name'=>'بلوار امام رضا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3314','36.3314')
                );

                $sub_array[]=array(
                    'id'=>1793,
                    'name'=>'بلوار فرهنگ',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3197','59.3658')
                );

                $sub_array[]=array(
                    'id'=>1849,
                    'name'=>'بلوار کاخ',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3401','59.4249')
                );


                $sub_array[]=array(
                    'id'=>12948,
                    'name'=>'بلوار کوهساران',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.31249702458188','59.38651084899902')
                );
                $status='found';
                break;

            case 'شاندیز':
                $sub_array[]=array(
                    'id'=>6171,
                    'name'=>'16 متری سجاد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3928','59.3052')
                );

                $sub_array[]=array(
                    'id'=>2517,
                    'name'=>'ابراهیم آباد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.4115','59.2904')
                );

                $sub_array[]=array(
                    'id'=>458,
                    'name'=>'ابرده',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3829','59.2693')
                );

                $sub_array[]=array(
                    'id'=>7526,
                    'name'=>'ابرده سفلی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.38774382472152','59.26570415496827')
                );

                $sub_array[]=array(
                    'id'=>7526,
                    'name'=>'ابرده سفلی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.38774382472152','59.26570415496827')
                );
                $status='found';

                break;

            case 'گلبهار':
                $sub_array[]=array(
                    'id'=>1739,
                    'name'=>'ابقد (گلبهار)',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.5721','59.1026')
                );

                $sub_array[]=array(
                    'id'=>3021,
                    'name'=>'این سینا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.5742','59.1928')
                );

                $sub_array[]=array(
                    'id'=>3417,
                    'name'=>'استاد رسام',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.5704','59.1876')
                );

                $sub_array[]=array(
                    'id'=>205,
                    'name'=>'امام رضا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.577','59.1766')
                );
                $status='found';
                break;

            default:
                $sub_array[]=array(
                    'id'=>67,
                    'name'=>'خالی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3599','59.5042')
                );
                $status='not_found';
                break;
        }
        $output=array(
            "status" =>$status,
            "districts" =>$sub_array
        );
        echo json_encode($output);
        exit();
    }

    public static function save_npr_callback()
    {
        header("Content-Type: application/json");
        $request=$_POST;
        if (get_current_user_id() == intval($request['user_id']))
        {
            $user_id=intval($request['user_id']);
            if($request['data']['npr_deal_type'] == 'خرید')
            {
                if ($request['data']['npr_prop_type'] == trim('آپارتمان') or $request['data']['npr_prop_type'] == trim('مغازه تجاری') or $request['data']['npr_prop_type'] == trim('دفتر کار اداری'))
                {
                    $prop_sub_group=trim('آپارتمان،مغازه تجاری،دفتر کار اداری');
                }
                else
                {
                    $prop_sub_group=trim('ویلا،خانه ویلایی،زمین');
                }
                $exp_id=Utility::get_exp_id_for_sale($prop_sub_group);
            }
            else if($request['data']['npr_deal_type'] == 'رهن و اجاره'  or $request['data']['npr_deal_type'] == 'رهن کامل')
            {
                $exp_id=Utility::get_exp_id_for_rent_mortgage();
            }

//            echo json_encode($exp_id);
//            exit;

            $new_prop_request=array();
            $new_prop_request['npr_city']=sanitize_text_field($request['data']['npr_city']);
            if (isset($request['data']['npr_district']) and $request['data']['npr_district'] !='' )
            {
                $new_prop_request['npr_district']=$request['data']['npr_district'];
            }

            if (isset($request['data']['npr_deal_type']) and $request['data']['npr_deal_type'] !='')
            {
                $new_prop_request['npr_deal_type']=$request['data']['npr_deal_type'];
                switch ($request['data']['npr_deal_type'])
                {
                    case 'خرید':
                        $new_prop_request['npr_sale_price']=$request['data']['npr_price'];
                        $new_prop_request['npr_deed_type']=$request['data']['npr_deed_type'];
                        break;
                    case 'رهن و اجاره':
                        $new_prop_request['npr_rent_price']=$request['data']['npr_rent'];
                        $new_prop_request['npr_mortgage_price']=$request['data']['npr_mortgage'];
                        break;
                    case 'رهن کامل':
                        $new_prop_request['npr_mortgage_price']=$request['data']['npr_mortgage'];
                        break;
                }
            }

            if (isset($request['data']['npr_prop_type']) and $request['data']['npr_prop_type']!='') {
                $new_prop_request['npr_prop_type'] = $request['data']['npr_prop_type'];
                switch ($request['data']['npr_prop_type'])
                {
                    case 'آپارتمان':
                    case 'خانه ویلایی':
                    case 'خانه ویلایی':
                    case 'ویلا':
                        $new_prop_request['npr_bedroom_count']=$request['data']['npr_bedroom_count'];
                        $new_prop_request['npr_facilities']=$request['data']['npr_facilities'];
                        $new_prop_request['npr_floor_count']=$request['data']['npr_floor_count'];
                        $new_prop_request['npr_infrastructure_area']=$request['data']['npr_infrastructure_area'];
                        break;
                    case 'مغازه تجاری':
                    case 'دفتر کار اداری':
                        $new_prop_request['npr_facilities']=$request['data']['npr_facilities'];
                        $new_prop_request['npr_floor_count']=$request['data']['npr_floor_count'];
                        $new_prop_request['npr_infrastructure_area']=$request['data']['npr_infrastructure_area'];
                        break;
                }
            }
            global $wpdb;
            $table_name = $wpdb->prefix . 'user_prop_request';
            $result=$wpdb->insert($table_name,
                array(
                    'user_id' =>$user_id,
                    'exp_id' =>$exp_id,
                    'details' =>maybe_serialize( $new_prop_request ),
                    'status' =>'pending',
                    'customer_name' =>$request['data']['npr_customer_name'],
                    'customer_tel' =>$request['data']['npr_customer_tel'],
                    'excluded_prop' =>null,
                )
            );

            $user_id=get_current_user_id();
            $sql = "SELECT * FROM {$table_name} WHERE user_id = {$user_id} and status='pending'";
            $pending_request=count($wpdb->get_results($sql));

            $sql = "SELECT * FROM {$table_name} WHERE user_id = {$user_id} and status='completed'";
            $complete_request=count($wpdb->get_results($sql));

            if (is_wp_error($result))
            {
                $output=array(
                    'status' =>'not_success'
                );
            }
            else
            {
                $output=array(
                    'status' =>'success',
                    'pending_req'=>$pending_request,
                    'complete_req'=>$complete_request
                );
            }
        }
        else
        {
            $output=array(
                'status' =>'not_secure',
            );
        }

        echo json_encode($output);
        exit();
    }
    public static function get_all_user_prop_request_callback()
    {
        header("Content-Type: application/json");
        $request = $_REQUEST;
        $user_id=$request['user_id'];
        if (get_current_user_id() == intval($request['user_id']))
        {
            require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
            header("Content-Type: application/json");
            global $wpdb;
//            $columns = array(
//                0 => '',
//                1 => 'pr_details',
//                2 => 'pr_status'
//            );

            $table_name = $wpdb->prefix . "user_prop_request";
            $sql = "SELECT * FROM {$table_name} WHERE user_id = {$user_id}";
//            $sql .= " ORDER BY " . $columns[$request['order'][0]['column']] . "   " . $requestData['order'][0]['dir'] . "   LIMIT " . $requestData['start'] . " ," . $requestData['length'] . "   ";
            $results=$wpdb->get_results($sql);
            $results_count=count($results);
            date_default_timezone_set("Asia/Tehran");
            $data = array();
            $count=1;
            foreach ($results as $result)
            {
                $nestedData = array();
                $det=maybe_unserialize($result->details);
                $nestedData[] = $count;
                $nestedData[] = $result->customer_name;
                $nestedData[] = $result->customer_tel;
                $nestedData[] = $det['npr_deal_type'].' '.$det['npr_prop_type'].'<a id="show_prop_request_detailes" data-toggle="tooltip" title="" data-original-title=" جزییات" data-request_id="'.$result->id.'">
                                                                <i class="fa fa-eye"></i>
                                                            </a>';
                $nestedData[] = jdate('d  F  Y ',strtotime($result->date));
                $nestedData[] = get_user_meta($result->exp_id,'amlak_exp_name',true).'<br/><small class="text-muted">'.' کارشناس '.get_user_meta($result->exp_id,'exp_main_group',true).' ('.get_user_meta($result->exp_id,'exp_sub_group',true).')</small>';
                $nestedData[] =($result->status == 'pending')?'<span class="badge badge-warning">درحال بررسی</span>':'<span class="badge badge-success">پاسخ داده شده</span>';
                $nestedData[] = '<i class="fa fa-trash-o fa-lg text-danger" id="npr_delete" data-request_id="'.$result->id.'"></i>';

                $data[] = $nestedData;
                $count++;
            }

            $json_data = array(
                "draw" => intval($request['draw']),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
                "recordsTotal" => intval($results_count),  // total number of records
                "recordsFiltered" => intval($results_count), // total number of records after searching, if there is no searching then totalFiltered = totalData
                "data" => $data   // total data array
            );
            echo json_encode($json_data);
            exit();
        }
    }
    public static function get_request_det_callback()
    {
        header("Content-Type: application/json");
        $request = $_REQUEST;
        $user_id=$request['user_id'];
        if (get_current_user_id() == intval($request['user_id']))
        {
            require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
            header("Content-Type: application/json");
            global $wpdb;

            $table_name = $wpdb->prefix . "user_prop_request";
            $r_id=intval($request['r_id']);
            $sql = "SELECT details FROM {$table_name} WHERE  id={$r_id}";
            $result=$wpdb->get_var($wpdb->prepare($sql));
            $result=maybe_unserialize($result);

            $modal_content=' <div class="pricing-table m-b-20">
                                 <ul class="m-b-30 m-t-30 list-group list-group-flush">';

            $deal_prop_type='';
            if($result['npr_deal_type'] !=null)
            {
                $deal_prop_type.=$result['npr_deal_type'];
                if ($result['npr_prop_type'] !=null)
                {
                    $deal_prop_type.=' '.$result['npr_prop_type'];
                }

                $modal_content.='<li class="list-group-item d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-success icon-block-xs icon-block-floating">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check width-18 height-18"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                </span> ';
                $modal_content.= $deal_prop_type;
                $modal_content.= '</li>';

                if($result['npr_deal_type'] == 'خرید' and $result['npr_deed_type'] !=null)
                {
                    $modal_content .= '<li class="list-group-item d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-success icon-block-xs icon-block-floating">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check width-18 height-18"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                </span> ';
                    $modal_content.= ' نوع سند ';
                    $count=1;
                    foreach ($result['npr_deed_type'] as $deed)
                    {
                        if ($count == 1)
                        {
                            $modal_content.= $deed;
                        }
                        else
                        {
                            $modal_content.= ' یا '.$deed;
                        }

                        $count++;
                    }
                    $modal_content.= '</li>';
                }

            }

            if($result['npr_city'] !=null)
            {
                $modal_content.='<li class="list-group-item d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-success icon-block-xs icon-block-floating">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check width-18 height-18"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                </span> ';
                $modal_content.='شهر'.' '.$result['npr_city'];
                if ($result['npr_district']!=null)
                {
                    $modal_content.=' | محله  ';
                    $count=1;
                    $max=count($result['npr_district']);
                    foreach ($result['npr_district'] as $district)
                    {
                        if($count == 1 )
                        {
                            $modal_content.=$district;
                        }
                        else
                        {
                            $modal_content.= ' یا '.$district;
                        }
                        $count++;
                    }
                }

                $modal_content.= '</li>';
            }


            if($result['npr_deal_type'] !=null and $result['npr_deal_type']=='خرید' and $result['npr_sale_price']!=null)
            {
                $modal_content.='<li class="list-group-item d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-success icon-block-xs icon-block-floating">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check width-18 height-18"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                </span> ';
                $modal_content.= 'قیمت';

                    if (count($result['npr_sale_price']) > 1)
                    {
                        $modal_content.= ' از '.$result['npr_sale_price'][0].' تا '.$result['npr_sale_price'][1].' میلیون ';
                    }
                    else
                    {
                        $modal_content.= ' تا '.$result['npr_sale_price'][0].' میلیون ';
                    }

                $modal_content.= '</li>';
            }

            if($result['npr_deal_type'] !=null and $result['npr_deal_type']=='رهن کامل' and $result['npr_mortgage_price']!=null)
            {
                $modal_content.='<li class="list-group-item d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-success icon-block-xs icon-block-floating">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check width-18 height-18"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                </span> ';
                $modal_content.= 'رهن';

                if (count($result['npr_mortgage_price']) > 1)
                {
                    $modal_content.= ' از '.$result['npr_mortgage_price'][0].' تا '.$result['npr_mortgage_price'][1].' میلیون ';
                }
                else
                {
                    $modal_content.= ' تا '.$result['npr_mortgage_price'][0].' میلیون ';
                }
                $modal_content.= '</li>';
            }

            if($result['npr_deal_type'] !=null and $result['npr_deal_type']=='رهن و اجاره' and $result['npr_mortgage_price']!=null)
            {
                $modal_content.='<li class="list-group-item d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-success icon-block-xs icon-block-floating">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check width-18 height-18"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                </span> ';
                $modal_content.= 'رهن';
                if (count($result['npr_mortgage_price']) > 1)
                {
                    $modal_content.= ' از '.$result['npr_mortgage_price'][0].' تا '.$result['npr_mortgage_price'][1].' میلیون ';
                }
                else
                {
                    $modal_content.= ' تا '.$result['npr_mortgage_price'][0].' میلیون ';
                }
                $modal_content.= '</li>';
            }

            if($result['npr_deal_type'] !=null and $result['npr_deal_type']=='رهن و اجاره' and $result['npr_rent_price']!=null)
            {
                $modal_content.='<li class="list-group-item d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-success icon-block-xs icon-block-floating">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check width-18 height-18"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                </span> ';
                $modal_content.= 'اجاره';

                if (count($result['npr_rent_price']) > 1)
                {
                    if ($result['npr_rent_price'][0]<1000)
                    {
                        $modal_content.= ' از '.$result['npr_rent_price'][0].' هزار ';
                    }
                    else
                    {
                        $modal_content.= ' از '.(($result['npr_rent_price'][0])/1000).' میلیون ';
                    }

                    if ($result['npr_rent_price'][1]<1000)
                    {
                        $modal_content.= ' تا '.$result['npr_rent_price'][1].' هزار ';
                    }
                    else
                    {
                        $modal_content.= ' تا '.(($result['npr_rent_price'][1])/1000).' میلیون ';
                    }

                }
                else
                {
                    if ($result['npr_rent_price'][0]<1000)
                    {
                        $modal_content.= ' تا '.$result['npr_rent_price'][0].' هزار ';
                    }
                    else
                    {
                        $modal_content.= ' تا '.(($result['npr_rent_price'][0])/1000).' میلیون ';
                    }
                }
                $modal_content.= '</li>';
            }


            if( $result['npr_floor_count'] !=null)
            {
                $modal_content.='<li class="list-group-item d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-success icon-block-xs icon-block-floating">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check width-18 height-18"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                </span> ';
                $modal_content.='تا طبقه ';
                $modal_content.=$result['npr_floor_count'];
                $modal_content.= '</li>';
            }

            if( $result['npr_bedroom_count'] !=null)
            {

                $modal_content.='<li class="list-group-item d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-success icon-block-xs icon-block-floating">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check width-18 height-18"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                </span> ';
                $modal_content.=$result['npr_bedroom_count'];
                $modal_content.=' خوابه ';
                $modal_content.= '</li>';
            }

            if( $result['npr_infrastructure_area'] !=null)
            {

                $modal_content.='<li class="list-group-item d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-success icon-block-xs icon-block-floating">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check width-18 height-18"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                </span> ';
                $count=0;
                $modal_content.=' زیربنا  ';

                if(count($result['npr_infrastructure_area']) > 1)
                {
                    $modal_content.=' از '. $result['npr_infrastructure_area'][0];
                    $modal_content.= ' تا '.$result['npr_infrastructure_area'][1].' متر ';
                }
                else
                {
                    $modal_content.= ' تا '.$result['npr_infrastructure_area'][0].' متر ';
                }
                $modal_content.= '</li>';


            }

            if( $result['npr_facilities'] !=null)
            {

                $modal_content.='<li class="list-group-item d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-success icon-block-xs icon-block-floating">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check width-18 height-18"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                </span> ';
                $count=0;
                $modal_content.=' امکانات شامل ';
                $count=1;
                $facalities_name=array(
                    'elevator' =>'آسانسور',
                    'remote_door' =>'درب برقی',
                    'video_iphone' =>'ایفون تصویری',
                    'parking' =>'پارکینگ',
                    'warehouse ' =>'انباری',
                    'terrace' =>'تراس',
                    'package' =>'پکیج',
                    'radiator' =>'رادیاتور',
                    'floor_heating' =>'گرمایش از کف',
                    'chiller' =>'چیلر',
                    'air_conditioning' =>'هواساز',
                    'gas_cooler' =>'کولر گازی',
                    'water_cooler' =>'کولرآبی',
                    'heater' =>'بخاری',
                    'water_heater' =>'آب گرمکن',
                    'heating' =>'شوفاژ',
                    'painted' =>'نقاشی',
                    'wallpaper' =>'کاغذ دیواری',
                    'paneled' =>'پانل کوبی',
                    'desktop_gas' =>'گاز رومیزی',
                    'hood' =>'هود',
                    'sauna' =>'سونا',
                    'jacuzzi' =>'جکوزی',
                    'master_bath' =>'حمام مستر',
                    'closet' =>'کمد دیواری',
                    'security_door' =>'درب ضد سرقت',
                    'cctv' =>'دوربین مداربسته',
                    'toilet' =>'سرویس فرنگی',
                    'pool' =>'استخر',
                    'curtain' =>'پرده',
                    'luster' =>'لوستر',
                );
                foreach ($result['npr_facilities'] as $facilitie)
                {
                    if ($count == 1)
                    {
                        $modal_content.= $facalities_name[trim($facilitie)];
                    }
                    else
                    {
                        $modal_content.= ' - '.$facalities_name[trim($facilitie)];
                    }

                    $count++;
                }
                $modal_content.= '</li>';


            }

            if( $result['elavator'] !=null)
            {

                $modal_content.='<li class="list-group-item d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-success icon-block-xs icon-block-floating">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check width-18 height-18"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                </span> ';
                $modal_content.=( $result['elavator'] == 'yes')?' با آسانسور تا طبقه '.$result['npr_yes_elavator_floor_count']:'بدون آسانسور تا طبقه '.$result['npr_no_elavator_floor_count'];
                $modal_content.= '</li>';
            }

            $modal_content.=   '</ul>
                              </div>';
            echo json_encode($modal_content);
            exit();
        }
    }
    public static function delete_request_callback()
    {
        header("Content-Type: application/json");
        $request = $_REQUEST;
        $user_id=$request['user_id'];
        if (get_current_user_id() == intval($request['user_id']))
        {
            global $wpdb;
            $output=array();
            $table_name = $wpdb->prefix . "user_prop_request";
            $result=$wpdb->delete( $table_name, array( 'id' => intval($request['r_id']) ) );

            $user_id=get_current_user_id();
            $sql = "SELECT * FROM {$table_name} WHERE user_id = {$user_id} and status='pending'";
            $pending_request=count($wpdb->get_results($sql));

            $sql = "SELECT * FROM {$table_name} WHERE user_id = {$user_id} and status='complete'";
            $complete_request=count($wpdb->get_results($sql));

            if(is_wp_error($result))
            {
                $output=array(
                    'status'=>'not_success',
                    'msg'=>'درخواست حذف نشد!',
                );
            }
            else
            {
                $output=array(
                    'status'=>'success',
                    'msg'=>'در خواست با موفقیت حذف گردید!',
                    'pending_req'=>$pending_request,
                    'complete_req'=>$complete_request
                );
            }
        }
        echo json_encode($output);
        exit();
    }


    public static function save_expert_npr_callback()
    {
        header("Content-Type: application/json");
        $request=$_POST;
        if (get_current_user_id() == intval($request['user_id']))
        {
            $user_id=intval($request['user_id']);
            $exp_id=intval($request['user_id']);
            $new_prop_request=array();
            $new_prop_request['npr_city']=sanitize_text_field($request['data']['npr_city']);
            if (isset($request['data']['npr_district']) and $request['data']['npr_district'] !='' )
            {
                $new_prop_request['npr_district']=$request['data']['npr_district'];
            }

            if (isset($request['data']['npr_deal_type']) and $request['data']['npr_deal_type'] !='')
            {
                $new_prop_request['npr_deal_type']=$request['data']['npr_deal_type'];
                switch ($request['data']['npr_deal_type'])
                {
                    case 'خرید':
                        $new_prop_request['npr_sale_price']=$request['data']['npr_price'];
                        $new_prop_request['npr_deed_type']=$request['data']['npr_deed_type'];
                        break;
                    case 'رهن و اجاره':
                        $new_prop_request['npr_rent_price']=$request['data']['npr_rent'];
                        $new_prop_request['npr_mortgage_price']=$request['data']['npr_mortgage'];
                        break;
                    case 'رهن کامل':
                        $new_prop_request['npr_mortgage_price']=$request['data']['npr_mortgage'];
                        break;
                }
            }

            if (isset($request['data']['npr_prop_type']) and $request['data']['npr_prop_type']!='') {
                $new_prop_request['npr_prop_type'] = $request['data']['npr_prop_type'];
                switch ($request['data']['npr_prop_type'])
                {
                    case 'خانه ویلایی':
                    case 'خانه ویلایی':
                    case 'ویلا':
                        $new_prop_request['npr_bedroom_count']=$request['data']['npr_bedroom_count'];
                        $new_prop_request['npr_facilities']=$request['data']['npr_facilities'];
                        $new_prop_request['npr_floor_count']=$request['data']['npr_floor_count'];
                        $new_prop_request['npr_infrastructure_area']=$request['data']['npr_infrastructure_area'];
                        break;
                    case 'مغازه تجاری':
                    case 'دفتر کار اداری':
                        $new_prop_request['npr_facilities']=$request['data']['npr_facilities'];
                        $new_prop_request['npr_floor_count']=$request['data']['npr_floor_count'];
                        $new_prop_request['npr_infrastructure_area']=$request['data']['npr_infrastructure_area'];
                        break;
                }

                if ($request['data']['npr_prop_type'] =='آپارتمان')
                {
                    if(isset($request['data']['npr_bedroom_count']) and $request['data']['npr_bedroom_count']!='')
                    {
                        $new_prop_request['npr_bedroom_count']=$request['data']['npr_bedroom_count'];
                    }

                    if(isset($request['data']['npr_facilities']) and $request['data']['npr_facilities']!='')
                    {
                        $new_prop_request['npr_facilities']=$request['data']['npr_facilities'];
                    }

                    if(isset($request['data']['npr_infrastructure_area']) and $request['data']['npr_infrastructure_area']!='')
                    {
                        $new_prop_request['npr_infrastructure_area']=$request['data']['npr_infrastructure_area'];
                    }


                    if (isset($request['data']['sj_elavator']) and $request['data']['sj_elavator']!='') {
                        $new_prop_request['elavator'] = $request['data']['sj_elavator'];
                        if( $request['data']['sj_elavator'] == 'no')
                        {
                            $new_prop_request['npr_no_elavator_floor_count']=$request['data']['no_elavator_floor_count'];
                        }
                        else
                        {
                            $new_prop_request['npr_yes_elavator_floor_count']=$request['data']['yes_elavator_floor_count'];
                        }
                    }
                }
            }




            global $wpdb;
            $table_name = $wpdb->prefix . 'user_prop_request';
            $result=$wpdb->insert($table_name,
                array(
                    'user_id' =>$user_id,
                    'exp_id' =>$exp_id,
                    'details' =>maybe_serialize( $new_prop_request ),
                    'status' =>'pending',
                    'excluded_prop' =>null,
                    'customer_name' =>$request['data']['npr_customer_name'],
                    'customer_tel' =>$request['data']['npr_customer_tel'],
                )
            );

            $user_id=get_current_user_id();
            $sql = "SELECT * FROM {$table_name} WHERE user_id = {$user_id} and status='pending'";
            $pending_request=count($wpdb->get_results($sql));

            $sql = "SELECT * FROM {$table_name} WHERE user_id = {$user_id} and status='complete'";
            $complete_request=count($wpdb->get_results($sql));

            if (is_wp_error($result))
            {
                $output=array(
                    'status' =>'not_success'
                );
            }
            else
            {
                $output=array(
                    'status' =>'success',
                    'pending_req'=>$pending_request,
                    'complete_req'=>$complete_request
                );
            }
        }
        else
        {
            $output=array(
                'status' =>'not_secure',
            );
        }

        echo json_encode($output);
        exit();
    }
    public static function get_all_exp_prop_request_callback()
    {
        header("Content-Type: application/json");
        $request = $_REQUEST;
        $user_id=$request['user_id'];
        if (get_current_user_id() == intval($request['user_id']))
        {
            require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
            header("Content-Type: application/json");

            global $wpdb;
            $table_name = $wpdb->prefix . "user_prop_request";
            $sql1 = "SELECT * FROM {$table_name} WHERE exp_id = {$user_id}";
            $total_records=$wpdb->get_results($sql1);
            $total_records_count=count($total_records);

            $limit=intval($request['length']);
            $offset= intval($request['start']);
            $sql = "SELECT * FROM {$table_name} WHERE exp_id = {$user_id}  ORDER BY date DESC limit  {$limit} offset {$offset}";
            $results=$wpdb->get_results($sql);


            date_default_timezone_set("Asia/Tehran");
            $data = array();
            $count= intval($request['start'])+1;
            foreach ($results as $result)
            {
                $nestedData = array();
                $det=maybe_unserialize($result->details);
                $nestedData[] = $count;
                $nestedData[] =$result->customer_name;
                $nestedData[] =$result->customer_tel;
                $nestedData[] = $det['npr_deal_type'].' '.$det['npr_prop_type'].'<a id="show_prop_request_detailes" data-toggle="tooltip" title="" data-original-title=" جزییات" data-request_id="'.$result->id.'">
                                                                <i class="fa fa-eye"></i>
                                                            </a>';
                $nestedData[] = jdate('d  F  Y',strtotime($result->date));
                $nestedData[] = get_user_meta($result->exp_id,'amlak_exp_name',true).'<br/><small class="text-muted">'.' کارشناس '.get_user_meta($result->exp_id,'exp_main_group',true).' ('.get_user_meta($result->exp_id,'exp_sub_group',true).')</small>';
                $nestedData[] =($result->status == 'pending')?'<span class="badge badge-warning">درحال بررسی</span>':'<span class="badge badge-success">تکمیل شده</span>';
                $opr = ($result->status == 'pending')? '
                            <button type="button" class="btn btn-outline-primary  btn-floating ">
                                <i class="fa fa-search fa-lg"  id="npr_search" data-toggle="tooltip" title="" data-original-title="فایل های مشابه این درخواست" data-request_id="'.$result->id.'"></i>
                            </button> 
                            <button type="button" class="btn btn-outline-success  btn-floating ">
                                <i class="fa fa-check fa-lg" id="npr_finish" data-toggle="tooltip" title="" data-original-title="تکمیل این درخواست" data-request_id="'.$result->id.'"></i>
                            </button>'
                    :
                    ' <button type="button" class="btn btn-outline-primary  btn-floating ">
                                <i class="fa fa-search fa-lg"  id="npr_search" data-toggle="tooltip" title="" data-original-title="2فایل های مشابه این درخواست" data-request_id="'.$result->id.'"></i>
                            </button>  ';


//                $sql = "SELECT * FROM {$table_name} WHERE id={$result->id}";
//                $exp_request=$wpdb->get_row($wpdb->prepare($sql));
                $last_search_prop=maybe_unserialize($result->last_search_prop);
               if ($last_search_prop !=null and $result->status == 'pending' )
               {
                   $excluded_prop=maybe_unserialize($result->excluded_prop);

                   $excluded_prop_ids=array();
                   foreach ($excluded_prop as $temp)
                   {
                       $excluded_prop_ids[]=$temp['prop_id'];
                   }


                   foreach ($last_search_prop as $temp2)
                   {
                       $excluded_prop_ids[]=$temp2;
                   }



                   $details=maybe_unserialize($result->details);

                   $matched_prop_arg=array(
                       'post_type' => 'aralproperty',
                       'post_status' => 'publish',
                       'post__not_in' => $excluded_prop_ids,
                       'date_query'     => array( 'after' => $result->last_search_date )
                   );

                   $meta_query = array();

                   if ( $details['npr_city'] and  $details['npr_city']!= "")
                   {
                       $meta_query[] = array(
                           'key' => 'city_name',
                           'value' => trim($details['npr_city']),
                           'compare' => 'like'
                       );
                   }

                   if ( $details['npr_district'] and  $details['npr_district']!= "")
                   {
                       if (count($details['npr_district']) > 1)
                       {

                           foreach ($details['npr_district'] as $key => $value)
                           {
                               $meta_query_districts[] = array(
                                   'key' => 'district_name',
                                   'value' => trim($value),
                                   'compare' => '=='
                               );
                           }
                           $meta_query_districts['relation'] = 'OR';
                           $meta_query[]=$meta_query_districts;

                       }
                       else
                       {
                           $meta_query[] = array(
                               'key' => 'district_name',
                               'value' => trim($details['npr_district'][0]),
                               'compare' => '=='
                           );
                       }

                   }

                   if ( $details['npr_deal_type'] and  $details['npr_deal_type']!= "")
                   {
                       $meta_query_inner=array();
                       switch ($details['npr_deal_type'])
                       {
                           case 'رهن و اجاره':
                               $status="رهن و اجاره";
                               $meta_query_inner[]=array(
                                   'key' => 'deal_type',
                                   'value' => trim($status),
                                   'compare' => '=='
                               );

                               if ($details['npr_mortgage_price'] and  $details['npr_mortgage_price']!= "")
                               {
                                   if (count($details['npr_mortgage_price']) > 1)
                                   {
                                       $meta_query_inner[] = array(
                                           'key' => 'mortgage',
                                           'value' => array($details['npr_mortgage_price'][0]*1000000, $details['npr_mortgage_price'][1]*1000000 ),
                                           'type' => 'NUMERIC',
                                           'compare' => 'BETWEEN'
                                       );
                                   }
                                   else
                                   {
                                       $meta_query_inner[] = array(
                                           'key' => 'mortgage',
                                           'value' => $details['npr_mortgage_price'][0]*1000000,
                                           'type' => 'NUMERIC',
                                           'compare' => '='
                                       );
                                   }

                               }

                               if ($details['npr_rent_price'] and  $details['npr_rent_price']!= "")
                               {
                                   if (count($details['npr_rent_price']) > 1)
                                   {
                                       $meta_query_inner[] = array(
                                           'key' => 'mortgage',
                                           'value' => array($details['npr_rent_price'][0]*1000000, $details['npr_rent_price'][1]*1000000 ),
                                           'type' => 'NUMERIC',
                                           'compare' => 'BETWEEN'
                                       );
                                   }
                                   else
                                   {
                                       $meta_query_inner[] = array(
                                           'key' => 'mortgage',
                                           'value' => $details['npr_rent_price'][0]*1000000,
                                           'type' => 'NUMERIC',
                                           'compare' => '<='
                                       );
                                   }

                               }

                               if ( $meta_query_inner > 1 )
                               {
                                   $meta_query_inner['relation'] = 'AND';
                               }
                               $meta_query[]=$meta_query_inner;

                               break;
                           case 'رهن کامل':
                               $status="رهن کامل";
                               $meta_query_inner[]=array(
                                   'key' => 'deal_type',
                                   'value' => trim($status),
                                   'compare' => '=='
                               );

                               if ($details['npr_mortgage_price'] and  $details['npr_mortgage_price']!= "")
                               {
                                   if (count($details['npr_mortgage_price']) > 1)
                                   {
                                       $meta_query_inner[] = array(
                                           'key' => 'mortgage',
                                           'value' => array($details['npr_mortgage_price'][0]*1000, $details['npr_mortgage_price'][1]*1000 ),
                                           'type' => 'NUMERIC',
                                           'compare' => 'BETWEEN'
                                       );
                                   }
                                   else
                                   {
                                       $meta_query_inner[] = array(
                                           'key' => 'mortgage',
                                           'value' => $details['npr_mortgage_price'][0]*1000,
                                           'type' => 'NUMERIC',
                                           'compare' => '<='
                                       );
                                   }

                               }

                               if ( $meta_query_inner > 1 )
                               {
                                   $meta_query_inner['relation'] = 'AND';
                               }
                               $meta_query[]=$meta_query_inner;
                               break;
                           case 'خرید':
                               $status="فروش";
                               $meta_query_inner[]=array(
                                   'key' => 'deal_type',
                                   'value' => trim($status),
                                   'compare' => '=='
                               );

                               if ($details['npr_sale_price'] and  $details['npr_sale_price']!= "")
                               {
                                   if (count($details['npr_sale_price']) > 1)
                                   {
                                       $meta_query_inner[] = array(
                                           'key' => 'price',
                                           'value' => array( $details['npr_sale_price'][0]*1000000, $details['npr_sale_price'][1]*1000000 ),
                                           'type' => 'NUMERIC',
                                           'compare' => 'BETWEEN'
                                       );
                                   }
                                   else
                                   {
                                       $meta_query_inner[] = array(
                                           'key' => 'price',
                                           'value' => $details['npr_sale_price'][0]*1000000,
                                           'type' => 'NUMERIC',
                                           'compare' => '>='
                                       );
                                   }
                               }


                               if ( $meta_query_inner > 1 )
                               {
                                   $meta_query_inner['relation'] = 'AND';
                               }
                               $meta_query[]=$meta_query_inner;
                               break;
                       }
                   }

                   if ($details['npr_prop_type'] and  $details['npr_prop_type']!= "")
                   {
                       $meta_query[] = array(
                           'key' => 'type',
                           'value' => trim($details['npr_prop_type']),
                           'compare' => '=='
                       );


                       if ( $details['npr_prop_type']!='زمین' and $details['npr_prop_type'] and $details['npr_infrastructure_area']!= "")
                       {
                           if (count($details['npr_infrastructure_area'])>1)
                           {
                               $meta_query_infrastructure_area[]=array(
                                   'key' => 'infrastructure_area',
                                   'value' => array( $details['npr_infrastructure_area'][0], $details['npr_infrastructure_area'][1] ),
                                   'type' => 'NUMERIC',
                                   'compare' => 'BETWEEN'
                               );
                           }
                           else
                           {
                               $meta_query_infrastructure_area[]=array(
                                   'key' => 'infrastructure_area',
                                   'value' => array( 20, $details['npr_infrastructure_area'][0] ),
                                   'type' => 'NUMERIC',
                                   'compare' => 'BETWEEN'
                               );
                           }
                           $meta_query[]=$meta_query_infrastructure_area;
                       }


                       if ( $details['npr_prop_type']!='زمین' and $details['npr_prop_type'] and  $details['npr_bedroom_count']!= "")
                       {
                           $meta_query_bedroom_count[] = array(
                               'key' => 'bedroom_count',
                               'value' => $details['npr_bedroom_count'],
                               'compare' => '=='
                           );
                       }


//                    if ( $details['npr_prop_type']!='زمین' and $details['npr_prop_type'] and   $details['npr_facilities']!= "")
//                    {
//                        if (count( $details['npr_facilities']) > 1)
//                        {
//
//                            foreach ( $details['npr_facilities'] as $key => $value)
//                            {
//                                $meta_query_facilities[] = array(
//                                    'key' => 'facilities',
//                                    'value' => trim($value),
//                                    'compare' => 'like'
//                                );
//                            }
//                            $meta_query_facilities['relation'] = 'AND';
//                            $meta_query[]=$meta_query_facilities;
//
//                        }
//                        else
//                        {
//                            $meta_query[] = array(
//                                'key' => 'facilities',
//                                'value' => trim( $details['npr_facilities'][0]),
//                                'compare' => 'like'
//                            );
//                        }
//                    }

                       if ( $details['npr_prop_type']!='زمین' and $details['npr_prop_type'] and $details['npr_floor_count']!= "")
                       {
                           $meta_query[] = array(
                               'key' => 'floor',
                               'value' => trim($details['npr_floor_count']),
                               'type' => 'NUMERIC',
                               'compare' => '<='
                           );
                       }

//                    if ( $details['npr_prop_type']!='زمین' and $details['npr_prop_type'] and $details['elavator']!= "")
//                    {
//                        if($details['elavator'] == 'no')
//                        {
//                            $meta_query_elavator[] = array(
//                                'key' => 'facilities',
//                                'value' => 'elevator',
//                                'compare' => 'not like'
//                            );
//
//                            $meta_query_elavator[] = array(
//                                'key' => 'floor',
//                                'value' => array( -2, $details['npr_no_elavator_floor_count'][0] ),
//                                'type' => 'NUMERIC',
//                                'compare' => 'BETWEEN'
//                            );
//                            $meta_query_elavator['relation'] = 'AND';
//                            $meta_query[]=$meta_query_elavator;
//                        }
//                        else
//                        {
//                            $meta_query_elavator[] = array(
//                                'key' => 'facilities',
//                                'value' => 'elevator',
//                                'compare' => 'like'
//                            );
//
//                            $meta_query_elavator[] = array(
//                                'key' => 'floor',
//                                'value' => array( -2, $details['npr_yes_elavator_floor_count'][0] ),
//                                'type' => 'NUMERIC',
//                                'compare' => 'BETWEEN'
//                            );
//                            $meta_query_elavator['relation'] = 'AND';
//                            $meta_query[]=$meta_query_elavator;
//                        }
//
//                    }
                   }

                   $meta_count = count( $meta_query );
                   if ( $meta_count > 1 ) {
                       $meta_query['relation'] = 'AND';
                   }

                   $matched_prop_arg['meta_query'] = $meta_query;


                   $matched_prop = new \WP_Query($matched_prop_arg);
                   $new_search_matched_prop=$matched_prop->post_count;


                   $opr.=($new_search_matched_prop > 0)?
                       '<button type="button" class="btn btn-outline-danger btn-pulse btn-floating ">
                                <b id="npr_new_added_prop" data-toggle="tooltip" title="" data-original-title="فایل های جدید برای این درخواست" data-request_id="'.$result->id.'">'.$new_search_matched_prop.'</b>
                     </button>'
                       :
                       '';
               }

                $nestedData[]=$opr;
                $nestedData[] =($result->user_id == $result->exp_id)? 'same':'not_same';
                $data[] = $nestedData;
                $count++;
            }

            $json_data = array(
                "draw" => intval($request['draw']),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
                "recordsTotal" => intval($total_records_count),  // total number of records
                "recordsFiltered" => intval($total_records_count), // total number of records after searching, if there is no searching then totalFiltered = totalData
                "data" => $data   // total data array
            );
            echo json_encode($json_data);
            exit();
        }
    }
    public static function search_request_callback()
    {
        header("Content-Type: application/json");
        $request = $_REQUEST;
        $user_id=$request['user_id'];
        if (get_current_user_id() == intval($request['user_id']) and Utility::is_user_exp(intval($request['user_id'])))
        {
            global $wpdb;

            $table_name = $wpdb->prefix . "user_prop_request";
            $r_id=intval($request['r_id']);

            $sql = "SELECT * FROM {$table_name} WHERE id={$r_id}";
            $exp_request=$wpdb->get_row($sql);

            $excluded_prop=maybe_unserialize($exp_request->excluded_prop);
            $excluded_prop_ids=array();
            foreach ($excluded_prop as $temp)
            {
                $excluded_prop_ids[]=$temp['prop_id'];
            }


            $details=maybe_unserialize($exp_request->details);

            $matched_prop_arg=array(
                'post_type' => 'aralproperty',
                'post_status' => 'publish',
                'posts_per_page' => $request['length'],
                'offset' => intval($request['start']),
                'post__not_in' => $excluded_prop_ids,
            );



            $meta_query = array();

            if ( $details['npr_city'] and  $details['npr_city']!= "")
            {
                $meta_query[] = array(
                    'key' => 'city_name',
                    'value' => trim($details['npr_city']),
                    'compare' => 'like'
                );
            }

            if ( $details['npr_district'] and  $details['npr_district']!= "")
            {
                if (count($details['npr_district']) > 1)
                {

                    foreach ($details['npr_district'] as $key => $value)
                    {
                        $meta_query_districts[] = array(
                            'key' => 'district_name',
                            'value' => trim($value),
                            'compare' => '=='
                        );
                    }
                    $meta_query_districts['relation'] = 'OR';
                    $meta_query[]=$meta_query_districts;

                }
                else
                {
                    $meta_query[] = array(
                        'key' => 'district_name',
                        'value' => trim($details['npr_district'][0]),
                        'compare' => '=='
                    );
                }

            }


            if ( $details['npr_deal_type'] and  $details['npr_deal_type']!= "")
            {
                $meta_query_inner=array();
                switch ($details['npr_deal_type'])
                {
                    case 'رهن و اجاره':
                        $status="رهن و اجاره";
                        $meta_query_inner[]=array(
                            'key' => 'deal_type',
                            'value' => trim($status),
                            'compare' => '=='
                        );

                        if ($details['npr_mortgage_price'] and  $details['npr_mortgage_price']!= "")
                        {
                            if (count($details['npr_mortgage_price']) > 1)
                            {
                                $meta_query_inner[] = array(
                                    'key' => 'mortgage',
                                    'value' => array($details['npr_mortgage_price'][0]*1000000, $details['npr_mortgage_price'][1]*1000000 ),
                                    'type' => 'NUMERIC',
                                    'compare' => 'BETWEEN'
                                );
                            }
                            else
                            {
                                $meta_query_inner[] = array(
                                    'key' => 'mortgage',
                                    'value' => $details['npr_mortgage_price'][0]*1000000,
                                    'type' => 'NUMERIC',
                                    'compare' => '='
                                );
                            }

                        }

                        if ($details['npr_rent_price'] and  $details['npr_rent_price']!= "")
                        {
                            if (count($details['npr_rent_price']) > 1)
                            {
                                $meta_query_inner[] = array(
                                    'key' => 'mortgage',
                                    'value' => array($details['npr_rent_price'][0]*1000000, $details['npr_rent_price'][1]*1000000 ),
                                    'type' => 'NUMERIC',
                                    'compare' => 'BETWEEN'
                                );
                            }
                            else
                            {
                                $meta_query_inner[] = array(
                                    'key' => 'mortgage',
                                    'value' => $details['npr_rent_price'][0]*1000000,
                                    'type' => 'NUMERIC',
                                    'compare' => '<='
                                );
                            }

                        }

                        if ( $meta_query_inner > 1 )
                        {
                            $meta_query_inner['relation'] = 'AND';
                        }
                        $meta_query[]=$meta_query_inner;

                        break;
                    case 'رهن کامل':
                        $status="رهن کامل";
                        $meta_query_inner[]=array(
                            'key' => 'deal_type',
                            'value' => trim($status),
                            'compare' => '=='
                        );

                        if ($details['npr_mortgage_price'] and  $details['npr_mortgage_price']!= "")
                        {
                            if (count($details['npr_mortgage_price']) > 1)
                            {
                                $meta_query_inner[] = array(
                                    'key' => 'mortgage',
                                    'value' => array($details['npr_mortgage_price'][0]*1000, $details['npr_mortgage_price'][1]*1000 ),
                                    'type' => 'NUMERIC',
                                    'compare' => 'BETWEEN'
                                );
                            }
                            else
                            {
                                $meta_query_inner[] = array(
                                    'key' => 'mortgage',
                                    'value' => $details['npr_mortgage_price'][0]*1000,
                                    'type' => 'NUMERIC',
                                    'compare' => '<='
                                );
                            }

                        }

                        if ( $meta_query_inner > 1 )
                        {
                            $meta_query_inner['relation'] = 'AND';
                        }
                        $meta_query[]=$meta_query_inner;
                        break;
                    case 'خرید':
                        $status="فروش";
                        $meta_query_inner[]=array(
                            'key' => 'deal_type',
                            'value' => trim($status),
                            'compare' => '=='
                        );

                        if ($details['npr_sale_price'] and  $details['npr_sale_price']!= "")
                        {
                            if (count($details['npr_sale_price']) > 1)
                            {
                                $meta_query_inner[] = array(
                                    'key' => 'price',
                                    'value' => array( $details['npr_sale_price'][0]*1000000, $details['npr_sale_price'][1]*1000000 ),
                                    'type' => 'NUMERIC',
                                    'compare' => 'BETWEEN'
                                );
                            }
                            else
                            {
                                $meta_query_inner[] = array(
                                    'key' => 'price',
                                    'value' => $details['npr_sale_price'][0]*1000000,
                                    'type' => 'NUMERIC',
                                    'compare' => '>='
                                );
                            }
                        }


                        if ( $meta_query_inner > 1 )
                        {
                            $meta_query_inner['relation'] = 'AND';
                        }
                        $meta_query[]=$meta_query_inner;
                        break;
                }
            }


            if ($details['npr_prop_type'] and  $details['npr_prop_type']!= "")
            {
                $meta_query[] = array(
                    'key' => 'type',
                    'value' => trim($details['npr_prop_type']),
                    'compare' => '=='
                );


                if ( $details['npr_prop_type']!='زمین' and $details['npr_prop_type'] and $details['npr_infrastructure_area']!= "")
                {
                    if (count($details['npr_infrastructure_area'])>1)
                    {
                        $meta_query_infrastructure_area[]=array(
                            'key' => 'infrastructure_area',
                            'value' => array( $details['npr_infrastructure_area'][0], $details['npr_infrastructure_area'][1] ),
                            'type' => 'NUMERIC',
                            'compare' => 'BETWEEN'
                        );
                    }
                    else
                    {
                        $meta_query_infrastructure_area[]=array(
                            'key' => 'infrastructure_area',
                            'value' => array( 20, $details['npr_infrastructure_area'][0] ),
                            'type' => 'NUMERIC',
                            'compare' => 'BETWEEN'
                        );
                    }
                    $meta_query[]=$meta_query_infrastructure_area;
                }


                if ( $details['npr_prop_type']!='زمین' and $details['npr_prop_type'] and  $details['npr_bedroom_count']!= "")
                {
                    $meta_query_bedroom_count[] = array(
                        'key' => 'bedroom_count',
                        'value' => $details['npr_bedroom_count'],
                        'compare' => '=='
                    );
                }


//                if ( $details['npr_prop_type']!='زمین' and $details['npr_prop_type'] and   $details['npr_facilities']!= "")
//                {
//                    if (count( $details['npr_facilities']) > 1)
//                    {
//
//                        foreach ( $details['npr_facilities'] as $key => $value)
//                        {
//                            $meta_query_facilities[] = array(
//                                'key' => 'facilities',
//                                'value' => trim($value),
//                                'compare' => 'like'
//                            );
//                        }
//                        $meta_query_facilities['relation'] = 'AND';
//                        $meta_query[]=$meta_query_facilities;
//
//                    }
//                    else
//                    {
//                        $meta_query[] = array(
//                            'key' => 'facilities',
//                            'value' => trim( $details['npr_facilities'][0]),
//                            'compare' => 'like'
//                        );
//                    }
//                }

                if ( $details['npr_prop_type']!='زمین' and $details['npr_prop_type'] and $details['npr_floor_count']!= "")
                {
                        $meta_query[] = array(
                            'key' => 'floor',
                            'value' => trim($details['npr_floor_count']),
                            'type' => 'NUMERIC',
                            'compare' => '<='
                        );
                }

//                if ( $details['npr_prop_type']!='زمین' and $details['npr_prop_type'] and $details['elavator']!= "")
//                {
//                    if($details['elavator'] == 'no')
//                    {
//                        $meta_query_elavator[] = array(
//                            'key' => 'facilities',
//                            'value' => 'elevator',
//                            'compare' => 'not like'
//                        );
//
//                        $meta_query_elavator[] = array(
//                            'key' => 'floor',
//                            'value' => array( -2, $details['npr_no_elavator_floor_count'][0] ),
//                            'type' => 'NUMERIC',
//                            'compare' => 'BETWEEN'
//                        );
//                        $meta_query_elavator['relation'] = 'AND';
//                        $meta_query[]=$meta_query_elavator;
//                    }
//                    else
//                    {
//                        $meta_query_elavator[] = array(
//                            'key' => 'facilities',
//                            'value' => 'elevator',
//                            'compare' => 'like'
//                        );
//
//                        $meta_query_elavator[] = array(
//                            'key' => 'floor',
//                            'value' => array( -2, $details['npr_yes_elavator_floor_count'][0] ),
//                            'type' => 'NUMERIC',
//                            'compare' => 'BETWEEN'
//                        );
//                        $meta_query_elavator['relation'] = 'AND';
//                        $meta_query[]=$meta_query_elavator;
//                    }
//
//                }
            }

            $meta_count = count( $meta_query );
            if ( $meta_count > 1 ) {
                $meta_query['relation'] = 'AND';
            }

            $matched_prop_arg['meta_query'] = $meta_query;


            $matched_prop = new \WP_Query($matched_prop_arg);
            $data = array();
            $count= intval($request['start'])+1;
            $matched_porp_ids=array();
            while ($matched_prop->have_posts())
            {
                $matched_prop->the_post();
                $matched_porp_ids[]=get_the_ID();
                $nestedData = array();
                $nestedData[] = $count;
                $nestedData[] = '<a href="'.home_url('prop_det'.'?p_id='.get_the_ID()).'" target="_blank">'.get_post_meta(get_the_ID(),'type',true).' '.get_post_meta(get_the_ID(),'infrastructure_area',true).' '.'متری'.'</a>';
                $nestedData[] = get_post_meta(get_the_ID(),'district_name',true).' - '.get_post_meta(get_the_ID(),'street',true);
                if (is_request_from_office())
                {
                    $nestedData[] = get_post_meta(get_the_ID(),'landlord_name',true).'('.get_post_meta(get_the_ID(),'phone1',true).')';
                }
                else
                {
                    $nestedData[] = 'ip شما مطابقت ندارد';
                }
                $nestedData[] = '<i class="fa fa-remove fa-lg text-danger" id="exclude_prop" data-toggle="tooltip" title="" data-original-title="حذف از لیست فایل های مشابه" data-request_id="'. $r_id.'" data-prop_id="'.get_the_ID().'"></i>';

                $data[] = $nestedData;

                $count++;

            }
            wp_reset_postdata();

            $wpdb->update(
                $table_name,
                array(
                    'last_search_prop' => maybe_serialize($matched_porp_ids),
                    'last_search_date' => $date = date('Y-m-d H:i:s'),
                ),
                array( 'id' =>$r_id ),
                array(
                    '%s',
                    '%s',
                ),
                array( '%d' )
            );

            $json_data = array(
                "draw" => intval($request['draw']),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
                "recordsTotal" => intval($matched_prop->found_posts),  // total number of records
                "recordsFiltered" => intval($matched_prop->found_posts), // total number of records after searching, if there is no searching then totalFiltered = totalData
                "data" => $data   // total data array
            );

            echo json_encode($json_data);
            exit();
        }

    }
    public static function exclude_prop_callback()
    {
        header("Content-Type: application/json");
        $request = $_REQUEST;
        $user_id=$request['user_id'];
        if (get_current_user_id() == intval($request['user_id']) and Utility::is_user_exp(intval($request['user_id'])))
        {
            global $wpdb;
            $table_name = $wpdb->prefix . "user_prop_request";
            $r_id=intval($request['request_id']);
            $prop_id=intval($request['prop_id']);
            $description=strval($request['description']);

            $sql = "SELECT excluded_prop FROM {$table_name} WHERE id={$r_id}";
            $excluded_prop=$wpdb->get_var($wpdb->prepare($sql));
            $excluded_prop=maybe_unserialize($excluded_prop);
            $prop_exist=false;
//
//            echo json_encode($excluded_prop);
//            exit;
            if (!is_null($excluded_prop))
            {
                foreach ($excluded_prop as $temp)
                {
                    if($temp['prop_id'] == $prop_id)
                    {
                        $prop_exist=true;
                    }
                }
            }


            if (!$prop_exist)
            {
                $excluded_prop[]=array(
                    'prop_id' => $prop_id,
                    'description'=> $description
                );

                $result=$wpdb->update(
                    $table_name,
                    array(
                        'excluded_prop' =>  maybe_serialize($excluded_prop),
                    ),
                    array( 'id' =>$r_id ),
                    array(
                        '%s',	// value1
                    ),
                    array( '%d' )
                );


                if(!is_wp_error($result))
                {
                    $outout=array(
                        'status' => 'update',
                        'msg' => 'ملک مد نظر از لیست فایل های پیشنهادی حدف گردید! ',
                    );
                }
                else
                {
                    $outout=array(
                        'status' => 'update_error',
                        'msg' => 'هنگام حذف ملک از لیست فایل های پیشنهادی خطایی رخ داده است!',
                    );
                }
            }
            else
            {
                $outout=array(
                    'status' => 'prop_exist',
                    'msg' => 'فایل مدنظر شما از قبل از لیست فایل های پیشنهادی حذف شده است!',
                );
            }

            echo json_encode($outout);
            exit();
        }

    }
    public static function complete_request_callback()
    {
        header("Content-Type: application/json");
        $request = $_REQUEST;
        $user_id=$request['user_id'];
        if (get_current_user_id() == intval($request['user_id']) and Utility::is_user_exp(intval($request['user_id'])))
        {
            global $wpdb;
            $table_name = $wpdb->prefix . "user_prop_request";
            $r_id=intval($request['request_id']);
            $description=strval($request['description']);
            $result=$wpdb->update(
                $table_name,
                array(
                    'description' =>$description,
                    'status' =>'completed',
                ),
                array( 'id' =>$r_id ),
                array(
                    '%s',
                ),
                array( '%d' )
            );


            if(!is_wp_error($result))
            {
                $user_id=get_current_user_id();
                $sql = "SELECT * FROM {$table_name} WHERE user_id = {$user_id} and status='pending'";
                $pending_request=count($wpdb->get_results($sql));

                $sql = "SELECT * FROM {$table_name} WHERE user_id = {$user_id} and status='completed'";
                $complete_request=count($wpdb->get_results($sql));

                $output=array(
                    'status' => 'update',
                    'msg' => 'وضعیت درخواست مدنظر با موفقیت به روزرسانی گردید! ',
                    'pending_request' =>$pending_request,
                    'complete_request' =>$complete_request,
                );
            }
            else
            {
                $output=array(
                    'status' => 'update_error',
                    'msg' => 'هنگام ویرایش وضعیت این درخواست خطایی رخ داده است!',
                );
            }
            echo json_encode($output);
            exit();
        }

    }
    public static function matched_new_add_prop_callback()
    {
        header("Content-Type: application/json");
        $request = $_REQUEST;
        $user_id=$request['user_id'];
        if (get_current_user_id() == intval($request['user_id']) and Utility::is_user_exp(intval($request['user_id'])))
        {
            global $wpdb;

            $table_name = $wpdb->prefix . "user_prop_request";
            $r_id=intval($request['request_id']);
            $sql="SELECT * FROM {$table_name} WHERE id={$r_id}";

            $result=$wpdb->get_row($sql);

            $excluded_prop=maybe_unserialize($result->excluded_prop);
            $excluded_prop_ids=array();
            foreach ($excluded_prop as $temp)
            {
                $excluded_prop_ids[]=$temp['prop_id'];
            }

            $last_search_prop=maybe_unserialize($result->last_search_prop);

            foreach ($last_search_prop as $temp2)
            {
                $excluded_prop_ids[]=$temp2;
            }



            $details=maybe_unserialize($result->details);

            $matched_prop_arg=array(
                'post_type' => 'aralproperty',
                'post_status' => 'publish',
                'post__not_in' => $excluded_prop_ids,
                'date_query'     => array( 'after' => $result->last_search_date )
            );

            $meta_query = array();

            if ( $details['npr_city'] and  $details['npr_city']!= "")
            {
                $meta_query[] = array(
                    'key' => 'city_name',
                    'value' => trim($details['npr_city']),
                    'compare' => 'like'
                );
            }

            if ( $details['npr_district'] and  $details['npr_district']!= "")
            {
                if (count($details['npr_district']) > 1)
                {

                    foreach ($details['npr_district'] as $key => $value)
                    {
                        $meta_query_districts[] = array(
                            'key' => 'district_name',
                            'value' => trim($value),
                            'compare' => '=='
                        );
                    }
                    $meta_query_districts['relation'] = 'OR';
                    $meta_query[]=$meta_query_districts;

                }
                else
                {
                    $meta_query[] = array(
                        'key' => 'district_name',
                        'value' => trim($details['npr_district'][0]),
                        'compare' => '=='
                    );
                }

            }

            if ( $details['npr_deal_type'] and  $details['npr_deal_type']!= "")
            {
                $meta_query_inner=array();
                switch ($details['npr_deal_type'])
                {
                    case 'رهن و اجاره':
                        $status="رهن و اجاره";
                        $meta_query_inner[]=array(
                            'key' => 'deal_type',
                            'value' => trim($status),
                            'compare' => '=='
                        );

                        if ($details['npr_mortgage_price'] and  $details['npr_mortgage_price']!= "")
                        {
                            if (count($details['npr_mortgage_price']) > 1)
                            {
                                $meta_query_inner[] = array(
                                    'key' => 'mortgage',
                                    'value' => array($details['npr_mortgage_price'][0]*1000000, $details['npr_mortgage_price'][1]*1000000 ),
                                    'type' => 'NUMERIC',
                                    'compare' => 'BETWEEN'
                                );
                            }
                            else
                            {
                                $meta_query_inner[] = array(
                                    'key' => 'mortgage',
                                    'value' => $details['npr_mortgage_price'][0]*1000000,
                                    'type' => 'NUMERIC',
                                    'compare' => '<='
                                );
                            }

                        }

                        if ($details['npr_rent_price'] and  $details['npr_rent_price']!= "")
                        {
                            if (count($details['npr_rent_price']) > 1)
                            {
                                $meta_query_inner[] = array(
                                    'key' => 'mortgage',
                                    'value' => array($details['npr_rent_price'][0]*1000000, $details['npr_rent_price'][1]*1000000 ),
                                    'type' => 'NUMERIC',
                                    'compare' => 'BETWEEN'
                                );
                            }
                            else
                            {
                                $meta_query_inner[] = array(
                                    'key' => 'mortgage',
                                    'value' => $details['npr_rent_price'][0]*1000000,
                                    'type' => 'NUMERIC',
                                    'compare' => '<='
                                );
                            }

                        }

                        if ( $meta_query_inner > 1 )
                        {
                            $meta_query_inner['relation'] = 'AND';
                        }
                        $meta_query[]=$meta_query_inner;

                        break;
                    case 'رهن کامل':
                        $status="رهن کامل";
                        $meta_query_inner[]=array(
                            'key' => 'deal_type',
                            'value' => trim($status),
                            'compare' => '=='
                        );

                        if ($details['npr_mortgage_price'] and  $details['npr_mortgage_price']!= "")
                        {
                            if (count($details['npr_mortgage_price']) > 1)
                            {
                                $meta_query_inner[] = array(
                                    'key' => 'mortgage',
                                    'value' => array($details['npr_mortgage_price'][0]*1000, $details['npr_mortgage_price'][1]*1000 ),
                                    'type' => 'NUMERIC',
                                    'compare' => 'BETWEEN'
                                );
                            }
                            else
                            {
                                $meta_query_inner[] = array(
                                    'key' => 'mortgage',
                                    'value' => $details['npr_mortgage_price'][0]*1000,
                                    'type' => 'NUMERIC',
                                    'compare' => '<='
                                );
                            }

                        }

                        if ( $meta_query_inner > 1 )
                        {
                            $meta_query_inner['relation'] = 'AND';
                        }
                        $meta_query[]=$meta_query_inner;
                        break;
                    case 'خرید':
                        $status="فروش";
                        $meta_query_inner[]=array(
                            'key' => 'deal_type',
                            'value' => trim($status),
                            'compare' => '=='
                        );

                        if ($details['npr_sale_price'] and  $details['npr_sale_price']!= "")
                        {
                            if (count($details['npr_sale_price']) > 1)
                            {
                                $meta_query_inner[] = array(
                                    'key' => 'price',
                                    'value' => array( $details['npr_sale_price'][0]*1000000, $details['npr_sale_price'][1]*1000000 ),
                                    'type' => 'NUMERIC',
                                    'compare' => 'BETWEEN'
                                );
                            }
                            else
                            {
                                $meta_query_inner[] = array(
                                    'key' => 'price',
                                    'value' => $details['npr_sale_price'][0]*1000000,
                                    'type' => 'NUMERIC',
                                    'compare' => '<='
                                );
                            }
                        }


                        if ( $meta_query_inner > 1 )
                        {
                            $meta_query_inner['relation'] = 'AND';
                        }
                        $meta_query[]=$meta_query_inner;
                        break;
                }
            }

            if ($details['npr_prop_type'] and  $details['npr_prop_type']!= "")
            {
                $meta_query[] = array(
                    'key' => 'type',
                    'value' => trim($details['npr_prop_type']),
                    'compare' => '=='
                );


                if ( $details['npr_prop_type']!='زمین' and $details['npr_prop_type'] and $details['npr_infrastructure_area']!= "")
                {
                    if (count($details['npr_infrastructure_area'])>1)
                    {
                        $meta_query_infrastructure_area[]=array(
                            'key' => 'infrastructure_area',
                            'value' => array( $details['npr_infrastructure_area'][0], $details['npr_infrastructure_area'][1] ),
                            'type' => 'NUMERIC',
                            'compare' => 'BETWEEN'
                        );
                    }
                    else
                    {
                        $meta_query_infrastructure_area[]=array(
                            'key' => 'infrastructure_area',
                            'value' =>$details['npr_infrastructure_area'][0],
                            'type' => 'NUMERIC',
                            'compare' => '<='
                        );
                    }
                    $meta_query[]=$meta_query_infrastructure_area;
                }

                if ( $details['npr_prop_type']!='زمین' and $details['npr_prop_type'] and  $details['npr_bedroom_count']!= "")
                {
                    $meta_query_bedroom_count[] = array(
                        'key' => 'bedroom_count',
                        'value' => $details['npr_bedroom_count'],
                        'compare' => '=='
                    );
                }


//                if ( $result['npr_prop_type']!='زمین' and $result['npr_prop_type'] and   $result['npr_facilities']!= "")
//                {
//                    if (count( $result['npr_facilities']) > 1)
//                    {
//
//                        foreach ( $result['npr_facilities'] as $key => $value)
//                        {
//                            $meta_query_facilities[] = array(
//                                'key' => 'facilities',
//                                'value' => trim($value),
//                                'compare' => 'like'
//                            );
//                        }
//                        $meta_query_facilities['relation'] = 'AND';
//                        $meta_query[]=$meta_query_facilities;
//
//                    }
//                    else
//                    {
//                        $meta_query[] = array(
//                            'key' => 'facilities',
//                            'value' => trim( $result['npr_facilities'][0]),
//                            'compare' => 'like'
//                        );
//                    }
//                }

                if ( $details['npr_prop_type']!='زمین' and $details['npr_prop_type'] and $details['npr_floor_count']!= "")
                {
                    $meta_query[] = array(
                        'key' => 'floor',
                        'value' => trim($details['npr_floor_count']),
                        'type' => 'NUMERIC',
                        'compare' => '<='
                    );
                }

//                if ( $result['npr_prop_type']!='زمین' and $result['npr_prop_type'] and $result['elavator']!= "")
//                {
//                    if($result['elavator'] == 'no')
//                    {
//                        $meta_query_elavator[] = array(
//                            'key' => 'facilities',
//                            'value' => 'elevator',
//                            'compare' => 'not like'
//                        );
//
//                        $meta_query_elavator[] = array(
//                            'key' => 'floor',
//                            'value' => array( -2, $result['npr_no_elavator_floor_count'][0] ),
//                            'type' => 'NUMERIC',
//                            'compare' => 'BETWEEN'
//                        );
//                        $meta_query_elavator['relation'] = 'AND';
//                        $meta_query[]=$meta_query_elavator;
//                    }
//                    else
//                    {
//                        $meta_query_elavator[] = array(
//                            'key' => 'facilities',
//                            'value' => 'elevator',
//                            'compare' => 'like'
//                        );
//
//                        $meta_query_elavator[] = array(
//                            'key' => 'floor',
//                            'value' => array( -2, $result['npr_yes_elavator_floor_count'][0] ),
//                            'type' => 'NUMERIC',
//                            'compare' => 'BETWEEN'
//                        );
//                        $meta_query_elavator['relation'] = 'AND';
//                        $meta_query[]=$meta_query_elavator;
//                    }
//
//                }
            }

            $meta_count = count( $meta_query );
            if ( $meta_count > 1 ) {
                $meta_query['relation'] = 'AND';
            }

            $matched_prop_arg['meta_query'] = $meta_query;

            $matched_prop = new \WP_Query($matched_prop_arg);

            $new_search_matched_prop=array();
            while ($matched_prop->have_posts())
            {
                $matched_prop->the_post();
                $new_search_matched_prop[]=get_the_ID();
            }
            wp_reset_postdata();


            $count= intval($request['start'])+1;
            $data=array();
            foreach ($new_search_matched_prop as $new_result_id)
            {   $nestedData = array();
                    $nestedData[] = $count;
                    $nestedData[] = '<a href="'.home_url('prop_det'.'?p_id='.$new_result_id).'" target="_blank">'.get_post_meta($new_result_id,'deal_type',true).' '.get_post_meta($new_result_id,'type',true).' '.get_post_meta($new_result_id,'infrastructure_area',true).' '.'متری'.'</a>';
                    $nestedData[] = get_post_meta($new_result_id,'city_name',true).' - '.get_post_meta($new_result_id,'district_name',true).' - '.get_post_meta($new_result_id,'street',true);
                    if (is_request_from_office())
                    {
                        $nestedData[] = get_post_meta($new_result_id,'landlord_name',true).'('.get_post_meta($new_result_id,'phone1',true).')';
                    }
                    else
                    {
                        $nestedData[] = 'ip شما مطابقت ندارد';
                    }
                    $nestedData[] = '<i class="fa fa-remove fa-lg text-danger" id="new_result_exclude_prop" data-toggle="tooltip" title="" data-original-title="حذف از لیست فایل های مشابه" data-request_id="'.$request['request_id'].'" data-prop_id="'.$new_result_id.'"></i>';
                    $data[] = $nestedData;

                    $count++;
            }

            $json_data = array(
                "draw" => intval($request['draw']),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
                "recordsTotal" => $count,  // total number of records
                "recordsFiltered" => $count, // total number of records after searching, if there is no searching then totalFiltered = totalData
                "data" => $data   // total data array
            );

            echo json_encode($json_data);
            exit();
        }

    }
    public static function new_result_exclude_prop_callback()
    {
        header("Content-Type: application/json");
        $request = $_REQUEST;
        $user_id=$request['user_id'];
        if (get_current_user_id() == intval($request['user_id']) and Utility::is_user_exp(intval($request['user_id'])))
        {
            global $wpdb;
            $table_name = $wpdb->prefix . "user_prop_request";
            $r_id=intval($request['request_id']);
            $prop_id=intval($request['prop_id']);
            $description=strval($request['description']);

            $sql = "SELECT excluded_prop FROM {$table_name} WHERE id={$r_id}";
            $excluded_prop=$wpdb->get_var($wpdb->prepare($sql));
            $excluded_prop=maybe_unserialize($excluded_prop);
            $prop_exist=false;
//
//            echo json_encode($excluded_prop);
//            exit;
            if (!is_null($excluded_prop))
            {
                foreach ($excluded_prop as $temp)
                {
                    if($temp['prop_id'] == $prop_id)
                    {
                        $prop_exist=true;
                    }
                }
            }


            if (!$prop_exist)
            {
                $excluded_prop[]=array(
                    'prop_id' => $prop_id,
                    'description'=> $description
                );

                $result=$wpdb->update(
                    $table_name,
                    array(
                        'excluded_prop' =>  maybe_serialize($excluded_prop),
                    ),
                    array( 'id' =>$r_id ),
                    array(
                        '%s',	// value1
                    ),
                    array( '%d' )
                );


                if(!is_wp_error($result))
                {
                    $outout=array(
                        'status' => 'update',
                        'msg' => 'ملک مد نظر از لیست فایل های پیشنهادی حدف گردید! ',
                    );
                }
                else
                {
                    $outout=array(
                        'status' => 'update_error',
                        'msg' => 'هنگام حذف ملک از لیست فایل های پیشنهادی خطایی رخ داده است!',
                    );
                }
            }
            else
            {
                $outout=array(
                    'status' => 'prop_exist',
                    'msg' => 'فایل مدنظر شما از قبل از لیست فایل های پیشنهادی حذف شده است!',
                );
            }

            echo json_encode($outout);
            exit();
        }

    }
    public static function complete_all_new_result_callback()
    {
        header("Content-Type: application/json");
        $request = $_REQUEST;
        $user_id=$request['user_id'];
        if (get_current_user_id() == intval($request['user_id']) and Utility::is_user_exp(intval($request['user_id'])))
        {
            global $wpdb;
            $table_name = $wpdb->prefix . "user_prop_request";
            $r_id=intval($request['request_id']);

            $sql = "SELECT details FROM {$table_name} WHERE user_id = {$user_id} and id={$r_id}";
            $result=$wpdb->get_var($wpdb->prepare($sql));
            $result=maybe_unserialize($result);
            $matched_prop_arg=array(
                'post_type' => 'aralproperty',
                'post_status' => 'publish',
                'posts_per_page' => -1,

            );
            $meta_query = array();

            if ( $result['npr_city'] and  $result['npr_city']!= "")
            {
                $meta_query[] = array(
                    'key' => 'city_name',
                    'value' => trim($result['npr_city']),
                    'compare' => 'like'
                );
            }

            if ( $result['npr_district'] and  $result['npr_district']!= "")
            {
                if (count($result['npr_district']) > 1)
                {

                    foreach ($result['npr_district'] as $key => $value)
                    {
                        $meta_query_districts[] = array(
                            'key' => 'district_name',
                            'value' => trim($value),
                            'compare' => '=='
                        );
                    }
                    $meta_query_districts['relation'] = 'OR';
                    $meta_query[]=$meta_query_districts;

                }
                else
                {
                    $meta_query[] = array(
                        'key' => 'district_name',
                        'value' => trim($result['npr_district'][0]),
                        'compare' => '=='
                    );
                }

            }


            if ( $result['npr_deal_type'] and  $result['npr_deal_type']!= "")
            {
                $meta_query_inner=array();
                switch ($result['npr_deal_type'])
                {
                    case 'رهن و اجاره':
                        $status="رهن و اجاره";
                        $meta_query_inner[]=array(
                            'key' => 'deal_type',
                            'value' => trim($status),
                            'compare' => '=='
                        );

                        if ($result['npr_mortgage_price'] and  $result['npr_mortgage_price']!= "")
                        {
                            if (count($result['npr_mortgage_price']) > 1)
                            {
                                $meta_query_inner[] = array(
                                    'key' => 'mortgage',
                                    'value' => array($result['npr_mortgage_price'][0]*1000000, $result['npr_mortgage_price'][1]*1000000 ),
                                    'type' => 'NUMERIC',
                                    'compare' => 'BETWEEN'
                                );
                            }
                            else
                            {
                                $meta_query_inner[] = array(
                                    'key' => 'mortgage',
                                    'value' => $result['npr_mortgage_price']*1000000,
                                    'type' => 'NUMERIC',
                                    'compare' => '<='
                                );
                            }

                        }

                        if ($result['npr_rent_price'] and  $result['npr_rent_price']!= "")
                        {
                            if (count($result['npr_rent_price']) > 1)
                            {
                                $meta_query_inner[] = array(
                                    'key' => 'mortgage',
                                    'value' => array($result['npr_rent_price'][0]*1000000, $result['npr_rent_price'][1]*1000000 ),
                                    'type' => 'NUMERIC',
                                    'compare' => 'BETWEEN'
                                );
                            }
                            else
                            {
                                $meta_query_inner[] = array(
                                    'key' => 'mortgage',
                                    'value' => $result['npr_rent_price']*1000000,
                                    'type' => 'NUMERIC',
                                    'compare' => '<='
                                );
                            }

                        }

                        if ( $meta_query_inner > 1 )
                        {
                            $meta_query_inner['relation'] = 'AND';
                        }
                        $meta_query[]=$meta_query_inner;

                        break;
                    case 'رهن کامل':
                        $status="رهن کامل";
                        $meta_query_inner[]=array(
                            'key' => 'deal_type',
                            'value' => trim($status),
                            'compare' => '=='
                        );

                        if ($result['npr_mortgage_price'] and  $result['npr_mortgage_price']!= "")
                        {
                            if (count($result['npr_mortgage_price']) > 1)
                            {
                                $meta_query_inner[] = array(
                                    'key' => 'mortgage',
                                    'value' => array($result['npr_mortgage_price'][0]*1000, $result['npr_mortgage_price'][1]*1000 ),
                                    'type' => 'NUMERIC',
                                    'compare' => 'BETWEEN'
                                );
                            }
                            else
                            {
                                $meta_query_inner[] = array(
                                    'key' => 'mortgage',
                                    'value' => $result['npr_mortgage_price']*1000,
                                    'type' => 'NUMERIC',
                                    'compare' => '<='
                                );
                            }

                        }

                        if ( $meta_query_inner > 1 )
                        {
                            $meta_query_inner['relation'] = 'AND';
                        }
                        $meta_query[]=$meta_query_inner;
                        break;
                    case 'خرید':
                        $status="فروش";
                        $meta_query_inner[]=array(
                            'key' => 'deal_type',
                            'value' => trim($status),
                            'compare' => '=='
                        );

                        if ($result['npr_sale_price'] and  $result['npr_sale_price']!= "")
                        {
                            if (count($result['npr_sale_price']) > 1)
                            {
                                $meta_query_inner[] = array(
                                    'key' => 'price',
                                    'value' => array( $result['npr_sale_price'][0]*1000000, $result['npr_sale_price'][1]*1000000 ),
                                    'type' => 'NUMERIC',
                                    'compare' => 'BETWEEN'
                                );
                            }
                            else
                            {
                                $meta_query_inner[] = array(
                                    'key' => 'price',
                                    'value' => $result['npr_sale_price'][0]*1000000,
                                    'type' => 'NUMERIC',
                                    'compare' => '<='
                                );
                            }
                        }


                        if ( $meta_query_inner > 1 )
                        {
                            $meta_query_inner['relation'] = 'AND';
                        }
                        $meta_query[]=$meta_query_inner;
                        break;
                }
            }

            if ($result['npr_prop_type'] and  $result['npr_prop_type']!= "")
            {
                $meta_query[] = array(
                    'key' => 'type',
                    'value' => trim($result['npr_prop_type']),
                    'compare' => '=='
                );


                if ( $result['npr_prop_type']!='زمین' and $result['npr_prop_type'] and $result['npr_infrastructure_area']!= "")
                {
                    if (count($result['npr_infrastructure_area'])>1)
                    {
                        $meta_query_infrastructure_area[]=array(
                            'key' => 'infrastructure_area',
                            'value' => array( $result['npr_infrastructure_area'][0], $result['npr_infrastructure_area'][1] ),
                            'type' => 'NUMERIC',
                            'compare' => 'BETWEEN'
                        );
                    }
                    else
                    {
                        $meta_query_infrastructure_area[]=array(
                            'key' => 'infrastructure_area',
                            'value' =>$result['npr_infrastructure_area'][0],
                            'type' => 'NUMERIC',
                            'compare' => '<='
                        );
                    }
                    $meta_query[]=$meta_query_infrastructure_area;
                }

                if ( $result['npr_prop_type']!='زمین' and $result['npr_prop_type'] and  $result['npr_bedroom_count']!= "")
                {
                    $meta_query_bedroom_count[] = array(
                        'key' => 'bedroom_count',
                        'value' => $result['npr_bedroom_count'],
                        'compare' => '=='
                    );
                }


                if ( $result['npr_prop_type']!='زمین' and $result['npr_prop_type'] and   $result['npr_facilities']!= "")
                {
                    if (count( $result['npr_facilities']) > 1)
                    {

                        foreach ( $result['npr_facilities'] as $key => $value)
                        {
                            $meta_query_facilities[] = array(
                                'key' => 'facilities',
                                'value' => trim($value),
                                'compare' => 'like'
                            );
                        }
                        $meta_query_facilities['relation'] = 'AND';
                        $meta_query[]=$meta_query_facilities;

                    }
                    else
                    {
                        $meta_query[] = array(
                            'key' => 'facilities',
                            'value' => trim( $result['npr_facilities'][0]),
                            'compare' => 'like'
                        );
                    }
                }

                if ( $result['npr_prop_type']!='زمین' and $result['npr_prop_type'] and $result['npr_floor_count']!= "")
                {
                    $meta_query[] = array(
                        'key' => 'floor',
                        'value' => trim($result['npr_floor_count']),
                        'type' => 'NUMERIC',
                        'compare' => '<='
                    );
                }
            }

            $meta_count = count( $meta_query );
            if ( $meta_count > 1 ) {
                $meta_query['relation'] = 'AND';
            }

            $matched_prop_arg['meta_query'] = $meta_query;

            $matched_prop = new \WP_Query($matched_prop_arg);
            $matched_porp_ids=array();
            while ($matched_prop->have_posts())
            {
                $matched_prop->the_post();
                $matched_porp_ids[]=get_the_ID();
            }
            wp_reset_postdata();

            $update_result=$wpdb->update(
                $table_name,
                array(
                    'last_search_prop' => maybe_serialize($matched_porp_ids),
                ),
                array( 'id' =>$r_id ),
                array(
                    '%s',
                ),
                array( '%d' )
            );


            if(!is_wp_error($update_result))
            {
                $output=array(
                    'status' =>'update',
                    'msg' =>'لیست املاک جدید این درخواست ویرایش گردید! ',
                );
            }
            else
            {
                $output=array(
                    'status' =>'not_updated',
                    'msg' =>'خطایی رخ داده است!',
                );
            }

            echo json_encode($output);
            exit();
        }

    }


    public static function admin_get_all_prop_request_callback()
    {
        header("Content-Type: application/json");
        $request = $_REQUEST;
        $user_id = $request['user_id'];
        if (get_current_user_id() == intval($request['user_id']) and current_user_can('administrator')) {
            header("Content-Type: application/json");

            global $wpdb;
            $table_name = $wpdb->prefix . "user_prop_request";
            $sql1 = "SELECT * FROM {$table_name}";
            $total_records = $wpdb->get_results($sql1);
            $total_records_count = count($total_records);

            $limit = intval($request['length']);
            $offset = intval($request['start']);
            $sql = "SELECT * FROM {$table_name}  ORDER BY date DESC limit  {$limit} offset {$offset}";
            $results = $wpdb->get_results($sql);

            date_default_timezone_set("Asia/Tehran");
            $data = array();
            $count = intval($request['start']) + 1;
            foreach ($results as $result) {
                $nestedData = array();
                $det = maybe_unserialize($result->details);

                $nestedData[] = $count;

                $opr = '<button type="button" class="btn btn-outline-primary  btn-floating ">
                                <i class="fa fa-search fa-lg"  id="npr_search" data-toggle="tooltip" title="" data-original-title="فایل های مشابه این درخواست" data-request_id="' . $result->id . '"></i>
                            </button>';

                $req_status = $result->status;
                $r_id2 = $result->id;

                $last_search_prop=maybe_unserialize($result->last_search_prop);

                if($last_search_prop !=null and $result->status == 'pending')
                {
                    $excluded_prop=maybe_unserialize($result->excluded_prop);
                    $excluded_prop_ids=array();
                    foreach ($excluded_prop as $temp)
                    {
                        $excluded_prop_ids[]=$temp['prop_id'];
                    }



                    foreach ($last_search_prop as $temp2)
                    {
                        $excluded_prop_ids[]=$temp2;
                    }

                    $details=maybe_unserialize($result->details);

                    $matched_prop_arg=array(
                        'post_type' => 'aralproperty',
                        'post_status' => 'publish',
                        'post__not_in' => $excluded_prop_ids,
                        'date_query'     => array( 'after' => $result->last_search_date )
                    );

                    $meta_query = array();

                    if ( $details['npr_city'] and  $details['npr_city']!= "")
                    {
                        $meta_query[] = array(
                            'key' => 'city_name',
                            'value' => trim($details['npr_city']),
                            'compare' => 'like'
                        );
                    }

                    if ( $details['npr_district'] and  $details['npr_district']!= "")
                    {
                        if (count($details['npr_district']) > 1)
                        {

                            foreach ($details['npr_district'] as $key => $value)
                            {
                                $meta_query_districts[] = array(
                                    'key' => 'district_name',
                                    'value' => trim($value),
                                    'compare' => '=='
                                );
                            }
                            $meta_query_districts['relation'] = 'OR';
                            $meta_query[]=$meta_query_districts;

                        }
                        else
                        {
                            $meta_query[] = array(
                                'key' => 'district_name',
                                'value' => trim($details['npr_district'][0]),
                                'compare' => '=='
                            );
                        }

                    }

                    if ( $details['npr_deal_type'] and  $details['npr_deal_type']!= "")
                    {
                        $meta_query_inner=array();
                        switch ($details['npr_deal_type'])
                        {
                            case 'رهن و اجاره':
                                $status="رهن و اجاره";
                                $meta_query_inner[]=array(
                                    'key' => 'deal_type',
                                    'value' => trim($status),
                                    'compare' => '=='
                                );

                                if ($details['npr_mortgage_price'] and  $details['npr_mortgage_price']!= "")
                                {
                                    if (count($details['npr_mortgage_price']) > 1)
                                    {
                                        $meta_query_inner[] = array(
                                            'key' => 'mortgage',
                                            'value' => array($details['npr_mortgage_price'][0]*1000000, $details['npr_mortgage_price'][1]*1000000 ),
                                            'type' => 'NUMERIC',
                                            'compare' => 'BETWEEN'
                                        );
                                    }
                                    else
                                    {
                                        $meta_query_inner[] = array(
                                            'key' => 'mortgage',
                                            'value' => $details['npr_mortgage_price'][0]*1000000,
                                            'type' => 'NUMERIC',
                                            'compare' => '<='
                                        );
                                    }

                                }

                                if ($details['npr_rent_price'] and  $details['npr_rent_price']!= "")
                                {
                                    if (count($details['npr_rent_price']) > 1)
                                    {
                                        $meta_query_inner[] = array(
                                            'key' => 'mortgage',
                                            'value' => array($details['npr_rent_price'][0]*1000000, $details['npr_rent_price'][1]*1000000 ),
                                            'type' => 'NUMERIC',
                                            'compare' => 'BETWEEN'
                                        );
                                    }
                                    else
                                    {
                                        $meta_query_inner[] = array(
                                            'key' => 'mortgage',
                                            'value' => $details['npr_rent_price'][0]*1000000,
                                            'type' => 'NUMERIC',
                                            'compare' => '<='
                                        );
                                    }

                                }

                                if ( $meta_query_inner > 1 )
                                {
                                    $meta_query_inner['relation'] = 'AND';
                                }
                                $meta_query[]=$meta_query_inner;

                                break;
                            case 'رهن کامل':
                                $status="رهن کامل";
                                $meta_query_inner[]=array(
                                    'key' => 'deal_type',
                                    'value' => trim($status),
                                    'compare' => '=='
                                );

                                if ($details['npr_mortgage_price'] and  $details['npr_mortgage_price']!= "")
                                {
                                    if (count($details['npr_mortgage_price']) > 1)
                                    {
                                        $meta_query_inner[] = array(
                                            'key' => 'mortgage',
                                            'value' => array($details['npr_mortgage_price'][0]*1000, $details['npr_mortgage_price'][1]*1000 ),
                                            'type' => 'NUMERIC',
                                            'compare' => 'BETWEEN'
                                        );
                                    }
                                    else
                                    {
                                        $meta_query_inner[] = array(
                                            'key' => 'mortgage',
                                            'value' => $details['npr_mortgage_price'][0]*1000,
                                            'type' => 'NUMERIC',
                                            'compare' => '<='
                                        );
                                    }

                                }

                                if ( $meta_query_inner > 1 )
                                {
                                    $meta_query_inner['relation'] = 'AND';
                                }
                                $meta_query[]=$meta_query_inner;
                                break;
                            case 'خرید':
                                $status="فروش";
                                $meta_query_inner[]=array(
                                    'key' => 'deal_type',
                                    'value' => trim($status),
                                    'compare' => '=='
                                );

                                if ($details['npr_sale_price'] and  $details['npr_sale_price']!= "")
                                {
                                    if (count($details['npr_sale_price']) > 1)
                                    {
                                        $meta_query_inner[] = array(
                                            'key' => 'price',
                                            'value' => array( $details['npr_sale_price'][0]*1000000, $details['npr_sale_price'][1]*1000000 ),
                                            'type' => 'NUMERIC',
                                            'compare' => 'BETWEEN'
                                        );
                                    }
                                    else
                                    {
                                        $meta_query_inner[] = array(
                                            'key' => 'price',
                                            'value' => $details['npr_sale_price'][0]*1000000,
                                            'type' => 'NUMERIC',
                                            'compare' => '<='
                                        );
                                    }
                                }


                                if ( $meta_query_inner > 1 )
                                {
                                    $meta_query_inner['relation'] = 'AND';
                                }
                                $meta_query[]=$meta_query_inner;
                                break;
                        }
                    }

                    if ($details['npr_prop_type'] and  $details['npr_prop_type']!= "")
                    {
                        $meta_query[] = array(
                            'key' => 'type',
                            'value' => trim($details['npr_prop_type']),
                            'compare' => '=='
                        );


                        if ( $details['npr_prop_type']!='زمین' and $details['npr_prop_type'] and $details['npr_infrastructure_area']!= "")
                        {
                            if (count($details['npr_infrastructure_area'])>1)
                            {
                                $meta_query_infrastructure_area[]=array(
                                    'key' => 'infrastructure_area',
                                    'value' => array( $details['npr_infrastructure_area'][0], $details['npr_infrastructure_area'][1] ),
                                    'type' => 'NUMERIC',
                                    'compare' => 'BETWEEN'
                                );
                            }
                            else
                            {
                                $meta_query_infrastructure_area[]=array(
                                    'key' => 'infrastructure_area',
                                    'value' => array( 20, $details['npr_infrastructure_area'][0] ),
                                    'type' => 'NUMERIC',
                                    'compare' => 'BETWEEN'
                                );
                            }
                            $meta_query[]=$meta_query_infrastructure_area;
                        }


                        if ( $details['npr_prop_type']!='زمین' and $details['npr_prop_type'] and  $details['npr_bedroom_count']!= "")
                        {
                            $meta_query_bedroom_count[] = array(
                                'key' => 'bedroom_count',
                                'value' => $details['npr_bedroom_count'],
                                'compare' => '=='
                            );
                        }


//                    if ( $details['npr_prop_type']!='زمین' and $details['npr_prop_type'] and   $details['npr_facilities']!= "")
//                    {
//                        if (count( $details['npr_facilities']) > 1)
//                        {
//
//                            foreach ( $details['npr_facilities'] as $key => $value)
//                            {
//                                $meta_query_facilities[] = array(
//                                    'key' => 'facilities',
//                                    'value' => trim($value),
//                                    'compare' => 'like'
//                                );
//                            }
//                            $meta_query_facilities['relation'] = 'AND';
//                            $meta_query[]=$meta_query_facilities;
//
//                        }
//                        else
//                        {
//                            $meta_query[] = array(
//                                'key' => 'facilities',
//                                'value' => trim( $details['npr_facilities'][0]),
//                                'compare' => 'like'
//                            );
//                        }
//                    }

                        if ( $details['npr_prop_type']!='زمین' and $details['npr_prop_type'] and $details['npr_floor_count']!= "")
                        {
                            $meta_query[] = array(
                                'key' => 'floor',
                                'value' => trim($details['npr_floor_count']),
                                'type' => 'NUMERIC',
                                'compare' => '<='
                            );
                        }

//                    if ( $details['npr_prop_type']!='زمین' and $details['npr_prop_type'] and $details['elavator']!= "")
//                    {
//                        if($details['elavator'] == 'no')
//                        {
//                            $meta_query_elavator[] = array(
//                                'key' => 'facilities',
//                                'value' => 'elevator',
//                                'compare' => 'not like'
//                            );
//
//                            $meta_query_elavator[] = array(
//                                'key' => 'floor',
//                                'value' => array( -2, $details['npr_no_elavator_floor_count'][0] ),
//                                'type' => 'NUMERIC',
//                                'compare' => 'BETWEEN'
//                            );
//                            $meta_query_elavator['relation'] = 'AND';
//                            $meta_query[]=$meta_query_elavator;
//                        }
//                        else
//                        {
//                            $meta_query_elavator[] = array(
//                                'key' => 'facilities',
//                                'value' => 'elevator',
//                                'compare' => 'like'
//                            );
//
//                            $meta_query_elavator[] = array(
//                                'key' => 'floor',
//                                'value' => array( -2, $details['npr_yes_elavator_floor_count'][0] ),
//                                'type' => 'NUMERIC',
//                                'compare' => 'BETWEEN'
//                            );
//                            $meta_query_elavator['relation'] = 'AND';
//                            $meta_query[]=$meta_query_elavator;
//                        }
//
//                    }
                    }

                    $meta_count = count( $meta_query );
                    if ( $meta_count > 1 ) {
                        $meta_query['relation'] = 'AND';
                    }

                    $matched_prop_arg['meta_query'] = $meta_query;


                    $matched_prop = new \WP_Query($matched_prop_arg);
                    $new_search_matched_prop=$matched_prop->post_count;


                    $opr.=($new_search_matched_prop > 0)?
                        '<button type="button" class="btn btn-outline-danger btn-pulse btn-floating ">
                                <b id="npr_new_added_prop" data-toggle="tooltip" title="" data-original-title="فایل های جدید برای این درخواست" data-request_id="'.$result->id.'">'.$new_search_matched_prop.'</b>
                     </button>'
                        :
                        '';
                }


                if($result->status == 'pending')
                {
                    $opr .= '<div class="dropdown" style="    margin-right: 7px;">
                                                        <a href="#" data-toggle="dropdown" aria-expanded="false">
                                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                        </a>
                                                        
                                                    <div class="dropdown-menu dropdown-menu-right mobPosDropdown" x-placement="bottom-end" style="display: none; width: 184px; font-size: 14px; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-84px, 22px, 0px);">
                                                            <a href="#" class="dropdown-item" id="npr_change_exp" data-request_id="' . $result->id . '">ویرایش کارشناس</a>';

                    $opr .= ($req_status == 'pending') ? '<a href="#" id="npr_finish"  data-request_id="' . $result->id . '" class="dropdown-item">تکمیل درخواست</a>' : '';
                    $opr .= ' </div>
                              </div>';
                }
                $nestedData[] = $opr;

                $nestedData[] = $result->customer_name;
                $nestedData[] = $result->customer_tel;
                $nestedData[] = $det['npr_deal_type'] . ' ' . $det['npr_prop_type'] . '<a id="show_prop_request_detailes" data-toggle="tooltip" title="" data-original-title=" جزییات" data-request_id="' . $result->id . '">
                                                                <i class="fa fa-eye"></i>
                                                            </a>';
                $nestedData[] = jdate('d  F  Y', strtotime($result->date));
                $nestedData[] = get_user_meta($result->exp_id, 'amlak_exp_name', true) . '<br/><small class="text-muted">' . ' کارشناس ' . get_user_meta($result->exp_id, 'exp_main_group', true) . ' (' . get_user_meta($result->exp_id, 'exp_sub_group', true) . ')</small>';
                $excluded_prop = maybe_unserialize($result->excluded_prop);
                $nestedData[] = (empty($excluded_prop)) ? '-' : '<span class="badge badge-danger">' . count($excluded_prop) . '<a id="show_excluded_prop" data-toggle="tooltip" title="" data-original-title=" مشاهده فایل های حذف شده از لیست پیشنهادی" data-request_id="' . $result->id . '">
                                                                <i class="fa fa-eye"></i>
                                                            </a></span>';
                $nestedData[] = ($result->status == 'pending') ? '<span class="badge badge-warning">درحال بررسی</span>' : '<span class="badge badge-success" data-toggle="tooltip" title="" data-original-title="توضیحات : ' . $result->description . '"> تکمیل شده</span>';


                $nestedData[] = ($result->user_id == $result->exp_id) ? 'same' : 'not_same';
//                $nestedData[] = $new_search_matched_prop;
//                $nestedData[] = $last_search;
                $data[] = $nestedData;
                $count++;
            }

            $json_data = array(
                "draw" => intval($request['draw']),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
                "recordsTotal" => intval($total_records_count),  // total number of records
                "recordsFiltered" => intval($total_records_count), // total number of records after searching, if there is no searching then totalFiltered = totalData
                "data" => $data   // total data array
            );
            echo json_encode($json_data);
            exit();

        }
    }
    public static function admin_get_request_det_callback()
    {
        header("Content-Type: application/json");
        $request = $_REQUEST;
        $user_id=$request['user_id'];
        if (get_current_user_id() == intval($request['user_id']))
        {
            require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
            header("Content-Type: application/json");
            global $wpdb;

            $table_name = $wpdb->prefix . "user_prop_request";
            $r_id=intval($request['r_id']);
            $sql = "SELECT details FROM {$table_name} WHERE  id={$r_id}";
            $result=$wpdb->get_var($wpdb->prepare($sql));
            $result=maybe_unserialize($result);

            $modal_content=' <div class="pricing-table m-b-20">
                                 <ul class="m-b-30 m-t-30 list-group list-group-flush">';

            $deal_prop_type='';
            if($result['npr_deal_type'] !=null)
            {
                $deal_prop_type.=$result['npr_deal_type'];
                if ($result['npr_prop_type'] !=null)
                {
                    $deal_prop_type.=' '.$result['npr_prop_type'];
                }

                $modal_content.='<li class="list-group-item d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-success icon-block-xs icon-block-floating">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check width-18 height-18"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                </span> ';
                $modal_content.= $deal_prop_type;
                $modal_content.= '</li>';

                if($result['npr_deal_type'] == 'خرید' and $result['npr_deed_type'] !=null)
                {
                    $modal_content .= '<li class="list-group-item d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-success icon-block-xs icon-block-floating">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check width-18 height-18"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                </span> ';
                    $modal_content.= ' نوع سند ';
                    $count=1;
                    foreach ($result['npr_deed_type'] as $deed)
                    {
                        if ($count == 1)
                        {
                            $modal_content.= $deed;
                        }
                        else
                        {
                            $modal_content.= ' یا '.$deed;
                        }

                        $count++;
                    }
                    $modal_content.= '</li>';
                }

            }

            if($result['npr_city'] !=null)
            {
                $modal_content.='<li class="list-group-item d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-success icon-block-xs icon-block-floating">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check width-18 height-18"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                </span> ';
                $modal_content.='شهر'.' '.$result['npr_city'];
                if ($result['npr_district']!=null)
                {
                    $modal_content.=' | محله  ';
                    $count=1;
                    $max=count($result['npr_district']);
                    foreach ($result['npr_district'] as $district)
                    {
                        if($count == 1 )
                        {
                            $modal_content.=$district;
                        }
                        else
                        {
                            $modal_content.= ' یا '.$district;
                        }
                        $count++;
                    }
                }

                $modal_content.= '</li>';
            }


            if($result['npr_deal_type'] !=null and $result['npr_deal_type']=='خرید' and $result['npr_sale_price']!=null)
            {
                $modal_content.='<li class="list-group-item d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-success icon-block-xs icon-block-floating">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check width-18 height-18"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                </span> ';
                $modal_content.= 'قیمت';

                if (count($result['npr_sale_price']) > 1)
                {
                    $modal_content.= ' از '.$result['npr_sale_price'][0].' تا '.$result['npr_sale_price'][1].' میلیون ';
                }
                else
                {
                    $modal_content.= ' تا '.$result['npr_sale_price'][0].' میلیون ';
                }

                $modal_content.= '</li>';
            }

            if($result['npr_deal_type'] !=null and $result['npr_deal_type']=='رهن کامل' and $result['npr_mortgage_price']!=null)
            {
                $modal_content.='<li class="list-group-item d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-success icon-block-xs icon-block-floating">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check width-18 height-18"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                </span> ';
                $modal_content.= 'رهن';

                if (count($result['npr_mortgage_price']) > 1)
                {
                    $modal_content.= ' از '.$result['npr_mortgage_price'][0].' تا '.$result['npr_mortgage_price'][1].' میلیون ';
                }
                else
                {
                    $modal_content.= ' تا '.$result['npr_mortgage_price'][0].' میلیون ';
                }
                $modal_content.= '</li>';
            }

            if($result['npr_deal_type'] !=null and $result['npr_deal_type']=='رهن و اجاره' and $result['npr_mortgage_price']!=null)
            {
                $modal_content.='<li class="list-group-item d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-success icon-block-xs icon-block-floating">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check width-18 height-18"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                </span> ';
                $modal_content.= 'رهن';
                if (count($result['npr_mortgage_price']) > 1)
                {
                    $modal_content.= ' از '.$result['npr_mortgage_price'][0].' تا '.$result['npr_mortgage_price'][1].' میلیون ';
                }
                else
                {
                    $modal_content.= ' تا '.$result['npr_mortgage_price'][0].' میلیون ';
                }
                $modal_content.= '</li>';
            }

            if($result['npr_deal_type'] !=null and $result['npr_deal_type']=='رهن و اجاره' and $result['npr_rent_price']!=null)
            {
                $modal_content.='<li class="list-group-item d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-success icon-block-xs icon-block-floating">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check width-18 height-18"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                </span> ';
                $modal_content.= 'اجاره';

                if (count($result['npr_rent_price']) > 1)
                {
                    if ($result['npr_rent_price'][0]<1000)
                    {
                        $modal_content.= ' از '.$result['npr_rent_price'][0].' هزار ';
                    }
                    else
                    {
                        $modal_content.= ' از '.(($result['npr_rent_price'][0])/1000).' میلیون ';
                    }

                    if ($result['npr_rent_price'][1]<1000)
                    {
                        $modal_content.= ' تا '.$result['npr_rent_price'][1].' هزار ';
                    }
                    else
                    {
                        $modal_content.= ' تا '.(($result['npr_rent_price'][1])/1000).' میلیون ';
                    }

                }
                else
                {
                    if ($result['npr_rent_price'][0]<1000)
                    {
                        $modal_content.= ' تا '.$result['npr_rent_price'][0].' هزار ';
                    }
                    else
                    {
                        $modal_content.= ' تا '.(($result['npr_rent_price'][0])/1000).' میلیون ';
                    }
                }
                $modal_content.= '</li>';
            }


            if( $result['npr_floor_count'] !=null)
            {
                $modal_content.='<li class="list-group-item d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-success icon-block-xs icon-block-floating">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check width-18 height-18"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                </span> ';
                $modal_content.='تا طبقه ';
                $modal_content.=$result['npr_floor_count'];
                $modal_content.= '</li>';
            }

            if( $result['npr_bedroom_count'] !=null)
            {

                $modal_content.='<li class="list-group-item d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-success icon-block-xs icon-block-floating">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check width-18 height-18"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                </span> ';
                $modal_content.=$result['npr_bedroom_count'];
                $modal_content.=' خوابه ';
                $modal_content.= '</li>';
            }

            if( $result['npr_infrastructure_area'] !=null)
            {

                $modal_content.='<li class="list-group-item d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-success icon-block-xs icon-block-floating">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check width-18 height-18"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                </span> ';
                $count=0;
                $modal_content.=' زیربنا  ';

                if(count($result['npr_infrastructure_area']) > 1)
                {
                    $modal_content.=' از '. $result['npr_infrastructure_area'][0];
                    $modal_content.= ' تا '.$result['npr_infrastructure_area'][1].' متر ';
                }
                else
                {
                    $modal_content.= ' تا '.$result['npr_infrastructure_area'][0].' متر ';
                }
                $modal_content.= '</li>';


            }

            if( $result['npr_facilities'] !=null)
            {

                $modal_content.='<li class="list-group-item d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-success icon-block-xs icon-block-floating">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check width-18 height-18"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                </span> ';
                $count=0;
                $modal_content.=' امکانات شامل ';
                $count=1;
                $facalities_name=array(
                    'elevator' =>'آسانسور',
                    'remote_door' =>'درب برقی',
                    'video_iphone' =>'ایفون تصویری',
                    'parking' =>'پارکینگ',
                    'warehouse ' =>'انباری',
                    'terrace' =>'تراس',
                    'package' =>'پکیج',
                    'radiator' =>'رادیاتور',
                    'floor_heating' =>'گرمایش از کف',
                    'chiller' =>'چیلر',
                    'air_conditioning' =>'هواساز',
                    'gas_cooler' =>'کولر گازی',
                    'water_cooler' =>'کولرآبی',
                    'heater' =>'بخاری',
                    'water_heater' =>'آب گرمکن',
                    'heating' =>'شوفاژ',
                    'painted' =>'نقاشی',
                    'wallpaper' =>'کاغذ دیواری',
                    'paneled' =>'پانل کوبی',
                    'desktop_gas' =>'گاز رومیزی',
                    'hood' =>'هود',
                    'sauna' =>'سونا',
                    'jacuzzi' =>'جکوزی',
                    'master_bath' =>'حمام مستر',
                    'closet' =>'کمد دیواری',
                    'security_door' =>'درب ضد سرقت',
                    'cctv' =>'دوربین مداربسته',
                    'toilet' =>'سرویس فرنگی',
                    'pool' =>'استخر',
                    'curtain' =>'پرده',
                    'luster' =>'لوستر',
                );
                foreach ($result['npr_facilities'] as $facilitie)
                {
                    if ($count == 1)
                    {
                        $modal_content.= $facalities_name[trim($facilitie)];
                    }
                    else
                    {
                        $modal_content.= ' - '.$facalities_name[trim($facilitie)];
                    }

                    $count++;
                }
                $modal_content.= '</li>';


            }

            if( $result['elavator'] !=null)
            {

                $modal_content.='<li class="list-group-item d-flex align-items-center">
                                                <span class="icon-block mr-3 bg-success icon-block-xs icon-block-floating">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check width-18 height-18"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                </span> ';
                $modal_content.=( $result['elavator'] == 'yes')?' با آسانسور تا طبقه '.$result['npr_yes_elavator_floor_count']:'بدون آسانسور تا طبقه '.$result['npr_no_elavator_floor_count'];
                $modal_content.= '</li>';
            }

            $modal_content.=   '</ul>
                              </div>';
            echo json_encode($modal_content);
            exit();
        }
    }
    public static function admin_show_excluded_prop_callback()
    {
        header("Content-Type: application/json");
        $request = $_REQUEST;
        $user_id=$request['user_id'];
        if (get_current_user_id() == intval($request['user_id']))
        {
            require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
            header("Content-Type: application/json");
            global $wpdb;

            $table_name = $wpdb->prefix . "user_prop_request";
            $r_id=intval($request['r_id']);
            $sql = "SELECT excluded_prop FROM {$table_name} WHERE id={$r_id}";
            $result=$wpdb->get_var($wpdb->prepare($sql));
            $result=maybe_unserialize($result);

            ?>




            <?php
            $modal_content=' <table class="table table-striped mb-0">
                <thead>
                <tr>
                    <th class="text-center">مشخصات ملک</th>
                    <th class="text-center">دلیل حذف</th>
                </tr>
                </thead>
                <tbody>';
            foreach ($result as $item)
            {
                $modal_content.='<tr>';
                    $modal_content.='<td class="text-center"><a href="'.home_url('prop_det'.'?p_id='.$item['prop_id']).'" target="_blank">'.get_post_meta($item['prop_id'],'deal_type',true).' '.get_post_meta($item['prop_id'],'type',true).' '.get_post_meta($item['prop_id'],'infrastructure_area',true).' '.'متری'.'</a></td>';
                    $modal_content.='<td class="text-center">'.$item['description'].'</td>';
                $modal_content.= '</tr>';
            }

            $modal_content.=   '</tbody>
                    </table>';
            echo json_encode($modal_content);
            exit();
        }
    }
    public static function admin_get_all_exp_callback()
    {
        header("Content-Type: application/json");
        $request = $_REQUEST;
        $user_id=$request['user_id'];
        if (get_current_user_id() == intval($request['user_id']) and current_user_can('administrator'))
        {
            header("Content-Type: application/json");
            global $wpdb;
            $table_name = $wpdb->prefix . "user_prop_request";
            $r_id=intval($request['r_id']);

            $sql1 = "SELECT exp_id FROM {$table_name} WHERE id={$r_id}";
            $current_exp_id=$wpdb->get_var($wpdb->prepare($sql1));


            $sql = "SELECT details FROM {$table_name} WHERE id={$r_id}";
            $result=$wpdb->get_var($wpdb->prepare($sql));
            $result=maybe_unserialize($result);
            $request_deal_type=$result['npr_deal_type'];
            if ($request_deal_type == 'خرید')
            {
                if ($result['npr_prop_type'] == trim('آپارتمان') or $result['npr_prop_type']  == trim('مغازه تجاری') or $result['npr_prop_type']  == trim('دفتر کار اداری'))
                {
                    $prop_sub_group=trim('آپارتمان،مغازه تجاری،دفتر کار اداری');
                }
                else
                {
                    $prop_sub_group=trim('ویلا،خانه ویلایی،زمین');
                }

                $exp_ids=Utility::get_all_exp_ids_for_sale($prop_sub_group);
            }
            else
            {
                $exp_ids=Utility::get_all_exp_id_for_rent_mortgage();
            }

            $output='<select class="exp_list">';
            foreach ($exp_ids as $exp_id)
            {
                if ($exp_id == $current_exp_id)
                {
                    $output.='<option value="'.$exp_id.'" style="background-color: #24b724; color: white;" selected>'.get_user_meta($exp_id,'amlak_exp_name',true).'</option>';
                }
                else
                {
                    $output.='<option value="'.$exp_id.'">'.get_user_meta($exp_id,'amlak_exp_name',true).'</option>';
                }

            }
            $output.='</select>';


            echo json_encode($output);
            exit();
        }
    }
    public static function admin_edit_exp_callback()
    {
        header("Content-Type: application/json");
        $request = $_REQUEST;

        if (get_current_user_id() == intval($request['user_id']) and current_user_can('administrator'))
        {
            global $wpdb;
            $table_name = $wpdb->prefix . "user_prop_request";
            $r_id=intval($request['request_id']);
            $result=$wpdb->update(
                $table_name ,
                array(
                    'exp_id' => intval($request['exp_id']),
                ),
                array( 'ID' => $r_id ),
                array(
                    '%d',
                ),
                array( '%d' )
            );

            if (is_wp_error($result))
            {
                $output=array(
                    'status' =>'not_ok',
                    'msg' =>'هنگام ویرایش کارشناس این درخواست، خطایی رخ داده است!',
                );
            }
            else
            {
                $output=array(
                    'status' =>'ok',
                    'msg' =>'کارشناس با موفقیت ویرایش گردید!',
                );
            }
            $output=array(
                'status' =>'ok',
                'msg' =>'کارشناس با موفقیت ویرایش گردید!',
            );
            echo json_encode($output);
            exit();
        }
    }
    public static function admin_search_request_callback()
    {
        header("Content-Type: application/json");
        $request = $_REQUEST;
        $user_id=$request['user_id'];
        if (get_current_user_id() == intval($request['user_id']) and current_user_can('administrator'))
        {
            global $wpdb;

            $table_name = $wpdb->prefix . "user_prop_request";
            $r_id=intval($request['r_id']);

            $sql = "SELECT * FROM {$table_name} WHERE id={$r_id}";
            $exp_request=$wpdb->get_row($sql);

            $excluded_prop=maybe_unserialize($exp_request->excluded_prop);
            $excluded_prop_ids=array();
            foreach ($excluded_prop as $temp)
            {
                $excluded_prop_ids[]=$temp['prop_id'];
            }


            $details=maybe_unserialize($exp_request->details);

            $matched_prop_arg=array(
                'post_type' => 'aralproperty',
                'post_status' => 'publish',
                'posts_per_page' => $request['length'],
                'offset' => intval($request['start']),
                'post__not_in' => $excluded_prop_ids,
            );



            $meta_query = array();

            if ( $details['npr_city'] and  $details['npr_city']!= "")
            {
                $meta_query[] = array(
                    'key' => 'city_name',
                    'value' => trim($details['npr_city']),
                    'compare' => 'like'
                );
            }

            if ( $details['npr_district'] and  $details['npr_district']!= "")
            {
                if (count($details['npr_district']) > 1)
                {

                    foreach ($details['npr_district'] as $key => $value)
                    {
                        $meta_query_districts[] = array(
                            'key' => 'district_name',
                            'value' => trim($value),
                            'compare' => '=='
                        );
                    }
                    $meta_query_districts['relation'] = 'OR';
                    $meta_query[]=$meta_query_districts;

                }
                else
                {
                    $meta_query[] = array(
                        'key' => 'district_name',
                        'value' => trim($details['npr_district'][0]),
                        'compare' => '=='
                    );
                }

            }


            if ( $details['npr_deal_type'] and  $details['npr_deal_type']!= "")
            {
                $meta_query_inner=array();
                switch ($details['npr_deal_type'])
                {
                    case 'رهن و اجاره':
                        $status="رهن و اجاره";
                        $meta_query_inner[]=array(
                            'key' => 'deal_type',
                            'value' => trim($status),
                            'compare' => '=='
                        );

                        if ($details['npr_mortgage_price'] and  $details['npr_mortgage_price']!= "")
                        {
                            if (count($details['npr_mortgage_price']) > 1)
                            {
                                $meta_query_inner[] = array(
                                    'key' => 'mortgage',
                                    'value' => array($details['npr_mortgage_price'][0]*1000000, $details['npr_mortgage_price'][1]*1000000 ),
                                    'type' => 'NUMERIC',
                                    'compare' => 'BETWEEN'
                                );
                            }
                            else
                            {
                                $meta_query_inner[] = array(
                                    'key' => 'mortgage',
                                    'value' => $details['npr_mortgage_price'][0]*1000000,
                                    'type' => 'NUMERIC',
                                    'compare' => '='
                                );
                            }

                        }

                        if ($details['npr_rent_price'] and  $details['npr_rent_price']!= "")
                        {
                            if (count($details['npr_rent_price']) > 1)
                            {
                                $meta_query_inner[] = array(
                                    'key' => 'mortgage',
                                    'value' => array($details['npr_rent_price'][0]*1000000, $details['npr_rent_price'][1]*1000000 ),
                                    'type' => 'NUMERIC',
                                    'compare' => 'BETWEEN'
                                );
                            }
                            else
                            {
                                $meta_query_inner[] = array(
                                    'key' => 'mortgage',
                                    'value' => $details['npr_rent_price'][0]*1000000,
                                    'type' => 'NUMERIC',
                                    'compare' => '<='
                                );
                            }

                        }

                        if ( $meta_query_inner > 1 )
                        {
                            $meta_query_inner['relation'] = 'AND';
                        }
                        $meta_query[]=$meta_query_inner;

                        break;
                    case 'رهن کامل':
                        $status="رهن کامل";
                        $meta_query_inner[]=array(
                            'key' => 'deal_type',
                            'value' => trim($status),
                            'compare' => '=='
                        );

                        if ($details['npr_mortgage_price'] and  $details['npr_mortgage_price']!= "")
                        {
                            if (count($details['npr_mortgage_price']) > 1)
                            {
                                $meta_query_inner[] = array(
                                    'key' => 'mortgage',
                                    'value' => array($details['npr_mortgage_price'][0]*1000, $details['npr_mortgage_price'][1]*1000 ),
                                    'type' => 'NUMERIC',
                                    'compare' => 'BETWEEN'
                                );
                            }
                            else
                            {
                                $meta_query_inner[] = array(
                                    'key' => 'mortgage',
                                    'value' => $details['npr_mortgage_price'][0]*1000,
                                    'type' => 'NUMERIC',
                                    'compare' => '<='
                                );
                            }

                        }

                        if ( $meta_query_inner > 1 )
                        {
                            $meta_query_inner['relation'] = 'AND';
                        }
                        $meta_query[]=$meta_query_inner;
                        break;
                    case 'خرید':
                        $status="فروش";
                        $meta_query_inner[]=array(
                            'key' => 'deal_type',
                            'value' => trim($status),
                            'compare' => '=='
                        );

                        if ($details['npr_sale_price'] and  $details['npr_sale_price']!= "")
                        {
                            if (count($details['npr_sale_price']) > 1)
                            {
                                $meta_query_inner[] = array(
                                    'key' => 'price',
                                    'value' => array( $details['npr_sale_price'][0]*1000000, $details['npr_sale_price'][1]*1000000 ),
                                    'type' => 'NUMERIC',
                                    'compare' => 'BETWEEN'
                                );
                            }
                            else
                            {
                                $meta_query_inner[] = array(
                                    'key' => 'price',
                                    'value' => $details['npr_sale_price'][0]*1000000,
                                    'type' => 'NUMERIC',
                                    'compare' => '>='
                                );
                            }
                        }


                        if ( $meta_query_inner > 1 )
                        {
                            $meta_query_inner['relation'] = 'AND';
                        }
                        $meta_query[]=$meta_query_inner;
                        break;
                }
            }


            if ($details['npr_prop_type'] and  $details['npr_prop_type']!= "")
            {
                $meta_query[] = array(
                    'key' => 'type',
                    'value' => trim($details['npr_prop_type']),
                    'compare' => '=='
                );


                if ( $details['npr_prop_type']!='زمین' and $details['npr_prop_type'] and $details['npr_infrastructure_area']!= "")
                {
                    if (count($details['npr_infrastructure_area'])>1)
                    {
                        $meta_query_infrastructure_area[]=array(
                            'key' => 'infrastructure_area',
                            'value' => array( $details['npr_infrastructure_area'][0], $details['npr_infrastructure_area'][1] ),
                            'type' => 'NUMERIC',
                            'compare' => 'BETWEEN'
                        );
                    }
                    else
                    {
                        $meta_query_infrastructure_area[]=array(
                            'key' => 'infrastructure_area',
                            'value' => array( 20, $details['npr_infrastructure_area'][0] ),
                            'type' => 'NUMERIC',
                            'compare' => 'BETWEEN'
                        );
                    }
                    $meta_query[]=$meta_query_infrastructure_area;
                }


                if ( $details['npr_prop_type']!='زمین' and $details['npr_prop_type'] and  $details['npr_bedroom_count']!= "")
                {
                    $meta_query_bedroom_count[] = array(
                        'key' => 'bedroom_count',
                        'value' => $details['npr_bedroom_count'],
                        'compare' => '=='
                    );
                }


//                if ( $details['npr_prop_type']!='زمین' and $details['npr_prop_type'] and   $details['npr_facilities']!= "")
//                {
//                    if (count( $details['npr_facilities']) > 1)
//                    {
//
//                        foreach ( $details['npr_facilities'] as $key => $value)
//                        {
//                            $meta_query_facilities[] = array(
//                                'key' => 'facilities',
//                                'value' => trim($value),
//                                'compare' => 'like'
//                            );
//                        }
//                        $meta_query_facilities['relation'] = 'AND';
//                        $meta_query[]=$meta_query_facilities;
//
//                    }
//                    else
//                    {
//                        $meta_query[] = array(
//                            'key' => 'facilities',
//                            'value' => trim( $details['npr_facilities'][0]),
//                            'compare' => 'like'
//                        );
//                    }
//                }

                if ( $details['npr_prop_type']!='زمین' and $details['npr_prop_type'] and $details['npr_floor_count']!= "")
                {
                    $meta_query[] = array(
                        'key' => 'floor',
                        'value' => trim($details['npr_floor_count']),
                        'type' => 'NUMERIC',
                        'compare' => '<='
                    );
                }

//                if ( $details['npr_prop_type']!='زمین' and $details['npr_prop_type'] and $details['elavator']!= "")
//                {
//                    if($details['elavator'] == 'no')
//                    {
//                        $meta_query_elavator[] = array(
//                            'key' => 'facilities',
//                            'value' => 'elevator',
//                            'compare' => 'not like'
//                        );
//
//                        $meta_query_elavator[] = array(
//                            'key' => 'floor',
//                            'value' => array( -2, $details['npr_no_elavator_floor_count'][0] ),
//                            'type' => 'NUMERIC',
//                            'compare' => 'BETWEEN'
//                        );
//                        $meta_query_elavator['relation'] = 'AND';
//                        $meta_query[]=$meta_query_elavator;
//                    }
//                    else
//                    {
//                        $meta_query_elavator[] = array(
//                            'key' => 'facilities',
//                            'value' => 'elevator',
//                            'compare' => 'like'
//                        );
//
//                        $meta_query_elavator[] = array(
//                            'key' => 'floor',
//                            'value' => array( -2, $details['npr_yes_elavator_floor_count'][0] ),
//                            'type' => 'NUMERIC',
//                            'compare' => 'BETWEEN'
//                        );
//                        $meta_query_elavator['relation'] = 'AND';
//                        $meta_query[]=$meta_query_elavator;
//                    }
//
//                }
            }

            $meta_count = count( $meta_query );
            if ( $meta_count > 1 ) {
                $meta_query['relation'] = 'AND';
            }

            $matched_prop_arg['meta_query'] = $meta_query;


            $matched_prop = new \WP_Query($matched_prop_arg);
            $data = array();
            $count= intval($request['start'])+1;
            $matched_porp_ids=array();
            while ($matched_prop->have_posts())
            {
                $matched_prop->the_post();
                $matched_porp_ids[]=get_the_ID();
                $nestedData = array();
                $nestedData[] = $count;
                $nestedData[] = '<a href="'.home_url('prop_det'.'?p_id='.get_the_ID()).'" target="_blank">'.get_post_meta(get_the_ID(),'type',true).' '.get_post_meta(get_the_ID(),'infrastructure_area',true).' '.'متری'.'</a>';
                $nestedData[] = get_post_meta(get_the_ID(),'district_name',true).' - '.get_post_meta(get_the_ID(),'street',true);
                if (is_request_from_office())
                {
                    $nestedData[] = get_post_meta(get_the_ID(),'landlord_name',true).'('.get_post_meta(get_the_ID(),'phone1',true).')';
                }
                else
                {
                    $nestedData[] = 'ip شما مطابقت ندارد';
                }
                $nestedData[] = '<i class="fa fa-remove fa-lg text-danger" id="exclude_prop" data-toggle="tooltip" title="" data-original-title="حذف از لیست فایل های مشابه" data-request_id="'. $r_id.'" data-prop_id="'.get_the_ID().'"></i>';

                $data[] = $nestedData;

                $count++;

            }
            wp_reset_postdata();

            $wpdb->update(
                $table_name,
                array(
                    'last_search_prop' => maybe_serialize($matched_porp_ids),
                    'last_search_date' => $date = date('Y-m-d H:i:s'),
                ),
                array( 'id' =>$r_id ),
                array(
                    '%s',
                    '%s',
                ),
                array( '%d' )
            );

            $json_data = array(
                "draw" => intval($request['draw']),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
                "recordsTotal" => intval($matched_prop->found_posts),  // total number of records
                "recordsFiltered" => intval($matched_prop->found_posts), // total number of records after searching, if there is no searching then totalFiltered = totalData
                "data" => $data   // total data array
            );

            echo json_encode($json_data);
            exit();
        }

    }




    public static function user_login_process_callback()
    {
        header("Content-Type: application/json");
        $request = $_REQUEST['data'];

        if (isset($request['user_name'],$request['password']) and $request['user_name'] != '' and $request['password'] != '')
        {
            $userdata = get_user_by('login',sanitize_text_field($request['user_name']));
            $result = wp_check_password(sanitize_text_field($request['password']), $userdata->user_pass, $userdata->ID);
            if ($result == "true")
            {
                // login user
                wp_clear_auth_cookie();
                wp_set_current_user ( $userdata->ID );
                wp_set_auth_cookie  ( $userdata->ID );

                $output=array(
                    'status' => 'true'
                );
            }
            else
            {
                $output=array(
                    'status' => 'false'
                );
            }

        }
        else
        {
            $output=array(
                'status' => 'not_secure'
            );
        }

        echo json_encode($output);
        exit;
    }
    public static function send_code_to_mobile_callback()
    {
        header("Content-Type: application/json");
        $request = $_REQUEST['data'];

        if (isset($request['mobile']) and $request['mobile'] != '')
        {
            if(username_exists( $request['mobile']))
            {
                try {

                    date_default_timezone_set("Asia/Tehran");
                    // your sms.ir panel configuration

                    $APIKey = "dde162cc96fbbefecf5670d";
                    $SecretKey = "e7faa04884fa68114a048";

//        insert sended code to daat base for later check
                    global $wpdb;
                    $table = $wpdb->prefix .'aral_sms_verification';
                    $verfication_code=wp_rand('1001','9999');
                    $wpdb->replace($table,array('mobile' =>$request['mobile'],'code'=>$verfication_code),array('%s','%s'));

                    // message data

                    $data = array(
                        "ParameterArray" => array(
                            array(
                                "Parameter" => "VerificationCode",
                                "ParameterValue" =>  $verfication_code
                            )
                        ),
                        "Mobile" => $request['mobile'],
                        "TemplateId" => "14816"
                    );

                    $SmsIR_UltraFastSend = new SmsIr($APIKey,$SecretKey);
                    $UltraFastSend = $SmsIR_UltraFastSend->UltraFastSend($data);
                    $output=array(
                        'status' => 'true',
                        'mobile' => $request['mobile'],

                    );

                } catch (Exeption $e) {
                    $output=array(
                        'status' => 'false',
                        'msg' =>$e->getMessage()
                    );
                }
            }
            else
            {
                $output=array(
                    'status' => 'user_not_exist'
                );
            }
        }

        echo json_encode($output);
        exit;
    }
    public static function confirm_code_callback()
    {
        header("Content-Type: application/json");
        $request = $_REQUEST['data'];

        if (isset($request['confirm_code_btn'],$request['code'],$request['new_password']) and $request['confirm_code_btn'] != '' and $request['code'] != '' and $request['new_password'] != '')
        {
            global $wpdb;
            $table = $wpdb->prefix .'aral_sms_verification';
            $rowcount = $wpdb->get_var("SELECT COUNT(*) FROM {$table} WHERE mobile={$request['confirm_code_btn']} AND code={$request['code']}");
            if($rowcount >=1)
            {
                $userdata = get_user_by('login',sanitize_text_field($request['confirm_code_btn']));
                wp_set_password(sanitize_text_field($request['new_password']),$userdata->ID);
                $output=array(
                    'status' => 'verify_code'
                );
            }
            else
            {
                $output=array(
                    'status' => 'not_verify_code'
                );
            }
        }
        else
        {
            $output=array(
                'status' => 'code_mobile_not_set'
            );
        }

        echo json_encode($output);
        exit;
    }
    public static function delete_all_sended_code_callback()
    {
        header("Content-Type: application/json");
        $request = $_REQUEST;

        if (isset($request['mobile']) and $request['mobile'] != '')
        {
            global $wpdb;
            $table = $wpdb->prefix .'aral_sms_verification';
            $rowcount = $wpdb->delete($table,array('mobile' =>$request['mobile']),array( '%s' ));
            if($rowcount ==false)
            {
                $output=array(
                    'status' => 'not_delete'
                );
            }
            else
            {
                $output=array(
                    'status' => 'delete'
                );
            }
        }

        echo json_encode($output);
        exit;
    }


    public static function send_register_code_callback()
    {
        header("Content-Type: application/json");
        $request = $_REQUEST['data'];

        if (isset($request['register_mobile']) and $request['register_mobile'] != '')
        {
            if(!username_exists( $request['register_mobile']))
            {
                try {

                    date_default_timezone_set("Asia/Tehran");
                    // your sms.ir panel configuration
                    $APIKey = "59d2c12d5fbc7a3149d6acd0";
                    $SecretKey = "e7faa04884fa68114a048";


//        insert sended code to daat base for later check
                    global $wpdb;
                    $table = $wpdb->prefix .'aral_sms_verification';
                    $wpdb->delete($table,array('mobile' =>$request['register_mobile']),array( '%s' ));
                    $verfication_code=wp_rand('1001','9999');
                    $wpdb->replace($table,array('mobile' =>$request['register_mobile'],'code'=>$verfication_code),array('%s','%s'));

                    // message data

                    $data = array(
                        "ParameterArray" => array(
                            array(
                                "Parameter" => "VerificationCode",
                                "ParameterValue" =>  $verfication_code
                            )
                        ),
                        "Mobile" => $request['register_mobile'],
                        "TemplateId" => "14816"
                    );

                    $SmsIR_UltraFastSend = new SmsIr($APIKey,$SecretKey);
                    $UltraFastSend = $SmsIR_UltraFastSend->UltraFastSend($data);
                    $output=array(
                        'status' => 'true',
                        'mobile' => $request['register_mobile'],

                    );

                } catch (Exeption $e) {
                    $output=array(
                        'status' => 'false',
                        'msg' =>$e->getMessage()
                    );
                }
            }
            else
            {
                $output=array(
                    'status' => 'user_exist'
                );
            }
        }

        echo json_encode($output);
        exit;
    }

    public static function aral_register_user_callback()
    {
        header("Content-Type: application/json");
        $request = $_REQUEST['data'];

        if (isset($request['mobile'],$request['register_code'],$request['register_password'],$request['register_fname'],$request['register_lname']) and $request['mobile'] != '' and $request['register_code'] != '' and $request['register_fname'] != '' and $request['register_lname'] != '' and $request['register_password'] != '')
        {
            global $wpdb;
            $table = $wpdb->prefix .'aral_sms_verification';
            $rowcount = $wpdb->get_var("SELECT COUNT(*) FROM {$table} WHERE mobile={$request['mobile']} AND code={$request['register_code']}");
            if($rowcount >=1)
            {
                $userdata=array(
                    'user_pass' =>sanitize_text_field($request['register_password']),
                    'user_login' =>sanitize_text_field($request['mobile']),
                    'first_name' =>sanitize_text_field($request['register_fname']),
                    'last_name' =>sanitize_text_field($request['register_lname']),
                );

                $user_id = wp_insert_user( $userdata ) ;

                wp_clear_auth_cookie();
                wp_set_current_user ( $user_id );
                wp_set_auth_cookie  ( $user_id );

                $output=array(
                    'status' => 'verify_code'
                );
            }
            else
            {
                $output=array(
                    'status' => 'not_verify_code'
                );
            }
        }
        else
        {
            $output=array(
                'status' => 'not_secure'
            );
        }

        echo json_encode($output);
        exit;
    }

    public static function aral_get_districts_callback()
    {
        header("Content-Type: application/json");
        $request=$_POST['city'];
        $sub_array=array();
        switch($request)
        {
            case 'مشهد':
                $sub_array[]=array(
                    'id'=>1,
                    'name'=>'قاسم آباد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3599 59.5042')
                );

                $sub_array[]=array(
                    'id'=>2,
                    'name'=>'احمدآباد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2954 59.5742')
                );

                $sub_array[]=array(
                    'id'=>3,
                    'name'=>'بلوار پیروزی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3104 59.5055')
                );

                $sub_array[]=array(
                    'id'=>4,
                    'name'=>'بلوار فکوری',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3 59.5048')
                );

                $sub_array[]=array(
                    'id'=>5,
                    'name'=>'کوثر جنوبی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3073 59.508')
                );

                $sub_array[]=array(
                    'id'=>6,
                    'name'=>'جاده سنتو',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3221 59.5411')
                );

                $sub_array[]=array(
                    'id'=>7,
                    'name'=>'کوثر شمالی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3127 59.5157')
                );

                $sub_array[]=array(
                    'id'=>8,
                    'name'=>'معلم',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3342 59.5024')
                );

                $sub_array[]=array(
                    'id'=>9,
                    'name'=>'الهیه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3764 59.4747')
                );

                $sub_array[]=array(
                    'id'=>10,
                    'name'=>'آب و برق',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3132 59.4818')
                );

                $sub_array[]=array(
                    'id'=>11,
                    'name'=>'فلاحی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3585 59.498')
                );

                $sub_array[]=array(
                    'id'=>12,
                    'name'=>'بلوار هاشمیه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3058 59.5013')
                );

                $sub_array[]=array(
                    'id'=>13,
                    'name'=>'بلوار صارمی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3164 59.5042')
                );

                $sub_array[]=array(
                    'id'=>14,
                    'name'=>'خیابان توفیق',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3156 59.5735')
                );

                $sub_array[]=array(
                    'id'=>15,
                    'name'=>'۲۰ متری بلال',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3259 59.6332')
                );

                $sub_array[]=array(
                    'id'=>16,
                    'name'=>'۲۰ متری طلاب',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2899 59.6524')
                );

                $sub_array[]=array(
                    'id'=>17,
                    'name'=>'۳۰ متری طلاب',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2954 59.6477')
                );

                $sub_array[]=array(
                    'id'=>18,
                    'name'=>'آبادگران',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2682 59.5487')
                );

                $sub_array[]=array(
                    'id'=>19,
                    'name'=>'آبروان جاده سرخس',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.0678 59.9575')
                );

                $sub_array[]=array(
                    'id'=>20,
                    'name'=>'آبکوه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3064 59.5819')
                );

                $sub_array[]=array(
                    'id'=>21,
                    'name'=>'آپادانا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.30967861066055 59.57346470034736')
                );

                $sub_array[]=array(
                    'id'=>22,
                    'name'=>'آخوند خراسانی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2862 59.6033')
                );

                $sub_array[]=array(
                    'id'=>23,
                    'name'=>'آرامگاه فردوسی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.4629 59.493')
                );

                $sub_array[]=array(
                    'id'=>24,
                    'name'=>'آرمان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.34099244213782 59.463715310981115')
                );

                $sub_array[]=array(
                    'id'=>25,
                    'name'=>'آزادشهر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3346 59.533')
                );

                $sub_array[]=array(
                    'id'=>26,
                    'name'=>'آزادگان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3407 59.4798')
                );

                $sub_array[]=array(
                    'id'=>27,
                    'name'=>'آزاده',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3522 59.478')
                );

                $sub_array[]=array(
                    'id'=>28,
                    'name'=>'آیت الله بهجت',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2958 59.6141')
                );

                $sub_array[]=array(
                    'id'=>29,
                    'name'=>'ابرار',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3491 59.4774')
                );

                $sub_array[]=array(
                    'id'=>30,
                    'name'=>'ابن سینا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2979 59.585')
                );

                $sub_array[]=array(
                    'id'=>31,
                    'name'=>'ابوذر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3084 59.6308')
                );

                $sub_array[]=array(
                    'id'=>32,
                    'name'=>'ابوذر غفاری',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2915 59.5646')
                );

                $sub_array[]=array(
                    'id'=>33,
                    'name'=>'ابومسلم',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2975 59.5804')
                );

                $sub_array[]=array(
                    'id'=>34,
                    'name'=>'ابونصر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2988 59.5819')
                );

                $sub_array[]=array(
                    'id'=>35,
                    'name'=>'اتوبان جاده نیشابور',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.094 59.6799')
                );

                $sub_array[]=array(
                    'id'=>36,
                    'name'=>'احمدی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2783 59.6326')
                );

                $sub_array[]=array(
                    'id'=>37,
                    'name'=>'ارداک',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.7221 59.3907')
                );

                $sub_array[]=array(
                    'id'=>38,
                    'name'=>'ارشاد الرضا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.285 59.5861')
                );

                $sub_array[]=array(
                    'id'=>39,
                    'name'=>'ارغوان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.34769268359788 59.46770668029786')
                );

                $sub_array[]=array(
                    'id'=>40,
                    'name'=>'ارمغان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3481 59.468')
                );

                $sub_array[]=array(
                    'id'=>41,
                    'name'=>'استقلال',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3334 59.537')
                );

                $sub_array[]=array(
                    'id'=>42,
                    'name'=>'اسدالله زاده',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2982 59.5897')
                );

                $sub_array[]=array(
                    'id'=>43,
                    'name'=>'التیمور',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.319 59.6883')
                );

                $sub_array[]=array(
                    'id'=>44,
                    'name'=>'المهدی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.305 59.6418')
                );

                $sub_array[]=array(
                    'id'=>45,
                    'name'=>'امام خمینی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2794 59.5954')
                );

                $sub_array[]=array(
                    'id'=>46,
                    'name'=>'امام دوست',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.36590658878896 59.53218697422679')
                );

                $sub_array[]=array(
                    'id'=>47,
                    'name'=>'امام رضا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2711 59.6007')
                );

                $sub_array[]=array(
                    'id'=>48,
                    'name'=>'امام هادی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3583 59.5493')
                );

                $sub_array[]=array(
                    'id'=>49,
                    'name'=>'امیرآباد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2625 59.6579')
                );

                $sub_array[]=array(
                    'id'=>50,
                    'name'=>'امیر کبیر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2792 59.5727')
                );

                $sub_array[]=array(
                    'id'=>51,
                    'name'=>'انوری',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.25933922201779 59.59830116895809')
                );

                $sub_array[]=array(
                    'id'=>52,
                    'name'=>'ایثارگران',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.329 59.6111')
                );

                $sub_array[]=array(
                    'id'=>53,
                    'name'=>'ایستگاه سراب',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2943 59.6021')
                );

                $sub_array[]=array(
                    'id'=>54,
                    'name'=>'بابانظر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3004 59.657')
                );

                $sub_array[]=array(
                    'id'=>55,
                    'name'=>'بابک',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2969 59.5755')
                );

                $sub_array[]=array(
                    'id'=>56,
                    'name'=>'بازار سرشور',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.283 59.6038')
                );

                $sub_array[]=array(
                    'id'=>57,
                    'name'=>'باغچه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('35.9819 59.599')
                );

                $sub_array[]=array(
                    'id'=>58,
                    'name'=>'بخارایی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.303 59.5709')
                );

                $sub_array[]=array(
                    'id'=>59,
                    'name'=>'بردباری',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2753 59.5876')
                );

                $sub_array[]=array(
                    'id'=>60,
                    'name'=>'برزش آباد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.37043347989971 59.76750785076906')
                );

                $sub_array[]=array(
                    'id'=>61,
                    'name'=>'برسلانی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3351 59.466')
                );

                $sub_array[]=array(
                    'id'=>62,
                    'name'=>'برک پور',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3086 59.4966')
                );

                $sub_array[]=array(
                    'id'=>63,
                    'name'=>'برکپور',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.308 59.4939')
                );

                $sub_array[]=array(
                    'id'=>64,
                    'name'=>'بزرگراه آزادی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3762 59.5077')
                );

                $sub_array[]=array(
                    'id'=>65,
                    'name'=>'بزرگراه آسیایی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3872 59.5077')
                );

                $sub_array[]=array(
                    'id'=>66,
                    'name'=>'بزرگراه امام علی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3467 59.5065')
                );

                $sub_array[]=array(
                    'id'=>67,
                    'name'=>'بزرگراه شهید چراغچی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3414 59.5836')
                );

                $sub_array[]=array(
                    'id'=>68,
                    'name'=>'بزرگ راه غدیر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.26 59.6367')
                );

                $sub_array[]=array(
                    'id'=>69,
                    'name'=>'بزرگراه فجر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3198 59.6389')
                );

                $sub_array[]=array(
                    'id'=>70,
                    'name'=>'بزرگراه قائم',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3421 59.5818')
                );

                $sub_array[]=array(
                    'id'=>71,
                    'name'=>'بزرگراه کلانتری',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2837 59.561')
                );

                $sub_array[]=array(
                    'id'=>72,
                    'name'=>'بزرگراه میثاق',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3682 59.4921')
                );

                $sub_array[]=array(
                    'id'=>73,
                    'name'=>'بزرگراه همت',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2939 59.6575')
                );

                $sub_array[]=array(
                    'id'=>74,
                    'name'=>'بزرگمهر جنوبی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3144 59.5514')
                );

                $sub_array[]=array(
                    'id'=>75,
                    'name'=>'بزرگمهر شمالی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.317 59.5506')
                );

                $sub_array[]=array(
                    'id'=>76,
                    'name'=>'بعثت',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3025 59.65')
                );

                $sub_array[]=array(
                    'id'=>77,
                    'name'=>'بلوار حسابی جنوبی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3495 59.4949')
                );

                $sub_array[]=array(
                    'id'=>78,
                    'name'=>'بلوار آموزگار',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3404 59.5126')
                );

                $sub_array[]=array(
                    'id'=>79,
                    'name'=>'بولوار ابوطالب',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3251 59.5965')
                );

                $sub_array[]=array(
                    'id'=>80,
                    'name'=>'بلوار ادیب',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3583 59.5204')
                );

                $sub_array[]=array(
                    'id'=>81,
                    'name'=>'بلوار استاد یوسفی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3572 59.5194')
                );

                $sub_array[]=array(
                    'id'=>82,
                    'name'=>'بلوار اقبال لاهوری',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3346 59.4684')
                );

                $sub_array[]=array(
                    'id'=>83,
                    'name'=>'بلوار اقدسیه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3768 59.4804')
                );

                $sub_array[]=array(
                    'id'=>84,
                    'name'=>'بلوار امامت',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3313 59.536')
                );

                $sub_array[]=array(
                    'id'=>85,
                    'name'=>'بلوار امامیه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3588 59.5129')
                );

                $sub_array[]=array(
                    'id'=>86,
                    'name'=>'بلوار امت',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2922 59.6412')
                );

                $sub_array[]=array(
                    'id'=>87,
                    'name'=>'بلوار امیر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3424 59.5783')
                );

                $sub_array[]=array(
                    'id'=>88,
                    'name'=>'بلوار امیرالمومنین',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2894 59.6268')
                );

                $sub_array[]=array(
                    'id'=>89,
                    'name'=>'بلوار امیریه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3815 59.4853')
                );

                $sub_array[]=array(
                    'id'=>90,
                    'name'=>'بلوار اندیشه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3644 59.5287')
                );

                $sub_array[]=array(
                    'id'=>91,
                    'name'=>'بلوار باهنر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3129 59.5216')
                );

                $sub_array[]=array(
                    'id'=>92,
                    'name'=>'بلوار برادران خلیلی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2777 59.5676')
                );

                $sub_array[]=array(
                    'id'=>93,
                    'name'=>'بلوار برنسی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3281 59.4653')
                );

                $sub_array[]=array(
                    'id'=>94,
                    'name'=>'بلوار بعثت',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2931 59.5665')
                );

                $sub_array[]=array(
                    'id'=>95,
                    'name'=>'بلوار توس',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3615 59.5498')
                );

                $sub_array[]=array(
                    'id'=>96,
                    'name'=>'بلوار ثامن',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2685 59.6223')
                );

                $sub_array[]=array(
                    'id'=>97,
                    'name'=>'بلوار جانباز',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3223 59.4889')
                );

                $sub_array[]=array(
                    'id'=>98,
                    'name'=>'بلوار جمهوری',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2602 59.6067')
                );

                $sub_array[]=array(
                    'id'=>99,
                    'name'=>'بلوار چمن',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2685 59.6223')
                );

                $sub_array[]=array(
                    'id'=>100,
                    'name'=>'بلوار حافظ',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3223 59.4889')
                );

                $sub_array[]=array(
                    'id'=>101,
                    'name'=>'بلوار حجاب',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.361 59.5209')
                );

                $sub_array[]=array(
                    'id'=>102,
                    'name'=>'بلوار حر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2592 59.6875')
                );

                $sub_array[]=array(
                    'id'=>103,
                    'name'=>'حسابی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3583 59.5104')
                );

                $sub_array[]=array(
                    'id'=>104,
                    'name'=>'بلوار حسابی شمالی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3619 59.5117')
                );

                $sub_array[]=array(
                    'id'=>104,
                    'name'=>'بلوار دانش آمور',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3352 59.5131')
                );

                $sub_array[]=array(
                    'id'=>106,
                    'name'=>'بلوار دانشجو',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3364 59.5043')
                );

                $sub_array[]=array(
                    'id'=>107,
                    'name'=>'بلوار دستغیب',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3109 59.5666')
                );

                $sub_array[]=array(
                    'id'=>108,
                    'name'=>'بلوار دلاوارن',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2851 59.5121')
                );

                $sub_array[]=array(
                    'id'=>109,
                    'name'=>'بلوار دندانپزشکان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.341 59.4761')
                );

                $sub_array[]=array(
                    'id'=>110,
                    'name'=>'بلوار دهقان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.27786208089151 59.64624199535579')
                );

                $sub_array[]=array(
                    'id'=>111,
                    'name'=>'بلوار رحمانیه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3702 59.4718')
                );

                $sub_array[]=array(
                    'id'=>112,
                    'name'=>'بلوار رسالت',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.315 59.6391')
                );

                $sub_array[]=array(
                    'id'=>113,
                    'name'=>'بلوار رستمی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2674 59.6348')
                );

                $sub_array[]=array(
                    'id'=>114,
                    'name'=>'بلوار رضوی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2931 59.5412')
                );

                $sub_array[]=array(
                    'id'=>115,
                    'name'=>'بلوار رضویه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3898 59.4997')
                );

                $sub_array[]=array(
                    'id'=>116,
                    'name'=>'بلوار زکریا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2897 59.5436')
                );

                $sub_array[]=array(
                    'id'=>117,
                    'name'=>'بلوار ساجدی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3422 59.5588')
                );

                $sub_array[]=array(
                    'id'=>118,
                    'name'=>'بلوار سپاه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2234 59.6108')
                );

                $sub_array[]=array(
                    'id'=>119,
                    'name'=>'بلوار سجاد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3179 59.5517')
                );

                $sub_array[]=array(
                    'id'=>120,
                    'name'=>'بلوار سجادیه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3712 59.4738')
                );

                $sub_array[]=array(
                    'id'=>121,
                    'name'=>'بلوار سرافرازان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2908 59.5034')
                );

                $sub_array[]=array(
                    'id'=>122,
                    'name'=>'بلوار سید رضی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3339 59.5205')
                );

                $sub_array[]=array(
                    'id'=>123,
                    'name'=>'بلوار شریعتی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3534 59.5025')
                );

                $sub_array[]=array(
                    'id'=>124,
                    'name'=>'بلوار شفا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3293 59.5983')
                );

                $sub_array[]=array(
                    'id'=>125,
                    'name'=>'بلوار شمس',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.5793 59.2127')
                );

                $sub_array[]=array(
                    'id'=>126,
                    'name'=>'بلوار شهید رفیعی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3514 59.4888')
                );

                $sub_array[]=array(
                    'id'=>127,
                    'name'=>'بلوار شهید صادقی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3161 59.5753')
                );

                $sub_array[]=array(
                    'id'=>128,
                    'name'=>'بلوار شهید کاوه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.272 59.5565')
                );

                $sub_array[]=array(
                    'id'=>129,
                    'name'=>'بلوار شهید کریمی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3167 59.5965')
                );

                $sub_array[]=array(
                    'id'=>130,
                    'name'=>'بلوار شهید کشوری',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3154 59.6129')
                );

                $sub_array[]=array(
                    'id'=>131,
                    'name'=>'بلوار شیرودی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2712 59.6233')
                );

                $sub_array[]=array(
                    'id'=>132,
                    'name'=>'بلوار صادقیه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3758 59.4727')
                );

                $sub_array[]=array(
                    'id'=>133,
                    'name'=>'بلوار صبا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2282 59.6125')
                );

                $sub_array[]=array(
                    'id'=>134,
                    'name'=>'بلوار صدر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2672 59.6197')
                );

                $sub_array[]=array(
                    'id'=>135,
                    'name'=>'بلوار صیاد شیرازی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3168 59.4776')
                );

                $sub_array[]=array(
                    'id'=>136,
                    'name'=>'بلوار عبادی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3135 59.6139')
                );
                $sub_array[]=array(
                    'id'=>137,
                    'name'=>'بلوار عبدالمطلب',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3251 59.5947')
                );
                $sub_array[]=array(
                    'id'=>138,
                    'name'=>'بلوار عزیزیه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3868 59.4928')
                );
                $sub_array[]=array(
                    'id'=>139,
                    'name'=>'بلوار عصمتیه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3841 59.4979')
                );
                $sub_array[]=array(
                    'id'=>140,
                    'name'=>'بلوار فارغ التحصیلان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.342 59.4682')
                );
                $sub_array[]=array(
                    'id'=>141,
                    'name'=>'بلوار فردوسی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3245 59.5608')
                );
                $sub_array[]=array(
                    'id'=>142,
                    'name'=>'بلوار فرهنگ',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3301 59.507')
                );
                $sub_array[]=array(
                    'id'=>143,
                    'name'=>'بلوار فلسطین',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3056 59.5657')
                );
                $sub_array[]=array(
                    'id'=>144,
                    'name'=>'بلوار قرنی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3128 59.5874')
                );
                $sub_array[]=array(
                    'id'=>145,
                    'name'=>'بلوار کشاورز',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3563 59.5689')
                );
                $sub_array[]=array(
                    'id'=>146,
                    'name'=>'بلوار کلاهدوز',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3066 59.5796')
                );
                $sub_array[]=array(
                    'id'=>147,
                    'name'=>'بلوار کوهستان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3406 59.4562')
                );
                $sub_array[]=array(
                    'id'=>148,
                    'name'=>'بلوار گاز',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3136 59.6329')
                );
                $sub_array[]=array(
                    'id'=>149,
                    'name'=>'بلوار گلدیس',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3229 59.4694')
                );
                $sub_array[]=array(
                    'id'=>150,
                    'name'=>'بلوار گلها',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3612 59.4678')
                );
                $sub_array[]=array(
                    'id'=>151,
                    'name'=>'بلوار لادن',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3218 59.4723')
                );
                $sub_array[]=array(
                    'id'=>152,
                    'name'=>'بلوار مجیدیه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3681 59.4685')
                );
                $sub_array[]=array(
                    'id'=>153,
                    'name'=>'بلوار محمدیه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3696 59.4829')
                );
                $sub_array[]=array(
                    'id'=>154,
                    'name'=>'بلوار مدرس',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.293 59.5994')
                );
                $sub_array[]=array(
                    'id'=>155,
                    'name'=>'بلوار مصلی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2691 59.6359')
                );
                $sub_array[]=array(
                    'id'=>156,
                    'name'=>'بلوار ملک آباد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3073 59.5512')
                );
                $sub_array[]=array(
                    'id'=>157,
                    'name'=>'بلوار منتظری',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2937 59.5594')
                );
                $sub_array[]=array(
                    'id'=>158,
                    'name'=>'بلوار مهدیه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3832 59.4636')
                );
                $sub_array[]=array(
                    'id'=>159,
                    'name'=>'بلوار مهران',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3361 59.5202')
                );
                $sub_array[]=array(
                    'id'=>160,
                    'name'=>'بلوار موسوی قوچانی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.329 59.5868')
                );
                $sub_array[]=array(
                    'id'=>161,
                    'name'=>'بلوار مولوی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.5811 59.2087')
                );
                $sub_array[]=array(
                    'id'=>162,
                    'name'=>'بلوار میامی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2413 59.7605')
                );
                $sub_array[]=array(
                    'id'=>163,
                    'name'=>'بلوار نامجو',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2776 59.5758')
                );
                $sub_array[]=array(
                    'id'=>164,
                    'name'=>'بلوار نقویه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3915 59.4843')
                );
                $sub_array[]=array(
                    'id'=>165,
                    'name'=>'بلوار نماز',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.271 59.5406')
                );
                $sub_array[]=array(
                    'id'=>166,
                    'name'=>'بلوار نمایشگاه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3453 59.4633')
                );
                $sub_array[]=array(
                    'id'=>167,
                    'name'=>'بلوار هاشمی مهنه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3638 59.4952')
                );
                $sub_array[]=array(
                    'id'=>168,
                    'name'=>'بلوار هدایت',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3296 59.603')
                );
                $sub_array[]=array(
                    'id'=>169,
                    'name'=>'بلوار هفت تیر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3143 59.4911')
                );
                $sub_array[]=array(
                    'id'=>170,
                    'name'=>'بلوار هنرستان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3137 59.5002')
                );
                $sub_array[]=array(
                    'id'=>171,
                    'name'=>'بلوار هنرور',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3269 59.6082')
                );
                $sub_array[]=array(
                    'id'=>172,
                    'name'=>'بلوار وکیل آباد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('6.3306 59.4907')
                );
                $sub_array[]=array(
                    'id'=>173,
                    'name'=>'بلوار ولایت',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2799 59.6341')
                );
                $sub_array[]=array(
                    'id'=>174,
                    'name'=>'بلوار ولیعصر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3424 59.5785')
                );
                $sub_array[]=array(
                    'id'=>175,
                    'name'=>'بنفشه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.32 59.5559')
                );
                $sub_array[]=array(
                    'id'=>176,
                    'name'=>'بهاران',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.343 59.557')
                );
                $sub_array[]=array(
                    'id'=>177,
                    'name'=>'بهارستان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2747 59.5455')
                );
                $sub_array[]=array(
                    'id'=>178,
                    'name'=>'سپاد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3455 59.6')
                );
                $sub_array[]=array(
                    'id'=>179,
                    'name'=>'بهشت',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3194 59.5139')
                );
                $sub_array[]=array(
                    'id'=>180,
                    'name'=>'بهشتی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2827 59.5744')
                );
                $sub_array[]=array(
                    'id'=>181,
                    'name'=>'بهمن',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.347 59.6247')
                );
                $sub_array[]=array(
                    'id'=>182,
                    'name'=>'بهروز',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3571 59.4957')
                );
                $sub_array[]=array(
                    'id'=>183,
                    'name'=>'بوستان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3606 59.4705')
                );
                $sub_array[]=array(
                    'id'=>184,
                    'name'=>'بلوار ارشاد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('6.3187 59.5713')
                );
                $sub_array[]=array(
                    'id'=>185,
                    'name'=>'بیستون',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3158 59.5691')
                );
                $sub_array[]=array(
                    'id'=>186,
                    'name'=>'بیهقی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.32405779788323 59.532114110746974')
                );
                $sub_array[]=array(
                    'id'=>187,
                    'name'=>'پاستور',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2971 59.5819')
                );
                $sub_array[]=array(
                    'id'=>188,
                    'name'=>'پاسداران',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.289 59.5965')
                );
                $sub_array[]=array(
                    'id'=>189,
                    'name'=>'پایداری',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2897 59.5068')
                );
                $sub_array[]=array(
                    'id'=>190,
                    'name'=>'پرستار',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2918 59.5798')
                );
                $sub_array[]=array(
                    'id'=>191,
                    'name'=>'پرورش',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.334 59.5052')
                );
                $sub_array[]=array(
                    'id'=>192,
                    'name'=>'پروین اعتصامی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2594 59.6131')
                );
                $sub_array[]=array(
                    'id'=>193,
                    'name'=>'پژوهش',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3424 59.4659')
                );
                $sub_array[]=array(
                    'id'=>194,
                    'name'=>'پلیس راه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3658 59.5376')
                );
                $sub_array[]=array(
                    'id'=>195,
                    'name'=>'پنج تن',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3167 59.6774')
                );
                $sub_array[]=array(
                    'id'=>196,
                    'name'=>'پنجراه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.281 59.6218')
                );
                $sub_array[]=array(
                    'id'=>197,
                    'name'=>'تعبدی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3083 59.6063')
                );
                $sub_array[]=array(
                    'id'=>198,
                    'name'=>'تقی آباد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2901 59.5829')
                );
                $sub_array[]=array(
                    'id'=>199,
                    'name'=>'توحید',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3014 59.6022')
                );
                $sub_array[]=array(
                    'id'=>200,
                    'name'=>'توس',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.4808 59.5332')
                );
                $sub_array[]=array(
                    'id'=>201,
                    'name'=>'ثمانه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3311 59.557')
                );
                $sub_array[]=array(
                    'id'=>202,
                    'name'=>'جاده آرامگاه فردوسی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.4578 59.4913')
                );
                $sub_array[]=array(
                    'id'=>203,
                    'name'=>'جاده ابلق',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3422 59.7678')
                );
                $sub_array[]=array(
                    'id'=>204,
                    'name'=>'جاده بیرجند',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('32.865746677088076 59.251402822214665')
                );
                $sub_array[]=array(
                    'id'=>205,
                    'name'=>'جاده تربت حیدریه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('35.897 59.4835')
                );
                $sub_array[]=array(
                    'id'=>206,
                    'name'=>'جاده ریحان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.5097 59.4104')
                );
                $sub_array[]=array(
                    'id'=>207,
                    'name'=>'جاده ساغشک',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.47 59.309')
                );
                $sub_array[]=array(
                    'id'=>208,
                    'name'=>'جاده سد طرق',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2124 59.5633')
                );
                $sub_array[]=array(
                    'id'=>209,
                    'name'=>'جاده سد کارده',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.5661 59.6816')
                );
                $sub_array[]=array(
                    'id'=>210,
                    'name'=>'جاده سرخس',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.1224 59.9117')
                );
                $sub_array[]=array(
                    'id'=>211,
                    'name'=>'جاد ه شاندیز',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3765 59.4136')
                );
                $sub_array[]=array(
                    'id'=>212,
                    'name'=>'جاده طرقبه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3309 59.4212')
                );
                $sub_array[]=array(
                    'id'=>213,
                    'name'=>'جاده فریمان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('35.8862 59.7437')
                );
                $sub_array[]=array(
                    'id'=>214,
                    'name'=>'جاده قدیم قوچان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.388 59.5216')
                );
                $sub_array[]=array(
                    'id'=>215,
                    'name'=>'جاده قدیم نیشابور',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.1162 59.6392')
                );
                $sub_array[]=array(
                    'id'=>216,
                    'name'=>'جاده قوچان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.4775 59.3559')
                );
                $sub_array[]=array(
                    'id'=>217,
                    'name'=>'جاده کارخانه سیمان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3449 59.6586')
                );
                $sub_array[]=array(
                    'id'=>218,
                    'name'=>'جاده کاهو',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.4924 59.2777')
                );
                $sub_array[]=array(
                    'id'=>219,
                    'name'=>'جاده کشف',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3629 59.5764')
                );
                $sub_array[]=array(
                    'id'=>220,
                    'name'=>'جاده کلات',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3499 59.6287')
                );
                $sub_array[]=array(
                    'id'=>221,
                    'name'=>'جاهد شهر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3648 59.4685')
                );
                $sub_array[]=array(
                    'id'=>222,
                    'name'=>'جلال آل احمد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3325 59.5282')
                );
                $sub_array[]=array(
                    'id'=>223,
                    'name'=>'جنت',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2929 59.5977')
                );
                $sub_array[]=array(
                    'id'=>224,
                    'name'=>'جهان آرا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.27529036474396 59.57255107196761')
                );
                $sub_array[]=array(
                    'id'=>225,
                    'name'=>'چاهشک',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.4143 59.4509')
                );
                $sub_array[]=array(
                    'id'=>226,
                    'name'=>'چراغچی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3238 59.4886')
                );
                $sub_array[]=array(
                    'id'=>227,
                    'name'=>'چمران',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2917 59.5982')
                );
                $sub_array[]=array(
                    'id'=>228,
                    'name'=>'چناران',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.65005801558107 59.11806271432087')
                );
                $sub_array[]=array(
                    'id'=>229,
                    'name'=>'چهارراه بیسیم',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2797 59.5974')
                );
                $sub_array[]=array(
                    'id'=>230,
                    'name'=>'چهارراه برق',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.301 59.6369')
                );
                $sub_array[]=array(
                    'id'=>231,
                    'name'=>'چهارراه خسروی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2895 59.6058')
                );
                $sub_array[]=array(
                    'id'=>232,
                    'name'=>'چهارراه دانش',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.279 59.6079')
                );
                $sub_array[]=array(
                    'id'=>233,
                    'name'=>'چهارراه دکترا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2921 59.5883')
                );
                $sub_array[]=array(
                    'id'=>234,
                    'name'=>'چهارراه اه آهن',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3582 59.5078')
                );
                $sub_array[]=array(
                    'id'=>235,
                    'name'=>'چهارراه شهدا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2943 59.6113')
                );
                $sub_array[]=array(
                    'id'=>236,
                    'name'=>'چهارراه عامل',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3094 59.6032')
                );
                $sub_array[]=array(
                    'id'=>237,
                    'name'=>'چهارراه عشرت آباد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3017 59.6129')
                );
                $sub_array[]=array(
                    'id'=>238,
                    'name'=>'',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2808 59.5966')
                );
                $sub_array[]=array(
                    'id'=>239,
                    'name'=>'چهارراه لشکر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('')
                );
                $sub_array[]=array(
                    'id'=>240,
                    'name'=>'چهارراه مخابرات',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3547 59.5202')
                );
                $sub_array[]=array(
                    'id'=>241,
                    'name'=>'چهارراه مقدم',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2942 59.6239')
                );
                $sub_array[]=array(
                    'id'=>242,
                    'name'=>'چهارراه ورزش',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3518 59.5027')
                );
                $sub_array[]=array(
                    'id'=>243,
                    'name'=>'چهار طبقه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2915 59.5988')
                );
                $sub_array[]=array(
                    'id'=>244,
                    'name'=>'چهار فصل',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.4476 59.4308')
                );
                $sub_array[]=array(
                    'id'=>245,
                    'name'=>'حافظ',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.248 59.5941')
                );
                $sub_array[]=array(
                    'id'=>246,
                    'name'=>'حامد جنوبی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3154 59.5466')
                );
                $sub_array[]=array(
                    'id'=>247,
                    'name'=>'حامد شمالی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.322 59.5495')
                );
                $sub_array[]=array(
                    'id'=>248,
                    'name'=>'حرعاملی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3191 59.593')
                );
                $sub_array[]=array(
                    'id'=>249,
                    'name'=>'حسین باشی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3082 59.6063')
                );
                $sub_array[]=array(
                    'id'=>250,
                    'name'=>'حکیم نظامی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2819 59.5748')
                );
                $sub_array[]=array(
                    'id'=>252,
                    'name'=>'حومه شهر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2105 59.6418')
                );
                $sub_array[]=array(
                    'id'=>253,
                    'name'=>'خادم الشریعه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.36836012638344 59.54031944274903')
                );
                $sub_array[]=array(
                    'id'=>254,
                    'name'=>'خرمشهر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.27 59.5918')
                );
                $sub_array[]=array(
                    'id'=>255,
                    'name'=>'خسروی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3768 59.4805')
                );
                $sub_array[]=array(
                    'id'=>256,
                    'name'=>'خضرائی منش',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3268 59.4795')
                );
                $sub_array[]=array(
                    'id'=>257,
                    'name'=>'خلج',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2388 59.5989')
                );
                $sub_array[]=array(
                    'id'=>258,
                    'name'=>'خواجه ربیع',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3367 59.6284')
                );
                $sub_array[]=array(
                    'id'=>259,
                    'name'=>'خوش هوا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.5005 59.6193')
                );
                $sub_array[]=array(
                    'id'=>260,
                    'name'=>'دانشگاه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2938 59.5953')
                );
                $sub_array[]=array(
                    'id'=>261,
                    'name'=>'رازی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3542 59.5348')
                );
                $sub_array[]=array(
                    'id'=>262,
                    'name'=>'صدف',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3377 59.4968')
                );
                $sub_array[]=array(
                    'id'=>263,
                    'name'=>'هفده شهریور',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2722 59.6143')
                );
                $sub_array[]=array(
                    'id'=>264,
                    'name'=>'خیام جنوبی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.32038112747794 59.56538200378419')
                );
                $sub_array[]=array(
                    'id'=>265,
                    'name'=>'خین عرب',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3594 59.5847')
                );
                $sub_array[]=array(
                    'id'=>266,
                    'name'=>'دادگر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3409 59.4782')
                );
                $sub_array[]=array(
                    'id'=>267,
                    'name'=>'دانش غربی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2842 59.604')
                );
                $sub_array[]=array(
                    'id'=>268,
                    'name'=>'دانش سرا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3059 59.5881')
                );
                $sub_array[]=array(
                    'id'=>269,
                    'name'=>'دروازه طلایی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2914 59.5989')
                );
                $sub_array[]=array(
                    'id'=>270,
                    'name'=>'دریا دل',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2987 59.6169')
                );
                $sub_array[]=array(
                    'id'=>271,
                    'name'=>'دعبل خزایی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2882 59.5445')
                );
                $sub_array[]=array(
                    'id'=>272,
                    'name'=>'ده غیبی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.1746 59.6067')
                );
                $sub_array[]=array(
                    'id'=>273,
                    'name'=>'دهخدا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2909 59.5398')
                );
                $sub_array[]=array(
                    'id'=>274,
                    'name'=>'دهشک',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.4958 59.4778')
                );
                $sub_array[]=array(
                    'id'=>275,
                    'name'=>'دولت آباد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.44614210212922 59.18197631835938')
                );
                $sub_array[]=array(
                    'id'=>276,
                    'name'=>'راه آهن',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.304 59.6212')
                );
                $sub_array[]=array(
                    'id'=>277,
                    'name'=>'راهنمایی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3031 59.5708')
                );
                $sub_array[]=array(
                    'id'=>278,
                    'name'=>'رضا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2915 59.5691')
                );
                $sub_array[]=array(
                    'id'=>279,
                    'name'=>'رضا شهر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2812 59.5319')
                );
                $sub_array[]=array(
                    'id'=>280,
                    'name'=>'رهایی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2904 59.509')
                );
                $sub_array[]=array(
                    'id'=>281,
                    'name'=>'رودکی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2781 59.5715')
                );
                $sub_array[]=array(
                    'id'=>282,
                    'name'=>'زیبا شهر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3305 59.5392')
                );
                $sub_array[]=array(
                    'id'=>283,
                    'name'=>'سامانیه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.319 59.5082')
                );

                $sub_array[]=array(
                    'id'=>284,
                    'name'=>'سپیده',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2232 59.6125')
                );

                $sub_array[]=array(
                    'id'=>285,
                    'name'=>'سروش',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3311 59.5234')
                );
                $sub_array[]=array(
                    'id'=>286,
                    'name'=>'سعد آباد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3056 59.59')
                );
                $sub_array[]=array(
                    'id'=>287,
                    'name'=>'سعدی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2946 59.601')
                );
                $sub_array[]=array(
                    'id'=>288,
                    'name'=>'سلمان فارسی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2999 59.579')
                );
                $sub_array[]=array(
                    'id'=>289,
                    'name'=>'سناباد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3017 59.5844')
                );
                $sub_array[]=array(
                    'id'=>290,
                    'name'=>'سنایی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2999 59.5978')
                );

                $sub_array[]=array(
                    'id'=>291,
                    'name'=>'سه راه ادبیات',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2957 59.5861')
                );
                $sub_array[]=array(
                    'id'=>292,
                    'name'=>'سه راه دانش',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3822 59.5353')
                );
                $sub_array[]=array(
                    'id'=>293,
                    'name'=>'سه راه فردوسی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.4552 59.4762')
                );
                $sub_array[]=array(
                    'id'=>294,
                    'name'=>'سیده مرتضی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3261 59.5143')
                );
                $sub_array[]=array(
                    'id'=>295,
                    'name'=>'سیدان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.5152 59.2998')
                );
                $sub_array[]=array(
                    'id'=>296,
                    'name'=>'سیدی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2374 59.6043')
                );
                $sub_array[]=array(
                    'id'=>297,
                    'name'=>'شاهد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3578 59.5168')
                );
                $sub_array[]=array(
                    'id'=>298,
                    'name'=>'شاهنامه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.4765 59.5261')
                );
                $sub_array[]=array(
                    'id'=>299,
                    'name'=>'شهرستانی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3102 59.4717')
                );
                $sub_array[]=array(
                    'id'=>300,
                    'name'=>'شهرک ابوذر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2255 59.6151')
                );
                $sub_array[]=array(
                    'id'=>301,
                    'name'=>'شهرک بهارستان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.5155 59.3224')
                );
                $sub_array[]=array(
                    'id'=>302,
                    'name'=>'شهرک ثامن',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2899 59.669')
                );
                $sub_array[]=array(
                    'id'=>303,
                    'name'=>'شهید قانع',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.339 59.4886')
                );
                $sub_array[]=array(
                    'id'=>304,
                    'name'=>'شهید صدوق',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3041 59.6391')
                );
                $sub_array[]=array(
                    'id'=>305,
                    'name'=>'شیخ طوسی شمالی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3185 59.6723')
                );
                $sub_array[]=array(
                    'id'=>306,
                    'name'=>'طبرسی بلوار اول',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2996 59.6346')
                );
                $sub_array[]=array(
                    'id'=>307,
                    'name'=>'طبرسی بلوار دوم',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.322 59.6722')
                );
                $sub_array[]=array(
                    'id'=>308,
                    'name'=>'طلاب',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2989 59.6475')
                );
                $sub_array[]=array(
                    'id'=>309,
                    'name'=>'عارف',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2928 59.5774')
                );
                $sub_array[]=array(
                    'id'=>310,
                    'name'=>'عدل خمینی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.277 59.5959')
                );
                $sub_array[]=array(
                    'id'=>311,
                    'name'=>'علیمردانی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2964 59.6383')
                );
                $sub_array[]=array(
                    'id'=>312,
                    'name'=>'عنصری غربی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2754 59.6106')
                );
                $sub_array[]=array(
                    'id'=>313,
                    'name'=>'عنصری شرقی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2701 59.6157')
                );
                $sub_array[]=array(
                    'id'=>314,
                    'name'=>'غدیر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3396 59.4813')
                );
                $sub_array[]=array(
                    'id'=>315,
                    'name'=>'فاطمیه',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3625 59.4928')
                );
                $sub_array[]=array(
                    'id'=>316,
                    'name'=>'فداییان اسلام',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2656 59.6131')
                );
                $sub_array[]=array(
                    'id'=>317,
                    'name'=>'فرامرز عباسی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3369 59.5574')
                );
                $sub_array[]=array(
                    'id'=>318,
                    'name'=>'فرهاد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3119 59.5592')
                );
                $sub_array[]=array(
                    'id'=>319,
                    'name'=>'فیاض بخش',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2764 59.5903')
                );
                $sub_array[]=array(
                    'id'=>320,
                    'name'=>'قائم',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2452 59.5971')
                );
                $sub_array[]=array(
                    'id'=>321,
                    'name'=>'قائم مقام فراهانی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3356 59.5002')
                );
                $sub_array[]=array(
                    'id'=>323,
                    'name'=>'قاضی طباطبایی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3143 59.5794')
                );
                $sub_array[]=array(
                    'id'=>324,
                    'name'=>'قباد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2631 59.6036')
                );
                $sub_array[]=array(
                    'id'=>325,
                    'name'=>'کارگر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.341 59.5655')
                );
                $sub_array[]=array(
                    'id'=>326,
                    'name'=>'کاشانی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3042 59.6104')
                );
                $sub_array[]=array(
                    'id'=>327,
                    'name'=>'کامیاب',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3131 59.61')
                );
                $sub_array[]=array(
                    'id'=>328,
                    'name'=>'کاهو',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.455 59.2158')
                );
                $sub_array[]=array(
                    'id'=>329,
                    'name'=>'کاویان',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.0413 59.6985')
                );
                $sub_array[]=array(
                    'id'=>330,
                    'name'=>'کرامت',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.28849401481101 59.669580459594734')
                );
                $sub_array[]=array(
                    'id'=>331,
                    'name'=>'کوشش',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2613 59.6038')
                );
                $sub_array[]=array(
                    'id'=>332,
                    'name'=>'کوهسنگی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2875 59.5738')
                );
                $sub_array[]=array(
                    'id'=>333,
                    'name'=>'مجد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3065 59.5876')
                );
                $sub_array[]=array(
                    'id'=>334,
                    'name'=>'مجلسی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3055 59.6311')
                );
                $sub_array[]=array(
                    'id'=>335,
                    'name'=>'مطهری جنوبی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3045 59.5933')
                );
                $sub_array[]=array(
                    'id'=>336,
                    'name'=>'مطهری شمالی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3157 59.607')
                );
                $sub_array[]=array(
                    'id'=>337,
                    'name'=>'معاد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3326 59.5282')
                );
                $sub_array[]=array(
                    'id'=>338,
                    'name'=>'مفتح',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2942 59.6469')
                );
                $sub_array[]=array(
                    'id'=>339,
                    'name'=>'ملاصدرا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2914 59.5745')
                );
                $sub_array[]=array(
                    'id'=>340,
                    'name'=>'ملک الشعرا بهار',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.2822 59.594')
                );
                $status='found';
                break;

            case 'طرقبه':
                $sub_array[]=array(
                    'id'=>2554,
                    'name'=>'امام زاده یاسر و ناصر',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3206','36.3206')
                );

                $sub_array[]=array(
                    'id'=>190,
                    'name'=>'بلوار امام رضا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3314','36.3314')
                );

                $sub_array[]=array(
                    'id'=>1793,
                    'name'=>'بلوار فرهنگ',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3197','59.3658')
                );

                $sub_array[]=array(
                    'id'=>1849,
                    'name'=>'بلوار کاخ',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3401','59.4249')
                );


                $sub_array[]=array(
                    'id'=>12948,
                    'name'=>'بلوار کوهساران',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.31249702458188','59.38651084899902')
                );
                $status='found';
                break;

            case 'شاندیز':
                $sub_array[]=array(
                    'id'=>6171,
                    'name'=>'16 متری سجاد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3928','59.3052')
                );

                $sub_array[]=array(
                    'id'=>2517,
                    'name'=>'ابراهیم آباد',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.4115','59.2904')
                );

                $sub_array[]=array(
                    'id'=>458,
                    'name'=>'ابرده',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3829','59.2693')
                );

                $sub_array[]=array(
                    'id'=>7526,
                    'name'=>'ابرده سفلی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.38774382472152','59.26570415496827')
                );

                $sub_array[]=array(
                    'id'=>7526,
                    'name'=>'ابرده سفلی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.38774382472152','59.26570415496827')
                );
                $status='found';

                break;

            case 'گلبهار':
                $sub_array[]=array(
                    'id'=>1739,
                    'name'=>'ابقد (گلبهار)',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.5721','59.1026')
                );

                $sub_array[]=array(
                    'id'=>3021,
                    'name'=>'این سینا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.5742','59.1928')
                );

                $sub_array[]=array(
                    'id'=>3417,
                    'name'=>'استاد رسام',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.5704','59.1876')
                );

                $sub_array[]=array(
                    'id'=>205,
                    'name'=>'امام رضا',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.577','59.1766')
                );
                $status='found';
                break;

            default:
                $sub_array[]=array(
                    'id'=>67,
                    'name'=>'خالی',
                    'similar_names'=>'',
                    'approved'=>1,
                    'geo_center'=>array('36.3599','59.5042')
                );
                $status='not_found';
                break;
        }
        $output=array(
            "status" =>$status,
            "districts" =>$sub_array
        );

        echo json_encode($output);
        exit;
    }

    public static function archive_sale_prop_callback()
    {
        header("Content-Type: application/json");
        $request=$_POST;

        if (isset($request['pid']) and $request['pid'] != "" and current_user_can('administrator'))
        {

            update_post_meta( intval($request['pid']), 'sale_archive', 'true' );
            wp_update_post(array('ID' => intval($request['pid']), 'post_status' =>'draft'));
            $output=array(
                "status" =>'ok'
            );
        }
        else
        {
            $output=array(
                "status" =>'not_safe'
            );
        }


        echo json_encode($output);
        exit;
    }

    public static function archive_prop_callback()
    {
        header("Content-Type: application/json");
        $request=$_POST;

        if (isset($request['pid']) and $request['pid'] != "" and current_user_can('administrator'))
        {

            update_post_meta( intval($request['pid']), 'archive', 'true' );
            // Change the line below to your timezone!
            date_default_timezone_set('Asia/Tehran');
            $date = date('m/d/Y h:i:s', time());
            // Update the meta field in the database.
            update_post_meta( intval($request['pid']), 'archived_date', $date);
            // call wp_update_post update, which calls save_post again. E.g:
            wp_update_post(array('ID' => intval($request['post_id']), 'post_status' =>'draft'));

            wp_update_post(array('ID' => intval($request['pid']), 'post_status' =>'draft'));
            $output=array(
                "status" =>'ok'
            );
        }
        else
        {
            $output=array(
                "status" =>'not_safe'
            );
        }


        echo json_encode($output);
        exit;
    }







	public static function get_exp_files_callback()
	{
		header("Content-Type: application/json");
		$request = $_REQUEST;
		$user_id=$request['user_id'];
		if (get_current_user_id() == intval($request['user_id']))
		{
			require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
			header("Content-Type: application/json");



			$args_all = array(
				'post_type' => 'aralproperty',
				'limit' => -1,
				'orderby' => 'date',
				'order' => 'DESC',
				'meta_key'         => 'expert_id',
				'meta_value'       => get_current_user_id()
			);
			$query_all = new \WP_Query( $args_all );
			$count_all = $query_all->found_posts;

			global $post;
			$args = array(
				'post_type'        => 'aralproperty',
				'meta_key'         => 'expert_id',
				'meta_value'       => get_current_user_id(),
				'posts_per_page' => intval($request['length']),
				'limit' => intval($request['length']),
				'offset' => intval($request['start']),
				'orderby' => 'date',
				'order' => 'DESC',
			);

			$query = new \WP_Query( $args );
			$counter=intval($request['start']);
			if ( $query->have_posts() )
			{
				while ( $query->have_posts() )
				{
					$query->the_post();
					$aral_prop_meta=get_post_meta($post->ID);
//					if (get_post_meta($post->ID,'tender_status',true) != 'archived')
//					{
						$sub_array = array();
						$sub_array[] = $counter+1;
					$sub_array[] = get_the_ID();
					$sub_array[] ='<a target="_blank" href="'.home_url('aral-prop?id='.get_the_ID()).'"><i class="fa fa-lg fa-link"></i>'.'  '.get_the_title().'</a>';
						switch ($aral_prop_meta['deal_type'][0])
						{
							case 'فروش':
								$sub_array[] = 'قیمت :'.number_format($aral_prop_meta['price'][0]).' ت ';
								break;
							case 'رهن و اجاره':
								$sub_array[] = 'رهن :'.number_format($aral_prop_meta['mortgage'][0]).' ت '.' - '.' اجاره'.number_format($aral_prop_meta['rent'][0]).' ت ';
								break;
							case 'رهن کامل':
								$sub_array[] = 'رهن :'.number_format($aral_prop_meta['mortgage'][0]).' ت ';
								break;
						}
					$sub_array[]=$aral_prop_meta['city_name'][0].' - '.$aral_prop_meta['district_name'][0].' '.'<i class="fa fa-lg fa-eye" title="'.$aral_prop_meta['street'][0].'" data-toggle="tooltip" data-placement="top"></i>';
					$sub_array[] = get_the_date();
					$post_status='';
					$post_status_color='';
					switch (get_post_status($post->ID))
					{
						case 'publish':
							$post_status='منتشر شده';
							$post_status_color='success';
							break;
						case'draft':
							$post_status='پیش نویس';
							$post_status_color='danger';
							break;
						default:
							$post_status='-';
							$post_status_color='info';
							break;
					}
					$sub_array[] = '<span class="badge badge-'.$post_status_color.'">'.$post_status.'</span>';



//					$operations='<div class="dropdown">
//                                                <a href="#" class="btn btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
//                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
//                                                </a>
//
//                                            <div class="dropdown-menu dropdown-menu-right mobPosDropdown" x-placement="bottom-end" style="display: none; width: 184px; font-size: 14px; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(64px, 271px, 0px);">
//                                                    <button data-prop_id="'.get_the_ID().'" id="show_divar_list_modal" class="dropdown-item" type="button" >لیست آگهی های دیوار</button>
//                                                    <button data-prop_id="'.get_the_ID().'" id="show_prop_edit_modal" class="dropdown-item" type="button" >ویرایش</button>
//                                            </div>
//                                 </div>';

					$operations='<div class="dropdown">
                                                <a href="#" class="btn btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                </a>
                                                
                                            <div class="dropdown-menu dropdown-menu-right mobPosDropdown" x-placement="bottom-end" style="display: none; width: 184px; font-size: 14px; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(64px, 271px, 0px);">
                                                    <button data-prop_id="'.get_the_ID().'" id="show_divar_list_modal" class="dropdown-item" type="button" >لیست آگهی های دیوار</button>
                                            </div>
                                 </div>';

						$sub_array[] = $operations;
						$data[] = $sub_array;
					$counter++;
//					}
				}
			}
			wp_reset_query();
			$output = array(
				"draw"    => intval($_GET["draw"]),
				"recordsTotal"  =>  intval($count_all),
				"recordsFiltered" => intval($count_all),
				"data" => $data
			);
			echo json_encode($output);
			exit();
		}
	}
	public static function add_divar_callback()
	{
		header("Content-Type: application/json");
		$request = $_REQUEST;

		if (get_current_user_id() == intval($request['user_id']))
		{
			$divar_list=array();
			$phone_exist=false;

			if (metadata_exists('post',$request['prop_id'],'divar_list'))
			{
				$divar_list=get_post_meta(intval($request['prop_id']),'divar_list',true);

				foreach ( $divar_list as $key => $value )
				{

					if ($key == intval($request['divar_phone']))
					{
						$phone_exist=true;
					}
				}

				if ($phone_exist)
				{
					$output = array(
						"status"    => 'error',
						"message"    => 'این ملک قبلا با این شماره در دیوار ثبت شده است!',
					);
				}
				else
				{
					$divar_list[$request['divar_phone']]=array(
						'divar_date' => $request['divar_date'],
						'divar_description' => $request['divar_description'],
					);

					update_post_meta(intval($request['prop_id']),'divar_list',$divar_list);
					$temp_divar_list=array();
					foreach (get_post_meta( $request['prop_id'], 'divar_list', true ) as $key => $value)
					{
						$temp_divar_list[$key]=array(
							'divar_date' => Date::jdate('d F y',$value['divar_date'],true),
							'divar_description' => $value['divar_description'],
						);
					}

					$output = array(
						"status"    => 'success',
						"message"    => $temp_divar_list,
						"prop_id"    => $request['prop_id']
					);
				}
			}
			else
			{
				$divar_list[$request['divar_phone']]=array(
					'divar_date' => $request['divar_date'],
					'divar_description' => $request['divar_description'],
				);

				update_post_meta(intval($request['prop_id']),'divar_list',$divar_list);

				$temp_divar_list=array();
				foreach (get_post_meta( $request['prop_id'], 'divar_list', true ) as $key => $value)
				{
					$temp_divar_list[$key]=array(
						'divar_date' => Date::jdate('d F y',$value['divar_date'],true),
						'divar_description' => $value['divar_description'],
					);
				}

				$output = array(
					"status"    => 'success',
					"message"    => $temp_divar_list,
					"prop_id"    => $request['prop_id']
				);
			}

		}
		else
		{
			$output = array(
				"status"    => 'error',
				"message"    => 'خطای امنیتی رخ داده است.',
			);
		}

		echo json_encode($output);
		exit();
	}

	public static function get_prop_divar_list_callback()
	{
		header("Content-Type: application/json");
		$request = $_REQUEST;

		if (get_current_user_id() == intval($request['user_id']))
		{
			$temp_divar_list=array();
			foreach (get_post_meta( $request['prop_id'], 'divar_list', true ) as $key => $value)
			{
				$temp_divar_list[$key]=array(
					"divar_date" => Date::jdate('d F y',$value['divar_date'],true),
					"divar_description" => $value['divar_description'],
				);
			}

			$output = array(
				"status"    => 'success',
				"message"    => $temp_divar_list
			);
		}
		else
		{
			$output = array(
				"status"    => 'error',
				"message"    => 'خطای امنیتی رخ داده است.',
			);
		}

		echo json_encode($output);
		exit();
	}

	public static function delete_from_divar_list_callback()
	{
		header("Content-Type: application/json");
		$request = $_REQUEST;

		if (get_current_user_id() == intval($request['user_id']))
		{
			$divar_list=get_post_meta( $request['prop_id'], 'divar_list', true );
			unset($divar_list[$request['divar_phone']]);
			update_post_meta($request['prop_id'], 'divar_list',$divar_list);
			$output = array(
				"status"    => 'success',
				"message"    => 'حذف شد.'
			);
		}
		else
		{
			$output = array(
				"status"    => 'error',
				"message"    => 'خطای امنیتی رخ داده است.',
			);
		}

		echo json_encode($output);
		exit();
	}


}



