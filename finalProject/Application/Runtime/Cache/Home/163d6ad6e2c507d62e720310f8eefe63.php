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
            <a href="#" class="list-group-item active" onclick="responseInfo()">查看回复信息</a>
            <button type="button" class="list-group-item btn btn-primary" data-toggle="modal" data-target="#myModal1"
                    data-whatever="@mdo">添加回复信息
            </button>
            <button type="button" class="list-group-item btn btn-primary" data-toggle="modal" data-target="#myModal3"
                    data-whatever="@getbootstrap" onclick="responseUpd()">修改回复信息
            </button>
            <button type="button" class="list-group-item btn btn-primary" data-toggle="modal" data-target="#myModal2"
                    data-whatever="@fat" onclick="responseDel()">删除回复信息
            </button>
        </div>
    </div>

    <div class="content col-md-9">
        <div class="table-responsive">
            <table
                    class="table table-striped table-bordered  table-condensed table-hover">
                <thead>
                <tr>
                    <th>回复编号</th>
                    <th>文章编号</th>
                    <th>用户编号</th>
                    <th>内容</th>
                    <th>时间</th>
                    <th>修改回复</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($response)): $i = 0; $__LIST__ = $response;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($data["id"]); ?></td>
                        <td><?php echo ($data["article_id"]); ?></td>
                        <td><?php echo ($data["user_id"]); ?></td>
                        <td><?php echo ($data["message"]); ?></td>
                        <td><?php echo ($data["timestamp"]); ?></td>
                        <td>
                            <div id="head" class="img-responsive" alt="Responsive image">

                                <a type="button" class="btn btn-primary btn-xs btn-link" data-toggle="modal"
                                   data-target="#<?php echo ($data["id"]); ?>"
                                   style="text-decoration: none;font-size: 15px;margin-left: -6px;margin-top: -5px;margin-bottom: -5px">
                                    修改回复
                                </a>
                                <div class="modal fade" id="<?php echo ($data["id"]); ?>" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabe">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content" style="color: #3c3c3c">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                        aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel2" style="margin-left: 250px">
                                                    修改回复</h4>
                                            </div>
                                            <div class="modal-body"
                                                 style="height: 5px;background: margin: 0px;padding-top: 0px">
                                            </div>
                                            <div>
                                                <form method="post" action="/finalProject/index.php/Home/Index/responseUpd">
                                                    <div class="form-group" style="margin-left: 150px; display: none">
                                                        <label for="id">编号</label>
                                                        <input type="text" class="form-control" id="id" name="id" value="<?php echo ($data["id"]); ?>"
                                                               style="width: 60%">
                                                    </div>
                                                    <div class="form-group" style="margin-left: 150px">
                                                        <label for="user_id_upd">文章编号</label>
                                                        <input type="text" class="form-control" id="article_id_upd" name="article_id" value="<?php echo ($data["article_id"]); ?>"
                                                               style="width: 60%">
                                                    </div>
                                                    <div class="form-group" style="margin-left: 150px">
                                                        <label for="user_id_upd">用户编号</label>
                                                        <input type="text" class="form-control" id="user_id_upd" name="user_id" value="<?php echo ($data["user_id"]); ?>"
                                                               style="width: 60%">
                                                    </div>
                                                    <div class="form-group" style="margin-left: 150px  ">
                                                        <label for="message_upd">内容</label>
                                                        <input type="text" class="form-control" id="message_upd" name="message" value="<?php echo ($data["message"]); ?>"
                                                               style="width: 60%">
                                                    </div>
                                                    <div class="form-group" style="margin-left: 150px  ">
                                                        <label for="timestamp_upd">时间</label>
                                                        <input type="text" class="form-control" id="timestamp_upd" name="timestamp" value="<?php echo ($data["timestamp"]); ?>"
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
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="color: #3c3c3c">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel1" style="margin-left: 250px">
                        添加新回复</h4>
                </div>
                <div class="modal-body"
                     style="height: 5px;background: margin: 0px;padding-top: 0px">
                </div>
                <div>
                    <form method="post" action="/finalProject/index.php/Home/Index/responseAdd">
                        <div class="form-group" style="margin-left: 150px">
                            <label for="article_id">文章编号</label>
                            <input type="text" class="form-control" id="article_id" name="article_id" placeholder="文章编号"
                                   style="width: 60%" required>
                        </div>
                        <div class="form-group" style="margin-left: 150px  ">
                            <label for="user_id">用户编号</label>
                            <input type="text" class="form-control" id="user_id" name="user_id" placeholder="用户编号"
                                   style="width: 60%" required>
                        </div>
                        <div class="form-group" style="margin-left: 150px">
                            <label for="message">内容</label>
                            <input type="text" class="form-control" id="message" name="message" placeholder="内容"
                                   style="width: 60%" required>
                        </div>
                        <div class="form-group" style="margin-left: 150px  ">
                            <label for="timestamp">时间</label>
                            <input type="text" class="form-control" id="timestamp" name="timestamp" placeholder="时间"
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
</body>
</html>