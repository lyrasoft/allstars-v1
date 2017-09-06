<!DOCTYPE html>
<html lang="en">
<head>
    @if ($config['home'])
        <title>{{ $config['project.name'] }}</title>
    @else
        <title>{{ $config['title'] }} | {{ $config['project.name'] }}</title>
    @endif
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{ $uri['media'] }}img/favicon.png" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Webmaster --}}
    <meta name="google-site-verification" content="1NaipXHnmybBR6bCDLktFnHX8s-5HAbm8kWAitMh8-4" />

    <meta name="description" content="{{ $config['meta.desc'] }}" />
    <meta property="og:image" content="{{ $config['meta.image'] }}"/>
    <meta property="og:title" content="{{ $config['home'] ? $config['project.name'] : $config['title'] . '|' . $config['project.name'] }}"/>
    <meta property="og:site_name" content="{{ $config['project.name'] }}"/>
    <meta property="og:description" content="{{ $config['meta.desc'] }}"/>

    <!--bootstrap css-->
    <link href="{{ $uri['media'] }}bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--custom css-->
    <link href="{{ $uri['media'] }}css/style.css" rel="stylesheet" type="text/css">
    <!--flex slider css-->
    <link href="{{ $uri['media'] }}css/flexslider.css" rel="stylesheet">
    <!--google web fonts css-->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,800' rel='stylesheet' type='text/css'>

    <!-- icons css-->
    <link href="{{ $uri['media'] }}font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!--animated css-->
    <link href="{{ $uri['media'] }}css/animate.css" rel="stylesheet">
    <!--owl carousel css-->
    <link href="{{ $uri['media'] }}css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ $uri['media'] }}css/owl.theme.css" rel="stylesheet" type="text/css" media="screen">
    <!--Revolution slider css-->
    <link href="{{ $uri['media'] }}rs-plugin/css/settings.css" rel="stylesheet" type="text/css" media="screen">

    <link href="{{ $uri['media'] }}css/silicone.min.css" rel="stylesheet" type="text/css">
    <link href="{{ $uri['media'] }}css/main.css" rel="stylesheet" type="text/css">

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="{{ $uri['media'] }}js/respond.min.js"></script>
    <![endif]-->
</head>
<body data-spy="scroll" data-target="#navigation" data-offset="80" class="{{ $config['home'] ? 'home' : 'not-home' }}">
<section id="navigation" class="{{ $config['home'] ? 'fixed-navigation' : '' }}">
    <div class="navbar navbar-default navbar-static-top navbar-transparent" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ $uri['base'] }}">
                    <img class="logo-img" style="margin-top: -28px;" src="{{ $uri['media'] }}img/global/logo-horz.png" alt="LOGO">
                </a>
            </div>
            <div class="navbar-collapse collapse">

                <ul class="nav navbar-nav navbar-right scrollto">
                    <li><a href="{{ $config['landing'] ? '' : $uri['base'] }}#home">首頁</a></li>
                    <li><a href="{{ $config['landing'] ? '' : $uri['base'] }}#about">關於我們</a></li>
                    <li><a href="{{ $config['landing'] ? '' : $uri['base'] }}#services">功能特色</a></li>
                    <li><a href="{{ $config['landing'] ? '' : $uri['base'] }}#pricing">網站方案</a></li>
                    <li class="dropdown">
                        <span data-toggle="dropdown" class="dropdown-toggle js-activated">方案細節 <b class="caret"></b></span>
                        <ul class="dropdown-menu">
                            <li><a href="{{ $uri['base'] }}plans/all.html">方案比較</a></li>
                            <li><a href="{{ $uri['base'] }}plans/a.html">A 微型企業啟動方案</a></li>
                            <li><a href="{{ $uri['base'] }}plans/b.html">B 中小企業形象方案</a></li>
                            <li><a href="{{ $uri['base'] }}plans/c.html">C 多功能國際化方案</a></li>
                            <li><a href="{{ $uri['base'] }}plans/d.html">D 旗艦級客製化方案</a></li>
                            <li><a href="{{ $uri['base'] }}cart.html">Joomla! 購物車方案</a></li>
                        </ul>
                    </li>
                    <li><a href="http://orion.the-allstars.com" target="_blank">系統整合服務</a></li>
                    <li><a href="{{ $config['landing'] ? '' : $uri['base'] }}#work">成功案例</a></li>
                    <li><a href="{{ $config['landing'] ? '' : $uri['base'] }}#contact">聯絡我們</a></li>
                </ul>

            </div><!--/.nav-collapse -->
        </div><!--/.container -->
    </div>
</section><!--navigation section end here-->

@section('body')
    {!! $content !!}
@show

@include('home.contact-2')

<section id="footer" class="padding-80">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 copyright">
                <span>&copy;{{ gmdate('Y') }}. Allstars. All right reserved</span>
            </div>
            <div class="col-md-6 col-sm-6 footer-nav">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    {{--<li><a href="blog-list.html">Latest news</a></li>--}}
                    {{--<li><a href="typography.html">Typography</a></li>--}}
                </ul>
            </div>
        </div>
    </div>
</section><!--footer end-->
<!--back to top-->
<a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
<!--back to top end-->

<!--script files-->
<script src="{{ $uri['media'] }}js/jquery.min.js" type="text/javascript"></script>
<script src="{{ $uri['media'] }}js/moderniz.min.js" type="text/javascript"></script>
<script src="{{ $uri['media'] }}js/jquery-migrate.min.js" type="text/javascript"></script>
<script src="{{ $uri['media'] }}js/jquery.easing.1.3.min.js" type="text/javascript"></script>
<script src="{{ $uri['media'] }}bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{ $uri['media'] }}js/jquery.flexslider-min.js" type="text/javascript"></script>
<script src="{{ $uri['media'] }}js/wow.min.js" type="text/javascript"></script>
<script src="{{ $uri['media'] }}js/jquery.sticky.js" type="text/javascript"></script>
<script src="{{ $uri['media'] }}js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="{{ $uri['media'] }}js/jquery.stellar.min.js" type="text/javascript"></script>
<script src="{{ $uri['media'] }}js/owl.carousel.min.js" type="text/javascript"></script>
<script src="{{ $uri['media'] }}js/jquery.mb.YTPlayer.min.js" type="text/javascript"></script>
<script src="{{ $uri['media'] }}js/waypoints.min.js"></script>
<script src="{{ $uri['media'] }}js/easypiechart.js"></script>
<script src="{{ $uri['media'] }}js/jquery.isotope.min.js" type="text/javascript"></script>
<!--image loads plugin -->
<script src="{{ $uri['media'] }}js/jquery.imagesloaded.min.js" type="text/javascript"></script>
<script src="{{ $uri['media'] }}js/jquery.counterup.min.js" type="text/javascript"></script>
<script src="{{ $uri['media'] }}js/jquery.countdown.js" type="text/javascript"></script>
<script src="{{ $uri['media'] }}js/contact_me.js" type="text/javascript"></script>
<script src="{{ $uri['media'] }}js/jqBootstrapValidation.js" type="text/javascript"></script>
<script src="{{ $uri['media'] }}js/custom.js" type="text/javascript"></script>
<!--revolution slider plugins-->
<script src="{{ $uri['media'] }}rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
<script src="{{ $uri['media'] }}rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
<script src="{{ $uri['media'] }}js/revolution-custom.js" type="text/javascript"></script>
<script src="{{ $uri['media'] }}js/isotope-custom.js" type="text/javascript"></script>
<script src="{{ $uri['media'] }}js/pace.min.js" type="text/javascript"></script>

@yield('script')

<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-90546985-1', 'auto');
	ga('send', 'pageview');

</script>

</body>
</html>
