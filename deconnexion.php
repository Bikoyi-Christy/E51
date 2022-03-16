<?php
session_start();
session_destroy();
echo 'Vous venez de vous déconnecter. <a href="index.php">Retour</a>';
?>