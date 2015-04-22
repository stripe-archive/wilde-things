## Step 3: Factor in the refactoring

We don't do much in this step except to break up our site into a few component pieces.  This will help keep our code organized for the next few steps.

Note that, for easier management and better security, the Stripe API keys are being written into a configuration file, meant to be stored outside of the web root directory. Copy `config.php` to the parent directory of `public`, and edit it to use your test API keys. 