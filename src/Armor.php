<?php
	namespace Unit;

	interface Armor{
		public function absorbDamager(Attack $attack);
	}