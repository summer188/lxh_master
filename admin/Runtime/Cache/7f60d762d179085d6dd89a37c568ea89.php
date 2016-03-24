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

</script><title><?php echo (L("website_manage")); ?></title></head><body><div id="ajax_loading">提交请求中，请稍候...</div><?php if($show_header != false): if(($sub_menu != '') OR ($big_menu != '')): ?><div class="subnav"><div class="content-menu ib-a blue line-x"><?php if(!empty($big_menu)): ?><a class="add fb" href="<?php echo ($big_menu["0"]); ?>"><em><?php echo ($big_menu["1"]); ?></em></a>　<?php endif; ?></div></div><?php endif; endif; ?><div class="pad_10"><form action="<?php echo u('SellerList/update');?>" method="post" name="myform" id="myform" enctype="multipart/form-data"><table width="100%" cellpadding="2" cellspacing="1" class="table_form"><tr><th><?php echo L('installment');?> : </th><td>			&nbsp;
		  初一&nbsp;<input type="radio" name="installment" value="7" <?php if($seller_list_info["installment"] == 7): ?>checked="checked"<?php endif; ?> />&nbsp;
		  初二&nbsp;<input type="radio" name="installment" value="8" <?php if($seller_list_info["installment"] == 8): ?>checked="checked"<?php endif; ?> />&nbsp;
		  初三&nbsp;<input type="radio" name="installment" value="9" <?php if($seller_list_info["installment"] == 9): ?>checked="checked"<?php endif; ?> />&nbsp;
		  高一&nbsp;<input type="radio" name="installment" value="10" <?php if($seller_list_info["installment"] == 10): ?>checked="checked"<?php endif; ?> />&nbsp;
		  高二&nbsp;<input type="radio" name="installment" value="11" <?php if($seller_list_info["installment"] == 11): ?>checked="checked"<?php endif; ?> />&nbsp;
		  高三&nbsp;<input type="radio" name="installment" value="12" <?php if($seller_list_info["installment"] == 12): ?>checked="checked"<?php endif; ?> />&nbsp; 
		</td></tr><tr><th><?php echo L('url');?> :</th><td><input type="text" name="click_url"  id="click_url" class="input-text" style="width:400px;" value="<?php echo ($seller_list_info["click_url"]); ?>" /></td></tr><tr><th><?php echo L('net_logo');?> :</th><td><input type="text" name="net_logo"  id="net_logo" class="input-text" style="width:400px;" value="<?php echo ($seller_list_info["net_logo"]); ?>" /></td></tr><tr><th width="80"><?php echo L('name');?> :</th><td><textarea name="name" style="width:400px; height:120px;" id="name" class="input-text"><?php echo ($seller_list_info["name"]); ?></textarea></td></tr><!--tr><th class="text_right"><?php echo L('has_invoice');?> :</th><td class="text_left"><input type="text" name="has_invoice"  id="has_invoice" class="input-text" style="width:400px;" value="<?php echo ($seller_list_info["has_invoice"]); ?>" /></td></tr><tr><th class="text_right"><?php echo L('services');?> :</th><td class="text_left">
			&nbsp;文本&nbsp;<input type="radio" name="format" value="文本" <?php if($seller_list_info["format"] == 文本): ?>checked="checked"<?php endif; ?> />
			&nbsp;文本和视频&nbsp;<input type="radio" name="format" value="视频+文本" <?php if($seller_list_info["format"] == 文本和视频): ?>checked="checked"<?php endif; ?> /></td></tr--><tr><th><?php echo L('description');?> :</th><td>			&nbsp;A&nbsp;<input type="radio" name="description" value="a" <?php if($seller_list_info["description"] == a): ?>checked="checked"<?php endif; ?> />&nbsp;B&nbsp;
		  <input type="radio" name="description" value="b" <?php if($seller_list_info["description"] == b): ?>checked="checked"<?php endif; ?> />&nbsp;C&nbsp;
		  <input type="radio" name="description" value="c" <?php if($seller_list_info["description"] == c): ?>checked="checked"<?php endif; ?> />&nbsp;D&nbsp;
		  <input type="radio" name="description" value="d" <?php if($seller_list_info["description"] == d): ?>checked="checked"<?php endif; ?> />&nbsp;
		</td></tr><tr><th><?php echo L('recommend');?> :</th><td>			&nbsp;1&nbsp;
		  <input type="radio" name="recommend" value="1"<?php if($seller_list_info["recommend"] == 1): ?>checked="checked"<?php endif; ?>/>&nbsp;2&nbsp;
		  <input type="radio" name="recommend" value="2"<?php if($seller_list_info["recommend"] == 2): ?>checked="checked"<?php endif; ?>/>&nbsp;3&nbsp;
		  <input type="radio" name="recommend" value="3"<?php if($seller_list_info["recommend"] == 3): ?>checked="checked"<?php endif; ?>/> &nbsp;4&nbsp;
		  <input type="radio" name="recommend" value="4" <?php if($seller_list_info["recommend"] == 4): ?>checked="checked"<?php endif; ?>/>&nbsp;
		</td></tr><tr><th width="80"><?php echo L('cash_back_rate');?> :</th><td>&nbsp;
		  1&nbsp;<input type="radio" name="cash_back_rate" value="1" <?php if($seller_list_info["cash_back_rate"] == 1): ?>checked="checked"<?php endif; ?> />
			&nbsp;
		  2&nbsp;<input type="radio" name="cash_back_rate" value="2" <?php if($seller_list_info["cash_back_rate"] == 2): ?>checked="checked"<?php endif; ?> />
			&nbsp;
		  3&nbsp;<input type="radio" name="cash_back_rate" value="3" <?php if($seller_list_info["cash_back_rate"] == 3): ?>checked="checked"<?php endif; ?> />
			&nbsp;
		  4&nbsp;<input type="radio" name="cash_back_rate" value="4" <?php if($seller_list_info["cash_back_rate"] == 4): ?>checked="checked"<?php endif; ?> />
			&nbsp;
		  5&nbsp;<input type="radio" name="cash_back_rate" value="5" <?php if($seller_list_info["cash_back_rate"] == 5): ?>checked="checked"<?php endif; ?> /></td></tr><tr><th width="80"><?php echo L('has_invoice');?> :</th><td>&nbsp;
		  1&nbsp;<input type="radio" name="has_invoice" value="1" <?php if($seller_list_info["has_invoice"] == 1): ?>checked="checked"<?php endif; ?> />
			&nbsp;
		  2&nbsp;<input type="radio" name="has_invoice" value="2" <?php if($seller_list_info["has_invoice"] == 2): ?>checked="checked"<?php endif; ?> />
			&nbsp;
		  3&nbsp;<input type="radio" name="has_invoice" value="3" <?php if($seller_list_info["has_invoice"] == 3): ?>checked="checked"<?php endif; ?> />
			&nbsp;
		  4&nbsp;<input type="radio" name="has_invoice" value="4" <?php if($seller_list_info["has_invoice"] == 4): ?>checked="checked"<?php endif; ?> />
			&nbsp;
		  5&nbsp;<input type="radio" name="has_invoice" value="5" <?php if($seller_list_info["has_invoice"] == 5): ?>checked="checked"<?php endif; ?> /></td></tr><tr><th width="80"><?php echo L('site_logo');?> :</th><td>&nbsp;
		  <input type="text" name="site_logo"  id="site_logo" class="input-text" style="width:400px;" value="<?php echo ($seller_list_info["site_logo"]); ?>" /></td></tr><!--tr><th><?php echo L('sort');?> :</th><td><input type="text" name="sort" id="sort" class="input-text" value="<?php echo ($seller_list_info["sort"]); ?>"></td></tr--><tr><th width="80"><?php echo L('title_attribute');?> :</th><td>&nbsp;
		  <input type="text" name="title_attribute"  id="title_attribute" class="input-text" style="width:400px;" value="<?php echo ($seller_list_info["title_attribute"]); ?>" /></td></tr><tr><th class="text_right">所属学科 :</th><td class="text_left">
		&nbsp; <input type="radio" value="chymistry" name="subject" <?php if($seller_list_info["subject"] == chymistry): ?>checked="checked"<?php endif; ?>> 化学 
		<input type="radio" value="physical" name="subject" <?php if($seller_list_info["subject"] == physical): ?>checked="checked"<?php endif; ?>> 物理 
		<input type="radio" value="Chinese" name="subject" <?php if($seller_list_info["subject"] == Chinese): ?>checked="checked"<?php endif; ?>> 语文 
		<input type="radio" value="mathematics" name="subject" <?php if($seller_list_info["subject"] == mathematics): ?>checked="checked"<?php endif; ?>> 数学 
		<input type="radio" value="English" name="subject" <?php if($seller_list_info["subject"] == English): ?>checked="checked"<?php endif; ?>> 英语
			<!--<?php echo ($cate_str); ?>--></td></tr><!--tr><th><?php echo L('state');?> :</th><td><input type="radio" name="status" class="radio_style" value="1" <?php if($seller_list_info["status"] == 1): ?>checked="checked"<?php endif; ?>  > &nbsp;有效&nbsp;&nbsp;&nbsp;
        <input type="radio" name="status" class="radio_style" value="0" <?php if($seller_list_info["status"] == 0): ?>checked="checked"<?php endif; ?>> &nbsp;禁用
      </td></tr--><input type="hidden" name="id" value="<?php echo ($seller_list_info["id"]); ?>" /></table><input type="submit" name="dosubmit" id="dosubmit" class="dialog" value=" "></form><script type="text/javascript">
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
		
		$("#name").formValidator({
			onshow:"不能为空",onfocus:"不能为空"
		}).inputValidator({
			min:1,onerror:"请填写分类名称"
		});

	
	})
</script></div></body></html>