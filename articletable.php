<?php
/**
 * Created by PhpStorm.
 * User: dubo
 * Date: 16/6/11
 * Time: 下午10:24
 */
$article_id=$_POST['article_id'];
$config=include 'config.php';

$MYSQL_HOST=$config['MYSQL_HOST'];
$MYSQL_USER=$config['MYSQL_USER'];
$MYSQL_PW=$config['MYSQL_PW'];
$conn =  mysql_connect("$MYSQL_HOST","$MYSQL_USER","$MYSQL_PW");
if(!$conn){
    echo ('can not connect db');
}

mysql_select_db('mrdubo');

$query = "select * from article where id = $article_id";
mysql_query("set names utf8");
$result= mysql_query($query);
$data;

while($row = mysql_fetch_array($result)) {

    $data[] = $row;
}

mysql_close($conn);

echo json_encode($data);