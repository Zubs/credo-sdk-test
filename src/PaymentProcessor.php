<?php

namespace App;

use Credoteam\Credo\Transaction;
use Exception;

class PaymentProcessor
{
    protected string $publicKey;
    protected Transaction $transaction;

    public function __construct()
    {
        try {
            (new Environment(''))->load();

            $this->publicKey = getenv('CREDO_PUBLIC_KEY');
        } catch (Exception $exception) {
            throw $exception;
        }

        $this->transaction = new Transaction('pk_demo-wgemb8c1noZjvnYCWbMupS5uzbcmBN.udCuvoxWjg-d');
    }

    public function initTransaction(array $data)
    {
        return $this->transaction->initiate($data);
    }
}
