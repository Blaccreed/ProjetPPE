<?php

	$mysqli = new mysqli('localhost','root','root','sinama');
	if($mysqli->connect_error)
	{
		die("Connection failed:". $conn->connect_error);
	}
?>
<?php
$couleur=$_POST['couleur'];
?>
<?php
	$sql="SELECT titre, duree, numSalle, image, description, genre, realisateur FROM film";
	$result= $mysqli->query($sql);
	while($donnees= $result->fetch_assoc())
	{
		echo 'affichage image';
		$ligneimage="<img src='../imagedivers/".$donnees["image"]."' class='card-img' alt='...'>";
    echo $ligneimage;
		//echo  $donnees["titre"]." ".$donnees["duree"]." ".$donnees["numSalle"]." ".$donnees["image"]." ".$donnees["description"]." ".$donnees["genre"]." ".$donnees["realisateur"]."</br>";
	}
?>
