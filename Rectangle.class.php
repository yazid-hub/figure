<?php
	require_once ("Carre.class.php"); 
	class Rectangle extends Carre {

		private $cote;

		public function __construct(){
			parent :: __construct () ;
			$this->cote=0;
		}
		//réécrire les méthodes suivantes 
		public function perimetre (){
			return ($this->rayon+$this->cote) * 2;
		}
		public function surface (){
			return ($this->rayon*$this->cote);
		}

		public function renseigner ($unPoint, $libelle, $rayon, $cote)
		{
			parent::renseigner($unPoint, $libelle, $rayon);
			$this->cote = $cote ;
		}

		public function afficher(){
			return parent :: afficher() . "-" . $this->cote;
		}

		public function getCote(){
			return $this->cote;
		}
		public function setCote($cote){
			$this->cote=$cote;
		}
	}
?>