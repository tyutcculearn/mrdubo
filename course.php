<?php
/**
 * Created by PhpStorm.
 * User: dubo
 * Date: 16/6/10
 * Time: 下午4:41
 */
session_start();
$user_id=$_SESSION['id'];
$course_id=$_GET['course_id'];
$config=include 'config.php';
$MYSQL_HOST=$config['MYSQL_HOST'];
$MYSQL_USER=$config['MYSQL_USER'];
$MYSQL_PW=$config['MYSQL_PW'];
$conn =  mysql_connect("$MYSQL_HOST","$MYSQL_USER","$MYSQL_PW");
if(!$conn){
    echo ('can not connect db');
}

mysql_select_db('mrdubo');

$select="select * from course where id= '".$course_id."'";
mysql_query("set names utf8");
$res = mysql_query($select);
$row=mysql_fetch_array($res);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="bobofenxiang">
    <meta name="author" content="DuBo">
    <link rel="icon" href="images/bo.png">

    <title>MR.DuBo</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/course.js"></script>


    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">
    <style>
        a:link{
            text-decoration:none;
        }
        a:hover {color: #00a0e9}
    </style>

</head>

<body>

<div class="container">
    <div class="header clearfix">
        <nav>

            <?php
            if($user_id!=""){
                echo"  <ul class=\"nav nav-pills pull-right\">
                <li role=\"presentation\" class=\"\"><a href=\"./login.php?clear=1\">注销</a></li>
                <button class='btn btn-primary' id='new' data-toggle=\"modal\" data-target=\".bs-example-modal-lg\">
                    <a style='color:white;text-decoration: none;'><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span> 发表新文章</a>
                </button>

            </ul>";
            }
            ?>
        </nav>
        <h3 class="text-muted">Mrdubo</h3>
    </div>

    <div class="col-lg-6">
        <?php
        echo "
        <img src='./images/".$row["img"]."' style='width: 200px;height: 300px;margin-right: 300px'>"?>
    </div>
    <div class="col-lg-6">
        <?php
        echo "
        <h2>".$row['title']."</h2>
        "?>
        <?php
        echo "
        <h3>".$row['message']."</h3>
        "?>
    </div>


<div class="row marketing">

</div>



    <div class="row marketing">
        <div class="col-lg-12">
            <?php
            $couese_id=$_GET['course_id'];
            $config=include 'config.php';
            $MYSQL_HOST=$config['MYSQL_HOST'];
            $MYSQL_USER=$config['MYSQL_USER'];
            $MYSQL_PW=$config['MYSQL_PW'];
            $conn =  mysql_connect("$MYSQL_HOST","$MYSQL_USER","$MYSQL_PW");
            if(!$conn){
                echo ('can not connect db');
            }

            mysql_select_db('mrdubo');

            $select="select * from article where course_id= '".$course_id."' and vip = '1' ORDER BY id DESC";
            mysql_query("set names utf8");
            $res = mysql_query($select);
            while($row=mysql_fetch_array($res)){
                $row[content] = str_replace("<YUN>http://pan.baidu.com/s/","<dsvsss",$row[content]);
                $row[content] = str_replace("</YUN>",">百度云地址",$row[content]);
                $content = substr($row['content'],0,100);
                echo
                "<a  style=\"color: red\" href='./response.php?article_id=".$row['id']."&course_id=".$course_id."'>
                <h2>".$row['title']."</h2>
                
                <div >".$content."...</div>
                </a>
                <br>";
            }
            ?>
        </div>
    </div>
        <div class="row marketing">
            <div class="col-lg-12" id="article_normal">
                <?php
                $couese_id=$_GET['course_id'];
                $config=include 'config.php';
                $MYSQL_HOST=$config['MYSQL_HOST'];
                $MYSQL_USER=$config['MYSQL_USER'];
                $MYSQL_PW=$config['MYSQL_PW'];
                $conn =  mysql_connect("$MYSQL_HOST","$MYSQL_USER","$MYSQL_PW");
                if(!$conn){
                    echo ('can not connect db');
                }

                mysql_select_db('mrdubo');

                $select="select * from article where course_id= '".$course_id."' and vip = '0' ORDER BY id DESC";
                mysql_query("set names utf8");
                $res = mysql_query($select);
                while($row=mysql_fetch_array($res)){
                    $row[content] = str_replace("<YUN>http://pan.baidu.com/s/","<dsvsss",$row[content]);
                    $row[content] = str_replace("</YUN>",">百度云地址",$row[content]);
                    $content = substr($row['content'],0,100);

                    echo
                        "<a  style=\"color: black\" href='./response.php?article_id=".$row['id']."&course_id=".$course_id."'><h2>".$row['title']."</h2>
                <div>".$content."...</div></a><br>";
                }
                ?>
            </div>
    </div>

    <footer class="footer">
        <p>&copy; dubo 2016</p>
    </footer>

    </div> <!-- /container -->
</div>



<div id="myModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" style="background-color: white;border-radius: 10px">
        <div class="modal-header" style="margin-bottom: 3%">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" style="text-align: center;font-family: 'Al Bayan'" id="title_modal">发表新文章</h4>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-bottom: 2%;margin-left: 2%">
                <form id="form_article">
                    <div style="width: 70%;margin-left: 15%">
                        <div style="margin-bottom: 5%">
                            <label style="float: left;margin-right: 5%">标题</label>
                            <input id="title" type="input" class="form-control" name="title" placeholder="Title" style="width: 70%;position: relative;">
                        </div>
                        <div class="form-group" style="margin-bottom: 10%">
                            <label for="exampleInputEmail1" style="margin-right: 4%">内容</label>
                            <button type="button" id="bvideo" class="btn btn-default btn-sm"  aria-label="Left Align"><span class="glyphicon glyphicon-cloud" aria-hidden="true"></span></button>
                            <button type="button" id="Strong" class="btn btn-default btn-sm"  aria-label="Left Align"><span class="glyphicon glyphicon-bold" aria-hidden="true"></span></button>
                            <button type="button" id="R" class="btn btn-danger btn-sm"  aria-label="Left Align"><span class="glyphicon glyphicon-font" aria-hidden="true"></span></button>
                            <button type="button" id="G" class="btn btn-success btn-sm" aria-label="Left Align"><span class="glyphicon glyphicon-font" aria-hidden="true"></span></button>
                            <div id="video" style="margin-top: 2%;  display: none;">
                                <div style="margin-right: 0px">
                                    <p style="color: #3c3c3c;margin: 0;padding: 0;font-size: 14px">插入百度云盘网址:</p>
                                </div>
                                <div>
                                    <input id="videoID" type="input" class="form-control" name="videoID" placeholder="百度云盘URL" style="width: 60%;float: left;height: 5%;font-size: 10px;margin-right: 2%;margin-top: 1px">
                                </div>
                                <div>
                                    <button type="button" id="insert_video" class="btn btn-default btn-sm">Insert</button>
                                </div>
                            </div>
                            <textarea class="form-control" id="content_code" name="content" placeholder="Content" rows="10" style="margin-top: 5%"></textarea>
                            <div id="content_html" name="content_html" style="margin-top: 2%; margin-bottom: 2%"></div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-default" data-dismiss="modal" id="cancel">Cancel</button>
                            <button type="button" id="create" class="btn btn-success">Submit</button>
                            <?php
                            echo "<input type=\"hidden\" name=\"id\" value=\"".$_SESSION['id']."\"\>";
                            echo "<input type=\"hidden\" name=\"vip\" value=\"0\">";
                            echo "<input type=\"hidden\" name=\"course_id\" id='course_id' value=\"".$_GET['course_id']."\">";
                            ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

</body>
</html>

