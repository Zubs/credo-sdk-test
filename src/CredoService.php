<?php

namespace App;

use Credoteam\Credo\Transaction;

class CredoService
{
    private string $publicKey;
    private string $privateKey;
    private Transaction $transaction;

    public function __construct()
    {
        $this->publicKey = getenv('CREDO_PUBLIC_KEY');
        $this->privateKey = getenv('CREDO_SECRET_KEY');

        $this->transaction =  new Transaction($this->privateKey);
    }

    public function initiate(array $data)
    {
        return $this->transaction->initiate($data, true);
    }
}
