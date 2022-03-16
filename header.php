<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biliothèquev2</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="forme.css">
    <script type="text/javascript"  src="ouvrirfenetre.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.min.js" integrity="sha512-OvBgP9A2JBgiRad/mM36mkzXSXaJE9BEIENnVEmeZdITvwT09xnxLtT4twkCa8m/loMbPHsvPl0T8lRGVBwjlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    <title>Bibliothèque</title>
    <link href="https://fonts.googleapis.com/css2?family=Kameron&display=swap" rel="stylesheet">
    <?php 
    session_start();
    $isLoggedIn = false;
    if(isset($_SESSION["mail"])){
        $mail=$_SESSION["mail"];
        echo "Bienvenu ".$mail;
        $isLoggedIn = true;
    } 
?>
</head>
<body>
<ul>
    <li><a href="index.php">Home</a></li>
    <?php if($isLoggedIn){ ?><li><a href="catalogue.php">Catalogue</a></li><?php } ?>
    <li><a href="senrengistrer.php">S'inscrire</a></li>
    <li><a href="seconnecter.php">Se connecter</a></li>
    <li><a href=""></a>Panier</li>
</ul>
<?php if($isLoggedIn){ ?><button><a href="deconnexion.php">Se Deconnecter</a></button><?php } ?>
