<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
  <title>店铺</title>
	<meta HTTP-EQUIV="pragma" CONTENT="no-cache"> 
	<meta HTTP-EQUIV="Cache-Control" CONTENT="no-store, must-revalidate"> 
	<meta HTTP-EQUIV="expires" CONTENT="Wed, 26 Feb 1997 08:21:57 GMT"> 
	<meta HTTP-EQUIV="expires" CONTENT="0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="http://localhost/pz/wx/static/css/jquery.mobile-1.4.2.min.css" />
	<link rel="stylesheet" href="http://localhost/pz/wx/static/css/consumers/footer.css" />
	<script src="http://localhost/pz/wx/static/js/jquery-1.11.1.min.js"></script>
	<script src="http://localhost/pz/wx/static/js/jquery.mobile-1.4.2.min.js"></script>
  <script src="http://localhost/pz/wx/static/js/jweixin-1.0.0.js"></script>
  <script type="text/javascript">
   wx.config({
        debug: false,
        appId: 'wx80fb3c76287e1f85',
        timestamp: 1421247257,
        nonceStr: 'TfKxqLvrNnwGjT19',
        signature: '0f116e5a039a3b563f032c4b9198a8b08a4fd343',
        jsApiList: [
          'onMenuShareTimeline',
          'onMenuShareAppMessage',
        ]
    });
wx.ready(function () {
    var lineLink = window.location.href;
    var imgUrl = "http://wx.qlogo.cn/mmopen/w9h84ibs6ic2cwVYeJTqmRtNpkhXTqYMrAGA5mAW6d5rPQ4qHvDuSkaZ5ndOj3jajyCRfCjOSYdl9GlicWCUR0v5Lib41WE4B5eu/0";
    var shareTitle = '测试三内容12';
  // 2.1 监听“分享给朋友”，按钮点击、自定义分享内容及分享结果接口
    wx.onMenuShareAppMessage({
      title: '我的微店',
      desc: shareTitle,
      link: lineLink,
      imgUrl: imgUrl,
      trigger: function (res) {
        //alert('用户点击发送给朋友');
      },
      success: function (res) {
        //alert('已分享');
      },
      cancel: function (res) {
        //alert('已取消');
      },
      fail: function (res) {
        //alert(JSON.stringify(res));
      }
    });

  // 2.2 监听“分享到朋友圈”按钮点击、自定义分享内容及分享结果接口
    wx.onMenuShareTimeline({
      title: shareTitle,
      link: lineLink,
      imgUrl: imgUrl,
      trigger: function (res) {
        //alert('用户点击分享到朋友圈');
      },
      success: function (res) {
        //alert('已分享');
      },
      cancel: function (res) {
        //alert('已取消');
      },
      fail: function (res) {
        //alert(JSON.stringify(res));
      }
    });
});
  </script>
</head>
<body>

	<link rel="stylesheet" href="http://localhost/pz/wx/static/css/consumers/index.css" />
	<link rel="stylesheet" href="http://localhost/pz/wx/static/css/common.css" />
<style type="text/css">
.ui-grid-a > .ui-block-a, .ui-grid-a > .ui-block-b{
	width:48%;
	margin-right: 2%;
	border:1px solid #eeeeee;
}
#page1 .theme-list{
	border:1px solid #eee;
}
#page1 .theme-list{
	width:46%;
}
</style>
	<section data-role="page" id="page1">
		<div class="my-header-bg">
			<img src="http://localhost/pz/wx/static/images/header_bg.gif" class="my-header-img">
			<div class="my-ui-grid">
				<div class="ui-grid-b">
			    	<div class="ui-block-a"><div class="ui-bar ui-bar-a" style="height:150px"></div></div>
			    	<div class="ui-block-b">
			    		<div class="ui-bar ui-bar-a" style="height:150px;">
			    			<div class="my-header-image">
			    				<img src="http://wx.qlogo.cn/mmopen/w9h84ibs6ic2cwVYeJTqmRtNpkhXTqYMrAGA5mAW6d5rPQ4qHvDuSkaZ5ndOj3jajyCRfCjOSYdl9GlicWCUR0v5Lib41WE4B5eu/0"/><br/>
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
			    	<div class="ui-block-a" jump-url="http://wsq.qq.com/reflow/263536219" onclick="nav_jump(this)">
			    		<div class="ui-bar ui-bar-a my-current" style="font-weight:400;">
			    			<img src="http://localhost/pz/wx/static/images/consumers/logo.png" alt="" style="margin-bottom:0.1em;width:24px;margin-top:0.5em;"><br />
			    			晒单区
			    		</div>
			    	</div>
			    	<div class="ui-block-b" jump-url="http://localhost/pz/wx/index.php/consumers/consumers/teach_buy/oaQ8auGYY-uQTtIUAFFxqnQJpjWQ" onclick="nav_jump(this)">
			    		<div class="ui-bar ui-bar-a" style="font-weight:400;">			    			
			    			<img src="http://localhost/pz/wx/static/images/consumers/car.png" alt="" style="margin-bottom:0.1em;width:24px;margin-top:0.5em;"><br />
			    			购买流程
			    		</div>
			    	</div>
			   		<div class="ui-block-c" jump-url="http://localhost/pz/wx/index.php/consumers/consumers/integral/oaQ8auGYY-uQTtIUAFFxqnQJpjWQ" onclick="nav_jump(this)">
			   			<div class="ui-bar ui-bar-a" style="font-weight:400;">			    			
			    			<img src="http://localhost/pz/wx/static/images/consumers/dan.png" alt="" style="margin-bottom:0.1em;width:24px;margin-top:0.5em;"><br />
			   				积分购
			   			</div>
			   		</div>
			   		<div class="ui-block-c" jump-url="http://localhost/pz/wx/index.php/consumers/consumers/panic_buy/oaQ8auGYY-uQTtIUAFFxqnQJpjWQ" onclick="nav_jump(this)">
			   			<div class="ui-bar ui-bar-a" style="border-right:none;font-weight:400;">		<img src="http://localhost/pz/wx/static/images/consumers/shai.png" alt="" style="margin-bottom:0.1em;width:24px;margin-top:0.5em;"><br />
			   				全民疯抢</div>
			   		</div>
				</div><!-- /grid-b -->
			</div>
		</div>
<!-- 		<header data-role="header" class="header" data-position="inline" >
			<section class="banner">
				<img class="member-bg" src="http://localhost/pz/wx/static/images/consumers/banner-1.png" alt="">
				<ul class="control cl">
					<li class="current"></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</section>
		</header> -->
		<section data-role="content" class="content" style="background:#f5f5f5;">
			<h3 class="cont theme" style="font-size:1em;">分类</h3>
			<article class="themebox cl" style="overflow:hidden;" id="my-category-list">
									
					<p class="theme-list cl" style="margin-left:2%;margin-bottom:2px;">
						<a data-ajax="false" class="theme-left" href="http://localhost/pz/wx/index.php/consumers/consumers/goods_list/oaQ8auGYY-uQTtIUAFFxqnQJpjWQ/39">
							<span class="cate-name" style="margin-top:0;">男装</span>
							<span class="cate-desc"></span>
						</a>
						
						<img class="cate-pic" src="http://img.pf178.com/data/files/store_14257/goods_176/lcj_201409191519364329.jpg" alt="" style="width:auto;">
						
					</p>
					
									
					<p class="theme-list cl" style="margin-left:2%;margin-bottom:2px;">
						<a data-ajax="false" class="theme-left" href="http://localhost/pz/wx/index.php/consumers/consumers/goods_list/oaQ8auGYY-uQTtIUAFFxqnQJpjWQ/4">
							<span class="cate-name" style="margin-top:0;">鞋子</span>
							<span class="cate-desc"></span>
						</a>
						
						<img class="cate-pic" src="http://img.pf178.com/data/files/store_3481/goods_88/lcj_201408211128084040.jpg" alt="" style="width:auto;">
						
					</p>
					
									
					<p class="theme-list cl" style="margin-left:2%;margin-bottom:2px;">
						<a data-ajax="false" class="theme-left" href="http://localhost/pz/wx/index.php/consumers/consumers/goods_list/oaQ8auGYY-uQTtIUAFFxqnQJpjWQ/8">
							<span class="cate-name" style="margin-top:0;">牛仔裤</span>
							<span class="cate-desc"></span>
						</a>
						
						<img class="cate-pic" src="http://img.pf178.com/data/files/store_13174/goods_26/lcj_201409101340264204.jpg" alt="" style="width:auto;">
						
					</p>
					
								<div style="clear:both;"></div>
			</article>
						<div style="text-align:center;background;display:none;" id="hide-more">
				<img src="http://localhost/pz/wx/static/images/consumers/my-up.png" style="width:30px;"/>
			</div>		
			<div class="good-list" style="margin-bottom:6em;">
				
					
					<div style="margin-bottom:10px;">
						<h3 class="cont theme" style="font-size:1em;">男装</h3>
						<fieldset class="ui-grid-a" style="padding:0 2%;">
														   	<div class="ui-block-b" style="text-align:center;margin-bottom:10px;background:#fff;">
							   		<div class="my-cloth-img">
							   			<a data-ajax="false" href="http://localhost/pz/wx/index.php/consumers/consumers/goods_detail/oaQ8auGYY-uQTtIUAFFxqnQJpjWQ/60">
							   				<img src="http://img.pf178.com/data/files/store_14257/goods_176/lcj_201409191519364329.jpg" style="width:100%;" />
							   			</a>
							   		</div>
							   		<div class="my-cloth-des" value="维珂菲2014秋冬季韩版修身人头花纹男士外穿拉链小外套" style="height:2em;line-height:1em;overflow:hidden;text-align:left;font-size:0.9em;margin:0.5em 1em;-webkit-line-clamp:2;-webkit-box-orient:vertical;">维珂菲2014秋冬季韩版修身人头花纹男士外穿拉链小外套</div>
							   		<!-- <div class="my-cloth-spec" style="text-align:left;font-size:0.9em;">款号：81280</div> -->
							   		<div class="my-cloth-price" style="border-top:1px dashed #ccc;height:auto;text-align:left;font-size:0.9em;margin:0.5em 1em;color:#ff5616;padding-top:0.5em;">价格：￥112.5</div>
							   	</div>
						    							   	<div class="ui-block-b" style="text-align:center;margin-bottom:10px;background:#fff;">
							   		<div class="my-cloth-img">
							   			<a data-ajax="false" href="http://localhost/pz/wx/index.php/consumers/consumers/goods_detail/oaQ8auGYY-uQTtIUAFFxqnQJpjWQ/59">
							   				<img src="http://img.pf178.com/data/files/store_13492/goods_67/lcj_201409101731079064.jpg" style="width:100%;" />
							   			</a>
							   		</div>
							   		<div class="my-cloth-des" value="XIAO2014秋装新款休闲V领男西装薄款外套型男小西装拼色男士西装" style="height:2em;line-height:1em;overflow:hidden;text-align:left;font-size:0.9em;margin:0.5em 1em;-webkit-line-clamp:2;-webkit-box-orient:vertical;">XIAO2014秋装新款休闲V领男西装薄款外套型男小西装拼色男士西装</div>
							   		<!-- <div class="my-cloth-spec" style="text-align:left;font-size:0.9em;">款号：80767</div> -->
							   		<div class="my-cloth-price" style="border-top:1px dashed #ccc;height:auto;text-align:left;font-size:0.9em;margin:0.5em 1em;color:#ff5616;padding-top:0.5em;">价格：￥195</div>
							   	</div>
						    							   	<div class="ui-block-b" style="text-align:center;margin-bottom:10px;background:#fff;">
							   		<div class="my-cloth-img">
							   			<a data-ajax="false" href="http://localhost/pz/wx/index.php/consumers/consumers/goods_detail/oaQ8auGYY-uQTtIUAFFxqnQJpjWQ/58">
							   				<img src="http://img.pf178.com/data/files/store_13063/goods_197/lcj_201409131713173974.jpg" style="width:100%;" />
							   			</a>
							   		</div>
							   		<div class="my-cloth-des" value="树格2014秋季新款口袋休闲修身韩版潮男打底衫长袖t恤" style="height:2em;line-height:1em;overflow:hidden;text-align:left;font-size:0.9em;margin:0.5em 1em;-webkit-line-clamp:2;-webkit-box-orient:vertical;">树格2014秋季新款口袋休闲修身韩版潮男打底衫长袖t恤</div>
							   		<!-- <div class="my-cloth-spec" style="text-align:left;font-size:0.9em;">款号：80979</div> -->
							   		<div class="my-cloth-price" style="border-top:1px dashed #ccc;height:auto;text-align:left;font-size:0.9em;margin:0.5em 1em;color:#ff5616;padding-top:0.5em;">价格：￥134</div>
							   	</div>
						    						</fieldset>
					</div>
					
				
					
				
					
					<div style="margin-bottom:10px;">
						<h3 class="cont theme" style="font-size:1em;">鞋子</h3>
						<fieldset class="ui-grid-a" style="padding:0 2%;">
														   	<div class="ui-block-b" style="text-align:center;margin-bottom:10px;background:#fff;">
							   		<div class="my-cloth-img">
							   			<a data-ajax="false" href="http://localhost/pz/wx/index.php/consumers/consumers/goods_detail/oaQ8auGYY-uQTtIUAFFxqnQJpjWQ/53">
							   				<img src="http://img.pf178.com/data/files/store_3481/goods_88/lcj_201408211128084040.jpg" style="width:100%;" />
							   			</a>
							   		</div>
							   		<div class="my-cloth-des" value="商务休闲鞋新款流行男士皮鞋真皮潮流男鞋英伦风男鞋" style="height:2em;line-height:1em;overflow:hidden;text-align:left;font-size:0.9em;margin:0.5em 1em;-webkit-line-clamp:2;-webkit-box-orient:vertical;">商务休闲鞋新款流行男士皮鞋真皮潮流男鞋英伦风男鞋</div>
							   		<!-- <div class="my-cloth-spec" style="text-align:left;font-size:0.9em;">款号：80110</div> -->
							   		<div class="my-cloth-price" style="border-top:1px dashed #ccc;height:auto;text-align:left;font-size:0.9em;margin:0.5em 1em;color:#ff5616;padding-top:0.5em;">价格：￥165</div>
							   	</div>
						    						</fieldset>
					</div>
					
				
					
				
					
				
					
					<div style="margin-bottom:10px;">
						<h3 class="cont theme" style="font-size:1em;">牛仔裤</h3>
						<fieldset class="ui-grid-a" style="padding:0 2%;">
														   	<div class="ui-block-b" style="text-align:center;margin-bottom:10px;background:#fff;">
							   		<div class="my-cloth-img">
							   			<a data-ajax="false" href="http://localhost/pz/wx/index.php/consumers/consumers/goods_detail/oaQ8auGYY-uQTtIUAFFxqnQJpjWQ/52">
							   				<img src="http://img.pf178.com/data/files/store_13174/goods_26/lcj_201409101340264204.jpg" style="width:100%;" />
							   			</a>
							   		</div>
							   		<div class="my-cloth-des" value="2014恒也男装中低腰修身弯刀微挎新款弹力小脚裤" style="height:2em;line-height:1em;overflow:hidden;text-align:left;font-size:0.9em;margin:0.5em 1em;-webkit-line-clamp:2;-webkit-box-orient:vertical;">2014恒也男装中低腰修身弯刀微挎新款弹力小脚裤</div>
							   		<!-- <div class="my-cloth-spec" style="text-align:left;font-size:0.9em;">款号：80731</div> -->
							   		<div class="my-cloth-price" style="border-top:1px dashed #ccc;height:auto;text-align:left;font-size:0.9em;margin:0.5em 1em;color:#ff5616;padding-top:0.5em;">价格：￥112.2</div>
							   	</div>
						    							   	<div class="ui-block-b" style="text-align:center;margin-bottom:10px;background:#fff;">
							   		<div class="my-cloth-img">
							   			<a data-ajax="false" href="http://localhost/pz/wx/index.php/consumers/consumers/goods_detail/oaQ8auGYY-uQTtIUAFFxqnQJpjWQ/51">
							   				<img src="http://img.pf178.com/data/files/store_13174/goods_123/lcj_201409101805234818.jpg" style="width:100%;" />
							   			</a>
							   		</div>
							   		<div class="my-cloth-des" value="恒也2014秋冬季时尚新款牛仔裤青春版弹力修身花白微挎小脚裤" style="height:2em;line-height:1em;overflow:hidden;text-align:left;font-size:0.9em;margin:0.5em 1em;-webkit-line-clamp:2;-webkit-box-orient:vertical;">恒也2014秋冬季时尚新款牛仔裤青春版弹力修身花白微挎小脚裤</div>
							   		<!-- <div class="my-cloth-spec" style="text-align:left;font-size:0.9em;">款号：80782</div> -->
							   		<div class="my-cloth-price" style="border-top:1px dashed #ccc;height:auto;text-align:left;font-size:0.9em;margin:0.5em 1em;color:#ff5616;padding-top:0.5em;">价格：￥122.2</div>
							   	</div>
						    							   	<div class="ui-block-b" style="text-align:center;margin-bottom:10px;background:#fff;">
							   		<div class="my-cloth-img">
							   			<a data-ajax="false" href="http://localhost/pz/wx/index.php/consumers/consumers/goods_detail/oaQ8auGYY-uQTtIUAFFxqnQJpjWQ/50">
							   				<img src="http://img.pf178.com/data/files/store_2648/goods_59/lcj_201304231450599832.jpg" style="width:100%;" />
							   			</a>
							   		</div>
							   		<div class="my-cloth-des" value="马特达蒙秋季新品男裤_时尚男士修身微弹_直筒牛仔长裤" style="height:2em;line-height:1em;overflow:hidden;text-align:left;font-size:0.9em;margin:0.5em 1em;-webkit-line-clamp:2;-webkit-box-orient:vertical;">马特达蒙秋季新品男裤_时尚男士修身微弹_直筒牛仔长裤</div>
							   		<!-- <div class="my-cloth-spec" style="text-align:left;font-size:0.9em;">款号：51855</div> -->
							   		<div class="my-cloth-price" style="border-top:1px dashed #ccc;height:auto;text-align:left;font-size:0.9em;margin:0.5em 1em;color:#ff5616;padding-top:0.5em;">价格：￥104</div>
							   	</div>
						    						</fieldset>
					</div>
					
					</div>
			<!-- <h3 class="cont theme">热门推荐</h3> --><!-- 
			<article class="themebox themebox2 cl">
				<img src="http://localhost/pz/wx/static/images/consumers/hot1.png" alt="">
				<img src="http://localhost/pz/wx/static/images/consumers/hot1.png" alt="">
				<img src="http://localhost/pz/wx/static/images/consumers/hot1.png" alt="">
				<img src="http://localhost/pz/wx/static/images/consumers/hot1.png" alt="">
				<img src="http://localhost/pz/wx/static/images/consumers/hot1.png" alt="">
				<img src="http://localhost/pz/wx/static/images/consumers/hot1.png" alt="">
				<img src="http://localhost/pz/wx/static/images/consumers/hot1.png" alt="">
			</article>
			<h4 class="copyright">品众批发网 版权所有 服务热线： 4006-338-178</h4> -->
		</section>
		<!-- <div style="text-align:center;bottom:4em;position:fixed;width:100%;"><a href="http://localhost/pz/wx/index.php/consumers/buyer/register/oaQ8auGYY-uQTtIUAFFxqnQJpjWQ" data-ajax="false" style="height:40px;line-height:40px;border-radius:15px 15px;background:#9ec326;display:inline-block;width:130px;text-align:center;color:#ffffff;box-shadow:none;text-shadow:none;">我也要开店</a></div> -->
<script type="text/javascript">

$(document).ready(function(){
	$('#load-more').click(function(){
		//var new_height = $('.cate-pic').css('height');
		new_height = 42*(Math.ceil(3/2));
		$('#my-category-list').css('height',new_height+'px');
		$(this).hide();
		$('#hide-more').show();
	});
	$('#hide-more').click(function(){
		//var new_height = $('.cate-pic').css('height');
		//new_height = parseFloat(new_height)*2+8;
		$('#my-category-list').css('height','78px');
		$(this).hide();
		$('#load-more').show();
	});
	var count = $('.cate-pic').length;
	//console.log($('.cate-pic').eq(0));
	if(count){
		var height = $('.cate-pic').css('height','35px');
		$('#my-category-list').css('height','80px');
	}else{
		$('#my-category-list').css('height','0');
	}

	/*
	var obj = $('.my-cloth-des');
	$.each(obj,function(i){
		var font_size = $(obj[i]).css('font-size');
		var width = $(obj[i]).css('width');
		var max_count = (Math.round(parseFloat(width)/parseFloat(font_size)))*2;
		var content = $(obj[i]).attr('value');
		var new_content = '';
		if(content.length<max_count){
			new_content = content;
		}else{
			new_content = content.substring(0,max_count);
			new_content +='...';
		}
		console.log(new_content);
		$(obj[i]).html(new_content);

	});
	*/
});

</script><style type="text/css">
#page1 .footer-list a{
	text-shadow:none;
	box-shadow: none;
}
.nav-current{
	background:#333333;
}
</style>
		<footer data-role="footer" class="footer">

			<nav>
				<ul style="padding-left:0;margin:0;">
					<li class="footer-list nav-current">
						<a data-ajax="false" href="http://localhost/pz/wx/index.php/consumers/consumers/index/oaQ8auGYY-uQTtIUAFFxqnQJpjWQ">
							<img src="http://localhost/pz/wx/static/images/consumers/index.png" alt="" style="margin-bottom:0.5em;"><br />
							首页
						</a>
					</li>
					<li class="footer-list ">
						<a data-ajax="false" href="http://localhost/pz/wx/index.php/consumers/consumers/category/oaQ8auGYY-uQTtIUAFFxqnQJpjWQ">
							<img src="http://localhost/pz/wx/static/images/consumers/category.png" alt="" style="margin-bottom:0.5em;"><br />
							分类
						</a>
					</li>
					<li class="footer-list ">
						<a data-ajax="false" href="http://localhost/pz/wx/index.php/consumers/buyer/register/oaQ8auGYY-uQTtIUAFFxqnQJpjWQ">
							<img src="http://localhost/pz/wx/static/images/consumers/collect.png" alt="" style="margin-bottom:0.5em;"><br />
							开店
						</a>
					</li>
					<li class="footer-list ">
						<a data-ajax="false" href="http://localhost/pz/wx/index.php/consumers/cart/index/oaQ8auGYY-uQTtIUAFFxqnQJpjWQ">
							<img src="http://localhost/pz/wx/static/images/consumers/carc.png" alt="" style="margin-bottom:0.5em;"><br />
							购物车
						</a>
					</li>
					<li class="footer-list ">
						<a data-ajax="false" href="http://localhost/pz/wx/index.php/consumers/buyer/member/oaQ8auGYY-uQTtIUAFFxqnQJpjWQ">
							<img src="http://localhost/pz/wx/static/images/consumers/man.png" alt="" style="margin-bottom:0.5em;"><br />
							我的
						</a>
					</li>
				</ul>
			</nav>
		</footer>
	</section>
<script>
function nav_jump(obj){
	window.location.href = $(obj).attr('jump-url');
}
</script>	
</body>
</html>