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
		return Response::forge(View::forge('company/dangki'));
	}
	
	
 }