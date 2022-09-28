class Book:
    # title
    # author
    # price

    def __init__(self, title, author, price):
        self.title = title
        self.author = author
        self.price = price

    def describe(self):
        print(f"Le livre a pour titre {self.title}, pour auteur {self.author} et coûte {self.price} euros")


book1 = Book("Les chevaliers d'émeraude", "Anne Robillard", 15.30)
book1.describe()

book2 = Book("Le Seigneur des Anneaux", "JRR Tolkien", 17.2)
book2.describe()

book3 = Book("Clean Code", "Robert C. Martin", 24)
book3.describe()