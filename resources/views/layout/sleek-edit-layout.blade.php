<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <meta name="copyright" content="Kings Branding Consult, https://www.kingsconsult.com.ng/">
  
  <title>TalentLoom :: Portfolio</title>
  
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('templates/sleek/assets/img/favicon_new.png') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('templates/sleek/assets/css/themify-icons.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('templates/sleek/assets/css/bootstrap.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('templates/sleek/assets/vendor/animate/animate.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('templates/sleek/assets/vendor/owl-carousel/owl.carousel.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('templates/sleek/assets/vendor/perfect-scrollbar/css/perfect-scrollbar.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('templates/sleek/assets/vendor/nice-select/css/nice-select.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('templates/sleek/assets/vendor/fancybox/css/jquery.fancybox.min.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('templates/sleek/assets/css/virtual.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('templates/sleek/assets/css/minibar.virtual.css') }}">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="theme-purple">
  
  <!-- Back to top button -->
  <div class="btn-back_to_top">
    <span class="ti-arrow-up"></span>
  </div>
  
  <div class="topbar-nav fixed-top">
    <!-- <div class="brand">
      <img src="{{ asset('templates/sleek/assets/img/favicon_new.png') }}" alt="" width="30" height="30">
    </div> -->
    <h3 class="ml-1"><img src="{{ asset('templates/sleek/assets/img/favicon_new.png') }}" alt="" width="30" height="30"></h3>
    <button class="btn-fab toggle-menu mr-3"><span class="ti-menu"></span></button>
  </div>
  
  <!-- Minibar -->
  <div class="minibar">
    <div class="header">
      <div class="brand">
        
      </div>
    </div>
    <div class="content">
      <ul class="main-menu">
        <li class="menu-item">
          <a href="#home" class="menu-link">
            <span><img src="{{asset('templates/sleek/assets/img/small_logo.png')}}" alt="Photo Profile"></span>
            <span class="caption">TalentLoom</span>
          </a>
        </li>
        <li class="menu-item active">
          <a href="#home" class="menu-link">
            <span class="icon ti-home"></span>
            <span class="caption">Home</span>
          </a>
        </li>
        <!-- <li class="menu-item">
          <a href="#about" class="menu-link">
            <span class="icon ti-user"></span>
            <span class="caption">About</span>
          </a>
        </li> -->
        <li class="menu-item">
          <a href="#skills" class="menu-link">
            <span class="icon ti-user"></span>
            <span class="caption">Skills</span>
          </a>
        </li>
        <li class="menu-item">
          <a href="#education" class="menu-link">
            <span class="icon ti-book"></span>
            <span class="caption">Education/Experience</span>
          </a>
        </li>
        <li class="menu-item">
          <a href="#services" class="menu-link">
            <span class="icon ti-file"></span>
            <span class="caption">Service</span>
          </a>
        </li>        
        <li class="menu-item">
          <a href="#portfolio" class="menu-link">
            <span class="icon ti-briefcase"></span>
            <span class="caption">Project</span>
          </a>
        </li> 
      </ul>
    </div>
  </div>   
  
  <div class="vg-main-wrapper">
    <!-- Page About -->
    <div class="vg-page page-about" id="home">
      <!-- Profile -->
      <div class="container py-3">
        <div class="row">
          <div class="col-md-6">
            <div class="img-place wow zoomIn">
            <table>
                  <tr>
                    <td><img src="{{ asset('storage/' . $user->user_picture) }}" class="img-fluid" alt=""></td>
                  </tr>
                  <tr>
                    <td>@if($actionType == 'Edit')<a href="{{ route('profile-picture') }}" title="Edit Profile Picture">
                    <img src="{{asset('templates/classic/assets/img/edit.png')}}" alt="Edit Icon">@else  @endif</td>
                  </tr>
                </table>
            </div>
          </div>
          <div class="col-md-6">
            <div class="caption wow fadeInRight">
            <table>
                  <tr>
                    <td><h2 class="fg-dark">{{$user->full_name}}</h2></td>
                    <td>&nbsp;</td>
                    <td valign="top">@if($actionType == 'Edit')
												<a href="{{ route('user-about') }}" title="Edit Full name">
												<img src="{{asset('templates/classic/assets/img/edit.png')}}" alt="Edit Icon"></a>@else  @endif</td>
                  </tr>
                  <tr>
                    <td><p class="fg-theme fw-medium">{{$user->user_roles_major}}</p></td>
                    <td>&nbsp;</td>
                    <td valign="top">@if($actionType == 'Edit')
												<a href="{{ route('user-role') }}" title="Edit role">
												<img src="{{asset('templates/classic/assets/img/edit.png')}}" alt="Edit Icon"></a>@else  @endif</td>
                  </tr>
</table>
                  @if($user->user_about)
        					<p>{!!$user->user_about!!}</p>  
							@else
							<p>About me has not been updated.</p>
							@endif
              <p>@if($actionType == 'Edit')<a href="{{ route('user-about') }}" title="Edit about info">
              <img src="{{asset('templates/classic/assets/img/edit.png')}}" alt="Edit Icon"></a>@else  @endif</p>
              <table>
                <tr>
                    <td><p class="fg-dark"><i class="fas fa-envelope"></i> <a href="mailto:{{$user->email}}">{{$user->email}}</a></p></td>
                    <td>&nbsp;</td>
                    <td valign="top"></td>
                  </tr>
                  <tr>
                    <td><p class="fg-dark"><i class="fas fa-phone"></i> {{$user->country_code . ' ' . $user->user_phone}}</p></td>
                    <td>&nbsp;</td>
                    <td valign="top">@if($actionType == 'Edit')
												<a href="{{ route('user-about') }}" title="Edit phone no">
												<img src="{{asset('templates/classic/assets/img/edit.png')}}" alt="Edit Icon"></a>@else  @endif</td>
                  </tr>  
              </table>              
                  @if($user->user_facebook)
                  <a href="{{$user->user_facebook}}" class="btn btn-theme btn-rounded"><i class="fab fa-facebook-f"></i></a>
										@else
										<!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li> -->
										@endif
                    @if($user->user_twitter)
										<a href="{{$user->user_twitter}}" class="btn btn-theme btn-rounded"><i class="fab fa-x"></i></a>
										@else
										<!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
										@endif
										@if($user->user_linkedin)
										<a href="{{$user->user_linkedin}}" class="btn btn-theme btn-rounded"><i class="fab fa-linkedin-in"></i></a>
										@else
										<!-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
										@endif
										@if($user->user_instagram)
										<a href="{{$user->user_instagram}}" class="btn btn-theme btn-rounded"><i class="fab fa-instagram"></i></a>
										@else
										<!-- <li><a href="#"><i class="fa fa-instagram"></i></a></li> -->
										@endif
                    <table>
                      <tr>
										<td>@if($actionType == 'Edit')<a href="{{ route('user-about') }}" title="Edit socials">
										<img src="{{asset('templates/classic/assets/img/edit.png')}}" alt="Edit Icon"></a>@else  @endif</td>
										</tr>
                    </table>                    

            </div>
          </div>
        </div>
      </div> <!-- End profile -->

      <!-- Skills -->
      <div class="vg-page page-about" id="skills">
      <div class="container mt-5">        
        <h1 class="text-center fg-dark wow fadeInUp">My Skills
        @if($actionType == 'Edit')<a href="{{ route('user-skill') }}" title="Edit skills">
        <img src="{{asset('templates/classic/assets/img/edit.png')}}" alt="Edit Icon"></a>@else  @endif
        </h1>                
        <div class="row py-3">
          <div class="col-md-6">
            <!-- <h4 class="wow fadeInUp">Coding skills</h4> -->
            @if(!empty($userSkills))
							@foreach($userSkills as $userSkill)
              <div class="progress-wrapper wow fadeInUp">
              <span class="caption">{{$userSkill->user_skill}}</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: {{$userSkill->user_skill_level}}%;" aria-valuenow="{{$userSkill->user_skill_level}}" aria-valuemin="0" aria-valuemax="100">{{$userSkill->user_skill_level}}%</div>
              </div>
            </div>
									@endforeach	
								@else
								<p>Skills has not been updated.</p>
								@endif           
                {{$userSkills->links()}}
          </div>
          
        </div>
      </div> 
    </div>
      <!-- End skills -->
      <!-- Education/Experience -->
      <div class="vg-page page-about" id="education">
      <div class="container pt-5">
        <div class="row">
          <div class="col-md-6 wow fadeInRight">
            <h2 class="fg-dark">Education
            @if($actionType == 'Edit')<a href="{{ route('user-education') }}" title="Edit education info">
            <img src="{{asset('templates/classic/assets/img/edit1.png')}}" alt="Edit Icon"></a>@else  @endif
            </h2>
            <ul class="timeline mt-4 pr-md-5">
            @if(!empty($userEducation))
							@foreach($userEducation as $userEducations)
              <li>
                <div class="title">{{$userEducations->college_year}}</div>
                <div class="details">
                  <h5>{{$userEducations->college_qualification}}</h5>
                  <small class="fg-theme">{{$userEducations->college_name}}</small>
                  <p><a href="{{ asset('storage/' . $userEducations->college_certificate) }}" target="_blank">View Certificate</a> </p>
                </div>
              </li>						
								@endforeach
								@else
								<p>Education/certification has not been updated.</p>
								@endif              
            </ul>
          </div>
          <div class="col-md-6 wow fadeInRight" data-wow-delay="200ms">
            <h2 class="fg-dark">Experience
            @if($actionType == 'Edit')<a href="{{ route('user-experience') }}" title="Edit experience info">
            <img src="{{asset('templates/classic/assets/img/edit1.png')}}" alt="Edit Icon"></a>@else  @endif
            </h2>
            <ul class="timeline mt-4 pr-md-5">
            @if(!empty($userExperience))
							@foreach($userExperience as $userExperiences)
              <li>
                <div class="title">{{$userExperiences->company_year}}</div>
                <div class="details">
                  <h5>{{$userExperiences->user_company_role}}</h5>
                  <small class="fg-theme">{{$userExperiences->user_company}}</small>
                  <p>{!! $userExperiences->user_about_role !!}</p>
                </div>
              </li>							
								@endforeach
								@else
								<p>Work experience has not been updated.</p>						
                @endif              
            </ul>
          </div>
        </div>
      </div> 
    </div>
      <!-- End resume -->
    </div> <!-- End page about -->
    
    <!-- Page Service -->
    <div class="vg-page page-service" id="services">
      <h1 class="text-center wow fadeInUp">Services
      @if($actionType == 'Edit')<a href="{{ route('user-service') }}" title="Edit service info">
      <img src="{{asset('templates/classic/assets/img/edit1.png')}}" alt="Edit Icon"></a>@else  @endif
      </h1>
      <div class="container">
        <div class="row">
        @if(!empty($userService))
					@foreach($userService as $userServices)
          <div class="col-md-6 col-lg-4 wow fadeInUp">
            <div class="card card-body">
              <div class="iconic">
                <span class="ti-layout"></span>
              </div>
              <h4 class="fg-theme">{{$userServices->user_service}}</h4>
              <p>{!!$userServices->user_service_description!!}</p>
              <!-- <a href="#" class="btn btn-theme btn-rounded">Read More</a> -->
            </div>
          </div>   			
        			@endforeach
					@else
					<p>Services has not been updated.</p>
					@endif 

        </div>
      </div>
    </div> <!-- End page services -->
    
    
    
    <!-- Portfolio page -->
    <div class="vg-page page-portfolio" id="portfolio">
      <div class="container">
        <!-- <div class="text-center wow fadeInUp">
          <div class="badge badge-subhead">Portfolio</div>
        </div> -->
        <h1 class="text-center wow fadeInUp">Portfolio
        @if($actionType == 'Edit')<a href="{{ route('user-portfolio') }}" title="Edit portfolio">
        <img src="{{asset('templates/classic/assets/img/edit1.png')}}" alt="Edit Icon"></a>@else  @endif
        </h1>
        <div class="filterable-button py-3 wow fadeInUp" data-toggle="selected">
          <button class="btn btn-theme-outline selected" data-filter="*">All</button>
          <button class="btn btn-theme-outline" data-filter=".apps">Images</button>
          <button class="btn btn-theme-outline" data-filter=".template">Documents</button>
        </div>

        <div class="gridder my-3">
          <!-- ====Begin portfolio Images----- -->
					@if(!empty($userPortfolioImage))
					@foreach($userPortfolioImage as $userPortfolioImages)
          <div class="grid-item apps wow zoomIn">
            <div class="img-place" data-src="{{ asset('storage/' . $userPortfolioImages->file_url) }}" data-fancybox data-caption="<h5 class='fg-theme'>Mobile Travel App</h5> <p>Travel, Discovery</p>">
              <img src="{{ asset('storage/' . $userPortfolioImages->file_url) }}" alt="">
              <div class="img-caption">
                <h5 class="fg-theme">{{$userPortfolioImages->file_name}}</h5>
                <!-- <p>Travel, Discovery</p> -->
              </div>
            </div>
          </div>
					@endforeach
        			@else
					<p><a href="{{route('user-portfolio')}}" target="_blank">Portfolio(images) has not been uploaded</a></p>
					@endif
					<!-- ==end portfolio images -->

          <!-- Begin portfolio Documents -->
					@if (!empty($userPortfolioDocument))
						@foreach ($userPortfolioDocument as $userPortfolioDocuments)
            <div class="grid-item template wireframes wow zoomIn">
										@if (Str::endsWith($userPortfolioDocuments->file_url, '.pdf'))
											<object data="{{ asset('storage/' . $userPortfolioDocuments->file_url) }}" type="application/pdf" width="100%" height="250">
												<p>Your browser does not support PDFs. <a href="{{ asset('storage/app/public/' . $userPortfolioDocuments->file_url) }}">Download PDF</a> instead.</p>
											</object>
                      <h4>{{ $userPortfolioDocuments->file_name }}</h4>
                    <strong><p><a href="{{ asset('storage/' . $userPortfolioDocuments->file_url) }}" target="_blank">View File</a> </p></strong>	
										@else
                    <img src="{{ asset('storage/' . $userPortfolioDocuments->file_url) }}" class="img-fluid" alt="">
                    <strong><p><a href="{{ asset('storage/' . $userPortfolioDocuments->file_url) }}" target="_blank">View File</a> </p></strong>	
                    <h4>{{ $userPortfolioDocuments->file_name }}</h4>
                    <strong><p><a href="{{ asset('storage/' . $userPortfolioDocuments->file_url) }}" target="_blank">View File</a> </p></strong>	
										@endif
									</div>															
						@endforeach
					@else
						<p><a href="{{ route('user-portfolio') }}" target="_blank">Portfolio(documents) has not been uploaded</a></p>
					@endif
					<!-- End portfolio documents -->

        </div> <!-- End gridder -->
        <!-- <div class="text-center wow fadeInUp">
          <a href="javascript:void(0)" class="btn btn-theme">Load More</a>
        </div> -->
      </div>
    </div> <!-- End Portfolio page -->
    
    
    <!-- Footer -->
    <div class="vg-footer">
      <h1 class="text-center"><img src="{{asset('templates/sleek/assets/img/loom_logo.png')}}" alt=""></h1>
      <div class="container">
        <div class="row">
          <!-- <div class="col-lg-4 py-3">
            <div class="footer-info">
              <p>Where to find me</p>
              <hr class="divider">
              <p class="fs-large fg-white">1600 Amphitheatre Parkway Mountain View, California 94043 US</p>
            </div>
          </div> -->
          <div class="col-md-6 col-lg-3 py-3">
            <div class="float-lg-right">
              <p>Follow me</p>
              <hr class="divider">
              <ul class="list-unstyled">
                <li>
                  @if($user->user_facebook)
                  <a href="{{$user->user_facebook}}" class="fw-normal text-center"><i class="fab fa-facebook-f"></i></a>
										@else
										<!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li> -->
										@endif
                </li>
                    <li>
                      @if($user->user_twitter)
										<a href="{{$user->user_twitter}}" class="fw-normal text-center"><i class="fab fa-x"></i></a>
										@else
										<!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
										@endif
                    </li>
                    <li>
                      @if($user->user_linkedin)
										<a href="{{$user->user_linkedin}}" class="fw-normal text-center"><i class="fab fa-linkedin-in"></i></a>
										@else
										<!-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
										@endif
                    </li>
										<li>
                      @if($user->user_instagram)
										<a href="{{$user->user_instagram}}" class="fw-normal text-center"><i class="fab fa-instagram"></i></a>
										@else
										<!-- <li><a href="#"><i class="fa fa-instagram"></i></a></li> -->
										@endif
                    </li>
										
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 py-3">
            <div class="float-lg-right">
              <p>Contact me</p>
              <hr class="divider">
              <ul class="list-unstyled">
              @if($user->email)
                <li><a href="mailto:{{$user->email}}"></a>{{$user->email}}</li>
                @else
                @endif
                @if($user->user_phone)
                <li>{{$user->country_code . " " . $user->user_phone}}</li>  
                @else
                @endif              
              </ul>
            </div>
          </div>
        </div>
        <div class="row justify-content-center mt-3">
          <!-- <div class="col-12 mb-3">
            <h3 class="fw-normal text-center">Subscribe</h3>
          </div>
          <div class="col-lg-6">
            <form class="mb-3">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Email address">
                <input type="submit" class="btn btn-theme no-shadow" value="Subscribe">
              </div>
            </form>
          </div> -->
          <div class="col-12">
            <p class="text-center mb-0 mt-4">Copyright &copy;<?php echo "2023" . "-" . date('Y')?>. All right reserved | Powered by <a href="https://www.kingsconsult.com.ng/">Kings Branding Consult</a></p>
          </div>
        </div>
      </div>
    </div> <!-- End footer -->
  </div> <!-- End main wrapper -->
  
  
  <script src="{{ asset('templates/sleek/assets/js/jquery-3.5.1.min.js') }}"></script>

<script src="{{ asset('templates/sleek/assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('templates/sleek/assets/vendor/owl-carousel/owl.carousel.min.js') }}"></script>

<script src="{{ asset('templates/sleek/assets/vendor/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>

<script src="{{ asset('templates/sleek/assets/vendor/isotope/isotope.pkgd.min.js') }}"></script>

<script src="{{ asset('templates/sleek/assets/vendor/nice-select/js/jquery.nice-select.min.js') }}"></script>

<script src="{{ asset('templates/sleek/assets/vendor/fancybox/js/jquery.fancybox.min.js') }}"></script>

<script src="{{ asset('templates/sleek/assets/vendor/wow/wow.min.js') }}"></script>

<script src="{{ asset('templates/sleek/assets/vendor/animateNumber/jquery.animateNumber.min.js') }}"></script>

<script src="{{ asset('templates/sleek/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>

<script src="{{ asset('templates/sleek/assets/js/google-maps.js') }}"></script>

<script src="{{ asset('templates/sleek/assets/js/minibar-virtual.js') }}"></script>


  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>

</body>
</html>