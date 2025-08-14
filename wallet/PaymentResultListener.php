<?php


interface PaymentResultListener
{
    public function failedPayment();

    public function successful();

    public function unknown();

    public function payStarted();

    public function payFinished();

    
}