<?php
  require_once('./header.php');
  require_once('./db.php');

  if ($_POST) {
    $error = NULL;
    try {
      if (isset($_POST['customer_id'])) {
        $charge = Stripe_Charge::create(array(
          'customer'    => $_POST['customer_id'],
          'amount'      => 53500,
          'currency'    => 'usd',
          'description' => 'Single quote purchase after login'));
      }
      else if (isset($_POST['stripeToken'])) {
        // Simple uniqueness check on the email address
        $existing_customer = get_customer($_POST['email']);

        if ($existing_customer) {
          throw new Exception("That e-mail address already exists");
        }

        if (isset($_POST['subscription_purchase'])) {
          $customer = Stripe_Customer::create(array(
          'card'     => $_POST['stripeToken'],
          'email'    => $_POST['email'],
          'plan'     => 'monthly'
          ));

        }
        else {
          $customer = Stripe_Customer::create(array(
            'card'     => $_POST['stripeToken'],
            'email'    => $_POST['email']
            ));

          $charge = Stripe_Charge::create(array(
            'customer'    => $customer->id,
            'amount'      => 53500,
            'currency'    => 'usd',
            'description' => 'Single quote purchase'));
        }
        create_customer($_POST['email'], $_POST['password'], $customer->id);

      }
      else {
        throw new Exception("The Stripe Token or customer was not generated correctly");
      }
    }
    catch (Exception $e) {
      $error = $e->getMessage();
    }

    if ($error == NULL) {
      if (isset($_POST['subscription_purchase'])) {
        echo "<h2>Thank you for signing up! You'll be getting your Wilde quotes daily in your e-mail</h2>";
      }
      else {
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
    }
    else {
      echo "<div class=\"error\">".$error."</div>";
      require_once('./payment_form.php');
    }
  }
  require_once('./footer.php');
?>