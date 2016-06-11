<?php

$config=include 'config.php';
$MYSQL_HOST=$config['MYSQL_HOST'];
$MYSQL_USER=$config['MYSQL_USER'];
$MYSQL_PW=$config['MYSQL_PW'];
$conn =  mysql_connect("$MYSQL_HOST","$MYSQL_USER","$MYSQL_PW");
if(!$conn){
    echo ('can not connect db');
}

mysql_select_db('mrdubo');
    $sql = "select article.* from article where course_id= '".$_POST['course_id']."' and vip = '0' order by id desc";
mysql_query("set names utf8");
    $res = mysql_query($sql);
    while($row = mysql_fetch_array($res))
        $return[] = $row;
    mysql_close($conn);
    echo json_encode($return);


