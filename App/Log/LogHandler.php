<?php
/**
 * Created by PhpStorm.
 * User: cheng
 * Date: 2018/12/8
 * Time: 23:44
 */

namespace App\Log;


use EasySwoole\Component\Singleton;
use EasySwoole\EasySwoole\Config;
use EasySwoole\Trace\AbstractInterface\LoggerWriterInterface;

class LogHandler implements LoggerWriterInterface
{
    use Singleton;

    /**
     * @param array $obj
     * @param $logCategory
     * @param $timeStamp
     */
    function writeLog($obj, $logCategory, $timeStamp = 0)
    {
        if ($timeStamp === 0) {
            $timeStamp = date("Y-m-d H:i:s");
        }
        $dir = Config::getInstance()->getConf("LOG_DIR");
        // TODO: Implement writeLog() method.
        $dir = $dir . "/" . date("Y-m");
        if (!is_dir($dir)) {
            mkdir($dir);
        }
        $logFile = $dir . "/" . date("Y-m-d") . ".log";
        $content = sprintf("[%s] [%s] || %s \r\n", $timeStamp, $logCategory, json_encode($obj));
        //异步写入日志
        \Swoole\Async::writeFile($logFile, $content, function ($fileName){}, FILE_APPEND);
    }
    /**
     * @param $data
     * @param array $position trigger_position
     */
    function debug(&$data, $position) {
        $this->writeLog(array(
            "position" => $position,
            "data" => $data
        ), "debug");
    }
    /**
     * @param $data
     * @param $position
     */
    function info(&$data, $position) {
        $this->writeLog(array(
            "position" => $position,
            "data" => $data
        ), "info");
    }
    /**
     * @param $data
     * @param $position
     */
    function warn(&$data, $position) {
        $this->writeLog(array(
            "position" => $position,
            "data" => $data
        ), "warn");
    }
    /**
     * @param $data
     * @param $position
     */
    function error(&$data, $position) {
        $this->writeLog(array(
            "position" => $position,
            "data" => $data
        ), "error");
    }

}