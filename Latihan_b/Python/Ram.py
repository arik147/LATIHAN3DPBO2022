class Ram:

    # atribut
    __capacity = ""
    __price = 0

    
    # konstruktor
    def __init__(self, capacity, price):
        self.__capacity = capacity
        self.__price = price

    # setter
    def setCapacity(self, capacity):
        self.__capacity = capacity

    def setPrice(self, price):
        self.__price = price

    # getter
    def getCapacity(self):
        return self.__capacity

    def getPrice(self):
        return self.__price
