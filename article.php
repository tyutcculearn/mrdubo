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
    $sql = "insert into article (user_id,course_id,title,content,vip) values('" . $_POST['id'] . "','".$_POST['course_id']. " ','" . $_POST['title'] . "','" . $_POST['content'] . "','".$_POST['vip']."')";
    mysql_query("set names utf8");
    mysql_query($sql);
    $sql = "select LAST_INSERT_ID()";
    mysql_query("set names utf8");
    $res = mysql_query($sql);
    $row = mysql_fetch_row($res);
    mysql_close($conn);

echo "success";
