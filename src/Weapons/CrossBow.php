<?php
	namespace Unit\Weapons;
	use Unit\Weapon;
	use Unit\Unit;
	use Unit\Weapons\Bow;

	class CrossBow extends Bow{
		
		protected $damage = 40;

		public function getDescription(Unit $attacker, Unit $opponent){
			return "<br>{$attacker->getName()} ataca con una ballesta a {$opponent->getName()}";
		}
	}
