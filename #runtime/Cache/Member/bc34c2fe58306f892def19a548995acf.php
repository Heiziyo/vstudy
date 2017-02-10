<?php if (!defined('THINK_PATH')) exit();?>
<style>
    th{
        background-color:lightskyblue;
    }
    th,td{
        padding-left:40px;
        padding-right:40px;
        text-align:center;
    }
    td{
        font-size:14px;
    }
</style>
<div class="row">

    <table border="1px solid #000" style="border-collapse:collapse;">
        <tr>
            <th>
                编号
            </th>
            <th>
                课程名称
            </th>
            <th>
                课程时长
            </th>
            <th>
                课程难易度
            </th>
        </tr>

        <?php if(is_array($course)): $i = 0; $__LIST__ = $course;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mc): $mod = ($i % 2 );++$i;?><tr>
                <td>
                    <?php echo ($mc["pc_id"]); ?>
                </td>
                <td>
                    <?php echo ($mc["course_name"]); ?>
                </td>
                <td>
                    <?php echo ($mc["course_time"]); ?>
                </td>
                <td>
                    <?php echo ($mc["course_difficulty"]); ?>
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>

    </table>

</div>