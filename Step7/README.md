## Step 7: Customize

Steps 1-6 are basically all you need to know to get started.

If after getting setup you decide you want to customize your checkout experience further and the premade Checkout form just isn't doing it for you, read on. You can actually customize the look and text of the Checkout button itself entirely (see the [Checkout reference](https://stripe.com/docs/checkout#integration-custom)), but you cannot customize the payment form's look and feel.

In this step, we present a customized checkout form using the [Stripe.js](https://stripe.com/docs/tutorials/forms) library.  To keep it simple, this is a version of the checkout experience from Step3.

Note that you do need to use either Checkout or Stripe.js if you wish to run a PCI compliant business (and you should wish this).  We won't go into it, but there are plenty of [third-party integration](https://stripe.com/docs/integrations) as well that build on top of Stripe -- one of these may be faster for you to use and set up.