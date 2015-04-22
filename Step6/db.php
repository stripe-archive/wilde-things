<?php
// We are using a file instead of a DB for convenience.
// In a real application, we'd be using a database and not delimiting our entries with strings like this
// (which is pretty fragile -- for example, e-mails can actually contain semicolons and commas inside quotation marks, which would break our little scheme here).

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
    $db_contents = file_get_contents("customers.txt");
    $existing_customers = explode(';', $db_contents);
    foreach($existing_customers as $customer) {
        $customer_info = explode(',', $customer);
        if (empty($customer)) continue;
        array_push($customers, array(
              'email' => $customer_info[0],
              'password' => $customer_info[1],
              'stripe_id' => $customer_info[2]
            ));
    }
    return $customers;
}

function create_customer($email_address, $password, $stripe_id)
{
    // Encode password with Blowfish algorithm
    $db_entry = $email_address.','.crypt($password, $stripe_id).','.$stripe_id.';';

    // Make sure public is writeable by the Apache process and readable
    // (If this is too hard, feel free to just make a /public directory temporarily and run "sudo chmod 777 /public" for the sake of this demo)
    $db = fopen('customers.txt', 'a');
    fwrite($db, $db_entry);
}