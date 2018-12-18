<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ДЗ по первому уроку</title>
</head>
<body>
<?php
// ДЗ 1_4
class shoppingbasket
{
	public $good;
	public $price;
	public $qty;
	function __construct($good, $price, $qty) 
	{
		$this->good = $good;
		$this->price = $price;
		$this->qty = $qty;
	}

	function calctotal() {		
		echo $this->qty*$this->price. "<br>";	
	}
}

class cashier extends shoppingbasket 
{
	public $qtysold; 
	function __construct($good, $price, $qty, $qtysold) 
	{		
		$this->good = $good;
		$this->price = $price;
		$this->qty = $qty;
		$this->qtysold = $qtysold;
	}

	public function check() { 
		echo $this->qtysold*$this->price. "<br>";	
	}
	public function remains() { 
		echo $this->qty-$this->qtysold. "<br>";	
	}

}
$b = new shoppingbasket("Milk",60,10); 
$b->calctotal();
$c = new cashier("Milk",60, 10, 2); 
$c->check();
$c->remains();
// ДЗ 5
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo(); 
$a2->foo();
$a1->foo();
$a2->foo();
// Выводит 1234, а не 0123, ибо используется прединкремент 
// ДЗ 6
class B {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class C extends B {
}
$a1 = new B();
$b1 = new C();
$a1->foo(); 
$b1->foo(); 
$a1->foo(); 
$b1->foo();
// Выводит 1122, а не 1234, ибо на наследуемый класс прирост значения переменной в классе родителе не распростроняется
?>	
</body>
</html>