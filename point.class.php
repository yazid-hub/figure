<?php
	class Point {
			private  $x, $y;

			public function __construct () {
				$this->x = $this->y = 0;
			}

			public function renseigner ($tab){

			$this->x = $tab["x"];
			$this->y = $tab["y"];
			}

			public function afficher () {
				return $this->x." - ".$this->y;
			}

			public function getX(){
				return $this->x;
			}

			public function getY(){
				return $this->y; 
			}

			public function setX($x){
				$this->x = $x; 
			}
			public function setY($y){
			$this->y = $y;
			}
	}
?>