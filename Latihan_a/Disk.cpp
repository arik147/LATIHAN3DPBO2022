#include "Processor.cpp"

class Disk {

    private:
        // atribut
        string type;
        string capacity;
        int price;

    public:
        // konstruktor
        Disk(){}

        Disk(string type, string capacity, int price)
        {
            this->type = type;
            this->capacity = capacity;
            this->price = price;
        }

        // setter
        void setType(string type)
        {
            this->type = type;
        }
        
        void setCapacity(string capacity)
        {
            this->capacity = capacity;
        }

        void setPrice(int price)
        {
            this->price = price;
        }

        // getter
        string getType()
        {
            return this->type;
        }
        
        string getCapacity()
        {
            return this->capacity;
        }

        int getPrice()
        {
            return this->price;
        }

        // destruktor
        ~Disk(){}
};