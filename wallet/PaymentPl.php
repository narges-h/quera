<?php
require_once 'Payment.php';

$x = new Payment(new class implements PaymentResultListener{
    public function failedPayment()
    {
        echo "failed payment.\n";
    }

    public function successful()
    {
        echo "successful payment.\n";
    }

    public function unknown()
    {
        echo "unknown payment.\n";
    }

    public function payStarted()
    {
        echo "pay started.\n";
    }

    public function payFinished()
    {
        echo "pay finished";
    }
});

$x->pay();