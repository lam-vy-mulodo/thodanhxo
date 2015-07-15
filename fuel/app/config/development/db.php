<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'connection'  => array(
			'dsn'        => 'mysql:host=localhost;dbname=thodanhxo',
			'username'   => 'root',
			'password'   => '1234',
		),
			'identifier'   => '`',
			'table_prefix' => '',
			'charset'      => 'utf8',
			'collation'    => false,
			'enable_cache' => true,
			'profiling'    => false,
			'readonly'     => false,
	),
);
