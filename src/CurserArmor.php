<?php
	namespace Unit;

	class CurserArmor implements Armor
	{
		public function absorbDamager($damage){
			return $damage*2;
		}
	}
