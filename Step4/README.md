## Step 4: Customers

Now that your Oscar Wilde quotes website is succeeding beyond your wildest dreams, you realize that the most avid Wilde fans keep coming back for quotes over and over again.  Each time, they enter their credit card details in hopes of their next Wilde fix.

But you can make this simpler for them.  In this step, we show you how to create a Stripe customer object for your users the first time they purchase a quote with their credit card.  Then, in the future, they can simply log in and pay with the card they have on file.

In this step, we make a poor man's database in a text file located at /public/customers.txt.  You should modify the code to save this elsewhere, or make sure that your PHP process can write to /public (and that that folder exists).  To allow /public to be readable and writable by any process (note: do this only if /public is only being used for the purposes of this demo), run:

`chmod 777 /public`

Once you get this code running, try purchasing a quote by signing up.  Then, purchase another quote after logging in.  You should see a customer in your Stripe dashboard with 2 payments.