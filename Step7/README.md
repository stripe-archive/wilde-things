## Step 7: Customize

Steps 1-6 are basically all you need to know to get started.

If after getting setup you decide you want to customize your checkout experience further and the premade Stripe checkout button just isn't doing it for you, read on.  You can actually customize the look of the button itself entirely (documentation for this is forthcoming), and you can add billing address fields to the actual checkout form, but with the Stripe button, you cannot actually customize the payment form's look and feel.

In this step, we present a customized checkout form using the [Stripe.js](https://stripe.com/docs/tutorials/forms) library.  To keep it simple, this is a version of the checkout in Step3.

Note that you do need to use either the button or Stripe.js if you wish to run a PCI compliant business (and you should wish this).  We won't go into it, but there are plenty of [third-party integration](https://stripe.com/docs/integrations) as well that build on top of Stripe -- one of these may be faster for you to use and set up.