<!DOCTYPE html>
<html lang="en">


<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Keinz | Admin </title>


    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content=" Admin manager for food ordering" />
    <meta name="keywords"
        content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="keinz" />

    <link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico"
        type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="../assets/css/waves.min.css" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="../assets/css/feather.css">

    <link rel="stylesheet" type="text/css" href="../assets/css/themify-icons.css">

    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../assets/css/icofont.css">

    <link rel="stylesheet" type="text/css" href="../assets/css/morris.css">

    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/pages.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/widget.css" />
    <link rel="stylesheet" href="../assets/css/chartist.css" type="text/css" media="all" />
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

            

            <div class="showChat_inner">
                <div class="media chat-inner-header">
                    <a class="back_chatBox">
                        <i class="feather icon-x"></i> Josephin Doe
                    </a>
                </div>
                <div class="main-friend-chat">
                    <div class="media chat-messages">
                        <a class="media-left photo-table" href="#!">
                            <img class="media-object img-radius img-radius m-t-5" src="jpg/avatar-2.jpg"
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
                            <img class="media-object img-radius img-radius m-t-5" src="jpg/avatar-2.jpg"
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
                                                <a href="{{route('admin.cash-orders')}}" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Cash Orders</span>
                                                </a>
                                            </li>
                                            <li class=" pcoded-hasmenu">
                                                <a href="{{route('admin.online-orders')}}" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Online Orders</span>
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
                                                <a href="{{route('admin.reviews')}}" class="waves-effect waves-dark">
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

                        <div class="pcoded-inner-content">

                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-xl-3 col-md-6">
                                              <div class="card prod-p-card card-red">
                                                <div class="card-body">
                                                  <div class="row align-items-center m-b-30">
                                                    <div class="col">
                                                      <h6 class="m-b-5 text-white">Total Users</h6>
                                                      <h3 class="m-b-0 f-w-700 text-white">
                                                        {{$users}}
                                                      </h3>
                                                    </div>
                                                    <div class="col-auto">
                                                      <i
                                                        class="fas fa-money-bill-alt text-c-red f-18"
                                                      ></i>
                                                    </div>
                                                  </div>
                                                  
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                              <div class="card prod-p-card card-blue">
                                                <div class="card-body">
                                                  <div class="row align-items-center m-b-30">
                                                    <div class="col">
                                                      <h6 class="m-b-5 text-white">Total Reviews</h6>
                                                      <h3 class="m-b-0 f-w-700 text-white">
                                                        {{$reviews}}
                                                      </h3>
                                                    </div>
                                                    <div class="col-auto">
                                                      <i
                                                        class="fas fa-database text-c-blue f-18"
                                                      ></i>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                              <div class="card prod-p-card card-green">
                                                <div class="card-body">
                                                  <div class="row align-items-center m-b-30">
                                                    <div class="col">
                                                      <h6 class="m-b-5 text-white">
                                                        Cash Orders
                                                      </h6>
                                                      <h3 class="m-b-0 f-w-700 text-white">
                                                        {{$cash_orders}}
                                                      </h3>
                                                    </div>
                                                    <div class="col-auto">
                                                      <i
                                                        class="fas fa-dollar-sign text-c-green f-18"
                                                      ></i>
                                                    </div>
                                                  </div>
                                                 
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                              <div class="card prod-p-card card-yellow">
                                                <div class="card-body">
                                                  <div class="row align-items-center m-b-30">
                                                    <div class="col">
                                                      <h6 class="m-b-5 text-white">Online Orders</h6>
                                                      <h3 class="m-b-0 f-w-700 text-white">
                                                        {{$online_orders}}
                                                      </h3>
                                                    </div>
                                                    <div class="col-auto">
                                                      <i class="fas fa-tags text-c-yellow f-18"></i>
                                                    </div>
                                                  </div>
                                               
                                                </div>
                                              </div>
                                            </div>
                    
                                          </div>
                                          <div class="row">


                                         
                                            <div class="col-md-12 col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Order Chart</h5>
                                                        
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="morris-bar-chart"></div>
                                                    </div>
                                                </div>
                                            </div>


                                           
                                          </div>
                                    </div>
                                </div>
                            </div>
                            <div id="styleSelector">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="ab836d322815de22d75b9415-text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="ab836d322815de22d75b9415-text/javascript" src="../assets/js/jquery-ui.min.js"></script>
    <script type="ab836d322815de22d75b9415-text/javascript" src="../assets/js/popper.min.js"></script>
    <script type="ab836d322815de22d75b9415-text/javascript" src="../assets/js/bootstrap.min.js"></script>

    <script src="../assets/js/waves.min.js" type="ab836d322815de22d75b9415-text/javascript"></script>

    <script type="ab836d322815de22d75b9415-text/javascript" src="../assets/js/jquery.slimscroll.js"></script>

    <script src="../assets/js/waves.min.js" type="ab836d322815de22d75b9415-text/javascript"></script>

    <script type="ab836d322815de22d75b9415-text/javascript" src="../assets/js/modernizr.js"></script>
    <script type="ab836d322815de22d75b9415-text/javascript" src="../assets/js/css-scrollbars.js"></script>

    <script src="../assets/js/jquery.flot.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>
    <script src="../assets/js/jquery.flot.categories.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>
    <script src="../assets/js/curvedlines.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>
    <script src="../assets/js/jquery.flot.tooltip.min.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>

    <script src="../assets/js/amcharts.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>
    <script src="../assets/js/serial.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>
    <script src="../assets/js/light.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>

    <script src="../assets/js/raphael.min.js" type="ab836d322815de22d75b9415-text/javascript"></script>
    <script src="../assets/js/morris.js" type="ab836d322815de22d75b9415-text/javascript"></script>

    <script src="../assets/js/morris-custom-chart.js" type="ab836d322815de22d75b9415-text/javascript"></script>
    <script src="../assets/js/pcoded.min.js" type="ab836d322815de22d75b9415-text/javascript"></script>
    <script src="../assets/js/vertical-layout.min.js" type="ab836d322815de22d75b9415-text/javascript"></script>
    <script src="../assets/js/jquery.mcustomscrollbar.concat.min.js" type="ab836d322815de22d75b9415-text/javascript"></script>
    <script type="ab836d322815de22d75b9415-text/javascript" src="../assets/js/script.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="ab836d322815de22d75b9415-text/javascript"></script>
    <script type="ab836d322815de22d75b9415-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
    <script src="../assets/js/rocket-loader.min.js" data-cf-settings="ab836d322815de22d75b9415-|49" defer=""></script>
</body>

</html>
