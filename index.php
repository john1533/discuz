<?php
    phpinfo();
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	  
	//将出错信息输出到一个文本文件
	ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
?>
