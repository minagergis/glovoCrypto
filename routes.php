<?php

/**
 * Routes system : a simple system created specially for this task purpose to compromise
 * between the simplicity of the any framework routing technique and the performance of
 * the application as the frameworks usually user multilayers architecture which may cause
 * some performance issues
 *
 * To Register new route, just add your route and the Controller name amd the function to
 * Call like  '/routeName/firstParams/secondParams/etc => 'ControllerName@FunctionName'
 */

$routes = [

    '/products' => 'TradesController@getCommonProductsFromExchange',
    '/ticker' => 'TradesController@getPricesForProductFromExchange',
    '/' => 'TradesController@getIndex',
];


return $routes;
