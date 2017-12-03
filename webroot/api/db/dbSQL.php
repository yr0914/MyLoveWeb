<?php
/**
 * Created by PhpStorm.
 * User: myLove
 * Date: 2017/11/10
 * Time: 9:30
 * @e-mail mylove.520.y@gmail.com
 * @overview
 */
$mysql_server_name = 'sqld-gz.bcehost.com:3306'; //改成自己的mysql数据库服务器

$mysql_username = '6c6a5d4d7306404dbe6e576d9581ce47'; //改成自己的mysql数据库用户名

$mysql_password = 'f17c472c307f4072bd8048b0f79cdbbd'; //改成自己的mysql数据库密码

$mysql_database = 'FMgBursRyCmhejiRFUJb'; //改成自己的mysql数据库名

$con = mysql_connect($mysql_server_name, $mysql_username, $mysql_password,$mysql_database);
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
if (mysql_query("CREATE DATABASE my_db", $con)) {
    echo "Database created";
} else {
    echo "Error creating database: " . mysql_error();
}

mysql_close($con);
?>