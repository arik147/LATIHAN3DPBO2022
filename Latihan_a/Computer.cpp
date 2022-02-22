#include "Vga.cpp"

class Computer {

    private:
        // atribut
        Processor proc_obj;
        Disk disk_obj;
        Ram ram_obj;
        Vga vga_obj;
        int totalPrice;

    public:
        // konstruktor
        Computer(){}

        Computer(Processor proc_obj, Disk disk_obj, Ram ram_obj, Vga vga_obj, int totalPrice)
        {
            this->proc_obj = proc_obj;
            this->disk_obj = disk_obj;
            this->ram_obj = ram_obj;
            this->vga_obj = vga_obj;
            this->totalPrice = proc_obj.getPrice() + disk_obj.getPrice() + ram_obj.getPrice() + vga_obj.getPrice();
        }

        // setter
        void setProc_obj(Processor proc_obj)
        {
            this->proc_obj = proc_obj;
        }
        
        void setDisk_obj(Disk disk_obj)
        {
            this->disk_obj = disk_obj;
        }
        
        void setRam_obj(Ram ram_obj)
        {
            this->ram_obj = ram_obj;
        }

        void setVga_obj(Vga vga_obj)
        {
            this->vga_obj = vga_obj;
        }

        void setTotalPrice(int processorPrice, int diskPrice, int ramPrice)
        {
            this->totalPrice = processorPrice + diskPrice + ramPrice;
        }

        // getter
        Processor getProc_obj()
        {
            return this->proc_obj;
        }
        
        Disk getDisk_obj()
        {
            return this->disk_obj;
        }
        
        Ram getRam_obj()
        {
            return this->ram_obj;
        }

        Vga getVga_obj()
        {
            return this->vga_obj;
        }

        int getTotalPrice()
        {
            return this->totalPrice;
        }

        // method
        void printSpecifikasi()
        {
            cout << "Spesifikasi PC"<< endl;
            cout << "-------------------------------"<< endl;
            cout << "Processor           : " << proc_obj.getName() << endl;
            cout << "  - Processor Price : " << "Rp. " << proc_obj.getPrice() << endl;
            cout << "Disk                : " << disk_obj.getType() << endl;
            cout << "  - Disk Capacity   : " << disk_obj.getCapacity() << endl;
            cout << "  - Disk Price      : " << "Rp. " << disk_obj.getPrice() << endl;
            cout << "Ram Capacity        : " << ram_obj.getCapacity() << endl;
            cout << "  - Ram Price       : " << "Rp. " << ram_obj.getPrice() << endl;
            cout << "VGA                 : " << vga_obj.getBrand() << endl;
            cout << "  - VGA Type        : " << vga_obj.getType() << endl;
            cout << "  - VGA Price       : " << "Rp. " << vga_obj.getPrice() << endl;
            cout << "Total Price         : " << "Rp. " << getTotalPrice() << endl;
        }

        // destruktor
        ~Computer(){}
};