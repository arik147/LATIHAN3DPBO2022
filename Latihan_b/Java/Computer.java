class Computer {

    // atribut
    private Processor proc_obj;
    private Disk disk_obj;
    private Ram ram_obj;
    private Vga vga_obj;
    private int totalPrice;

    
    // konstruktor
    public Computer(){}

    public Computer(Processor proc_obj, Disk disk_obj, Ram ram_obj, Vga vga_obj, int totalPrice)
    {
        this.proc_obj = proc_obj;
        this.disk_obj = disk_obj;
        this.ram_obj = ram_obj;
        this.vga_obj = vga_obj;
        this.totalPrice = proc_obj.getPrice() + disk_obj.getPrice() + ram_obj.getPrice() + vga_obj.getPrice();
    }

    // setter
    public void setProc_obj(Processor proc_obj)
    {
        this.proc_obj = proc_obj;
    }
        
    public void setDisk_obj(Disk disk_obj)
    {
        this.disk_obj = disk_obj;
    }
        
    public void setRam_obj(Ram ram_obj)
    {
        this.ram_obj = ram_obj;
    }

    public void setVga_obj(Vga vga_obj)
    {
        this.vga_obj = vga_obj;
    }

    public void setTotalPrice(int processorPrice, int diskPrice, int ramPrice, int vgaPrice)
    {
        this.totalPrice = processorPrice + diskPrice + ramPrice + vgaPrice;
    }

    // getter
    public Processor getProc_obj()
    {
        return this.proc_obj;
    }
        
    public Disk getDisk_obj()
    {
        return this.disk_obj;
    }
        
    public Ram getRam_obj()
    {
        return this.ram_obj;
    }

    public Vga getVga_obj()
    {
        return this.vga_obj;
    }

    public int getTotalPrice()
    {
        return this.totalPrice;
    }

        // method
        void printSpecifikasi()
        {
            System.out.println("Spesifikasi PC");
            System.out.println("-------------------------------");
            System.out.println("Processor           : " + proc_obj.getName());
            System.out.println("  - Processor Price : " + "Rp. " + proc_obj.getPrice());
            System.out.println("Disk                : " + disk_obj.getType());
            System.out.println("  - Disk Capacity   : " + disk_obj.getCapacity());
            System.out.println("  - Disk Price      : " + "Rp. " + disk_obj.getPrice());
            System.out.println("Ram Capacity        : " + ram_obj.getCapacity());
            System.out.println("  - Ram Price       : " + "Rp. " + ram_obj.getPrice());
            System.out.println("VGA                 : " + vga_obj.getBrand());
            System.out.println("  - VGA Type        : " + vga_obj.getType());
            System.out.println("  - VGA Price       : " + "Rp. " + vga_obj.getPrice());
            System.out.println("Total Price         : " + "Rp. " + getTotalPrice());
        }
}