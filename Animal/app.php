<?php

class Animal {
    protected $nbPaws;

    public function __construct($nbPaws) {
        $this->nbPaws = $nbPaws;
    }

    public function getNbPaws() {
        echo "Nb de patounes: ".$this->nbPaws.PHP_EOL;
    }

    public function setNbPaws($nbPaws) {
        $this->nbPaws = $nbPaws;
    }
}

$dumbo = new Animal(7);
var_dump($dumbo);


class Cat extends Animal {
    // Elle n'est pas accessible dans la classe mère
    private $jumpHeight;

    public function __construct($nbPaws,$jumpHeight) {
        $this->setNbPaws($nbPaws);
        $this->setJumpHeight($jumpHeight);
    }

    public function setJumpHeight($jump) {
        $this->jumpHeight = $jump;
    }

    public function getJumpHeight() {
       return $this->jumpHeight;
    }

}

$garfield = new Cat(5,3);

$garfield->getNbPaws();
echo $garfield->getJumpHeight();