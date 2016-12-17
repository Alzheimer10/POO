<?php 
	namespace Unit;

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
