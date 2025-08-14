<?php
require_once 'PaymentResultListener.php';

class Payment
{
    private PaymentResultListener $listener;

    public function __construct(PaymentResultListener $listener){
        $this->listener = $listener;
    }

    public function Pay()
    {
        $this->listener->payStarted();
        $num = rand(1, 4);
        if ($num == 1) {
            $this->listener->successful();
        }
        elseif ($num == 2) {
            $this->listener->failedPayment();
        }
        elseif ($num == 3) {
            $this->listener->unknown();
        }
        $this->listener->payFinished();

    }

}