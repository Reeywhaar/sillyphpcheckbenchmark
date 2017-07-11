<?php
function sub(int $a, int $b){
	return $a - $b;
}

class Person{
	public $name = "";
	public $born = null;

	public function __construct(string $name, DateTime $born){
		$this->name = $name;
		$this->born = $born;
	}
}

function getPersonAge(Person $person){
	return sub((int) date("Y"), (int) $person->born->format('Y'));
}

function isAdult(Person $person){
	return sub(getPersonAge($person), 18) >= 0;
}