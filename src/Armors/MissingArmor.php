<?php
	namespace Unit\Armors;
	
	use Unit\Armor;
	use Unit\Attack;

	class MissingArmor extends Armor
	{
		
		public function absorbDamage(Attack $attack)
		{
			return $attack->getDamage();
		}
			
	}
