## Step 1: Get it running

In Step 1, we create a checkout page to purchase a single Oscar Wilde quote for $535.00.  This demo uses [Checkout](https://stripe.com/docs/tutorials/checkout), which will take care of building forms, validating input, and securing your customers' card data.

Before trying to run the code, sign up for a Stripe account at [https://stripe.com/signup](https://stripe.com/signup).  Then, grab your API keys from [https://dashboard.stripe.com/#account/apikeys](https://dashboard.stripe.com/#account/apikeys) and replace the placeholders in the code (in `index.php`) with them.

Normally, you would then need to install the stripe-php client library from [https://stripe.com/docs/libraries](https://stripe.com/docs/libraries), but this source comes with the PHP library as a git submodule.

This demo then uses the instructions in [https://stripe.com/docs/guides/php](https://stripe.com/docs/guides/php) and [https://stripe.com/docs/tutorials/checkout](https://stripe.com/docs/tutorials/checkout) to create a simple checkout page.

Once you get this demo running, make a payment, and then see your charge on your [dashboard](https://dashboard.stripe.com) to verify that it worked.