	<script type="text/javascript" src="{{asset('frondEnd/js/jquery-2.1.4.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frondEnd/js/bootstrap.js')}}"></script>
	<!-- //Default-JavaScript-File -->

	<!-- Responsive tabs for coachhes section -->
	<script src="{{asset('frondEnd/js/easy-responsive-tabs.js')}}"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion           
			width: 'auto', //auto or any width like 600px
			fit: true,   // 100% fit in a container
			closed: 'accordion', // Start closed if in accordion view
			activate: function(event) { // Callback function if tab is switched
			var $tab = $(this);
			var $info = $('#tabInfo');
			var $name = $('span', $info);
			$name.text($tab.text());
			$info.show();
			}
			});
			$('#verticalTab').easyResponsiveTabs({
			type: 'vertical',
			width: 'auto',
			fit: true
			});
		});
	</script>
	<!-- //Responsive tabs for coachhes section -->

	<!-- scrolling script -->
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script> 
	<!-- //scrolling script -->

	<!--banner Slider starts Here-->
	<script src="{{asset('frondEnd/js/responsiveslides.min.js')}}"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
		  // Slideshow 4
		  $("#slider4").responsiveSlides({
			auto: true,
			pager:true,
			nav:true,
			speed: 500,
			namespace: "callbacks",
			before: function () {
			  $('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			  $('.events').append("<li>after event fired.</li>");
			}
		  });
	
		});
	 </script>
	<!--banner Slider ends Here-->
			
	<!-- Pop-up for pricing tables -->
	<script src="{{asset('frondEnd/js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
																							
		});
		</script>
	<!-- //Pop-up for pricing tables -->

	<!-- Stats-Number-Scroller-Animation-JavaScript -->
	<script src="{{asset('frondEnd/js/waypoints.min.js')}}"></script> 
	<script src="{{asset('frondEnd/js/counterup.min.js')}}"></script> 
	<script>
		jQuery(document).ready(function( $ ) {
			$('.counter').counterUp({
				delay: 10,
				time: 1000 
			});
		});
	</script>
	<!-- //Stats-Number-Scroller-Animation-JavaScript -->


	<!-- flexSlider --><!-- for testimonials -->
	<script defer src="{{asset('frondEnd/js/jquery.flexslider.js')}}"></script>
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
	<!-- //flexSlider --><!-- for testimonials -->


	<!-- Smooth scrolling -->
	<script src="{{asset('frondEnd/js/SmoothScroll.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frondEnd/js/move-top.js')}}"></script>
	<script type="text/javascript" src="{{asset('frondEnd/js/easing.js')}}"></script>
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