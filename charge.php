<?php
    require_once('vendor/autoload.php');

    \Stripe\Stripe::setApiKey('sk_test_qt0GGqyxz9hCsi7JsZkJtCqJ');

    // Sanitize POST Array
    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

    $first_name = $POST['first_name'];
    $last_name = $POST['last_name'];
    $email = $POST['email'];
    $token = $POST['stripeToken'];
    
    // Create Customer in Stripe
    $customer =\Stripe\Customer::create(array(
        "email" => $email,
        "source" => $token
    ));

    // Charge Customer
    $charge = \Stripe\Charge::create(array(
        "amount" => 5000, //$50.00 no decimals needed
        "currency" => "usd",
        "description" => "Intro To Course",
        "Customer" => $customer->id
    ));
?>