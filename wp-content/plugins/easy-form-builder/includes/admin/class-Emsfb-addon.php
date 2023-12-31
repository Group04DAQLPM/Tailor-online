<?php

namespace Emsfb;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // No direct access allow ;)

class Addon {

	public $setting_name;
	public $options = array();

	public $id_;
	public $name;
	public $email;
	public $value;
	public $userId;
	public $formtype;

	protected $db;
	public function __construct() {
		
		$this->setting_name = 'Emsfb_addon';
		global $wpdb;
		$this->db = $wpdb;
		$this->get_settings();
		
		$this->options = get_option( $this->setting_name );
		

		if ( empty( $this->options ) ) {
			update_option( $this->setting_name, array() );
		}

		add_action( 'admin_menu', array( $this, 'add_addon_menu' ), 11 );
		/* add_action( 'admin_create_scripts', array( $this, 'admin_create_scripts' ) );
		add_action( 'admin_init', array( $this, 'register_create' ) );
		add_action('fun_Emsfb_creator', array( $this, 'fun_Emsfb_creator')); */
		//add_action('wp_ajax_add_form_Emsfb', array( $this,'add_form_structure'));//ساخت فرم
		
	}

	public function add_addon_menu() {
		add_submenu_page( 'Emsfb', __('Add-ons', 'easy-form-builder' ),'<span style="color:#ff4b93">'. __('Add-ons', 'easy-form-builder' ) .'</span>', 'Emsfb_addon', 'Emsfb_addon', array(
			$this,
			'render_settings'
		) );
		
		// پیدا کردن لیست تمام صفحه ها  و پست ها برای نمایش در تنظیمات افزونه با هدف اینکه کاربر صفحه ای که ترکینگ کد را وارد کرده است انتخاب کند
		//$val = get_posts(1);
		//$val = get_pages(1);
		//error_log(json_encode($val));
		//page => post_title = title , ID = id
		//post => post_title = title , ID = id
		//$id =2407;
		//$val = get_permalink( $id );
		//error_log(json_encode($val));
		// لیست پست  و صفحه که شامل آی دی و عنوان می شود را به سمت کاربر بصورت جی سون پاس داده شود
		// کاربر از لیست پاس داده شده یک صفحه که ترکینگ درونش وجود دارد را انتخاب می کند و آی دی  ذخیره می شود
		// در هنگام ذخیره سازی چک می شود اگر ترکینگ کد فایندر ( شورت کدش ) در محتوا وجود داشته ذخیره سازی انجام شود در غیر اینصور پیام خطا برگرانده شود به کاربر در صفحه انتخاب شده ترکینگ کد فایندر پیدا نشد
	}


	public function get_settings() {
		$settings = get_option( $this->setting_name );
		if ( ! $settings ) {
			update_option( $this->setting_name, array(
				'rest_api_status' => 1,
			) );
		}
		return apply_filters( 'Emsfb_get_settings', $settings );
	}

	public function register_create() {
		
		if ( false == get_option( $this->setting_name ) ) {
			add_option( $this->setting_name );
		}
	}




	public function render_settings() {
		$server_name = str_replace("www.", "", $_SERVER['HTTP_HOST']);

		wp_register_script('whiteStudioAddone', 'https://whitestudio.team/wp-json/wl/v1/addons.js' .$server_name, null, null, true);
        wp_enqueue_script('whiteStudioAddone');
	?>
	<!-- new code ddd -->
	<div id="alert_efb" class="efb mx-5"></div>
	<div class="efb modal fade " id="settingModalEfb" aria-hidden="true" aria-labelledby="settingModalEfb"  role="dialog" tabindex="-1" data-backdrop="static" >
						<div class="efb modal-dialog modal-dialog-centered " id="settingModalEfb_" >
							<div class="efb modal-content efb " id="settingModalEfb-sections">
									<div class="efb modal-header efb"> <h5 class="efb modal-title efb" ><i class="efb bi-ui-checks mx-2" id="settingModalEfb-icon"></i><span id="settingModalEfb-title"></span></h5></div>
									<div class="efb modal-body row" id="settingModalEfb-body"><div class="efb card-body text-center"><div class="efb lds-hourglass"></div><h3 class="efb fs-3"></h3></div></div>
	</div></div></div>
	<div id="tab_container_efb">
			<div class="efb card-body text-center efb"><div class="efb lds-hourglass efb"></div><h3 class="efb fs-3"></h3></div>	
        	</div>
			
	<!-- end new code dd -->
	
			
		<?php


		$pro =false;
		$maps =false;
		$efbFunction = new efbFunction(); 
		$ac= $efbFunction->get_setting_Emsfb();
		//v2 translate
		
		$lang = $efbFunction->text_efb(2);
		if(gettype($ac)!="string"){
			
			if (md5($server_name)==$ac->activeCode){
				$pro=true;
			}
			if(	$pro==true){
					/* wp_register_script('whitestudio-admin-pro-js', 'https://whitestudio.team/js/cool.js'.$ac->activeCode, null, null, true);	
					wp_enqueue_script('whitestudio-admin-pro-js'); */

					/* wp_register_script('stripe-js', 'https://js.stripe.com/v3/', null, null, true);	
					wp_enqueue_script('stripe-js'); */
					
			}



			/* if( isset($ac->apiKeyMap) && strlen($ac->apiKeyMap)>5){
				$k= $ac->apiKeyMap;
				$maps=true;
				$lng = strval(get_locale());
				
					if ( strlen($lng) > 0 ) {
					$lng = explode( '_', $lng )[0];
					}
				wp_register_script('googleMaps-js', 'https://maps.googleapis.com/maps/api/js?key='.$k.'&#038;language='.$lng.'&#038;libraries=&#038;v=weekly&#038;channel=2', null, null, true);	
				wp_enqueue_script('googleMaps-js');
			} */
		}



			/* new code v4 */
			
			wp_register_script('jquery-ui', EMSFB_PLUGIN_URL . 'includes/admin/assets/js/jquery-ui.js', array('jquery'), true,'3.5.34');	
			wp_enqueue_script('jquery-ui');
			wp_register_script('jquery-dd', EMSFB_PLUGIN_URL . 'includes/admin/assets/js/jquery-dd.js', array('jquery'), true,'3.5.34');	
			wp_enqueue_script('jquery-dd'); 
			/*end new code v4 */

		/* wp_register_script('addsOnLocal-js', 'https://whitestudio.team/wp-json/wl/v1/zone.js'.get_locale().'', null, null, true);	
		wp_enqueue_script('addsOnLocal-js'); */

		$img = ["logo" => ''.EMSFB_PLUGIN_URL . 'includes/admin/assets/image/logo-easy-form-builder.svg',
		"head"=> ''.EMSFB_PLUGIN_URL . 'includes/admin/assets/image/header.png',
		"title"=>''.EMSFB_PLUGIN_URL . 'includes/admin/assets/image/title.svg',
		"recaptcha"=>''.EMSFB_PLUGIN_URL . 'includes/admin/assets/image/reCaptcha.png',
		"movebtn"=>''.EMSFB_PLUGIN_URL . 'includes/admin/assets/image/move-button.gif'
		];
		
		$smtp =-1;
		$captcha =false;
		$smtp_m = "";
			/*
            AdnSPF == stripe payment
            AdnOF == offline form
            AdnPPF == persia payment
			AdnPDP == persia data picker
			AdnADP == arabic data picker
            AdnATC == advance tracking code
            AdnSS == sms service
            AdnCPF == crypto payment
            AdnESZ == zone picker
            AdnSE == email service

            AdnWHS == webhook
            AdnPAP == paypal
            AdnWSP == whitestudio pay
            AdnSMF == smart form
            AdnPLF == passwordless form
            AdnMSF == membership form
            AdnBEF == booking and event form
        */
		$addons = ['AdnSPF' => 0,
		'AdnOF' => 0,
		'AdnPPF' => 0,
		'AdnATC' => 0,
		'AdnSS' => 0,
		'AdnCPF' => 0,
		'AdnESZ' => 0,
		'AdnSE' => 0,
		'AdnPDP'=>0,
		'AdnADP'=>0
		];
			

		if(gettype($ac)!="string"){
			if( isset($ac->siteKey)&& strlen($ac->siteKey)>5){$captcha="true";}
			if($ac->smtp=="true"){$smtp=1;}else if ($ac->smtp=="false"){$smtp=0;$smtp_m =$lang["sMTPNotWork"];}			
			if(isset($ac->AdnSPF)==true){
				//$ac
				
				$addons["AdnSPF"]=$ac->AdnSPF;
				$addons["AdnOF"]=$ac->AdnOF;
				$addons["AdnATC"]=$ac->AdnATC;
				$addons["AdnPPF"]=$ac->AdnPPF;
				$addons["AdnSS"]=$ac->AdnSS;
				$addons["AdnSPF"]=$ac->AdnSPF;
				$addons["AdnESZ"]=$ac->AdnESZ;
				$addons["AdnSE"]=$ac->AdnSE;
				$addons["AdnPDP"]=isset($ac->AdnPDP) ? $ac->AdnPDP : 0;
				$addons["AdnADP"]=isset($ac->AdnADP) ? $ac->AdnPDP : 0;
			
			}
		}else{$smtp_m =$lang["goToEFBAddEmailM"];}

		/* wp_register_script('pay_js',  EMSFB_PLUGIN_URL .'/public/assets/js/pay.js', array('jquery'), null, true);
		wp_enqueue_script('pay_js'); */

	/* 	if("fa_IR"==get_locale()){
			wp_register_script('persia_pay',  EMSFB_PLUGIN_URL .'/public/assets/js/persia_pay.js', array('jquery'), null, true);
			wp_enqueue_script('persia_pay');
		} */

		/* wp_register_script('stripe_js',  EMSFB_PLUGIN_URL .'/public/assets/js/stripe_pay.js', array('jquery'), true,'3.5.34');
		wp_enqueue_script('stripe_js'); */

		wp_enqueue_script( 'Emsfb-admin-js', EMSFB_PLUGIN_URL . 'includes/admin/assets/js/admin.js',false,'3.5.34');
		wp_localize_script('Emsfb-admin-js','efb_var',array(
			'nonce'=> wp_create_nonce("admin-nonce"),
			'check' => 2,
			'pro' => $pro,
			'rtl' => is_rtl() ,
			'text' => $lang	,
			'images' => $img,
			'captcha'=>$captcha,
			'smtp'=>$smtp,
			"smtp_message"=>$smtp,
			'maps'=> $maps,
			'bootstrap' =>$this->check_temp_is_bootstrap(),
			"language"=> get_locale(),
			"addson"=>$addons,
			'wp_lan'=>get_locale(),
			'v_efb'=>EMSFB_PLUGIN_VERSION,
			'setting'=>$ac,
			
		));

		wp_enqueue_script('efb-val-js', EMSFB_PLUGIN_URL . 'includes/admin/assets/js/val.js',false,'3.5.34');
		wp_enqueue_script('efb-val-js'); 
		
		/* wp_enqueue_script('efb-pro-els', EMSFB_PLUGIN_URL . 'includes/admin/assets/js/pro_els.js',false,'3.5.34');
		wp_enqueue_script('efb-pro-els');  */
		
		/* wp_enqueue_script('efb-forms-js', EMSFB_PLUGIN_URL . 'includes/admin/assets/js/forms.js',false,'3.5.34');
		wp_enqueue_script('efb-forms-js'); */

		 wp_enqueue_script( 'Emsfb-core-js', EMSFB_PLUGIN_URL . 'includes/admin/assets/js/core.js',false,'3.5.34');
		 wp_localize_script('Emsfb-core-js','ajax_object_efm_core',array(
			'nonce'=> wp_create_nonce("admin-nonce"),
			'check' => 1		));

		wp_enqueue_script('efb-main-js', EMSFB_PLUGIN_URL . 'includes/admin/assets/js/new.js',false,'3.5.34');
		wp_enqueue_script('efb-main-js'); 

		/* wp_enqueue_script('efb-bootstrap-select-js', EMSFB_PLUGIN_URL . 'includes/admin/assets/js/bootstrap-select.min.js',false,'3.5.34');
		wp_enqueue_script('efb-bootstrap-select-js');  */

		


		

	}

	public function fun_Emsfb_creator()
	{
		
	}

	public function add_form_structure(){
		
	
		
		$efbFunction = new efbFunction(); 
		$creat=["errorCheckInputs","NAllowedscriptTag","formNcreated"];
		$lang = $efbFunction->text_efb($creat);
		$this->userId =get_current_user_id();
	//	
		// get user email https://developer.wordpress.org/reference/functions/get_user_by/#user-contributed-notes
		$email = '';

		if( empty($_POST['name']) || empty($_POST['value']) ){
			$m =$lang["errorCheckInputs"];
			$response = array( 'success' => false , "m"=>$m); 
			wp_send_json_success($response,$_POST);
			die();
		} 
		
		if(isset($_POST['email']) ){$email =sanitize_email($_POST['email']);}
		$this->id_ ="hid";
		$this->name =  sanitize_text_field($_POST['name']);
		$this->email =  $email;
		$this->value = $_POST['value'];
		
		$this->formtype =  sanitize_text_field($_POST['type']);
		if($this->isScript($_POST['value']) ||$this->isScript($_POST['type'])){			
			$response = array( 'success' => false , "m"=> $lang["NAllowedscriptTag"]); 
			wp_send_json_success($response,$_POST);
			die();
		}

		
		$this->insert_db();
		if($this->id_ !=0){
			$response = array( 'success' => true ,'r'=>"insert" , 'value' => "[EMS_Form_Builder id=$this->id_]" , "id"=>$this->id_); 
		}else{$response = array( 'success' => false , "m"=> $lang["formNcreated"]);}
		wp_send_json_success($response,$_POST);
		die();		
	}

	public function isScript( $str ) { return preg_match( "/<script.*type=\"(?!text\/x-template).*>(.*)<\/script>/im", $str ) != 0; }
	public function insert_db(){
		$table_name = $this->db->prefix . "emsfb_form";
		$r =$this->db->insert($table_name, array(
			'form_name' => $this->name, 
			'form_structer' => $this->value, 
			'form_email' => $this->email, 
			'form_created_by' => $this->userId, 
			'form_type'=>$this->formtype, 			
		));    $this->id_  = $this->db->insert_id; 
		
	}
	public function check_temp_is_bootstrap (){
        $it = list_files(get_template_directory()); 
        $s = false;
        foreach($it as $path) {
            if (preg_match("/\bbootstrap+.+.css+/i", $path)) 
            {				
                $f = file_get_contents($path);
                if(preg_match("/col-md-12/i", $f)){
                    $s= true;
                    break;
                }
            }
        }
        return  $s;
    }//end fun

}

new Addon();