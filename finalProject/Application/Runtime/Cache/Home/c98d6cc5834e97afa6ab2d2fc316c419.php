<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title></title>
</head>
<body>
<script>
    $.ajax({
        type:'post',
        url:'./flightcheak',
        success: function (data) {
            $(".info").html(data);
        }
    })
</script>
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
</body>
</html>