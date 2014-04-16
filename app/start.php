<?php

require ROOT . '/app/dbloader.php';

/*
|--------------------------------------------------------------------------
| Create Slim Application
|--------------------------------------------------------------------------
*/

// Instantiate application
$app = new \Slim\Slim(require_once ROOT . '/app/config/app.php');
$app->setName('Active Slim API');


// For native PHP session
session_cache_limiter(false);
session_start();

// For encrypted cookie session 
/*
$app->add(new \Slim\Middleware\SessionCookie(array(
            'expires' => '20 minutes',
            'path' => '/',
            'domain' => null,
            'secure' => false,
            'httponly' => false,
            'name' => 'app_session_name',
            'secret' => md5('appsecretkey'),
            'cipher' => MCRYPT_RIJNDAEL_256,
            'cipher_mode' => MCRYPT_MODE_CBC
        )));
*/

foreach(glob(ROOT . '/app/controllers/*.php') as $router) {
	include $router;
}

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/

return $app;
