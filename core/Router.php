<?php
include 'autoload.php';
include('routes.php');

class Router
{
    private $request;

    public function __construct($request)
    {
        $this->request = $request;
        $this->routes = include('routes.php');
    }

    public function get($route)
    {
        $route = explode('/', $route);
        if (!strpos($route[1], '/'))
            $path = '/' . $route[1];

        if (array_key_exists($path, $this->routes)) {
            $parameters = array_slice($route, 2);

            $pathContains = explode('@', $this->routes[$path]);
            $functionName = $pathContains[1];
            $className = $pathContains[0];
            $instance = new $className;

            $dynamicFunctionReturns = call_user_func_array(array($instance, $functionName), $parameters);
            return $dynamicFunctionReturns;
        } else {
            include ('core/Resources/index.view.php');
        }

    }
}