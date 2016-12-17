<?php
	namespace Unit;

	class Archer extends Unit
	{
		protected $damage = 20;

		public function attack(Unit $opponent){
			echo "<br>{$this->name} Dispara una flechas a {$opponent->getName()}";
			$opponent->takeDamage($this->damage);
		}
	}
