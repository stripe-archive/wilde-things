## Step 1: Get it running

In Step 1, we create a checkout page to purchase a single Oscar Wilde quote for $535.00.  This demo uses [Checkout](https://stripe.com/docs/tutorials/checkout), which will take care of building forms, validating input, and securing your customers' card data.

Make sure you've already setup your web server, installed the Stripe PHP library, and created your Stripe account (you'll need to add your actual keys to the code), as explained in the repo's primary README.

This demo uses the instructions in [https://stripe.com/docs/guides/php](https://stripe.com/docs/checkout/guides/php) and [https://stripe.com/docs/tutorials/checkout](https://stripe.com/docs/tutorials/checkout) to create a simple checkout page.

Once you get this demo running, make a payment (using [test credit card numbers](https://stripe.com/docs/testing#cards)), and then see your charge on your [dashboard](https://dashboard.stripe.com) to verify that it worked.