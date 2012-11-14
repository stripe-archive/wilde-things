## Step 2: To err is human

In this step, we add some simple error handling and show you how to debug the issue.

To start, try running the demo from Step1 and making a payment with the card "4000000000000002" -- this is one of many cards that are available on [https://stripe.com/docs/testing](https://stripe.com/docs/testing) to reproduce specific errors.  You'll notice that your program will error.

To investigate the error, you have a couple of tools at your disposal.

First, you can look at your own PHP logs.  If you are running PHP through the built-in Apache on OS X, you can find these at /private/var/log/apache2/error_log.

Second, you can look at the logs of requests you have made to Stripe.  These are available in your Stripe dashboard at [https://manage.stripe.com/#logs](https://manage.stripe.com/#logs).

You can also take a look at [https://stripe.com/docs/api#errors](https://stripe.com/docs/api#errors) to get a sense of possible errors Stripe may return to you.

Once you get the code running in this tutorial, try making another purchase with a credit card with number "4000000000000002" -- you should get a nice message telling you your card was declined.  Again, you can check your dashboard to see the failed payment.

