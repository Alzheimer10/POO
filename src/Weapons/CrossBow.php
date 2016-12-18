<?php
	namespace Unit\Weapons;
	use Unit\Weapon;
	use Unit\Unit;

	class CrossBow extends Weapon
	{
		protected $damage = 40;
		protected $description = ':unit ataca con flecha a :opponent';
	}
