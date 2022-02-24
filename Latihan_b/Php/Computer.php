<?php

class Computer {

    // atribut
    private Processor $proc_obj;
    private Disk $disk_obj;
    private Ram $ram_obj;
    private Vga $vga_obj;
    private $totalPrice;

    
    // konstruktor
    function __construct(Processor $proc_obj, Disk $disk_obj, Ram $ram_obj, Vga $vga_obj, $totalPrice)
    {
        $this->proc_obj = $proc_obj;
        $this->disk_obj = $disk_obj;
        $this->ram_obj = $ram_obj;
        $this->vga_obj = $vga_obj;
        $this->totalPrice = $proc_obj->getPrice() + $disk_obj->getPrice() + $ram_obj->getPrice() + $vga_obj->getPrice();
    }

    // setter
    function setProc_obj(Processor $proc_obj)
    {
        $this->proc_obj = $proc_obj;
    }
        
    function setDisk_obj(Disk $disk_obj)
    {
        $this->disk_obj = $disk_obj;
    }
        
    function setRam_obj(Ram $ram_obj)
    {
        $this->ram_obj = $ram_obj;
    }

    function setVga_obj(Vga $vga_obj)
    {
        $this->vga_obj = $vga_obj;
    }

    function setTotalPrice($processorPrice, $diskPrice, $ramPrice, $vgaPrice)
    {
        $this->totalPrice = $processorPrice + $diskPrice + $ramPrice + $vgaPrice;
    }

    // getter
    function getProc_obj()
    {
        return $this->proc_obj;
    }
        
    function getDisk_obj()
    {
        return $this->disk_obj;
    }
        
    function getRam_obj()
    {
        return $this->ram_obj;
    }

    function getVga_obj()
    {
        return $this->vga_obj;
    }

    function getTotalPrice()
    {
        return $this->totalPrice;
    }

        // method
    function printSpecifikasi()
        {
        /* echo "Spesifikasi PC";
        echo "-------------------------------";
        echo "Processor           : " . $proc_obj->getName(). "<br/>";
        echo "  - Processor Price : " . "Rp. " . $proc_obj->getPrice(). "<br/>";
        echo "Disk                : " . $disk_obj->getType(). "<br/>";
        echo "  - Disk Capacity   : " . $disk_obj.getCapacity(). "<br/>";
        echo "  - Disk Price      : " . "Rp. " . $disk_obj->getPrice(). "<br/>";
        echo "Ram Capacity        : " . $ram_obj->getCapacity(). "<br/>";
        echo "  - Ram Price       : " . "Rp. " . $ram_obj->getPrice(). "<br/>";
        echo "VGA                 : " . $vga_obj->getBrand(). "<br/>";
        echo "  - VGA Type        : " . $vga_obj->getType(). "<br/>";
        echo "  - VGA Price       : " . "Rp. " . $vga_obj->getPrice(). "<br/>";
        echo "Total Price         : " . "Rp. " . getTotalPrice(). "<br/>"; */
        }
}

?>