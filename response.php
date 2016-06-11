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

$select_name="select name from user where id=$user_id";
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
</head>

<body>

<div class="container">
    <div class="header clearfix">
        <nav>
            <ul class="nav nav-pills pull-right">
                <?php

                if($bool){
                echo "<button type='button' class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#myModal\">修改</button>
                <button class=\"btn btn-warning\" href=\"delete.php?article_id=".$article_id."\">删除</button>";
                }
                ?>



            </ul>
        </nav>
        <h3 class="text-muted">Mrdubo</h3>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">修改文章</h4>
                </div>
                <form>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">修改</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="jumbotron">
        <?php
        echo"<h2>".$row[title]."</h2>";
        echo "<p>".$row[content]."</p>";
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

