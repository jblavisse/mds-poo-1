<?php

class Account {
    private $balance;

    public function __construct() {
        $this->balance = 0;
    }
}


class SavingAccount extends Account {
    function getBalance() {
        echo $this->balance;
    }
}

class PayingAccount extends Account {

}

$account1 = new SavingAccount();
$account2 = new PayingAccount();

$account1->getBalance();
print($account1->balance);