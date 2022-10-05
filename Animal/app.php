<?php

class Animal {
    public $nbPaws;

    public function __construct() {
        $this->nbPaws = 4;
    }

    public function getNbPaws() {
        echo "Nb de patounes: ".$this->nbPaws.PHP_EOL;
    }
}


class Cat extends Animal {

}

$garfield = new Cat();
var_dump($garfield);
$garfield->getNbPaws();