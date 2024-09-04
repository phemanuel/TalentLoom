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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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

/*  */
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
                            
                            <li><a href="{{ route('user-about-organization') }}" aria-expanded="false"><i class="nav-icon ti ti-comment"></i><span class="nav-title">About Me</span></a> </li>
                            <li><a href="{{ route('user-role-organization') }}" aria-expanded="false"><i class="nav-icon ti ti-info"></i><span class="nav-title">Industry Sector</span></a> </li>
                            <li><a href="{{ route('post-job') }}" aria-expanded="false"><i class="nav-icon ti ti-layout-grid4-alt"></i><span class="nav-title">Post Jobs</span></a> </li>
                            
<li><a href="{{ route('post-upskill') }}" aria-expanded="false"><i class="nav-icon ti ti-layout-grid4-alt"></i><span class="nav-title">Post Upskill</span></a> </li>
                            <li><a href="{{ route('give-review') }}" aria-expanded="false"><i class="nav-icon ti ti-layout"></i><span class="nav-title">Review</span></a> </li>
                            
<li><a href="{{ route('payment-setup') }}" aria-expanded="false"><i class="nav-icon ti ti-pencil-alt"></i><span class="nav-title">Payment Setup</span></a> </li> 
@if(auth()->user()->user_type_status == 'Superadmin')
<li class="active"><a href="{{ route('user-resources') }}" aria-expanded="false"><i class="nav-icon ti ti-layers"></i><span class="nav-title">Resources Hub</span></a></li>
@else  @endif
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
@if(auth()->user()->user_type_status == 'Superadmin')
<li class="breadcrumb-item active text-primary" aria-current="page"><a href="{{route('user-resources')}}">Resources Hub</a></li>
@else  @endif
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Post Jobs</li>                                                
                                                <li class="breadcrumb-item active text-primary" aria-current="page"><a href="{{route('user-about-organization')}}">About</a></li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page"><a href="{{route('user-role-organization')}}">Industry Sector</a></li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page"><a href="{{route('post-upskill')}}">Post Upskill</a></li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page"><a href="{{route('give-review')}}">Review</a></li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page"><a href="{{route('payment-setup')}}">Payment Setup</a></li>
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
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                    <a class="nav-link  active show" id="design-tab" data-toggle="tab" href="#design" role="tab" aria-controls="design" aria-selected="false"> View Resources
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="research-tab" data-toggle="tab" href="#research" role="tab" aria-controls="research" aria-selected="true"> Post Resources</a>
                                                </li>                                                
                                                
                                            </ul>
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
                                                    <form name="asic-form" action="{{ route('post-resource-save') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf														
                                                        <div class="form-row">
                                                                <div class="form-group col-md-12">
                                                                    <label for="name1"><span class="style1">Resource Title</span></label>
                                                                    <input type="text" class="form-control" name="title" placeholder=""  style="color: black;">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="name1"><span class="style1">Description</span></label>
                                                                    <textarea name="description" class="form-control" id=""></textarea>                                                                    
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                 <label for="name1"><span class="style1">Resource Type</span></label>
                                                                    <select name="resource_type" class="form-control">
                                                                        <option selected value="ebook">E-Book</option>
                                                                        <option value="video">Video Tutorial</option>
                                                                        <option value="article">Articles/Blogs</option>
                                                                        <option value="template">Templates</option>
                                                                        <option value="tool">Tools and Software</option>
                                                                        <option value="cheat_sheet">Cheat Sheets/ Guides</option>
                                                                        <option value="checklist">Checklists</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="name1"><span class="style1">File Path(if available)</span></label>
                                                                    <input type="file" name="file_path"  class="form-control" style="color: black;"/>
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="name1"><span class="style1">Resource Link(if available)</span></label>
                                                                    <input type="text" class="form-control" name="url" placeholder=""  style="color: black;">
                                                                </div>
                                                                <div class="form-group  col-md-12">
                                                                <label for="add1"><span class="style1">Author</span></label>
                                                                <input type="text" class="form-control" name="author" placeholder=""  style="color: black;">
                                                            </div>                                                             
                                                                <div class="form-group col-md-12">
                                                                    <label for="name1"><span class="style1">Resource Category</span></label>
                                                                    <select name="skill_set" class="form-control">
                                                                    @foreach ($categories as $category)
                                                                        <option value="{{ $category->category }}">{{ $category->category }}</option>
                                                                    @endforeach
                                                                    </select>
                                                                </div> 
                                                                <div class="form-group col-md-12">
                                                                 <label for="name1"><span class="style1">Status</span></label>
                                                                    <select name="is_active" class="form-control">
                                                                        <option selected value="Active">Active</option>
                                                                        <option value="Inactive">Inactive</option>
                                                                    </select>
                                                                </div>
                                                          </div>      
                                                          <input type="hidden" name="user_id" value="{{auth()->user()->id}}">                                                                                                  
                                                            <button type="submit" class="btn btn-primary">Post Resource</button>
                                                        </form>
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
                                            <h4 class="card-title">List of Resources</h4>
                                        </div>
                                        <div class="dropdown">
                                            <input type="text" class="form-control form-control-sm" placeholder="Search....." id="searchInput"/>
                                        </div>
                                    </div>
                                    <!-- <div class="table-container"> </div> -->
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
                                                    <strong><p style="color: black;">Digital books related to various skills and industry topics.</p></strong>
                                                    <div class="table-container">
                                                    <table id="jobTable" class="table">
                                                                  <thead>
                                                                                    <tr>
                                                                                    <th><span class="style3">Actions</span></th>
                                                                                        <!-- <th class="table-plus">#</th>                                                                                         -->
                                                                                        <th><span class="style3">Category</span></th>
                                                                                        <th class="table-plus"><span class="style1"><strong>Resource Name</strong></span></th>
                                                                                      <!-- <th><span class="style3">Type</span></th>                                                                                       -->
                                                                                      <th><span class="style1"><strong>File_Path</strong></span></th>
                                                                                      <th><span class="style1"><strong>Url</strong></span></th>
                                                                                      <th><span class="style3">Author</span></th>                                                                                      	
                                                                                      <th><span class="style3">Access Level</span></th>
                                                                                      <th><span class="style1"><strong>Posted On</strong></span></th>
                                                                                      <th><span class="style1"><strong>Views</strong></span></th>
                                                                                      <th><span class="style1"><strong>Downloads</strong></span></th>
                                                                                      						
                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                @if ($resourceEbook->count() > 0)
                                                                    @foreach ($resourceEbook as $rs)
                                                                        <tr>
                                                                        <td>
                                                                            <a class="mr-3" href="{{ route('edit-resource', ['id' => $rs->id]) }}" data-placement="top" title="Edit"><i class="fe fe-edit"></i></a>
                                                                            <a href="{{ route('delete-resource', ['id' => $rs->id]) }}" data-placement="top" title="Delete"><i class="fe fe-trash-2"></i></a>
                                                                            
                                                                        </td> 
                                                                            <!-- <td><img src="{{ asset('storage/app/public/' . $rs->company_logo) }}" alt="recruiter logo" width="30" height="30"></td>                                                                            -->
                                                                            
                                                                          <td><span class="style1">{{ $rs->skill_set }}</span></td>
                                                                            <td><span class="style1">{{ $rs->title }}</span></td>
                                                                          <!-- <td><span class="style1">{{ $rs->resource_type }}</span></td> -->
                                                                          <td><span class="style1">{{ $rs->file_path }}</span></td>
                                                                          <td><span class="style1">{{ $rs->url }}</span></td>
                                                                          <td><span class="style1">{{ $rs->author }}</span></td>
                                                                          <td><span class="style1">{{ $rs->access_level }}</span></td>
                                                                          <td><span class="style1">{{ $rs->created_at }}</span></td>                                                                           
                                                                            <td>
    <span class="style1">
        <label class="btn btn-icon btn-xs btn-info" for="">{{ $rs->views_count }}</label>        
        @if($rs->views_count != 0 && (auth()->user()->id == $rs->user_id || auth()->user()->user_type_status == 'Superadmin'))
    <u>
        <!-- <a data-toggle="modal" data-target="#viewersModal" href="#" data-placement="top" title="View"
       onclick="loadJobViewers({{ $rs->id }})">
        <img src="{{ asset('dashback/assets/img/view.jpg') }}" alt="">
    </a> -->
</u>
@endif
    </span>
</td>
<td>
    <span class="style1">
        <label class="btn btn-icon btn-xs btn-primary" for="">{{ $rs->downloads_count }}</label>
        @if($rs->downloads_count != 0 && (auth()->user()->id == $rs->user_id || auth()->user()->user_type_status == 'Superadmin'))
    <u>
        <!-- <a data-toggle="modal" data-target="#applicationsModal" href="#" data-placement="top" title="View"
           onclick="loadJobApplications({{ $rs->id }})">
            <img src="{{ asset('dashback/assets/img/view.jpg') }}" alt="">
        </a> -->
    </u>
@endif
    </span>
</td>
                                                                      
                                                                        
                                                                                                                                                   				
                                                                        </tr>
                                                                    @endforeach
                                                                @else
                                                                <tr>
                                                                    <td colspan="8">Resource has not been posted yet.</td>
                                                                </tr>
                                                                @endif

                                                                                </tbody>
                                                                    </table>
                                                                    {{ $resourceEbook->links()}}
                                                    </div>
                                                
                                                </div>
                                                <!-- ebook - end -->
                                                 
                                                 <!-- vtutorial - start -->
                                                <div class="tab-pane fade" id="v-tutorial" role="tabpanel" aria-labelledby="v-tutorial-tab">
                                                   <strong><p style="color: black;">Recorded or live tutorials on relevant topics relating to your skill set.</p></strong> 
                                                   <div class="table-container">
                                                   <table id="jobTable" class="table">
                                                                  <thead>
                                                                                    <tr>
                                                                                    <th><span class="style3">Actions</span></th>
                                                                                        <!-- <th class="table-plus">#</th>                                                                                         -->
                                                                                        
                                                                                      <th><span class="style3">Category</span></th>
                                                                                        <!-- <th class="table-plus"><span class="style1"><strong>Resource Name</strong></span></th> -->
                                                                                      <th><span class="style3">Type</span></th>                                                                                      
                                                                                      <th><span class="style1"><strong>File_Path</strong></span></th>
                                                                                      <th><span class="style1"><strong>Url</strong></span></th>
                                                                                      <th><span class="style3">Author</span></th>	
                                                                                      <th><span class="style3">Access Level</span></th>
                                                                                      <th><span class="style1"><strong>Posted On</strong></span></th>
                                                                                      <th><span class="style1"><strong>Views</strong></span></th>
                                                                                      <th><span class="style1"><strong>Downloads</strong></span></th>
                                                                                      						
                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                @if ($resourceVtutorial->count() > 0)
                                                                    @foreach ($resourceVtutorial as $rs)
                                                                        <tr>
                                                                        <td>
                                                                            <a class="mr-3" href="{{ route('edit-resource', ['id' => $rs->id]) }}" data-placement="top" title="Edit"><i class="fe fe-edit"></i></a>
                                                                            <a href="{{ route('delete-resource', ['id' => $rs->id]) }}" data-placement="top" title="Delete"><i class="fe fe-trash-2"></i></a>
                                                                            
                                                                        </td>
                                                                            <!-- <td><img src="{{ asset('storage/app/public/' . $rs->company_logo) }}" alt="recruiter logo" width="30" height="30"></td>                                                                            -->
                                                                            
                                                                          <td><span class="style1">{{ $rs->skill_set }}</span></td>
                                                                            <td><span class="style1">{{ $rs->title }}</span></td>
                                                                          <!-- <td><span class="style1">{{ $rs->resource_type }}</span></td> -->
                                                                          <td><span class="style1">{{ $rs->file_path }}</span></td>
                                                                          <td><span class="style1">{{ $rs->url }}</span></td>
                                                                          <td><span class="style1">{{ $rs->author }}</span></td>
                                                                          <td><span class="style1">{{ $rs->access_level }}</span></td>
                                                                          <td><span class="style1">{{ $rs->created_at }}</span></td>                                                                           
                                                                            <td>
    <span class="style1">
        <label class="btn btn-icon btn-xs btn-info" for="">{{ $rs->views_count }}</label>        
        @if($rs->views_count != 0 && (auth()->user()->id == $rs->user_id || auth()->user()->user_type_status == 'Superadmin'))
    <u>
        <!-- <a data-toggle="modal" data-target="#viewersModal" href="#" data-placement="top" title="View"
       onclick="loadJobViewers({{ $rs->id }})">
        <img src="{{ asset('dashback/assets/img/view.jpg') }}" alt="">
    </a> -->
</u>
@endif
    </span>
</td>
<td>
    <span class="style1">
        <label class="btn btn-icon btn-xs btn-primary" for="">{{ $rs->downloads_count }}</label>
        @if($rs->downloads_count != 0 && (auth()->user()->id == $rs->user_id || auth()->user()->user_type_status == 'Superadmin'))
    <u>
        <!-- <a data-toggle="modal" data-target="#applicationsModal" href="#" data-placement="top" title="View"
           onclick="loadJobApplications({{ $rs->id }})">
            <img src="{{ asset('dashback/assets/img/view.jpg') }}" alt="">
        </a> -->
    </u>
@endif
    </span>
</td>
                                                                      
                                                                        
                                                                                                                                                   				
                                                                        </tr>
                                                                    @endforeach
                                                                @else
                                                                <tr>
                                                                    <td colspan="8">Resource has not been posted yet.</td>
                                                                </tr>
                                                                @endif

                                                                                </tbody>
                                                                    </table>
                                                                    {{ $resourceVtutorial->links()}}

</div>
                                                   
                                                </div>
                                                <!-- vtutorial - end -->

                                                 <!-- articles - start -->
                                                 <div class="tab-pane fade" id="article-blog" role="tabpanel" aria-labelledby="article-blog-tab">
                                                   <strong><p style="color: black;">Curated articles and blog posts that provide valuable insights and tips.</p></strong> 
                                                <table id="jobTable" class="table">
                                                                  <thead>
                                                                                    <tr>
                                                                                    <th><span class="style3">Actions</span></th>
                                                                                        <th class="table-plus">#</th>                                                                                        
                                                                                        <th class="table-plus"><span class="style1"><strong>Resource Name</strong></span></th>
                                                                                      <th><span class="style3">Type</span></th>                                                                                      
                                                                                      <th><span class="style1"><strong>File_Path</strong></span></th>
                                                                                      <th><span class="style1"><strong>Url</strong></span></th>
                                                                                      <th><span class="style3">Author</span></th>
                                                                                      <th><span class="style3">Category</span></th>	
                                                                                      <th><span class="style3">Access Level</span></th>
                                                                                      <th><span class="style1"><strong>Posted On</strong></span></th>
                                                                                      <th><span class="style1"><strong>Views</strong></span></th>
                                                                                      <th><span class="style1"><strong>Downloads</strong></span></th>
                                                                                      						
                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                @if ($resourceArticle->count() > 0)
                                                                    @foreach ($resourceArticle as $rs)
                                                                        <tr>
                                                                        <td>
                                                                            <a class="mr-3" href="{{ route('edit-resource', ['id' => $rs->id]) }}" data-placement="top" title="Edit"><i class="fe fe-edit"></i></a>
                                                                            <a href="{{ route('delete-resource', ['id' => $rs->id]) }}" data-placement="top" title="Delete"><i class="fe fe-trash-2"></i></a>
                                                                            
                                                                        </td>
                                                                            <td><img src="{{ asset('storage/app/public/' . $rs->company_logo) }}" alt="recruiter logo" width="30" height="30"></td>                                                                           
                                                                            <td><span class="style1">{{ $rs->title }}</span></td>
                                                                          <td><span class="style1">{{ $rs->resource_type }}</span></td>
                                                                          <td><span class="style1">{{ $rs->file_path }}</span></td>
                                                                          <td><span class="style1">{{ $rs->url }}</span></td>
                                                                          <td><span class="style1">{{ $rs->author }}</span></td>
                                                                          <td><span class="style1">{{ $rs->skill_set }}</span></td>
                                                                          <td><span class="style1">{{ $rs->access_level }}</span></td>
                                                                          <td><span class="style1">{{ $rs->created_at }}</span></td>                                                                           
                                                                            <td>
    <span class="style1">
        <label class="btn btn-icon btn-xs btn-info" for="">{{ $rs->views_count }}</label>        
        @if($rs->views_count != 0 && (auth()->user()->id == $rs->user_id || auth()->user()->user_type_status == 'Superadmin'))
    <u>
        <!-- <a data-toggle="modal" data-target="#viewersModal" href="#" data-placement="top" title="View"
       onclick="loadJobViewers({{ $rs->id }})">
        <img src="{{ asset('dashback/assets/img/view.jpg') }}" alt="">
    </a> -->
</u>
@endif
    </span>
</td>
<td>
    <span class="style1">
        <label class="btn btn-icon btn-xs btn-primary" for="">{{ $rs->downloads_count }}</label>
        @if($rs->downloads_count != 0 && (auth()->user()->id == $rs->user_id || auth()->user()->user_type_status == 'Superadmin'))
    <u>
        <!-- <a data-toggle="modal" data-target="#applicationsModal" href="#" data-placement="top" title="View"
           onclick="loadJobApplications({{ $rs->id }})">
            <img src="{{ asset('dashback/assets/img/view.jpg') }}" alt="">
        </a> -->
    </u>
@endif
    </span>
</td>
                                                                      
                                                                        
                                                                                                                                                   				
                                                                        </tr>
                                                                    @endforeach
                                                                @else
                                                                <tr>
                                                                    <td colspan="8">Resource has not been posted yet.</td>
                                                                </tr>
                                                                @endif

                                                                                </tbody>
                                                                    </table>
                                                                    {{ $resourceArticle->links()}}
                                                </div>
                                                <!-- article - end -->

                                                <!-- templates - start -->
                                                <div class="tab-pane fade" id="template" role="tabpanel" aria-labelledby="template-tab">
                                                    <strong><p style="color: black;">Downloadable templates for documents, resumes, proposals, or project planning.</p></strong>
                                                <table id="jobTable" class="table">
                                                                  <thead>
                                                                                    <tr>
                                                                                    <th><span class="style3">Actions</span></th>
                                                                                        <th class="table-plus">#</th>                                                                                        
                                                                                        <th class="table-plus"><span class="style1"><strong>Resource Name</strong></span></th>
                                                                                      <th><span class="style3">Type</span></th>                                                                                      
                                                                                      <th><span class="style1"><strong>File_Path</strong></span></th>
                                                                                      <th><span class="style1"><strong>Url</strong></span></th>
                                                                                      <th><span class="style3">Author</span></th>
                                                                                      <th><span class="style3">Category</span></th>	
                                                                                      <th><span class="style3">Access Level</span></th>
                                                                                      <th><span class="style1"><strong>Posted On</strong></span></th>
                                                                                      <th><span class="style1"><strong>Views</strong></span></th>
                                                                                      <th><span class="style1"><strong>Downloads</strong></span></th>
                                                                                      						
                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                @if ($resourceTemplate->count() > 0)
                                                                    @foreach ($resourceTemplate as $rs)
                                                                        <tr>
                                                                        <td>
                                                                            <a class="mr-3" href="{{ route('edit-resource', ['id' => $rs->id]) }}" data-placement="top" title="Edit"><i class="fe fe-edit"></i></a>
                                                                            <a href="{{ route('delete-resource', ['id' => $rs->id]) }}" data-placement="top" title="Delete"><i class="fe fe-trash-2"></i></a>
                                                                            
                                                                        </td>
                                                                            <td><img src="{{ asset('storage/app/public/' . $rs->company_logo) }}" alt="recruiter logo" width="30" height="30"></td>                                                                           
                                                                            <td><span class="style1">{{ $rs->title }}</span></td>
                                                                          <td><span class="style1">{{ $rs->resource_type }}</span></td>
                                                                          <td><span class="style1">{{ $rs->file_path }}</span></td>
                                                                          <td><span class="style1">{{ $rs->url }}</span></td>
                                                                          <td><span class="style1">{{ $rs->author }}</span></td>
                                                                          <td><span class="style1">{{ $rs->skill_set }}</span></td>
                                                                          <td><span class="style1">{{ $rs->access_level }}</span></td>
                                                                          <td><span class="style1">{{ $rs->created_at }}</span></td>                                                                           
                                                                            <td>
    <span class="style1">
        <label class="btn btn-icon btn-xs btn-info" for="">{{ $rs->views_count }}</label>        
        @if($rs->views_count != 0 && (auth()->user()->id == $rs->user_id || auth()->user()->user_type_status == 'Superadmin'))
    <u>
        <!-- <a data-toggle="modal" data-target="#viewersModal" href="#" data-placement="top" title="View"
       onclick="loadJobViewers({{ $rs->id }})">
        <img src="{{ asset('dashback/assets/img/view.jpg') }}" alt="">
    </a> -->
</u>
@endif
    </span>
</td>
<td>
    <span class="style1">
        <label class="btn btn-icon btn-xs btn-primary" for="">{{ $rs->downloads_count }}</label>
        @if($rs->downloads_count != 0 && (auth()->user()->id == $rs->user_id || auth()->user()->user_type_status == 'Superadmin'))
    <u>
        <!-- <a data-toggle="modal" data-target="#applicationsModal" href="#" data-placement="top" title="View"
           onclick="loadJobApplications({{ $rs->id }})">
            <img src="{{ asset('dashback/assets/img/view.jpg') }}" alt="">
        </a> -->
    </u>
@endif
    </span>
</td>
                                                                      
                                                                        
                                                                                                                                                   				
                                                                        </tr>
                                                                    @endforeach
                                                                @else
                                                                <tr>
                                                                    <td colspan="8">Resource has not been posted yet.</td>
                                                                </tr>
                                                                @endif

                                                                                </tbody>
                                                                    </table>
                                                                    {{ $resourceTemplate->links()}}
                                                </div>
                                                <!-- template - end -->

                                                <!-- tools - start -->
                                                <div class="tab-pane fade" id="tools" role="tabpanel" aria-labelledby="tools-tab">
                                                    <strong><p style="color: black;">Recommendations and guides on using specific tools or software relevant to their skills.</p></strong>
                                                <table id="jobTable" class="table">
                                                                  <thead>
                                                                                    <tr>
                                                                                    <th><span class="style3">Actions</span></th>
                                                                                        <th class="table-plus">#</th>                                                                                        
                                                                                        <th class="table-plus"><span class="style1"><strong>Resource Name</strong></span></th>
                                                                                      <th><span class="style3">Type</span></th>                                                                                      
                                                                                      <th><span class="style1"><strong>File_Path</strong></span></th>
                                                                                      <th><span class="style1"><strong>Url</strong></span></th>
                                                                                      <th><span class="style3">Author</span></th>
                                                                                      <th><span class="style3">Category</span></th>	
                                                                                      <th><span class="style3">Access Level</span></th>
                                                                                      <th><span class="style1"><strong>Posted On</strong></span></th>
                                                                                      <th><span class="style1"><strong>Views</strong></span></th>
                                                                                      <th><span class="style1"><strong>Downloads</strong></span></th>
                                                                                      						
                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                @if ($resourceTool->count() > 0)
                                                                    @foreach ($resourceTool as $rs)
                                                                        <tr>
                                                                        <td>
                                                                            <a class="mr-3" href="{{ route('edit-resource', ['id' => $rs->id]) }}" data-placement="top" title="Edit"><i class="fe fe-edit"></i></a>
                                                                            <a href="{{ route('delete-resource', ['id' => $rs->id]) }}" data-placement="top" title="Delete"><i class="fe fe-trash-2"></i></a>
                                                                            
                                                                        </td>
                                                                            <td><img src="{{ asset('storage/app/public/' . $rs->company_logo) }}" alt="recruiter logo" width="30" height="30"></td>                                                                           
                                                                            <td><span class="style1">{{ $rs->title }}</span></td>
                                                                          <td><span class="style1">{{ $rs->resource_type }}</span></td>
                                                                          <td><span class="style1">{{ $rs->file_path }}</span></td>
                                                                          <td><span class="style1">{{ $rs->url }}</span></td>
                                                                          <td><span class="style1">{{ $rs->author }}</span></td>
                                                                          <td><span class="style1">{{ $rs->skill_set }}</span></td>
                                                                          <td><span class="style1">{{ $rs->access_level }}</span></td>
                                                                          <td><span class="style1">{{ $rs->created_at }}</span></td>                                                                           
                                                                            <td>
    <span class="style1">
        <label class="btn btn-icon btn-xs btn-info" for="">{{ $rs->views_count }}</label>        
        @if($rs->views_count != 0 && (auth()->user()->id == $rs->user_id || auth()->user()->user_type_status == 'Superadmin'))
    <u>
        <!-- <a data-toggle="modal" data-target="#viewersModal" href="#" data-placement="top" title="View"
       onclick="loadJobViewers({{ $rs->id }})">
        <img src="{{ asset('dashback/assets/img/view.jpg') }}" alt="">
    </a> -->
</u>
@endif
    </span>
</td>
<td>
    <span class="style1">
        <label class="btn btn-icon btn-xs btn-primary" for="">{{ $rs->downloads_count }}</label>
        @if($rs->downloads_count != 0 && (auth()->user()->id == $rs->user_id || auth()->user()->user_type_status == 'Superadmin'))
    <u>
        <!-- <a data-toggle="modal" data-target="#applicationsModal" href="#" data-placement="top" title="View"
           onclick="loadJobApplications({{ $rs->id }})">
            <img src="{{ asset('dashback/assets/img/view.jpg') }}" alt="">
        </a> -->
    </u>
@endif
    </span>
</td>
                                                                      
                                                                        
                                                                                                                                                   				
                                                                        </tr>
                                                                    @endforeach
                                                                @else
                                                                <tr>
                                                                    <td colspan="8">Resource has not been posted yet.</td>
                                                                </tr>
                                                                @endif

                                                                                </tbody>
                                                                    </table>
                                                                    {{ $resourceTool->links()}}
                                                </div>
                                                <!-- tools - end -->

                                                <!-- cheatsheet/guides - start -->
                                                <div class="tab-pane fade" id="guides" role="tabpanel" aria-labelledby="guides-tab">
                                                    <strong><p style="color: black;">Quick reference guides for technical skills or best practices.</p></strong>
                                                <table id="jobTable" class="table">
                                                                  <thead>
                                                                                    <tr>
                                                                                    <th><span class="style3">Actions</span></th>
                                                                                        <th class="table-plus">#</th>                                                                                        
                                                                                        <th class="table-plus"><span class="style1"><strong>Resource Name</strong></span></th>
                                                                                      <th><span class="style3">Type</span></th>                                                                                      
                                                                                      <th><span class="style1"><strong>File_Path</strong></span></th>
                                                                                      <th><span class="style1"><strong>Url</strong></span></th>
                                                                                      <th><span class="style3">Author</span></th>
                                                                                      <th><span class="style3">Category</span></th>	
                                                                                      <th><span class="style3">Access Level</span></th>
                                                                                      <th><span class="style1"><strong>Posted On</strong></span></th>
                                                                                      <th><span class="style1"><strong>Views</strong></span></th>
                                                                                      <th><span class="style1"><strong>Downloads</strong></span></th>
                                                                                      						
                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                @if ($resourceCheatSheet->count() > 0)
                                                                    @foreach ($resourceCheatSheet as $rs)
                                                                        <tr>
                                                                        <td>
                                                                            <a class="mr-3" href="{{ route('edit-resource', ['id' => $rs->id]) }}" data-placement="top" title="Edit"><i class="fe fe-edit"></i></a>
                                                                            <a href="{{ route('delete-resource', ['id' => $rs->id]) }}" data-placement="top" title="Delete"><i class="fe fe-trash-2"></i></a>
                                                                            
                                                                        </td>
                                                                            <td><img src="{{ asset('storage/app/public/' . $rs->company_logo) }}" alt="recruiter logo" width="30" height="30"></td>                                                                           
                                                                            <td><span class="style1">{{ $rs->title }}</span></td>
                                                                          <td><span class="style1">{{ $rs->resource_type }}</span></td>
                                                                          <td><span class="style1">{{ $rs->file_path }}</span></td>
                                                                          <td><span class="style1">{{ $rs->url }}</span></td>
                                                                          <td><span class="style1">{{ $rs->author }}</span></td>
                                                                          <td><span class="style1">{{ $rs->skill_set }}</span></td>
                                                                          <td><span class="style1">{{ $rs->access_level }}</span></td>
                                                                          <td><span class="style1">{{ $rs->created_at }}</span></td>                                                                           
                                                                            <td>
    <span class="style1">
        <label class="btn btn-icon btn-xs btn-info" for="">{{ $rs->views_count }}</label>        
        @if($rs->views_count != 0 && (auth()->user()->id == $rs->user_id || auth()->user()->user_type_status == 'Superadmin'))
    <u>
        <!-- <a data-toggle="modal" data-target="#viewersModal" href="#" data-placement="top" title="View"
       onclick="loadJobViewers({{ $rs->id }})">
        <img src="{{ asset('dashback/assets/img/view.jpg') }}" alt="">
    </a> -->
</u>
@endif
    </span>
</td>
<td>
    <span class="style1">
        <label class="btn btn-icon btn-xs btn-primary" for="">{{ $rs->downloads_count }}</label>
        @if($rs->downloads_count != 0 && (auth()->user()->id == $rs->user_id || auth()->user()->user_type_status == 'Superadmin'))
    <u>
        <!-- <a data-toggle="modal" data-target="#applicationsModal" href="#" data-placement="top" title="View"
           onclick="loadJobApplications({{ $rs->id }})">
            <img src="{{ asset('dashback/assets/img/view.jpg') }}" alt="">
        </a> -->
    </u>
@endif
    </span>
</td>
                                                                      
                                                                        
                                                                                                                                                   				
                                                                        </tr>
                                                                    @endforeach
                                                                @else
                                                                <tr>
                                                                    <td colspan="8">Resource has not been posted yet.</td>
                                                                </tr>
                                                                @endif

                                                                                </tbody>
                                                                    </table>
                                                                    {{ $resourceCheatSheet->links()}}
                                                </div>
                                                <!-- cheatsheet/guides - end -->

                                                <!-- checklist - start -->
                                                <div class="tab-pane fade" id="checklist" role="tabpanel" aria-labelledby="checklist-tab">
                                                    <strong><p style="color: black;">Downloadable checklists to ensure best practices are followed in various tasks.</p></strong>
                                                <table id="jobTable" class="table">
                                                                  <thead>
                                                                                    <tr>
                                                                                    <th><span class="style3">Actions</span></th>
                                                                                        <th class="table-plus">#</th>                                                                                        
                                                                                        <th class="table-plus"><span class="style1"><strong>Resource Name</strong></span></th>
                                                                                      <th><span class="style3">Type</span></th>                                                                                      
                                                                                      <th><span class="style1"><strong>File_Path</strong></span></th>
                                                                                      <th><span class="style1"><strong>Url</strong></span></th>
                                                                                      <th><span class="style3">Author</span></th>
                                                                                      <th><span class="style3">Category</span></th>	
                                                                                      <th><span class="style3">Access Level</span></th>
                                                                                      <th><span class="style1"><strong>Posted On</strong></span></th>
                                                                                      <th><span class="style1"><strong>Views</strong></span></th>
                                                                                      <th><span class="style1"><strong>Downloads</strong></span></th>
                                                                                      						
                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                @if ($resourceChecklist->count() > 0)
                                                                    @foreach ($resourceChecklist as $rs)
                                                                        <tr>
                                                                        <td>
                                                                            <a class="mr-3" href="{{ route('edit-resource', ['id' => $rs->id]) }}" data-placement="top" title="Edit"><i class="fe fe-edit"></i></a>
                                                                            <a href="{{ route('delete-resource', ['id' => $rs->id]) }}" data-placement="top" title="Delete"><i class="fe fe-trash-2"></i></a>
                                                                            
                                                                        </td>
                                                                            <td><img src="{{ asset('storage/app/public/' . $rs->company_logo) }}" alt="recruiter logo" width="30" height="30"></td>                                                                           
                                                                            <td><span class="style1">{{ $rs->title }}</span></td>
                                                                          <td><span class="style1">{{ $rs->resource_type }}</span></td>
                                                                          <td><span class="style1">{{ $rs->file_path }}</span></td>
                                                                          <td><span class="style1">{{ $rs->url }}</span></td>
                                                                          <td><span class="style1">{{ $rs->author }}</span></td>
                                                                          <td><span class="style1">{{ $rs->skill_set }}</span></td>
                                                                          <td><span class="style1">{{ $rs->access_level }}</span></td>
                                                                          <td><span class="style1">{{ $rs->created_at }}</span></td>                                                                           
                                                                            <td>
    <span class="style1">
        <label class="btn btn-icon btn-xs btn-info" for="">{{ $rs->views_count }}</label>        
        @if($rs->views_count != 0 && (auth()->user()->id == $rs->user_id || auth()->user()->user_type_status == 'Superadmin'))
    <u>
        <!-- <a data-toggle="modal" data-target="#viewersModal" href="#" data-placement="top" title="View"
       onclick="loadJobViewers({{ $rs->id }})">
        <img src="{{ asset('dashback/assets/img/view.jpg') }}" alt="">
    </a> -->
</u>
@endif
    </span>
</td>
<td>
    <span class="style1">
        <label class="btn btn-icon btn-xs btn-primary" for="">{{ $rs->downloads_count }}</label>
        @if($rs->downloads_count != 0 && (auth()->user()->id == $rs->user_id || auth()->user()->user_type_status == 'Superadmin'))
    <u>
        <!-- <a data-toggle="modal" data-target="#applicationsModal" href="#" data-placement="top" title="View"
           onclick="loadJobApplications({{ $rs->id }})">
            <img src="{{ asset('dashback/assets/img/view.jpg') }}" alt="">
        </a> -->
    </u>
@endif
    </span>
</td>
                                                                      
                                                                        
                                                                                                                                                   				
                                                                        </tr>
                                                                    @endforeach
                                                                @else
                                                                <tr>
                                                                    <td colspan="8">Resource has not been posted yet.</td>
                                                                </tr>
                                                                @endif

                                                                                </tbody>
                                                                    </table>
                                                                    {{ $resourceChecklist->links()}}
                                                </div>
                                                <!-- checklist - end -->

                                                <!-- Quiz - start -->
                                                <div class="tab-pane fade" id="quiz" role="tabpanel" aria-labelledby="quiz-tab">
                                                    <strong><p style="color: black;">To test knowledge or provide a fun way to learn new concepts.</p></strong>
                                                <table id="jobTable" class="table">
                                                                  <thead>
                                                                                    <tr>
                                                                                    <th><span class="style3">Actions</span></th>
                                                                                        <th class="table-plus">#</th>                                                                                        
                                                                                        <th class="table-plus"><span class="style1"><strong>Resource Name</strong></span></th>
                                                                                      <th><span class="style3">Type</span></th>                                                                                      
                                                                                      <th><span class="style1"><strong>File_Path</strong></span></th>
                                                                                      <th><span class="style1"><strong>Url</strong></span></th>
                                                                                      <th><span class="style3">Author</span></th>
                                                                                      <th><span class="style3">Category</span></th>	
                                                                                      <th><span class="style3">Access Level</span></th>
                                                                                      <th><span class="style1"><strong>Posted On</strong></span></th>
                                                                                      <th><span class="style1"><strong>Views</strong></span></th>
                                                                                      <th><span class="style1"><strong>Downloads</strong></span></th>
                                                                                      						
                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                @if ($resourceQuiz->count() > 0)
                                                                    @foreach ($resourceQuiz as $rs)
                                                                        <tr>
                                                                        <td>
                                                                            <a class="mr-3" href="{{ route('edit-resource', ['id' => $rs->id]) }}" data-placement="top" title="Edit"><i class="fe fe-edit"></i></a>
                                                                            <a href="{{ route('delete-resource', ['id' => $rs->id]) }}" data-placement="top" title="Delete"><i class="fe fe-trash-2"></i></a>
                                                                            
                                                                        </td>
                                                                            <td><img src="{{ asset('storage/app/public/' . $rs->company_logo) }}" alt="recruiter logo" width="30" height="30"></td>                                                                           
                                                                            <td><span class="style1">{{ $rs->title }}</span></td>
                                                                          <td><span class="style1">{{ $rs->resource_type }}</span></td>
                                                                          <td><span class="style1">{{ $rs->file_path }}</span></td>
                                                                          <td><span class="style1">{{ $rs->url }}</span></td>
                                                                          <td><span class="style1">{{ $rs->author }}</span></td>
                                                                          <td><span class="style1">{{ $rs->skill_set }}</span></td>
                                                                          <td><span class="style1">{{ $rs->access_level }}</span></td>
                                                                          <td><span class="style1">{{ $rs->created_at }}</span></td>                                                                           
                                                                            <td>
    <span class="style1">
        <label class="btn btn-icon btn-xs btn-info" for="">{{ $rs->views_count }}</label>        
        @if($rs->views_count != 0 && (auth()->user()->id == $rs->user_id || auth()->user()->user_type_status == 'Superadmin'))
    <u>
        <!-- <a data-toggle="modal" data-target="#viewersModal" href="#" data-placement="top" title="View"
       onclick="loadJobViewers({{ $rs->id }})">
        <img src="{{ asset('dashback/assets/img/view.jpg') }}" alt="">
    </a> -->
</u>
@endif
    </span>
</td>
<td>
    <span class="style1">
        <label class="btn btn-icon btn-xs btn-primary" for="">{{ $rs->downloads_count }}</label>
        @if($rs->downloads_count != 0 && (auth()->user()->id == $rs->user_id || auth()->user()->user_type_status == 'Superadmin'))
    <u>
        <!-- <a data-toggle="modal" data-target="#applicationsModal" href="#" data-placement="top" title="View"
           onclick="loadJobApplications({{ $rs->id }})">
            <img src="{{ asset('dashback/assets/img/view.jpg') }}" alt="">
        </a> -->
    </u>
@endif
    </span>
</td>
                                                                      
                                                                        
                                                                                                                                                   				
                                                                        </tr>
                                                                    @endforeach
                                                                @else
                                                                <tr>
                                                                    <td colspan="8">Resource has not been posted yet.</td>
                                                                </tr>
                                                                @endif

                                                                                </tbody>
                                                                    </table>
                                                                    {{ $resourceQuiz->links()}}
                                                </div>
                                                <!-- Quiz - end -->
                                               
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
                                               <!-- Job Viewers -->
<div class="modal fade" id="viewersModal" tabindex="-1" role="dialog" aria-labelledby="viewersModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewersModalLabel">Job Viewers</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Loading Spinner -->
                <div id="loading-spinner" style="text-align: center;">
                    <img src="{{ asset('dashback/assets/img/spinner.gif') }}" alt="Loading..." />
                </div>
                <!-- Data Content -->
                <div id="job-viewers-content"></div>
            </div>
            <div class="modal-footer">
            <button id="exportCsvBtn" class="btn btn-success" disabled>Export to CSV</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        
                                    </div>
        </div>
    </div>
</div>

                        <!-- Vertical Center Modal -->
                        <!-- Job Applications -->
<div class="modal fade" id="applicationsModal" tabindex="-1" role="dialog" aria-labelledby="viewersModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewersModalLabel">Job Applications</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Loading Spinner -->
                <div id="loading-spinner1" style="text-align: center;">
                    <img src="{{ asset('dashback/assets/img/spinner.gif') }}" alt="Loading..." />
                </div>
                <!-- Data Content -->
                <div id="job-applications-content"></div>
            </div>
            <div class="modal-footer">
            <button id="exportApplicationsCsvBtn" class="btn btn-success" disabled>Export to CSV</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        
                                    </div>
        </div>
    </div>
</div>

                                                
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




