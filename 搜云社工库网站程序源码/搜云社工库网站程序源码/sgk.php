<?php
ob_start();
session_start();
$serverName     = 'localhost'; //sqlserver
// 数据库服务器地址
$uid            = 'root';
// 数据库用户名
$pwd            = 'woainiqq..274271';
// 数据库密码

$connectionInfo = array("UID"=>$uid, "PWD"=>$pwd, "Database"=>"new");

$conn = sqlsrv_connect( $serverName, $connectionInfo);
if (is_file($_SERVER['DOCUMENT_ROOT'] . '/360safe/360webscan.php')) {
    require_once($_SERVER['DOCUMENT_ROOT'] . '/360safe/360webscan.php');
} // 注意文件路径
if( $conn == false)

{

echo "连接失败！";

// die( print_r( sqlsrv_errors(), true));

}
$host     = 'localhost'; //数据库服务器
$user     = 'root'; //数据库用户名
$password = 'woainiqq..274271'; //数据库密码
$database = 'sgk'; //数据库名
$conn1 = @mysql_connect($host, $user, $password) or die('数据库连接失败！');
@mysql_select_db($database) or die('没有找到数据库！');
mysql_query("set names utf8");
?>