## Step 2: To err is human

In this step, we add some simple error handling and show you how to debug problems.

To start, try running the demo from Step1, this time making a payment with the card "4000000000000002". This is one of many cards listed at [https://stripe.com/docs/testing](https://stripe.com/docs/testing) whose role is to reproduce specific errors.  You'll notice that your program will error.

To investigate the error, you have a couple of tools at your disposal. Primarily you'll want to look at the logs of requests you have made to Stripe. These are available in your Stripe dashboard at [https://dashboard.stripe.com/#logs](https://dashboard.stripe.com/logs). 

You can also take a look at [https://stripe.com/docs/api#errors](https://stripe.com/docs/api#errors) to get a sense of possible errors Stripe may return to you.

In order to show the error message to the customer, the updated code reports the Stripe error message within the page. 

Once you get the code running in this tutorial, try making another purchase with a credit card with number "4000000000000002" -- you should get a nice message telling you your card was declined (within the Checkout interface). You can also use an expiration date in the past, or a CVC value that's not 3-4 digits long, to see other errors (within Checkout). 

To see an error message from the charge request (not from Checkout), use "4000000000000341" as the card number.

Again, you can check your dashboard logs to see the failed attempts.

