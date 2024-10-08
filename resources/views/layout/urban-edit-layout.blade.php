<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<link rel="icon" href="{{ asset('portfolioback/img/favicon_new.png') }}" type="image/png">
	<title>TalentLoom :: Portfolio</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('portfolioback/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('portfolioback/vendors/linericon/style.css') }}">
	<link rel="stylesheet" href="{{ asset('portfolioback/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('portfolioback/vendors/owl-carousel/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('portfolioback/vendors/lightbox/simpleLightbox.css') }}">
	<link rel="stylesheet" href="{{ asset('portfolioback/vendors/nice-select/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('portfolioback/vendors/animate-css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('portfolioback/vendors/popup/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('portfolioback/vendors/flaticon/flaticon.css') }}">

	<!-- Main CSS -->
	<link rel="stylesheet" href="{{ asset('portfolioback/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('portfolioback/css/responsive.css') }}">

		<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->
		<style>
			.font-text {
	font-size: 44px;
    font-family: 'Amazone', sans-serif;
	font-weight: bold;
    color: black;
}
		.style1 {font-family: Calibri}
        .style2 {font-family: sans-serif}
        .style3 {
	font-family: "Lucida Handwriting"
}
        </style>
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="#"><img src="portfolioback/img/loom_logo.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">					
							<li class="nav-item active"><a class="nav-link" href="#home-page">Home</a></li>			
								<li class="nav-item"><a class="nav-link" href="#about">About</a></li> 
								<li class="nav-item"><a class="nav-link" href="#about">Skills</a></li>
								<li class="nav-item"><a class="nav-link" href="#education">Education/Experience</a></li>
								<li class="nav-item"><a class="nav-link" href="#service">Services</a></li> 
								<li class="nav-item"><a class="nav-link" href="#project">Project</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
           	<div class="container box_1620" id="home-page">
           		<div class="banner_inner d-flex align-items-center">
					<div class="banner_content">
						<div class="media">
							<div class="d-flex">
								<table>
									<tr>
										<td><img src="{{ asset('storage/app/public/' . $user->profile_picture) }}" width="468" height="483" alt=""></td>
									</tr>
									<tr>
										<td>@if($actionType == 'Edit')<a href="{{ route('profile-picture') }}" title="Edit Profile Picture">
        <img src="{{asset('templates/classic/assets/img/edit.png')}}" alt="Edit Icon">@else  @endif</td>
									</tr>
								</table>	
</div>
							<div class="media-body">
								<div class="personal_text">
									<h6>Hello Everybody, i am</h6>
									<table>
										<tr>
											<td><h1>{{$user->full_name}} </h1><a href="{{ route('user-about') }}" title="Edit Full name"></td>
											<td>&nbsp;</td>
											<td valign="top">
												@if($actionType == 'Edit')
												<a href="{{ route('user-about') }}" title="Edit Full name">
												<img src="{{asset('templates/classic/assets/img/edit.png')}}" alt="Edit Icon">@else  @endif
    </a></td>
										</tr>
									</table>
									
        <hr>
		<table>
			<tr>
				<td><h1>
<strong>
				<p class="style2" style="color: purple;">{{$user->user_roles_major}}</p>
			</strong>
</h1></td>
				<td>&nbsp;</td>
				<td valign="top">@if($actionType == 'Edit')<a href="{{ route('user-role') }}" title="Edit User Major Role">
				<img src="{{asset('templates/classic/assets/img/edit.png')}}" alt="Edit Icon"></a>@else  @endif
    </a></td>
			</tr>
		</table>


<hr>
<table>
	<tr>
		<td><h6>
									
                                                               <strong><p class="style2">
                                                                @php
                                                                $userRoles = $user->user_roles;
                                                                $rolesArray = explode(',', $userRoles);
                                                                @endphp

                                                                @if (!empty($rolesArray))
                                                                @foreach ($rolesArray as $userRole)
                                                                <i class="fa fa-star">
                                                                    </i> {{ trim($userRole) }}                                                                   
                                                                @endforeach
                                                            @else
                                                            <div class="alert alert-warning" role="alert">
                                                                    No roles found                                                                
                                                                </div>
                                                            @endif

                                                         </p></strong> 
									</h6></td>
									<td>&nbsp;</td>
									<td valign="top">@if($actionType == 'Edit')<a href="{{ route('user-role') }}" title="Edit User other roles">
									<img src="{{asset('templates/classic/assets/img/edit.png')}}" alt="Edit Icon"></a>@else  @endif</td>
	</tr>	
</table>
									
									<hr>	
									<table>
										<tr>
											<td>
											<ul class="list basic_info">
											@if($user->user_phone)										
										<li><a href="#"><i class="lnr lnr-phone-handset"></i> {{ ($user->country_code ?? 'N/A') . ' ' . ($user->user_phone ?? 'N/A') }}</a></li>
										@else
										<p>Phone no has not been updated.</p>
										@endif
</ul>
											</td>
											<td>&nbsp;</td>
											<td valign="top">@if($actionType == 'Edit')<a href="{{ route('user-about') }}" title="Edit phone no">
											<img src="{{asset('templates/classic/assets/img/edit.png')}}" alt="Edit Icon"></a>@else  @endif</td>
										</tr>
									</table>								
									<ul class="list basic_info">										
										@if($user->email)
										<li><a href="mailto:{{$user->email}}"><i class="lnr lnr-envelope"></i> {{$user->email}}</a></li>	
										@else
										<p></p>
										@endif									
									</ul>
									<table>
										<tr>
											<td><ul class="list personal_social">
										@if($user->user_facebook)
										<li><a href="{{$user->user_facebook}}"><i class="fa fa-facebook" target="_blank"></i></a></li>
										@else
										<!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li> -->
										@endif
										@if($user->user_twitter)
										<li><a href="{{$user->user_twitter}}"><i class="fa fa-twitter" target="_blank"></i></a></li>
										@else
										<!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
										@endif
										@if($user->user_linkedin)
										<li><a href="{{$user->user_linkedin}}"><i class="fa fa-linkedin" target="_blank"></i></a></li>
										@else
										<!-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
										@endif
										@if($user->user_instagram)
										<li><a href="{{$user->user_instagram}}"><i class="fa fa-instagram" target="_blank"></i></a></li>
										@else
										<!-- <li><a href="#"><i class="fa fa-instagram"></i></a></li> -->
										@endif
									</ul></td>
										</tr>
										<tr>
										<td>@if($actionType == 'Edit')<a href="{{ route('user-about') }}" title="Edit socials">
										<img src="{{asset('templates/classic/assets/img/edit.png')}}" alt="Edit Icon"></a>@else  @endif</td>
										</tr>										
									</table>
									
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Welcome Area =================-->
        <section class="welcome_area p_120">
        	<div class="container" id="about">
        		<div class="row welcome_inner">
        			<div class="col-lg-6">
        				<div class="welcome_text">
							<table>
								<tr>
									<td><h2 style="color: black;">ABOUT MYSELF</h2></td>
									<td>&nbsp;&nbsp;&nbsp;</td>
									<td valign="top">@if($actionType == 'Edit')<a href="{{ route('user-about') }}" title="Edit about info">
										<img src="{{asset('templates/classic/assets/img/edit.png')}}" alt="Edit Icon"></a>@else  @endif</td>
								</tr>
							</table>
        					
							<hr>
							@if($user->user_about)
        					<p>{!!$user->user_about!!}</p>  
							@else
							<p>About me has not been updated.</p>
							@endif
        				</div>
        			</div>
        			<div class="col-lg-6">
        				<div class="tools_expert">						
        					<div class="skill_main">
								<table>
									<tr>
										<td><h4><strong><p class="style1 style1">Skills</p></strong> </h4></td>
										<td>&nbsp;&nbsp;&nbsp;</td>
										<td valign="top">@if($actionType == 'Edit')<a href="{{ route('user-about') }}" title="Edit skills info">
										<img src="{{asset('templates/classic/assets/img/edit.png')}}" alt="Edit Icon"></a>@else  @endif</td>
									</tr>
								</table>
								
							<hr>						
								@if(!empty($userSkills))
							@foreach($userSkills as $userSkill)
								<div class="skill_item">
									<h4>{{$userSkill->user_skill}} - <span class="counter">{{$userSkill->user_skill_level}}</span>%</h4>
									<div class="progress_br">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="{{$userSkill->user_skill_level}}" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
									@endforeach	
								@else
								<p>Skills has not been updated.</p>
								@endif
							</div>
        				</div>
						<hr>
						{{$userSkills->links()}}
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Welcome Area =================-->
        
        <!--================My Tabs Area =================-->
        <section class="mytabs_area p_120">
        	<div class="container" id="education">
        		<div class="tabs_inner">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Professional Experience</a>
							@if($actionType == 'Edit')<a href="{{ route('user-experience') }}" title="Edit experience info">
										<img src="{{asset('templates/classic/assets/img/edit1.png')}}" alt="Edit Icon"></a>@else  @endif
						</li>
						<li class="nav-item">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Education</a>
							@if($actionType == 'Edit')<a href="{{ route('user-education') }}" title="Edit education info">
										<img src="{{asset('templates/classic/assets/img/edit1.png')}}" alt="Edit Icon"></a>@else  @endif
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">						
							<ul class="list">							
								@if(!empty($userExperience))
							@foreach($userExperience as $userExperiences)
								<li>
									<span></span>
									<div class="media">
										<div class="d-flex">
											<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												{{$userExperiences->company_year}}</p>
										</div>
										<div class="media-body">
											<h4>{{$userExperiences->user_company}}</h4>
											<p> <i class="fa fa-star"></i> <strong>{{$userExperiences->user_company_role}}</strong>  <br />
											{!! $userExperiences->user_about_role !!}</p>
										</div>
									</div>
								</li>								
								@endforeach
								@else
								<p>Work experience has not been updated.</p>
								@endif
							</ul>
						</div>
						<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<ul class="list">
								@if(!empty($userEducation))
							@foreach($userEducation as $userEducations)
								<li>
									<span></span>
									<div class="media">
										<div class="d-flex">
											<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												{{$userEducations->college_year}}</p>
										</div>
										<div class="media-body">
											<h4>{{$userEducations->college_name}}</h4>
											<p><i class="fa fa-star"></i> <strong> {{$userEducations->college_qualification}}</strong> <br />
											<a href="{{ asset('storage/app/public/' . $userEducations->college_certificate) }}" target="_blank">View Certificate</a> </p>
										</div>
									</div>
								</li>
								@endforeach
								@else
								<p>Education/certification has not been updated.</p>
								@endif
							</ul>
						</div>
					</div>
        		</div>
        	</div>
        </section>
        <!--================End My Tabs Area =================-->
        
        <!--================Feature Area =================-->
        <section class="feature_area p_120">
        	<div class="container" id="service">
        		<div class="main_title">					
					<h3 style="color: black;">WHAT I DO
					@if($actionType == 'Edit')<a href="{{ route('user-service') }}" title="Edit services info">
					<img src="{{asset('templates/classic/assets/img/edit.png')}}" alt="Edit Icon"></a>@else  @endif
					</h3>
        			<p>If you are looking for the best to grow and improve your business, you don't have to search for too long, i am available to work with you.</p>
        		</div>
        		<div class="feature_inner row">
					@if(!empty($userService))
					@foreach($userService as $userServices)
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<i class="flaticon-city"></i>
        					<h4>{{$userServices->user_service}}</h4>
        					<p>{!!$userServices->user_service_description!!}</p>
        				</div>
        			</div>        			
        			@endforeach
					@else
					<p>Services has not been updated.</p>
					@endif
        		</div>
        	</div>
        </section>
        <!--================End Feature Area =================-->
        
        <!--================Home Gallery Area =================-->
        <section class="home_gallery_area p_120">
        	<div class="container" id="project">
        		<div class="main_title">
        			<h3 style="color: black;">My Projects
        			@if($actionType == 'Edit')<a href="{{ route('user-portfolio') }}" title="Edit projects info">
							<img src="{{asset('templates/classic/assets/img/edit.png')}}" alt="Edit Icon"></a>@else  @endif
        			</h3>
        			<p>Check out some of my projects.</p>
        		</div>
        		<div class="isotope_fillter">
        			<ul class="gallery_filter list">	
					<li class="active" data-filter="*"><a href="#">All</a></li>				
						<li data-filter=".brand"><a href="#">Images</a></li>
						<li data-filter=".manipul"><a href="#">Documents</a></li>
					</ul>
        		</div>
        	</div>
        	<div class="container">
        		<div class="gallery_f_inner row imageGallery1">
					<!-- ====Begin portfolio Images----- -->
					@if(!empty($userPortfolioImage))
					@foreach($userPortfolioImage as $userPortfolioImages)
        			<div class="col-lg-4 col-md-4 col-sm-6 brand design print">
        				<div class="h_gallery_item">
        					<div class="g_img_item">
        						<img class="img-fluid" src="{{ asset('storage/app/public/' . $userPortfolioImages->file_url) }}" alt="">
        						<a class="light" href="{{ asset('storage/app/public/' . $userPortfolioImages->file_url) }}"><img src="img/gallery/icon.png" alt=""></a>
        					</div>
        					<div class="g_item_text">
        						<h4>{{$userPortfolioImages->file_name}}</h4>
        					</div>
        				</div>
        			</div>
					@endforeach
        			@else
					<p><a href="{{route('user-portfolio')}}" target="_blank">Upload Projects</a></p>
					@endif
					<!-- ==end portfolio images -->

					<!-- Begin portfolio Documents -->
					@if (!empty($userPortfolioDocument))
						@foreach ($userPortfolioDocument as $userPortfolioDocuments)
							<div class="col-lg-4 col-md-4 col-sm-6 manipul design print">
								<div class="h_gallery_item">
									<div class="g_img_item">
										@if (Str::endsWith($userPortfolioDocuments->file_url, '.pdf'))
											<object data="{{ asset('storage/app/public/' . $userPortfolioDocuments->file_url) }}" type="application/pdf" width="100%" height="250">
												<p>Your browser does not support PDFs. <a href="{{ asset('storage/app/public/' . $userPortfolioDocuments->file_url) }}">Download PDF</a> instead.</p>
											</object>
										@else
											<img class="img-fluid" src="{{ asset('storage/app/public/' . $userPortfolioDocuments->file_url) }}" alt="">
											<a class="light" href="{{ asset('storage/app/public/' . $userPortfolioDocuments->file_url) }}"><img src="img/gallery/icon.png" alt=""></a>
										@endif
									</div>
									<div class="g_item_text">
										<h4>{{ $userPortfolioDocuments->file_name }}</h4>
										<strong><p><a href="{{ asset('storage/app/public/' . $userPortfolioDocuments->file_url) }}" target="_blank">View File</a> </p></strong>
									</div>
								</div>
							</div>
						@endforeach
					@else
						<p><a href="{{ route('user-portfolio') }}" target="_blank">Upload Projects</a></p>
					@endif
					<!-- End portfolio documents -->

        		</div>        		
        	</div>
        </section>
        <!--================End Home Gallery Area =================-->        
        
        <!--================Footer Area =================-->
        <footer class="footer_area p_120">
        	<div class="container">
        		<div class="row footer_inner">        			
        			
        			<div class="col-lg-2">
        				<aside class="f_widget social_widget">
        					<div class="f_title">
        						<h3>Follow Me</h3>
        					</div>
        					<p>Let us be social</p>
        					<ul class="list">
							@if($user->user_facebook)
										<li><a href="{{$user->user_facebook}}"><i class="fa fa-facebook" target="_blank"></i></a></li>
										@else
										<!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li> -->
										@endif
										@if($user->user_twitter)
										<li><a href="{{$user->user_twitter}}"><i class="fa fa-twitter" target="_blank"></i></a></li>
										@else
										<!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
										@endif
										@if($user->user_linkedin)
										<li><a href="{{$user->user_linkedin}}"><i class="fa fa-linkedin" target="_blank"></i></a></li>
										@else
										<!-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
										@endif
										@if($user->user_instagram)
										<li><a href="{{$user->user_instagram}}"><i class="fa fa-instagram" target="_blank"></i></a></li>
										@else
										<!-- <li><a href="#"><i class="fa fa-instagram"></i></a></li> -->
										@endif
        					</ul>
        				</aside>
        			</div>
        		</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('portfolioback/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('portfolioback/js/popper.js') }}"></script>
<script src="{{ asset('portfolioback/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('portfolioback/js/stellar.js') }}"></script>
<script src="{{ asset('portfolioback/vendors/lightbox/simpleLightbox.min.js') }}"></script>
<script src="{{ asset('portfolioback/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('portfolioback/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('portfolioback/vendors/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('portfolioback/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('portfolioback/vendors/popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('portfolioback/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('portfolioback/vendors/counter-up/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('portfolioback/vendors/counter-up/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('portfolioback/js/mail-script.js') }}"></script>
<script src="{{ asset('portfolioback/js/theme.js') }}"></script>

    </body>
</html>