from Computer import Computer
from Processor import Processor
from Disk import Disk
from Ram import Ram
from Vga import Vga

# konstruktor
proc_obj = Processor("AMD Ryzen 7 5800x", 100000)
disk_obj = Disk("SSD", "1TB", 100000)
ram_obj = Ram("32GB", 100000)
vga_obj = Vga("Nvidia", "RTX 3090 Ti", 100000)

# menghitung nilai total
totalPrice = int(proc_obj.getPrice()) + disk_obj.getPrice() + ram_obj.getPrice() + vga_obj.getPrice()
# konstruktor
pc_obj = Computer(proc_obj, disk_obj, ram_obj, vga_obj, totalPrice)

# output
print("Spesifikasi PC")
print("-------------------------------")
print("Processor           :", proc_obj.getName())
print("  - Processor Price : Rp. ", proc_obj.getPrice())
print("Disk                :", disk_obj.getType())
print("  - Disk Capacity   :", disk_obj.getCapacity())
print("  - Disk Price      : Rp. ", disk_obj.getPrice())
print("Ram Capacity        :", ram_obj.getCapacity())
print("  - Ram Price       : Rp. ", ram_obj.getPrice())
print("VGA                 :", vga_obj.getBrand())
print("  - VGA Type        :", vga_obj.getType())
print("  - VGA Price       : Rp. ", vga_obj.getPrice())
print("Total Price         : Rp. ", pc_obj.getTotalPrice())