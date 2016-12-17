<?php
	namespace Unit;
	require "vendor/Armor.php";
	spl_autoload_register(function($class_name){
		print_r("Intentando cargar $class_name <br>");
		if (strpos($class_name, 'Unit\\')==0) {
			$className = str_replace('Unit\\','',$class_name);
			if (file_exists("src/$className.php")) {
				require "src/$className.php";
			}
		}
	});

	$armor = new BronzeArmor();
	$SilverArmor = new SilverArmor();
	$CurserArmor = new CurserArmor();
	$Solider = new Solider('Pedro');
	$Archer = new Archer('Luis');
	$Archer->attack($Solider);
	$Solider->setArmor($CurserArmor);
	$Archer->attack($Solider);
	$Solider->attack($Archer);
