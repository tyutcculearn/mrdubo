<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div class="row">
    <div class="leftmenu col-md-offset-1 col-md-2">
        <div class="list-group">
            <a href="#" class="list-group-item active" onclick="userInfo()">查看用户信息</a>
            <button type="button" class="list-group-item btn btn-primary" data-toggle="modal" data-target="#myModal1"
                    data-whatever="@mdo">添加用户信息
            </button>
            <button type="button" class="list-group-item btn btn-primary" data-toggle="modal" data-target="#myModal3"
                    data-whatever="@getbootstrap" onclick="userUpd()">修改用户信息
            </button>
            <button type="button" class="list-group-item btn btn-primary" data-toggle="modal" data-target="#myModal2"
                    data-whatever="@fat" onclick="userDel()">删除用户信息
            </button>
        </div>
    </div>

    <div class="content col-md-9">
        <div class="table-responsive">
            <table
                    class="table table-striped table-bordered  table-condensed table-hover">
                <thead>
                <tr>
                    <th>用户名</th>
                    <th>密码</th>
                    <th>邮箱</th>
                    <th>VIP</th>
                    <th>修改用户</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($data["name"]); ?></td>
                        <td><?php echo ($data["password"]); ?></td>
                        <td><?php echo ($data["email"]); ?></td>
                        <td><?php echo ($data["vip"]); ?></td>
                        <td>
                            <div id="head" class="img-responsive" alt="Responsive image">

                                <a type="button" class="btn btn-primary btn-xs btn-link" data-toggle="modal"
                                   data-target="#<?php echo ($data["id"]); ?>"
                                   style="text-decoration: none;font-size: 15px;margin-left: -6px;margin-top: -5px;margin-bottom: -5px">
                                    修改用户
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="<?php echo ($data["id"]); ?>" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabe">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content" style="color: #3c3c3c">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                        aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel2" style="margin-left: 250px">
                                                    修改用户</h4>
                                            </div>
                                            <div class="modal-body"
                                                 style="height: 5px;background: margin: 0px;padding-top: 0px">
                                            </div>
                                            <div>
                                                <form method="post" action="/~dubo/finalProject/index.php/Home/Index/userUpd">
                                                    <div class="form-group" style="margin-left: 150px; display: none">
                                                        <label for="id">编号</label>
                                                        <input type="text" class="form-control" id="id" name="id" value="<?php echo ($data["id"]); ?>"
                                                               style="width: 60%">
                                                    </div>
                                                    <div class="form-group" style="margin-left: 150px  ">
                                                        <label for="name">用户名</label>
                                                        <input type="text" class="form-control" id="name" name="name" value="<?php echo ($data["name"]); ?>"
                                                               style="width: 60%">
                                                    </div>
                                                    <div class="form-group" style="margin-left: 150px  ">
                                                        <label for="password-upd">密码</label>
                                                        <input type="text" class="form-control" id="password-upd" name="password" value="<?php echo ($data["password"]); ?>"
                                                               style="width: 60%">
                                                    </div>
                                                    <div class="form-group" style="margin-left: 150px">
                                                        <label for="email-upd">email</label>
                                                        <input type="text" class="form-control" id="email-upd" name="email" value="<?php echo ($data["email"]); ?>"
                                                               style="width: 60%">
                                                    </div>
                                                    <div class="form-group" style="margin-left: 150px">
                                                        <label for="vip-upd">vip</label>
                                                        <input type="text" class="form-control" id="vip-upd" name="vip" value="<?php echo ($data["vip"]); ?>"
                                                               style="width: 60%">
                                                    </div>
                                                    <div style="position: absolute;left: 350px;top: 100px">

                                                    </div>
                                                    <div class="modal-footer">
                                                        <div style="position: absolute;left: 50px;padding-left: 10px">

                                                        </div>
                                                        <button type="submit"  class="am-btn am-btn-secondary"
                                                                style="width: 100px;">提交
                                                        </button>
                                                        <button type="button" class="am-btn am-btn-danger"  data-dismiss="modal"
                                                                style="width: 100px">取消
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="color: #3c3c3c">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel1" style="margin-left: 250px">
                    添加新的用户</h4>
            </div>
            <div class="modal-body"
                 style="height: 5px;background: margin: 0px;padding-top: 0px">
            </div>
            <div>
                <form method="post" action="/~dubo/finalProject/index.php/Home/Index/userAdd">
                    <div class="form-group" style="margin-left: 150px  ">
                        <label for="userName">用户名</label>
                        <input type="text" class="form-control" id="userName" name="username" placeholder="用户名"
                               style="width: 60%">
                    </div>
                    <div class="form-group" style="margin-left: 150px">
                        <label for="password">密码</label>
                        <input type="text" class="form-control" id="password" name="password" placeholder="密码"
                               style="width: 60%">
                    </div>
                    <div class="form-group" style="margin-left: 150px">
                        <label for="email">email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="email"
                               style="width: 60%" required>
                    </div>
                    <div class="form-group" style="margin-left: 150px">
                        <label for="vip">VIP</label>
                        <input type="text" class="form-control" id="vip" name="vip" placeholder="vip"
                               style="width: 60%" required>
                    </div>

                    <div style="position: absolute;left: 350px;top: 100px">

                    </div>
                    <div class="modal-footer">
                        <div style="position: absolute;left: 50px;padding-left: 10px">

                        </div>
                        <button type="submit"  class="am-btn am-btn-secondary"
                                style="width: 100px;">提交
                        </button>
                        <button type="button" class="am-btn am-btn-danger"  data-dismiss="modal"
                                style="width: 100px">取消
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>