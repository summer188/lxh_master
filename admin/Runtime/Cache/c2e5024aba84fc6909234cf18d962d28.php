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

</script><title><?php echo (L("website_manage")); ?></title></head><body><div id="ajax_loading">提交请求中，请稍候...</div><?php if($show_header != false): if(($sub_menu != '') OR ($big_menu != '')): ?><div class="subnav"><div class="content-menu ib-a blue line-x"><?php if(!empty($big_menu)): ?><a class="add fb" href="<?php echo ($big_menu["0"]); ?>"><em><?php echo ($big_menu["1"]); ?></em></a>　<?php endif; ?></div></div><?php endif; endif; ?><!--DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>无标题文档</title><link href="css/style.css" rel="stylesheet" type="text/css" /><script language="JavaScript" src="js/jquery.js"></script><script type="text/javascript">
$(function(){	
	//顶部导航切换
	$(".nav li a").click(function(){
		$(".nav li a.selected").removeClass("selected")
		$(this).addClass("selected");
	})	
})	
</script></head><body style="background:url(images/topbg.gif) repeat-x;"><div class="topleft"><a href="main.html" target="_parent"><img src="images/logo.png" title="系统首页" /></a></div><ul class="nav"><li><a href="default.html" target="rightFrame" class="selected"><img src="images/icon01.png" title="工作台" /><h2>工作台</h2></a></li><li><a href="imgtable.html" target="rightFrame"><img src="images/icon02.png" title="模型管理" /><h2>模型管理</h2></a></li><li><a href="imglist.html"  target="rightFrame"><img src="images/icon03.png" title="模块设计" /><h2>模块设计</h2></a></li><li><a href="tools.html"  target="rightFrame"><img src="images/icon04.png" title="常用工具" /><h2>常用工具</h2></a></li><li><a href="computer.html" target="rightFrame"><img src="images/icon05.png" title="文件管理" /><h2>文件管理</h2></a></li><li><a href="tab.html"  target="rightFrame"><img src="images/icon06.png" title="系统设置" /><h2>系统设置</h2></a></li></ul><div class="topright"><ul><li><span><img src="images/help.png" title="帮助"  class="helpimg"/></span><a href="#">帮助</a></li><li><a href="#">关于</a></li><li><a href="login.html" target="_parent">退出</a></li></ul><div class="user"><span>老师，您好！ </span><i>消息</i><b>5</b></div></div></body></html--><div class="pad_10"><form action="<?php echo u('Group/add');?>" method="post" name="myform" id="myform"><table width="100%" cellpadding="2" cellspacing="1" class="table_form"><tr><th width="80"><?php echo L('group_title');?> :</th><td><input type="text" name="title" id="title" class="input-text"></td></tr><tr><th><?php echo L('group_name');?> :</th><td><input type="text" name="name" id="name" class="input-text"></td></tr><tr><th><?php echo L('sort');?>  :</th><td><input type="text" name="sort" id="sort" class="input-text"></td></tr><tr><th><?php echo L('state');?> :</th><td><input type="radio" name="status" class="radio_style" value="1" checked="checked" > &nbsp;有效&nbsp;&nbsp;&nbsp;
        <input type="radio" name="status" class="radio_style" value="0"> &nbsp;禁用
      </td></tr></table><input type="submit" name="dosubmit" id="dosubmit" class="dialog" value=" "></form><script type="text/javascript">
	$(function(){
		$.formValidator.initConfig({
			formid:"myform",
			autotip:true,
			onerror:function(msg,obj){
				window.top.art.dialog({
					content:msg,
					lock:true,
					width:'200',
					height:'50'},
					 function()
					 {
					 	this.close();
						$(obj).focus();
					 })
		}});		
		
		$("#title").formValidator({
			onshow:"不能为空",onfocus:"不能为空"
		}).inputValidator({
			min:1,onerror:"请填写菜单分类名称"
		}).ajaxValidator({
			type : "get",url : "",
			data :"m=Group&a=ajaxCheckTitle",
			datatype : "html",
			async:'false',success : function(data)
			{if( data == "1" ){return true;}else{return false;}},
			buttons: $("#dosubmit"),
			onerror : "分类名称已经被占用",onwait : "正在检测..."}
		);;	
	
	})
</script></div></body></html>