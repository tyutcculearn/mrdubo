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
            <a href="#" class="list-group-item active" onclick="book()">查看预订信息</a>
            <button type="button" class="list-group-item btn btn-primary" data-toggle="modal" data-target="#myModal1"
                    data-whatever="@mdo">添加预订信息
            </button>
            <button type="button" class="list-group-item btn btn-primary" data-toggle="modal" data-target="#myModal3"
                    data-whatever="@getbootstrap" onclick="bookupd()">修改预订信息
            </button>
            <button type="button" class="list-group-item btn btn-primary" data-toggle="modal" data-target="#myModal2"
                    data-whatever="@fat" onclick="bookdel()">删除预订信息
            </button>
        </div>
    </div>

    <div class="content col-md-9">
        <div class="table-responsive">
            <table
                    class="table table-striped table-bordered  table-condensed table-hover">
                <thead>
                <tr>
                    <th>证件号</th>
                    <th>航班号</th>
                    <th>日期</th>
                    <th>旅行社</th>
                    <th>修改预订</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($book)): $i = 0; $__LIST__ = $book;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($data["id"]); ?></td>
                        <td><?php echo ($data["flightid"]); ?></td>
                        <td><?php echo ($data["date"]); ?></td>
                        <td><?php echo ($data["shename"]); ?></td>
                        <td>
                            <div id="head" class="img-responsive" alt="Responsive image">

                                <a type="button" class="btn btn-primary btn-xs btn-link" data-toggle="modal"
                                   data-target="#<?php echo ($data["bookid"]); ?>"
                                   style="text-decoration: none;font-size: 15px;margin-left: -6px;margin-top: -5px;margin-bottom: -5px">
                                    修改预订
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="<?php echo ($data["bookid"]); ?>" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabe">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content" style="color: #3c3c3c">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                        aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel2" style="margin-left: 250px">
                                                    修改预订</h4>
                                            </div>
                                            <div class="modal-body"
                                                 style="height: 5px;background: margin: 0px;padding-top: 0px">
                                            </div>
                                            <div>
                                                <form method="post" action="/airadmin/index.php/Home/Index/bookupd">
                                                    <div class="form-group" style="margin-left: 150px; display: none">
                                                        <label for="bookid">编号</label>
                                                        <input type="text" class="form-control" id="bookid" name="bookid" value="<?php echo ($data["bookid"]); ?>"
                                                               style="width: 60%">
                                                    </div>
                                                    <div class="form-group" style="margin-left: 150px">
                                                        <label for="id">证件号</label>
                                                        <input type="text" class="form-control" id="id" name="id" value="<?php echo ($data["id"]); ?>"
                                                               style="width: 60%">
                                                    </div>
                                                    <div class="form-group" style="margin-left: 150px  ">
                                                        <label for="flightId">航班号</label>
                                                        <input type="text" class="form-control" id="flightId" name="flightId" value="<?php echo ($data["flightid"]); ?>"
                                                               style="width: 60%">
                                                    </div>
                                                    <div class="form-group" style="margin-left: 150px  ">
                                                        <label for="date">日期</label>
                                                        <input type="text" class="form-control" id="date" name="date" value="<?php echo ($data["date"]); ?>"
                                                               style="width: 60%">
                                                    </div>
                                                    <div class="form-group" style="margin-left: 150px">
                                                        <label for="shename">旅行社</label>
                                                        <input type="text" class="form-control" id="shename" name="shename" value="<?php echo ($data["shename"]); ?>"
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
                            </div>
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
                    添加新的预订</h4>
            </div>
            <div class="modal-body"
                 style="height: 5px;background: margin: 0px;padding-top: 0px">
            </div>
            <div>
                <form method="post" action="/airadmin/index.php/Home/Index/bookadd">
                    <div class="form-group" style="margin-left: 150px">
                        <label for="id">证件号</label>
                        <input type="text" class="form-control" id="id" name="id" placeholder="证件号"
                               style="width: 60%" required>
                    </div>
                    <div class="form-group" style="margin-left: 150px  ">
                        <label for="flightId">航班号</label>
                        <input type="text" class="form-control" id="flightId" name="flightId" placeholder="你要添加的航班号"
                               style="width: 60%" required>
                    </div>
                    <div class="form-group" style="margin-left: 150px">
                        <label for="date">日期</label>
                        <input type="text" class="form-control" id="date" name="date" placeholder="日期"
                               style="width: 60%" required>
                    </div>
                    <div class="form-group" style="margin-left: 150px  ">
                        <label for="shename">旅行社名</label>
                        <input type="text" class="form-control" id="shename" name="shename" placeholder="旅行社名"
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