<?php
require_once('./header.php');
require_once('./db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  if (isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

    $existing_customer = get_customer($_POST['email']);

    if ($existing_customer && crypt($_POST['password'], $existing_customer['password']) == $existing_customer['password']) {
      $stripe_customer = \Stripe\Customer::retrieve($existing_customer['stripe_id']);
      $card = $stripe_customer->sources->retrieve($stripe_customer->default_source);
      ?>

      <form action="charge.php" method="POST">
        Would you like to pay $535.00 with your card ending in <?php echo $card->last4 ?>?
        <input type="hidden" name="customer_id" value="<?php echo $stripe_customer->id ?>" />
        <input type="submit" name="submit" value="Yes!" />
      </form>
      <?php
    }
    else {
      echo "Your email address or password is incorrect.";
      require_once('./login_form.php');
    }
  }
  else {
    echo "Please enter a valid email address.";
    require_once('./login_form.php');
  }

}