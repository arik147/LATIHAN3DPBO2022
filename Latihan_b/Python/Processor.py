class Processor:

    # atribut
    __name = ""
    __price = 0

    
    # konstruktor
    def __init__(self, name, price):
        self.__name = name
        self.__price = price


    # setter
    def setName(self, name):
        self.__name = name

    def setPrice(self, price):
        self.__price = price

    # getter
    def getName(self):
        return self.__name

    def getPrice(self):
        return self.__price