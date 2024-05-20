<a href="#menu" class="btn-mobile">
    <div class="hamburger hamburger--spin" id="hamburger">
        <div class="hamburger-box">
            <div class="hamburger-inner"></div>
        </div>
    </div>
</a>
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-6">
            <div id="">
                <h1><a href="{{route('index')}}" title="Keinz"> <img src="img/foodlogo.jpeg" height="100" width="100"> </a></h1>
            </div>
        </div>
        <div class="col-lg-9 col-6">
            <ul id="menuIcons">
                <li><a href="#"><i class="icon icon-shopping-cart2"></i></a></li>
            </ul>
            <!-- Menu -->
            <nav id="menu" class="main-menu">
                <ul>
                    <li><span><a href="{{route('home')}}">Home</a></span></li>
                    <li>
                        <span><a href="#">Order <i class="fa fa-chevron-down"></i></a></span>
                        <ul>
                            <li>
                                <span><a href="{{route('online-menu')}}">Pay online</a></span>
                                
                            </li>
                            <li>
                                <span><a href="{{route('cash-online-menu')}} ">Pay with cash</a></span>
                                
                            </li>
                        </ul>
                    </li>
                    <li><span><a href="{{route('login')}}">Login</a></span></li>
                </ul>
            </nav>
            <!-- Menu End -->
        </div>
    </div>
</div>