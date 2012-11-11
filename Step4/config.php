<?php
  require_once('../stripe/lib/Stripe.php');
  $stripe = array(
    'secret_key'      => 'sk_test_COES306BuVznThOZkMr8ibAa',
    'publishable_key' => 'pk_test_fRASYtf5gVfnrjeNS6Z0aqLW'
    );
  Stripe::setApiKey($stripe['secret_key']);
?>