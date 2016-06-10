<?php
/**
 * Created by PhpStorm.
 * User: dubo
 * Date: 16/6/11
 * Time: 上午12:06
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
$mes="select Response.*,user.Name from Response left join user 
	on Response.user_id = user.id where article_id='$article_id' order by Response.timestamp desc";
mysql_query("set names utf8");
$result=mysql_query($mes);
$ans = "";
$data;
while($row = mysql_fetch_array($result)) {

    $data[] = $row;
}
echo json_encode($data);