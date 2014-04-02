<?php

ActiveRecord\Config::initialize(function($cfg) {
	require(ROOT . '/app/config/database.php');

	$cfg->set_model_directory(ROOT . '/app/models');
	$cfg->set_connections($connections);

	$cfg->set_default_connection($default_connection);
});
