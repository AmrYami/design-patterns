<?php
namespace ProxyProxy;
use \ProxyInterfaces\BankAccountInterface;
use \ProxyClasses\BankAccount;

class ATMProxy extends BankAccount implements BankAccountInterface
{

    private $balance = null;
    public function getBalance()
    {
        return $this->balance = parent::getBalance();
    }
}