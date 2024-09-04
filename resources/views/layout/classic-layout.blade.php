<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>TalentLoom :: Portfolio</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{asset('templates/classic/assets/img/favicon_new.png')}}" rel="icon">
  <link href="{{asset('templates/classic/assets/img/favicon_new.png')}}">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('templates/classic/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('templates/classic/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('templates/classic/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('templates/classic/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('templates/classic/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('templates/classic/assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: DevFolio
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{route('dashboard')}}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename"><img src="{{asset('templates/classic/assets/img/loom_logo.png')}}" alt=""></h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#home" class="active">Home<br></a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#about">Skills</a></li>
          <li><a href="#education">Education/Experience</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Project</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="home" class="hero section dark-background">

      <img src="{{ asset('storage/app/public/' . $user->cover_picture) }}" alt="" data-aos="fade-in">

      <div class="container d-flex flex-column align-items-center justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
        <h2>I am {{$user->full_name}}</h2>        
        @php
    // Retrieve user roles major
    $userRolesMajor = $user->user_roles_major;

    // Retrieve user roles and convert them into an array
    $userRoles = $user->user_roles;
    $rolesArray = explode(',', $userRoles);

    // Prepare the data-typed-items string
    $typedItems = $userRolesMajor; // Start with the major role
    if (!empty($rolesArray)) {
        $typedItems .= ',' . implode(',', array_map('trim', $rolesArray)); // Append additional roles
    }
@endphp

<!-- Display the major role first, then each individual role -->
<p><span class="typed" data-typed-items="{{ $typedItems }}"></span></p>


        <!-- <p><span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p> -->
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-md-6">

            <div class="row justify-content-between gy-4">
              <div class="col-lg-5">
                <table>
                  <tr>
                    <td><img src="{{ asset('storage/app/public/' . $user->user_picture) }}" class="img-fluid" alt=""></td>
                  </tr>
                  <tr>
                    <td>@if($actionType == 'Edit')<a href="{{ route('profile-picture') }}" title="Edit Profile Picture">
                    <img src="{{asset('templates/classic/assets/img/edit.png')}}" alt="Edit Icon">@else  @endif</td>
                  </tr>
                </table>
                
              </div>
              <div class="col-lg-7 about-info">
                <table>
                  <tr>
                    <td><p><strong>Name: </strong> <span>{{$user->full_name}}</span></p></td>
                    <td>&nbsp;</td>
                    <td valign="top">@if($actionType == 'Edit')
												<a href="{{ route('user-about') }}" title="Edit Full name">
												<img src="{{asset('templates/classic/assets/img/edit.png')}}" alt="Edit Icon"></a>@else  @endif</td>
                  </tr>
                  <tr>
                    <td><p><strong>Role: </strong> <span>{{$user->user_roles_major}}</span></p></td>
                    <td>&nbsp;</td>
                    <td valign="top">@if($actionType == 'Edit')
												<a href="{{ route('user-role') }}" title="Edit role">
												<img src="{{asset('templates/classic/assets/img/edit.png')}}" alt="Edit Icon"></a>@else  @endif</td>
                  </tr>
                  <tr>
                    <td><p><strong>Email: </strong> <span><a href="mailto:{{$user->email}}">{{$user->email}}</a></span></p></td>
                    <td>&nbsp;</td>
                    <td valign="top"></td>
                  </tr>
                  <tr>
                    <td><p><strong>Phone: </strong> <span>{{$user->country_code . ' ' . $user->user_phone}}</span></p></td>
                    <td>&nbsp;</td>
                    <td valign="top">@if($actionType == 'Edit')
												<a href="{{ route('user-about') }}" title="Edit Full name">
												<img src="{{asset('templates/classic/assets/img/edit.png')}}" alt="Edit Icon"></a>@else  @endif</td>
                  </tr>
                </table>  
                <table>
										<tr>
											<td>                
      <div class="social-links d-flex justify-content-center">
										@if($user->user_facebook)
										<a href="{{$user->user_facebook}}"><i class="bi bi-facebook" target="_blank"></i></a>&nbsp;&nbsp;
										@else
										<!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li> -->
										@endif
										@if($user->user_twitter)
										<a href="{{$user->user_twitter}}"><i class="bi bi-twitter-x" target="_blank"></i></a>&nbsp;&nbsp;
										@else
										<!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
										@endif
										@if($user->user_linkedin)
										<a href="{{$user->user_linkedin}}"><i class="bi bi-linkedin" target="_blank"></i></a>&nbsp;&nbsp;
										@else
										<!-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
										@endif
										@if($user->user_instagram)
										<a href="{{$user->user_instagram}}"><i class="bi bi-instagram" target="_blank"></i></a>&nbsp;&nbsp;
										@else
										<!-- <li><a href="#"><i class="fa fa-instagram"></i></a></li> -->
										@endif
  </div>
									</td>
										</tr>
										<tr>
										<td>@if($actionType == 'Edit')<a href="{{ route('user-about') }}" title="Edit socials">
										<img src="{{asset('templates/classic/assets/img/edit.png')}}" alt="Edit Icon"></a>@else  @endif</td>
										</tr>										
									</table>
              </div>
            </div>

            <div class="skills-content skills-animation">

            <table>
									<tr>
										<td><h5><strong><p class="style1 style1">Skills</p></strong> </h5></td>
										<td>&nbsp;&nbsp;&nbsp;</td>
										<td>@if($actionType == 'Edit')<a href="{{ route('user-skill') }}" title="Edit skills">
										<img src="{{asset('templates/classic/assets/img/edit.png')}}" alt="Edit Icon"></a>@else  @endif</td>
									</tr>
								</table>
              @if(!empty($userSkills))
							@foreach($userSkills as $userSkill)
              <div class="progress">
                <span class="skill"><span>{{$userSkill->user_skill}}</span> <i class="val">{{$userSkill->user_skill_level}}%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="{{$userSkill->user_skill_level}}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->
									@endforeach	
								@else
								<p></p>
								@endif
            </div>
            {{$userSkills->links()}}
          </div>

          <div class="col-md-6">
            <div class="about-me">
            <table>
								<tr>
									<td><h4 style="color: black;">ABOUT MYSELF</h4></td>
									<td>&nbsp;&nbsp;&nbsp;</td>
									<td valign="top">@if($actionType == 'Edit')<a href="{{ route('user-about') }}" title="Edit about info">
										<img src="{{asset('templates/classic/assets/img/edit.png')}}" alt="Edit Icon"></a>@else  @endif</td>
								</tr>
							</table>
              @if($user->user_about)
        					<p>{!!$user->user_about!!}</p>  
							@else
							<p></p>
							@endif
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Resume Section -->
    <section id="education" class="resume section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Education/Experience</h2>
        <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">            
            <table>
              <tr>
                <td><h3 class="resume-title">Education</h3></td>
                <td>&nbsp;</td>
                <td>@if($actionType == 'Edit')<a href="{{ route('user-education') }}" title="Edit education info">
                <img src="{{asset('templates/classic/assets/img/edit1.png')}}" alt="Edit Icon"></a>@else  @endif</td>
              </tr>
            </table>

            @if(!empty($userEducation))
							@foreach($userEducation as $userEducations)
								<li>
									<span></span>
						<div class="resume-item">
              <h4>{{$userEducations->college_qualification}}</h4>
              <h5>{{$userEducations->college_year}}</h5>
              <p><em>{{$userEducations->college_name}}</em></p>
              <p><a href="{{ asset('storage/app/public/' . $userEducations->college_certificate) }}" target="_blank">View Certificate</a> </p>
            </div><!-- Edn Resume Item --> 
								</li>								
								@endforeach
								@else
								<p></p>
								@endif

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <table>
              <tr>
                <td><h3 class="resume-title">Professional Experience</h3></td>
                <td>&nbsp;</td>
                <td>@if($actionType == 'Edit')<a href="{{ route('user-experience') }}" title="Edit experience info">
                <img src="{{asset('templates/classic/assets/img/edit1.png')}}" alt="Edit Icon"></a>@else  @endif</td>
              </tr>
            </table>

            @if(!empty($userExperience))
							@foreach($userExperience as $userExperiences)
								<li>
									<span></span>
									<div class="resume-item">
              <h4>{{$userExperiences->user_company_role}}</h4>
              <h5>{{$userExperiences->company_year}}</h5>
              <p><em>{{$userExperiences->user_company}} </em></p>
              <p>{!! $userExperiences->user_about_role !!}</p>
            </div><!-- Edn Resume Item --> 
								</li>								
								@endforeach
								@else
								<p></p>
								@endif

          </div>

        </div>

      </div>

    </section><!-- /Resume Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
      <h2>Services</h2>@if($actionType == 'Edit')<a href="{{ route('user-service') }}" title="Edit service info">
      <img src="{{asset('templates/classic/assets/img/edit1.png')}}" alt="Edit Icon"></a>@else  @endif
           
        <p>If you are looking for the best to grow and improve your business, you don't have to search for too long, i am available to work with you.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">          

        @if(!empty($userService))
					@foreach($userService as $userServices)
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-calendar4-week"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>{{$userServices->user_service}}</h3>
              </a>
              <p>{!!$userServices->user_service_description!!}</p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->      			
        			@endforeach
					@else
					<p></p>
					@endif         

        </div>

      </div>

    </section><!-- /Services Section -->    

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
      <h2>Portfolio</h2>@if($actionType == 'Edit')<a href="{{ route('user-portfolio') }}" title="Edit portfolio">
      <img src="{{asset('templates/classic/assets/img/edit1.png')}}" alt="Edit Icon"></a>@else  @endif
      <p>Check out some of my projects.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Image</li>
            <li data-filter=".filter-product">Document</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
          <!-- ====Begin portfolio Images----- -->
					@if(!empty($userPortfolioImage))
					@foreach($userPortfolioImage as $userPortfolioImages)
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="{{ asset('storage/app/public/' . $userPortfolioImages->file_url) }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{$userPortfolioImages->file_name}}</h4>
                <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                <a href="{{ asset('storage/app/public/' . $userPortfolioImages->file_url) }}" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
              </div>
            </div><!-- End Portfolio Item -->
					@endforeach
        			@else
					<p><a href="{{route('user-portfolio')}}" target="_blank">Portfolio(images) has not been uploaded</a></p>
					@endif
					<!-- ==end portfolio images -->

            <!-- Begin portfolio Documents -->
					@if (!empty($userPortfolioDocument))
						@foreach ($userPortfolioDocument as $userPortfolioDocuments)
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
										@if (Str::endsWith($userPortfolioDocuments->file_url, '.pdf'))
											<object data="{{ asset('storage/app/public/' . $userPortfolioDocuments->file_url) }}" type="application/pdf" width="100%" height="250">
												<p>Your browser does not support PDFs. <a href="{{ asset('storage/app/public/' . $userPortfolioDocuments->file_url) }}">Download PDF</a> instead.</p>
											</object>
                      <h4>{{ $userPortfolioDocuments->file_name }}</h4>
                    <strong><p><a href="{{ asset('storage/app/public/' . $userPortfolioDocuments->file_url) }}" target="_blank">View File</a> </p></strong>	
										@else
                    <img src="{{ asset('storage/app/public/' . $userPortfolioDocuments->file_url) }}" class="img-fluid" alt="">
                    <strong><p><a href="{{ asset('storage/app/public/' . $userPortfolioDocuments->file_url) }}" target="_blank">View File</a> </p></strong>	
                    <h4>{{ $userPortfolioDocuments->file_name }}</h4>
                    <strong><p><a href="{{ asset('storage/app/public/' . $userPortfolioDocuments->file_url) }}" target="_blank">View File</a> </p></strong>	
										@endif
									</div>															
						@endforeach
					@else
						<p><a href="{{ route('user-portfolio') }}" target="_blank">Portfolio(documents) has not been uploaded</a></p>
					@endif
					<!-- End portfolio documents -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->
  </main>

  <footer id="footer" class="footer accent-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">TalentLoom</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="social-links d-flex justify-content-center">
										@if($user->user_facebook)
										<a href="{{$user->user_facebook}}"><i class="bi bi-facebook" target="_blank"></i></a>&nbsp;&nbsp;
										@else
										<!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li> -->
										@endif
										@if($user->user_twitter)
										<a href="{{$user->user_twitter}}"><i class="bi bi-twitter-x" target="_blank"></i></a>&nbsp;&nbsp;
										@else
										<!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
										@endif
										@if($user->user_linkedin)
										<a href="{{$user->user_linkedin}}"><i class="bi bi-linkedin" target="_blank"></i></a>&nbsp;&nbsp;
										@else
										<!-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
										@endif
										@if($user->user_instagram)
										<a href="{{$user->user_instagram}}"><i class="bi bi-instagram" target="_blank"></i></a>&nbsp;&nbsp;
										@else
										<!-- <li><a href="#"><i class="fa fa-instagram"></i></a></li> -->
										@endif
  </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Powered by <a href="https://kingsconsult.com.ng/">Kings Branding Consult</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
<script src="{{ asset('templates/classic/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('templates/classic/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('templates/classic/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('templates/classic/assets/vendor/typed.js/typed.umd.js') }}"></script>
<script src="{{ asset('templates/classic/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ asset('templates/classic/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('templates/classic/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('templates/classic/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('templates/classic/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('templates/classic/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

<!-- Main JS File -->
<script src="{{ asset('templates/classic/assets/js/main.js') }}"></script>


</body>

</html>