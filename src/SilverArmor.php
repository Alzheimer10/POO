<?php
	namespace Unit;
	use Items\Armor;
	
	class SilverArmor implements Armor
	{
		public function absorbDamager($damage){
			return $damage/3;
		}
	}
