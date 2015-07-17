<?php
namespace Model;

use Fuel\Core\Log;
use Fuel\Core\Validation;
use Model;
use Fuel\Core\DB;
use Auth\Auth;
use Fuel\Core\Fieldset;
use Fuel\Core\Database_Connection;
/**
 * 
 * @author MLDO8
 * class get all data external
 */
class Utility extends Model {

	
	/**
	 * them kinh nghiem
	 * 
	 */
	public static function addvalue($table,$value) {
	// try catch for insert
		try {
			// insert query
			$entry = DB::insert($table)->columns(array('name'))->values(array($value));
			$result = $entry->execute();
			
			// Return id of username inserted
			return $result[0];
			
			
		} catch (\Exception $ex) {
			// write error to log
			Log::error($ex->getMessage());
			
			return $ex->getMessage();
		}
	}
	/**
	 * get utility by table name
	 * by id
	 */
	public static function getUtility($table, $id) {
		try {
		
			//select comments
			$query = DB::query("SELECT * FROM $table WHERE id= :id");
		
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
	/**
	 * get all list in table
	 */
	public static function getlist($table) {
		try {
		
			//select comments
			$query = DB::query("SELECT * FROM $table WHERE 1");
		
			//$query->bind('id', $id);
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
	
	/**
	 * function to edit value by table and id
	 */
	public static function editvalue($table, $id, $value) {
		try {
	
			//select comments
			$query = DB::query("UPDATE $table SET name= :name WHERE id= :id ");
			$query->bind('name', $value);
			$query->bind('id', $id);
			$rs = $query->execute();
	
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