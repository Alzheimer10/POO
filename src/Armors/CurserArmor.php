<?php
	namespace Unit\Armors;
	use Unit\Armor;

	class CurserArmor implements Armor
	{
		public function absorbDamager($damage){
			return $damage*2;
		}
	}
