<?php
	namespace Unit;

	class Archer extends Unit
	{
		protected $damage = 20;

		public function attack(Unit $opponent){
			$str = "<br>{$this->name} Dispara una flechas a {$opponent->getName()}";
			show($str);
			$opponent->takeDamage($this->damage);
		}
	}
