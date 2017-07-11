<?php
function sub($a, $b){
	if(!is_int($a)){
		throw new TypeError('$a must be int');
	}
	if(!is_int($b)){
		throw new TypeError('$b must be int');
	}
	return $a - $b;
}

class Person{
	public $name = "";
	public $born = null;

	public function __construct($name, $born){
		if(!is_string($name)){
			throw new TypeError('$name must be int');
		}
		if(!is_a($born, DateTime::class)){
			throw new TypeError('$born must be instance of DateTime');
		}
		$this->name = $name;
		$this->born = $born;
	}
}

function getPersonAge($person){
	if(!is_a($person, Person::class)){
		throw new TypeError('$person must be instance of DateTime');
	}
	return sub((int) date("Y"), (int) $person->born->format('Y'));
}

function isAdult($person){
	if(!is_a($person, Person::class)){
		throw new TypeError('$person must be instance of DateTime');
	}
	return sub(getPersonAge($person), 18) >= 0;
}