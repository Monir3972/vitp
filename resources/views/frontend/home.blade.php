 @extends('frontend.master')
@section('content')
  <section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 include-header">
			<div class="slider-inner">
				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
					     @foreach($sliders as $slider)
						<div class="swiper-slide dark">
							<div class="container">
								<div class="slider-caption slider-caption-center mt-3">
								    <!--<div data-animate="fadeInUp" class="bg-dark p-3 bg-opacity">-->
								        	<h2 data-animate="fadeInUp" class="text-white">{{$slider->short_title}}</h2>
								        	<p class="d-none d-sm-block text-white" data-animate="fadeInUp" data-delay="200">{{$slider->long_title}}</p>
								    <!--</div>-->
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: url({{asset('public/upload/slider_images/'.$slider->image)}});"></div>
						</div>
						@endforeach
					</div>
					<div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
				</div>

				<a href="#" data-scrollto="#content" data-offset="100" class="one-page-arrow dark"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

			</div>
		</section>
</div>

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container" id="about">
				    @foreach($abouts as $about)
					<div class="row align-items-center">

						<div class="col-lg-5">
							<div class="heading-block">
								<h1>{{$about->heading}}</h1>
							</div>
							<p class="lead text-justify">{{$about->description}}</p>
						</div>

						<div class="col-lg-5 mx-auto align-self-end">
							<div class="position-relative overflow-hidden">
							    <img src ="{{(!empty($about->image))?url('public/upload/about_images/'.$about->image):url('public/upload/no_images.png')}}" data-animate="fadeInUp" class="img-thumbnail rounded" data-delay="100">
							</div>
						</div>
					</div>
					@endforeach
				  </div>
				<div class="container clearfix" id="service">
					<div class="heading-block topmargin-lg center">
						<h2 class="text-center">Service We Provided</h2>
						<span class="mx-auto text-justify">We provide IT support for any kind of company as well as for personal purpose. To build your professional carrier we provide professional training.</span>
					</div>
					<div class="row col-mb-50 mb-4">
					     @foreach($services as $service)
					     <div class="col-md-1 align-items-center">
					         	<div class="fbox-icon">
    					     	<a href="#"><i class="{{$service->icon}}"></i></a>
    						</div>
					     </div>
    						<div class="col-md-3">
    							<div class="feature-box flex-md-row-reverse text-md-end" data-animate="fadeIn">
    								<div class="fbox-content">
    									<h3 class="text-center">{{$service->second_heading}}</h3>
    									<p class="text-justify">{{$service->second_description}}</p>
    								</div>
    							</div>
                            </div>
                    @endforeach
					</div>
				</div>
				
				<div class="row clearfix align-items-stretch" id="pricing">
				      @foreach($pacakges as $pacakge)
                        <div class="col-md-4 col-sm-6">
                            <div class="pricing-table-3 basic">
                                <div class="pricing-table-header">
                                    <h4 class="course_heading"><strong>{{$pacakge->course_title}}</strong></h4>
                                </div>
                                <div class="price"><strong>{{$pacakge->course_price}}</strong> / MONTH</div>
                                <div class="pricing-body">
                                    <ul class="pricing-table-ul">
                                        <li><i class="fa fa-send"></i> Course Delivery Mode: {{$pacakge->delivery_mode}}</li>
                                        <li><i class="fa fa-cloud"></i> Hours of Study: 3 Months</li>
                                        <li><i class="fa fa-database"></i> Course Dates:{{$pacakge->course_end}} </li>
                                        <li class="not-avail"><i class="fa fa-clock-o"></i>{{$pacakge->support}}</li>
                                        <li class="not-avail"><i class="fa fa-envelope"></i> Zoom Support</li>
                                    </ul><a href="#" class="view-more">View More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                   
				</div>
				
				<div class="row clearfix align-items-stretch bottommargin-lg" id="plugin">
				    @foreach($plugins as $plugin)
					<div class="col-lg-3 col-md-6 dark center col-padding" style="background-color: {{$plugin->bgColor}};">
						<!--<i class="i-plain i-xlarge mx-auto icon-line2-directions"></i>-->
						<i class="i-plain i-xlarge mx-auto {{$plugin->social_icon}}"></i>
						<div class="counter counter-lined"><span data-from="{{$plugin->dataForm}}" data-to="{{$plugin->dataTo}}" data-refresh-interval="{{$plugin->dataRefresh}}" data-speed="{{$plugin->dataSpeed}}"></span></div>
						<h5>{{$plugin->description}}</h5>
					</div>
					@endforeach
                 </div>
                 
				<div class="section topmargin mb-0 border-bottom-0" id="portfolio">
					<div class="container clearfix">
						<div class="heading-block center m-0">
							<h3>Our Latest Works</h3>
						</div>
					</div>
				</div>
				<div id="portfolio" class="portfolio row g-0 portfolio-reveal grid-container">
				     @foreach($portfolios as $portfolio)
					<article class="portfolio-item col-6 col-md-4 col-lg-3">
						<div class="grid-inner">
							<div class="portfolio-image">
								<a href="{{$portfolio->project_link}}">
									<img src="{{asset('public/upload/portfolio_images/'.$portfolio->small_image)}}" alt="Open Imagination" style="height:300px">
								</a>
								<div class="bg-overlay">
									<div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item">
									
										<a href="{{$portfolio->project_link}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item"><i class="icon-line-ellipsis"></i></a>
									</div>
									<div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item"></div>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="{{$portfolio->project_link}}">{{$portfolio->project_title}}</a></h3>
								<span><a href="#">Betting</a>, <a href="#">{{$portfolio->small_description}}</a></span>
							</div>
						</div>
					</article>
					@endforeach
                  </div>
                  
				<div class="section parallax dark mb-0" id="review" style="background-image: url('public/frontend/images/services/home-testi-bg.jpg'); padding: 100px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
					<div class="heading-block center">
						<h3>What Clients Say About Us?</h3>
					</div>
					<div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
						<div class="flexslider">
							<div class="slider-wrap">
							      @foreach($reviews as $review)
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="{{asset('public/upload/clientReview_images/'.$review->image)}}" alt="Open Imagination"></a>
									</div>
									<div class="testi-content">
										<p>{{$review->description}}</p>
										<div class="testi-meta">
										{{$review->name}}
											<span>	{{$review->company}}</span>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
				<div class="section" id="team">
					<div class="container clearfix">
						<div class="heading-block topmargin-sm center">
							<h3>Meet Our Team</h3>
						</div>
						<div class="row">
						    @foreach($employees as $employee)
							<div class="col-lg-3 col-md-6 bottommargin">
								<div class="team">
									<div class="team-image">
										<img src ="{{(!empty($employee->image))?url('public/upload/employee_images/'.$employee->image):url('public/upload/no_images.png')}}" style="height:290px; border:1px solid #ddd">
									</div>
									<div class="team-desc team-desc-bg">
										<div class="team-title"><h4>{{$employee->name}}</h4><span>{{$employee->designation}}</span></div>
										<a href="{{$employee->facebook}}" class="social-icon inline-block si-small si-light si-rounded si-facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>
										<a href="{{$employee->linkedin}}" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
											<i class="icon-linkedin"></i>
											<i class="icon-linkedin"></i>
										</a>
										<a href="{{$employee->github}}" class="social-icon inline-block si-small si-light si-rounded si-github">
											<i class="icon-github"></i>
											<i class="icon-github"></i>
										</a>
									</div>
								</div>
							</div>
                         @endforeach
						</div>
					</div>
				</div>
			</div>
		<!--<div class="container-contact100">-->
		<!--<div class="wrap-contact100">-->
		<!--	<form class="contact100-form validate-form" action="" method="post">-->
		<!--	     @csrf-->
		<!--		<span class="contact100-form-title">-->
		<!--			Get in Touch-->
		<!--		</span>-->

		<!--		<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">-->
		<!--			<span class="label-input100">Tell us your name *</span>-->
		<!--			<input class="input100" type="text" name="name" placeholder="Enter your name">-->
		<!--		</div>-->

		<!--		<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">-->
		<!--			<span class="label-input100">Enter your email *</span>-->
		<!--			<input class="input100" type="text" name="email" placeholder="Enter your email">-->
		<!--		</div>-->

		<!--		<div class="wrap-input100">-->
		<!--			<span class="label-input100">Subject</span>-->
		<!--			<input class="input100" type="text" name="subject">-->
		<!--		</div>-->

		<!--		<div class="wrap-input100 validate-input" data-validate = "Message is required">-->
		<!--			<span class="label-input100">Message</span>-->
		<!--			<textarea class="input100" name="message" placeholder="Your message here..."></textarea>-->
		<!--		</div>-->

		<!--		<div class="container-contact100-form-btn">-->
		<!--			<div class="wrap-contact100-form-btn">-->
		<!--				<div class="contact100-form-bgbtn"></div>-->
		<!--				<button type="submit" class="contact100-form-btn btn btn-primary">-->
		<!--					Submit-->
		<!--				</button>-->
		<!--			</div>-->
		<!--		</div>-->
		<!--	</form>-->
		<!--</div>-->
	 <!--   </div>-->
		</section><!-- #content end -->
		@endsection