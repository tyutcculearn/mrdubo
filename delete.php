<?php
/**
 * Created by PhpStorm.
 * User: dubo
 * Date: 16/6/11
 * Time: 下午12:51
 */
session_start();
$user_id=$_SESSION['id'];
if($user_id=="") {
    echo "<script>alert('请通过正确的途径！');location.href='index.php';</script>";//替换成要跳转的网址；
    exit;//终止程序继续执行
}
$delete=$_GET['delete'];
$article_id=$_GET['article_id'];
$config=include 'config.php';
$MYSQL_HOST=$config['MYSQL_HOST'];
$MYSQL_USER=$config['MYSQL_USER'];
$MYSQL_PW=$config['MYSQL_PW'];
$conn =  mysql_connect("$MYSQL_HOST","$MYSQL_USER","$MYSQL_PW");
if(!$conn){
    echo ('can not connect db');
}

mysql_select_db('mrdubo');

$own="select user_id from article where id=$article_id;";

mysql_query("set names utf8");
$result_own= mysql_query($own);

$row_own=mysql_fetch_array($result_own);



if($row_own[user_id]==$user_id){

    $bool=1;

}
else{
    $bool=0;
}
echo $bool;
if($bool){
    $delete_article = "delete from article where id = '".$article_id."'";
    $delete_response = "delete from response where article_id = '".$article_id."'";
    mysql_query("set names utf8");
    mysql_query($delete_article);
    mysql_query($delete_response);
    echo "<script>alert('删除成功！');location.href='learn-index.php';</script>";
}
else{
    echo "<script>alert('这不是你的文章,你没有权限！');location.href='learn-index.php';</script>";
}


