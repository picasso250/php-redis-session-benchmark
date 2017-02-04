<?php
/**
 * Created by PhpStorm.
 * User: xiaochi.wang
 * Date: 2017/2/3
 * Time: 14:18
 */

$_SESSION['foo'] = $r = mt_rand();
echo session_id(),"\t";
echo $r,PHP_EOL;
