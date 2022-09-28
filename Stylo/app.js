class Stylo {
    #couleur
    #marque
    #dureeUtilisation

    constructor(couleurUtilisateur, marqueUtilisateur) {
        this.#couleur = couleurUtilisateur;
        this.#marque = marqueUtilisateur;
        this.#dureeUtilisation = 300;
     }

    ecrire() {
        console.log("Mon stylo " + this.#couleur + " de marque " +
       this.#marque + " est en train d'écrire...");
    }

    get couleur() {
        // OK t'as accès à la couleur, mais c'est moi qui contrôle comment
        // Le getter -> t'es en maîtrise de la récup de la valeur d'un attribut
        return this.#couleur.toUpperCase();
     }

    set couleur(couleur) {
        // On va mettre une nouvelle valeur, mais en étant en contrôle de ce qui va rentrer
        if(couleur !== "rouge") {
            this.#couleur = couleur;
        }
    }

}

let stylo1 = new Stylo("noir","Mont Blanc");

let stylo2 = new Stylo("bleu", "BIC");

console.log(stylo1);



console.log(stylo1.couleur);
stylo1.couleur = "pleutre";


stylo1.ecrire();
stylo2.ecrire();