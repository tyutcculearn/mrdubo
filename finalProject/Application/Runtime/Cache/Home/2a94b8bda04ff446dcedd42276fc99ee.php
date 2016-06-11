<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>后台管理</title>
    <link rel="stylesheet" href="/~dubo/mrdubo/finalProject/Public/amazeui.min.css">
    <script src="/~dubo/mrdubo/finalProject/Public/amazeui.min.js"></script>
    <link rel="stylesheet" href="/~dubo/mrdubo/finalProject/Public/bootstrap.min.css">
    <script src="/~dubo/mrdubo/finalProject/Public/jquery-2.1.4.min.js"></script>
    <script src="/~dubo/mrdubo/finalProject/Public/bootstrap.min.js"></script>
    <link href="/~dubo/mrdubo/finalProject/Public/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <nav class=" navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <img src="/~dubo/mrdubo/finalProject/Public/bo.png" style="width: 40px;height: 40px; margin-top: -8px">
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav" style="font-size: 16px">
                <li role="presentation"><a href="#" onclick="content()">后台管理</a></li>
            </ul>
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="输入搜索内容">
                </div>
                <button type="submit" class="btn btn-primary" style="margin-right: 20px">搜索</button>
            </form>
        </div>
    </nav>
</div>
<div class="mybody container-fluid" style="margin-top: 80px">
    <div class="row">
        <div class="leftmenu col-md-3">
            <div class="list-group">
            </div>
        </div>
        <div class="content col-md-9">
            <ol class="breadcrumb" style="font-size: 16px">
                <li role="presentation"><a href="#" class="active" onclick="user()"  style="text-decoration: none;">用户管理</a></li>
                <li role="presentation"><a href="#" onclick="course()"  style="text-decoration: none;">课程管理</a></li>
                <li role="presentation"><a href="#"  onclick="article()" style="text-decoration: none;">文章管理</a></li>
                <li role="presentation"><a href="#" onclick="response()"  style="text-decoration: none;">回复管理</a></li>
            </ol>
        </div>
    </div>
    <div class="info">

    </div>
    <div class="myfooter">
        <p><a href="http://www.miitbeian.gov.cn/">晋ICP备15007212号</a></p>
    </div>
</div>
<script>
    $.ajax({
        type:'post',
        url:'./userInfo',
        success: function (data) {
            $(".info").html(data);
        }
    });

    //用户管理
    function user(){
        $.ajax({
            type:'post',
            url:'./userInfo',
            success: function (data) {
                $(".info").html(data);
            }
        })
    }

    function userUpd(){
        $.ajax({
            type:'post',
            url:'./showUserUpd',
            success: function (data) {
                $(".info").html(data);
            }
        })
    }

    function userDel(){
        $.ajax({
            type:'post',
            url:'./showUserDel',
            success: function (data) {
                $(".info").html(data);
            }
        })
    }

    //课程管理
    function course(){
        $.ajax({
            type:'post',
            url:'./courseInfo',
            success: function (data) {
                $(".info").html(data);
            }
        })
    }

    function courseUpd(){
        $.ajax({
            type:'post',
            url:'./showCourseUpd',
            success: function (data) {
                $(".info").html(data);
            }
        })
    }

    function courseDel(){
        $.ajax({
            type:'post',
            url:'./showCourseDel',
            success: function (data) {
                $(".info").html(data);
            }
        })
    }
    //文章管理
    function article(){
        $.ajax({
            type:'post',
            url:'./articleInfo',
            success: function (data) {
                $(".info").html(data);
            }
        })
    }

    function articleUpd(){
        $.ajax({
            type:'post',
            url:'./showArticleUpd',
            success: function (data) {
                $(".info").html(data);
            }
        })
    }

    function articleDel(){
        $.ajax({
            type:'post',
            url:'./showArticleDel',
            success: function (data) {
                $(".info").html(data);
            }
        })
    }

    //回复管理
    function response(){
        $.ajax({
            type:'post',
            url:'./responseInfo',
            success: function (data) {
                $(".info").html(data);
            }
        })
    }

    function responseUpd(){
        $.ajax({
            type:'post',
            url:'./showResponseUpd',
            success: function (data) {
                $(".info").html(data);
            }
        })
    }

    function responseDel(){
        $.ajax({
            type:'post',
            url:'./showResponseDel',
            success: function (data) {
                $(".info").html(data);
            }
        })
    }
</script>
<script>
    $(".navbar-nav a").click(function (e) {
        $(this).tab("show");
    })
</script>
</body>
</html>