<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>后台页面</title>
    <link rel="stylesheet" href="/airadmin/Public/amazeui.min.css">
    <script src="/airadmin/Public/amazeui.min.js"></script>
    <link rel="stylesheet" href="/airadmin/Public/bootstrap.min.css">
    <script src="/airadmin/Public/jquery-2.1.4.min.js"></script>
    <script src="/airadmin/Public/bootstrap.min.js"></script>
    <link href="/airadmin/Public/style.css" rel="stylesheet">
</head>
<body>
<div class="myheading">
    <nav class=" navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img src="/airadmin/Public/logo.png" style="width: 180px; margin: -10px; margin-left: -60px">
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li role="presentation" class="active"><a href="#" onclick="admin()">管理员信息</a></li>
                    <li role="presentation"><a href="#" onclick="content()">内容管理</a></li>
                </ul>
                <button type="submit" class="btn btn-default navbar-btn navbar-right"><a href="login.html"  style="text-decoration: none;">切换账号</a></button>
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="输入搜索内容">
                    </div>
                    <button type="submit" class="btn btn-default">搜索</button>
                </form>
            </div>
        </div>
    </nav>
</div>
<div class="mybody container">
    <div class="row">
        <div class="leftmenu col-md-3 col-sm-5">
            <div class="list-group">

            </div>
        </div>
        <div class="content col-md-9 col-sm-7">

            <ol class="breadcrumb">
                <li role="presentation"><a href="#" class="active" onclick="line()"  style="text-decoration: none;">航班管理</a></li>
                <li role="presentation"><a href="#"  onclick="user()" style="text-decoration: none;">用户管理</a></li>
                <li role="presentation"><a href="#" onclick="agency()"  style="text-decoration: none;">旅行社管理</a></li>
                <li role="presentation"><a href="#" onclick="book()"  style="text-decoration: none;">机票预订管理</a></li>
            </ol>

        </div>
    </div>
    <div class="info">

    </div>
    <div class="myfooter">
        <p>Copyright © 2015-2018 中国皇冠航空 All Rights Reserved.</p>
    </div>
</div>
<script>
    $.ajax({
        type:'post',
        url:'./flightcheak',
        success: function (data) {
            $(".info").html(data);
        }
    })
</script>
<script>
    function admin(){
        $.ajax({
            type:'post',
            url:'./admin',
            success: function (data) {
                $(".mybody").html(data);
            }
        })
    }
</script>
<script>
    function content(){
        $.ajax({
            type:'post',
            url:'./content',
            success: function (data) {
                $(".mybody").html(data);
            }
        })
    }
</script>
<script>
    function user(){
        $.ajax({
            type:'post',
            url:'./usercheak',
            success: function (data) {
                $(".info").html(data);
            }
        })
    }
    function agency(){
        $.ajax({
            type:'post',
            url:'./agencycheak',
            success: function (data) {
                $(".info").html(data);
            }
        })
    }
    function line(){
        $.ajax({
            type:'post',
            url:'./flightcheak',
            success: function (data) {
                $(".info").html(data);
            }
        })
    }
    function book(){
        $.ajax({
            type:'post',
            url:'./bookcheak',
            success: function (data) {
                $(".info").html(data);
            }
        })
    }
</script>
<script>
    function lineupd(){
        $.ajax({
            type:'post',
            url:'./showupd',
            success: function (data) {
                $(".info").html(data);
            }
        })
    }

    function linedel(){
        $.ajax({
            type:'post',
            url:'./showdel',
            success: function (data) {
                $(".info").html(data);
            }
        })
    }
</script>
<script>
    function userupd(){
        $.ajax({
            type:'post',
            url:'./showUserUpd',
            success: function (data) {
                $(".info").html(data);
            }
        })
    }

    function userdel(){
        $.ajax({
            type:'post',
            url:'./showUserDel',
            success: function (data) {
                $(".info").html(data);
            }
        })
    }
</script>
<script>
    function agencyupd(){
        $.ajax({
            type:'post',
            url:'./showAgencyUpd',
            success: function (data) {
                $(".info").html(data);
            }
        })
    }

    function agencydel(){
        $.ajax({
            type:'post',
            url:'./showAgencyDel',
            success: function (data) {
                $(".info").html(data);
            }
        })
    }
</script>
<script>
    function bookupd(){
        $.ajax({
            type:'post',
            url:'./showBookUpd',
            success: function (data) {
                $(".info").html(data);
            }
        })
    }

    function bookdel(){
        $.ajax({
            type:'post',
            url:'./showBookDel',
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