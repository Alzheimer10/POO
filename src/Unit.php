<?php 
	namespace Unit;

	use Unit\Armors\MissingArmor;
	class Unit {
		
		protected $hp=40;
		protected $name;
		protected $weapon;
		protected $armor;


		function __construct($name, Weapon $weapon){
			$this->name = $name;
			$this->weapon = $weapon;
			$this->armor = new MissingArmor();
		}

		public function setWeapon(Weapon $weapon){
			$this->weapon = $weapon;
		}

		public function move(Unit $direction){
			echo "<br>{$this->name} avanza hacia $direction";
		}

		public function attack(Unit $opponent){
			$attack= $this->weapon->createAttack();

			show('<br>'.$attack->getDescription(
				$this,$opponent
			));

			$opponent->takeDamage(
				$attack
			);
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

		public function takeDamage(Attack $attack){

				$this->setHp(
					$this->hp -$this->armor->absorbDamage($attack)
				);
			if ($this->hp<=0) {
				$this->is_die();
			}
		}

		public	function setArmor(Armor $Armor = null){
			$this->armor = $Armor;
		}

	}
