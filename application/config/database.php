<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
	// 'port'=>25060,
	'hostname' => 'db-mysql-sgp1-12709-do-user-12232967-0.b.db.ondigitalocean.com:25060',
	'username' => 'doadmin',
	'password' => 'AVNS_VD2DSeDufXiFeiUsqnL',
	'database' => 'hyd_dmr',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => FALSE,
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
