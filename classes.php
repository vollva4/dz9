<?php
class Car {
	public $brand;
	public $model;
	public $color;
	public $price;
	public $discount;
	public $ecoClass;
	public function __construct($brand, $model, $price) {
		echo 'Выпущена новая машина: ' . $brand . ' ' . $model .  ' За ' . $price . '.    ';
	}
	public function changePrice ($newprice) {
		$this->price = $newprice;
	}
	public function setDiscount ($newdiscount) {
		$this->discount = $newdiscount;
	}
	public function getPrice () {
		return $this->price;
	}
	public function getPriceWithDiscount () {
		return $this->price - ($this->price/100*$this->discount);
	}
}

class Tele {
	public $brand;
	public $model;
	public $color;
	public $price;
	public $discount;
	public function __construct($brand, $model, $price, $discount) {
		$this->brand = $brand;
		$this->model = $model;
		$this->price = $price;
		$this->discount = $discount;
		echo 'В продаже появился новый телефон: ' . $brand . ' ' . $model .  '.  ';
	}
	public function changePrice ($newprice) {
		$this->price = $newprice;
	}
	public function getPrice () {
		return $this->price;
	}
	public function getPriceWithDiscount () {
		return $this->price - ($this->price/100*$this->discount);
	}
}

class Pen{
	public $brand;
	public $model;
	public $color;
	public $price;
	public $discount;
	public $diagonal;
	public function __construct($brand, $model, $price, $diagonal) {
		$this->brand = $brand;
		$this->model = $model;
		$this->price = $price;
		$this->diagonal = $diagonal;
		echo 'Телефизор года: ' . $brand . ' ' . $model .  ' За ' . $price . '.    ';
	}
	public function changePrice ($newprice) {
		$this->price = $newprice;
	}
	public function getPrice () {
		return $this->price;
	}
	public function getPriceWithDiscount () {
		return $this->price - ($this->price/100*$this->discount);
	}

}


class Duck {
	public $name;
    public $mainland;
    public $total_length;
    public function __construct($name, $mainland, $total_length)
    {
        $this->name = $name;
        $this->mainland = $mainland;
        $this->total_length = $total_length;
    }




}
class Product {
	public $category;
	public $brand;
	public $model;
	public $size;
	private $price;
	private $discount = 0;
	public function __construct($brand, $model, $category, $size, $price) {
		$this->brand = $brand;
		$this->model = $model;
		$this->category = $category;
		$this->size = $size;
		$this->price = $price;
	}
	public function changePrice ($newprice) {
		$this->price = $newprice;
	}
	public function setDiscount ($newdiscount) {
		$this->discount = $newdiscount;
	}
	public function getPrice () {
		return $this->price;
	}
	public function getPriceWithDiscount () {
		return $this->price - ($this->price/100*$this->discount);
	}
}

$shoes = new Product ('Nike', 'xxx', 'shoes', '39', 50);
$t_short = new Product ('Cropp', 'Cropp', 'T-short', 'S', 10);
$Duck1 = new Duck('Mergellus albellus','Eurasia', '38—44 см');
$Duck2 = new Duck('Dendrocygna bicolor','Africa', '45—53 см');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Netology Lesson 9</title>
</head>
<body>
	<div style="width: 80%; margin: 0 auto;">
		<h2>PHP > урок 9</h2>
		<p><strong>1. </strong>Инкапсуляция - сокрытие свойств (переменных) или методов (встроенных функции) внутри экземпляра класса (объекта), в котором эти свойства/методы были описаны. Таким образом, мы имеем возможность создавать бесконечное множество объектов, описанных классом, не зависящих друг от друга.</p>
		<p><strong>2. </strong> Плюсы объектов - более читаемый код, быстрое создание объектов при помощи магической функции __construct, защита свойств объектов средствами инкапсуляции. Минусы - иногда сложное создание/описание класса, при дальнейшей работе с объектами класса - необходимсть помнить все его свойства и методы.</p>
		<pre>
			<?php
			$car1 = new Car('bmw',' X3', 1900000);
			echo '<br>';
			$tele1 = new Tele('lg','g22', 50000, 10);
			echo 'Цена с учетом скидки: ' . $tele1->getPriceWithDiscount ();
			echo '<br>';
			print_r($Duck1);
			print_r($Duck2);
			echo '<br>';
			print_r($shoes);
			print_r($t_short);
			?>	
	</div>
</body>
</html>