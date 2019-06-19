<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/6/19
 * Time: 下午 10:15
 */

namespace Log;


class LogEmail implements  ILog
{
    public function  output()
    {
        return "Email out";
    }
}