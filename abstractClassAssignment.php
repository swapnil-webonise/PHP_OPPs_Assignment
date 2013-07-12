<?php
interface animal
{
	public function talk();
}

abstract class Cat implements animal
{
	public $name;
	public abstract function printInfo();
	public function talk()
	{
		echo "<br />muaw";		
	}
}

class Kitten extends Cat
{
	public function printInfo()
	{
		echo "<br />Hi this is Kitten";
	}
}

class Tomcat extends Cat
{
	public function printInfo()
	{
		echo "<br />Hi this is Tomcat";	
	}	
}

class Dog implements animal
{
	public function talk()
	{
		echo "<br />jaff";
	}
}

class TestAnimals
{
	public $animalArray;
	public function TestAnimals()
	{
		$animalArray = array();
		$animalArray[] = new Tomcat();
		$animalArray[1] = new Kitten();
		array_push($animalArray, new Dog());
		$animalArray[0]->talk();	
		$animalArray[1]->talk();	
		$animalArray[2]->talk();	
	}
}

echo "<pre>";
$obj=new TestAnimals();
echo "</pre>";

?>
