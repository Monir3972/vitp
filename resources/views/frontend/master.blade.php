<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&amp;display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('public/frontend/css/swiper.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('public/frontend/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('public/frontend/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('public/frontend/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('public/frontend/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('public/frontend/css/custom.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('public/frontend/css/form.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	

	<!-- Document Title
	============================================= -->
	<title>Virtual IT Professonal | Welcome | Professonal Training</title>

</head>

<body class="stretched">
    
    	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header transparent-header" data-sticky-class="not-dark">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
						  	<a href="{{'/'}}" class="standard-logo" data-dark-logo="{{asset('public/upload/logo_images/'. $logo->image)}}"><img src="{{asset('public/upload/logo_images/'. $logo->image)}}" alt="Virtual IT Logo"></a>
							
							<!--<a href="{{'/'}}" class="retina-logo" data-dark-logo="images/Virtual IT Logo-01.png"><img src="images/logo%402x.png" alt="Canvas Logo"></a> -->
							<!--<h1 class="fw-bold fs-1 mt-3">Virtual IT</h1>-->
						</div><!-- #logo end -->

						<div class="header-misc">

							<!-- Top Search
							============================================= -->
						


						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">

							<ul class="menu-container">
								<li class="menu-item">
									<a class="menu-link" href="{{route('frontend')}}"><div>Home</div></a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="#about"><div>About Us</div></a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="#service"><div>Services</div></a>
								</li>
								
								<li class="menu-item">
									<a class="menu-link" href="#pricing"><div>Pacakges</div></a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="#plugin"><div>At a Glance</div></a>
								</li>
								
								<li class="menu-item">
									<a class="menu-link" href="#portfolio"><div>Portfolio</div></a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="#review"><div>Review</div></a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="#team"><div>Meet Team</div></a>
								</li>
							
							</ul>
						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->
      @yield('content')

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">

					<div class="row col-mb-50">
						<div class="col-lg-8">

							<div class="row col-mb-50">
								<div class="col-md-4">

									<div class="widget widget_links clearfix">

										<!--<img src="images/footer-widget-logo.png" alt="Image" class="footer-logo">-->
										<!--<img src="images/Virtual IT Logo-01.png" alt="Virtual IT Logo" class="img-fluid mb-3">-->
										<h4 class="text-uppercase">Virtual It Professonal</h4>

										<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>

										<div style="background: url('public/frontend/images/world-map.png') no-repeat center center; background-size: 100%;">
											<address>
												<strong>Headquarters:</strong><br>
												53/2 Sukrabad<br>
												Dhanmondi, Dhaka<br>
											</address>
											<abbr title="Phone Number"><strong>Phone:</strong></abbr> (1) 01678909091<br>
											<abbr title="WhatsApp"><strong>WhatsApp:</strong></abbr> (1) 01678909091<br>
											<abbr title="Email Address"><strong>Email:</strong></abbr> info@virtualit.net
										</div>

									</div>

								</div>

								<div class="col-md-4">

									<div class="widget widget_links clearfix">

										<h4>Quick Links</h4>

										<ul>
											<li><a href="https://laravel.com/">Laravel</a></li>
											<li><a href="https://vuejs.org/">Vue Js</a></li>
											<li><a href="https://jetstream.laravel.com/2.x/introduction.html">Jetstram</a></li>
											<li><a href="https://www.w3schools.com/">W3Schools</a></li>
											<li><a href="https://getbootstrap.com/">Bootstrap</a></li>
										</ul>

									</div>

								</div>

								<div class="col-md-4">

									<div class="widget clearfix">
										<h4>Top Trends </h4>

										<div class="posts-sm row col-mb-30" id="post-list-footer">
											<div class="entry col-12">
												<div class="grid-inner row">
													<div class="col">
														<div class="entry-title">
															<h4><a href="#">Front-End Developers</a></h4>
														</div>
													</div>
												</div>
											</div>

											<div class="entry col-12">
												<div class="grid-inner row">
													<div class="col">
														<div class="entry-title">
															<h4><a href="#">Full-Stack Developers</a></h4>
														</div>
													</div>
												</div>
											</div>

											<div class="entry col-12">
												<div class="grid-inner row">
													<div class="col">
														<div class="entry-title">
															<h4><a href="#">Angular Developers</a></h4>
														</div>
														
													</div>
												</div>
											</div>
												<div class="entry col-12">
												<div class="grid-inner row">
													<div class="col">
														<div class="entry-title">
															<h4><a href="#">JavaScript Developers</a></h4>
														</div>
														
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>

						</div>

						<div class="col-lg-4">

							<div class="row col-mb-50">
								<div class="col-md-4 col-lg-12">
									<div class="widget clearfix" style="margin-bottom: -20px;">

										<div class="d-flex justify-content-center justify-content-md-end">
								<a href="#" class="social-icon si-small si-borderless si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-gplus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-pinterest">
									<i class="icon-pinterest"></i>
									<i class="icon-pinterest"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-vimeo">
									<i class="icon-vimeo"></i>
									<i class="icon-vimeo"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-github">
									<i class="icon-github"></i>
									<i class="icon-github"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-yahoo">
									<i class="icon-yahoo"></i>
									<i class="icon-yahoo"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>
							</div>
									</div>
								</div>

								<div class="col-md-5 col-lg-12">
									<div class="widget subscribe-widget clearfix">
									<i class="icon-envelope2"></i> info@virtualit.net <span class="middot">&middot;</span> <i class="icon-headphones"></i> 01678909091 <span class="middot">&middot;</span> <i class="icon-skype2"></i> Virtual It OnSkype
									</div>
								</div>

								<div class="col-md-3 col-lg-12">
									<div class="widget clearfix" style="margin-bottom: -20px;">

										<div class="row">
											<div class="col-6 col-md-12 col-lg-6 clearfix bottommargin-sm">
												<a href="#" class="social-icon si-dark si-colored si-facebook mb-0" style="margin-right: 10px;">
													<i class="icon-facebook"></i>
													<i class="icon-facebook"></i>
												</a>
												<a href="#"><small style="display: block; margin-top: 3px;color:#fff"><strong>Like us</strong><br>on Facebook</small></a>
											</div>
											<div class="col-6 col-md-12 col-lg-6 clearfix">
												<a href="#" class="social-icon si-dark si-colored si-linkedin mb-0" style="margin-right: 10px;">
													<i class="icon-linkedin"></i>
													<i class="icon-linkedin"></i>
												</a>
												<a href="#"><small style="display: block; margin-top: 3px;color:#fff"><strong>Follow </strong><br>to linkedin</small></a>
											</div>
										</div>

									</div>
								</div>

							</div>

						</div>
					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">
				<div class="container">

					<div class="row">

						<div class="col-md-6 mx-auto">
							Copyrights &copy; 2021 All Rights Reserved by <a href="http://virtualitprofessional.net/" style="color:#fff">Virtual IT Professional</a><br>
						
						</div>

					

					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>
	
	
	<script>
    // Get the modal
    var modal = document.getElementById('id01');
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
   <script>
   // Scroll to specific values
// window.scrollTo or
window.scroll({
  top: 10000, 
  left: 0, 
  behavior: 'smooth'
});

// Scroll certain amounts from current position 
window.scrollBy({ 
  top:8550, // could be negative value
  left: 0, 
  behavior: 'smooth' 
});

// Scroll to a certain element
document.getElementById('el').scrollIntoView({
  behavior: 'smooth'
}));
});
   </script>
    <!--<script>-->
    <!--    var $root = $('html, body');-->
    <!--    $('a').click(function() {-->
    <!--        var href = $.attr(this, 'href');-->
    <!--        $root.animate({-->
    <!--            scrollTop: $(href).offset().top - 120-->
    <!--        }, 500, function () {-->
    <!--            window.location.hash = href;-->
    <!--        });-->
    <!--        return false;-->
    <!--    });-->
    <!--</script>-->
   

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('public/frontend/js/jquery.js')}}"></script>
	<script src="{{asset('public/frontend/js/plugins.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('public/frontend/js/functions.js')}}"></script>
	

</body>

</html>