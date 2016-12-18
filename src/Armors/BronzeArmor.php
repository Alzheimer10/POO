<?php
	namespace Unit\Armors;
	use Unit\Armor;
	use Unit\Attack;
	
	class BronzeArmor implements Armor
	{
		public function absorbDamager(Attack $attack)
		{
			return $attack->getDamage/2;
		}
	}
