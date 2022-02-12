<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\CredoService;
use App\Environment;

// Load .env variables
$environment = new Environment('');

$data = [
    "amount"=> 3000,
    "currency"=> "NGN",
    "redirectUrl"=> "http://localhost:8080/test-credo/welcome/",
    "transRef"=> "748rbrio4823ruoqedb9h4378e", //you can send your transaction ref or allow Credo generate for you
    "paymentOptions"=> "CARD",
    "customerEmail"=> "adiegodswill17@gmail.com",
    "customerName"=> "Adie Godswill",
    "customerPhoneNo"=> "09021960905"
];

$credoService = new CredoService();
print_r((array) $credoService->initiate($data));
