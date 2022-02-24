class Disk:
    
    # atribut
    __type = ""
    __capacity = ""
    __price = 0

    # konstruktor

    def __init__(self, type, capacity, price):
        self.__type = type
        self.__capacity = capacity
        self.__price = price
    

    # setter
    def setType(self, type):
        self.__type = type
    
        
    def setCapacity(self, capacity):
        self.__capacity = capacity
    

    def setPrice(self, price):
        self.__price = price
    

    # getter
    def getType(self):
        return self.__type
    
        
    def getCapacity(self):
        return self.__capacity
    

    def getPrice(self):
        return self.__price
    
