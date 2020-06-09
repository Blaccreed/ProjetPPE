<?php
session_start();
session_unset();
session_destroy();
echo "tu as été déconnecté";
header('Location: pageconnexion.php');
?>
