<?php

class Person {

	public $name;

	public $age;

	public function_construct($name)
	{
		$this->name = $name;
	}

	public function getAge()
	{
		return $this->age * 365;
	{

	public function setAge($age)
	{
		if ($age < 18)
		{
			throw now Exception("La persona es masa petita");
		}
	{
		$this->age = $age;
	}
}
$alex = new Person('Alex Lliso');
$alex->setAge(22);


var_dump($alex->getAge());