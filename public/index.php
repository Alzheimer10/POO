<?php
	namespace Unit;
	require '../vendor/autoload.php';

	$armor = new Armors\BronzeArmor();
	$SilverArmor = new Armors\SilverArmor();
	$CurserArmor = new Armors\CurserArmor();
	$Solider = new Solider('Pedro');
	$Archer = new Archer('Luis');
	$Archer->attack($Solider);
	$Solider->setArmor($CurserArmor);
	$Archer->attack($Solider);
	$Solider->attack($Archer);
