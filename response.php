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
$course_id=$_GET['course_id'];
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


$select="select * from article where id=$article_id";
mysql_query("set names utf8");
$result= mysql_query($select);
$row = mysql_fetch_array($result);

$select_name="select * from user where id=$user_id";
mysql_query("set names utf8");
$result_name= mysql_query($select_name);
$row_name = mysql_fetch_array($result_name);

$own="select user_id from article where id=$article_id";
mysql_query("set names utf8");
$result_own= mysql_query($own);
$row_own = mysql_fetch_array($result_own);
if($row_own[user_id]==$user_id){
    $bool=1;

}
else{
    $bool=0;
}

if($row[vip]==1){
    $article_vip=1;
}
else{
    $article_vip=0;
}
if($row_name[vip]==1){
    $user_vip=1;
}
else{
    $user_vip=0;
}
if($user_id==""){
    echo "<script>alert('请登陆后查看！');location.href='learn-index.php';</script>";
}
if($article_vip==1&&$user_vip==0){
    echo "<script>location.href='vip.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="bobofenxiang">
    <meta name="author" content="DuBo">
    <link rel="icon" href="images/bo.png">

    <title>MR.DuBo</title>

    <!-- Bootstrap core CSS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">
    <script src="js/myjs.js"></script>
    <script src="js/course.js"></script>
</head>

<body>

<div class="container">
    <div class="header clearfix">
        <nav>
            <ul class="nav nav-pills pull-right">
                <?php

                if($bool){
                echo "
                    <form method='post' id='modiform' style='float: left'>
                    <input type='hidden' value=$article_id name='article_id' id='article_id'>
                    <button type='button' class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#myModal\" id='modi'>修改</button>
                    </form>
                    

               

                <a href=\"delete.php?article_id=".$article_id."\"><button class=\"btn btn-danger\" >删除</button></a> 
                ";
                }
                echo"<a href=\"course.php?course_id=".$course_id."\"><button class=\"btn btn-warning\" >返回</button></a>";
                ?>



            </ul>
        </nav>
        <h3 class="text-muted">Mrdubo</h3>
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
                                <button class="btn btn-default" data-dismiss="modal" id="cancel">取消</button>
                                <button type="button" id="updata" class="btn btn-success">修改</button>
                                <?php
                                echo "<input type=\"hidden\" name=\"article_id\" value=\"".$article_id."\"\>";
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


    <div class="jumbotron">
        <?php

        $row[content] = str_replace("<R>","<span style=\"color:red;\">",$row[content]);
        $row[content] = str_replace("</R>","</span>",$row[content]);
        $row[content] = str_replace("<G>","<span style=\"color:green;\">",$row[content]);
        $row[content] = str_replace("</G>","</span>",$row[content]);

        $row[content] = str_replace("<YUN>","<a href='",$row[content]);
        $row[content] = str_replace("</YUN>","'>百度云地址</a>",$row[content]);
        $row['content'] = str_replace("\n","<br>",$row['content']);

        ?>

        <?php
        echo"<h2 id=\"updatatitle\">".$row[title]."</h2>";
        echo "<p id=\"updatacontent\">".$row[content]."</p>";




        ?>



    </div>





    <div class="row marketing">
       <div class="col-lg-12">
           <table class="table table-striped" >
               <thead>
                <th>name</th>
                <th>message</th>
                <th>time</th>
               </thead>
               <tbody id="responsetable">
               <?php
               $select_response="select response.*,user.name from response left join user 
	on response.user_id = user.id where article_id='$article_id' order by response.timestamp desc";
               mysql_query("set names utf8");
               $result2= mysql_query($select_response);
               while($row2 = mysql_fetch_array($result2)) {
                   echo"
                   <tr>
                    <td> ".$row2[name]."   </td>
                    <td>  ".$row2[message]."  </td>
                    <td>  ".$row2[timestamp]."  </td>
                   </tr>";
               }
               ?>

               </tbody>
           </table>
       </div>
    </div>

    <?php

    if($user_id!=""){
        echo"
            <div class=\"row marketing\">
                <h4 style=\"float:left \">";
                    echo $row_name[name];
                echo "    :</h4>
                <form method=\"post\" id=\"responseform\">
                    
                    
                   <input type=\"hidden\" value=\"".$article_id."\" name=\"article_id\"> 
                    <input type=\"hidden\" value=\"".$user_id."\" name=\"user_id\"> 
                    
                    
                    <input class=\"form-control\" type=\"text\" style=\"width: 300px;float: left\" name=\"content\">
        
                    <input type=\"button\" class=\"btn btn-success\" value=\"response\" id=\"response\" >
                    
        
        
                </form>
        
            </div>";
    }
    else{
        echo"";
    }

    ?>
    <footer class="footer">
        <p>&copy; dubo 2016</p>
    </footer>

</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

</body>
</html>

