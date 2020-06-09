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
	$sql="SELECT image FROM film";
	$result= $mysqli->query($sql);
	while($donnees= $result->fetch_assoc())
	{
		echo $donnees["image"]."</br>";
	}
?>
