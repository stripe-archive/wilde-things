<?php require_once('./config.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- CSS for styles --> 
    <link rel="stylesheet" href="../public/css/normalize.css">
    <link rel="stylesheet" href="../public/css/style.css">

  	<script type="text/javascript" src="https://js.stripe.com/v1/"></script>
    <!-- jQuery is used only for this example; it isn't required to use Stripe -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script type="text/javascript">
    // this identifies your website in the createToken call below
    Stripe.setPublishableKey("<?php echo $stripe['publishable_key']; ?>");

    function stripeResponseHandler(status, response) {
    	if (response.error) {
            // re-enable the submit button
            $('.submit-button').removeAttr("disabled");
            // show the errors on the form
            $(".payment-errors").html(response.error.message);
        } else {
            var form$ = $("#payment-form");
            // token contains id, last4, and card type
            var token = response['id'];
            // insert the token into the form so it gets submitted to the server
            form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
                    // and submit
            form$.get(0).submit();
        }
    }

    $(document).ready(function() {
        $("#payment-form").submit(function(event) {
            // disable the submit button to prevent repeated clicks
            $('.submit-button').attr("disabled", "disabled");
            // createToken returns immediately - the supplied callback submits the form if there are no errors
            Stripe.createToken({
                number: $('.card-number').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
            }, stripeResponseHandler);
            return false; // submit from callback
        });
    });

    </script>
    <title>Wilde Things</title>

  </head>
  <body>
  <div id="container">
    <h2>Wilde Things</h2>