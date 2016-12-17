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
			exit();
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

			$this->setHp($this->hp - $this->absorbDamager($damage));
			if ($this->hp<=0) {
				$this->is_die();
			}
		}

		protected function absorbDamager($damage){
			return $damage;
		}
	}


	class Solider extends Unit
	{
		protected $damage = 40;
		protected $armor;

		function __construct($name){
			parent::__construct($name);
		}

		public	function setArmor(Armor $Armor = null){
			$this->armor = $Armor;
		}

		public function attack(Unit $opponent){
			echo "<br>{$this->name} ataca con la espada a {$opponent->getName()}";
			$opponent->takeDamage($this->damage);
		}

		protected function absorbDamager($damage){
			if ($this->armor)
				$damage = $this->armor->absorbDamager($damage);
			return $damage;
		}

	}


	class Archer extends Unit
	{
		protected $damage = 20;

		public function attack(Unit $opponent){
			echo "<br>{$this->name} Dispara una flechas a {$opponent->getName()}";
			$opponent->takeDamage($this->damage);
		}
	}

	interface Armor{
		public function absorbDamager($damage);
	}

	class BronzeArmor implements Armor
	{
		public function absorbDamager($damage){
			return $damage/2;
		}
	}

	class SilverArmor implements Armor
	{
		public function absorbDamager($damage){
			return $damage/3;
		}
	}

	class CurserArmor implements Armor
	{
		public function absorbDamager($damage){
			return $damage*2;
		}
	}


	$armor = new BronzeArmor();
	$SilverArmor = new SilverArmor();
	$CurserArmor = new CurserArmor();
	$Solider = new Solider('Pedro');
	$Archer = new Archer('Luis');
	$Archer->attack($Solider);
	$Solider->setArmor($CurserArmor);
	$Archer->attack($Solider);
	$Solider->attack($Archer);