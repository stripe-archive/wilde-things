<?php
  require_once('./header.php');
  require_once('./db.php');

  if ($_POST) {
  	$existing_customer = get_customer($_POST['email']);

  	if ($existing_customer && crypt($_POST['password'], $existing_customer['password']) == $existing_customer['password']) {
  		$stripe_customer = Stripe_Customer::retrieve($existing_customer['stripe_id']);
  		?>

  		<form action="charge.php" method="POST">
        Would you like to pay $535 with your card ending in <?php echo $stripe_customer->active_card['last4'] ?>?
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