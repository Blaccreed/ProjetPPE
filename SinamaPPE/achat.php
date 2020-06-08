<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="pageAchatBillet.css" >
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

<h1 class="titre">Achat de votre billet</h1>
</div>

<CENTER>
  <div class="card mb-3" style="max-width: 70%; margin-top: 80px; margin-bottom: 0px;"> <!-- case avec resume de ce qu'on achete -->
  <div class="row no-gutters">
    <div class="col-md-4" style="width: 18rem;">
      <img src="imagedivers/nightmareisland.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Billet choisi</h5>
        <p class="card-text">Vous avez choisi le film Nightmare Island.</p>
        <li class="list-group-item"> -4 personnes</li>
        <li class="list-group-item">-pour le 30/12/2000</li>
        <li class="list-group-item">-durée 90 min</li>
      </div>
    </div>
  </div>
  <div class="card-body">
    <a href="pagefilms.php" class="card-link">Changer</a>
  </div>
 </div>

  <div class="card" style="max-width: 70%; margin-top: 0px;"> <!-- case avec mode de payement -->
    <div class="card-body">
        <h5 class="card-title">Mode de payement</h5>
        <p class="card-text">Choisisez parmi les modes de payement suivants</p>

        <li class="list-group-item"> <!-- check box 1 -->
          <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1"> Carte Bancaire </label>
          <img src="imagedivers/CarteB.png" class="card-img" style="width: 5rem;">
        </div>
        </li>

        <li class="list-group-item">   <!-- check box 1 -->
          <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1"> PayPal </label>
          <img src="imagedivers/Paypal.png" class="card-img" style="width: 5rem;">
        </div>
        </li>


      </div>
  </div>

<a href="accueil.php"><button type="button" class="btn btn-success"style="width: 5rem; margin-top: 30px; margin-bottom: 80px;">Valider</button></a>

</CENTER>

  </body>
</html>
