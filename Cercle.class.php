<?php
	require_once ("figure.class.php");
	require_once ("I_figure.interface.php");  
	class Cercle extends Figure implements I_Figure{

		protected $rayon ;

	public function __construct(){
		parent :: __construct () ;
		$this->rayon = 0;
	}

	public function renseigner ($unPoint, $libelle, $rayon)
	{

		parent::renseigner($unPoint, $libelle);
		$this->rayon = $rayon ;
	}
	//implémenter la méthode abstraite afficher 
	public function afficher(){
		return $this->libelle.":".$this->rayon."-".$this->unPoint->afficher ();  
	}
	//implémenter les méthodes de l'interface 
	public function perimetre (){
		return (2 * pi() * $this->rayon);
	}
	public function surface (){
		return (pow ($this->rayon, 2) * pi() ); 
	}
	public function  getRayon(){
		return $this->rayon;
	}

	public function setRayon($rayon){
		$this->rayon=$rayon;
	}

}

?>