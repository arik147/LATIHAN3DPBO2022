class Main {
    public static void main(String[] args)
    {
        // konstruktor
        Processor proc_obj = new Processor("AMD Ryzen 7 5800x", 100000);
        Disk disk_obj = new Disk("SSD", "1TB", 100000);
        Ram ram_obj = new Ram("32GB", 100000);
        Vga vga_obj = new Vga("Nvidia", "RTX 3090 Ti", 100000);
        
        // setter
        Computer pc_obj = new Computer();
        pc_obj.setProc_obj(proc_obj);
        pc_obj.setDisk_obj(disk_obj);
        pc_obj.setRam_obj(ram_obj);
        pc_obj.setVga_obj(vga_obj);
        pc_obj.setTotalPrice(proc_obj.getPrice(), disk_obj.getPrice(), ram_obj.getPrice(), vga_obj.getPrice());
        
        // method
        pc_obj.printSpecifikasi();
    }    
}
