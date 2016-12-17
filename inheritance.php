<?php

	/**
	* Leccion Herencia y abstraccion
	*/
	abstract class Unit {
		
		protected $hp=40;
		protected $name;


		function __construct($name)
		{
			$this->name = $name;
		}

		public function move(Unit $direction){
			echo "<br>{$this->name} avanza hacia $direction";
		}

		abstract public function attack(Unit $opponent);

		public function is_die(){
			echo "<br> {$this->name} muere";
		}

		public function getName(){
			return $this->name;
		}

		private function setHp($hp){
			$this->hp = $hp;
			echo "<br>{$this->name} ahora tiene {$this->hp} puntos de vida";
		}

		private  function getHp(){
			return $this->hp;
		}

		public function takeDamage($damage){
			$this->setHp($this->hp - $damage);
			if ($this->hp<=0) {
				$this->is_die();
			}
		}
	}


	class Solider extends Unit
	{
		protected $damage = 40;

		public function attack(Unit $opponent){
			echo "<br>{$this->name} corta a {$opponent->getName()} en dos";
			$opponent->takeDamage($this->damage);
		}

		public function takeDamage($damage){
			return parent::takeDamage($damage / 2);
		}
	}

	class Archer extends Unit
	{
		protected $damage = 20;

		public function attack(Unit $opponent){
			echo "<br>{$this->name} Dispara una flechas a {$opponent->getName()}";
			$opponent->takeDamage($this->damage);
		}

		public function takeDamage($damage){
			if (rand(0,1)==1) {
				return parent::takeDamage($damage);
			}
		}
	}

	$Solider = new Solider('Pedro');

	$Archer = new Archer('Luis');
	$Archer->attack($Solider);
	$Archer->attack($Solider);
	$Solider->attack($Archer);