<html>
@include('home.layouts._header')
<body>
<!-- banner -->
	<div class="banner">
		<div class="container">
			@include('home.layouts._nav')

			<div class="w3_agile_banner_info">
				<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<div class="agileits_w3layouts_banner_info">
										<p>App跨平台开发</p>
										<h3>
											实现定制开发<br>
											极致的页面交互体验

										</h3>
									</div>
								</li>
								<li>
									<div class="agileits_w3layouts_banner_info">
										<p>企业移动平台</p>
										<h3>最新的移动互联网+平台<br>
											HTML5+CSS3主流技术</h3>
									</div>
								</li>
								<li>
									<div class="agileits_w3layouts_banner_info">
										<p>企业商城</p>
										<h3>兼容安卓、IOS、平板、Windows Phone</h3>
									</div>
								</li>
								<li>
									<div class="agileits_w3layouts_banner_info">
										<p>定制服务</p>
										<h3>实现定制开发 <br>自由扩展、安全可靠</h3>
									</div>
								</li>
							</ul>
						</div>
				</section>
			<!-- flexSlider -->
				<script defer src="{{ URL::asset('js/home/jquery.flexslider.js') }}"></script>
				<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				</script>
			<!-- //flexSlider -->
				
			</div>
			<div class="agile_banner_social">
				<ul class="agileits_social_list">
					<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
<!-- //banner -->	
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
		<h2 class="w3ls_head"><span>APP移动平台技术</span><br>  快速流畅</h2>
			<p class="w3agile" style="font-size: 16px;">全国6000家企业客户、3000万用户正在使用，是一个专业、稳定的动APP开发移平台技术</p>
			<div class="wel-ind">
				<div class="col-md-6 agileits_banner_bottom_right">
					<div class="w3ls_banner_bottom_right">
						<img src="{{ URL::asset('img/home/timg.jpg') }}" alt=" " class="img-responsive" />
						<div class="w3ls_banner_bottom_right_pos">
							<img src="{{ URL::asset('img/home/e4338726ef358e6b7b1eecaf39dd1d6c.jpg') }}" alt=" " class="img-responsive" />
						</div>
					</div>
				</div>
				<div class="col-md-6 agileits_banner_bottom_left">
				<h4>移动云平台</h4>
				<p>采用云计算、大数据技术和分布式架构 <br>
					百万级云平台运营能力  <br>
					云、管、端完整的移动安全体系  <br>  
					轻松构建企业私有的“PaaS+SaaS”云平台</p>
					<div class="w3l_social_icons">
						<div class="w3l_social_icon_grid">
							<div class="w3l_social_icon_gridl w3_facebook">
								<a href="#">
									<i class="fa peng_fa" aria-hidden="true">Android</i>
								</a>
							</div>
							<div class="w3l_social_icon_gridr">
								<h5 class="counter">23,536</h5>
							</div>
							<div class="clearfix"> </div>
							<div class="w3l_social_icon_grid_pos">
								<label>-</label>
							</div>
						</div>
						<div class="w3l_social_icon_grid w3ls_social_icon_grid">
							<div class="w3l_social_icon_gridl w3_dribbble">
								<a href="#">
									<i class="fa peng_fa" aria-hidden="true">Ios</i>
								</a>
							</div>
							<div class="w3l_social_icon_gridr">
								<h5 class="counter">13,676</h5>
							</div>
							<div class="clearfix"> </div>
							<div class="w3l_social_icon_grid_pos">
								<label>-</label>
							</div>
						</div>
						<div class="w3l_social_icon_grid">
							<div class="w3l_social_icon_gridl w3_instagram">
								<a href="#">
									<i class="fa peng_fa" aria-hidden="true">PC</i>
								</a>
							</div>
							<div class="w3l_social_icon_gridr">
								<h5 class="counter">45,342</h5>
							</div>
							<div class="clearfix"> </div>
							<div class="w3l_social_icon_grid_pos">
								<label>-</label>
							</div>
						</div>
					</div>
				</div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- Stats -->
	<script src="{{ URL::asset('js/home/waypoints.min.js') }}"></script>
	<script src="{{ URL::asset('js/home/counterup.min.js') }}"></script>
	<script>
		jQuery(document).ready(function( $ ) {
			$('.counter').counterUp({
				delay: 10,
				time: 2000
			});
		});
	</script>
<!-- //Stats -->
<!-- skills -->
	<div class="skills">
		<div class="container">
			<h3 class="w3ls_head"><span>业务范围 </span></h3>
			<p class="w3agile" style="font-size: 16px;">我们能做的远超出您的想象，专注软件开发、提供最专业的企业移动化解决方案、企业平台独家定制、网站SEO优化 <br>为您解决一切烦恼！</p>
			<div class="w3layouts_skills_grids">
				<div class="col-md-3 w3ls_about_guage">
					<img src="{{ URL::asset('img/home/website.png') }}" alt="">
					<h4>网站建设</h4>
				</div>
				<div class="col-md-3 w3ls_about_guage">
					<img src="{{ URL::asset('img/home/app.png') }}" alt="">
					<h4>手机APP开发</h4>
				</div>
				<div class="col-md-3 w3ls_about_guage">
					<img src="{{ url::asset('img/home/dingzhi.png') }}" alt="">
					<h4>系统定制开发</h4>
				</div>
				<div class="col-md-3 w3ls_about_guage">
					<img src="{{ URL::asset('img/home/weixin.png') }}" alt="">
					<h4>微信平台开发</h4>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //skills -->
<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<h3 class="w3ls_head"><span>优秀作品</span></h3>
			<p class="w3agile" style="font-size: 16px;">定制平台会提供专业的需求顾问，帮助需求方梳理需求、输出评估方案，帮您把想法落地</p>
				
			<div class="w3ls_testimonials_grids">
				 <section class="center slider">
						<div class="agileits_testimonial_grid">
							<div class="w3l_testimonial_grid">
								<p>“爱安吉”作为“智慧美丽乡村”的智慧窗口，全方位整合新闻信息、交通旅游、生活娱乐、医疗教育、社会人力、安全监察、农业房产、政务金融</p>
								<h4>爱安吉</h4>
								<h5>Love Anji</h5>
								<div class="w3l_testimonial_grid_pos">
									<img src="{{ URL::asset('img/home/20170324104936439.png') }}" alt=" " class="img-responsive" />
								</div>
							</div>
						</div>
						<div class="agileits_testimonial_grid">
							<div class="w3l_testimonial_grid">
								<p>人人爱跑腿，跑腿为人人。 <br>
									－“爱跑腿”是由新高度信息有限公司倾力打造的一款O2O同城跑腿应用，结合线上销售线下跑腿，实现从面到点的跑腿服务。</p>
								<h4>爱跑腿</h4>
								<h5>Love running</h5>
								<div class="w3l_testimonial_grid_pos">
									<img src="{{ URL::asset('img/home/100x100bb.jpg') }}" alt=" " class="img-responsive" />
								</div>
							</div>
						</div>
						<div class="agileits_testimonial_grid">
							<div class="w3l_testimonial_grid">
								<p>水果生鲜外卖 <br>
								为大家带来了海量水果商城软件，在这里你可以随时购买你所需要的水果，而且都有质量保证，让你随时吃到最新鲜的水果哟。</p>
								<h4>点呀点</h4>
								<h5>Point</h5>
								<div class="w3l_testimonial_grid_pos">
									<img src="{{ URL::asset('img/home/100x100bb%20(1).jpg') }}" alt=" " class="img-responsive" />
								</div>
							</div>
						</div>
				</section>
			</div>
		</div>
	</div>
<!-- //testimonials -->
<!-- what -->
<div class="what-w3ls">
	<div class="container">
		<h3 class="w3ls_head"><span>关于我们 </span></h3>
		<p class="w3agile" style="font-size: 16px;">青岛新高度信息科技有限公司以“整合升级”为服务核心<br>
			以“力挺新鲜”为实践信仰<br>
			专注软件开发，提供精准全面的平台解决方案,独家定制，只为你<br>
			案不在多有“鲜”则名，意不在深有“心”则灵，我们只用效果说话，精益求精<br>
			期待您加入和我们深入交流</p>

	</div>
</div>
<!-- //what -->	
@include('home.layouts._footer')

<!-- carousal -->
	<script src="{{ URL::asset('js/home/slick.js') }}" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		$(document).on('ready', function() {
		  $(".center").slick({
			dots: true,
			infinite: true,
			centerMode: true,
			slidesToShow: 2,
			slidesToScroll: 2,
			responsive: [
				{
				  breakpoint: 768,
				  settings: {
					arrows: true,
					centerMode: false,
					slidesToShow: 2
				  }
				},
				{
				  breakpoint: 480,
				  settings: {
					arrows: true,
					centerMode: false,
					centerPadding: '40px',
					slidesToShow: 1
				  }
				}
			 ]
		  });
		});
	</script>
<!-- //carousal -->
<!-- gauge-meter -->
	<script src="{{ URL::asset('js/home/jquery.gauge.js') }}"></script>
	<script>
		$(document).ready(function (){
			$("#gauge1").gauge(30,{color: "#fb5710",unit: " %",type: "halfcircle"});
			$("#gauge2").gauge(70, {color: "#a821e7", unit: " %",type: "halfcircle"});
			$("#gauge3").gauge(75, {color: "#fbb810",unit: " %",type: "halfcircle"});
			$("#gauge4").gauge(90, {color: "#21d0e7",unit: " %",type: "halfcircle"});
		});
	</script>
<!-- //gauge-meter -->

</body>
</html>