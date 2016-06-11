<?php
/**
 * Created by PhpStorm.
 * User: dubo
 * Date: 16/6/10
 * Time: 下午4:41
 */
session_start();
$article_id=$_GET['article_id'];
define('MYSQL_HOST','localhost:3307');
define('MYSQL_USER','root');
define('MYSQL_PW','db593607007');
$conn =  mysql_connect("$MYSQL_HOST","$MYSQL_USER","$MYSQL_PW");
if(!$conn){
    echo ('can not connect db');
}

mysql_select_db('mrdubo');

$select="select * from article where id=$article_id";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../favicon.ico">

    <title>Narrow Jumbotron Template for Bootstrap</title>
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">

</head>

<body>

<div class="container">
    <div class="header clearfix">
        <nav>
            <ul class="nav nav-pills pull-right">
                <li role="presentation" class=""><a href="#">logout</a></li>
                <li role="presentation" class="active"><a href="#">new</a></li>

            </ul>
        </nav>
        <h3 class="text-muted">Mrdubo</h3>
    </div>



    <div class="jumbotron">
        <img src="images/java.jpg" style="width: 200px;height: 300px;">

        <div style="float: right;margin-right: 250px">
            <h2>123</h2>
            <h3>123</h3>
            <h3>123</h3>
            <h3>123</h3>
        </div>

    </div>





    <div class="row marketing">
        <div class="col-lg-6 col-lg-offset-1">
            <div>
                <img src="images/bo.png" style="width: 30px;float: left">
                <h2>title1</h2>
                <p>message.</p>
            </div>
            <h2>title1</h2>
            <p>message.</p>

            <h2>title1</h2>
            <p>message.</p>
        </div>

        <div class="col-lg-12">
            <h2>title1</h2>
            <p>message.</p>

            <h2>title1</h2>
            <p>message.</p>


        </div>
    </div>

    <footer class="footer">
        <p>&copy; dubo 2016</p>
    </footer>

</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>

