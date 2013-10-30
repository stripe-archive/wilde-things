<?php
// We are using a file instead of a DB for convenience -- in a real application, we'd be using a database and not delimiting our entries with strings like this (which is pretty fragile -- for example, e-mails can actually contain semicolons and commas inside quotation marks, which would break our little scheme here).

function get_customer($email_address)
{
	$customers = get_all_customers();
	foreach($customers as &$customer) {
		if ($customer['email'] == $email_address)
			return $customer;
	}
	return NULL;
}

function get_all_customers()
{
	$customers = array();
    $existing_customers = file("../public/customers.txt");
    foreach($existing_customers as &$customer) {
        list($email, $password, $stripe_id) = explode(',', $customer);
        array_push($customers, array(
            'email' => $email,
        	'password' => $password,
        	'stripe_id' => trim($stripe_id)
        ));
    }
    return $customers;
}

function create_customer($email_address, $password, $stripe_id)
{
    // Encode password with Blowfish algorithm
    $db_entry = $email_address.','.crypt($password).','.$stripe_id."\n";

    // Make sure /public is writeable by the Apache process and readable (If this is too hard, feel free to just make a /public directory temporarily and run "sudo chmod 777 /public" for the sake of this demo)
    $db = fopen('../public/customers.txt', 'a');
    fwrite($db, $db_entry);
}
?>
