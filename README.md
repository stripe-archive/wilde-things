# Wilde Things - A study in PHP

Wilde Things is a website on which you can buy quotes by Oscar Wilde.  This is a PHP demo that demonstrates integrating Stripe, originally done for a General Assembly livestream tutorial on November 14, 2012.

The demo is 7 steps and goes from setting up a simple site for accepting one-time payments to a subscription-based service complete with webhook support.

## Getting started

To begin, you'll need to take three steps (aside from cloning this repo):

* Setup the web root directory
* Install the Stripe PHP library
* Create a Stripe account

### Web root directory

For the purposes of this tutorial, the `public` folder--included in the git repo--is assumed to be the web root directory. You'll need to configure your web server accordingly, or clone the repo in the right directory to arrange that. 

For each step in the tutorial, copy the script(s) to be executed to the `public` directory to test them.

### Installing the Stripe library

To run any of the steps, you will first need to install the [Stripe PHP library](https://github.com/stripe/stripe-php). As of version 2 of the Stripe PHP library, installation is accomplished via [Composer](https://getcomposer.org/).

Assuming you have installed Composer, add Stripe to your `composer.json` file (in the `public` folder):

    {
      "require": {
        "stripe/stripe-php": "2.*"
      }
    }

(The repo already includes this for you.)

Then run Composer's installation tool:

    composer install

### Creating a Stripe account

Next, sign up for a Stripe account at https://stripe.com and find your publishable and secret API keys in your [account settings](https://dashboard.stripe.com/account/apikeys). As you go through the tutorial, you'll need to replace every instance of `<YOUR PUBLISHABLE STRIPE API KEY>` and `<YOUR SECRET STRIPE API KEY>` with your actual keys. You'll want to use your test API keys throughout.

## Stripe PHP library versions and major changes

Version 2 of the Stripe PHP library, released in February 2015, makes use of [namespaces](http://php.net/manual/en/language.namespaces.php), is installed via Composer, and requires PHP 5.3.3 or greater. All of the code in this tutorial has been updated for the 2.x Stripe PHP library. 

If you're using an older version of the Stripe PHP library, see the changelog of this tutorial for the older code you'd use instead (in your PHP scripts). You can manually download older versions of the Stripe PHP library on [GitHub](https://github.com/stripe/stripe-php/releases).