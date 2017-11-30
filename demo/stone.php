<?php 
header('Content-type:text/html;charset=utf8');
$redis = new Redis;
$redis->connect('127.0.0.1', 6379);
$redis->lpush('danmu',$_POST['danmu']);

?>
