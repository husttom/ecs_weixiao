<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<title>商品分类</title>
	<meta http-equiv="pragma" content="no-cache">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="/ecs_weixiao/Public/css/jquery.mobile-1.4.2.min.css" />
	<link rel="stylesheet" href="/ecs_weixiao/Public/css/common.css" />
	<script src="/ecs_weixiao/Public/js/jquery-1.11.1.min.js"></script>
	<script src="/ecs_weixiao/Public/js/jquery.mobile-1.4.2.min.js"></script>
	<style type="text/css">
	.my-nav .my-current{background:#ff4400;}
	</style>
	<script type="text/javascript">
		var imgUrl = "http://wx.qlogo.cn/mmopen/w9h84ibs6ic2cwVYeJTqmRtNpkhXTqYMrAGA5mAW6d5rPQ4qHvDuSkaZ5ndOj3jajyCRfCjOSYdl9GlicWCUR0v5Lib41WE4B5eu/0"; //注意必须是绝对路径
      var lineLink = "http://localhost/pz/wx/index.php/consumers/consumers/index/oaQ8auGYY-uQTtIUAFFxqnQJpjWQ";
    	//var lineLink = window.location.href;//同样，必须是绝对路径
        var descContent = ''; //分享给朋友或朋友圈时的文字简介
var shareTitle = new Array();
shareTitle[0] = '睿智的你，指尖滑过我的瞬间，就没有点进来看看的冲动吗？等你哦！';
shareTitle[1] = '借你几个豹子胆，让你在这里狂欢，唯有你，才能让这里“动”起来。';
shareTitle[2] = '睿智的你，指尖滑过我的瞬间，就没有点进来看看的冲动吗？等你哦！';
shareTitle[3] = '在这里“拼”的是耐力，当你在这里不带走任何东西，那是我的错。';
shareTitle[4] = '当我在向你招手，招呼你“戳”进来，而你却视而不见，你怎么能这么狠心？';
        var appid = ''; //apiID，可留空
        var range = Math.floor(Math.random()*(4));
        //alert(range);
	    // 当微信内置浏览器完成内部初始化后会触发WeixinJSBridgeReady事件。
	    function shareFriend() {
           WeixinJSBridge.invoke('sendAppMessage',{
               "appid": appid,
               "img_url": imgUrl,
               "img_width": "200",
               "img_height": "200",
               "link": lineLink,
               "desc": shareTitle[range],
               "title": ''
           }, function(res) {
               //_report('send_msg', res.err_msg);
           })
        }
        function shareTimeline() {
           WeixinJSBridge.invoke('shareTimeline',{
               "img_url": imgUrl,
               "img_width": "200",
               "img_height": "200",
               "link": lineLink,
               "desc": shareTitle[range],
               "title": shareTitle[range]
           }, function(res) {
                  //_report('timeline', res.err_msg);
           });
        }
        document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
           // 发送给好友
           WeixinJSBridge.on('menu:share:appmessage', function(argv){
               shareFriend();
           });
           // 分享到朋友圈
           WeixinJSBridge.on('menu:share:timeline', function(argv){
               shareTimeline();
           });
       }, false);
	</script>
</head>

<body>
	<div data-role="content">
		<div class="my-header-bg">
			<img src="/ecs_weixiao/Public/images/header_bg.gif" class="my-header-img">
			<div class="my-ui-grid">
				<div class="ui-grid-b">
			    	<div class="ui-block-a"><div class="ui-bar ui-bar-a" style="height:150px"></div></div>
			    	<div class="ui-block-b">
			    		<div class="ui-bar ui-bar-a" style="height:150px;">
			    			<div class="my-header-image">
			    				<!-- <a data-ajax="false" href="http://localhost/pz/wx/index.php/consumers/consumers/index/oaQ8auGYY-uQTtIUAFFxqnQJpjWQ">
			    					<img src="http://wx.qlogo.cn/mmopen/w9h84ibs6ic2cwVYeJTqmRtNpkhXTqYMrAGA5mAW6d5rPQ4qHvDuSkaZ5ndOj3jajyCRfCjOSYdl9GlicWCUR0v5Lib41WE4B5eu/0"/>
			    				</a> -->
			    				<img onclick="nav_jump(this)" jump-url="http://localhost/pz/wx/index.php/consumers/consumers/index/oaQ8auGYY-uQTtIUAFFxqnQJpjWQ" src="http://wx.qlogo.cn/mmopen/w9h84ibs6ic2cwVYeJTqmRtNpkhXTqYMrAGA5mAW6d5rPQ4qHvDuSkaZ5ndOj3jajyCRfCjOSYdl9GlicWCUR0v5Lib41WE4B5eu/0"/>
			    				<br/>
			    				Jahng			    			</div>
			    		</div>
			    	</div>
			   		<div class="ui-block-c">
			   			<div class="ui-bar ui-bar-a" style="height:150px">

			   			</div>
			   		</div>
				</div><!-- /grid-b -->
			</div>
			<div class="my-nav">
				<div class="ui-grid-c">
			    	<div class="ui-block-a" jump-url="http://localhost/pz/wx/index.php/merchant/merchant/local_category" onclick="nav_jump(this)">
			    		<div class="ui-bar ui-bar-a" style="font-weight:400;color:#ff5616;">
			    			<img src="/ecs_weixiao/Public/images/consumers/add.png" alt="" style="margin-bottom:0.1em;width:24px;margin-top:0.5em;"><br />
			    			添加分类
			    		</div>
			    	</div>
			    	<div class="ui-block-b" jump-url="http://localhost/pz/wx/index.php/merchant/merchant/panic_buy" onclick="nav_jump(this)">
			    		<div class="ui-bar ui-bar-a" style="font-weight:400;">
			    			<img src="/ecs_weixiao/Public/images/consumers/shai.png" alt="" style="margin-bottom:0.1em;width:24px;margin-top:0.5em;"><br />
			    			全民疯抢
			    		</div>
			    	</div>
			   		<div class="ui-block-c" jump-url="http://localhost/pz/wx/index.php/merchant/merchant/collect" onclick="nav_jump(this)">
			   			<div class="ui-bar ui-bar-a" style="font-weight:400;">
			    			<img src="/ecs_weixiao/Public/images/consumers/collect_.png" alt="" style="margin-bottom:0.1em;width:24px;margin-top:0.5em;"><br />
			   				收藏
			   			</div>
			   		</div>
			   		<div class="ui-block-c" jump-url="http://wsq.qq.com/reflow/263536219" onclick="nav_jump(this)">
			   			<div class="ui-bar ui-bar-a" style="font-weight:400;">
			    			<img src="/ecs_weixiao/Public/images/consumers/logo.png" alt="" style="margin-bottom:0.1em;width:24px;margin-top:0.5em;"><br />
			   				晒单区
			   			</div>
			   		</div>
				</div><!-- /grid-b -->
			</div>
		</div>
<script>
function nav_jump(obj){
	window.location.href = $(obj).attr('jump-url');
}
</script><!-- 
	<link rel="stylesheet" href="/ecs_weixiao/Public/css/consumers/index.css" />
	<link rel="stylesheet" href="/ecs_weixiao/Public/css/common.css" />
<style type="text/css">
#page1 .cate-pic{padding:0;}
#page1 .themebox{margin-bottom: 3em;padding-left:5px;padding-right: 5px;width:auto;}
#page1 .theme-list{margin-top: 10px;margin-bottom: 10px;}
</style>
		<section data-role="content" class="content">
			<article class="themebox cl">
				<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined variable: goods_category</p>
<p>Filename: merchant/live_category.php</p>
<p>Line Number: 11</p>

</div><div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Warning</p>
<p>Message:  Invalid argument supplied for foreach()</p>
<p>Filename: merchant/live_category.php</p>
<p>Line Number: 11</p>

</div>			</article>
		</section> -->
<style type="text/css">
.ui-grid-a > .ui-block-b{
	background:#ffffff;
}
.ui-grid-a > .current-click{
	background:#eeeeee;
}
</style>
 		<link rel="stylesheet" href="/ecs_weixiao/Public/css/merchant_index.css" />
 		<div style="height:40px;line-height:40px;padding-left:10px;font-size:0.9em;">当前位置(商品区)：分类>男装</div>
		<fieldset class="ui-grid-a" id="category-list">
				   			<div class="ui-block-b" onclick="chang_bg(this)" style="height:80px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;" category-id="406" value="上装">
	   				<div style="text-align:center;margin-top:30px;">
	   					上装	   				</div>
	   			</div>

				   			<div class="ui-block-b" onclick="chang_bg(this)" style="height:80px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;" category-id="407" value="外套">
	   				<div style="text-align:center;margin-top:30px;">
	   					外套	   				</div>
	   			</div>

				   			<div class="ui-block-b" onclick="chang_bg(this)" style="height:80px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;" category-id="408" value="裤装">
	   				<div style="text-align:center;margin-top:30px;">
	   					裤装	   				</div>
	   			</div>

				   			<div class="ui-block-b" onclick="chang_bg(this)" style="height:80px;border-right:1px solid #ccc;border-bottom:1px solid #ccc;" category-id="409" value="套装">
	   				<div style="text-align:center;margin-top:30px;">
	   					套装	   				</div>
	   			</div>

					</fieldset>
	</div>
<script type="text/javascript">
	function my_jump(obj){
		var category_id = $(obj).attr('category-id');
		var category_name = $(obj).attr('value');
		var map = "分类>男装";
		map = encodeURI(map+'>'+category_name);
		//alert(map);
		var url = "http://localhost/pz/wx/index.php/merchant/merchant/get_live_category"+"/"+"39"+"/"+category_id+'?map='+map;
		//alert(url);
		window.location.href = url;
	}
	function chang_bg(obj){
		$('#category-list').children().css('backgrund','#ffffff');
		$(obj).css('background','#eeeeee');
		var category_id = $(obj).attr('category-id');
		var category_name = $(obj).attr('value');
		var map = "分类>男装";
		map = encodeURI(map+'>'+category_name);
		//alert(map);
		var url = "http://localhost/pz/wx/index.php/merchant/merchant/get_live_category"+"/"+"39"+"/"+category_id+'?map='+map;
		//alert(url);
		window.location.href = url;
	}
</script>
</body>
</html>