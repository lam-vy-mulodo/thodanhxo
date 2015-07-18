<?php
use Fuel\Core\Security;
use Fuel\Core\Debug;
use Fuel\Core\Controller_Template;
use Fuel\Core\View;
use Fuel\Core\Uri;
use Parser\View_Smarty;
use \Model\Validate;
use Fuel\Core\Input;
use Fuel\Core\Response;
use Fuel\Core\Pagination;
use Dwoo\Template\String;
use Model\Utility;
use Model\Company;
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.7
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2014 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Company Controller.
 *
 * @author	 lam vy
 * @package  app
 * @extends  Controller
 */
 Class Controller_Company extends Controller {
 	
 	//public $template = 'user_template.tpl';
 	public $filters = array('strip_tags', 'htmlentities');
	public function before()
	{
		parent::before();
	}

	/**
	 * Constructor
	 * @param Request $request
	 */
	public function __construct(Request $request)
	{
		parent::__construct($request);
	}
	
	/**
	 * Default action of Controller_user
	 *
	 * @author Lam Vy 
	 * @return string
	 */
	public function action_index()
	{
		$this->template->content = View_Smarty::forge('users/index.tpl');
		return mb_convert_encoding($this->template, 'utf-8', 'utf-8');
	}
	
	/**
	 * action add money for account
	 * 
	 * @author Lam Vy
	 * @return String
	 */
	public function action_dangki() {
		$data = array();
		//get cac du lieu cho form
		//get thanhpho
		$data['thanhpho'] = Utility::getlist(_TB_THANHPHO);
		$data['exp'] = Utility::getlist(_TB_EXP_);
		$data['job'] = Utility::getlist(_TB_JOB_);
		
		//check post
		if (Input::post()) {
			//thong tin dang nhap
			$data['username'] = Security::xss_clean(Input::post('user'), $this->filters);
			$data['password'] = Security::xss_clean(Input::post('pass'), $this->filters);
			$data['phone'] = Security::xss_clean(Input::post('phone'), $this->filters);
			$data['password2'] = Security::xss_clean(Input::post('re_pass'), $this->filters);
			$data['email'] = Security::xss_clean(Input::post('email'), $this->filters);
			//thong tin ca nhan
			$data['u_name'] = Security::xss_clean(Input::post('u_name'), $this->filters);
			$data['u_email'] = Security::xss_clean(Input::post('u_email'), $this->filters);
			$data['u_phone'] = Security::xss_clean(Input::post('u_phone'), $this->filters);
			$data['u_address'] = Security::xss_clean(Input::post('u_address'), $this->filters);
			$data['u_title'] = Security::xss_clean(Input::post('u_title'), $this->filters);
			$data['u_des'] = Security::xss_clean(Input::post('u_des'), $this->filters);
			//nganh nghe
			$data['u_career'] = Security::xss_clean(Input::post('u_career'), $this->filters);
			$data['u_location'] = Security::xss_clean(Input::post('u_location'), $this->filters);
			$data['u_exp'] = Security::xss_clean(Input::post('u_exp'), $this->filters);
			$data['u_type'] = Security::xss_clean(Input::post('type'), $this->filters);
			//image and cv upload file
			$data['u_image'] = '';//image path
			//$data['u_cv'] = '';//cv path
			$data['group'] = _USER_NORMAL_GROUP_;//image path		
			
			//thong tin lien he ng tuyen dung
			//ung tuyen ko co muc nay
			$data['u_lhname'] = Security::xss_clean(Input::post('u_lhname'), $this->filters);
			$data['u_lhemail'] = Security::xss_clean(Input::post('u_lhemail'), $this->filters);
			$data['u_lhphone'] = Security::xss_clean(Input::post('u_lhphone'), $this->filters);
			//validate
			$valid = Company::validate_user($data);//print_r($valid);die;
			
			if (true === $valid) {
				$data['created_at'] = time();
				$data['modified_at'] = time();
				$rs = Company::add_user($data);
				if ($rs > 0) {
					//tao session luu dang nhap
					Session::set('username', $data['username']);
					Session::set('user_id', $rs);
					Session::set('user_type', _COMPANY_LOGIN_TYPE_);
					$data['message'] = 'Tạo hồ sơ thành công. Hồ sơ đang chờ duyệt.';
					$data['id'] = $rs;
				}else{
					$data['errors'] = 'Tạo hồ sơ không thành công. Xin kiểm tra dữ liệu và thử lại.';
				}
			} else {
				$data['error'] = $valid;
			}
				
				
		}
		return Response::forge(View::forge('company/dangki', $data));
	}
	
	
 }