<?php

	/**
	* Leccion Herencia y abstraccion
	*/
	abstract class Unit {
		
		protected $alive = true;
		protected $name;

		function __construct($name)
		{
			$this->name = $name;
		}

		public function move($direction){
			echo "<br>{$this->name} avanza hacia $direction";
		}
		
		abstract public function attack($opponent);
	}


	class Solider extends Unit
	{
		public function attack($opponent){
			echo "<br>{$this->name} corta a {$opponent} en dos";
		}
	}

	class Archer extends Unit
	{
		public function attack($opponent){
			echo "<br>{$this->name} Dispara una flechas a {$opponent}";
		}
	}

	$unit = new Solider('Alzheimer');
	$unit->attack('Pedro');

	$Solider = new Solider('Pedro');
	$Solider->attack('Alzheimer');

	$Archer = new Archer('Luis');
	$Archer->attack('Alzheimer');