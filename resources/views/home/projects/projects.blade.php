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
<!-- projects -->
	<div class="gallery-grids">
		<div class="container">
		<h2 class="w3ls_head"><span>客户案例</span></h2>
			<p class="w3agile" style="font-size:16px;">只为生产精品品牌，是对我们实力的肯定!</p>
			<div class="show-reel tel-prj">
				{volist name="list" id="vo"}
				<div class="col-md-3 agile-gallery-grid">
					<div class="agile-gallery">
						<a href="{:HOME_IMAGES}{$vo.case_image}" class="lsb-preview" data-lsb-group="header">
							<img src="{:HOME_IMAGES}{$vo.case_image}" alt="" />
							<div class="agileits-caption">
								<h4>{$vo.case_title}</h4>
								<p>{$vo.case_body}</p>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="show-reel tel-prj-1">

				{/volist}
				<div class="clearfix"> </div>
			</div>
	
				<div class="clearfix"> </div>
			</div>
			<script>
				$(window).load(function() {
				  $.fn.lightspeedBox();
				});

			</script>
		</div>
	</div>
	<!-- //projects -->

@include('home.layouts._footer')
<!-- lightspeedBox -->
	{{--<script src="{:HOME_STYLE}index/js/lsb.js"></script>--}}
<!-- //lightspeedBox -->
</body>
</html>