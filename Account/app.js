class Account {
    constructor() {
        this._balance = 0;
    }
}


class SavingAccount extends Account {

}

class PayingAccount extends Account {

}

let account1 = new SavingAccount();
let account2 = new PayingAccount();

console.log(account1.balance);
console.log(account2.balance);
