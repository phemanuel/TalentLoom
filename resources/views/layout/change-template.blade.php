<!DOCTYPE html>
<html lang="en">


<head>
<title>TalentLoom :: Change Template</title>
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
                            
                            <li class="active"><a href="{{ route('user-about') }}" aria-expanded="false"><i class="nav-icon ti ti-comment"></i><span class="nav-title">About Me</span></a> </li>
                            <li><a href="{{ route('user-role') }}" aria-expanded="false"><i class="nav-icon ti ti-info"></i><span class="nav-title">Roles</span></a> </li>
                            <li><a href="{{ route('user-skill') }}" aria-expanded="false"><i class="nav-icon ti ti-layout-grid4-alt"></i><span class="nav-title">Skills/Expertise</span></a> </li>
<li><a href="{{ route('user-service') }}" aria-expanded="false"><i class="nav-icon ti ti-layout-grid4-alt"></i><span class="nav-title">Services</span></a> </li>
                            <li><a href="{{ route('user-education') }}" aria-expanded="false"><i class="nav-icon ti ti-layout"></i><span class="nav-title">Education/Certification</span></a> </li>
                            <li><a href="{{ route('user-experience') }}" aria-expanded="false"><i class="nav-icon ti ti-pencil-alt"></i><span class="nav-title">Work Experience</span></a> </li> 
                            <li><a href="{{ route('user-portfolio') }}" aria-expanded="false"><i class="nav-icon ti ti-list"></i><span class="nav-title">Project</span></a> </li>    

<li><a href="{{ route('user-message') }}" aria-expanded="false"><i class="nav-icon ti ti-comment"></i><span class="nav-title">Message</span><span class="nav-label label label-success">{{$unreadMessagesCount}}</span></a></li> <li class="nav-static-title">Account</li>                           
                            
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
                                        <h1>Change Portfolio Theme</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                    <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="{{ route('dashboard') }}"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item"> TalentLoom</li>
<li class="breadcrumb-item active text-primary" aria-current="page"><a href="{{route('user-message')}}">Message</a></li>

                                                <li class="breadcrumb-item active text-primary" aria-current="page">About</li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page"><a href="{{route('user-role')}}">Roles</a></li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page"><a href="{{route('user-skill')}}">Skills</a></li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page"><a href="{{route('user-service')}}">Services</a></li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page"><a href="{{route('user-education')}}">Education</a></li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page"><a href="{{route('user-experience')}}">Experience</a></li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page"><a href="{{route('user-portfolio')}}">Project</a></li>
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
                                            <!-- <li class="nav-item">
                                                    <a class="nav-link  active show" id="design-tab" data-toggle="tab" href="#design" role="tab" aria-controls="design" aria-selected="false"> View Jobs
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="research-tab" data-toggle="tab" href="#research" role="tab" aria-controls="research" aria-selected="true"> Post Jobs</a>
                                                </li>                                                 -->
                                                
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
                                            <h4 class="card-title">Available Templates</h4>
                                        </div>
                                        <!-- <div class="dropdown">
                                            <input type="text" class="form-control form-control-sm" placeholder="Search....." id="searchInput"/>
                                        </div> -->
                                    </div>
                                    <div class="table-container">
                                    <table class="table-bordered">
                                        <thead>
                                        <th><span class="style3">Actions</span></th>
                                        <th class="table-plus"><span class="style3">#</span></th> 
                                        <th class="table-plus"><span class="style3">Theme Name</span></th>                                                                                       
                                        <th class="table-plus"></th>
                                        <th><span class="style3"></span></th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                        <td></td>
                                        <td><span class="style3">1</span></td>
                                        <td><span class="style3">TalentLoom-Default</span></td>
                                        <td><img src="{{asset('templates/type-1/assets/img/default.png')}}" width="938" height="433" alt=""></td>
                                        <td></td>
                                    </tr>
                                        </tbody>
                                    
                                    </table>
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
<script>
let jobViewersResponse = []; // Declare a global variable to store the response data

function loadJobViewers(jobId) {
    // Clear previous content
    $('#job-viewers-content').html('');
    
    // Show the loading spinner
    $('#loading-spinner').show();

    // Perform AJAX request to fetch job viewers
    $.ajax({
        url: '/job/' + jobId + '/viewers',
        type: 'GET',
        success: function(response) {
            jobViewersResponse = response; // Store the response in the global variable
            
            // Hide the loading spinner
            $('#loading-spinner').hide();
            
            // Add the job title as a heading
            let jobTitle = response.length > 0 ? response[0].job_name : 'Job';
            let headingHtml = `<h4 style="color: black; text-align: center;">${jobTitle} - Viewers</h4>`;

            // Update the modal with the new content (tabulated data)
            let tableHtml = '<div class="table-container">';
            tableHtml += '<table id="viewersTable" class="table table-bordered">';
            tableHtml += '<thead><tr style="color: black;"><th>#</th><th>Avatar</th><th>Name</th><th>User Role</th></tr></thead>';
            tableHtml += '<tbody>';
            response.forEach((viewer, index) => {
                let profilePictureUrl = `/storage/${viewer.profile_picture}`;
                tableHtml += '<tr>';
                tableHtml += `<td style="color: black;">${index + 1}</td>`;
                tableHtml += `<td style="color: black;"><img src="${profilePictureUrl}" alt="${viewer.name}" width="50" /></td>`;
                tableHtml += `<td style="color: black;">${viewer.name}</td>`;
                tableHtml += `<td style="color: black;">${viewer.user_roles_major}</td>`;                
                tableHtml += '</tr>';
            });
            tableHtml += '</tbody></table></div>';
            
            // Combine the heading and the table
            $('#job-viewers-content').html(headingHtml + tableHtml);

            // Enable export button if data is available
            if (response.length > 0) {
                $('#exportCsvBtn').prop('disabled', false);
            }
        },
        error: function() {
            // Hide the loading spinner
            $('#loading-spinner').hide();

            // Show an error message
            $('#job-viewers-content').html('<p>Error loading data.</p>');
        }
    });
}

// Reset modal content when it is closed
$('#viewersModal').on('hidden.bs.modal', function () {
    // Clear modal content and show the spinner again
    $('#job-viewers-content').html('');
    $('#loading-spinner').show();
});

// Export to CSV
$('#exportCsvBtn').click(function() {
    let csvContent = "data:text/csv;charset=utf-8,";
    csvContent += "No,Avatar,Name,User Role\n"; // CSV header

    $('#viewersTable tbody tr').each(function() {
        let row = [];
        $(this).find('td').each(function(index) {
            let text = $(this).text().trim();
            if (index === 1) { // If this is the Avatar column
                text = $(this).find('img').attr('src'); // get image src
            }
            row.push(text);
        });
        csvContent += row.join(",") + "\n";
    });

    // Create a link to download the CSV file
    let encodedUri = encodeURI(csvContent);
    let link = document.createElement("a");
    link.setAttribute("href", encodedUri);
    let jobTitle = jobViewersResponse.length > 0 ? jobViewersResponse[0].job_name : 'job';
    let currentDate = new Date().toISOString().slice(0, 10);    
    link.setAttribute("download", `JOB_${jobTitle}_viewers_${currentDate}.csv`);
    document.body.appendChild(link); // Required for Firefox
    link.click();
    document.body.removeChild(link); // Cleanup
});
</script>

<script>
let jobApplicationsResponse = []; // Declare a global variable to store the response data

function loadJobApplications(jobId) {
    // Clear previous content
    $('#job-applications-content').html('');
    
    // Show the loading spinner
    $('#loading-spinner1').show();

    // Perform AJAX request to fetch job applications
    $.ajax({
        url: '/job/' + jobId + '/applications',
        type: 'GET',
        success: function(response) {
            jobApplicationsResponse = response; // Store the response in the global variable
            
            // Hide the loading spinner
            $('#loading-spinner1').hide();

            // Add the job title as a heading
            let jobTitle = response.length > 0 ? response[0].job_name : 'Job';
            let headingHtml = `<h4 style="color: black; text-align: center;">${jobTitle} - Applications</h4>`;
            
            // Update the modal with the new content (tabulated data)
            let tableHtml = '<div class="table-container">';
            tableHtml += '<table id="applicationsTable" class="table table-bordered">';
            tableHtml += '<thead><tr style="color: black;"><th>#</th><th>Avatar</th><th>Name</th><th>User Role</th></tr></thead>';
            tableHtml += '<tbody>';
            response.forEach((application, index) => {
                let profilePictureUrl = `/storage/${application.profile_picture}`;
                tableHtml += '<tr>';
                tableHtml += `<td style="color: black;">${index + 1}</td>`;
                tableHtml += `<td style="color: black;"><img src="${profilePictureUrl}" alt="${application.name}" width="50" /></td>`;
                tableHtml += `<td style="color: black;">${application.name}</td>`;
                tableHtml += `<td style="color: black;">${application.user_roles_major}</td>`;                
                tableHtml += '</tr>';
            });
            tableHtml += '</tbody></table></div>';

            // Combine the heading and the table
            $('#job-applications-content').html(headingHtml + tableHtml);

            // Enable export button if data is available
            if (response.length > 0) {
                $('#exportApplicationsCsvBtn').prop('disabled', false);
            }
        },
        error: function() {
            // Hide the loading spinner
            $('#loading-spinner1').hide();

            // Show an error message
            $('#job-applications-content').html('<p>Error loading data.</p>');
        }
    });
}

// Reset modal content when it is closed
$('#applicationsModal').on('hidden.bs.modal', function () {
    // Clear modal content and show the spinner again
    $('#job-applications-content').html('');
    $('#loading-spinner1').show();
});

// Export to CSV
$('#exportApplicationsCsvBtn').click(function() {
    let csvContent = "data:text/csv;charset=utf-8,";
    csvContent += "No,Avatar,Name,User Role\n"; // CSV header

    $('#applicationsTable tbody tr').each(function() {
        let row = [];
        $(this).find('td').each(function(index) {
            let text = $(this).text().trim();
            if (index === 1) { // If this is the Avatar column
                text = $(this).find('img').attr('src'); // get image src
            }
            row.push(text);
        });
        csvContent += row.join(",") + "\n";
    });

    // Create a link to download the CSV file
    let encodedUri = encodeURI(csvContent);
    let link = document.createElement("a");
    link.setAttribute("href", encodedUri);    
    let jobTitle = jobApplicationsResponse.length > 0 ? jobApplicationsResponse[0].job_name : 'job';
    let currentDate = new Date().toISOString().slice(0, 10);    
    link.setAttribute("download", `JOB_${jobTitle}_applications_${currentDate}.csv`);
    document.body.appendChild(link); // Required for Firefox
    link.click();
    document.body.removeChild(link); // Cleanup
});
</script>
<script>
    document.getElementById('searchInput').addEventListener('keyup', function() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById('searchInput');
    filter = input.value.toUpperCase();
    table = document.getElementById('jobTable');
    tr = table.getElementsByTagName('tr');

    for (i = 1; i < tr.length; i++) { // Start from 1 to skip the table header
        tr[i].style.display = 'none';
        td = tr[i].getElementsByTagName('td');
        for (var j = 0; j < td.length; j++) {
            if (td[j]) {
                txtValue = td[j].textContent || td[j].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = '';
                    break;
                }
            }
        }
    }
});

</script>




