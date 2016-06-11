<?php
session_start();
?>

<?php

extract($_POST);

$bool1=$Email&&$PassWord;
$bool2=!isset($Email)&&!isset($PassWord);
if(isset($_GET['clear']) && $_GET['clear'])
    session_destroy();
if($bool1){
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
    $result = mysql_query("select * from admin where name='".mysql_real_escape_string($Email)."'");
    $row = mysql_fetch_array($result);
    $num_rows =mysql_num_rows($result);
    if($num_rows==0){
        $error='此admin不存在';
    }
    else if($PassWord!=$row['password']){
        $error='密码错误';
    }
    else{
        $_SESSION['id'] = $row['id'];
        mysql_close($conn);
        echo "<script>alert('login succeed');location.href=\"./finalProject/index.php/Home/Index/index?#\";</script>";
    }
}
else if($bool2){
    $error="";

}
else{
    $error='请输入所有的栏位';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Theme Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>


    <link href="css/theme.css" rel="stylesheet">
</head>

<body role="document">

<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Mrdubo</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">


            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container theme-showcase" role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->

    <div class="jumbotron">
        <h1>请输入Email与密码</h1>

        <form action="admin.php" method="post">
            admin:<input type="text" class="form-control" name="Email" style="width: 300px">
            密码:<input type="password" class="form-control" name="PassWord" style="width: 300px"><br/>
            <input type="submit" class="btn btn-lg btn-success" value="登录">
        </form>


        <!-- Modal -->

        <?php

        echo "<div  style='width: 400px'><label style='color: #c8343f;'>$error</label></div>"
        ?>

    </div>





</div> <!-- /container -->


</body>
</html>
