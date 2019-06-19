<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/6/19
 * Time: 下午 10:18
 */
namespace  Log;
class MyLog
{
    private  $_log;
    function _construct(ILog $log)
    {
        $this->_log = $log;
    }

    public function write()
    {
        return $this->_log->output();
    }
}