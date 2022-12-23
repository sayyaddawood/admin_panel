<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;
/*
$db['default']['hostname'] = 'localhost';
/// $db['default']['port'] = 25060;
$db['default']['username'] = 'root';
$db['default']['password'] = '';
$db['default']['database'] = 'pti_members';
$db['default']['dbdriver'] = 'mysqli';
$db['default']['pconnect'] = FALSE;
*/

$db['default']['hostname'] = 'db-mysql-sgp1-12709-do-user-12232967-0.b.db.ondigitalocean.com:25060';
//$db['default']['port'] = 25060;
$db['default']['username'] = 'doadmin';
$db['default']['password'] = 'AVNS_VD2DSeDufXiFeiUsqnL';
$db['default']['database'] = 'hyd_dmr';
$db['default']['dbdriver'] = 'mysqli';
$db['default']['pconnect'] = FALSE;


/* $db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'db-mysql-sgp1-12709-do-user-12232967-0.b.db.ondigitalocean.com:25060',
	'username' => 'doadmin',
	'password' => 'AVNS_VD2DSeDufXiFeiUsqnL',
	'database' => 'hyd_dmr',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
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
); */
