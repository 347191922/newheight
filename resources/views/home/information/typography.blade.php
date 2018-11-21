
<!DOCTYPE html>
<html lang="en">
<head>
@include('home.layouts._header')
	<style>
	.clearfix:after{
		content: '';
		height: 0;
		clear: both;
		display: block;
		visibility: hidden;
		zoom: 1;
	}
	.footer {
		background-size: cover;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		-ms-background-size: cover;
		background-attachment: fixed;
		padding: 5em 0;
	}
	.right_top{
		color: #F60;
		font-family: "微软雅黑";
		font-size: 20px;
		font-weight: normal;
	}
	.right_top{
		font-size: 18px;
		font-weight: normal;
	}
	.new_right_main li{
		width:100%;
		text-overflow:ellipsis;
		overflow : hidden;
		margin: 0.3rem 0;
	}
	.new_chirld{
		padding-bottom: 1.5rem;
		border-bottom: 1px double #868585;;
	}
	#updatep div p{ text-align: center;}

	li{list-style: none;}
	.new_main,.new_chirld{width:100%;height:auto;}
	.new_left{width:30%;float:left;}
	.new_left img{width:100%;}
	.new_right{width:70%;float:right;}
	.new_right ul{width:80%;margin: 0 auto;}
	.pstyle{text-align:left;width:100%;font-size: 36px;font-weight: 600;padding-bottom: 30px;letter-spacing: 4px;text-transform: uppercase;border-bottom: 0.3rem solid #0b1127;}
	@media only screen
	and (max-device-width :768px){
		.new_left{width:100%;}
		.new_right{width:100%;}
	}
	
	@media  screen and
	 (max-width :768px){
		.new_left{width:100%;}
		.new_right{width:100%;margin-top:1rem;}
		.new_right li{width:100%;margin:0.2rem 0;}
	}                                                                                                                                                                                                                        
	</style>
<body>
<!-- banner -->
	<div class="banner1">
		<div class="container">
			@include('home.layouts._nav')
		</div>
	</div>
<!-- //banner -->
<!-- projects -->
<div class="w3_wthree_agileits_icons main-grid-border" style="padding: 2em 0;">
	<div class="container">
	<h2 class="pstyle" style=""><span>News 行内资讯</span><span style="float:right;line-height: 38px;font-size:16px;color: #787878;margin:1% 10% 0 0;">最热资讯</span></h2>
		{volist name="list" id='vo'}
			<div class="grid_3 grid_4 w3_agileits_icons_page">
				<ul class="new_main">
					<li class="new_chirld clearfix">
						<div class="new_left">
						<img src="{:HOME_IMAGES}{$vo.icons_image}" alt="123" class="img_left">
						</div>
						<div class="new_right clearfix">
							<ul class="new_right_main">
								<li class="right_top">
									{$vo.icons_title}
								</li>
								<li class="right_middle">
									{$vo.icons_body}
								</li>
								<li class="right_bottom">
									搜索关键词<span>：{$vo.key_word}  </span>
								</li>
								<li class="right_bottomb">
									文章来源<span>：{$vo.icons_source}</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp发布时间：<span>{$vo.create_time}</span>
								</li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		{/volist}
	</div>	
</div>
<!-- //projects -->
@include('home.layouts._footer')
</body>
</html>