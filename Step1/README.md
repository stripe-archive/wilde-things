## Step 1: Get it running

In Step 1, we create a checkout to purchase a single Oscar Wilde quote for $535.00.  This demo uses the Stripe Button, which is a beta product but greatly simplifies creating your checkout.

Before trying to run the code, sign up for a Stripe account at [https://stripe.com/signup](https://stripe.com/signup).  Then, grab your API keys from [https://manage.stripe.com/#account/apikeys](https://manage.stripe.com/#account/apikeys) and replace the placeholders in the code with them.

Normally, you would then need to download the stripe-php client library from [https://stripe.com/docs/libraries](https://stripe.com/docs/libraries), but this source comes with the PHP library as a git submodule.

This demo then uses the instructions in [https://stripe.com/docs/guides/php](https://stripe.com/docs/guides/php) and [https://stripe.com/docs/button](https://stripe.com/docs/guides/php) to create a simple checkout page.

Once you get this demo running, make a payment, and then see your charge on your [dashboard](https://manage.stripe.com) to verify that it worked.