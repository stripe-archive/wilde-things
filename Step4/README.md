## Step 4: Customers

Now that your Oscar Wilde quotes website is succeeding beyond your wildest dreams, you realize that the most avid Wilde fans keep coming back for quotes over and over again.  Each time, they enter their credit card details in hopes of their next Wilde fix.

But you can make this simpler for them.  In this step, we show you how to create a Stripe customer object for your users the first time they purchase a quote with their credit card.  Then, in the future, they can simply log in and pay with the card they have on file (stored at Stripe). 

In this step, we make a poor man's database in a text file located at `public/customers.txt`.  The PHP code will attempt to create this file, which means the `public` folder must be writable for your PHP process. To allow for that, run this command within the parent directory:

    chmod 777 public

After `customers.txt` has been created, you can restore the previous permissions on `public`. 

Alternatively, you can create `customers.txt` yourself, and make only it writable, or you can use an actual database and update the code accordingly. 

Note that, for security reasons, you do not want a publicly writable folder or text file in your web root directory on a live project 

Once you get this code running, try purchasing a quote by signing up.  Then, purchase another quote after logging in.  You should see a customer in your Stripe dashboard with 2 payments.

(Checkout accepts the user's email address, but not a password which complicates the creation of the account. For demonstration purposes, the password is requested outside of Checkout, which is a bit "meh" from a UX perspective. Alternatively, you could take the email address and password outside of Checkout, and then dynamically set a `data-email` value in the Checkout configuration via JavaScript.)

