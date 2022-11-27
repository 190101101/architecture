<?php 

abstract class Creatora
{
    abstract public function factoryMethoda(): Product;

    public function someOperation(): string
    {
        $product = $this->factoryMethoda();
        $result = "Creatora: The same creatora's code has just worked with " .
        $product->operation() . EOL;

        return $result;
    }
}

class ConcreteCreatora1a extends Creatora
{
    public function factoryMethoda(): Product
    {
        return new ConcreteProduct1a();
    }
}

class ConcreteCreatora2a extends Creatora
{
    public function factoryMethoda(): Product
    {
        return new ConcreteProduct2a();
    }
}

interface Product
{
    public function operation(): string;
}

class ConcreteProduct1a implements Product
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct1a}";
    }
}

class ConcreteProduct2a implements Product
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct2a}";
    }
}

function clientCode1(Creatora $creatora)
{
    echo "Client: I'm not aware of the creatora's class, but it still works" . EOL;
    echo $creatora->someOperation();
}

clientCode1(new ConcreteCreatora1a());
clientCode1(new ConcreteCreatora2a());