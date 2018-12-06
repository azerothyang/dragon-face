<?php
/**
 * Created by PhpStorm.
 * User: cheng
 * Date: 2018/12/6
 * Time: 23:18
 */

namespace App\HttpController;


use EasySwoole\Http\AbstractInterface\AbstractRouter;
use FastRoute\RouteCollector;

class Router extends AbstractRouter
{
    function initialize(RouteCollector $routeCollector)
    {
        $this->setGlobalMode(true);
        $routeCollector->get('/', "/Index");
        // TODO: Implement initialize() method.
        $routeCollector->get('/test', "/TestCtrl");

    }
}