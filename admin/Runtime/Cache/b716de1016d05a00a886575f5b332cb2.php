<?php if (!defined('THINK_PATH')) exit();?><DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=7" /><link href="__ROOT__/statics/admin/css/style.css" rel="stylesheet" type="text/css"/><link href="__ROOT__/statics/css/dialog.css" rel="stylesheet" type="text/css" /><script language="javascript" type="text/javascript" src="__ROOT__/statics/js/jquery/jquery-1.4.2.min.js"></script><script language="javascript" type="text/javascript" src="__ROOT__/statics/js/jquery/plugins/formvalidator.js"></script><script language="javascript" type="text/javascript" src="__ROOT__/statics/js/jquery/plugins/formvalidatorregex.js"></script><script language="javascript" type="text/javascript" src="__ROOT__/statics/admin/js/admin_common.js"></script><script language="javascript" type="text/javascript" src="__ROOT__/statics/js/dialog.js"></script><script language="javascript" type="text/javascript" src="__ROOT__/statics/js/iColorPicker.js"></script><script language="javascript">
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

</script><title><?php echo (L("website_manage")); ?></title></head><body><div id="ajax_loading">提交请求中，请稍候...</div><?php if($show_header != false): if(($sub_menu != '') OR ($big_menu != '')): ?><div class="subnav"><div class="content-menu ib-a blue line-x"><?php if(!empty($big_menu)): ?><a class="add fb" href="<?php echo ($big_menu["0"]); ?>"><em><?php echo ($big_menu["1"]); ?></em></a>　<?php endif; ?></div></div><?php endif; endif; ?><style type="text/css"> table {font-size: 12px} </style><div class="pad_10"><form action="<?php echo u('Admin/add');?>" method="post" name="myform" id="myform"><table width="100%" cellpadding="2" cellspacing="1" class="table_form"><tr><th width="80"><?php echo L('user_name');?> :</th><td><input type="text" name="user_name" id="user_name" class="input-text"></td></tr><tr><th><?php echo L('password');?> :</th><td><input type="password" name="password" id="password" class="input-text"></td></tr><tr><th><?php echo L('repassword');?> :</th><td><input type="password" name="repassword" id="repassword" class="input-text"></td></tr><tr><th><?php echo L('role_id');?> :</th><td><select name="role_id"><?php if(is_array($role_list)): $i = 0; $__LIST__ = $role_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><option value="<?php echo ($val["id"]); ?>"><?php echo ($val["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select></td></tr><!--tr><th><?php echo L('user_school');?> :</th><td><input type="text" name="user_school" id="user_school" class="input-text"></td></tr><tr><th><?php echo L('user_subject');?> :</th><td><input type="text" name="user_subject" id="user_subject" class="input-text"></td></tr--><tr><th><?php echo L('status');?> :</th><td><input type="radio" name="status" class="radio_style" value="1" checked="checked" > &nbsp;有效&nbsp;&nbsp;&nbsp;
        <input type="radio" name="status" class="radio_style" value="0"> &nbsp;禁用
      </td></tr></table><input type="submit" name="dosubmit" id="dosubmit" class="dialog" value=" "></form><script type="text/javascript">
	$(function(){
		$.formValidator.initConfig({formid:"myform",autotip:true,onerror:function(msg,obj){window.top.art.dialog({content:msg,lock:true,width:'200',height:'50'}, function(){this.close();$(obj).focus();})}});
		
		$("#user_name").formValidator({onshow:"填写帐号昵称",onfocus:"填写帐号昵称"}).inputValidator({min:1,onerror:"请填写帐号昵称"}).ajaxValidator({type : "get",url : "",data :"m=Admin&a=ajaxCheckUsername",datatype : "html",async:'false',success : function(data){	if( data == "1" ){return true;}else{return false;}},buttons: $("#dosubmit"),onerror : "帐号已经被占用",onwait : "正在检测..."});
		
		$("#password").formValidator({onshow:"填写密码",onfocus:"填写6位以上密码"}).inputValidator({min:6,onerror:"请填写6位以上密码"});
		
		$("#repassword").formValidator({onshow:"确认密码",onfocus:"确认密码",oncorrect:"填写正确"}).compareValidator({desid:"password",operateor:"=",onerror:"两次输入密码不一致"});
	})
</script></div></body></html>