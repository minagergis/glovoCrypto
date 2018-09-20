<?php

/**
 * Index page :
 * All requests will came to this page first in order to be sent to the router
 * Request LifeCycle in Glovo Crypto App is
 * Index.php => Router.php => The specific controller and function
 *
 * Note : I edited the .htaccess to direct all requests to the index first except
 * the assets requests images,css,js,etc.
 */

include 'core/Router.php';
$request = $_SERVER['REQUEST_URI'];
$router = new Router($request);
if (isset($request)) {
    $return = $router->get($request);
    echo $return;

}
