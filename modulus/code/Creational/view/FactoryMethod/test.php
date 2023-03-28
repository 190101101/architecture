<?php 

namespace PatternDesign;

abstract class Aclass
{
	abstract public function factoryMethod() : IAclass;

	public function someOperation()
	{
		$method = $this->factoryMethod();
		$method->operation();
	}
} 

class Bclass1 extends Aclass
{
	public function factoryMethod(): IAclass
	{
		return new IBclass1();
	}
}

class Bclass2 extends Aclass
{
	public function factoryMethod(): IAclass
	{
		return new IBclass2();
	}
}

interface IAclass
{
	public function operation();
}

class IBclass1 implements IAclass
{
	public function operation()
	{
        return "{Result of the ConcreteProduct1a}";
	}
}

class IBclass2 implements IAclass
{
	public function operation()
	{
        return "{Result of the ConcreteProduct2a}";
	}
}

function clientCode(Aclass $creator)
{
    echo "Client: I'm not aware of the creatora's class, but it still works" . EOL;
	$creator->someOperation();
}

dd('Testing Bclass1');
clientCode(new Bclass1);

dd('Testing Bclass2');
clientCode(new Bclass2);