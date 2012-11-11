<?php
require_once('./config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$postdata = file_get_contents("php://input");
	$event = json_decode($postdata);
	if ($event->type == 'invoice.payment_succeeded') {
		$customer_id = $event->data->object->customer;
		$customer = Stripe_Customer::retrieve($customer_id);
		$invoice = Stripe_Invoice::retrieve($event->data->object->id);

		// This is where we'd normally e-mail the invoice, but we'll just write out the invoice to a file instead.
		$from = "From: Oscar Wilde";
		$to = "To: ".$customer->email;
		$subject = "Subject: You have made a payment for another month of Wilde quotes";
		$body = "You have made a new payment for $".($invoice->total / 100.0).":\n\n";

		foreach($invoice->lines->data as &$line) {
			if ($line->type == 'subscription') {
				$body .= "Subscription - ".$line->plan->name.": ".$line->amount."\n";
		    }
		    else if ($line->type == 'invoiceitem') {
		    	$body .= "Additional -".$line->description.": ".$line->amount;
		    }
		}

		$email_file = fopen('/public/'.$customer->id."-".$invoice->date, 'a');
		$email = $from."\n".$to."\n".$subject."\n".$body;
		fwrite($email_file, $email);
	}
}
?>