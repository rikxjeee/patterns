<?php


abstract class Account
{
    protected $balance;
    /**
     * @var Account $successor
     */
    protected $successor;


    public function setNext(Account $account)
    {
        $this->successor = $account;
    }

    public function pay(int $amount)
    {
        if ($this->canPay($amount)){
            echo 'Paid ' . $amount . ' using ' . get_called_class().'.'.PHP_EOL;
        }elseif($this->successor){
            echo 'Can not pay with '. get_called_class(). ', trying next.'.PHP_EOL;
            $this->successor->pay($amount);
        }else{
            echo 'No accounts have enough balance.'.PHP_EOL;
        }
    }

    private function canPay(int $amount)
    {
        return $this->balance>$amount;
    }
}