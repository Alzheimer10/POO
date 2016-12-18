<?php
	namespace Unit\Weapons;
	use Unit\Weapon;
	use Unit\Unit;

	class BasicSword extends Weapon
	{
		protected $damage = 40;
		protected $description = ':unit ataca a :opponent';
	}
