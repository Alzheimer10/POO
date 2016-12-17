<?php

	/**
	 * @version 1.0
	 */
	class Person
	{
		// public, protected <=> private
		protected $firstName = 'NO_DEFINE';
		protected $lastName = 'NO_DEFINE';
		protected $nickname; 

		public function __construct($firstName,$lastName,$nickname)
		{
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->nickname = $nickname;
		}

		public function getFullName(){
			return $this->firstName.' '. $this->lastName.' '.$this->nickname;
		}

		public function setFirstName($firstName){
			$this->firstName = $firstName;
		}

		public function setLastName($lastName){
			$this->lastName = $lastName;
		}

		public function setNickname($nickname){
			$this->nickname = $nickname;
		}

		public function getFirstName(){
			return $this->firstName;
		}

		public function getLastName(){
			return $this->lastName;
		}

		public function getNickname(){
			return strtolower($this->nickname);
		}


	}

	$person1 = new Person('Carlos','Anselmi','Alzheimer');
	echo $person1->getFullName();
	$person1->setFirstName('Alfredo');
	$person1->setLastName('Jimenez');
	$person1->setNickname('Alzheimer10');
	echo "<br>".$person1->getNickname();
	echo "<br>{$person1->getFirstName()} tiene como apellido {$person1->getLastName()}";