<?php

class Animal {
    protected $nbPaws;

    public function __construct() {
        $this->nbPaws = 4;
    }

    public function getNbPaws() {
        echo "Nb de patounes: ".$this->nbPaws.PHP_EOL;
    }
}


class Cat extends Animal {
    // Elle n'est pas accessible dans la classe mère
    private $jumpHeight;

    public function setJumpHeight($jump) {
        $this->jumpHeight = $jump;
    }

    public function getJumpHeight() {
       return $this->jumpHeight;
    }

}

$garfield = new Cat();
var_dump($garfield);
$garfield->getNbPaws();
$garfield->setJumpHeight(3);
echo $garfield->getJumpHeight();