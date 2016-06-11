<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div class="mybody container" style="margin-top: 20px; margin-bottom: 20px">
    <div class="row">
    <div class="table-responsive">
        <table class="table">
            <thead>
            <th>姓名</th>
            <th>性别</th>
            <th>部门</th>
            <th>职务</th>
            </thead>
            <tbody>
            <?php if(is_array($admin)): $i = 0; $__LIST__ = $admin;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($data["name"]); ?></td>
                    <td><?php echo ($data["sex"]); ?></td>
                    <td><?php echo ($data["position"]); ?></td>
                    <td><?php echo ($data["department"]); ?></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>
    <nav class="pull-right" style="margin-top: 10px; margin-bottom: 10px">
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
    <div class="myfooter">
        <p>Copyright © 2015-2018 中国皇冠航空 All Rights Reserved.</p>
    </div>
</div>
</body>
</html>