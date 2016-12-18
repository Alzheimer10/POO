<?php
	namespace Unit;

	class SilverArmor implements Armor
	{
		public function absorbDamager($damage){
			return $damage/3;
		}
	}
