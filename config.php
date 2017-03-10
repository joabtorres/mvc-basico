<?php

require 'environment.php';

define("BASE_URL", 'http://php.dev/sistemas/intermediario/ALTERAR ISSO ALTERAR ISSO ALTERAR ISSO ALTERAR ISSO');

global $config;
$config = array();
if (ENVIRONMENT == "development") {
	$config['dbname'] = 'ALTERAR ISSO ALTERAR ISSO ALTERAR ISSO ALTERAR ISSO';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	$config['dbname'] = 'ALTERAR ISSO ALTERAR ISSO ALTERAR ISSO ALTERAR ISSO';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';}