<?php 
	namespace Unit;

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
