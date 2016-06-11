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
            <a href="#" class="list-group-item active" onclick="line()">查看航班信息</a>
            <button type="button" class="list-group-item btn btn-primary" data-toggle="modal" data-target="#myModal1"
                    data-whatever="@mdo">添加航班信息
            </button>
            <button type="button" class="list-group-item btn btn-primary" data-toggle="modal" data-target="#myModal3"
                    data-whatever="@getbootstrap" onclick="lineupd()">修改航班信息
            </button>
            <button type="button" class="list-group-item btn btn-primary" data-toggle="modal" data-target="#myModal2"
                    data-whatever="@fat" onclick="linedel()">删除航班信息
            </button>
        </div>
    </div>

    <div class="content col-md-9">
        <div class="table-responsive">
            <table
                    class="table table-striped table-bordered  table-condensed table-hover">
                <thead>
                <tr>
                    <th>航班号</th>
                    <th>出发地</th>
                    <th>目的地</th>
                    <th>出发时间</th>
                    <th>到达时间</th>
                    <th>价格</th>
                    <th>机型</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($flight)): $i = 0; $__LIST__ = $flight;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($data["flightid"]); ?></td>
                        <td><?php echo ($data["startad"]); ?></td>
                        <td><?php echo ($data["finad"]); ?></td>
                        <td><?php echo ($data["startdate"]); ?></td>
                        <td><?php echo ($data["findate"]); ?></td>
                        <td><?php echo ($data["price"]); ?></td>
                        <td><?php echo ($data["type"]); ?></td>
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
                    安排新的航班</h4>
            </div>
            <div class="modal-body"
                 style="height: 5px;background: margin: 0px;padding-top: 0px">
            </div>
            <div>
                <form method="post" action="/airadmin/index.php/Home/Index/flightadd">
                    <div class="form-group" style="margin-left: 150px  ">
                        <label for="flightId">航班号</label>
                        <input type="text" class="form-control" id="flightId" name="flightId" placeholder="你要添加的航班号"
                               style="width: 60%" required>
                    </div>
                    <div class="form-group" style="margin-left: 150px">
                        <label for="startAd">出发地</label>
                        <input type="text" class="form-control" id="startAd" name="startAd" placeholder="你要添加的出发地"
                               style="width: 60%" required>
                    </div>
                    <div class="form-group" style="margin-left: 150px">
                        <label for="finAd">目的地</label>
                        <input type="text" class="form-control" id="finAd" name="finAd" placeholder="你要添加的目的地"
                               style="width: 60%" required>
                    </div>
                    <div class="form-group" style="margin-left: 150px">
                        <label for="startDate">出发时间</label>
                        <input type="text" class="form-control" id="startDate" name="startDate" placeholder="出发时间"
                               style="width: 60%" required>
                    </div>
                    <div class="form-group" style="margin-left: 150px">
                        <label for="finDate">到达时间</label>
                        <input type="text" class="form-control" id="finDate" name="finDate" placeholder="到达时间"
                               style="width: 60%" required>
                    </div>
                    <div class="form-group" style="margin-left: 150px">
                        <label for="price">价格</label>
                        <input type="text" class="form-control"id="price" name="price" placeholder="价格"
                               style="width: 60%" required>
                    </div>
                    <div class="form-group" style="margin-left: 150px">
                        <label for="type">机型</label>
                        <input type="text" class="form-control" id="type" name="type" placeholder="机型"
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