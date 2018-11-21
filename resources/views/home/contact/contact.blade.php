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
<!-- contact -->
	<div class="contact">
		<div class="container">
			<h2 class="w3ls_head"><span>公司简介</span></h2>
			<p class="w3agile" style="font-size:16px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp青岛新高度信息科技有限公司。我们是中国创新性技术服务提供商，是创业者的最佳技术外援。向多家企事业单位提供过互联网服务。作为企业移动互联网软件第一品牌，我们秉承“用户至上”的原则，将用户需求抱在首位。
				<br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp我们始终坚持不断创新、不断突破，始终保持产品第一、技术第一、服务第一的行业领先地位，全新全意做好产品的开发与用户的极限体验。从创始至今，我们的业务方向始终不变，专注做好一件事才能更好的追求高品质，这也是我们存在的价值。在未来我们也是基于此信念而继续创造。</p>
			<div class="map-grid">
					<img src="{{URL::asset('img/home/about_b.jpg')}}" alt="加载失败">
			</div>
			<div class="address" id="address">
				<div class="col-sm-4 address-grids">
					<h4>地址 :</h4>
					<p>青岛市  市北区  瑞海北路17号<br>
						<span></span>
					</p>	
				</div>
				<div class="col-sm-4 address-grids">
					<h4>联系方式 :</h4>
					<p>66886007</p>
				</div>
				<div class="col-sm-4 address-grids">
					<h4>Email :</h4>
					<p><a href="mailto:example@email.com">ads1973@126.com</a></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="contact-form">
				<h4>联系我们</h4>
				<div class="contact-form-grid">
					<form action="contact/add_info" method="post">
						<div class="fields-grid">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="user_name" required="">
								<label>姓名</label>
								<span></span>
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="user_mobile" required="">
								<label>手机号</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" name="user_email" required="">
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="text" name="company_address" required="">
								<label>公司名称</label>
								<span></span>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="styled-input textarea-grid">
							<textarea name="stay_speak" required=""></textarea>
							<label>留言</label>
							<span></span>
						</div>	 
						<input type="submit" value="提交">
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //contact -->

@include('home.layouts._footer')
</body>
</html>