<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="reservation.css" >
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:300,600' rel='stylesheet' type='text/css'>
    <title>Sinama</title>
  </head>

  <body>
<div class="body_color">  <!-- div pour couleur en haut -->

    <!-- je veux un bouton pour qu'il puisse s'inscrire au dessus de la barre ! -->

 <?php include 'scriptphp/Statut.php'; ?>
<img src="imagedivers/logociné2.png" alt="" width="200" />

   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



    <!-- la navbar de l'accueil du site -->
<?php include 'scriptphp/bandeau.php';?>

</div> <!-- div pour couleur en haut -->



<div class="corpPRIN">

<h1 class="titre">Reservez votre séance</h1>
</div>

<CENTER>

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


<a href="pagevalidation.php"><button type="button" class="btn btn-success"style="width: 5rem; margin-top: 30px; margin-bottom: 80px;">Valider</button></a>

</CENTER>

  </body>
</html>
