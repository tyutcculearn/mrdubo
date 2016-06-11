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
            <a href="#" class="list-group-item active" onclick="courseInfo()">查看课程信息</a>
            <button type="button" class="list-group-item btn btn-primary" data-toggle="modal" data-target="#myModal1"
                    data-whatever="@mdo">添加课程信息
            </button>
            <button type="button" class="list-group-item btn btn-primary" data-toggle="modal" data-target="#myModal3"
                    data-whatever="@getbootstrap" onclick="courseUpd()">修改课程信息
            </button>
            <button type="button" class="list-group-item btn btn-primary" data-toggle="modal" data-target="#myModal2"
                    data-whatever="@fat" onclick="courseDel()">删除课程信息
            </button>
        </div>
    </div>

    <div class="content col-md-9">
        <div class="table-responsive">
            <table
                    class="table table-striped table-bordered  table-condensed table-hover">
                <thead>
                <tr>
                    <th>编号</th>
                    <th>名称</th>
                    <th>时间</th>
                    <th>图片</th>
                    <th>简介标题</th>
                    <th>简介内容</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($course)): $i = 0; $__LIST__ = $course;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($data["id"]); ?></td>
                        <td><?php echo ($data["name"]); ?></td>
                        <td><?php echo ($data["time"]); ?></td>
                        <td><?php echo ($data["img"]); ?></td>
                        <td><?php echo ($data["title"]); ?></td>
                        <td><?php echo ($data["message"]); ?></td>
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
                    添加新课程</h4>
            </div>
            <div class="modal-body"
                 style="height: 5px;background: margin: 0px;padding-top: 0px">
            </div>
            <div>
                <form method="post" action="/~dubo/finalProject/index.php/Home/Index/courseAdd">
                    <div class="form-group" style="margin-left: 150px">
                        <label for="name">课程名称</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="课程名称"
                               style="width: 60%" required>
                    </div>
                    <div class="form-group" style="margin-left: 150px">
                        <label for="time">课程时间</label>
                        <input type="text" class="form-control" id="time" name="time" placeholder="课程时间"
                               style="width: 60%" required>
                    </div>
                    <div class="form-group" style="margin-left: 150px">
                        <label for="img">图片</label>
                        <input type="text" class="form-control" id="img" name="img" placeholder="图片"
                               style="width: 60%" required>
                    </div>
                    <div class="form-group" style="margin-left: 150px">
                        <label for="title">简介标题</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="简介标题"
                               style="width: 60%" required>
                    </div>
                    <div class="form-group" style="margin-left: 150px">
                        <label for="message">简介内容</label>
                        <input type="text" class="form-control"id="message" name="message" placeholder="简介内容"
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