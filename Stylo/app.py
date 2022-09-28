class Stylo:

    def __init__(self, couleurUtilisateur, marqueUtilisateur):
        self.__couleur = couleurUtilisateur
        self.__marque = marqueUtilisateur
        self.__dureeUtilisation = 300

    def ecrire(self):
        print(f"Mon stylo {self.__couleur} de marque {self.__marque} est en train d'écrire")
         # print("Mon stylo " + self.couleur + " de marque " + self.marque + " est en train d'écrire...")


    @property
    def couleur(self):
        return self.__couleur.upper()


    @couleur.setter
    def couleur(self, couleur):
        if(self.couleur != "rouge"):
            self.__couleur = couleur


# MOi je veux un stylo qui écrit en noir et de marque Mont Blanc
stylo1 = Stylo("noir","Mont Blanc")

# Moi je veux un stylo qui écrit en bleu et de marque BIC
stylo2 = Stylo("bleu", "BIC")

print(stylo1)
print(vars(stylo1))

print(stylo2)
print(vars(stylo2))

stylo1.couleur = "pleutre"

print(stylo1.couleur)

stylo1.ecrire()
stylo2.ecrire()
