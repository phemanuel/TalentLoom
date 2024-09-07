<!DOCTYPE html>
<html lang="en">


<head>
<title>@yield('pageTitle')</title>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Portfolio template that can be used to build personalized portfolio for individuals." />
    <meta name="author" content="Kings Branding Consult" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->
    <link rel="shortcut icon" href="{{asset('dashback/assets/img/favicon_new.png')}}">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashback/assets/css/vendors.css')}}" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashback/assets/css/style.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
    /* Success Alert */
    .alert.alert-success {
        background-color: #28a745; /* Green background color */
        color: #fff; /* White text color */
        padding: 10px; /* Padding around the text */
        border-radius: 5px; /* Rounded corners */
    }

    /* Error Alert */
    .alert.alert-error {
        background-color: #dc3545; /* Red background color */
        color: #fff; /* White text color */
        padding: 10px; /* Padding around the text */
        border-radius: 5px; /* Rounded corners */
    }
.style1 {color: #000000}
    .style3 {color: #000000; font-weight: bold; }
    </style>
    <style>
        /* body {
    font-family: Arial, sans-serif;
} */

.table-container {
    width: 100%;
    max-width: 100%; /* Adjust as needed */
    height: 100%; /* Adjust as needed */
    overflow: auto;
    border: 1px solid #ccc;
    padding: 5px;
    box-sizing: border-box;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f4f4f4;
    position: sticky;
    top: 0;
}
    </style>
</head>

<body>
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">
            
            <!-- begin app-header -->
            <header class="app-header top-bar">
                <!-- begin navbar -->
                <nav class="navbar navbar-expand-md">

                    <!-- begin navbar-header -->
                    <div class="navbar-header d-flex align-items-center">
                        <a href="javascript:void:(0)" class="mobile-toggle"><i class="ti ti-align-right"></i></a>
                        <a class="navbar-brand" href="{{route('home')}}">
                            <img src="{{asset('dashback/assets/img/loom_logo.png')}}" class="img-fluid logo-desktop" alt="logo" />
                            <img src="{{asset('dashback/assets/img/loom_logo.png')}}" class="img-fluid logo-mobile" alt="logo" />
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti ti-align-left"></i>
                    </button>
                    <!-- end navbar-header -->
                    <!-- begin navigation -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="navigation d-flex">
                            <ul class="navbar-nav nav-left">
                                <li class="nav-item">
                                    <a href="javascript:void(0)" class="nav-link sidebar-toggle">
                                        <i class="ti ti-align-right"></i>
                                    </a>
                                </li>
                                <li class="nav-item full-screen d-none d-lg-block" id="btnFullscreen">
                                    <a href="javascript:void(0)" class="nav-link expand">
                                        <i class="icon-size-fullscreen"></i>
                                    </a>
                                </li>
                            </ul><ul class="navbar-nav nav-right ml-auto"> 
                            <li class="nav-item dropdown">
                                @if($unreadMessagesCount == 0)
                                    <a class="nav-link dropdown-toggle" href="{{route('user-message')}}" id="navbarDropdown3" role="button"  aria-haspopup="true" aria-expanded="false">
                                        <i class="fe fe-bell"></i>
                                        <!-- <span class="notify">
                                                    <span class="blink"></span>
                                        <span class="dot"></span> -->
                                        </span>
                                    </a>  
                                    @elseif($unreadMessagesCount > 0)  
                                    <a class="nav-link dropdown-toggle" href="{{route('user-message')}}" id="navbarDropdown3" role="button"  aria-haspopup="true" aria-expanded="false">
                                        <i class="fe fe-bell"></i>
                                        <span class="notify">
                                                    <span class="blink"></span>
                                        <span class="dot"></span>
                                        </span>
                                    </a>
                                    @endif
                                </li>
                                <li class="nav-item dropdown user-profile">
                                    <a href="javascript:void(0)" class="nav-link dropdown-toggle " id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('storage/app/public/' . auth()->user()->user_picture) }}" alt="avtar-img">
                                        <span class="bg-success user-status"></span>
                                    </a>
                                    <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                                        <div class="bg-gradient px-4 py-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="mr-1">
                                                    <h4 class="text-white mb-0">{{auth()->user()->full_name}}</h4>
                                                    <small class="text-white">{{auth()->user()->email}}</small>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="p-4">
                                            <a class="dropdown-item d-flex nav-link" href="{{ route('logout') }}">
                                                <i class="zmdi zmdi-power"></i> Logout</a>                                           
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end navigation -->
                </nav>
                <!-- end navbar -->
            </header>
            <!-- end app-header -->
            <!-- begin app-container -->
            <div class="app-container">
                <!-- begin app-nabar -->
                <aside class="app-navbar">
                     <!-- begin sidebar-nav -->
                     <div class="sidebar-nav scrollbar scroll_light">
                        <ul class="metismenu " id="sidebarNav">
                            <li class="nav-static-title">Dashboard</li>
                            
                            <li><a href="{{ route('home') }}" aria-expanded="false"><i class="nav-icon ti ti-list"></i><span class="nav-title">TalentLoom Job Board</span></a> </li>
                            
                            <li><a href="{{ route('user-about') }}" aria-expanded="false"><i class="nav-icon ti ti-comment"></i><span class="nav-title">About Me</span></a> </li>
                            <li><a href="{{ route('user-role') }}" aria-expanded="false"><i class="nav-icon ti ti-info"></i><span class="nav-title">Roles</span></a> </li>
                            <li><a href="{{ route('user-skill') }}" aria-expanded="false"><i class="nav-icon ti ti-layout-grid4-alt"></i><span class="nav-title">Skills/Expertise</span></a> </li>
<li><a href="{{ route('user-service') }}" aria-expanded="false"><i class="nav-icon ti ti-layout-grid4-alt"></i><span class="nav-title">Services</span></a> </li>
                            <li><a href="{{ route('user-education') }}" aria-expanded="false"><i class="nav-icon ti ti-layout"></i><span class="nav-title">Education/Certification</span></a> </li>
                            <li><a href="{{ route('user-experience') }}" aria-expanded="false"><i class="nav-icon ti ti-pencil-alt"></i><span class="nav-title">Work Experience</span></a> </li> <li><a href="{{ route('user-portfolio') }}" aria-expanded="false"><i class="nav-icon ti ti-list"></i><span class="nav-title">Project</span></a> </li>    

<li class="active"><a href="{{ route('user-resources') }}" aria-expanded="false"><i class="nav-icon ti ti-layers"></i><span class="nav-title">Resources Hub</span></a></li>
<li><a href="{{ route('user-message') }}" aria-expanded="false"><i class="nav-icon ti ti-comment"></i><span class="nav-title">Message</span><span class="nav-label label label-success">{{$unreadMessagesCount}}</span></a></li><li class="nav-static-title">Account</li>                           
                            
                            <li><a href="{{ route('change-password') }}" aria-expanded="false"><i class="nav-icon ti ti-key"></i><span class="nav-title">Change Password</span></a>
                                                            </li>    
                            <li><a href="{{ route('logout') }}" aria-expanded="false"><i class="zmdi zmdi-power"></i><span class="nav-title">Logout</span></a>
                                                            </li>                        
                            
                        </ul>
                    </div>
                    <!-- end sidebar-nav -->
                </aside>
                <!-- end app-navbar -->
                <!-- begin app-main -->
                <div class="app-main" id="main">
                    <!-- begin container-fluid -->
                    <div class="container-fluid">
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-md-12 m-b-30">
                                <!-- begin page title -->
                                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                                    <div class="page-title mb-2 mb-sm-0">
                                        <h1>Resources Hub</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                    <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="{{ route('dashboard') }}"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item"> TalentLoom</li>
<li class="breadcrumb-item active text-primary" aria-current="page"><a href="{{route('user-message')}}">Message</a></li>
<li class="breadcrumb-item active text-primary" aria-current="page"><a href="{{route('user-resources')}}">Resources Hub</a></li>

                                                <li class="breadcrumb-item active text-primary" aria-current="page"><a href="#">Roles</a></li>
                                                 <li class="breadcrumb-item text-primary" aria-current="page"><a href="{{route('user-about')}}">About</a></li>
                                                <li class="breadcrumb-item text-primary" aria-current="page"><a href="{{route('user-skill')}}">Skills</a></li>
                                                <li class="breadcrumb-item text-primary" aria-current="page"><a href="{{route('user-service')}}">Services</a></li>
                                                <li class="breadcrumb-item text-primary" aria-current="page"><a href="{{route('user-education')}}">Education</a></li>
                                                <li class="breadcrumb-item text-primary" aria-current="page"><a href="{{route('user-experience')}}">Experience</a></li>
                                                <li class="breadcrumb-item text-primary" aria-current="page"><a href="{{route('user-portfolio')}}">Project</a></li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- end row -->
                        <!--faq-contant-start-->
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card card-statistics faq-contant p-0 p-sm-4">
                                    <div class="card-body">
                                        <div class="tab nav-center">
                                            <!-- <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                    <a class="nav-link  active show" id="design-tab" data-toggle="tab" href="#design" role="tab" aria-controls="design" aria-selected="false"> View Resources
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="research-tab" data-toggle="tab" href="#research" role="tab" aria-controls="research" aria-selected="true"> Post Jobs</a>
                                                </li>                                                
                                                
                                            </ul> -->
                                            <div class="tab-content" id="v-pills-tabContent">                                           
                                                <div class="tab-pane fade pt-20" id="research" role="tabpanel">
                                                    <div class="accordion" id="accordionsimplefill">
                                                        <div class="mb-2 acd-group">
                                                            <div class="card-header bg-primary rounded-0">
                                                                <h5 class="mb-0">
                                                                    <a href="#collapse" class="btn-block text-white text-left acd-heading" data-toggle="collapse"></a>
                                                                </h5>
                                                            </div>
                                                            <div id="collapse" class="collapse show" data-parent="#accordionsimplefill">
                                                                <div class="card-body">
                                                                <div class="col-xl-5 col-md-6 col-12 border-t border-right">
                                                <div class="page-account-form">
                                                    <div class="form-titel border-bottom p-3">
                                                    @if(session('success'))
                                                    <div class="alert alert-success">
                                                        {{ session('success') }}
                                                    </div>
                                                    @elseif(session('error'))
                                                    <div class="alert alert-danger">
                                                        {{ session('error') }}
                                                    </div>
                                                    @endif 
                                                    </div>
                                                    <div class="p-4">
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                 <div class="tab-pane fade show pt-20 active" id="design" role="tabpanel">
                                                    <div class="accordion" id="accordionsimpleborder">
                                                        <div class="mb-2 acd-group">
                                                            <div class="card-header rounded-0 bg-primary">
                                                                <h5 class="mb-0">
                                                                    <a href="#collapse01" class="btn-block text-left text-white acd-heading" data-toggle="collapse"></a>
                                                                </h5>
                                                            </div>
                                                            @if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
          @elseif(session('error'))
						<div class="alert alert-error">
							{{ session('error') }}
						</div>
						@endif
                                                            <div id="collapse01" class="collapse show" data-parent="#accordionsimpleborder">
                                                                <div class="card-body">                                                            
                                                                  <p>
                                                                  <div class="card-header d-sm-flex justify-content-between align-items-center py-3">
                                        <div class="card-heading mb-3 mb-sm-0">
                                            <h4 class="card-title"></h4>
                                        </div>
                                        <div class="dropdown">
                                            <input type="text" class="form-control form-control-sm" placeholder="Search....." id="searchInput"/>
                                        </div>
                                    </div>
                                    <!-- <div class="table-container"></div> -->
                                    <div class="row tabs-contant">

                                    <br>
                            <div class="col-xxl-6">
                                <div class="card card-statistics">
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title"></h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab tab-border nav-center">
                                        <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active show" id="e-books-tab" data-toggle="tab" href="#e-books" role="tab" aria-controls="e-books" aria-selected="true"> <i class="fas fa-book"></i> E-Books</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="v-tutorial-tab" data-toggle="tab" href="#v-tutorial" role="tab" aria-controls="v-tutorial" aria-selected="false"><i class="fas fa-video"></i> Video Tutorials </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="article-blog-tab" data-toggle="tab" href="#article-blog" role="tab" aria-controls="article-blog" aria-selected="false"><i class="fas fa-newspaper"></i> Articles/Blogs </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="template-tab" data-toggle="tab" href="#template" role="tab" aria-controls="template" aria-selected="false"><i class="fas fa-file-alt"></i> Templates </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="tools-tab" data-toggle="tab" href="#tools" role="tab" aria-controls="tools" aria-selected="false"><i class="fas fa-tools"></i> Tools/Softwares </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="guides-tab" data-toggle="tab" href="#guides" role="tab" aria-controls="guides" aria-selected="false"><i class="fas fa-bookmark"></i> Cheat Sheet/Guides </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="checklist-tab" data-toggle="tab" href="#checklist" role="tab" aria-controls="checklist" aria-selected="false"><i class="fa fa-check-square"></i> Checklists </a>
                                                </li>
                                                <!-- <li class="nav-item">
                                                    <a class="nav-link" id="quiz-tab" data-toggle="tab" href="#quiz" role="tab" aria-controls="quiz" aria-selected="false"><i class="fas fa-question-circle"></i> Interactive Quiz </a>
                                                </li> -->
                                            </ul>
                                            <div class="tab-content">
                                                <!-- ebook - start -->
                                                <div class="tab-pane fade active show" id="e-books" role="tabpanel" aria-labelledby="e-books-tab">
                                                    <strong><p style="color: black;">Digital books related to various skill set and industry.</p></strong>
                                                    <hr>
                                                    <!-- <div class="table-container"> -->
                                                    <!-- start app main -->
                                                    <div class="row">
                                                    @foreach($resourceEbook as $rs)
                                                        <div class="col-xl-3 col-sm-6">
                                                            <div class="card card-statistics">                                    
                                                                <div class="card-body">
                                                                    <div class="text-center p-2">
                                                                        <div class="mb-2">
                                                                            @if(!empty($rs->file_path))
                                                                            <img src="{{ asset('dashback/assets/img/file-icon/pdf.png') }}" alt="pdf-img">
                                                                            @elseif(!empty($rs->url))
                                                                            <img src="{{ asset('dashback/assets/img/file-icon/url.png') }}" alt="url-img">
                                                                            @else  
                                                                            <!-- Optionally add a default icon or leave empty -->
                                                                            @endif
                                                                        </div>
                                                                        <h4 class="mb-0">{{ $rs->title }}</h4>
                                                                        @if(!empty($rs->file_path)) 
                                                                        <p class="mb-2">{{ formatFileSize($rs->file_size) }}</p>
                                                                        @else  @endif
                                                                        @if(!empty($rs->file_path)) 
                                                                        <button class="btn btn-primary open-modal" data-toggle="modal" data-target="#resourceModal" 
                                                                                data-file-path="{{ asset('storage/app/public/' . $rs->file_path) }}" 
                                                                                data-title="{{ $rs->title }}">Read</button>
                                                                        @elseif(!empty($rs->url))
                                                                        <a href="{{ $rs->url }}" class="btn btn-primary" target="_blank">Read</a>
                                                                        @else
                                                                        <!-- Optionally add a default button or leave empty -->
                                                                        @endif
                                                                    </div>
                                                                </div>                                    
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        {{$resourceEbook->links()}}
                            
</div>                                                    <!-- end app main -->
                                                    <!-- </div> -->
                                                
                                                </div>
                                                <!-- ebook - end -->

                                        <!-- vtutorial - start -->
                                        <div class="tab-pane fade" id="v-tutorial" role="tabpanel" aria-labelledby="v-tutorial-tab">
                                                   <strong><p style="color: black;">Recorded or live tutorials on relevant topics relating to your skill set.</p></strong> 
                                                   <!-- <div class="table-container"> -->
                                                   <!-- start app main -->
                                                    <div class="row">
                                                    @foreach($resourceVtutorial as $rs)
                                                    <div class="col-xl-3 col-sm-6">
                                                        <div class="card card-statistics">
                                                            <div class="card-body">
                                                                <div class="text-center p-2">
                                                                    <div class="mb-2">
                                                                        @if(!empty($rs->file_path))
                                                                        <img src="{{ asset('dashback/assets/img/file-icon/vid.png') }}" alt="vid-img">
                                                                        @elseif(!empty($rs->url))
                                                                        <img src="{{ asset('dashback/assets/img/file-icon/vid.png') }}" alt="vid-img">
                                                                        @else
                                                                        <!-- Optionally add a default icon or leave empty -->
                                                                        @endif
                                                                    </div>
                                                                    <h4 class="mb-0">{{ $rs->title }}</h4>
                                                                    @if(!empty($rs->file_path)) 
                                                                        <p class="mb-2">{{ formatFileSize($rs->file_size) }}</p>
                                                                        @else  @endif
                                                                    <button class="btn btn-primary open-video-modal" 
                                                                    data-toggle="modal" 
                                                                    data-target="#videoModal" 
                                                                    data-url="{{ $rs->file_path ? asset('storage/app/public/'.$rs->file_path) : str_replace('watch?v=', 'embed/', $rs->url) }}" 
                                                                    data-title="{{ $rs->title }}">Watch Video</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    {{$resourceVtutorial->links()}}
                                                    </div>
                                                   
                                                   <!-- end app main -->

                                                    <!-- </div> -->
                                                   
                                                </div>
                                                <!-- vtutorial - end -->

                                                 <!-- article - start -->
                                                 <div class="tab-pane fade" id="article-blog" role="tabpanel" aria-labelledby="article-blog-tab">
                                                    <strong><p style="color: black;">Curated articles and blog posts that provide valuable insights and tips.</p></strong>
                                                    <hr>
                                                    <!-- <div class="table-container"> -->
                                                    <!-- start app main -->
                                                    <div class="row">
                                                    @foreach($resourceArticle as $rs)
                                                        <div class="col-xl-3 col-sm-6">
                                                            <div class="card card-statistics">                                    
                                                                <div class="card-body">
                                                                    <div class="text-center p-2">
                                                                        <div class="mb-2">
                                                                            @if(!empty($rs->file_path))
                                                                            <img src="{{ asset('dashback/assets/img/file-icon/pdf.png') }}" alt="pdf-img">
                                                                            @elseif(!empty($rs->url))
                                                                            <img src="{{ asset('dashback/assets/img/file-icon/url.png') }}" alt="url-img">
                                                                            @else  
                                                                            <!-- Optionally add a default icon or leave empty -->
                                                                            @endif
                                                                        </div>
                                                                        <h4 class="mb-0">{{ $rs->title }}</h4>
                                                                        @if(!empty($rs->file_path)) 
                                                                        <p class="mb-2">{{ formatFileSize($rs->file_size) }}</p>
                                                                        @else  @endif
                                                                        @if(!empty($rs->file_path)) 
                                                                        <button class="btn btn-primary open-modal" data-toggle="modal" data-target="#resourceModal" 
                                                                                data-file-path="{{ asset('storage/app/public/' . $rs->file_path) }}" 
                                                                                data-title="{{ $rs->title }}">Read</button>
                                                                        @elseif(!empty($rs->url))
                                                                        <a href="{{ $rs->url }}" class="btn btn-primary" target="_blank">Read</a>
                                                                        @else
                                                                        <!-- Optionally add a default button or leave empty -->
                                                                        @endif
                                                                    </div>
                                                                </div>                                    
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        {{$resourceArticle->links()}}
                            
</div>                                                    <!-- end app main -->
                                                    <!-- </div> -->
                                                
                                                </div>
                                                <!-- article - end -->

                                                      <!-- template - start -->
                                                      <div class="tab-pane fade" id="template" role="tabpanel" aria-labelledby="template-tab">
                                                    <strong><p style="color: black;">Downloadable templates for documents, resumes, proposals, or project planning.</p></strong>
                                                    <hr>
                                                    <!-- <div class="table-container"> -->
                                                    <!-- start app main -->
                                                    <div class="row">
                                                    @foreach($resourceTemplate as $rs)
                                                        <div class="col-xl-3 col-sm-6">
                                                            <div class="card card-statistics">                                    
                                                                <div class="card-body">
                                                                    <div class="text-center p-2">
                                                                        <div class="mb-2">
                                                                            @if(!empty($rs->file_path))
                                                                            <img src="{{ asset('dashback/assets/img/file-icon/pdf.png') }}" alt="pdf-img">
                                                                            @elseif(!empty($rs->url))
                                                                            <img src="{{ asset('dashback/assets/img/file-icon/url.png') }}" alt="url-img">
                                                                            @else  
                                                                            <!-- Optionally add a default icon or leave empty -->
                                                                            @endif
                                                                        </div>
                                                                        <h4 class="mb-0">{{ $rs->title }}</h4>
                                                                        @if(!empty($rs->file_path)) 
                                                                        <p class="mb-2">{{ formatFileSize($rs->file_size) }}</p>
                                                                        @else  @endif
                                                                        @if(!empty($rs->file_path)) 
                                                                        <button class="btn btn-primary open-modal" data-toggle="modal" data-target="#resourceModal" 
                                                                                data-file-path="{{ asset('storage/app/public/' . $rs->file_path) }}" 
                                                                                data-title="{{ $rs->title }}">View</button>
                                                                        @elseif(!empty($rs->url))
                                                                        <a href="{{ $rs->url }}" class="btn btn-primary" target="_blank">View</a>
                                                                        @else
                                                                        <!-- Optionally add a default button or leave empty -->
                                                                        @endif
                                                                    </div>
                                                                </div>                                    
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        {{$resourceTemplate->links()}}
                            
</div>                                                    <!-- end app main -->
                                                    <!-- </div> -->
                                                
                                                </div>
                                                <!-- template - end -->

                                                <!-- tools - start -->
                                                <div class="tab-pane fade" id="tools" role="tabpanel" aria-labelledby="tools-tab">
                                                    <strong><p style="color: black;">Recommendations and guides on using specific tools or software relevant to their skills.</p></strong>
                                                    <hr>
                                                    <!-- <div class="table-container"> -->
                                                    <!-- start app main -->
                                                    <div class="row">
                                                    @foreach($resourceTool as $rs)
                                                        <div class="col-xl-3 col-sm-6">
                                                            <div class="card card-statistics">                                    
                                                                <div class="card-body">
                                                                    <div class="text-center p-2">
                                                                        <div class="mb-2">
                                                                            @if(!empty($rs->file_path))
                                                                            <img src="{{ asset('dashback/assets/img/file-icon/pdf.png') }}" alt="pdf-img">
                                                                            @elseif(!empty($rs->url))
                                                                            <img src="{{ asset('dashback/assets/img/file-icon/url.png') }}" alt="url-img">
                                                                            @else  
                                                                            <!-- Optionally add a default icon or leave empty -->
                                                                            @endif
                                                                        </div>
                                                                        <h4 class="mb-0">{{ $rs->title }}</h4>
                                                                        @if(!empty($rs->file_path)) 
                                                                        <p class="mb-2">{{ formatFileSize($rs->file_size) }}</p>
                                                                        @else  @endif
                                                                        @if(!empty($rs->file_path)) 
                                                                        <button class="btn btn-primary open-modal" data-toggle="modal" data-target="#resourceModal" 
                                                                                data-file-path="{{ asset('storage/app/public/' . $rs->file_path) }}" 
                                                                                data-title="{{ $rs->title }}">Read</button>
                                                                        @elseif(!empty($rs->url))
                                                                        <a href="{{ $rs->url }}" class="btn btn-primary" target="_blank">Download</a>
                                                                        @else
                                                                        <!-- Optionally add a default button or leave empty -->
                                                                        @endif
                                                                    </div>
                                                                </div>                                    
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        {{$resourceTool->links()}}
                            
</div>                                                    <!-- end app main -->
                                                    <!-- </div> -->
                                                
                                                </div>
                                                <!-- tools - end -->

                                                <!-- cheat-sheet - start -->
                                                <div class="tab-pane fade" id="guides" role="tabpanel" aria-labelledby="guides-tab">
                                                    <strong><p style="color: black;">Quick reference guides for technical skills or best practices.</p></strong>
                                                    <hr>
                                                    <!-- <div class="table-container"> -->
                                                    <!-- start app main -->
                                                    <div class="row">
                                                    @foreach($resourceCheatSheet as $rs)
                                                        <div class="col-xl-3 col-sm-6">
                                                            <div class="card card-statistics">                                    
                                                                <div class="card-body">
                                                                    <div class="text-center p-2">
                                                                        <div class="mb-2">
                                                                            @if(!empty($rs->file_path))
                                                                            <img src="{{ asset('dashback/assets/img/file-icon/pdf.png') }}" alt="pdf-img">
                                                                            @elseif(!empty($rs->url))
                                                                            <img src="{{ asset('dashback/assets/img/file-icon/url.png') }}" alt="url-img">
                                                                            @else  
                                                                            <!-- Optionally add a default icon or leave empty -->
                                                                            @endif
                                                                        </div>
                                                                        <h4 class="mb-0">{{ $rs->title }}</h4>
                                                                        @if(!empty($rs->file_path)) 
                                                                        <p class="mb-2">{{ formatFileSize($rs->file_size) }}</p>
                                                                        @else  @endif
                                                                        @if(!empty($rs->file_path)) 
                                                                        <button class="btn btn-primary open-modal" data-toggle="modal" data-target="#resourceModal" 
                                                                                data-file-path="{{ asset('storage/app/public/' . $rs->file_path) }}" 
                                                                                data-title="{{ $rs->title }}">Read</button>
                                                                        @elseif(!empty($rs->url))
                                                                        <a href="{{ $rs->url }}" class="btn btn-primary" target="_blank">View</a>
                                                                        @else
                                                                        <!-- Optionally add a default button or leave empty -->
                                                                        @endif
                                                                    </div>
                                                                </div>                                    
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        {{$resourceCheatSheet->links()}}
                            
</div>                                                    <!-- end app main -->
                                                    <!-- </div> -->
                                                
                                                </div>
                                                <!-- cheat-sheet - end -->

                                                <!-- checklist - start -->
                                                <div class="tab-pane fade" id="checklist" role="tabpanel" aria-labelledby="checklist-tab">
                                                    <strong><p style="color: black;">Downloadable checklists to ensure best practices are followed in various tasks.</p></strong>
                                                    <hr>
                                                    <!-- <div class="table-container"> -->
                                                    <!-- start app main -->
                                                    <div class="row">
                                                    @foreach($resourceChecklist as $rs)
                                                        <div class="col-xl-3 col-sm-6">
                                                            <div class="card card-statistics">                                    
                                                                <div class="card-body">
                                                                    <div class="text-center p-2">
                                                                        <div class="mb-2">
                                                                            @if(!empty($rs->file_path))
                                                                            <img src="{{ asset('dashback/assets/img/file-icon/pdf.png') }}" alt="pdf-img">
                                                                            @elseif(!empty($rs->url))
                                                                            <img src="{{ asset('dashback/assets/img/file-icon/url.png') }}" alt="url-img">
                                                                            @else  
                                                                            <!-- Optionally add a default icon or leave empty -->
                                                                            @endif
                                                                        </div>
                                                                        <h4 class="mb-0">{{ $rs->title }}</h4>
                                                                        @if(!empty($rs->file_path)) 
                                                                        <p class="mb-2">{{ formatFileSize($rs->file_size) }}</p>
                                                                        @else  @endif
                                                                        @if(!empty($rs->file_path)) 
                                                                        <button class="btn btn-primary open-modal" data-toggle="modal" data-target="#resourceModal" 
                                                                                data-file-path="{{ asset('storage/app/public/' . $rs->file_path) }}" 
                                                                                data-title="{{ $rs->title }}">Read</button>
                                                                        @elseif(!empty($rs->url))
                                                                        <a href="{{ $rs->url }}" class="btn btn-primary" target="_blank">View</a>
                                                                        @else
                                                                        <!-- Optionally add a default button or leave empty -->
                                                                        @endif
                                                                    </div>
                                                                </div>                                    
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        {{$resourceChecklist->links()}}
                            
</div>                                                    <!-- end app main -->
                                                    <!-- </div> -->
                                                
                                                </div>
                                                <!-- checklist- end -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                                    
                                                                  
                                                                  </p>
                                               
                                                                </div>
                                                            </div>
                                                        </div>                                                       
                                                        
                                                    </div>
                                                </div>
                                                
                                               <!-- Vertical Center Modal -->
                                               <div class="modal fade" id="resourceModal" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalTitle">Resource Title</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body" id="modalContent">
                                                            <!-- The file or content will be dynamically loaded here -->
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- end -->

                                            <!-- video Modal -->
                                            <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="videoModalLabel">Video</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="embed-responsive embed-responsive-16by9">
                                                                <iframe id="videoIframe" style="height: 100%; width: 100%;" 
                                                                        src="" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                        <!-- end -->
                                              
                                                
                                                <div class="tab-pane fade pt-20" id="HTML5" role="tabpanel">
                                                    <div class="accordion" id="accordionsimple2">
                                                        <div class="mb-2 acd-group">
                                                            <div class="card-header bg-primary rounded-0">
                                                                <h5 class="mb-0">
                                                                    <a href="#HTML51" class="btn-block text-left text-white acd-heading" data-toggle="collapse">1. Making the decision</a>
                                                                </h5>
                                                            </div>
                                                            <div id="HTML51" class="collapse show" data-parent="#accordionsimple2">
                                                                <div class="card-body">
                                                                    <p>
                                                                        We also know those epic stories, those
                                                                        modern-day legends surrounding the early
                                                                        failures of such supremely successful folks as
                                                                        Michael Jordan and Bill Gates. We can look a
                                                                        bit further back in time to Albert Einstein or
                                                                        even further back to Abraham Lincoln.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2 acd-group">
                                                            <div class="card-header rounded-0 bg-primary">
                                                                <h5 class="mb-0">
                                                                    <a href="#HTML52" class="btn-block text-left text-white acd-heading collapsed" data-toggle="collapse">2. Developing the Vision</a>
                                                                </h5>
                                                            </div>
                                                            <div id="HTML52" class="collapse" data-parent="#accordionsimple2">
                                                                <div class="card-body">
                                                                    <p>
                                                                        Positive pleasure-oriented goals are much more
                                                                        powerful motivators than negative fear-based
                                                                        ones. Although each is successful separately,
                                                                        the right combination of both is the most
                                                                        powerful motivational force known to humankind.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade pt-20" id="jquery" role="tabpanel">
                                                    <div class="accordion" id="accordionfillborde3">
                                                        <div class="mb-2 acd-group">
                                                            <div class="card-header bg-primary rounded-0">
                                                                <h5 class="mb-0">
                                                                    <a href="#jquery1" class="btn-block text-white text-left acd-heading" data-toggle="collapse">1. Many Style Available</a>
                                                                </h5>
                                                            </div>
                                                            <div id="jquery1" class="collapse show" data-parent="#accordionfillborde3">
                                                                <div class="card-body">
                                                                    <p>The sad thing is the majority of people have no
                                                                        clue about what they truly want. They have no
                                                                        clarity. When asked the question, responses
                                                                        will be superficial at best, and at worst, will
                                                                        be what someone else wants for them.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2 acd-group">
                                                            <div class="card-header bg-primary rounded-0">
                                                                <h5 class="mb-0">
                                                                    <a href="#jquery2" class="btn-block text-white text-left acd-heading collapsed" data-toggle="collapse">2. Parallax Sections</a>
                                                                </h5>
                                                            </div>
                                                            <div id="jquery2" class="collapse" data-parent="#accordionfillborde3">
                                                                <div class="card-body">
                                                                    <p>The best way is to develop and follow a plan.
                                                                        Start with your goals in mind and then work
                                                                        backwards to develop the plan. What steps are
                                                                        required to get you to the goals? Make the plan
                                                                        as detailed as possible. Try to visualize and
                                                                        then plan for, every possible setback.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="acd-group border-bottom-0">
                                                            <div class="card-header bg-primary rounded-0">
                                                                <h5 class="mb-0">
                                                                    <a href="#jquery3" class="btn-block text-white text-left acd-heading collapsed" data-toggle="collapse">3. Unlimited layouts</a>
                                                                </h5>
                                                            </div>
                                                            <div id="jquery3" class="collapse" data-parent="#accordionfillborde3">
                                                                <div class="card-body">
                                                                    <p>Commit the plan to paper and then keep it with
                                                                        you at all times. Review it regularly and
                                                                        ensure that every step takes you closer to your
                                                                        Vision and Goals. If the plan doesn’t support
                                                                        the vision then change it!</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--faq-contant-end-->
                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end app-main -->
            </div>
            <!-- end app-container -->
            <!-- begin footer -->
            <footer class="footer">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center text-sm-left">
                    <p>&copy; Copyright 2022-<?php echo date("Y"); ?>. All rights reserved.</p>
                    </div>
                    <div class="col  col-sm-6 ml-sm-auto text-center text-sm-right">
                        <p><a target="_blank" href="https://www.kingsconsult.com.ng">Kings Branding Consult</a></p>
                    </div>
                </div>
            </footer>
            <!-- end footer -->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->

    <!-- plugins -->
    <script src="{{asset('dashback/assets/js/vendors.js')}}"></script>

    <!-- custom app -->
    <script src="{{asset('dashback/assets/js/app.js')}}"></script> 
    <script src="{{asset('dashback/assets/ckeditor/ckeditor.js')}}"></script>  
</body>


</html>

<script src="{{asset('dashback/assets/js/jquery-3.6.0.min')}}"></script>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
<script>
$(function(){
	/** add active class and stay opened when selected */
	var url = window.location;
  
	// for sidebar menu entirely but not cover treeview
	$('ul.sidebar-menu a').filter(function() {
	    return this.href == url;
	}).parent().addClass('active');

	// for treeview
	$('ul.treeview-menu a').filter(function() {
	    return this.href == url;
	}).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');

});
</script>
<!-- Data Table Initialize -->
<script>
  $(function () {
    $('#example1').DataTable({
      responsive: true
    })
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script>
  $(function(){
    //Initialize Select2 Elements
    $('.select2').select2()

    //CK Editor
    CKEDITOR.replace('editor1')
    CKEDITOR.replace('editor2')
  });
</script>
<script>
    $(document).ready(function() {
        $('#searchInput').on('input', function() {
            // Get the value of the search input
            var searchTerm = $(this).val();

            // Make an AJAX request to the server
            $.ajax({
                url: '{{ route('search-jobs') }}',
                method: 'POST',
                data: {
                    search: searchTerm,
                },
                success: function(data) {
                    // Replace the entire content of the table body with the new search results
                    $('#datatable-buttons tbody').html(data);

                    // Reinitialize DataTables to update the table
                    $('#datatable-buttons').DataTable();
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });
    });    
</script>
<!-- Display pdf with download option -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Add event listener to buttons with class 'open-modal'
        document.querySelectorAll('.open-modal').forEach(function (button) {
            button.addEventListener('click', function () {
                var filePath = this.getAttribute('data-file-path');
                var title = this.getAttribute('data-title');
                
                // Set modal title
                document.getElementById('modalTitle').textContent = title;

                // Set modal content based on file type
                var modalContent = document.getElementById('modalContent');
                modalContent.innerHTML = '';

                // Assume it's a PDF or other viewable file
                if (filePath.endsWith('.pdf')) {
                    modalContent.innerHTML = '<iframe src="' + filePath + '" width="100%" height="400px"></iframe>';
                } else {
                    modalContent.innerHTML = '<p>Unable to display this file type.</p>';
                }
            });
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.open-video-modal').forEach(function (button) {
            button.addEventListener('click', function () {
                var videoUrl = this.getAttribute('data-url');
                var videoTitle = this.getAttribute('data-title');

                // Convert the YouTube URL to the embed format if necessary
                if (videoUrl.includes('youtu.be/')) {
                    videoUrl = videoUrl.replace('youtu.be/', 'www.youtube.com/embed/');
                } else if (videoUrl.includes('watch?v=')) {
                    videoUrl = videoUrl.replace('watch?v=', 'embed/');
                }

                // Set the modal title
                document.getElementById('videoModalLabel').textContent = videoTitle;

                // Set the video URL in the iframe
                var videoIframe = document.getElementById('videoIframe');
                videoIframe.src = videoUrl;
            });
        });

        // Clear the video URL when the modal is closed to stop the video
        $('#videoModal').on('hide.bs.modal', function () {
            var videoIframe = document.getElementById('videoIframe');
            videoIframe.src = '';
        });
    });
</script>






