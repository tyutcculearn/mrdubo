<?php
/**
 * Created by PhpStorm.
 * User: dubo
 * Date: 16/6/11
 * Time: 下午10:38
 */
$x=1;

$config=include 'config.php';

$MYSQL_HOST=$config['MYSQL_HOST'];
$MYSQL_USER=$config['MYSQL_USER'];
$MYSQL_PW=$config['MYSQL_PW'];
$conn =  mysql_connect("$MYSQL_HOST","$MYSQL_USER","$MYSQL_PW");
if(!$conn){
    echo ('can not connect db');
}

mysql_select_db('mrdubo');

$article_id=$_POST['article_id'];
$title=$_POST['title'];
$content=$_POST['content'];


$update = "update article set title='$title', content='$content' where id='".$article_id."'";

if(false==mysql_query($update)){
    echo 'shibai！';
}
mysql_query("set names utf8");
mysql_query($update);



mysql_close($database);

echo $x;