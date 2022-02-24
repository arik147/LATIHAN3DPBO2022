<?php

include "Processor.php";
include "Disk.php";
include "Ram.php";
include "Vga.php";
include "Computer.php";

// konstruktor
$proc_obj = new Processor("AMD Ryzen 7 5800x", 100000);
$disk_obj = new Disk("SSD", "1TB", 100000);
$ram_obj = new Ram("32GB", 100000);
$vga_obj = new Vga("Nvidia", "RTX 3090 Ti", 100000);

// atribut total price
// karena kalo pake setter atau get total kok gabisa ya :(
$totalPrice = $proc_obj->getPrice() + $disk_obj->getPrice() + $ram_obj->getPrice() + $vga_obj->getPrice();

// konstruktor computer
$pc_obj = new Computer($proc_obj, $disk_obj, $ram_obj, $vga_obj, $totalPrice);

// menampilkan hasil
echo "Spesifikasi PC". "<br/>";
echo "-------------------------------". "<br/>";
echo "Processor           : " . $proc_obj->getName(). "<br/>";
echo "  - Processor Price : " . "Rp. " . $proc_obj->getPrice(). "<br/>";
echo "Disk                : " . $disk_obj->getType(). "<br/>";
echo "  - Disk Capacity   : " . $disk_obj->getCapacity(). "<br/>";
echo "  - Disk Price      : " . "Rp. " . $disk_obj->getPrice(). "<br/>";
echo "Ram Capacity        : " . $ram_obj->getCapacity(). "<br/>";
echo "  - Ram Price       : " . "Rp. " . $ram_obj->getPrice(). "<br/>";
echo "VGA                 : " . $vga_obj->getBrand(). "<br/>";
echo "  - VGA Type        : " . $vga_obj->getType(). "<br/>";
echo "  - VGA Price       : " . "Rp. " . $vga_obj->getPrice(). "<br/>";
echo "Total Price         : " . "Rp. " . $pc_obj->getTotalPrice(). "<br/>";

?>