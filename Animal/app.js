class Animal {
    constructor( ) {
        this.nbPaws = 4;
    }

    getNbPaws() {
        console.log("Nb de patounes: "+this.nbPaws);
    }
}

class Cat extends Animal {

}

let garfield = new Cat();
garfield.getNbPaws();