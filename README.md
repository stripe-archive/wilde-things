# Wilde Things - A study in PHP

Wilde Things is a website on which you can buy quotes by Oscar Wilde.  This is a PHP demo that demonstrates integrating Stripe, originally done for a General Assembly livestream tutorial on November 14, 2012.

The demo is 7 steps and goes from setting up a simple site for accepting one-time payments to a subscription-based service complete with webhook support.

## Getting started

To run any of the steps, you will first need to initialize the stripe submodule, which points to the stripe-php client library.  To do this, first clone this project, then run:

    git submodule init
    git submodule update

Then, sign up for a Stripe account at https://stripe.com and replace every instance of `<YOUR PUBLISHABLE STRIPE API KEY>` and `<YOUR SECRET STRIPE API KEY>` with your publishable and secret API keys found at [https://manage.stripe.com/#account/apikeys](https://manage.stripe.com/#account/apikeys).

## Web root directory

For the purposes of this tutorial, the `public` folder--included in the git repo--is assumed to be the web root directory. You'll need to configure your web server, or clone the repo, accordingly. For each step, copy the script(s) to be executed to the `public` directory to test them. 

## Namespaces

Version 2 of the [Stripe PHP library](https://github.com/stripe/stripe-php), released in February 2015 makes use of [namespaces](http://php.net/manual/en/language.namespaces.php), and requires PHP 5.3.3 or greater. Consequently, all of the code in this tutorial has been updated for the 2.x Stripe PHP library. If you're using an older version of the Stripe PHP library, see the changelog for the older code you'd use instead (in your PHP scripts). 