<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>Keinz | {{Auth::user()->username}}</title>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="FoodOrdering Admin" />
    <meta name="keywords"
        content="My Project">
    <meta name="author" content="Keinz" />

    <link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico"
        type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}} ">

    <link rel="stylesheet" href="{{asset('assets/css/waves.min.css')}} " type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/feather.css')}} ">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome-n.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/chartist.css')}} " type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('assets/css/chartist.css')}} " type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('assets/css/radial.css')}}  " type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/widget.css')}} ">

</head>

   
</head>

<body>

    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a href="/">
                            <img class="img-fluid" src="{{asset('img/foodlogo.jpeg')}}" height="100" width="100" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu icon-toggle-right"></i>
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close">
                                            <i class="feather icon-x input-group-text"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn">
                                            <i class="feather icon-search input-group-text"></i>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!"
                                    onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()"
                                    class="waves-effect waves-light" data-cf-modified-2d8d78e876b340f9029c575b-="">
                                    <i class="full-screen feather icon-maximize"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-bell"></i>
                                        <span class="badge bg-c-red">5</span>
                                    </div>
                                    <ul class="show-notification notification-view dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <h6>Notifications</h6>
                                            <label class="label label-danger">New</label>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="img-radius" src="{{asset('assets/jpg/avatar-4.jpg')}}"
                                                    alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">John Doe</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                        elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                      
                                    </ul>
                                </div>
                            </li>
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-message-square"></i>
                                        <span class="badge bg-c-green">3</span>
                                    </div>
                                </div>
                            </li>
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{asset('assets/jpg/avatar-4.jpg')}}" class="img-radius" alt="User-Profile-Image">
                                        <span>{{Auth::user()->username}}</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    
                                        <li>
                                            <a href="{{route('logout')}}">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="sidebar" class="users p-chat-user showChat">
                <div class="had-container">
                    <div class="p-fixed users-main">
                        <div class="user-box">
                            <div class="chat-search-box">
                                <a class="back_friendlist">
                                    <i class="feather icon-x"></i>
                                </a>
                                <div class="right-icon-control">
                                    <div class="input-group input-group-button">
                                        <input type="text" id="search-friends" name="footer-email"
                                            class="form-control" placeholder="Search Friend">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary waves-effect waves-light" type="button"><i
                                                    class="feather icon-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-friend-list">
                                <div class="media userlist-box waves-effect waves-light" data-id="1"
                                    data-status="online" data-username="Josephin Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius img-radius" src="{{asset('assets/jpg/avatar-3.jpg')}}"
                                            alt="Generic placeholder image ">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="chat-header">Josephin Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="2"
                                    data-status="online" data-username="Lary Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="{{asset('assets/jpg/avatar-2.jpg')}}"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="3"
                                    data-status="online" data-username="Alice">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="{{asset('assets/jpg/avatar-4.jpg')}}"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alice</div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="4"
                                    data-status="offline" data-username="Alia">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="{{asset('assets/jpg/avatar-4.jpg')}}"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-default"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alia<small class="d-block text-muted">10 min
                                                ago</small></div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="5"
                                    data-status="offline" data-username="Suzen">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="{{asset('assets/jpg/avatar-4.jpg')}}"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-default"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Suzen<small class="d-block text-muted">15 min
                                                ago</small></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="showChat_inner">
                <div class="media chat-inner-header">
                    <a class="back_chatBox">
                        <i class="feather icon-x"></i> Josephin Doe
                    </a>
                </div>
                <div class="main-friend-chat">
                    <div class="media chat-messages">
                        <a class="media-left photo-table" href="#!">
                            <img class="media-object img-radius img-radius m-t-5" src="{{asset('assets/jpg/avatar-4.jpg')}}"
                                alt="Generic placeholder image">
                        </a>
                        <div class="media-body chat-menu-content">
                            <div class="">
                                <p class="chat-cont">I'm just looking around. Will you tell me something about
                                    yourself?</p>
                            </div>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="media chat-messages">
                        <div class="media-body chat-menu-reply">
                            <div class="">
                                <p class="chat-cont">Ohh! very nice</p>
                            </div>
                            <p class="chat-time">8:22 a.m.</p>
                        </div>
                    </div>
                    <div class="media chat-messages">
                        <a class="media-left photo-table" href="#!">
                            <img class="media-object img-radius img-radius m-t-5" src="{{asset('assets/jpg/avatar-4.jpg')}}"
                                alt="Generic placeholder image">
                        </a>
                        <div class="media-body chat-menu-content">
                            <div class="">
                                <p class="chat-cont">can you come with me?</p>
                            </div>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="chat-reply-box">
                    <div class="right-icon-control">
                        <div class="input-group input-group-button">
                            <input type="text" class="form-control" placeholder="Write hear . . ">
                            <div class="input-group-append">
                                <button class="btn btn-primary waves-effect waves-light" type="button"><i
                                        class="feather icon-message-circle"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <nav class="pcoded-navbar">
                        <div class="nav-list">
                            <div class="pcoded-inner-navbar main-menu">
                                <div class="pcoded-navigation-label">Navigation</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu active pcoded-trigger">
                                        <a href="{{route('admin.home')}}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                            <span class="pcoded-mtext">Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                            <span class="pcoded-mtext">System Users</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" pcoded-hasmenu">
                                                <a href="{{route('admin.view-users')}}" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">View Users</span>
                                                </a>

                                            </li>
                                            <li class=" pcoded-hasmenu">
                                                <a href="{{route('admin.add-users')}}" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Add Users</span>
                                                </a>

                                            </li>
                                            
                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                            <span class="pcoded-mtext">Orders</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                           
                                            <li class=" pcoded-hasmenu">
                                                <a href="" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">New Orders</span>
                                                </a>
                                            </li>
                                            <li class=" pcoded-hasmenu">
                                                <a href="" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Total Orders</span>
                                                </a>
                                            </li>
                                           
                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                            <span class="pcoded-mtext">Clients</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                           
                                            <li class=" pcoded-hasmenu">
                                                <a href="" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">New Clients</span>
                                                </a>
                                            </li>
                                            <li class=" pcoded-hasmenu">
                                                <a href="" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Existing Clients</span>
                                                </a>
                                            </li>
                                           
                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                            <span class="pcoded-mtext">Reviews</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                           
                                            <li class=" pcoded-hasmenu">
                                                <a href="" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">New Reviews</span>
                                                </a>
                                            </li>
                                            <li class=" pcoded-hasmenu">
                                                <a href="" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Total Reviews</span>
                                                </a>
                                            </li>
                                           
                                        </ul>
                                    </li>
                
                                </ul>
                            </div>
                        </div>
                    </nav>

                    <div class="pcoded-content">
                        <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="feather icon-home bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>Dashboard </h5>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class=" breadcrumb breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"><i class="feather icon-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Dashboard </a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                       @yield('content')
                        </div>
                       
                    </div>

                    <div id="styleSelector">
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!--[if lt IE 10]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade
            <br/>to any of the following web browsers to access this website.
        </p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="../files/assets/images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="../files/assets/images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="../files/assets/images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
<![endif]-->


    <script type="2d8d78e876b340f9029c575b-text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script type="2d8d78e876b340f9029c575b-text/javascript" src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
    <script type="2d8d78e876b340f9029c575b-text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
    <script type="2d8d78e876b340f9029c575b-text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('assets/js/waves.min.js')}}" type="2d8d78e876b340f9029c575b-text/javascript"></script>

    <script type="2d8d78e876b340f9029c575b-text/javascript" src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>

    <script src="{{asset('assets/js/jquery.flot.js')}}" type="2d8d78e876b340f9029c575b-text/javascript"></script>
    <script src="{{asset('assets/js/jquery.flot.categories.js')}}" type="2d8d78e876b340f9029c575b-text/javascript"></script>
    <script src="{{asset('assets/js/curvedlines.js')}}" type="2d8d78e876b340f9029c575b-text/javascript"></script>
    <script src="{{asset('assets/js/jquery.flot.tooltip.min.js')}}" type="2d8d78e876b340f9029c575b-text/javascript"></script>

    <script src="{{asset('assets/js/amcharts.js')}}" type="2d8d78e876b340f9029c575b-text/javascript"></script>
    <script src="{{asset('assets/js/serial.js')}}" type="2d8d78e876b340f9029c575b-text/javascript"></script>
    <script src="{{asset('assets/js/light.js')}}" type="2d8d78e876b340f9029c575b-text/javascript"></script>

    <script src="{{asset('assets/js/markerclusterer.js')}}" type="2d8d78e876b340f9029c575b-text/javascript"></script>
    <script type="2d8d78e876b340f9029c575b-text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="2d8d78e876b340f9029c575b-text/javascript" src="{{asset('assets/js/gmaps.js')}}"></script>

    <script src="{{asset('assets/js/pcoded.min.js')}}" type="2d8d78e876b340f9029c575b-text/javascript"></script>
    <script src="{{asset('assets/js/vertical-layout.min.js')}}" type="2d8d78e876b340f9029c575b-text/javascript"></script>
    <script type="2d8d78e876b340f9029c575b-text/javascript" src="{{asset('assets/js/crm-dashboard.min.js')}}"></script>
    <script type="2d8d78e876b340f9029c575b-text/javascript" src="{{asset('assets/js/script.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.datatables.min.js')}}" type="5d9ba7efeedeae317f2b80fb-text/javascript"></script>
    <script src="{{asset('assets/js/datatables.buttons.min.js')}}"  type="5d9ba7efeedeae317f2b80fb-text/javascript"></script>
   <script src="{{asset('assets/js/jszip.min.js')}}" type="5d9ba7efeedeae317f2b80fb-text/javascript"></script>
    <script src="{{asset('assets/js/pdfmake.min.js')}}" type="5d9ba7efeedeae317f2b80fb-text/javascript"></script>
    <script src="{{asset('assets/js/vfs_fonts.js')}}"  type="5d9ba7efeedeae317f2b80fb-text/javascript"></script>
    <script src="{{asset('assets/js/datatables.autofill.min.js')}}" type="5d9ba7efeedeae317f2b80fb-text/javascript"></script>
    <script src="{{asset('assets/js/datatables.select.min.js')}}" type="5d9ba7efeedeae317f2b80fb-text/javascript"></script>
    <script src="{{asset('assets/js/buttons.print.min.js')}}" type="5d9ba7efeedeae317f2b80fb-text/javascript"></script>
    <script src="{{asset('assets/js/buttons.html5.min.js')}}" type="5d9ba7efeedeae317f2b80fb-text/javascript"></script>
    <script src="{{asset('assets/js/datatables.bootstrap4.min.js')}}" type="5d9ba7efeedeae317f2b80fb-text/javascript"></script>
    <script src="{{asset('assets/js/datatables.responsive.min.js')}}" type="5d9ba7efeedeae317f2b80fb-text/javascript"></script>
    <script type="c72f127118858a7921be8404-text/javascript" src="js/jquery.min.js"></script>
    <script type="c72f127118858a7921be8404-text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="c72f127118858a7921be8404-text/javascript" src="js/popper.min.js"></script>
    <script type="c72f127118858a7921be8404-text/javascript" src="js/bootstrap.min.js"></script>
    <script type="c72f127118858a7921be8404-text/javascript" src="js/excanvas.js"></script>


    <script src="{{asset('assets/js/chartist.js')}}  " type="c72f127118858a7921be8404-text/javascript"></script>

    <script type="c72f127118858a7921be8404-text/javascript" src="{{asset('assets/js/chart.js')}}  "></script>

    <script type="c72f127118858a7921be8404-text/javascript" src="{{asset('assets/js/smoothscroll.js')}} "></script>

    <script src="{{asset('assets/js/jquery.knob.js')}} " type="c72f127118858a7921be8404-text/javascript"></script>

    <script type="c72f127118858a7921be8404-text/javascript" src="{{asset('assets/js/knob-custom-chart.js')}} "></script>

    <script src="{{asset('assets/js/amcharts.js')}} " type="c72f127118858a7921be8404-text/javascript"></script>
    <script src="{{asset('assets/js/gauge.js')}} " type="c72f127118858a7921be8404-text/javascript"></script>
    <script src="{{asset('assets/js/serial.js')}} " type="c72f127118858a7921be8404-text/javascript"></script>
    <script src="{{asset('assets/js/light.js')}}" type="c72f127118858a7921be8404-text/javascript"></script>
    <script src="{{asset('assets/js/pie.min.js')}} " type="c72f127118858a7921be8404-text/javascript"></script>
    <script src="{{asset('assets/js/ammap.min.js')}} " type="c72f127118858a7921be8404-text/javascript"></script>
    <script src="{{asset('assets/js/usalow.js')}} " type="c72f127118858a7921be8404-text/javascript"></script>

    <script src="js/pcoded.min.js" type="c72f127118858a7921be8404-text/javascript"></script>
    <script src="js/vertical-layout.min.js" type="c72f127118858a7921be8404-text/javascript"></script>
    

<script type="c72f127118858a7921be8404-text/javascript" src="js/widget-chart.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="2d8d78e876b340f9029c575b-text/javascript"></script>
    <script type="2d8d78e876b340f9029c575b-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
    <script src="{{asset('assets/js/rocket-loader.min.js')}}" data-cf-settings="2d8d78e876b340f9029c575b-|49" defer=""></script>
</body>

<!-- Mirrored from colorlib.com/polygon/admindek/default/dashboard-crm.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:32 GMT -->

</html>
