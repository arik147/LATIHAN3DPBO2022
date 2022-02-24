from Processor import Processor
from Disk import Disk
from Ram import Ram
from Vga import Vga

class Computer:

    #  atribut
    # __totalPrice = 0
    """ Processor proc_obj
    Disk disk_obj
    Ram ram_obj
    Vga vga_obj """

    
    #  konstruktor
    def __init__(self, proc_obj, disk_obj, ram_obj, vga_obj, totalPrice):
        self.proc_obj = proc_obj
        self.disk_obj = disk_obj
        self.ram_obj = ram_obj
        self.vga_obj = vga_obj
        self.totalPrice = proc_obj.getPrice() + disk_obj.getPrice() + ram_obj.getPrice() + vga_obj.getPrice()
    

    #  setter
    def setProc_obj(self, proc_obj):
        self.proc_obj = proc_obj
    
        
    def setDisk_obj(self, disk_obj):
        self.disk_obj = disk_obj
    
        
    def setRam_obj(self, ram_obj):
        self.ram_obj = ram_obj
    

    def setVga_obj(self, vga_obj):
        self.vga_obj = vga_obj
    

    def setTotalPrice(self, processorPrice, diskPrice, ramPrice, vgaPrice):
        self.totalPrice = processorPrice + diskPrice + ramPrice + vgaPrice
    

    #  getter
    def getProc_obj(self):
        return self.proc_obj
    
        
    def getDisk_obj(self):
        return self.disk_obj
    
        
    def getRam_obj(self):
        return self.ram_obj
    

    def getVga_obj(self):
        return self.vga_obj
    

    def getTotalPrice(self):
        return self.totalPrice