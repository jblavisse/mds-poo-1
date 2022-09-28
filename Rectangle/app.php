<?php


// Définir une classe Rectangle ayant les attributs suivants : `length` et `width`.
class Rectangle {
    function __construct($length,$width) {
        $this->length = $length;
        $this->width = $width;
    }

    function getPerimeter() {
        return 2*($this->length + $this->width);
    }

    function getArea() {
        return $this->length*$this->width;
    }

    function isSquare() {
        // 4 == "4" -> VRAI (valeur)
        // 4 === "4" -> FAUX (valeur & le type)
        return $this->length == $this->width;
    }

    function show() {
        echo "
        Longueur : {$this->length}
        Largeur :  {$this->width}
        Périmètre : {$this->getPerimeter()}
        Aire : {$this->getArea()}
        ";

        if($this->isSquare()) {
            echo "C'est un carré".PHP_EOL;
        }
        else {
            echo "Ce n'est pas un carré".PHP_EOL;
        }
    }
}

$rec1 = new Rectangle(3,7);
$rec1->show();

$rec2 = new Rectangle(5,5);
$rec2->show();


// Ajouter un constructeur d’initialisation pour récup des valeurs saisies par l'utilisateur.



// Ajouter les méthodes suivantes :
// - `getPerimeter()` : retourne le périmètre du rectangle.
// - `getArea()` : retourne l'aire du rectangle.
// - `isSquare()` : vérifie si le rectangle est un carré (retourne un booléen -> vrai ou faux)
// - `show()` : expose les caractéristiques d’un rectangle comme suit :
// Longueur : […]
// Largeur : […]
// Périmètre : […]
// Aire : […]
// Il s’agit d’un carré / Il ne s’agit pas d’un carré