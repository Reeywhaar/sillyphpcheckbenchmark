<?php
function sub($a, $b){
	return $a - $b;
}

class Person{
	public $name = "";
	public $born = null;

	public function __construct($name, $born){
		$this->name = $name;
		$this->born = $born;
	}
}

function getPersonAge($person){
	return sub((int) date("Y"), (int) $person->born->format('Y'));
}

function isAdult($person){
	return sub(getPersonAge($person), 18) >= 0;
}