<?php
/**
 * Created by PhpStorm.
 * User: dubo
 * Date: 16/6/10
 * Time: 下午4:41
 */
session_start();
//if($_SESSION['id']=="") {
//    echo "<script>alert('请通过正确的途径登录本系统！');location.href='login.php';</script>";//替换成要跳转的网址；
//    exit;//终止程序继续执行
//}
$user_id=$_SESSION['id'];

$article_id=$_GET['article_id'];
define('MYSQL_HOST','localhost:3307');
define('MYSQL_USER','root');
define('MYSQL_PW','db593607007');
$conn =  mysql_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PW);
if(!$conn){
    echo ('can not connect db');
}

mysql_select_db('mrdubo');


$select="select * from article where id=$article_id";
mysql_query("set names utf8");
$result= mysql_query($select);
$row = mysql_fetch_array($result)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Narrow Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <script src="js/jquery.min.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">
    <script src="js/myjs.js"></script>
</head>

<body>

<div class="container">
    <div class="header clearfix">
        <nav>
            <ul class="nav nav-pills pull-right">
                <li role="presentation" class="active"><a href="#">修改</a></li>
                <li role="presentation" class="active"><a href="#">删除</a></li>

            </ul>
        </nav>
        <h3 class="text-muted">Mrdubo</h3>
    </div>



    <div class="jumbotron">
        <?php
        echo"<h2>".$row[title]."</h2>";
        echo "<p>".$row[content]."</p>";
        ?>



    </div>





    <div class="row marketing">
       <div class="col-lg-12">
           <table class="table table-striped">
               <thead>
                <th>name</th>
                <th>message</th>
                <th>time</th>
               </thead>
               <tbody></tbody>
                <tr>
                    <td>123</td>
                    <td>123</td>
                    <td>123</td>
                </tr>

           </table>
       </div>
    </div>
    <div class="row marketing">
        <h5>username:</h5>
        <form method="post" id="responseform">
            <?php
            echo "<input type=\"hidden\" value=\"".$article_id."\" name=\"article_id\"> 
            <input type=\"hidden\" value=\"".$user_id."\" name=\"user_id\"> 
            
            
            <input class=\"form-control\" type=\"text\" style=\"width: 300px;float: left\" name=\"content\">

            <input type=\"button\" class=\"btn btn-success\" value=\"response\" id=\"response\" >";
            ?>


        </form>

    </div>
    <footer class="footer">
        <p>&copy; dubo 2016</p>
    </footer>

</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

</body>
</html>

