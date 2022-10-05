class Animal:
    def __init__(self):
        self.nb_paws=4

    def get_nb_paws(self):
        print(f"Nb de patounes: {self.nb_paws}")


class Cat(Animal):
    pass

garfield = Cat()
garfield.get_nb_paws()