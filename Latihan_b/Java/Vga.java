class Vga {

    // atribut
    private String brand;
    private String type;
    private int price;

    
    // konstruktor
    public Vga(){}

    public Vga(String brand, String type, int price)
    {
        this.brand = brand;
        this.type = type;
        this.price = price;
    }

    // setter
    public void setBrand(String brand)
    {
        this.brand = brand;
    }
        
    public void setType(String type)
    {
        this.type = type;
    }

    public void setPrice(int price)
    {
        this.price = price;
    }

    // getter
    public String getBrand()
    {
        return this.brand;
    }
        
    public String getType()
    {
        return this.type;
    }

    public int getPrice()
    {
        return this.price;
    }
}