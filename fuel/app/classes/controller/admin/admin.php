<?php
use Fuel\Core\Input;
use Fuel\Core\Security;
use Model\User;
use Model\Admin;
use Fuel\Core\Session;
use Auth\Auth;
use Fuel\Core\Response;
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
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Admin_Admin extends Controller
{
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public $admin ;
	public $filters = array('strip_tags', 'htmlentities');
	public function before() {
		$this->admin = new Admin();
	}
	public function action_index()
	{
		//check admin login
		if (null === Session::get('token')) {
			Response::redirect('admin/login');
			
		}
		return Response::forge(View::forge('admin/index'));
	}
	/**
	 * function login
	 */
	public function action_login()
	{
		$data = array();
		//check for login
		if (null !== Input::post('submit')) {
			$username = Security::xss_clean(Input::post('user'), $this->filters);
			$password = Security::xss_clean(Input::post('pass'), $this->filters);
			$rs =  $this->admin->login($username, $password);
			
			if ($rs['token']) {
				Session::set('token',$rs['token']);
				Response::redirect('admin/index');
			}else {
				$data['mess'] = 'Đăng nhập thất bại. Xin thử lại.';
				
			}
			
		}
		return Response::forge(View::forge('admin/login', $data));
	}
	
	/**
	 * reset session
	 */
	public function action_resetsession() {
		Session::destroy();
	}
	
	/**
	 * @author Lam Vy
	 * function create admin account
	 *  
	 */
	public function action_register(){
		$data = array();
		$user = array();
		//check login
		if (!Session::get('token')) Response::redirect('admin/login');
		if (null !== Input::post('submit')) {
			//create user data from input post
			
			
			//username use to login the system
			$data['username'] = Security::clean(Input::post('username'), $this->filters);
			//email use to login the system
			$data['email'] = Security::clean(Input::post('email'), $this->filters);
			//password use to login, will be encrypted
			$data['password'] = Security::clean(Input::post('password'), $this->filters);
			
			//information of user
			$data['lastname'] = Security::clean(Input::post('lastname'), $this->filters);
			$data['firstname'] = Security::clean(Input::post('firstname'), $this->filters);
			$data['group'] = Security::clean(Input::post('group'), $this->filters);
			$user['data'] = $data;
			//validation data user
			$result = Admin::validate_user($data);
			//var_dump($val);die;
			//have error message
			if ($result !== true) {
					
				//response the error code and message;
				//the code is 1001
				$user['error'] = $result['meta']['message'];
			
			} else {
				//return 1 for valid data
					
				//try catch to check and insert user into db
				try	{
					//check username exist or not return true if exist, else return false
					$status = Admin::check_user_exist($data['username']);
					//return $this->response(array($status));
			
					if ($status) {							
						//return error code and message
							
						$user['error'] = 'Tài khoản này đã tồn tại';
					} else {
						//start transaction
						//user create in db and create token ok
						DB::start_transaction();
						//insert db
						//set date time for create account and modified by current date time
						$time = time();
						$data['created_at'] = $time;
						$data['modified_at'] = $time;
			
						//hash password before insert into db
						//hash password by auth package, password become :12ac1f48d9649....**
						$data['password'] = Auth::hash_password($data['password']);
						$rs = Admin::create_user($data);
							
						if ($rs > 0) {
			
							/*
							 * login and create token for new user,use password before encrypted
							* return data array contain information of user created
							*/
								
							$users = Admin::get_user_by_id($rs);
							//commit transaction after insert and create token ok
							DB::commit_transaction();
							//add remember me cookie for check logged in
							//Auth::remember_me();
							//response code SUSSCESS_CODE for success
							
							$user['data'] = $users;
							$user['message'] = 'Tạo tài khoản thành công';	
								
						} else {
							//rollback if faild
							DB::rollback_transaction();
			
							$user['error'] = 'Tạo tài khoản thất bại';
						}
					}
			
			
				} catch (Exception $ex) {
			
					DB::rollback_transaction();
					return $ex->getMessage();
				}
					
			}
			
		}
		
		//view
		return Response::forge(View::forge('admin/register', $user));
	}
	
	/**
	 * function log out
	 */
	public function action_logout() {
		//get token from method put
		$token =Session::get('token');
	
		//check token is not empty
		if (!empty($token)) {
			//checktoken is correct
			$rs = Admin::check_token($token);
			
			if (!is_array($rs) && $rs > 0) {
				//called logout from model to update token = null
				$row = Admin::logout($token);
				//check rows affected is > 0 logout ok
	
				//reset session
				Auth::logout();
					
				Response::redirect('admin/login');
					
	
			} else {
				//response error message return if check token wrong
				$data['error'] = 'Logout fail';
			}
		} else {
			$data['error'] = 'Logout fail';
		}
		Response::redirect($_SERVER['HTTP_REFERER']);
	}
	
	/**
	 * manage admin list
	 */
	public function action_manage() {
		$data = array();
		//get all list
		$row = Admin::getAlllistadmin();
		if (false !== $row) {
			$data['data'] = array();
			$data['data'] = $row; 
		}else{
			$data['error'] = 'Không có dữ liệu';
		}
		return Response::forge(View::forge('admin/manage', $data));
	}
	public function action_block($id, $status) {
		$data = array();
		//call function get user info use ORM package
		//input id get from url
		$result =  Admin::update_status($id, $status);
		
		if (false == $result) {
			$data['error'] = 'Update không thành công';
		}
		Response::redirect('admin/manage-admin');
	}
	/**
	 * get all thanh pho
	 */
	public function action_listthanhpho() {
		$data = array();
		//get all list
		$row = Admin::getAlllistthanhpho();
		if (false !== $row) {
			$data['data'] = array();
			$data['data'] = $row;
		}else{
			$data['error'] = 'Không có dữ liệu';
		}
		return Response::forge(View::forge('admin/listthanhpho', $data));
	}		
	
	
	/**
	 * A typical "Hello, Bob!" type example.  This uses a Presenter to
	 * show how to use them.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_hello()
	{
		return Response::forge(Presenter::forge('welcome/hello'));
	}
	
	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}
	
	public function action_hello2()
	{
		returnView::forge('welcome/hello2');
	}
	 
}