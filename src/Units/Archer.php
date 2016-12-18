<?php
	namespace Unit\Units;

	use Unit\Unit;
	use Unit\Weapons\Bow;
	
	class Archer extends Unit
	{
		public function __construct($name, Bow $bow){
			parent::__construct($name,$bow);
		}
	}
