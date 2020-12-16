<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->



<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<head>

<title>Opulent a Personal Category Flat Bootstrap Responsive Website Template | Home :: W3layouts</title>

<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Opulent a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<!-- Custom-Stylesheet-Links -->
<!-- Bootstrap-CSS --> 	<link rel="stylesheet" href="{{asset('midEnd/css/bootstrap.min.css')}}"		type="text/css" media="all">
<!-- Index-Page-CSS --> <link rel="stylesheet" href="{{asset('midEnd/css/style.css')}}" 			type="text/css" media="all">
<!-- FontAwesome-CSS --><link rel="stylesheet" href="{{asset('midEnd/css/font-awesome.min.css')}}"	type="text/css" media="all">
<!-- PopUp-Box-CSS -->	<link rel="stylesheet" href="{{asset('midEnd/css/chocolat.css')}}"			type="text/css" media="all">
<!-- OwlCarousel-CSS --><link rel="stylesheet" href="{{asset('midEnd/css/owl.carousel.css')}}"		type="text/css" media="all">
<!-- //Custom-Stylesheet-Links -->

<!-- Fonts -->
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700" 				type="text/css" media="all">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900"	type="text/css" media="all">
<!-- //Fonts -->

</head>
<!-- //Head -->


<!-- Body -->
<body>

<!-- Header -->
<div class="header">
		<!-- Navigation -->
	<div class="navigation">	
		<div class="container">
				<div class="ch-grid">
					<div class="col-md-3 nav-grid nav-grid1">
						<div class="ch-item ch-img-3">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-1"><i class="fa fa-file-text-o" aria-hidden="true"></i></div>
									<div class="ch-info-back">
										<h3><a class="scroll" href="/index/pendaftaran/create">ISI BIO DATA</a></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					@if($biodatas->nm_depan)
					<div class="col-md-3 nav-grid nav-grid1">
						<div class="ch-item ch-img-1">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-1"><i class="fa fa-male" aria-hidden="true"></i></div>
									<div class="ch-info-back">
										<h3><a class="scroll" href="/home/biodata/index">LIHAT DATA</a></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endif
					<div class="col-md-3 nav-grid nav-grid4">
						<div class="ch-item ch-img-4">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-1"><i class="fa fa-print" aria-hidden="true"></i></div>
									<div class="ch-info-back">
										<h3><a class="scroll" href="/home/biodata/view">CETAK KARTU</a></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 nav-grid nav-grid4">
						<div class="ch-item ch-img-4">
							<div class="ch-info-wrap">
								<div class=""><i class="" aria-hidden="false"></i></div>
								<div class="ch-info-back">
									<h3><a class="scroll" href="/logout">Logout</a></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			<div class="clearfix"></div>
		</div>				
	</div>
	<img src="{{asset('midEnd/images/computers.png')}}" alt="Opulent">				
</div>
		<!-- Default-JavaScript --> <script type="text/javascript" src="{{asset('midEnd/js/jquery-2.1.4.min.js')}}"></script>
		<!-- Bootstrap-JavaScript --> <script type="text/javascript" src="{{asset('midEnd/js/bootstrap.min.js')}}"></script>

		<!-- Horizontal-Tabs-JavaScript -->
			<script src="{{asset('midEnd/js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab').easyResponsiveTabs({
						type: 'default',
						width: 'auto',
						fit: true,
					});
				});
			</script>
		<!-- Horizontal-Tabs-JavaScript -->

		<!-- Stats-Number-Scroller-Animation-JavaScript -->
			<script src="js/waypoints.min.js"></script> 
			<script src="js/counterup.min.js"></script> 
			<script>
				jQuery(document).ready(function( $ ) {
					$('.counter').counterUp({
						delay: 10,
						time: 1000,
					});
				});
			</script>
		<!-- //Stats-Number-Scroller-Animation-JavaScript -->

		<!-- Progressive-Bars-JavaScript -->
		<script src="js/bars.js"></script>
		<!-- //Progressive-Bars-JavaScript -->

		<!-- Show-More-JavaScript -->
			<script>
				$(document).ready(function () {
					size_li = $("#myList li").size();
					x=1;
					$('#myList li:lt('+x+')').show();
					$('#loadMore').click(function () {
						x= (x+1 <= size_li) ? x+1 : size_li;
						$('#myList li:lt('+x+')').show();
					});
					$('#showLess').click(function () {
						x=(x-1<0) ? 1 : x-1;
						$('#myList li').not(':lt('+x+')').hide();
					});
				});
			</script>
		<!-- Show-More-JavaScript -->

		<!-- Tabs-JavaScript -->
			<script src="{{asset('midEnd/js/jquery.filterizr.js')}}"></script>
			<script src="{{asset('midEnd/js/controls.js')}}"></script>
			<script type="text/javascript">
				$(function() {
					$('.filtr-container').filterizr();
				});
			</script>
		<!-- //Tabs-JavaScript -->

		<!-- PopUp-Box-JavaScript -->
			<script src="{{asset('midEnd/js/jquery.chocolat.js')}}"></script>
			<script type="text/javascript">
				$(function() {
					$('.filtr-item a').Chocolat();
				});
			</script>
		<!-- //PopUp-Box-JavaScript -->

		<!-- Owl-Carousel-JavaScript -->
			<script src="{{asset('midEnd/js/owl.carousel.js')}}"></script>
			<script>
				$(document).ready(function() {
					$("#owl-demo").owlCarousel ({
						items : 8,
						lazyLoad : true,
						autoPlay : true,
						speed: 900,
						pagination : false,
					});
				});
			</script>
		<!-- //Owl-Carousel-JavaScript -->

		<!-- Slide-To-Top JavaScript -->
			<script type="text/javascript">
				$(document).ready(function() {
					var defaults = {
						containerID: 'toTop',
						containerHoverID: 'toTopHover',
						scrollSpeed: 100,
						easingType: 'linear',
					};
					$().UItoTop({ easingType: 'easeOutQuart' });
				});
			</script>
			<a href="#" id="toTop" class="stuoyal3w stieliga" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
		<!-- //Slide-To-Top JavaScript -->

		<!-- Smooth-Scrolling-JavaScript -->
			<script type="text/javascript" src="{{asset('midEnd/js/move-top.js')}}"></script>
			<script type="text/javascript" src="{{asset('midEnd/js/easing.js')}}"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
		<!-- //Smooth-Scrolling-JavaScript -->

	<!-- //Custom-JavaScript-File-Links -->
</body>
<!-- //Body -->
</html>