<?php
/**
 * Created by PhpStorm.
 * User: dubo
 * Date: 16/6/10
 * Time: 下午4:16
 */
session_start();
$error =1;
$username=$_POST['username'];
$Email=$_POST['Email'];
$PassWord=$_POST['PassWord'];
$PassWordAgain=$_POST['PassWordAgain'];
$bool1=$username&& $Email && $PassWord && $PassWordAgain;
$bool2=!isset($username) && !isset($Email) && !isset($PassWord) && !isset($PassWordAgain);
if($bool1){
    $sql = "select * from user where email='$Email'";
    $config=include 'config.php';
    $MYSQL_HOST=$config['MYSQL_HOST'];
    $MYSQL_USER=$config['MYSQL_USER'];
    $MYSQL_PW=$config['MYSQL_PW'];
    $conn =  mysql_connect("$MYSQL_HOST","$MYSQL_USER","$MYSQL_PW");
    if(!$conn){
        echo ('can not connect db');
    }

    mysql_select_db('mrdubo');
    mysql_query("set names utf8");
    $result = mysql_query($sql);
    
    if(mysql_num_rows($result))
        $error = "Warning! 此邮箱帐号已被注册";
    else{
        if($PassWord !=$PassWordAgain)
        {
            $error = "Warning! 密码与确认密码不同";
        }
        else{
            $sql="INSERT INTO user(name,email,password,vip) VALUES ('$username','$Email','$PassWord',0)";
            mysql_query("set names utf8");
            $result=mysql_query($sql);

            mysql_query("set names utf8");
            $result = mysql_query("select * from user where email='$Email'");

            $row = mysql_fetch_array($result);
            $_SESSION['id'] = $row['id'];

            mysql_close($conn);
        }
    }
}

else
{
    $error = "Warning! 请确保填写所有栏位123";
}

echo $error;

?>

