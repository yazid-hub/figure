<?php
	require_once ("point.class.php"); 

abstract class Figure {

		protected $libelle;
		protected $unPoint ; //instance de la classe point 

		public function __construct(){
			$this->unPoint = new Point (); 
			$this->libelle="";
		}
		public function renseigner ($unPoint, $libelle ) {
			 
			$this->unPoint = $unPoint; 
			$this->libelle =  $libelle; 
		}

		public abstract function afficher (); //sans implémentation 

		public function getLibelle() {
		return $this->libelle;
		}

		public function getPoint() {
			return $this->unPoint;
		}

		public function setLibelle($libelle) {
			$this->libelle = $libelle;
		}

		public function setPoint($unPoint) {
			$this->unPoint = $unPoint;
		}
}
?>

