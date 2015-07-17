<?php
use Model\Thanhpho;
use Fuel\Core\Input;
use Fuel\Core\Security;
use Fuel\Core\Response;
use Model\Utility;
use Fuel\Core\Uri;
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
	 * edit 
	 */
	public function action_edit($id, $table) {
		$data = array();
		$data['table'] = $table;
		$data['id'] = $id;
		$data['table'] = $table;
		//get all list
		$row = Utility::getUtility($table,$id);
		if (false !== $row) {
			$data['value'] = $row['name'];
		}else{
			$data['error'] = 'Không có dữ liệu';
		}
		//xu ly edit
		if(null!==Input::post('name')) {
			//to do
			$value = Security::xss_clean(Input::post('name'), $this->filters);	
			$rs = Utility::editvalue($table, $id, $value);
			
			if(true === $rs) {
				$data['message'] = 'Cập nhật thành công.';
				$row2 = Utility::getUtility($table,$id);
				$data['value'] = $row2['name'];
			}else{
				$data['error'] = 'Cập nhật thất bại.';
			}
			
			
		}
		return Response::forge(View::forge('admin/edit'.$table, $data));
	
	}
	/**
	 * get list
	 */
	public function action_getlist($table) {
		$data = array();
		$data['table'] = $table;
		$row = Utility::getlist($table);
		if (false !== $row) {
			$data['data'] = array();
			$data['data'] = $row;
			
		}else{
			$data['error'] = 'Không có dữ liệu';
		}
		return Response::forge(View::forge('admin/'.$table, $data));
	}
	
	/**
	 * function add
	 */
	public function action_add($table) {
		$data = array();
		$data['table'] = $table;
		$value = Security::xss_clean(Input::post('name'),$this->filters);
		$row = Utility::addvalue($table, $value);
		
		if ($row > 0) {
			//success redirect to list
			Response::redirect('/admin/list/'.$table);
		}else{
			$data['error'] = 'Thêm kinh nghiệm không thành công.';
			return Response::forge(View::forge('admin/error', $data));
		}
		
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
