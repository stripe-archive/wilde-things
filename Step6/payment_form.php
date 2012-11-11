<form action="charge.php" method="post">
	<h3>Sign up and buy a quote now! Only $535.00!</h3>
	<input type="hidden" name="single_purchase" value="single_purchae" />
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
<hr />
<form action="charge.php" method="post">
	<h3>Sign up to get a new quote every day! Just $400 a month!</h3>
	<input type="hidden" name="subscription_purchase" value="subscription_purchae" />
	<input type="text" name="email" placeholder="E-mail address" />
	<input type="password" name="password" placeholder="Password" />
	<script src="https://button.stripe.com/v1/button.js" class="stripe-button"
      data-key="<?php echo $stripe['publishable_key']; ?>"
      data-amount=40000
      data-description="Wilde monthly subscription"
      data-label="Checkout"></script>
</form>
