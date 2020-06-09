<?php
session_start();
if (isset($_SESSION['id']))
      {
        echo  "<form action ='deconnexion.php'><a href='#'><button type='submit' class='btn btn-link'>&nbsp;DECONNEXION&nbsp;</a></button></form>";
        echo "<font color ='white'>Bienvenue à </font>".$_SESSION['nom']." ".$_SESSION['prenom'];
      }
      else
      {
        echo "<a class='btConnexion' href='pageconnexion.php' >&nbsp;CONNEXION&nbsp;</a>";
      }

   ?>
