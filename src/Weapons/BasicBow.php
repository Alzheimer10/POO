<?php
	namespace Unit\Weapons;
	use Unit\Weapon;
	use Unit\Unit;
	
	class BasicBow extends Weapon
	{
		protected $damage = 20;
		protected $description = ':unit ataca con flecha a :opponent';
	}