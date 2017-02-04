<?php
/**
 * Created by PhpStorm.
 * User: xiaochi.wang
 * Date: 2017/2/4
 * Time: 10:48
 */


$_session_conf = array(
    'save_handler' => 'memcached',
    'save_path' => 'xxxx.aliyuncs.com:11211',
);
ini_set("session.save_handler", $_session_conf['save_handler']);
ini_set("session.save_path", $_session_conf['save_path']);
session_start();
include __DIR__.'/logic.php';
