class Vga:
    
    # atribut
    __brand = ""
    __type = ""
    __price = 0

    
    # konstruktor
    def __init__(self, brand, type, price):
        self.__brand = brand
        self.__type = type
        self.__price = price

    # setter
    def setBrand(self, brand):
        self.__brand = brand
        
    def setType(self, type):
        self.__type = type

    def setPrice(self, price):
        self.__price = price

    # getter
    def getBrand(self):
        return self.__brand
        
    def getType(self):
        return self.__type

    def getPrice(self):
        return self.__price