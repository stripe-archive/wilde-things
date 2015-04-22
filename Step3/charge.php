<?php
require_once('./header.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $error = false;

  try {

    if (!isset($_POST['stripeToken'])) throw new Exception("The Stripe Token was not generated correctly");

    $charge = \Stripe\Charge::create(array(
      'source'     => $_POST['stripeToken'],
      'amount'   => 53500,
      'currency' => 'usd'
    ));

  } catch (Exception $e) {
    $error = $e->getMessage();
  }

  if (!$error) {
    $wildeQuotes = array(
      "A little sincerity is a dangerous thing, and a great deal of it is absolutely fatal.",
      "Always forgive your enemies; nothing annoys them so much.",
      "America is the only country that went from barbarism to decadence without civilization in between.",
      "I think that God in creating Man somewhat overestimated his ability.",
      "I am not young enough to know everything.",
      "Fashion is a form of ugliness so intolerable that we have to alter it every six months.",
      "Most modern calendars mar the sweet simplicity of our lives by reminding us that each day that passes is the anniversary of some perfectly uninteresting event.",
      "Scandal is gossip made tedious by morality."
      );

    echo "<h1>Here's your quote!</h1>";
    echo "<h2>".$wildeQuotes[array_rand($wildeQuotes)]."</h2>";
  }
  else {
    echo "<div class=\"error\">".$error."</div>";
    require_once('./payment_form.php');
  }
}
require_once('./footer.php');