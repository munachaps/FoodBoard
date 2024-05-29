<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/polygon/admindek/default/dt-ext-responsive.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:09:33 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>Keinz | {{Auth::user()->username}}</title>


    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="colorlib" />

    <link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico"
        type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="../assets/css/waves.min.css" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="../assets/css/feather.css">

    <link rel="stylesheet" type="text/css" href="../assets/css/themify-icons.css">

    <link rel="stylesheet" type="text/css" href="../assets/css/icofont.css">

    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../assets/css/datatables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/buttons.datatables.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.datatables.css">

    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/pages.css">
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
                        <a href="{{route('admin.home')}}">
                            <img class="img-fluid" src="{{asset('img/foodlogo.jpeg')}}" alt="Keinz" />
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
                                    class="waves-effect waves-light" data-cf-modified-dd968ecfaf2317dc95cd417c-="">
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
                                                <img class="img-radius" src="jpg/avatar-4.jpg"
                                                    alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">John Doe</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet,
                                                        consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="img-radius" src="jpg/avatar-3.jpg"
                                                    alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Joseph William</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet,
                                                        consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="img-radius" src="jpg/avatar-4.jpg"
                                                    alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Sara Soudein</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet,
                                                        consectetuer elit.</p>
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
                     @yield('content')
                    <div id="styleSelector">
                    </div>
                </div>
            </div>
        </div>
    </div>

 
    <script data-cfasync="false" src="../assets/js/email-decode.min.js"></script>
    <script type="dd968ecfaf2317dc95cd417c-text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="dd968ecfaf2317dc95cd417c-text/javascript" src="../assets/js/jquery-ui.min.js"></script>
    <script type="dd968ecfaf2317dc95cd417c-text/javascript" src="../assets/js/popper.min.js"></script>
    <script type="dd968ecfaf2317dc95cd417c-text/javascript" src="../assets/js/bootstrap.min.js"></script>

    <script src="../assets/js/waves.min.js" type="dd968ecfaf2317dc95cd417c-text/javascript"></script>

    <script type="dd968ecfaf2317dc95cd417c-text/javascript" src="../assets/js/jquery.slimscroll.js"></script>

    <script type="dd968ecfaf2317dc95cd417c-text/javascript" src="../assets/js/modernizr.js"></script>
    <script type="dd968ecfaf2317dc95cd417c-text/javascript" src="../assets/js/css-scrollbars.js"></script>

    <script src="../assets/js/jquery.datatables.min.js" type="dd968ecfaf2317dc95cd417c-text/javascript"></script>
    <script src="../assets/js/datatables.buttons.min.js" type="dd968ecfaf2317dc95cd417c-text/javascript"></script>
    <script src="../assets/js/jszip.min.js" type="dd968ecfaf2317dc95cd417c-text/javascript"></script>
    <script src="../assets/js/pdfmake.min.js" type="dd968ecfaf2317dc95cd417c-text/javascript"></script>
    <script src="../assets/js/vfs_fonts.js" type="dd968ecfaf2317dc95cd417c-text/javascript"></script>
    <script src="../assets/js/datatables.responsive.min-2.js" type="dd968ecfaf2317dc95cd417c-text/javascript"></script>
    <script src="../assets/js/buttons.print.min.js" type="dd968ecfaf2317dc95cd417c-text/javascript"></script>
    <script src="../assets/js/buttons.html5.min.js" type="dd968ecfaf2317dc95cd417c-text/javascript"></script>
    <script src="../assets/js/datatables.bootstrap4.min.js" type="dd968ecfaf2317dc95cd417c-text/javascript"></script>
    <script src="../assets/js/datatables.responsive.min.js" type="dd968ecfaf2317dc95cd417c-text/javascript"></script>
    <script src="../assets/js/responsive.bootstrap4.min.js" type="dd968ecfaf2317dc95cd417c-text/javascript"></script>

    <script src="../assets/js/responsive-custom.js" type="dd968ecfaf2317dc95cd417c-text/javascript"></script>
    <script src="../assets/js/pcoded.min.js" type="dd968ecfaf2317dc95cd417c-text/javascript"></script>
    <script src="../assets/js/vertical-layout.min.js" type="dd968ecfaf2317dc95cd417c-text/javascript"></script>
    <script src="../assets/js/jquery.mcustomscrollbar.concat.min.js" type="dd968ecfaf2317dc95cd417c-text/javascript"></script>
    <script type="dd968ecfaf2317dc95cd417c-text/javascript" src="../assets/js/script.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="dd968ecfaf2317dc95cd417c-text/javascript"></script>
    <script type="dd968ecfaf2317dc95cd417c-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
    <script src="../assets/js/rocket-loader.min.js" data-cf-settings="dd968ecfaf2317dc95cd417c-|49" defer=""></script>
</body>

</html>
