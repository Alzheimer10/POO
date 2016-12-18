<?php
	namespace Unit\Armors;
	use Unit\Armor;
	use Unit\Attack;
	
	class BronzeArmor extends Armor
	{
		public function absorbDamage(Attack $attack)
		{
			return $attack->getDamage/2;
		}
	}
