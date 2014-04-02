<?php

$host = 'localhost';
$database = '';
$username = '';
$password = '';

$default_connection = 'development';

$connections = array(
	'development' => 'mysql://'.$username.':'.$password.'@'.$host.'/'.$database,
	'production' => 'mysql://'.$username.':'.$password.'@'.$host.'/'.$database,
);
