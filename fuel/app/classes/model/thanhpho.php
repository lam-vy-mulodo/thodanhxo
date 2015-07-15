<?php
namespace Model;

use Fuel\Core\Log;
use Fuel\Core\Validation;
use Model;
use Fuel\Core\DB;
use Auth\Auth;
use Fuel\Core\Fieldset;
use Fuel\Core\Database_Connection;
class Thanhpho extends \ORM\Model {

	//create table name for user
	protected static $_table_name = 'thanhpho';

	//create properties for user
	protected  static  $_properties = array('id', 'name');

	public static function getAlllistthanhpho() {
		try {
				
			//select comments
			$query = DB::query("SELECT * FROM thanhpho ");
				
			//$query->bind('post_id', $post_id);
			$rs = $query->execute()->as_array();
	
			if (count($rs) > 0) {
	
				return $rs;
			} else {
	
				return false;
			}
		} catch (\Exception $ex) {
			Log::error($ex->getMessage());
			return $ex->getMessage();
		}
	}
	
	public static function getthanhpho($id) {
		try {
	
			//select comments
			$query = DB::query("SELECT * FROM thanhpho WHERE id= :id");
	
			$query->bind('id', $id);
			$rs = $query->execute()->as_array();
	
			if (count($rs) > 0) {
	
				return $rs[0];
			} else {
	
				return false;
			}
		} catch (\Exception $ex) {
			Log::error($ex->getMessage());
			return $ex->getMessage();
		}
	}
	public static function editthanhpho($id, $value) {
		try {
	
			//select comments
			$query = DB::query("UPDATE thanhpho SET name= :name WHERE id= :id ");
			$query->bind('name', $value);
			$query->bind('id', $id);
			$rs = $query->execute()->as_array();
	
			if (count($rs) > 0) {
	
				return true;
			} else {
	
				return false;
			}
		} catch (\Exception $ex) {
			Log::error($ex->getMessage());
			return $ex->getMessage();
		}
	}
	
}