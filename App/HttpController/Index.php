<?php
/**
 * Created by PhpStorm.
 * User: cheng
 * Date: 2018/12/6
 * Time: 22:55
 */
namespace App\HttpController;
use App\ViewController;


class Index extends ViewController
{
    function index()
    {
        // TODO: Implement index() method.
        // Blade View
        $this->render('index', array("content" => "hello world!!"));     # 对应模板: Views/index.blade.php
    }

}