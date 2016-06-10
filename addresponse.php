<?php
/**
 * Created by PhpStorm.
 * User: dubo
 * Date: 16/6/10
 * Time: 下午10:45
 */
$data=1;
Date_default_timezone_set("PRC");
$date=date("Y-m-d H:i:s");
$article_id=$_POST['article_id'];
$user_id=$_POST['user_id'];
$content=$_POST['content'];

$config=include 'config.php';
$MYSQL_HOST=$config['MYSQL_HOST'];
$MYSQL_USER=$config['MYSQL_USER'];
$MYSQL_PW=$config['MYSQL_PW'];
$conn =  mysql_connect("$MYSQL_HOST","$MYSQL_USER","$MYSQL_PW");
if(!$conn){
    echo ('can not connect db');
}

mysql_select_db('mrdubo');

$insert="insert into response (article_id,user_id,message,timestamp)VALUES ('$article_id','$user_id','$content','$date')";
mysql_query("set names utf8");
mysql_query($insert);
echo $data;