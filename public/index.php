<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\PaymentProcessor;

$data = [
    "amount"=> 3500,
    "currency"=> "NGN",
    "redirectUrl"=> "http://localhost:8080/test-credo/welcome/",
    "paymentOptions"=> "CARD",
    "transRef" => "zubs1234",
    "customerEmail"=> "zubairidrisaweda@yahoo.com",
    "customerName"=> "Zubby's Babe",
    "customerPhoneNo"=> "08024337127"
];

$processor = new PaymentProcessor();
var_dump($processor->initTransaction($data));
