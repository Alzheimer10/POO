<?php
	namespace Unit\Armors;
	use Unit\Armor;

	class SilverArmor implements Armor
	{
		public function absorbDamager($damage){
			return $damage/3;
		}
	}
