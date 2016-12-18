<?php 
	namespace Unit;

	abstract class Unit {
		
		protected $hp=40;
		protected $name;
		protected $weapon;
		protected $armor;


		function __construct($name, Weapon $weapon){
			$this->name = $name;
			$this->weapon = $weapon;
		}

		public function setWeapon(Weapon $weapon){
			$this->weapon = $weapon;
		}

		public function move(Unit $direction){
			echo "<br>{$this->name} avanza hacia $direction";
		}

		public function attack(Unit $opponent){
			show($this->weapon->getDescription($this,$opponent));
			$opponent->takeDamage($this->weapon->getDamage());
		}

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

		public	function setArmor(Armor $Armor = null){
			$this->armor = $Armor;
		}

		protected function absorbDamager($damage){
			if ($this->armor)
				$damage = $this->armor->absorbDamager($damage);
			return $damage;
		}
	}
