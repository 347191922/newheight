
<!DOCTYPE html>
<html lang="en">
@include('home.layouts._header')
<body>
<!-- banner -->
	<div class="banner1">
		<div class="container">
			@include('home.layouts._nav')
		</div>
	</div>
<!-- //banner -->

	<!-- about-top -->
	<div class="agileits-about-top">
		<div class="container">
			<h3 class="w3ls_head"><span>What </span>we do? </h3>
			<p class="w3agile" style="font-size:16px;">新高度信息科技是“集成升级”的服务核心。用“强大的力量”来实践信念。专注于软件开发，提供准确全面的平台解决方案，独家定<br>制，只为您服务。
			</p>
			<div class="agileinfo-top-grids">
				<div class="col-sm-3 wthree-top-grid">
					<img src="{{ URL::asset('img/home/s1.png') }}" alt="" />
					<h4>网站建设</h4>
					<p>拥有专业的网站系统软件开发队伍，具有丰富的网站系统开发经验和新颖的创意水平。</p>
				</div>
				<div class="col-sm-3 wthree-top-grid">
					<img src="{{ URL::asset('img/home/s2.png') }}" alt="" />
					<h4>手机APP开发</h4>
					<p>积累了大量移动应用APP开发和APP外包经验，成功案例覆盖：移动办公OA、商城平台、信息管理、餐饮预订等。</p>
				</div>
				<div class="col-sm-3 wthree-top-grid">
					<img src="{{ URL::asset('img/home/s3.png') }}" alt="" />
					<h4>系统定制开发</h4>
					<p>为企业提供高端的软件定制服务，通过专业的软件定制流程来满足各大企业不同的软件需求</p>
				</div>
				<div class="col-sm-3 wthree-top-grid">
					<img src="{{ URL::asset('img/home/s7.png') }}" alt="" />
					<h4>微信平台开发</h4>
					<p>专注于微信公众号开发,专业的微信公众号开发。根据您的需求量身定制开发！</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about-top -->
	<!--  about-middle-->
	<div style="width:55%;margin:0 auto;">
		<img src="{{ URL::asset('img/home/s1_02_01.png') }}" alt="" style="width:100%">
		<img src="{{ URL::asset('img/home/s1_02_02.png') }}" alt="" style="width:100%">
		<img src="{{ URL::asset('img/home/s1_02_03.png') }}" alt="" style="width:100%">
		<img src="{{ URL::asset('img/home/s1_02_04.png') }}" alt="" style="width:100%">
	</div>
	<!-- // about-middle-->
	<!-- services -->
	<div class="services" id="services">
		<div class="container">
			<h2 class="w3ls_head"><span>Our </span>Products</h2>
			<p class="w3agile" style="font-size:16px;">我们秉承“用户至上”的原则，将用户需求抱在首位。我们始终坚持不断创新、不断突破，全新全意做好产品的开发与用户的极限体验。
			<br>从创始至今，我们的业务方向始终不变，专注做好一件事才能更好的追求高品质，这也是我们存在的价值。</p>
			<div class="wthree-services-grids">
				<div class="col-sm-3 wthree-services">
					<div class="wthree-services-grid">
						<div class="wthree-services-info">
							<i class="fa" aria-hidden="true"><img src="{{ URL::asset('img/home/ser_icon01.png') }}" alt="" style="width:100%;height:100%;"></i>
							<h4>移动电商</h4>
							<div class="w3ls-border"> </div>
						</div>
						<div class="wthree-services-captn">
							<h4>移动电商</h4>
							<p>电子商务行业解决方案中规划的app应用核心产品能够帮助商家快速占有市场，通过良好的用户体验以及清晰的产品定位设计...</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 wthree-services">
					<div class="wthree-services-grid">
						<div class="wthree-services-info">
							<i class="fa" aria-hidden="true"><img src="{{ URL::asset('img/home/ser_icon02.png') }}" alt="" style="width:100%;height:100%;"></i>
							<h4>移动社区</h4>
							<div class="w3ls-border"> </div>
						</div>
						<div class="wthree-services-captn">
							<h4>移动社区</h4>
							<p>基于对社区服务的深度理解和分析，为客户提供整套的智慧社区解决方案。智慧社区"是一款深度构建化定制的社区服务平台..</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 wthree-services">
					<div class="wthree-services-grid">
						<div class="wthree-services-info">
							<i class="fa" aria-hidden="true"><img src="{{ URL::asset('img/home/ser_icon03.png') }}" alt="" style="width:100%;height:100%;"></i>
							<h4>移动金融</h4>
							<div class="w3ls-border"> </div>
						</div>
						<div class="wthree-services-captn">
							<h4>移动金融</h4>
							<p>P2P金融行业解决方案在移动信息化领域的技术优势，凭借对金融证券行业的深刻理解，"英加诺科技"为客户提供稳定、高效...</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 wthree-services">
					<div class="wthree-services-grid">
						<div class="wthree-services-info">
							<i class="fa" aria-hidden="true"><img src="{{ URL::asset('img/home/ser_icon04.png') }}" alt="" style="width:100%;height:100%;"></i>
							<h4>企业分销</h4>
							<div class="w3ls-border"> </div>
						</div>
						<div class="wthree-services-captn">
							<h4>企业分销</h4>
							<p>针对企业营销过程中的弊端和痛点，英加诺提供一套移动分销解决方案，通过移动互联网对企业分销渠道中的各级经销单位进行高效管理...</p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->
<!-- footer -->
@include('home.layouts._footer')
</body>
</html>