<form action="charge.php" method="post">
	<h3>Purchase a quote by Oscar Wilde today! Only $535! Limited supply and going fast, buy now!!</h3>
    <script src="https://button.stripe.com/v1/button.js" class="stripe-button"
      data-key="<?php echo $stripe['publishable_key']; ?>"
      data-amount=53500
      data-description="One Wilde quote"
      data-label="Buy"></script>
</form>