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
            <a href="#" class="list-group-item active" onclick="articleInfo()">查看文章信息</a>
            <button type="button" class="list-group-item btn btn-primary" data-toggle="modal" data-target="#myModal1"
                    data-whatever="@mdo">添加文章信息
            </button>
            <button type="button" class="list-group-item btn btn-primary" data-toggle="modal" data-target="#myModal3"
                    data-whatever="@getbootstrap" onclick="articleUpd()">修改文章信息
            </button>
            <button type="button" class="list-group-item btn btn-primary" data-toggle="modal" data-target="#myModal2"
                    data-whatever="@fat" onclick="articleDel()">删除文章信息
            </button>
        </div>
    </div>

    <div class="content col-md-9">
        <div class="table-responsive">
            <table
                    class="table table-striped table-bordered  table-condensed table-hover">
                <thead>
                <tr>
                    <th>文章编号</th>
                    <th>用户编号</th>
                    <th>课程编号</th>
                    <th>标题</th>
                    <th>内容</th>
                    <th>VIP</th>
                    <th>删除文章</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($article)): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($data["id"]); ?></td>
                        <td><?php echo ($data["user_id"]); ?></td>
                        <td><?php echo ($data["course_id"]); ?></td>
                        <td><?php echo ($data["title"]); ?></td>
                        <td><?php echo ($data["content"]); ?></td>
                        <td><?php echo ($data["vip"]); ?></td>
                        <td>
                            <form method="post" action="/finalProject/index.php/Home/Index/articleDel">
                                <input value="<?php echo ($data["id"]); ?>" name="id" type="hidden">
                                <button type="submit" class="btn btn-primary btn-xs btn-link" data-toggle="modal"
                                        data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 150, height: 100}"
                                        style="text-decoration: none;font-size: 15px;margin-left: -6px;margin-top: -5px;margin-bottom: -5px">
                                    删除文章
                                </button>
                            </form>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
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
                    添加新文章</h4>
            </div>
            <div class="modal-body"
                 style="height: 5px;background: margin: 0px;padding-top: 0px">
            </div>
            <div>
                <form method="post" action="/finalProject/index.php/Home/Index/articleAdd">
                    <div class="form-group" style="margin-left: 150px  ">
                        <label for="user_id">用户编号</label>
                        <input type="text" class="form-control" id="user_id" name="user_id" placeholder="用户编号"
                               style="width: 60%">
                    </div>
                    <div class="form-group" style="margin-left: 150px  ">
                        <label for="course_id">课程编号</label>
                        <input type="text" class="form-control" id="course_id" name="course_id" placeholder="课程编号"
                               style="width: 60%">
                    </div>
                    <div class="form-group" style="margin-left: 150px  ">
                        <label for="title">标题</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="标题"
                               style="width: 60%">
                    </div>
                    <div class="form-group" style="margin-left: 150px">
                        <label for="content">内容</label>
                        <input type="text" class="form-control" id="content" name="content" placeholder="内容"
                               style="width: 60%">
                    </div>
                    <div class="form-group" style="margin-left: 150px">
                        <label for="vip">VIP</label>
                        <input type="text" class="form-control" id="vip" name="vip" placeholder="VIP"
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