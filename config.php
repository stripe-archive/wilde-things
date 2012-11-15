<?php
  require_once('../stripe/lib/Stripe.php');
  $stripe = array(
    'secret_key'      => '<YOUR SECRET STRIPE API KEY>',
    'publishable_key' => '<YOUR PUBLISHABLE STRIPE API KEY>'
    );
  Stripe::setApiKey($stripe['secret_key']);
?>