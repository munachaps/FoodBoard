var stripeKey = document.querySelector('#personalData').dataset.consumerKey;
var createOrderUrl = document.querySelector('#personalData').dataset.createOrderUrl;
var returnUrl = document.querySelector('#personalData').dataset.returnUrl;
var currency = document.querySelector('#personalData').dataset.currency;
var stripe = Stripe(stripeKey);
var elements = stripe.elements();


function confirmGuestOrder(event) {
    console.log("Code");
    event.preventDefault();
    var valid = formValidate();
    if (valid) {
        var itemsArray = [];
        var shippingPrice = $('.transfer').text();
        shippingPrice = shippingPrice.replace('$', '');
        // var totalAmt = $('#totalOrderSummary').val();
        var totalAmt = $('#total').val();
        totalAmt = totalAmt.replace('$', '');
        $('#itemList li').each(function(index) {
            var imagePath = $(this).find('.order-list-img img').attr('src');
            var title = $(this).find('.order-list-details h4').html();
            var quantity = $(this).find('input[name=qty]').val();
            var itemTotalPrice = $(this).find('.order-list-price').text();
            itemTotalPrice = (itemTotalPrice.match(/[0-9.]+/g)) * 1;
            var itemPrice = itemTotalPrice / quantity;
            var arr = title.split('<br>');
            var productName = arr[0];
            itemsArray.push({
                'name': productName,
                'unit_price': itemPrice,
                'quantity': quantity
            });
            console.log("Items array", itemsArray);
        });
        $('#submitPayment').html('Processing...').css('text-align', 'left');
        $('.spinner-icon').show();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            contentType: 'application/json',
            url: '/post_order',
            type: 'POST',
            data: JSON.stringify({
                itemList: [
                    itemsArray
                ],
                transfer: document.getElementById('transfer').value,
                email: document.getElementById('email').value,
                username: document.getElementById('username').value,
                phone_number: document.getElementById('phone_number').value,
                address: document.getElementById('address').value,
                message: document.getElementById('message').value,
                total: document.getElementById('total').value,
                terms: document.getElementById('cbxOnlinePayment').value,
                // shippingTotal: shippingPrice,
                // currency: currency
            }),
            success: function(response) {
                if (response.success) {
                    // var pay = "{{ route('charge') }}";
                    window.location.href = response.redirect_url;
                } else {
                    console.log('Unable to create a checkout session. Please try again.');
                    $('#submitPayment').html('Submit');
                    $('.spinner-icon').hide();
                }
            }
        });
    }

}

function formValidate() {

    var name = $('#username').parsley();
    var phone = $('#phone_number').parsley();
    var email = $('#email').parsley();
    var address = $('#address').parsley();
    var message = $('#message').parsley();
    var terms = $('#cbxOnlinePayment').parsley();

    if (!name.isValid() || !phone.isValid() || !email.isValid() || !address.isValid() || !message.isValid() || !terms.isValid()) {
        return false;
    }
    return true;

}