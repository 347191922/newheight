<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="w3ls_address_mail_footer_grids" id="updatep">
            <div class="col-md-4 w3ls_footer_grid_left">
                {{--<p style="font-size:16px;"><a href="{{ route('icons') }}"> 公司资讯</a></p>--}}
                <p style="font-size:16px;"><a href=""> 关于我们</a></p>
                <p><a href="{{ route('contact') }}"> 在线留言</a></p>
                <p><a href="{{ route('contact') }}"> 联系我们</a></p>
            </div>
            <div class="col-md-4 w3ls_footer_grid_left">
                <p style="font-size:16px;"><a href="{{ route('services') }}">服务范围</a></p>
                <p><a href="{{ route('services') }}">商城类App开发</a></p>
                <p><a href="{{ route('services') }}">社交类App开发</a></p>
                <p><a href="{{ route('services') }}">办公类App开发</a></p>
            </div>
            <div class="col-md-4 w3ls_footer_grid_left">
                <p style="font-size:16px;"><a href="#">资讯</a></p>
                <p><a href="{{ route('icons') }}">公司资讯</a></p>
                <p><a href="{{ route('typography') }}">行业资讯</a></p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="agileinfo_copyright">
            <p>Copyright &copy; 2014  青岛新高度信息科技有限公司&nbsp&nbsp版权所有</p>
        </div>
    </div>
</div>
<!-- //footer -->
<script type="text/javascript" src="{{ URL::asset('js/home/move-top.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/home/easing.js') }}"></script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->

<!-- for bootstrap working -->
<script src="{{ URL::asset('js/home/bootstrap.js') }}"></script>
<!-- //for bootstrap working -->