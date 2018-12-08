<?php
/**
 * Created by PhpStorm.
 * User: cheng
 * Date: 2018/12/8
 * Time: 10:32
 */

namespace App\Service;


use EasySwoole\Component\Singleton;

class TestSrv extends BaseService
{
    use Singleton;

    function getTest(){
        return $this->request("GET", "http://www.baidu.com/");
    }

}