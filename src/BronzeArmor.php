<?php
	namespace Unit;
	use Items\Armor as ArmorGoT;

	class BronzeArmor implements ArmorGoT
	{
		public function absorbDamager($damage){
			return $damage/2;
		}
	}
