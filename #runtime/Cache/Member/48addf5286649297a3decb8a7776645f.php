<?php if (!defined('THINK_PATH')) exit();?>
<?php if(is_array($chapter)): $i = 0; $__LIST__ = $chapter;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["cp_id"]); ?>"><?php echo ($v["cp_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>