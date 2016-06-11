<?php
session_start();

$grade=$_GET['grade'];
if($grade==11){
  $time=大一上;
}
else if($grade==12){
  $time=大一下;
}
else if($grade==21){
  $time=大二上;
}
else if($grade==22){
  $time=大二下;
}
else if($grade==31){
  $time=大三上;
}
else if($grade==32){
  $time=大三下;
}


?>


<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="icon" href="images/bo.png">
    <title>love bo 资源分享</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/myjs.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">MR.DuBo_HOME</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">MR.DuBo_HOME</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">




              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">感谢您的注册</h4>
          </div>
          <div class="modal-body">
            <form method="post" id="registerform" >
              <div class="form-group">
                <label>UserName</label><br/>
                <input type="text" class="form-control" name="username" placeholder="UserName" id="exampleInputName2">
              </div>
              <div class="form-group">
                <label>Email</label><br/>
                <input type="text" class="form-control" name="Email" placeholder="Email">
              </div>

              <div class="form-group">
                <label>PassWord</label><br/>
                <input type="password" class="form-control" name="PassWord" placeholder="PassWord">
              </div>
              <div class="form-group">
                <label>PassWordAgain</label><br/>
                <input type="password" class="form-control" name="PassWordAgain" placeholder="PassWordAgain">
              </div>
              <div id="error"></div>
              <a href="learn-index.php"> <input type="button" class="btn btn-lg btn-danger" value="cancel"></a>
              <input type="button" class="btn btn-lg btn-success" value="register" id="register">
            </form>
          </div>

        </div>
      </div>
    </div>
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel2">欢迎回来</h4>
          </div>
          <div class="modal-body">
            <form method="post" id="loginform" >

              <div class="form-group">
                <label>Email</label><br/>
                <input type="text" class="form-control" name="Email" placeholder="Email">
              </div>

              <div class="form-group">
                <label>PassWord</label><br/>
                <input type="password" class="form-control" name="PassWord" placeholder="PassWord">
              </div>

              <div id="error2"></div>
              <a href="login.php"> <input type="button" class="btn btn-lg btn-danger" value="cancel"></a>
              <input type="button" class="btn btn-lg btn-success" value="login" id="login">
            </form>
          </div>

        </div>
      </div>
    </div>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="images/pic0.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>欢迎来到波波资源分享.</h1>
              <p>波波资源分享网站是杜波制作的一个分享资源的网站，主要面对是软件学院的学生，提供了大概覆盖了大一到大二所学习课程的资料，分享途径主要是通过百度云盘进行分享.</br>
              9月21日更新第一版，会不断更新ing</p>


              <?php
              if($_SESSION['id']!="") {
                echo"<p>";
                echo "<a class=\"btn btn-lg btn-primary\" href=\"login.php?clear=1\">注销</a>";
              }

              else{
                echo "<a class='btn btn-lg btn-primary' href=\"#contact\" data-toggle=\"modal\" data-target=\"#myModal2\" >登陆</a>
                    <a class=\"btn btn-lg btn-primary\" href=\"#contact\" data-toggle=\"modal\" data-target=\"#myModal\" id=\"\">注册</a>";
              }
              ?>






              </p>
              
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="images/pic01.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>如果你有好的意见尽管提出.</h1>
              <p>我只是初学者，利用bootstrap框架搭建起来的网站.</br>联系方式qq：593607007
               </br>©杜波</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">请联系我</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="images/pic08.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>如果你喜欢请给予一点资助.</h1>
              <p>所有资源都是我精心寻找，尽我最大能力去寻找到的资源，应该会为学弟学妹提供一些帮助.</br>
              虽然是公益性，但还是希望大家可以资助我做的更好，给我更大的动力</br>
              支付宝：15034034077 杜波 谢谢</p>
              <p><a class="btn btn-lg btn-primary" href="https://www.alipay.com" role="button">捐助</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <section id="portfolio" class="one">

      </section>

      <!-- START THE FEATURETTES -->

      <?php
      $config=include 'config.php';
      $MYSQL_HOST=$config['MYSQL_HOST'];
      $MYSQL_USER=$config['MYSQL_USER'];
      $MYSQL_PW=$config['MYSQL_PW'];
      $conn =  mysql_connect("$MYSQL_HOST","$MYSQL_USER","$MYSQL_PW");
      $course = "select * from course where time='$time'";

      
      if(!$conn){
        echo ('can not connect db');
      }
      mysql_select_db('mrdubo');
      mysql_query("set names utf8");
      $result_course = mysql_query($course);

      while($row1 = mysql_fetch_array($result_course)) {
        echo "      <hr class=\"featurette-divider\">


          <h1>".$row1[name]."</h1>
      <div class=\"row featurette\">
        <div class=\"col-md-5 \">
          <img class=\"featurette-image img-responsive center-block\" src=\"images/".$row1[img]."\" width=\"200px\">
        </div>
        <div class=\"col-md-7 \">
            <button style=\"float: right\" class=\"btn btn-success\">more</button>
             <ul style=\"float: left\" class=\"nav\">";
        $article_vip="select * from article where course_id=".$row1[id]." and vip=1 limit 2";
        $article="select * from article where course_id=".$row1[id]." and vip=0 limit 3";
        mysql_query("set names utf8");

        $result_article_vip = mysql_query($article_vip);
        $result_article = mysql_query($article);
        $number=0;
        while ($row2=mysql_fetch_array($result_article_vip)){
          echo"
            
            <li>
          <a href=\"response.php?article_id=".$row2['id']."\" style=\"font-size: 25px;color: red\">$row2[title]</a>
            </li>";
          $number=$number+1;
        }
        while ($row3=mysql_fetch_array($result_article)){
          echo"
            
            <li>
          <a href=\"response.php?article_id=".$row3['id']."\" style=\"font-size: 25px;\">$row3[title]</a>
            </li>";
          $number=$number+1;
        }
         echo"</ul>
        </div>
      </div>";


      }
      ?>











      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
       <!--  <p class="pull-right"><a href="#">Back to top</a></p> -->

        <p>&copy; 2015 杜波 . &middot; </p>
        <p class="text-center"><a href="http://www.miitbeian.gov.cn/">晋ICP备15007212号</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>
</html>
