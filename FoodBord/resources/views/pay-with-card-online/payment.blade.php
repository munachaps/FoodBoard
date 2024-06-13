<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Keinz order wizard with online payment">
	<meta name="author" content="">
	<title>Keinz | Online Food Ordering</title>

	<!-- Favicon -->
	<link href="img/favicon.png" rel="shortcut icon">

	<!-- Google Fonts - Jost -->
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<!-- Font Awesome CSS -->
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<!-- Custom Font Icons -->
	<link href="vendor/icomoon/css/iconfont.min.css" rel="stylesheet">

	<!-- Vendor CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="vendor/dmenu/css/menu.css" rel="stylesheet">
	<link href="vendor/hamburgers/css/hamburgers.min.css" rel="stylesheet">
	<link href="vendor/mmenu/css/mmenu.min.css" rel="stylesheet">
	<link href="vendor/magnific-popup/css/magnific-popup.css" rel="stylesheet">
	<link href="vendor/float-labels/css/float-labels.min.css" rel="stylesheet">

	<!-- Main CSS -->
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="main-title">
            <span><em></em></span>
            <h2 id="orderFood">Checkout</h2>
           
        </div>
        <br><br>
        <div class="row">
            <div class="col-lg-8 animated-element">
                    <div class="box text-left ">
                        <form action="/charge" method="POST" id="payment-form">
                            @csrf
                            <label for="phone_number">Amount :</label>
                            <input type="text" class="form-control" name="amount" placeholder="Enter amount" required>
                            <hr>
                            <label for="phone_number">Currency :</label>
                            <input type="text" class="form-control" name="currency" placeholder="Enter currency" required>
                            <!-- Stripe Elements will create an input for the source -->
                            <div id="card-element"></div>
                            <button type="submit" class="btn-1">Pay</button>
                        </form>
                    </div>

                   
                
            </div>
        
        </div>
    </div>
  
	<div id="toTop"><i class="icon icon-chevron-up"></i></div>

	<!-- Vendor Javascript Files -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/easing/js/easing.min.js"></script>
	<script src="vendor/parsley/js/parsley.min.js"></script>
	<script src="vendor/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendor/price-format/js/jquery.priceformat.min.js"></script>
	<script src="vendor/theia-sticky-sidebar/js/ResizeSensor.min.js"></script>
	<script src="vendor/theia-sticky-sidebar/js/theia-sticky-sidebar.min.js"></script>
	<script src="vendor/mmenu/js/mmenu.min.js"></script>
	<script src="vendor/magnific-popup/js/jquery.magnific-popup.min.js"></script>
	<script src="vendor/float-labels/js/float-labels.min.js"></script>
	<script src="vendor/jquery-wizard/js/jquery-ui-1.8.22.min.js"></script>
	<script src="vendor/jquery-wizard/js/jquery.wizard.js"></script>
	<script src="vendor/isotope/js/isotope.pkgd.min.js"></script>
	<script src="vendor/scrollreveal/js/scrollreveal.min.js"></script>
	<script src="vendor/lazyload/js/lazyload.min.js"></script>
	<script src="vendor/sticky-kit/js/sticky-kit.min.js"></script>

	<!-- Main Javascript File -->
	<script src="js/scripts.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        var stripe = Stripe('{{ config('services.stripe.key') }}');
        var elements = stripe.elements();
        var card = elements.create('card');
        card.mount('#card-element');

        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Display error.message in your UI
                } else {
                    // Insert the token ID into the form so it gets submitted to the server
                    var hiddenInput = document.createElement('input');
                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', 'source');
                    hiddenInput.setAttribute('value', result.token.id);
                    form.appendChild(hiddenInput);
                    form.submit();
                }
            });
        });
    </script>
</body>