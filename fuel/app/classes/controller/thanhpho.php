<?php
use Model\Thanhpho;
use Fuel\Core\Input;
use Fuel\Core\Security;
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
class Controller_Thanhpho extends Controller
{

	
	public $filters = array('strip_tags', 'htmlentities');
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		return Response::forge(View::forge('welcome/index'));
	}
	
	/**
	 * get all thanh pho
	 */
	public function action_admingetthanhpho() {
		$data = array();
		//get all list
		$row = Thanhpho::getAlllistthanhpho();
		if (false !== $row) {
			$data['data'] = array();
			$data['data'] = $row;
		}else{
			$data['error'] = 'Không có dữ liệu';
		}
		return Response::forge(View::forge('admin/listthanhpho', $data));
		
	}
	
	/**
	 * edit thanh pho
	 */
	public function action_edit($id) {
		$data = array();
		//get all list
		$row = Thanhpho::getthanhpho($id);
		if (false !== $row) {
			$data['value'] = $row['name'];
		}else{
			$data['error'] = 'Không có dữ liệu';
		}
		//xu ly edit
		if(null!==Input::post('submit')) {
			//to do
			$value = Security::xss_clean($value, $this->filters);	
			$rs = Thanhpho::editthanhpho($id, $value);
			
			if(true === $rs) {
				$data['message'] = 'Cập nhật thành công.';
			}else{
				$data['error'] = 'Cập nhật thất bại.';
			}
			
			
		}
		return Response::forge(View::forge('admin/editthanhpho', $data));
	
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
