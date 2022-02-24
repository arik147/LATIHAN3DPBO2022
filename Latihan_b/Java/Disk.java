class Disk {

    // atribut
    private String type;
    private String capacity;
    private int price;

    // konstruktor
    public Disk(){}

    public Disk(String type, String capacity, int price)
    {
        this.type = type;
        this.capacity = capacity;
        this.price = price;
    }

    // setter
    public void setType(String type)
    {
        this.type = type;
    }
        
    public void setCapacity(String capacity)
    {
        this.capacity = capacity;
    }

    public void setPrice(int price)
    {
        this.price = price;
    }

    // getter
    public String getType()
    {
        return this.type;
    }
        
    public String getCapacity()
    {
        return this.capacity;
    }

    public int getPrice()
    {
        return this.price;
    }
}