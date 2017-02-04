<?php
/**
 * Created by PhpStorm.
 * User: xiaochi.wang
 * Date: 2017/2/3
 * Time: 14:18
 */
// 配置文件，配置活动相关信息
class Config{
    static $ENV = "PRD";
    public function __construct(){
        if(self::$ENV == "DEV"){

        } else if(self::$ENV == "PRD"){
            $this->event = "20170125_spring_festival";
            $this->session = array(
                'save_handler' => 'redis',
                'save_path' => 'xxx.aliyuncs.com?auth=ffff'
            );
            $this->log_file = '/tmp/app.log';
        }
    }
}

$_config = new Config();
$_session_conf = $_config->session;
ini_set("session.save_handler", $_session_conf['save_handler']);
ini_set("session.save_path", $_session_conf['save_path']);
session_start();
include __DIR__.'/logic.php';
