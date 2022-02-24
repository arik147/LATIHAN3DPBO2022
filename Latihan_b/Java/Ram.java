class Ram {

    // atribut
    private String capacity;
    private int price;

    
    // konstruktor
    public Ram(){}

    public Ram(String capacity, int price)
    {
        this.capacity = capacity;
        this.price = price;
    }

    // setter
    public void setCapacity(String capacity)
    {
        this.capacity = capacity;
    }

    public void setPrice(int price)
    {
        this.price = price;
    }

    // getter
    public String getCapacity()
    {
        return this.capacity;
    }

    public int getPrice()
    {
        return this.price;
    }
}