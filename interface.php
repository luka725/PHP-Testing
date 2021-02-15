<?php 
interface Animal {
	public function makeSound();
}
class Cat implements Animal {
	public function makeSound() { 
		echo "Meow\n";
	}
}
class Dog implements Animal{
	public function makeSound() {
		echo "Bark\n";
	}
}
class Mouse implements Animal{
	public function makeSound() {
		echo "Squeak\n";
	}
}

$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

foreach($animals as $animal){
	$animal->makeSound();
}

?>
