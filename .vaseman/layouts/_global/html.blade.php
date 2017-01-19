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
<body data-spy="scroll" data-target="#navigation" data-offset="80">
<section id="navigation" class="fixed-navigation">
    <div class="navbar navbar-default navbar-static-top navbar-transparent" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ $uri['base'] }}">Allstars</a>
            </div>
            <div class="navbar-collapse collapse">

                <ul class="nav navbar-nav navbar-right scrollto">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#work">Work</a></li>

                    <li class="dropdown">
                        <span data-toggle="dropdown" class="dropdown-toggle js-activated">Pages <b class="caret"></b></span>
                        <ul class="dropdown-menu">
                            <li><a href="blog-list.html">Blog List</a></li>
                            <li><a href="blog-post.html">Blog Post</a></li>
                            <li><a href="portfolio-3.html">Portfolio 3 columns</a></li>
                            <li><a href="portfolio-full.html">Portfolio Full width</a></li>
                            <li><a href="portfolio-masonry.html">Portfolio Masonry</a></li>
                            <li><a href="single-work.html">Portfolio Single</a></li>
                            <li><a href="soon.html">Coming Soon</a></li>
                            <li class="dropdown-submenu">
                                <a tabindex="-1" href="#">Third level Menu</a>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="-1" href="#">Second level</a></li>
                                    <li class="dropdown-submenu">
                                        <a href="#">Even More..</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">3rd level</a></li>
                                            <li><a href="#">3rd level</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Second level</a></li>
                                    <li><a href="#">Second level</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown">
                        <span data-toggle="dropdown" class="dropdown-toggle js-activated">Demos <b class="caret"></b></span>
                        <ul class="dropdown-menu">
                            <li><a href="demo-default.html">Slider revolution</a></li>
                            <li><a href="video-slider.html">Slider Video</a></li>
                            <li><a href="fullscreen-parallax-bg-demo.html">Full screen parallax</a></li>
                            <li><a href="demo-video-bg.html">Video background</a></li>

                            <li><a href="transparent-header-demo.html">Header transparent</a></li>
                            <li><a href="soon.html">Coming Soon</a></li>
                            <li><a href="fullscreen-nav.html">Full screen menu</a></li>
                        </ul>
                    </li>

                </ul>

            </div><!--/.nav-collapse -->
        </div><!--/.container -->
    </div>
</section><!--navigation section end here-->

@section('body')
    {!! $content !!}
@show

<section id="footer" class="padding-80">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 copyright">
                <span>&copy;2014.Design_mylife. All right reserved</span>
            </div>
            <div class="col-md-6 col-sm-6 footer-nav">
                <ul class="list-inline">
                    <li><a href="demo-default.html">Home</a></li>
                    <li><a href="blog-list.html">Latest news</a></li>
                    <li><a href="typography.html">Typography</a></li>
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
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
<script type="text/javascript">
	var myLatlng;
	var map;
	var marker;

	function initialize() {
		myLatlng = new google.maps.LatLng(37.397802, -121.890288);

		var mapOptions = {
			zoom: 13,
			center: myLatlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			scrollwheel: false,
			draggable: false
		};
		map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

		var contentString = '<p>123 My Street, Codeon City, CA 4567</p>';

		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});

		marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			title: 'Marker'
		});

		google.maps.event.addListener(marker, 'click', function () {
			infowindow.open(map, marker);
		});
	}

	google.maps.event.addDomListener(window, 'load', initialize);
</script>


</body>
</html>
