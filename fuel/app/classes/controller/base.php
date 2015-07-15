<?php

use Fuel\Core\Controller_Template;

/**
 *
 * @author Mulodo Inc.
 *
 */
class Controller_Base extends Controller_Template
{
	public $template = 'users/index.tpl';
	public function before()
	{
		parent::before();
		View::set_global('base_url', Config::get('base_url'));
		View::set_global('img_asset_url', Config::get('base_url')._ASSSET_IMG_PATH_);
		View::set_global('js_asset_url', Config::get('base_url')._ASSSET_JS_PATH_);
		View::set_global('css_asset_url', Config::get('base_url')._ASSSET_CSS_PATH_);

		$base_url_ssl = str_replace('http://', 'https://', Config::get('base_url'));
		View::set_global('base_url_ssl', $base_url_ssl);
		View::set_global('img_asset_url_ssl', $base_url_ssl._ASSSET_IMG_PATH_);
		View::set_global('js_asset_url_ss;', $base_url_ssl._ASSSET_JS_PATH_);
		View::set_global('css_asset_url_ssl', $base_url_ssl._ASSSET_CSS_PATH_);
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(ViewModel::forge('welcome/404'), 404);
	}


	/**
	 * Validate data
	 * @param string $input_data
	 * @return boolean TRUE if succesful or FALSE otherwise
	 */
	public function validate($input_data)
	{

	}


	/**
	 *
	 * @param string $template_path
	 * @param array $data
	 * @return string
	 */
	public function render_view_shift_js($template_path, $data)
	{
		header("Content-type: text/html; charset=utf-8");
		$response = View_Smarty::forge($template_path, $data)->render();
		$response = mb_convert_encoding($response, 'utf-8', 'utf-8');
		return $response;
	}
}