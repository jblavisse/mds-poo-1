
class Rectangle:
    def __init__(self,length,width):
        self.length = length
        self.width = width

    def getPerimeter(self):
        return 2*(self.length + self.width)

    def getArea(self):
        return self.length*self.width

    def isSquare(self):
        return self.length == self.width


    def show(self):
        print(f"""
            Longueur : {self.length}
            Largeur :  {self.width}
            Périmètre : {self.getPerimeter()}
            Aire : {self.getArea()}
        """)

        if(self.isSquare()):
            print("C'est un carré")

        else:
            print("Ce n'est pas un carré")


rec1 = Rectangle(3,7)
rec1.show()

rec2 = Rectangle(5,5)
rec2.show()