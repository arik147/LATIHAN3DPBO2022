class Processor {

    // atribut
    private String name;
    private int price;

    
    // konstruktor
    public Processor(){}

    public Processor(String name, int price)
    {
        this.name = name;
        this.price = price;
    }

    // setter
    public void setName(String name)
    {
        this.name = name;
    }

    public void setPrice(int price)
    {
        this.price = price;
    }

    // getter
    public String getName()
    {
        return this.name;
    }

    public int getPrice()
    {
        return this.price;
    }
}