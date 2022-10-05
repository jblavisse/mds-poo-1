<?php

class Account {
    protected $balance;

    public function __construct($balance) {
        $this->setBalance($balance);
    }

    function getBalance() {
        echo $this->balance;
    }

    function setBalance($balance) {
        $this->balance = $balance;
    }
}


// Compte Epargne
class SavingAccount extends Account {
    protected $interestRate;

    // Ajouter un constructeur
    public function __construct($balance, $rate) {
        $this->setBalance($balance);
        $this->setInterestRate($rate);
    }

    public function getInterestRate() {
        return $this->interestRate;
    }

    public function setInterestRate($rate) {
        $this->interestRate = $rate;
    }

    // calcInterest()
    public function calcInterest() {
        // solde x taux d'intérêt/100
        $calc = $this->balance * $this->interestRate / 100;
        echo $calc." euros d'intérêt".PHP_EOL;
    }
}


// Compte Payant
class PayingAccount extends Account {
    protected $cost;

    public function __construct($balance, $cost) {
        $this->setBalance($balance);
        $this->setCost($cost);
    }

    public function getCost() {
        return $this->cost;
    }

    public function setCost($cost) {
        $this->cost = $cost;
    }

    public function takeCash($cash) {

        // Je veux retirer 200 euros

        // Si mon solde est à 700 euros

        // Le cout de chaque retrait, c'est 10

        // 700 - 200 - 10
        $newBalance = $this->balance - $cash - $this->cost;
        echo "Le nouveau solde, c'est ".$newBalance." euros";
        $this->setBalance($newBalance);
    }
}

// $account1 = new SavingAccount(300, 6);
// $account1->calcInterest();


$account2 = new PayingAccount(700, 10);
$account2->takeCash(200);
echo $account2->getBalance();