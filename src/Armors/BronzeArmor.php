<?php
	namespace Unit\Armors;
	use Unit\Armor;

	class BronzeArmor implements Armor
	{
		public function absorbDamager($damage){
			return $damage/2;
		}
	}
