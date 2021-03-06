<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div class="row">
    <div class="leftmenu col-md-3">
        <div class="list-group">
            <a href="#" class="list-group-item active" onclick="user()">查看用户信息</a>
            <button type="button" class="list-group-item btn btn-primary" data-toggle="modal" data-target="#myModal1"
                    data-whatever="@mdo">添加用户信息
            </button>
            <button type="button" class="list-group-item btn btn-primary" data-toggle="modal" data-target="#myModal3"
                    data-whatever="@getbootstrap" onclick="userupd()">修改用户信息
            </button>
            <button type="button" class="list-group-item btn btn-primary" data-toggle="modal" data-target="#myModal2"
                    data-whatever="@fat" onclick="userdel()">删除用户信息
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
                    <th>航班号</th>
                    <th>出发地</th>
                    <th>目的地</th>
                    <th>出发时间</th>
                    <th>到达时间</th>
                    <th>日期</th>
                    <th>价格</th>
                    <th>机型</th>
                    <th>旅行社</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($book_view)): $i = 0; $__LIST__ = $book_view;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($data["username"]); ?></td>
                        <td><?php echo ($data["flightid"]); ?></td>
                        <td><?php echo ($data["startad"]); ?></td>
                        <td><?php echo ($data["finad"]); ?></td>
                        <td><?php echo ($data["startdate"]); ?></td>
                        <td><?php echo ($data["findate"]); ?></td>
                        <td><?php echo ($data["date"]); ?></td>
                        <td><?php echo ($data["price"]); ?></td>
                        <td><?php echo ($data["type"]); ?></td>
                        <td><?php echo ($data["shename"]); ?></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>
    </div>


    <nav class="pull-right">
        <ul class="pagination">
            <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
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
                <form method="post" action="/airadmin/index.php/Home/Index/flightadd">
                    <div class="form-group" style="margin-left: 150px  ">
                        <label for="flightId">用户名</label>
                        <input type="text" class="form-control" id="flightId" name="flightId" placeholder="用户名"
                               style="width: 60%">
                    </div>
                    <div class="form-group" style="margin-left: 150px">
                        <label for="startAd">密码</label>
                        <input type="text" class="form-control" id="startAd" name="startAd" placeholder="密码"
                               style="width: 60%">
                    </div>
                    <div class="form-group" style="margin-left: 150px">
                        <label for="finAd">证件号</label>
                        <input type="text" class="form-control" id="finAd" name="finAd" placeholder="证件号"
                               style="width: 60%" required>
                    </div>
                    <div class="form-group" style="margin-left: 150px">
                        <label for="startDate">email</label>
                        <input type="email" class="form-control" id="startDate" name="startDate" placeholder="email"
                               style="width: 60%" required>
                    </div>
                    <div class="form-group" style="margin-left: 150px">
                        <label for="finDate">电话号码</label>
                        <input type="text" class="form-control" id="finDate" name="finDate" placeholder="电话号码"
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
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <button type="button" class="am-btn am-btn-danger"  data-dismiss="modal"
                                style="width: 100px">取消
                        </button>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>