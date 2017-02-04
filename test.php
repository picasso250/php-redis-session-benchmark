<?php
/**
 * Created by PhpStorm.
 * User: xiaochi.wang
 * Date: 2017/2/3
 * Time: 14:19
 */
if (!isset($argv[1])) {
    echo "Usage: $argv[0] url\n";
    exit(1);
}

$base_url = $argv[1];

for($i = 0; $i < 1000; $i++)
{
    $id = mt_rand(1,100);
    $url = $base_url."?".http_build_query(array("id" => $id));
    $ch = curl_init($url);
    $f = __DIR__."/tmp_$id";
    if (is_file($f)) {
        curl_setopt($ch, CURLOPT_COOKIEFILE, $f);
    }
    curl_setopt($ch, CURLOPT_COOKIEJAR, $f);
    curl_exec($ch);
    curl_close($ch);
}
