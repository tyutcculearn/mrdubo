<?php
session_start();
if($_SESSION['id']!="") {

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
    <script src="js/jquery.min.js"></script>

    <script src="js/bootstrap.js"></script>
    <script src="js/myjs.js"></script>


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
                
<!--                <li class="dropdown active">-->
<!--                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">年级 <span class="caret"></span></a>-->
<!--                  <ul class="dropdown-menu">-->
<!--                    <li><a href="learn01.php">大一新生</a></li>-->
<!--                    <li><a href="learn02.html">大二</a></li>-->
<!--                    <li><a href="learn03.html">大三老肉</a></li>-->
<!--                    <li role="separator" class="divider"></li>-->
<!---->
<!--                  </ul>-->
<!--                </li>-->
                
                <!--<li><a href="daohang.html">导航页</a></li>-->




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
             <!--  <p><a class="btn btn-lg btn-primary" href="#" role="button">请联系我</a></p> -->
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
      <div class="row">
        <div class="col-lg-4 ">
          <img class="img-circle" src="images/one.png" alt="Generic placeholder image" width="150" height="150">
          <h2>大一新生</h2>
          <p>作为一名大一新生，开始好好享受享受大学的快乐吧，不要耽误课程就好，学习好高数和专业课，剩下就可以享受大学的时光了.</p>
                    <p><a class="btn btn-lg btn-primary" href="learn.php?grade=11" role="button">上学期</a>
                    <a class="btn btn-lg btn-primary" href="learn.php?grade=12" role="button">下学期</a></p>

        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4 ">
          <img class="img-circle" src="images/two.png" alt="Generic placeholder image" width="150" height="150">
          <h2>大二同学</h2>
          <p>作为大二学生，开始接触专业，学习新的重要语言java，寻找一个自己喜欢的方向，突出发展，同时不可落下其他方向的学习.</p>
           <p><a class="btn btn-lg btn-primary" href="learn.php?grade=21" role="button">上学期</a>
                    <a class="btn btn-lg btn-primary" href="learn.php?grade=22" role="button">下学期</a></p>
            
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4 ">
          <img class="img-circle" src="images/threes.png" alt="Generic placeholder image" width="150" height="150">
          <h2>大三老肉</h2></br>
          <p>在考试前2天的晚上，我会发布热门复习资料欢迎访问.</p></br>
                     <p><a class="btn btn-lg btn-primary" href="learn.php?grade=31" role="button">上学期</a>
                    <a class="btn btn-lg btn-primary" href="learn.php?grade=32" role="button">下学期</a></p>

        </div><!-- /.col-lg-4 -->
        
        

      </div><!-- /.row -->
</section>



      <!-- FOOTER -->
      <footer>
       <!--  <p class="pull-right"><a href="#">Back to top</a></p> -->

        <p>&copy; 2015 杜波 . &middot; </p>
        <p class="text-center"><a href="http://www.miitbeian.gov.cn/">晋ICP备15007212号</a> <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1256410937'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/z_stat.php%3Fid%3D1256410937%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script></p>
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74851820-2', 'auto');
  ga('send', 'pageview');

</script>
        
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>
</html>
