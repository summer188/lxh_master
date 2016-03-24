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

</script><title><?php echo (L("website_manage")); ?></title></head><body><div id="ajax_loading">提交请求中，请稍候...</div><?php if($show_header != false): if(($sub_menu != '') OR ($big_menu != '')): ?><div class="subnav"><div class="content-menu ib-a blue line-x"><?php if(!empty($big_menu)): ?><a class="add fb" href="<?php echo ($big_menu["0"]); ?>"><em><?php echo ($big_menu["1"]); ?></em></a>　<?php endif; ?></div></div><?php endif; endif; ?><style type="text/css"> table {font-size: 12px} </style><div class="pad-lr-10"><!--div style="padding:10px; overflow:hidden;"></div><div class="data_top"><form id="addform" action="do.php?action=import" method="post" enctype="multipart/form-data"><table width=100%><tr><td align="left"><a class="cat" href="javascript:add()">添加习题</a></td><td align="right">请选择要导入的XLS文件：<input type="file" name="file"><input type="submit" class="button" value="导入XLS"><input type="button" class="button" id="exportCSV" value="导出XLS" onClick="window.location.href='do.php?action=export'"></td></tr></table></form></div--><div class="data_top"><a class="cat" href="javascript:add()">添加习题</a></div><form name="searchform" action="" method="get" ><table width="100%" cellspacing="0" class="search-form"><tbody><tr><td><div class="explain-col"><!--&nbsp;学科 :
		                <tpl:select options="cate_list" selected="cate_id" name='cate_id' /-->
						&nbsp;关键字 :
		                <input name="keyword" type="text" class="input-text" size="25" value="<?php echo ($keyword); ?>" /><input type="hidden" name="m" value="SellerList" /><input type="submit" name="search" class="button" value="搜索" /></div></td></tr></tbody></table></form><table width="100%" cellspacing="0" class="search-form"><tbody><tr><td><div class="explain-col">
						&nbsp;知识点目录树 :
					</div><div class="explain-col"><table width="80%" cellspacing="0" class="search-form" align="center"><tr><td width="10%"><!--form name="searchform" action="" method="get" ><input name="keyword" type="hidden" value="0205001" /--><input type="hidden" name="m" value="SellerList" /><input onclick="Show_Hidden(tr1)" type="submit" name="search" class="button" value="基本概念和原理" /><!--/form--></td><td width="10%"><form name="searchform" action="" method="get" ><input name="keyword" type="hidden" value="0205002" /><input type="hidden" name="m" value="SellerList" /><input type="submit" name="search" class="button" value="身边的化学物质" /></form></td><td width="10%"><form name="searchform" action="" method="get" ><input name="keyword" type="hidden" value="0205003" /><input type="hidden" name="m" value="SellerList" /><input type="submit" name="search" class="button" value="化学与社会发展" /></form></td><td width="10%"><form name="searchform" action="" method="get" ><input name="keyword" type="hidden" value="0205004" /><input type="hidden" name="m" value="SellerList" /><input type="submit" name="search" class="button" value="化学基本实验与科学探究" /></form></td><td width="10%"><form name="searchform" action="" method="get" ><input name="keyword" type="hidden" value="0205005" /><input type="hidden" name="m" value="SellerList" /><input type="submit" name="search" class="button" value="化学基本实验与科学探究" /></form></td><td width="10%"><form name="searchform" action="" method="get" ><input name="keyword" type="hidden" value="0205006" /><input type="hidden" name="m" value="SellerList" /><input type="submit" name="search" class="button" value="中考一轮复习" /></form></td><td width="10%"><form name="searchform" action="" method="get" ><input name="keyword" type="hidden" value="0205007" /><input type="hidden" name="m" value="SellerList" /><input type="submit" name="search" class="button" value="中考二轮复习" /></form></td><td width="10%"><form name="searchform" action="" method="get" ><input name="keyword" type="hidden" value="0205008" /><input type="hidden" name="m" value="SellerList" /><input type="submit" name="search" class="button" value="其他" /></form></td></tr></table></div><div id="tr1" class="explain-col hidden"><table width="80%" cellspacing="0" class="search-form" align="center"><tr><td width="10%"><input onclick="Show_Hidden(tr11)" type="submit" name="search" class="button" value="物质的变化和性质" /></td><td width="10%"><input type="submit" name="search" class="button" value="物质的分类" /></td><td width="10%"><input type="submit" name="search" class="button" value="物质的组成和构成" /></td><td width="10%"><input type="submit" name="search" class="button" value="化学方程式" /></td><td width="10%"><input type="submit" name="search" class="button" value="溶液" /></td><td width="10%"></td><td width="10%"></td><td width="10%"></td></tr></table></div><div id="tr11" class="explain-col hidden"><table width="80%" cellspacing="0" class="search-form" align="center"><tr><td width="10%"><input onclick="Show_Hidden(tr111)" type="submit" name="search" class="button" value="物理变化" /></td><td width="10%"><input type="submit" name="search" class="button" value="化学变化" /></td><td width="10%"><input type="submit" name="search" class="button" value="催化剂" /></td><td width="10%"><input type="submit" name="search" class="button" value="物理性质" /></td><td width="10%"><input type="submit" name="search" class="button" value="化学性质" /></td><td width="10%"></td><td width="10%"></td><td width="10%"></td></tr></table></div><div id="tr111" class="explain-col hidden"><table width="80%" cellspacing="0" class="search-form" align="center"><tr><td><input type="submit" name="search" class="button" value="常见的物理变化" /></td><td width="10%"></td><td width="10%"></td><td width="10%"></td><td width="10%"></td><td width="10%"></td><td width="10%"></td><td width="10%"></td></tr></table></div></td></tr></tbody></table><!--form id="myform" name="myform" action="<?php echo u('SellerList/delete');?>" method="post" onsubmit="return check();"--><form action="load.php" onsubmit="return false;"><div class="table-list"><table width="100%" cellspacing="0"><thead><tr><th width=50>ID</th><th width=30><input type="checkbox" value="" id="check_box" onclick="selectall('id[]');"></th><th width=350><?php echo L(name);?></th><th width=100><?php echo L(cash_back_rate);?></th><!--th width=100><?php echo L(net_logo);?></th><th width=80><?php echo L('recommend');?></th--><th width=80><?php echo L('description');?></th><!--th width=60><?php echo L('cash_back_rate');?></th--><th width=60>操作</th></tr></thead><tbody><?php if(is_array($seller_list_list)): $k = 0; $__LIST__ = $seller_list_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($k % 2 );++$k;?><tr><td align="center"><?php echo ($val["id"]); ?></td><td align="center"><input type="checkbox" value="<?php echo ($val["subject"]); ?>/<?php echo ($val["installment"]); ?>/<?php echo ($val["click_url"]); ?>/<?php echo ($val["net_logo"]); ?>/<?php echo ($val["net_logo"]); ?>.doc" name="id[]"></td><td align="left"><a href="#" onclick="open('<?php echo ($val["subject"]); ?>/<?php echo ($val["installment"]); ?>/<?php echo ($val["click_url"]); ?>/<?php echo ($val["net_logo"]); ?>/<?php echo ($val["net_logo"]); ?>.png','预览','width=575,height=600,left=150,top=150,resizable=no,scrollbars=no,status=yes,toolbar=no,location=no,menubar=no,menu=yes')"><img src="<?php echo ($val["subject"]); ?>/<?php echo ($val["installment"]); ?>/<?php echo ($val["click_url"]); ?>/<?php echo ($val["net_logo"]); ?>/<?php echo ($val["net_logo"]); ?>.png"><!--<?php echo ($val["name"]); ?>--></a></td><td align="center"><?php echo ($val["cash_back_rate"]); ?></td><!--td align="center"><?php echo ($val["net_logo"]); ?></td><td align="center"><?php echo ($val["recommend"]); ?><input type="text" class="input-text-c input-text" onblur="sort(<?php echo ($val["id"]); ?>,'sort',this.value)" id="sort_<?php echo ($val["id"]); ?>" value="<?php echo ($val["sort"]); ?>" size="4" name="listorders[<?php echo ($val["id"]); ?>]"></td--><td align="center"><?php echo ($val["description"]); ?></td><!--td align="center"><?php echo ($val["cash_back_rate"]); ?>< onclick="status(<?php echo ($val["id"]); ?>,'status')" id="status_<?php echo ($val["id"]); ?>"img src="__ROOT__/statics/images/status_<?php echo ($val["status"]); ?>.gif" /></td--><td align="center"><a href="#" onclick="open('<?php echo ($val["subject"]); ?>/<?php echo ($val["installment"]); ?>/<?php echo ($val["click_url"]); ?>/<?php echo ($val["net_logo"]); ?>/<?php echo ($val["net_logo"]); ?>.png','预览','width=575,height=600,left=150,top=150,resizable=no,scrollbars=no,status=yes,toolbar=no,location=no,menubar=no,menu=yes')">预览</a> / <a href="<?php echo ($val["subject"]); ?>/<?php echo ($val["installment"]); ?>/<?php echo ($val["click_url"]); ?>/<?php echo ($val["net_logo"]); ?>/<?php echo ($val["net_logo"]); ?>.doc" target="_blank">下载</a><!-- / <a href="javascript:edit(<?php echo ($val["id"]); ?>,'<?php echo ($val["name"]); ?>')">编辑</a--></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody></table><div class="btn"><label for="check_box" style="float:left;"><?php echo (L("select_all")); ?>/<?php echo (L("cancel")); ?></label><!--input type="submit" class="button" name="dosubmit" value="<?php echo (L("delete")); ?>" onclick="return confirm('<?php echo (L("sure_delete")); ?>')" style="float:left;margin-left:10px;"/--><input type="submit" class="button" name="dosubmit" value="<?php echo (L("download")); ?>" onclick="dl(this);" style="float:left;margin-left:10px;"/><div id="pages"><?php echo ($page); ?></div></div></div></form><form action="load.php" method="post" id="form" style="display:none"><input type="hidden" name="files" id="files" value="" /></form></div><script>
function dl(o){
    var form =o.form;
    var checked=false;
    var w=[];
    for(var i=0;i<form.elements.length;i++){
        if(form.elements[i].type=="checkbox"&&form.elements[i].checked){
            w[i]=window.open('about:blank', "f_"+i);
            document.getElementById('form').target="f_"+i;
            document.getElementById('files').value=form.elements[i].value; 
            document.getElementById('form').submit();　 
            checked=true;
        }
    }
    if(!checked) alert('请选择至少一个文件');
    setTimeout(function(){
        for(var i=0;i<w.length;i++){
            w[i].close();
        }
    },3000);
 
}
</script><script language="javascript">
function check(){
	var ids='';
	$("input[name='id[]']:checked").each(function(i, n){
		ids += $(n).val() + ',';
	});
	if(ids=='') {
		window.top.art.dialog({content:lang_please_select+'菜单名称	',lock:true,width:'200',height:'50',time:1.5},function(){});
		return false;
	}
	return true;
}
function add() {
	var lang_add = "<?php echo (L("add_cate")); ?>";
	window.top.art.dialog({id:'add'}).close();
	window.top.art.dialog({
		title:lang_add,
		id:'add',
		iframe:'?m=SellerList&a=add',width:'560',height:'500'
		}, 
		function()
		{
			var d = window.top.art.dialog({id:'add'}).data.iframe;
			var form=d.document.getElementById('dosubmit').click();
			form.click();return false;
			
		}, 
		function()
		{
			window.top.art.dialog({id:'add'}).close()
		});
}

function addb2cdata(){
	var lang_add = "<?php echo (L("addb2cdata")); ?>";
	window.top.art.dialog({id:'addb2cdata'}).close();
	window.top.art.dialog({
		title:lang_add,
		id:'addb2cdata',
		iframe:'?m=SellerList&a=addB2cData',width:'430',height:'180'
		})
}

function edit(id, name) {
	var lang_edit = "<?php echo (L("edit")); ?>";
	window.top.art.dialog({id:'edit'}).close();
	window.top.art.dialog({
		title:lang_edit+'--'+name,
		id:'edit',
		iframe:'?m=SellerList&a=edit&id='+id,width:'560',height:'500'
		}, 
		function()
		{
			var d = window.top.art.dialog({id:'edit'}).data.iframe;
			d.document.getElementById('dosubmit').click();
			return false;
		}, 
		function()
		{
			window.top.art.dialog({id:'edit'}).close()
		});
}
function status(id,type){
    $.get("<?php echo u('SellerList/status');?>", { id: id, type: type }, function(jsondata){
		var return_data  = eval("("+jsondata+")");
		$("#"+type+"_"+id+" img").attr('src', '__ROOT__/statics/images/status_'+return_data+'.gif');
	}); 
}
//排序方法
function sort(id,type,num){
    $.get("<?php echo u('SellerList/sort');?>", { id: id, type: type,num:num }, function(jsondata){
		var return_data  = eval("("+jsondata+")");
		$("#"+type+"_"+id+" ").attr('value', return_data);
	}); 
}
</script><script type="text/javascript">
function Show_Hidden(trid){
    if(trid.style.display=="block"){
        trid.style.display='none';
    }else{
        trid.style.display='block';
    }
}
</script></body></html>