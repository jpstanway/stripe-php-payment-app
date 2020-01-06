<?php
    require_once('vendor/autoload.php');

    \Stripe\Stripe::setApiKey('sk_test_qfpFcLmY2nnB6TYAhv2ScnHk00yRKMBges');

    // sanitize POST
    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

    $first_name = $POST['first_name'];
    $email = $POST['email'];
    $token = $POST['stripeToken'];
    
    // create Stripe customer
    $customer = \Stripe\Customer::create(array(
        "email" => $email,
        "source" => $token
    ));

    $charge = \Stripe\Charge::create([
        'amount' => 5000,
        'currency' => 'cad',
        'description' => 'Super Extreme Widget',
        'customer' => $customer->id
    ]);

    // Redirect to success
    header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);
?>