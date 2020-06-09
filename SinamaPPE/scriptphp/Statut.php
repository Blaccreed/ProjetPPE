<?php
session_start();
if (isset($_SESSION['id']))
      {
        echo  "<a class='btDeconnexion' href='deconnexion.php' >&nbsp;DECONNEXION&nbsp;</a>";
        echo "<font color ='white'>Bienvenue </font>".$_SESSION['nom']." ".$_SESSION['prenom'];
      }
      else
      {
        echo "<a class='btConnexion' href='pageconnexion.php' >&nbsp;CONNEXION&nbsp;</a>";
      }
  ?>
