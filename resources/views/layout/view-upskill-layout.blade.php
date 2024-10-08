<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="{{asset('homeback/img/favicon_new.png')}}">
		<!-- Author Meta -->
		<meta name="author" content="Kings Branding Consult">
		<!-- Meta Description -->
		<meta name="description" content="A platform that connect freelancers with organizations, with real-time chat features.">
		<!-- Meta Keyword -->
		<meta name="keywords" content="Freelancers,Portfolio,Job Listing">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>@yield('pageTitle')</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{asset('homeback/css/linearicons.css')}}">
			<link rel="stylesheet" href="{{asset('homeback/css/font-awesome.min.css')}}">
			<link rel="stylesheet" href="{{asset('homeback/css/bootstrap.css')}}">
			<link rel="stylesheet" href="{{asset('homeback/css/magnific-popup.css')}}">
			<link rel="stylesheet" href="{{asset('homeback/css/nice-select.css')}}">					
			<link rel="stylesheet" href="{{asset('homeback/css/animate.min.css')}}">
			<link rel="stylesheet" href="{{asset('homeback/css/owl.carousel.css')}}">
			<link rel="stylesheet" href="{{asset('homeback/css/main.css')}}">

            <style>
				.profile-link {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: inherit;
}

.profile-frame {
    width: 40px; /* Adjust the size as needed */
    height: 40px; /* Adjust the size as needed */
    /* border: 1px solid #FFFFFF; Adjust the border style and color as needed */
    border-radius: 50%; /* Makes it a circle */
    overflow: hidden;
    margin-right: 10px; /* Adjust the spacing as needed */
	
}

.profile-frame img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.profile-link span {
    font-weight: bold;
}

			</style>
		</head>
		<body>

        <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="{{route('home')}}"><img src="{{asset('homeback/img/loom_logo.png')}}" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">				          
						  <!-- check if the user is authenticated -->
				          @auth
						  <!-- //-----check if user is freelancer or organization---- -->
						  @if (auth()->user()->user_type == 'Organization')
						  <li class="menu-active"><a href="{{route('home')}}">Home</a></li>
				          <li><a href="{{route('post-job')}}">Post Jobs</a></li>				          
						  <li><a href="{{route('post-upskill')}}">Upskill Opportunities</a></li>
						  <li><a href="{{route('find-freelancer')}}">Find Freelancers</a></li>
						  <li class="menu-has-children"><a href="">Browse Jobs</a>
				            <ul>
							@if(!empty ($categories))
                                                                    
                            @foreach ($categories as $category)
                            <li><a href="{{route('job-category', ['category' => $category->category])}}">{{$category->category}}</a></li>
                            @endforeach
                            @else                                                                    
                            <li><a href=""></a></li>                                                                   
                            @endif
				            </ul>
				          </li>	
				          @if($unreadMessagesCount > 0)
						  <li>
							<a href="{{ route('user-message') }}" class="message-icon-wrapper" target="_blank">
								<img src="{{ asset('homeback/img/message.png') }}" alt="message_icon" class="message-icon">
								<span class="badge {{ $unreadMessagesCount > 1 ? 'blink' : '' }}">{{ $unreadMessagesCount }}</span>
							</a>
							</li>
						  @else <li>
							<a href="{{ route('user-message') }}" class="message-icon-wrapper" target="_blank">
								<img src="{{ asset('homeback/img/message.png') }}" alt="message_icon" class="message-icon">
								
							</a>
							</li>
						  @endif
						  <li class="menu-has-children">
							<div class="profile-frame">
								<img src="{{ asset('storage/app/public/' . auth()->user()->user_picture) }}" alt="Profile Picture">
							</div>	
							<ul>
							<li><a href="{{ route('dashboard-organization') }}">Profile</a></li>
							<li><a href="{{ route('logout') }}">Logout</a></li>
							</ul>
						</li>	
						<!--<li><a class="ticker-btn" href="{{ route('dashboard-organization') }}">Profile</a></li>-->
						<!--<li><a class="ticker-btn" href="{{ route('logout') }}">Logout</a></li>-->
						@elseif (auth()->user()->user_type == 'Freelancer')
						<li class="menu-active"><a href="{{route('home')}}">Home</a></li>
						  <li><a href="{{route('find-upskill')}}">Upskill Opportunities</a></li>						  
				          <li><a href="{{route('search-freelancer')}}">Search Freelancers</a></li>
						  <li class="menu-has-children"><a href="">Browse Jobs</a>
				            <ul>
							@if(!empty ($categories))
                                                                    
                            @foreach ($categories as $category)
                            <li><a href="{{route('job-category', ['category' => $category->category])}}">{{$category->category}}</a></li>
                            @endforeach
                            @else                                                                    
                            <li><a href=""></a></li>                                                                   
                            @endif
				            </ul>
				          </li>				          
						  @if($unreadMessagesCount > 0)
						  <li>
							<a href="{{ route('user-message') }}" class="message-icon-wrapper" target="_blank">
								<img src="{{ asset('homeback/img/message.png') }}" alt="message_icon" class="message-icon">
								<span class="badge {{ $unreadMessagesCount > 1 ? 'blink' : '' }}">{{ $unreadMessagesCount }}</span>
							</a>
							</li>
						  @else <li>
							<a href="{{ route('user-message') }}" class="message-icon-wrapper" target="_blank">
								<img src="{{ asset('homeback/img/message.png') }}" alt="message_icon" class="message-icon">
								
							</a>
							</li>
						  @endif
						  <li class="menu-has-children">
							<div class="profile-frame">
								<img src="{{ asset('storage/app/public/' . auth()->user()->user_picture) }}" alt="Profile Picture">
							</div>	
							<ul>
							<li><a href="{{ route('dashboard') }}">Profile</a></li>
							<li><a href="{{ route('logout') }}">Logout</a></li>
							</ul>
						</li>	<!--<li><a class="ticker-btn" href="{{ route('dashboard') }}">Profile</a></li>-->
						<!--<li><a class="ticker-btn" href="{{ route('logout') }}">Logout</a></li>-->
						@endif
						@endauth

						@guest
						<li class="menu-active"><a href="{{route('home')}}">Home</a></li>
				          <li><a href="{{route('find-freelancer')}}">Find Freelancers</a></li>
						  <li><a href="{{route('find-upskill')}}">Upskill Opportunities</a></li>
						  <li class="menu-has-children"><a href="">Browse Jobs</a>
				            <ul>
							@if(!empty ($categories))
                                                                    
                            @foreach ($categories as $category)
                            <li><a href="{{route('job-category', ['category' => $category->category])}}">{{$category->category}}</a></li>
                            @endforeach
                            @else                                                                    
                            <li><a href=""></a></li>                                                                   
                            @endif
				            </ul>
				          </li>
				          <li><a href="{{route('signup')}}">Signup</a></li>
				          <li><a href="{{route('login')}}">Login</a></li>
						<!--<li><a class="ticker-btn" href="{{ route('signup') }}">Signup</a></li>-->
						<!--<li><a class="ticker-btn" href="{{ route('login') }}">Login</a></li>-->
						@endguest			          				          
				        </ul>
				      </nav><!-- #nav-menu-container -->	    		
			    	</div>
			    </div>
			  </header><!-- #header -->


			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Upskill			
							</h1>	
							<p class="text-white link-nav"><a href="{{route('home')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Upskill</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
				
			<!-- Start post Area -->
			<section class="post-area section-gap">
				<div class="container">
                @if(!empty($postUpskill))                
					<div class="row justify-content-center d-flex">
						<div class="col-lg-8 post-list">
							<div class="single-post d-flex flex-row">
								<div class="thumb">
                                <img src="{{ asset('storage/app/public/' . $postUpskill->company_logo) }}" alt="Company Logo" width="60" height="60">
									<ul class="tags">
										<li>
											<a href="#">&nbsp;&nbsp;&nbsp;&nbsp;</a>
										</li>					
                                        					
									</ul>
								</div>
								<div class="details">
									<div class="title d-flex flex-row justify-content-between">
										<div class="titles">
											<a href="#"><h4>{{$postUpskill->upskill_name}}</h4></a>
											<h6>{{$postUpskill->upskill_category}} || <i>Posted {{ $postUpskill->created_at->diffForHumans() }}</i></h6>					
											<table>
												<tr>
													<td><img src="{{asset('homeback/img/view.png')}}" alt="" width="15" height="15"></td>
													<td>{{$postUpskill->no_of_views}} view/s</td>		
																							
												</tr>
												<tr>
													<td><img src="{{asset('homeback/img/applications.png')}}" alt="" width="15" height="15"></td>
													<td>{{$postUpskill->upskill_apply}} application/s</td>	
												</tr>
												
											</table>
										</div>										
									</div>								
									
								</div>
							</div>	
							<div class="single-post job-details">
								<h4 class="single-title"></h4>
								<p>
									{!!$postUpskill->upskill_description!!}
								</p>
								<ul class="btns">											
											<li><a href="{{route('upskill-apply', ['id' => $postUpskill->id])}}">Apply</a></li>
										</ul>
							</div>							
							@else
                            <p>No job found.</p>
                            @endif
																			
						</div>
						<div class="col-lg-4 sidebar">							

                        <div class="single-slidebar">
							<h4>Latest Jobs</h4>
								@if(!empty($postJobs))
								<div class="active-relatedjob-carusel">									
									@foreach ($postJobs as $postJob)
									<div class="single-rated">
										<img class="img-fluid" src="{{ asset('storage/app/public/' . $postJob->company_logo) }}" alt="" width="60" height="60">
										<a href="#"><h4>{{$postJob->job_name}}</h4></a>
										<h6>Created by : {{$postJob->company_name}}</h6>										
										<a href="{{route('view-job', ['id' => $postJob->id])}}" class="btns text-uppercase">View Details</a>
									</div>	
									@endforeach																								
								</div>
								@else									
									<p>Jobs not available at the moment, check back later.</p>
									@endif
							</div>														
                            <div class="single-slidebar">
								<h4>Jobs by Location</h4>
								<ul class="cat-list">
								@if($jobLocation->isEmpty())
									<li><a class="justify-content-between d-flex" href="#"><p>Job location unavailable</p><span></span></a></li>
								@else
                                @foreach($jobLocation as $jobLocations)
                                <li><a class="justify-content-between d-flex" href="{{route('job-location', ['id' => $jobLocations->job_location])}}"><p>{{$jobLocations->job_location}}</p><span>{{$jobLocations->location_count}}</span></a></li>
                                @endforeach
                                {{ $jobLocation->links() }}
                                @endif
								</ul>
							</div>		

						</div>
					</div>
				</div>	
			</section>
			<!-- End post Area -->


			<!-- Start callto-action Area -->
			<section class="callto-action-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content col-lg-9">
							<div class="title text-center">
								<h1 class="mb-10 text-white">Join us today without any hesitation</h1>
								<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
								<a class="primary-btn" href="#">I am a Candidate</a>
								<a class="primary-btn" href="#">We are an Employer</a>
							</div>
						</div>
					</div>	
				</div>	
			</section>
			<!-- End calto-action Area -->

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-12">
							<div class="single-footer-widget">
								<h6>Top Products</h6>
								<ul class="footer-nav">
									<li><a href="#">Managed Website</a></li>
									<li><a href="#">Manage Reputation</a></li>
									<li><a href="#">Power Tools</a></li>
									<li><a href="#">Marketing Service</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6  col-md-12">
							<div class="single-footer-widget newsletter">
								<h6>Newsletter</h6>
								<p>You can trust us. we only send promo offers, not a single spam.</p>
								<div id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="">
                                        @csrf
										<div class="form-group row" style="width: 100%">
											<div class="col-lg-8 col-md-12">
												<input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
												<div style="position: absolute; left: -5000px;">
													<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
												</div>
											</div> 
										
											<div class="col-lg-4 col-md-12">
												<button class="nw-btn primary-btn">Subscribe<span class="lnr lnr-arrow-right"></span></button>
											</div> 
										</div>		
										<div class="info"></div>
									</form>
								</div>		
							</div>
						</div>
						<div class="col-lg-3  col-md-12">
							<div class="single-footer-widget mail-chimp">
								<h6 class="mb-20">Instragram Feed</h6>
								<ul class="instafeed d-flex flex-wrap">
									<li><img src="img/i1.jpg" alt=""></li>
									<li><img src="img/i2.jpg" alt=""></li>
									<li><img src="img/i3.jpg" alt=""></li>
									<li><img src="img/i4.jpg" alt=""></li>
									<li><img src="img/i5.jpg" alt=""></li>
									<li><img src="img/i6.jpg" alt=""></li>
									<li><img src="img/i7.jpg" alt=""></li>
									<li><img src="img/i8.jpg" alt=""></li>
								</ul>
							</div>
						</div>						
					</div>

					<div class="row footer-bottom d-flex justify-content-between">
						<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->		

			<script src="{{asset('homeback/js/vendor/jquery-2.2.4.min.js')}}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.homeback/js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="{{asset('homeback/js/vendor/bootstrap.min.js')}}"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="{{asset('homeback/js/easing.min.js')}}"></script>			
			<script src="{{asset('homeback/js/hoverIntent.js')}}"></script>
			<script src="{{asset('homeback/js/superfish.min.js')}}"></script>	
			<script src="{{asset('homeback/js/jquery.ajaxchimp.min.js')}}"></script>
			<script src="{{asset('homeback/js/jquery.magnific-popup.min.js')}}"></script>	
			<script src="{{asset('homeback/js/owl.carousel.min.js')}}"></script>			
			<script src="{{asset('homeback/js/jquery.sticky.js')}}"></script>
			<script src="{{asset('homeback/js/jquery.nice-select.min.js')}}"></script>			
			<script src="{{asset('homeback/js/parallax.min.js')}}"></script>		
			<script src="{{asset('homeback/js/mail-script.js')}}"></script>	
			<script src="{{asset('homeback/js/main.js')}}"></script>
		</body>
	</html>



