<?php
session_start();
extract($_POST);
$error =1;
$bool1=$Email&&$PassWord;
$bool2=!isset($Email)&&!isset($PassWord);
if(isset($_GET['clear']) && $_GET['clear'])
    session_destroy();
if($bool1){
    define('MYSQL_HOST','localhost:3307');
    define('MYSQL_USER','root');
    define('MYSQL_PW','db593607007');
    $conn =  mysql_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PW);
    if(!$conn){
        echo ('can not connect db');
    }

    mysql_select_db('mrdubo');
    mysql_query("set names utf8");
    $result = mysql_query("select * from user where email='".mysql_real_escape_string($Email)."'");
    $row = mysql_fetch_array($result);
    $num_rows =mysql_num_rows($result);
    if($num_rows==0){
        $error='此账号不存在';
    }
    else if($PassWord!=$row['password']){
        $error='密码错误';
    }
    else{
        $_SESSION['id'] = $row['id'];
        mysql_close($conn);
        echo "<script>alert('login succeed');location.href=\"learn-index.php\";</script>";
    }
}
else if($bool2){
    $error="";

}
else{
    $error='请输入所有的栏位';
}
echo $error;
?>