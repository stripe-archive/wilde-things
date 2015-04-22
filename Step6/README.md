## Step 6: Hook, line and sinker

When activity happens in your Stripe account, Stripe generates events that can be sent to you as notifications.  We call these webhooks.  There's a blog post about them [here](https://stripe.com/blog/webhooks).

Stripe has a powerful event system, generating events for all of your activity.  Check out [a list of all the possible events](https://stripe.com/docs/api#event_types) you can act on.

You can do lots of things based on webhooks, but a common use of them is to send receipts to subscription customers when the customer gets billed.  We show you how to in this step.

To run the code in this step, you'll need to set up [ngrok](https://ngrok.com/) (assuming you're not running this on a live, Internet-accessible server).  We use this so that your webhook will be reachable by Stripe.

Start up ngrok with the instructions on their site, pointing it to the port you are running your web server on (by default 80 for Apache).

Next, you'll need to set up your webhook on Stripe.  You can do so [from the dashboard](https://dashboard.stripe.com/account/webhooks).  Just click "Add endpoint" and add an account-type test mode URL pointing to `hook.php` on the public domain ngrok set up for you.  It will look something like http://92832de0.ngrok.io/hook.php (assuming you've placed `hook.php` in your `public` folder, which is the web root directory).

You can test your webhook from your dashboard by clicking "Send test webhook".  This won't send you real data, but it sends you a sample webhook with the correct data structure. Use the `invoice.payment_succeeded` event type for this and subsequent tests since we're working with subscriptions right now.

With the monthly subscription, you'd need to wait a month to see an actual (test) `invoice.payment_succeeded` event. To speed things up a bit and test our webhook, let's doctor a fake event notification. We'll need to replicate the data in an `invoice.payment_succeeded` event but with an actual Stripe customer ID and invoice ID from an existing test.

First, copy the request data from one of the `invoice.payment_succeeded` webhook tests you ran in your dashboard.  You can get to the request by expanding the disclosure triangle next to "Test webhook sent successfully". 

Second, find a customer for whom you've created a subscription to the monthly plan. Jot down the customer ID (e.g., cus_66bn6Kex48OGu7) and the invoice ID (e.g., in_15uOaD2BAZoCjj35vJv8y75f). 

Third, edit the request data to use the customer and invoice IDs. The customer ID gets assigned to "customer". The invoice ID gets assigned to data>object>id (because the object involved with an `invoice.payment_succeeded` event is an invoice).

With the manipulated data created, use http://hurl.it/ to send a sample POST request to your webhook URL with the request. Use the edited data as the body. 

We don't send actual e-mails in this step, but you should see a file get generated in the `public` folder with the e-mail that would have been sent. (Assuming the `public` folder is still writable.)