<?php if (!defined('THINK_PATH')) exit(); if(is_array($flight)): $i = 0; $__LIST__ = $flight;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
        <td><?php echo ($data["flightid"]); ?></td>
        <td><?php echo ($data["startad"]); ?></td>
        <td><?php echo ($data["finad"]); ?></td>
        <td><?php echo ($data["startdate"]); ?></td>
        <td><?php echo ($data["findate"]); ?></td>
        <td><?php echo ($data["price"]); ?></td>
        <td><?php echo ($data["type"]); ?></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>