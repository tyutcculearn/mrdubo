<?php if (!defined('THINK_PATH')) exit();?><div class="row">
    <div class="leftmenu col-md-3">
        <div class="list-group">
            <a href="#" class="list-group-item active">查看航线信息</a>
            <button type="button" class="list-group-item btn btn-primary" data-toggle="modal" data-target="#myModal1"
                    data-whatever="@mdo">添加航线信息
            </button>
            <button type="button" class="list-group-item btn btn-primary" data-toggle="modal" data-target="#myModal2"
                    data-whatever="@fat">删除航线信息
            </button>
            <button type="button" class="list-group-item btn btn-primary" data-toggle="modal" data-target="#myModal3"
                    data-whatever="@getbootstrap">修改航线信息
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
                <?php if(is_array($flight)): $i = 0; $__LIST__ = $flight;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($data["flightid"]); ?></td>
                    <td><?php echo ($data["startad"]); ?></td>
                    <td><?php echo ($data["finad"]); ?></td>
                    <td><?php echo ($data["startdate"]); ?></td>
                    <td><?php echo ($data["findate"]); ?></td>
                    <td><?php echo ($data["price"]); ?></td>
                    <td><?php echo ($data["type"]); ?></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
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