<?php
require_once ("Cercle.class.php"); 
class Carre extends Cercle {
	//aucun attribut
	public function __construct()
	{
		parent :: __construct () ;
	}

	// les méthodes renseigner / affficher ne seront pas 
	// surchargées car elles seront utilisées comme dans le cercle.

	//les deux méthodes suivantes sont réécrites 
	public function perimetre (){
		return (4 * $this->rayon);
	}
	public function surface (){
		return (pow ($this->rayon, 2) );
	}
}
?>