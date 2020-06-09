
<?php
session_start();
session_destroy();
header('Location: pageaccueil.php');
exit;
?>
