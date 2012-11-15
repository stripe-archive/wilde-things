## Step 6: Hook, line and sinker

When events happen related to your objects in Stripe, Stripe generates events and can send you a notification about the event.  We call these webhooks.  There's a blog post about them [here](https://stripe.com/blog/webhooks).

Stripe has a powerful event system, generating events for all of your objects.  Check out [a list of all the possible events](https://stripe.com/docs/api#event_types) you can act on.

You can do lots of things based on webhooks, but a common use of them is to send receipts to subscription customers when the customer gets billed.  We show you how to in this step.

To run the code in this step, you'll need to set up [localtunnel](http://progrium.com/localtunnel/).  We use this so that your webhook will be reachable by Stripe.

Start up localtunnel with the instructions on their site, pointing it to the port you are running Apache on (by default 80 on OS X machines).

Next, you'll need to set up your webhook on Stripe.  You can do so [from the dashboard](https://manage.stripe.com/#account/webhooks).  Just click Add URL and add a Test mode URL pointing to hook.php on the public domain localtunnel set up for you.  It will look something like http://4suh.localtunnel.com/Step6/hook.php.

You can test your webhook from your dashboard by clicking "Test Webhooks".  This won't send you actual data, but it sends you a sample webhook with the correct structure.

To test your webhook with real data, copy one of the requests from one of the webhook tests you ran in your dashboard.  You can get to the request by expanding the disclosure triangle next to "Test webhook sent successfully".  Then, use http://hurl.it/ to send a sample POST request to your webhook URL with the request you copied, replacing any data that you want with your custom data.

To put this into action for the purposes of Step 6, do the following:
1. send a test webhook from your dashboard of type invoice.payment_succeeded.
2. Copy and paste the request from that and paste it in under "set post body" in hurl.it.
3. Set your URL correctly on hurl.it.
4. Pick an invoice to test with -- any customer you subscribed to a monthly plan should have at least one invoice.
5. Replace the invoice ID and customer IDs in your request body that you pasted onto hurl.it with a real customer ID and invoice ID, and try sending it!

We don't send actual e-mails in this step, but you should see a file get generated with the e-mail that would have been sent under /public on your local machine.