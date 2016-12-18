<?php
	namespace Unit\Weapons;
	use Unit\Weapon;
	use Unit\Unit;

	class BasicSword extends Weapon
	{
		protected $damage = 40;

		public function getDescription(Unit $attacker, Unit $opponent){
			return "<br>{$attacker->getName()} ataca a {$opponent->getName()}";
		}
	}
