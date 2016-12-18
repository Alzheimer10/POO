<?php
	namespace Unit;
	use Unit\Unit;

	abstract class Weapon
	{
		protected $damage = 0;

		public function getDamage()
		{
			return $this->damage;
		}

		abstract public function getDescription(Unit $attacker, Unit $opponent);

		public function setDamage($damage)
		{
			$this->damage = $damage;
		}

	}