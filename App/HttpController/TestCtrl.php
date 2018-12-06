<?php
/**
 * Created by PhpStorm.
 * User: cheng
 * Date: 2018/12/6
 * Time: 23:26
 */

namespace App\HttpController;


use App\ViewController;

class TestCtrl extends ViewController
{

    function index()
    {
        // TODO: Implement index() method.
        $this->render("index", array(
            "content" => "hello TestController!"
        ));
    }
}