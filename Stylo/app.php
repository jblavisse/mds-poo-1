<?php

class Stylo {

    private $couleur;
    private $marque;
    private $dureeUtilisation;

    public function __construct($couleurUtilisateur, $marqueUtilisateur) {
        $this->couleur = $couleurUtilisateur;
        $this->marque = $marqueUtilisateur;
        $this->dureeUtilisation = 300;
     }

    public function ecrire() {
        echo "Mon stylo ".$this->couleur." de marque ".$this->marque." est en train d'écrire...".PHP_EOL;
     }

     public function getCouleur() {
        // OK t'as accès à la couleur, mais c'est moi qui contrôle comment
        // Le getter -> t'es en maîtrise de la récup de la valeur d'un attribut
        return strtoupper($this->couleur);
     }

     public function setCouleur($couleur) {
        // On va mettre une nouvelle valeur, mais en étant en contrôle de ce qui va rentrer
        if($couleur !== "rouge") {
            $this->couleur = $couleur;
        }
     }

}

# MOi je veux un stylo qui écrit en noir et de marque Mont Blanc
$stylo1 = new Stylo("noir","Mont Blanc");

# Moi je veux un stylo qui écrit en bleu et de marque BIC
$stylo2 = new Stylo("bleu", "BIC");

var_dump($stylo1);
var_dump($stylo2);

$stylo1->ecrire();
$stylo2->ecrire();


$stylo1->setCouleur("rouge");
$stylo1->setCouleur("rouge");
$stylo1->setCouleur("rouge");
echo $stylo1->getCouleur();