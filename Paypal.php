<?php


class PayPal extends Account
{
    public function __construct(int $balance)
    {
        $this->balance = $balance;
    }
}