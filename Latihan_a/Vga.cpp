#include "Ram.cpp"

class Vga {

    private:
        // atribut
        string brand;
        string type;
        int price;

    public:
        // konstruktor
        Vga(){}

        Vga(string brand, string type, int price)
        {
            this->brand = brand;
            this->type = type;
            this->price = price;
        }

        // setter
        void setBrand(string brand)
        {
            this->brand = brand;
        }
        
        void setType(string type)
        {
            this->type = type;
        }

        void setPrice(int price)
        {
            this->price = price;
        }

        // getter
        string getBrand()
        {
            return this->brand;
        }
        
        string getType()
        {
            return this->type;
        }

        int getPrice()
        {
            return this->price;
        }

        // destruktor
        ~Vga(){}
};