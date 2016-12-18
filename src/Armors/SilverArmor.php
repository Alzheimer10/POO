<?php
	namespace Unit\Armors;
	use Unit\Armor;
	use Unit\Attack;

	class SilverArmor extends Armor
	{

		public function absorbPhysicalDamage(Attack $attack)
		{
			return $attack->getDamage() / 3;
		}

	}
