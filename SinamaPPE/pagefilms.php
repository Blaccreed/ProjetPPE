<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="pageacceueilsinama.css" >
    <link href='http://fonts.googleapis.com/css?family=Montserrat:300,600' rel='stylesheet' type='text/css'>
    <title>Sinama</title>
  </head>

  <body style="background-color:#869F6F;">

    <div style="background-color:black;">
    <!-- je veux un bouton pour qu'il puisse s'inscrire au dessus de la barre ! -->
<?php include 'scriptphp/Statut.php'; ?>
<img src="imagedivers/logociné2.png" alt="" width="200" />

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <?php
        include 'scriptphp/bandeau.php';
      ?>
</div>

<p style=" width: 900;font-size: 30px;text-align: center;  margin-top: 1%; color: black; margin-bottom: 0px;"> <?php    echo "Soyez au courant des films sortis recement et faites votre reservation";?> </p>
    <!-- la navbar de l'accueil du site -->



    <table class="table table-dark" style="margin-right: 20px; margin-top: 70px; margin-bottom: 100px;">
      <thead>
        <tr>
          <th scope="col">FILMS</th>
          <th scope="col">Nom</th>
          <th scope="col">Reservation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="width: 18rem;"><img src="imagedivers/nightmareisland.jpg" class="card-img" alt="..."></td>
          <td >Nightmare Island</td>
          <td ><a href="achat.php"><button type="button" class="btn btn-success"style="width: 8rem; margin-top: 0px; margin-bottom: 80px;">Reserver</button></a></td>
        </tr>
        <tr>
          <td style="width: 18rem;"><img src="imagedivers/underwater2.jpg" class="card-img" alt="..."></td>
          <td>UndeWater 2</td>
          <td><a href="achat.php"><button type="button" class="btn btn-success"style="width: 8rem; margin-top: 0px; margin-bottom: 80px;">Reserver</button></a></td>
        </tr>
        <tr>
          <td style="width: 18rem;"><img src="imagedivers/princeoublie.jpg" class="card-img" alt="..."></td>
          <td>Prince Oublié</td>
          <td><a href="achat.php"><button type="button" class="btn btn-success"style="width: 8rem; margin-top: 0px; margin-bottom: 80px;">Reserver</button></a></td>
        </tr>
      </tbody>
    </table>
<?php
    echo "";

?>

</body>
</html>
