<?php
	namespace Unit;
	use Items\Armor;
	
	class CurserArmor implements Armor
	{
		public function absorbDamager($damage){
			return $damage*2;
		}
	}
