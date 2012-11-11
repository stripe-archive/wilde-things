<form action="charge.php" method="post">
	<h3>Sign up and buy a quote now! Only $535.00!</h3>
	<input type="text" name="email" placeholder="E-mail address" />
	<input type="password" name="password" placeholder="Password" />
    <script src="https://button.stripe.com/v1/button.js" class="stripe-button"
      data-key="<?php echo $stripe['publishable_key']; ?>"
      data-amount=53500
      data-description="One Wilde quote"
      data-label="Buy"></script>
</form>
<hr />
<?php require_once('./login_form.php'); ?>
