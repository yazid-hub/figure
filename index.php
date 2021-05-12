<?php
	require_once ("Rectangle.class.php"); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Gestion POO en PHP</title>
</head>
<body>
	<center>
		<h1> Gestion des figures en POO / PHP </h1>

		<form method = "post">
		<select name ="figure">
			<option value ="cercle"> Cercle </option>
			<option value ="carre"> Carré </option>
			<option value ="rectangle"> Rectangle </option>
		</select>
		<input type = "submit" name ="generer" value ="Générer formulaire">
		</form>
		<?php 
		if (isset ($_POST["generer"]))
		{
			switch ($_POST['figure'])
			{
				case "cercle" : echo "<form method = 'post'>
								Point x : <input type ='text' name ='x'></br> 
								Point y : <input type ='text' name ='y'></br> 
								Rayon : <input type ='text' name ='rayon'></br> 
								<input type = 'submit' name ='valider1' value ='Valider'>
								</form>
								"; break; 
				case "carre" : echo "<form method = 'post'>
								Point x : <input type ='text' name ='x'></br> 
								Point y : <input type ='text' name ='y'></br> 
								Côté Carré : <input type ='text' name ='cote'></br> 
								<input type = 'submit' name ='valider2' value ='Valider'>
								</form>
								"; break; 
				case "rectangle" : echo "<form method = 'post'>
								Point x : <input type ='text' name ='x'></br> 
								Point y : <input type ='text' name ='y'></br> 
								Largeur : <input type ='text' name ='largeur'></br> 
								Longueur : <input type ='text' name ='longueur'></br> 
								<input type = 'submit' name ='valider3' value ='Valider'>
								</form>
								";break; 
			}
		}

		?>
		<?php

		if (isset ($_POST['valider1']))
		{
			$unCercle = new Cercle (); 
			$unPoint = new Point(); 
			$unPoint->renseigner(array("x"=>$_POST['x'], "y"=>$_POST['y'])); 
			$unCercle->renseigner ($unPoint, "Cercle", $_POST['rayon']); 
			echo $unCercle->afficher (); 
			echo "<br/>Perimetre ".$unCercle->perimetre(); 
			echo "<br/>Surface ".$unCercle->surface(); 
		}
		else if (isset ($_POST['valider2']))
		{
			echo "<br/>______________________ <br/>"; 
			$unCarre = new Carre (); 
			$unPoint = new Point(); 
			$unPoint->renseigner(array("x"=>$_POST['x'], "y"=>$_POST['y'])); 
			$unCarre->renseigner ($unPoint, "Carré", $_POST['cote']); 
			echo $unCarre->afficher (); 
			echo "<br/>Perimetre ".$unCarre->perimetre(); 
			echo "<br/>Surface ".$unCarre->surface(); 
		}else if (isset ($_POST['valider3']))
		{
			echo "<br/>______________________ <br/>"; 
			$unRectangle = new Rectangle (); 
			$unPoint = new Point(); 
			$unPoint->renseigner(array("x"=>$_POST['x'], "y"=>$_POST['y']));
			$unRectangle->renseigner ($unPoint, "Rectangle", $_POST['largeur'], $_POST['longueur']); 
			echo $unRectangle->afficher (); 
			echo "<br/>Perimetre ".$unRectangle->perimetre(); 
			echo "<br/>Surface ".$unRectangle->surface(); 
		}
		
		?>
	</center>
</body>
</html>