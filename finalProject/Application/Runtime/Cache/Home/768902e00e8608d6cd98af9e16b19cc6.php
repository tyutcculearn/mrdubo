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
            <a href="#" class="list-group-item active" onclick="agency()">查看旅行社信息</a>
            <button type="button" class="list-group-item btn btn-primary" data-toggle="modal" data-target="#myModal1"
                    data-whatever="@mdo">添加旅行社信息
            </button>
            <button type="button" class="list-group-item btn btn-primary" data-toggle="modal" data-target="#myModal3"
                    data-whatever="@getbootstrap" onclick="agencyupd()">修改旅行社信息
            </button>
            <button type="button" class="list-group-item btn btn-primary" data-toggle="modal" data-target="#myModal2"
                    data-whatever="@fat" onclick="agencydel()">删除旅行社信息
            </button>
        </div>
    </div>

    <div class="content col-md-9">
        <div class="table-responsive">
            <table
                    class="table table-striped table-bordered  table-condensed table-hover">
                <thead>
                <tr>
                    <th>旅行社名</th>
                    <th>密码</th>
                    <th>联系电话</th>
                    <th>地址</th>
                    <th>删除旅行社</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($she)): $i = 0; $__LIST__ = $she;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($data["shename"]); ?></td>
                        <td><?php echo ($data["passwd"]); ?></td>
                        <td><?php echo ($data["sphone"]); ?></td>
                        <td><?php echo ($data["place"]); ?></td>
                        <td>
                            <form method="post" action="/airadmin/index.php/Home/Index/agencydel">
                                <input value="<?php echo ($data["sheid"]); ?>" name="sheid" type="hidden">
                                <button type="submit" class="btn btn-primary btn-xs btn-link" data-toggle="modal"
                                        data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 150, height: 100}"
                                        style="text-decoration: none;font-size: 15px;margin-left: -6px;margin-top: -5px;margin-bottom: -5px">
                                    删除旅行社
                                </button>
                            </form>
                        </td>
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
                <form method="post" action="/airadmin/index.php/Home/Index/agencyadd">
                    <div class="form-group" style="margin-left: 150px  ">
                        <label for="shename">旅行社名</label>
                        <input type="text" class="form-control" id="shename" name="shename" placeholder="旅行社名"
                               style="width: 60%">
                    </div>
                    <div class="form-group" style="margin-left: 150px">
                        <label for="passwd">密码</label>
                        <input type="text" class="form-control" id="passwd" name="passwd" placeholder="密码"
                               style="width: 60%">
                    </div>
                    <div class="form-group" style="margin-left: 150px">
                        <label for="sphone">联系电话</label>
                        <input type="text" class="form-control" id="sphone" name="sphone" placeholder="联系电话"
                               style="width: 60%" required>
                    </div>
                    <div class="form-group" style="margin-left: 150px">
                        <label for="place">地址</label>
                        <input type="text" class="form-control" id="place" name="place" placeholder="地址"
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