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
                            <li class="active"><a href="{{ route('user-role') }}" aria-expanded="false"><i class="nav-icon ti ti-info"></i><span class="nav-title">Roles</span></a> </li>
                            <li><a href="{{ route('user-skill') }}" aria-expanded="false"><i class="nav-icon ti ti-layout-grid4-alt"></i><span class="nav-title">Skills/Expertise</span></a> </li>
<li><a href="{{ route('user-service') }}" aria-expanded="false"><i class="nav-icon ti ti-layout-grid4-alt"></i><span class="nav-title">Services</span></a> </li>
                            <li><a href="{{ route('user-education') }}" aria-expanded="false"><i class="nav-icon ti ti-layout"></i><span class="nav-title">Education/Certification</span></a> </li>
                            <li><a href="{{ route('user-experience') }}" aria-expanded="false"><i class="nav-icon ti ti-pencil-alt"></i><span class="nav-title">Work Experience</span></a> </li> <li><a href="{{ route('user-portfolio') }}" aria-expanded="false"><i class="nav-icon ti ti-list"></i><span class="nav-title">Project</span></a> </li>    

<li><a href="{{ route('user-resources') }}" aria-expanded="false"><i class="nav-icon ti ti-layers"></i><span class="nav-title">Resources Hub</span></a></li>
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
                                        <h1>Roles</h1>
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
                        
                        <!--mail-Compose-contant-start-->
                        <div class="row account-contant">
                            <div class="col-12">
                                <div class="card card-statistics">
                                    <div class="card-body p-0">
                                        <div class="row no-gutters">
                                            <div class="col-xl-3 pb-xl-0 pb-5 border-right">
                                                <div class="page-account-profil pt-5">
                                                    <div class="profile-img text-center rounded-circle">
                                                        <div class="pt-5">
                                                            <div class="bg-img m-auto">
                                                                <img src="{{ asset('storage/app/public/' . auth()->user()->user_picture) }}" class="img-fluid" alt="users-avatar">
                                                            </div>
                                                            <div class="profile pt-4">
                                                                <h4 class="mb-1">{{ auth()->user()->full_name }}</h4>
                                                                <p class="style1">{{ auth()->user()->email }}</p>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <hr>

                                                    <div class="profile-btn text-center">
                                                        <div><a href="{{route('profile-picture')}}" class="btn btn-light text-primary mb-2">Update Picture</a></div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
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
                                                    @if ($errors->has('user_roles'))
                                                    <div class="alert alert-danger">
                                                        {{ $errors->first('user_roles') }}
                                                    </div>
                                                    @endif                                                 
                                                        <h5 class="mb-0 py-2">Add and Edit roles</h5>
                                                    </div>
                                                    <div class="p-4">
                                                        <form name="asic-form" action="{{ route('user-role-save', ['id' => auth()->user()->id]) }}" method="POST">
                                                        @csrf
														@method('PUT')
                                                        <!-- start selects row -->
                        <div class="row select-wrapper">
                            <div class="col-md-12 col-12 selects-contant">
                                <div class="row">                                   
                                   
                                    <div class="col-md-12 col-12 selects-contant">
                                        <div class="card card-statistics Multi-sel">
                                            <div class="card-header">
                                                <div class="card-heading">
                                                    <h4 class="card-title">Roles</h4>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                            <div class="form-group mb-0">
    <label for="name1"><span class="style1">Major Role</span></label>
    <select name="user_roles_major" class="form-control" required>
        <!-- Display the currently selected major role first if it exists -->
        @if(auth()->user()->user_roles_major)
            <option value="{{ auth()->user()->user_roles_major }}" selected>{{ auth()->user()->user_roles_major }}</option>
        @endif
        <!-- Display all available roles -->
        @foreach ($allRoles as $allRole)
            <!-- Avoid duplicating the currently selected role -->
            @if(auth()->user()->user_roles_major !== $allRole->user_roles)
                <option value="{{ $allRole->user_roles }}">{{ $allRole->user_roles }}</option>
            @endif
        @endforeach
    </select>
</div>

                                                                <hr>
                                                <div class="form-group mb-0">
                                                <label for="name1"><span class="style1">Other Roles(You can add a maximum of 6 roles)</span></label>
                                                <select class="js-basic-multiple form-control" name="user_roles[]" multiple="multiple" onchange="limitRolesSelection(this)>
                                                    @foreach($allRoles as $role)
                                                        <option value="{{ $role->user_roles }}" 
                                                            {{ in_array($role->user_roles, $userRoles) ? 'selected' : '' }}>
                                                            {{ $role->user_roles }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <script>
document.querySelector('select[name="user_roles[]"]').addEventListener('change', function() {
    var selectedOptions = this.selectedOptions;
    if (selectedOptions.length > 6) {
        alert("You can select up to 6 roles.");
        // Deselect the last selected option
        this.value = Array.from(selectedOptions).slice(0, 6).map(function(option) {
            return option.value;
        });
    }
});
</script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end selects row -->                                                                                                                                                                         
                         <button type="submit" class="btn btn-primary">Update Roles</button>
                          </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6 border-t col-12">
                                                <div class="page-account-form">
                                                    <div class="form-titel border-bottom p-3">
                                                   
                                                        
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
                        <!--mail-Compose-contant-end-->
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
</body>


</html>
