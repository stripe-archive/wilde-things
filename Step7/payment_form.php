<form id="payment-form" action="charge.php" method="post">
	<h3>Purchase a quote by Oscar Wilde today! Only $535! Limited supply and going fast, buy now!!</h3>
    <!-- to display errors returned by createToken -->
    <span class="payment-errors"></span>
    <form action="" method="POST" id="payment-form">
        <div class="form-row">
            <label>Card Number</label>
                <input type="text" size="20" autocomplete="off" class="card-number" />
        </div>
        <div class="form-row">
            <label>CVC</label>
            <input type="text" size="4" autocomplete="off" class="card-cvc" />
        </div>
        <div class="form-row">
            <label>Expiration (MM/YYYY)</label>
            <input type="text" size="2" class="card-expiry-month"/>
            <span> / </span>
            <input type="text" size="4" class="card-expiry-year"/>
        </div>
        <button type="submit" class="submit-button">Buy!</button>
    </form>
</form>