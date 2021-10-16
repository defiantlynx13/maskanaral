<?php
/**
 * Public_Hook Class File
 *
 * This file contains hooks that you need in public
 * (like enqueue styles or scripts in front end)
 *
 * @package    Plugin_Name_Dir\Includes\Init
 * @author     Your_Name <youremail@nomail.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://yoursite.com
 * @since      1.0.0
 */

namespace Plugin_Name_Dir\Includes\Init;

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Plugin_Name_Dir\Includes\Init
 * @author     Your_Name <youremail@nomail.com>
 */
class Public_Hook {

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
	 * @param      string $plugin_name The name of the plugin.
	 * @param      string $version     The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

//		wp_enqueue_style(
//			$this->plugin_name . '_public_style',
//			PLUGIN_NAME_CSS . 'plugin-name-public.css',
//			array(),
//			$this->version,
//			'all'
//		);

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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


        $actual_link = ( 'on' == isset( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] ? 'https' : 'http' )
            . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $site_url    = get_site_url();
        $temp_url    = str_replace( $site_url, '', $actual_link );
        if (strtok( $temp_url, '?' ) == '/auth')
        {

            wp_register_script( 'aral_auth_script', PLUGIN_NAME_JS . 'auth.js' );

            $translation_array = array(
                'ajax_url' => admin_url('admin-ajax.php') ,
            );
            wp_localize_script( 'aral_auth_script', 'myData', $translation_array );

            wp_enqueue_script( 'aral_auth_script' );
        }


	}

	public function template_redirect_callback() {
        if(is_front_page())
        {
            wp_redirect(home_url('aral-home'), 301) ;
         }

        if(is_404())
        {
            wp_redirect(home_url('aral-not-found'), 301) ;
        }
	}

	public function get_districts_callback()
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



}

