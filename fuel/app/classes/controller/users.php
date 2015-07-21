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
use Model\Thanhpho;
use Model\Utility;
use Model\User;
use Auth\Auth;
use Fuel\Core\Upload;
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
 * The Users Controller.
 *
 * @author	 lam vy
 * @package  app
 * @extends  Controller
 */
 Class Controller_Users extends Controller {
 	
 	public $filters = array('strip_tags', 'htmlentities');
 	
 	//'ext_cv' => array('docx', 'doc', 'zip', 'rar')
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
		$data = array();
		return Response::forge(View::forge('users/index', $data));
	}
	public function action_logout() {
		Session::destroy();
		Response::redirect($_SERVER['HTTP_REFERER']);
	}
	
	public function action_login(){
		$data = array();
		if (Input::post()) {
			$username = Security::xss_clean(Input::post('user'), $this->filters);
			$password = Security::xss_clean(Input::post('pass'), $this->filters);
			$rs =  User::login($username, $password);		
			if ($rs['token']) {
				Session::set('token',$rs['token']);
				Response::redirect(_SITE_DOMAIN_.'users/index');
			}else {
				$data['error'] = 'Đăng nhập thất bại. Xin thử lại.';
		
			}
				
		}
		return Response::forge(View::forge('users/login', $data));
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
			
			if (Input::file('u_image')) {
				$file = Input::file('u_image');
				$upload = Utility::upload($file, 1,_URL_IMG_UNGVIEN_UPLOAD_);
				if (isset($upload['file'])) {
					$data['u_image'] = $upload['file'];//print_r($upload['file']);
				}else {
					$data['upload_error'] = $upload['upload_error'];
				}
			}else {
				$data['u_image'] = '';//image path
				
			}
			//cv
			if (Input::file('u_cv')) {
				$file = Input::file('u_cv');
				$upload = Utility::upload($file, 2,_URL_IMG_UNGVIEN_UPLOAD_);
				if (isset($upload['file'])) {
					$data['u_cv'] = $upload['file'];//print_r($upload['file']);
				}else {
					$data['upload_error'] = $upload['upload_error'];
				}
			}else {
				$data['u_cv'] = '';//image path
			
			}
			
			$rs = null;
			$data['group'] = _USER_NORMAL_GROUP_;//image path
			$valid = User::validate_user($data);//print_r($valid);die;
			if (true === $valid) {
				$data['created_at'] = time();
				$data['modified_at'] = time();
				$rs = User::add_user($data);
				if ($rs > 0) {
					//tao session luu dang nhap
					Session::set('username', $data['username']);
					Session::set('user_id', $rs);
					Session::set('user_type', _USER_LOGIN_TYPE_);
					$data['message'] = 'Tạo hồ sơ thành công. Hồ sơ đang chờ duyệt.';
					$data['id'] = $rs;
				}else{
					$data['errors'] = 'Tạo hồ sơ không thành công. Xin kiểm tra dữ liệu và thử lại.';
				}
			} else {
				$data['error'] = $valid;
			}
			
			
		}
		
		
		
		return Response::forge(View::forge('users/dangki', $data));
	}
	
	public function action_timkiemgiaodich() {
		$this->template->content = View_Smarty::forge('users/timkiemgiaodich.tpl');
		return mb_convert_encoding($this->template, 'utf-8', 'utf-8');
	}
	/**
	 * sao ke tai khoan
	 */
	public function action_saokhetaikhoan() {
		$this->template->content = View_Smarty::forge('users/saokhetaikhoan.tpl');
		return mb_convert_encoding($this->template, 'utf-8', 'utf-8');
	}
	// Thanh toan tab
	/**
	 * function thanh toan content page template
	 */
	public function action_cacgiaodichchoxacnhan() {
		$this->template->content = View_Smarty::forge('users/giaodichchoxacnhan.tpl');
		return mb_convert_encoding($this->template, 'utf-8', 'utf-8');
	}
	public function action_thanhtoanindex() {
		$this->template->content = View_Smarty::forge('users/hoadon.tpl');
		return mb_convert_encoding($this->template, 'utf-8', 'utf-8');
	}
	//ho-tro-tb
	/**
	 * function update thong tin ca nhan
	 * thong tin nhat ky truy cap
	 */
	public function action_hotro() {
		$this->template->content = View_Smarty::forge('users/nhatkytruycap.tpl');
		return mb_convert_encoding($this->template,'utf-8', 'utf-8');
	}
	public function action_userinfo() {
		$this->template->content = View_Smarty::forge('users/userinfo.tpl');
		return mb_convert_encoding($this->template,'utf-8', 'utf-8');
	}
	public function action_change_password() {
		$this->template->content = View_Smarty::forge('users/changepassword.tpl');
		return mb_convert_encoding($this->template,'utf-8', 'utf-8');
	}
	
 }