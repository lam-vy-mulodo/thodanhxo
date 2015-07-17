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
			$data['user'] = Security::xss_clean(Input::post('user'), $this->filters);
			$data['pass'] = Security::xss_clean(Input::post('pass'), $this->filters);
			$data['phone'] = Security::xss_clean(Input::post('phone'), $this->filters);
			$data['pass'] = Security::xss_clean(Input::post('pass'), $this->filters);
			$data['pass2'] = Security::xss_clean(Input::post('pass'), $this->filters);
			//thong tin ca nhan 
			$data['u_name'] = Security::xss_clean(Input::post('u_name'), $this->filters);
			$data['u_email'] = Security::xss_clean(Input::post('u_email'), $this->filters);
			$data['u_phone'] = Security::xss_clean(Input::post('u_phone'), $this->filters);
			$data['u_title'] = Security::xss_clean(Input::post('u_title'), $this->filters);
			$data['u_des'] = Security::xss_clean(Input::post('u_des'), $this->filters);
			//nganh nghe
			$data['u_career'] = Security::xss_clean(Input::post('u_career'), $this->filters);
			$data['u_location'] = Security::xss_clean(Input::post('u_location'), $this->filters);
			$data['u_exp'] = Security::xss_clean(Input::post('u_exp'), $this->filters);
			$data['type'] = Security::xss_clean(Input::post('type'), $this->filters);
			//image and cv upload file
			$data['u_image'] = '';//image path
			$data['u_cv'] = '';//cv path
			
			
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
	public function action_login(){
		$phone = Input::post('phone');
		$pass = Input::post('password');
		return 1;
	}
 }