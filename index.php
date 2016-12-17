<?php

	/**
	 * @version 1.0
	 */
	class Person
	{
		var $firstName = 'NO_DEFINE';
		var $lastName = 'NO_DEFINE';

		public function __construct($firstName,$lastName)
		{
			$this->firstName = $firstName;
			$this->lastName = $lastName;
		}

		public function fullName(){
			return $this->firstName.' '. $this->lastName;
		}
	}

	$person1 = new Person('Carlos','Anselmi');
	echo $person1->fullName();
	echo "<br>{$person1->firstName} tiene como apellido {$person1->lastName}";