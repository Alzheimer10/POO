<?php
	namespace Unit;
	use Units\Solider;
	use Units\Archer;

	require '../vendor/autoload.php';
	$ramm = new Units\Solider('Ramm', new Weapons\BasicSword);
	$ramm->setArmor(new Armors\BronzeArmor());
	$silence= new  Units\Archer('Silence',new Weapons\BasicBow());

	$silence->setWeapon(new Weapons\CrossBow);
	
	$silence->attack($ramm);

	$silence->attack($ramm);

	$ramm->attack($silence);