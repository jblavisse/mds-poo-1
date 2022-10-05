class Account:
    def __init__(self):
        self.balance = 0


class SavingAccount(Account):
    pass


class PayingAccount(Account):
    pass

account1 = SavingAccount()
account2 = PayingAccount()

print(account1.balance)
print(account2.balance)
