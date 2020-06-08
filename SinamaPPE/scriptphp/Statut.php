<?php
session_start();
if (isset($_SESSION['id']))
      {
        echo  "<a class='btDeconnexion' href='pageconnexionsinama.php' >&nbsp;DECONNEXION&nbsp;</a>";
        echo "<font color ='red'>Bienvenue à </font>".$_SESSION['nom']." ".$_SESSION['prenom'];
      }
      else
      {
        echo "<a class='btConnexion' href='pageconnexion.php' >&nbsp;CONNEXION&nbsp;</a>";
      }
   ?>
