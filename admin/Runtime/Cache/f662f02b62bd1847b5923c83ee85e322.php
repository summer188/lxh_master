<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=7" /><link href="__ROOT__/statics/admin/css/style.css" rel="stylesheet" type="text/css"/><link href="__ROOT__/statics/css/dialog.css" rel="stylesheet" type="text/css" /><script language="javascript" type="text/javascript" src="__ROOT__/statics/js/jquery/jquery-1.4.2.min.js"></script><script language="javascript" type="text/javascript" src="__ROOT__/statics/js/jquery/plugins/formvalidator.js"></script><script language="javascript" type="text/javascript" src="__ROOT__/statics/js/jquery/plugins/formvalidatorregex.js"></script><script language="javascript" type="text/javascript" src="__ROOT__/statics/admin/js/admin_common.js"></script><script language="javascript" type="text/javascript" src="__ROOT__/statics/js/dialog.js"></script><script language="javascript" type="text/javascript" src="__ROOT__/statics/js/iColorPicker.js"></script><script language="javascript">
var URL = '__URL__';
var ROOT_PATH = '__ROOT__';
var APP	 =	 '__APP__';
var lang_please_select = "<?php echo (L("please_select")); ?>";
var def=<?php echo ($def); ?>;
$(function($){
	$("#ajax_loading").ajaxStart(function(){
		$(this).show();
	}).ajaxSuccess(function(){
		$(this).hide();
	});
});

</script><title><?php echo (L("website_manage")); ?></title></head><body><div id="ajax_loading">提交请求中，请稍候...</div><?php if($show_header != false): if(($sub_menu != '') OR ($big_menu != '')): ?><div class="subnav"><div class="content-menu ib-a blue line-x"><?php if(!empty($big_menu)): ?><a class="add fb" href="<?php echo ($big_menu["0"]); ?>"><em><?php echo ($big_menu["1"]); ?></em></a>　<?php endif; ?></div></div><?php endif; endif; ?><div class="pad_10"><form action="<?php echo u('User/edit');?>" method="post" name="myform" id="myform" enctype="multipart/form-data" ><input type="hidden" name="id" value="<?php echo ($info["id"]); ?>" /><table width="100%" cellpadding="2" cellspacing="1" class="table_form"><tr><th width="60"><?php echo L('name');?>:</th><td><input type="text" name="name" id="name" size="25" value="<?php echo ($info["name"]); ?>" ></td></tr><tr><th width="60">会员密码:</th><td><input class="input-text" type="password" name="password" id="password" size="25" value="" ><span style="color:red;">*密码为空表示不修改密码，不为空则表示要修改密码，</span></td></tr><!--tr><th width="60"><?php echo L('integral');?> :</th><td><input type="text" name="integral" id="integral" size="14" value="<?php echo ($info["integral"]); ?>" ></td></tr--><tr><th width="60"><?php echo L('email');?> :</th><td><input type="text" name="email" id="email" size="25" value="<?php echo ($info["email"]); ?>" ></td></tr><tr><th><?php echo L('sex');?> :</th><td><input type="radio" name="sex" value="0" <?php if($info["sex"] == '0'): ?>checked<?php endif; ?>>&nbsp;男&nbsp;&nbsp;&nbsp; 
					<input type="radio" name="sex" value="1" <?php if($info["sex"] == '1'): ?>checked<?php endif; ?>>&nbsp;女&nbsp;&nbsp;&nbsp; 
					<input type="radio" name="sex" value="2" <?php if($info["sex"] == '2'): ?>checked<?php endif; ?>>&nbsp;未知					
				</td></tr><tr><th><?php echo L('status');?> :</th><td><input type="radio" name="status" value="1" 
                    <?php if($info["status"] == 1): ?>checked<?php endif; ?>
                    >&nbsp;已审核&nbsp;&nbsp;&nbsp; <input type="radio" name="status" value="0" 
                    <?php if($info["status"] == 0): ?>checked<?php endif; ?>
                    >&nbsp;未审核</td></tr></table><input type="submit" name="dosubmit" id="dosubmit" class="dialog" value=""></form><script type="text/javascript">
	$(function(){
		$.formValidator.initConfig({formid:"myform",autotip:true,onerror:function(msg,obj){window.top.art.dialog({content:msg,lock:true,width:'250',height:'50'}, function(){this.close();$(obj).focus();})}});
		$("#name").formValidator({onshow:"不能为空",onfocus:"不能为空"}).inputValidator({min:1,onerror:"请填写链接名称"});
		$("#url").formValidator({onshow:"不能为空",onfocus:"http开头"}).inputValidator({min:1,onerror:"请填写链接地址"});
	})
</script></div></body></html>