<nav class="navbar navbar-default">
    <div class="navbar-header navbar-left">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <h1 class="peng_h1" style="font-family: 'SimHei';"><a class="navbar-brand" href="{{ route('index') }}"><i class="fa " aria-hidden="true"><img src="{{ URL::asset('img/home/viewfile.png') }}" alt=""></i>新高度信息科技</a></h1>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
        <nav class="link-effect-8" id="link-effect-8">
            <ul class="nav navbar-nav">
                <li @if ($nav == '1')class="active"@endif><a href="{{ route('index') }}">首页</a></li>
                <li @if ($nav == '2')class="active"@endif><a href="{{ route('services') }}">服务范围</a></li>
                <li @if ($nav == '3')class="active"@endif><a href="{{ route('projects') }}">客户案例</a></li>
                <li @if ($nav == '4')class="dropdown active"@else class="dropdown" @endif>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">资讯<b class="caret"></b></a>
                    <ul class="dropdown-menu agile_short_dropdown">
                        <li><a href="{{ route('icons') }}">公司资讯</a></li>
                        <li><a href="{{ route('typography') }}">行业资讯</a></li>
                    </ul>
                </li>
                <li @if ($nav == '5')class ="active" @endif><a href="{{ route('contact') }}">关于我们</a></li>
            </ul>
        </nav>
    </div>
</nav>
