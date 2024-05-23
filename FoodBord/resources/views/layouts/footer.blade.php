<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h5 class="footer-heading">Menu Links</h5>
                <ul class="list-unstyled nav-links">
                    <li><i class="fa fa-angle-right"></i> <a href="{{route('home')}}" class="footer-link">Home</a></li>
                    <li><i class="fa fa-angle-right"></i> <a href="{{route('addreview')}}" class="footer-link">Review</a></li>
                    <li><i class="fa fa-angle-right"></i> <a href="{{route('contact')}}" class="footer-link">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5 class="footer-heading">Order Wizard</h5>
                <ul class="list-unstyled nav-links">
                    <li><i class="fa fa-angle-right"></i> <a href="{{route('online-menu')}}" class="footer-link">Pay online</a></li>
                    <li><i class="fa fa-angle-right"></i> <a href="{{route('cash-online-menu')}}" class="footer-link">Pay with cash on delivery</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5 class="footer-heading">Contacts</h5>
                <ul class="list-unstyled contact-links">
                    <li><i class="icon icon-map-marker"></i><a href="" class="footer-link" target="_blank">Address: 1234 Street Name, Lebanon   </a>
                    </li>
                    <li><i class="icon icon-envelope3"></i><a href="mailto:info@yourdomain.com" class="footer-link">Mail: info@keinz.com</a></li>
                    <li><i class="icon icon-phone2"></i><a href="tel:+3630123456789" class="footer-link">Phone: +3630123456789</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h5 class="footer-heading">Find Us On</h5>
                <ul class="list-unstyled social-links">
                    <li><a href="https://facebook.com" class="social-link" target="_blank"><i class="icon icon-facebook"></i></a></li>
                    <li><a href="https://twitter.com" class="social-link" target="_blank"><i class="icon icon-twitter"></i></a></li>
                    <li><a href="https://instagram.com" class="social-link" target="_blank"><i class="icon icon-instagram"></i></a></li>
                    <li><a href="https://pinterest.com" class="social-link" target="_blank"><i class="icon icon-pinterest"></i></a></li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-8">
                <ul id="subFooterLinks">
                    <li><a href="https://themeforest.net/user/ultimatewebsolutions" target="_blank">With <i class="fa fa-heart pulse"></i>Keinz </a></li>
                    <li><a href="pdf/terms.pdf" target="_blank">Terms and conditions</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <div id="copy">© 
               @php
                   echo date('Y')
               @endphp 
            </div>
            </div>
        </div>
    </div>
</footer>