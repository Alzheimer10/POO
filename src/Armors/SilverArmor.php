<?php
	namespace Unit\Armors;
	use Unit\Armor;
	use Unit\Attack;

	class SilverArmor implements Armor
	{
		public function absorbDamager(Attack $attack)
		{
			if ($attack->isPhysical()) {
				return $attack->getDamage()/3;
			}
			return $attack->getDamage();
		}
	}
