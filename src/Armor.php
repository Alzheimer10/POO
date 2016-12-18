<?php
	namespace Unit;

	abstract class Armor
	{

		public function absorbDamage(Attack $attack)
		{
			if ($attack->isPhysical()) {
				return $this->absorbPhysicalDamage($attack);
			}
			return $this->absorbMagicDamage($attack);
		}

		public function absorbPhysicalDamage(Attack $attack)
		{
			return $attack->getDamage();
		}

		public function absorbMagicDamage(Attack $attack)
		{
			return $attack->getDamage();
		}
	}