<?php
namespace Model;

use Fuel\Core\Log;
use Fuel\Core\Validation;
use Model;
use Fuel\Core\DB;
use Auth\Auth;
use Fuel\Core\Fieldset;
use Fuel\Core\Database_Connection;
class User extends \ORM\Model {

	//create table name for user
	protected static $_table_name = 'user';

	//create properties for user
	protected  static  $_properties = array('id', 'username', 'lastname', 'firstname', 'email', 'created_at', 'modified_at', 'group');
}