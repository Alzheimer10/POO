<?php
	namespace Unit\Weapons;
	use Unit\Weapon;
	use Unit\Unit;
	use Unit\Weapons\Bow;

	class BasicBow extends Bow
	{
		protected $damage = 20;

		public function getDescription(Unit $attacker, Unit $opponent){
			return "<br>{$attacker->getName()} ataca con arco a {$opponent->getName()}";
		}
	}