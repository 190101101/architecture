<?php 

abstract class creator
{
    abstract public function factoryMethod(): Product;

    public function someOperation(): string
    {
        $product = $this->factoryMethod();
        $result = "creator: The same creator's code has just worked with " .
        $product->operation() . EOL;
        return $result;
    }
}

class ConcreteCreator1 extends creator
{
    public function factoryMethod(): Product
    {
        return new ConcreteProduct1();
    }
}

class ConcreteCreator2 extends creator
{
    public function factoryMethod(): Product
    {
        return new ConcreteProduct2();
    }
}

interface Product
{
    public function operation(): string;
}

class ConcreteProduct1 implements Product
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct1}";
    }
}

class ConcreteProduct2 implements Product
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct2}";
    }
}

function clientCode(creator $creator)
{
    echo "Client: I'm not aware of the creator's class, but it still works" . EOL;
    echo $creator->someOperation();
}

clientCode(new ConcreteCreator1());
clientCode(new ConcreteCreator2());