<?php if (!defined('THINK_PATH')) exit(); if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><h3 class="f14"><span class="switchs cu on" title="<?php echo ($lang["expand_or_contract"]); ?>"></span><?php echo ($item["name"]); ?></h3><ul><?php if(is_array($item['navs'])): $i = 0; $__LIST__ = $item['navs'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?><li id="_MP<?php echo ($nav["id"]); ?>" class="sub_menu"><a href="javascript:_MP(<?php echo ($nav["id"]); ?>,'<?php echo ($nav["url"]); ?>');" hidefocus="true" style="outline:none;"><?php echo ($nav["action_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul><?php endforeach; endif; else: echo "" ;endif; ?><script type="text/javascript">
$(".switchs").each(function(i){
	var ul = $(this).parent().next();
	$(this).click(
	function(){
		if(ul.is(':visible')){
			ul.hide();
			$(this).removeClass('on');
				}else{
			ul.show();
			$(this).addClass('on');
		}
	})
});
</script><!--DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>leftmenu</title><link href="css/style.css" rel="stylesheet" type="text/css" /><script language="JavaScript" src="js/jquery.js"></script></head><body style="background:#f0f9fd;"><dl class="leftmenu"><dd><div class="title"><span><img src="images/leftico01.png" /></span>菜单栏
    </div><ul class="menuson"><li><cite></cite><a href="index.html" target="rightFrame">千校云题库</a><i></i></li><li><cite></cite><a href="imgtable.html" target="rightFrame">本校题库</a><i></i></li><li><cite></cite><a href="imglist1.html" target="rightFrame">我的题库</a><i></i></li><li><cite></cite><a href="tab.html" target="rightFrame">上传新题</a><i></i></li><li><cite></cite><a href="ucenter.html" target="rightFrame">个人中心</a><i></i></li></ul></dd></dl></body></html-->