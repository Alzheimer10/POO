<?php
	namespace Unit\Weapons;
	use Unit\Weapon;
	use Unit\Unit;

	class FireBow extends Weapon
	{
		protected $damage = 30;
		protected $magical = true;
		protected $description = ':unit dispara una flecha de fuego :opponent';
	}
