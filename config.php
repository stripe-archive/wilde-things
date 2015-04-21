<?php
require_once('public/vendor/autoload.php');
$stripe = array(
	'secret_key'      => '<YOUR SECRET STRIPE API KEY>',
	'publishable_key' => '<YOUR PUBLISHABLE STRIPE API KEY>'
);
\Stripe\Stripe::setApiKey($stripe['secret_key']);