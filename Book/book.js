class Book {
    constructor(title, author, price) {
        this.title = title;
        this.author = author;
        this.price = price;
    }

    describe() {
        console.log(`Le livre a pour titre ${this.title}, pour auteur ${this.author} et coûte ${this.price} euros`);
    }
}


let book1 = new Book("Les chevaliers d'émeraude", "Anne Robillard", 15.30);
book1.describe();

let book2 = new Book("Le Seigneur des Anneaux", "JRR Tolkien", 17.2);
book2.describe();

let book3 = new Book("Clean Code", "Robert C. Martin", 24);
book3.describe();