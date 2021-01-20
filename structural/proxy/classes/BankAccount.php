<?php


namespace ProxyClasses;


use ProxyInterfaces\BankAccountInterface;

class BankAccount implements BankAccountInterface
{
    private  $transactions = [];

    public function deposit(int $amount)
    {
        $this->transactions[] = +$amount;
        return $this->transactions;
    }

    public function getBalance()
    {
        return array_sum($this->transactions);
    }

    public function withdraw(int $amount)
    {
        if ($this->getBalance() > $amount) {
            $this->transactions[] = -$amount;
            return $amount;
        }
        return false;

    }

}