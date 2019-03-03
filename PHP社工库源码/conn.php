<?php 
$db_config['host']     = 'localhost';      //数据库主机	
$db_config['user']     = 'root';      //数据库用户名	
$db_config['pwd']      = '201049';  //数据库用户密码	
$db_config['name']     = 'cnseu';      //数据库名	
$db_config['port']     = '3306';      //端口		
$db_config['language'] = 'utf8'; //数据库字符集 gbk,latin1,utf8,utf8..
$con = mysql_connect($db_config['host'],$db_config['user'],$db_config['pwd']);
mysql_query('set names utf8', $con);
mysql_select_db($db_config['name'],$con);

?>