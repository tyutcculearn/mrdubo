<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="/finalProject/Public/bootstrap.min.css">
    <script src="/finalProject/Public/jquery.js"></script>
    <script src="/finalProject/Public/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/finalProject/Public/loginstyle.css">
</head>
<body>
<form role="form" class="form-horizontal" id="login" action="/finalProject/index.php/Home/Index/admlogin" method="post">
    <div class="form-group">
        <label class="sr-only col-sm-2 control-label">用户名：</label>
        <div class="col-sm-10">
            <input type="text" name="name" class="form-control" placeholder="username">
        </div>
    </div>

    <div class="form-group">
        <label class="sr-only col-sm-2 control-label">密码：</label>
        <div class="col-sm-10">
            <input type="password" name="password" class="form-control" placeholder="password">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-7 col-sm-10">
            <div class="checkbox">
                <label>
                    <input type="checkbox">记住密码
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <button type="submit" class="btn btn-primary">登录</button>
            </div>
        </div>
    </div>
</form>
</body>
</html>