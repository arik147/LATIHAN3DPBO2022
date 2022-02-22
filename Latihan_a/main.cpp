#include "Computer.cpp"

int main()
{
    // buat processor
    Processor proc_obj("AMD Ryzen 7 5800x", 100000);
    Disk disk_obj("SSD", "1TB", 100000);
    Ram ram_obj("32GB", 100000);
    Vga vga_obj("Nvidia", "RTX 3090 Ti", 100000);


    // making a pc object
    Computer pc_obj(proc_obj, disk_obj, ram_obj, vga_obj, pc_obj.getTotalPrice());
    
    // print pc by method
    pc_obj.printSpecifikasi();

    /* cout << "Processor : " << proc_obj.getName() << endl;
    cout << "Disk : " << disk_obj.getType() << endl;
    cout << "Disk Capacity : " << disk_obj.getCapacity() << endl;
    cout << "Ram : " << ram_obj.getCapacity() << endl;
    cout << "Total Price : " << pc_obj.getTotalPrice() << endl; */

    return 0;
}